<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv='Content-Type' content='application/xhtml+xml; charset=utf-8' />
		<title>YINING KARL LI | Fall 2012 Demoreel</title>
		<?php
			include '../../includes/header.php';
		?>
	</head>
	<?php
		include '../../includes/navigation.php';
	?>
	<body>
		<div class="content">			
			<div class="title">Fall 2012 Demoreel</div>	
			<div class="subtitle">Please note that this an old, out of date reel. My current reel can be found <a href="http://www.yiningkarlli.com/demoreel">here</a>.</div>
			<p><iframe src="http://player.vimeo.com/video/50127144" width="900" height="506" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			<br><br>
			
			<div class="title">Breakdown</div>	
			<div class="subtitle"><b>1. Multiple Interacting Jellos</b>: A Mass-Spring System Based Jello Simulator. C++, Python. 2012.</div>	
			<p>This project began using a minimal framework supplied for the course CIS563: Physically Based Animation. The base framework included a simple scene description loader and bookkeeping code. On top of the framework, I implemented forward Euler, midpoint, and RK4 numerical integration schemes, particle-spring forces, support for shear, structural, and bend springs, collision detection against cubes, spheres, cylinders, and loaded OBJ meshes, KD-tree acceleration for collision detection, and support for multiple soft body objects colliding with each other, which enabled multiple jello cubes to interact with each other. The KD-tree acceleration and OBJ mesh support was enabled through ObjCore, a mesh and spatial acceleration structure library I wrote from scratch for use in multiple projects. In addition to core physical interaction features in the simulator, I also implemented support for exporting simulations to Maya for shading, lighting, and integration into scenes. The core physics simulator is implemented in C++, and Maya integration is achieved through Python. The core physics simulator runs in near real-time for a single jello cube, and simulation times scale approximately linearly with the number of additional jello cubes in the scene. All final renders were rendered with Vray from Maya.
			<p>A significant challenge in this project came from numerical stability issues: finding simulation conditions that resulted in reasonably stable simulations required much finessing and experimentation. Both clips show simulations that utilized the more stable, but slightly slower RK4 integration scheme. In the first clip depicting jellos interacting with each other and a glass pitcher, the simulation remains stable for tens of thousands of frames. However, in the second clip depicting jellos interacting with a bowl and settling on a non-planar surface, the simulation destabilizes after a few thousand frames have elapsed unless non-physically based tricks such as forced velocity dampening are used. Initially, another major issue was speed: simulating large numbers of jellos proved to be incredibly slow, but accelerating collision detection with my KD-tree library provided a major performance boost, to the point where simulations with a single jello against large number of meshes can run in near real-time. Possible future extensions to this project include using tetrahedralized meshes as a basis for non-cube shaped jello, splitting and slicing jello, and more. 
			<p>For more information on this project, please go <a href="http://www.yiningkarlli.com/projects/jello/">here</a>.
			<p>
			
			<div class="subtitle"><b>2. Multiple Interacting Fluids</b>: A Semi-Lagrangian Fluid Simulator. C++. 2012. A collaboration with <a href="http://danknowlton.com/">Dan Knowlton</a>.</div>	
			<p>This project implements elements of the 2006 paper "Multiple Interacting Fluids" by Losasso et. al., and incorporates code samples from Christopher Batty, Robert Bridson, and Paul Bourke. This project simulates liquid fluids in a semi-lagrangian fashion by advecting particles through a MAC-grid structure and solving fluid states via a pre-conditioned conjugate gradient solver. The simulator supports multiple liquids interacting and mixing each other, represents surfaces as level-sets, supports Navier-Stokes incompressibility, and viscosity. The system also features mesh reconstruction through both marching cubes and a modified particle level-set method, custom scene loading, OBJ mesh import, and OBJ mesh export. Dan and I both did work on all major components of the system, but my main focus was on multiple liquid interaction and mixing, OBJ level-set construction, modified particle level-set surface reconstruction, and Maya integration. The MAC-grid structure, pre-conditioned conjugate gradient solver, and Navier-Stokes incompressibility solution were all derived from a combination of Christopher Batty's Fluid3D system and two separate smoke simulation systems that Dan and I had written for previous projects. Simulation times varied depending on the complexity of the simulations and ranged from seconds to hours per time step. Final Maya integration was achieved via Python, and all final renders were rendered with Vray from Maya. 
			<p>The clip showing red fluid dropping into a wineglass utilized marching cubes for mesh reconstruction, which resulted in some temporal coherence problems. We attempted to smooth out the resultant mesh sequence by importing the sequence into Maya and running a series of mesh smoothing and vertex averaging operations, which resulted in a smoother look but still retained some noise and artifacting problems. The clip showing fluid blobs in the shape of the Stanford Dragon demonstrate what our simulations look like once imported into Maya. The clip showing two separately colored fluid blobs dropping onto a Stanford Bunny used our modified particle level-set mesh reconstruction method, which resulted in noticeably smoother and more temporally stable meshes, but also still resulted in some artifacting problems. We are continuing to investigate better mesh reconstruction methods. Other possible directions for improvement include gas/liquid interaction, rigid body interaction, physically based drying and evaporation, alternative fluid simulation schemes such as FLIP or SPH, using OpenVDB for the level-set representation, and more. 
			<p>For more information on this project, please go <a href="http://www.yiningkarlli.com/projects/multifluid/">here</a>.
			<p>
			
			<div class="subtitle"><b>3. Smoke Simulation/Volume Renderer</b>: Semi-Lagrangian Smoke Simulation and Volumetric Rendering. C++, Python. 2011/2012.</div>	
			<p>This project has two components: a volumetric renderer, and a physically based smoke simulation system. The volumetric renderer is written from scratch and renders voxel volumes through raymarching and density accumulation/light attenuation via Beer's Law. The volumetric renderer supports an arbitrary, theoretically infinite number of multicolored point light sources. The renderer can load in pre-generated volumes through a simple flat text format, or can generate volumetric clouds through simplex/perlin noise sampling, which can be guided and restricted with spheres defining volumes to generate clouds within. The first clip demonstrates a procedurally generated cloud produced through simplex noise sampling, and contains 10 light sources provide primary, bounce, and rim lighting on the cloud. The volume renderer also supports self-illumination from the voxel volume, which allows for a pseudo-blackbody illumination effect, as demonstrated in the second clip.
			<p>The smoke simulation system is based on framework code supplied for the course CIS563: Physically Based Animation. The framework code provided a base MAC grid system, on top of which I implemented velocity, temperature, and density advection and projection, bouyancy forces, vorticity confinements, a preconditioned partial conjugate gradient solver, and Navier-Stokes incompressability. My implementation was based primarily on Robert Bridson's book, Fluid Simulation for Computer Animation. I also integrated the smoke simulator with my volumetric renderer and included support for the pseudo-blackbody illumination effect. Both the renderer and the smoke simulator were implemented entirely in C++. Integration between the two systems was achieved with a combination of C++ for volume export/import, and Python for render scripting. The third clip for this project demonstrates smoke simulating on a 100x100x100 cell MAC grid, rendered in the volume renderer with pseudo-blackbody illumination.
			<p>Future work on this project includes parallelizing the volume renderer with CUDA, since the current implementation is entirely CPU based and fairly slow (minutes per frame). The smoke simulation system could potentially also be parallelized through CUDA. While the pseudo-blackbody illumination system creates a reasonably decent looking self-glowing look, a proper physically based blackbody illumination system would be a fun addition to the renderer. Using OpenVDB to support sparse voxel sets could provide for simultaneous performance boosts and support for significantly larger volumes, as current volume sets can get memory bound very quickly when scaled up in each dimension. Other possible future extensions for the smoke simulation system also include using OpenVDB as a backend for the MAC grid, sparse smoke representations, interaction with solid objects, target driven smoke, integration with the Multiple Interacting Fluids project, and more. 
			<p>For more information on this project, please go <a href="http://www.yiningkarlli.com/projects/smoke/">here</a>.
			<p>
			
			<div class="subtitle"><b>4. TAKUA/Avohkii Render</b>: A Pathtracing Global Illumination Renderer. C, C++, CUDA. 2012.</div>	
			<p>TAKUA/Avohkii Render is the name of my personal global illumination renderer. The eventual goal of this project is to build a renderer with sufficient speed, quality and feature support to serve as a production renderer. TAKUA/Avohkii is written entirely from scratch and uses physically based brute force pathtracing to produce photorealistic images. The renderer is a hybrid CPU/GPU system and has both CPU and GPU based pathtracing implementations. Both the CPU and GPU cores support full indirect illumination with an arbitrary number of area lights, sphere and cube primitives with arbitrary transformations, support for diffuse lambert, specular, reflective, refractive, transmissive/absortive materials, and full brute-force subsurface scattering. Both the CPU and GPU cores also support loading and rendering multiple frames for animation. The CPU core also supports OBJ mesh loading and rendering, while the GPU core does not yet have this feature but will soon. Both the CPU and GPU cores also support supersampled antialiasing and depth of field. The renderer also incorporates a KD-tree spatial acceleration structure to speed up intersection testing in raytracing. The KD-tree and OBJ Mesh support come through ObjCore, a mesh and spatial acceleration structure library I wrote from scratch for use in multiple projects. 
			<p>The first clip demonstrates an animated scene rendered using the GPU core of TAKUA/Avohkii. The scene and animated in Maya and exported to a custom scene description format made for the renderer. Each frame contains 5000 samples per pixel and took only two minutes to render on a NVIDIA Geforce GTX 480, thanks to the massively parallel nature of the GPU core. The still images demonstrating interesting BRDFs on the Stanford Dragon were rendered with the CPU core, and are completely indistinguishable in visual quality from renders from the GPU core, although the CPU renders take significantly longer. The CPU core is implemented in C and C++, while the GPU core is implemented in a combination of CUDA, C, and C++. 
			<p>Since this project aims to eventually build a production quality renderer, a large amount of work remains to be done. Immediate goals include support for texture loading, bump and displacement mapping, translational motion blur, bidirectional pathtracing, OBJ mesh support in the GPU core, a system for distributing work between the GPU and CPU cores, support for volumetric rendering, an improved stackless KD-tree traversal system, and other GI algorithms such as progressive photon mapping, Metropolis Light Transport, and Multiresolution Radiosity Caching. 
			<p>For more information on this project, please go <a href="http://www.yiningkarlli.com/projects/takuarender/">here</a>.
			<p>
		
			<div class="subtitle"><b>5. Interactive GPU Pathtracer</b>: An interactive renderer. C++, CUDA. 2012. A collaboration with <a href="http://www.peterkutz.com">Peter Kutz</a>.</div>	
			<p>This project implements an interactive pathtracing renderer entirely in CUDA. Implemented entirely from scratch, the Interactive GPU Pathtracer served as a final project in CIS565: GPU Programming for Peter and me. This project served as a experimental platform and tech demo for parallel raytracing on the GPU. Although rather simple by itself, this project provided numerous lessons that both Peter and I have since applied to our separate production renderer projects. For the Interactive GPU Pathtracer, I was responsible for implementing parallel raycasting, preliminary parallel intersection testing, OBJ mesh loading and brute force, unaccelerated intersection testing against meshes, supersampled antialiasing, and interactive camera controls. The final codebase for this project has since provided part of the basis for a new two-week project assignment in future versions of CIS565.
			<p>For more information on this project, please go <a href="http://www.yiningkarlli.com/projects/gpupathtracer/">here</a>.
			<p>
				
			<div class="subtitle"><b>6. Kitchen Test Scene</b>: An exercise in modeling, shading, lighting, and compositing. Maya, Vray, After Effects. 2012.</div>	
			<p>Unlike the majority of my work, this project was non-technical and served as a purely artistic exercise. The intent of this project was to practice non-coding parts of a typical computer graphics pipeline, such as modeling, shading, and lighting. I modeled, shaded, lit, rendered, and composited everything in this project. All of the textures used in this scene were either derived from reference photos I took, or derived from online images modified in Photoshop. Subtle bump mapping is used extensively to provide extra detail; displacement mapping is not used at all in order to lower the memory overhead needed to render the scene. Lighting is provided by a combination of Vray's physical sun model and a large number of area lights positioned overhead to give a daylight illumination look. The entire scene was rendered using Vray. Global illumination was provided through a combination of Vray's irradiance caching and "light map" (a modified photon map) systems. Each frame took between seven and ten minutes to render at 1080p with full global illumination on a quad-core Intel Xeon system. The bloom and depth of field are post-processed effects created in After Effects, which was also used for color correction. 
			<p>In the future, I aim to use this project as a reference for comparing my TAKUA/Avohkii renderer project to. My eventual goal is to be able to render out the entire kitchen scene in my own renderer, and compare the result to the Vray result. Additionally, this same set was used as an environment for testing Maya integration for my Multiple Interacting Jellos project. 
			<p>
			
			<div class="subtitle"><b>For more of my work</b>: See my <a href="http://www.yiningkarlli.com/demoreel/spring2011/">Spring 2011 reel</a>.</div>
			
			</body>
</html>






