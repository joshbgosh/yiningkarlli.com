<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv='Content-Type' content='application/xhtml+xml; charset=utf-8' />
		<title>YINING KARL LI | Spring 2015 Demoreel</title>
		<?php
			include '../includes/header.php';
		?>
	</head>
	<?php
		include '../includes/navigation.php';
	?>
	<body>
		<div class="content">			
			<div class="title">Spring 2015 Demoreel</div>	
			<p><iframe src="http://player.vimeo.com/video/123704915?color=ffffff" width="900" height="506" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			<br><br>
			
			<div class="title">Breakdown</div>	
			<div class="subtitle"><b>1. Takua Render</b>: A physically-based photorealistic global illumination renderer. 2012-2015.</div>
			<p>Takua Render is a physically-based photorealistic 3D renderer I am writing from scratch in C++. Takua is built from the ground up as a global illumination renderer supporting global illumination through several different light transport algorithms, including unidirectional pathtracing with direct light sampling, Veach-style bidirectional pathtracing with multiple importance sampling, progressive photon mapping, and vertex connection and merging. The renderer is still a work in progress, but already supports a large number of features, which are fully listed <a href="http://www.yiningkarlli.com/projects/takuarender/">here</a>. The ultimate objective of this project is to learn about building an advanced production-ready renderer.
			<p>Takua Render has a highly modular, extensible architecture supporting plugins for many renderer subsystems. The architecture of the renderer achieves highly efficient parallelism through task-based concurrency and <a href="https://www.threadingbuildingblocks.org/">Threaded Building Blocks</a>. Much of this model is inspired by concepts from <a href="https://vimeo.com/49718712">Rob Pike and the GoLang team</a>, and by Eisenacher et al.'s <a href="https://disney-animation.s3.amazonaws.com/uploads/production/publication_asset/70/asset/Sorted_Deferred_Shading_For_Production_Path_Tracing.pdf">Sorted Deferred Shading for Production Path Tracing</a> paper. Integrators are written to be re-entrant and broken up into numerous smaller tasks, which are mapped onto the TBB task graph. Partial CUDA acceleration is supported through select plugins.
			<p>This project has been under active development since 2012 and is currently my primary focus. Takua Render is also currently used at Cornell University's Program of Computer Graphics as a research renderer.
			<p>Here is a list of the renders that appear in the reel, in order of appearance, along with notes on each image. Unless otherwise noted, all shading, textures, and models are my own. I also lit and staged every image myself.
			<p><b>Room</b>: A highly complex scene containing many objects and complex materials, rendered using vertex connection and merging. All light sources are behind glass (one light source off-camera behind glass windows, one light source in a glass bulb inside of the lamp), making light transport in this scene extremely difficult. The chess pieces, rainbow notebooks, floorboards, and teacups are all instanced geometry. Almost all objects use layered shading and bump mapping. The poster on the back wall is by <a href="http://alice-yang.tumblr.com/">Alice Yang</a>, the two main furniture pieces are by <a href="http://odesd2.com.ua/ru">ODESD2</a>, the flowers are a heavily modified version of a model by <a href="https://www.behance.net/andi_mix">Andrei Mikhalenko</a>, and the Braun SK4 record player model is by <a href="bertrand-benoit.com">Bertrand Benoit</a>.
			<p><b>Still Life</b>: A complex scene featuring numerous complex materials, rendered using vertex connection and merging. The ground glass, chessboard frame, notebook covers, and PBRT book cover all use Takua Render's layered material system for complex detail such as fingerprint and dust layers. Many objects are also bump mapped. The notebooks and chess pieces are all instanced geometry. More information can be found in <a href="http://blog.yiningkarlli.com/2015/03/bsdf-system.html">this blog post</a>.
			<p><b>Flowers (three images)</b>: A modified version of a model by <a href="https://www.behance.net/andi_mix">Andrei Mikhalenko</a>, with baked subdivisions weighing in at nearly a quarter of a billion triangles. Rendered with bidirectional pathtracing and depth of field. The flower petals use a double-sided shader to simulate a translucent effect without the full cost of subsurface scattering, and each flower petal's textures has a random hue offset for variation. Fitting this scene in memory required using a special half-precision float mode for storing geometry information. More information can be found in <a href="http://blog.yiningkarlli.com/2015/02/flower-vase-render.html">this blog post</a>.
			<p><b>Venus (three images)</b>: A model by <a href="https://vimeo.com/user10815579">Zia Zhu</a> with approximately two million triangles, lit by a single small, distance off-camera light source. Rendered using unidirectional pathtracing with direct light importance sampling. Rendered with Takua Render's older CUDA mode. More information can be found in <a href="http://blog.yiningkarlli.com/2013/04/giant-mesh-test.html">this blog post</a>.
			<p><b>Specular-Diffuse-Specular Bunny</b>: A glass Stanford Bunny containing multiple colored spherical lights and diffuse spheres, rendered with bidirectional pathtracing. This scene is dominated by difficult light transport, as a large quantity of specular-diffuse-specular, or SDS, paths exist in this scene. Everything outside of the bunny is lit with caustics from inside of the bunny. More information can be found in <a href="http://blog.yiningkarlli.com/2015/02/bidirectional-pathtracing-integrator.html">this blog post</a>.
			<p><b>Multiple Importance Sampling Scene</b>: A recreation of the famous <a href="https://graphics.stanford.edu/papers/veach_thesis/">Eric Veach thesis multiple importance sampling test scene</a> with several varying-size sphere lights and several varying-gloss metal panels. This scene cannot be rendered efficiently without multiple importance sampling; the first image shows the ground truth render, the second image shows importance sampling by BSDF only, the third image shows importance sampling by light only, and the final image shows the better result achieved with the same amount of computation via multiple importance sampling. More information can be found in <a href="http://blog.yiningkarlli.com/2015/02/multiple-importance-sampling.html">this blog post</a>.
			<p><b>Ground Glass Globe</b>: A globe with a complex layered shader consisting of a ground glass base layer, a mirror finish landmasses layer, and a dust/fingerprints/scratches layer. Rendered using bidirectional pathtracing with hierarchical adaptive sampling. Takua Render's hierarchical adaptive sampler tracks variance and can redirect samples towards higher variance regions and automatically detect a good stopping point for the render. The 500% crop comparison with a non-adaptive sampler render shows that the adaptive sampler can arrive at the same quality level as a non-adaptive sampler with significantly less computational cost. More information can be found in <a href="http://blog.yiningkarlli.com/2015/03/adaptive-sampling.html">this blog post</a>.
			<p><b>Ground Glass Globe Closeup</b>: A closeup shot of the ground glass globe with depth of field. Rendered using vertex connection and merging.
			<p><b>Physically Based Rendering Book</b>: The famous Physically Based Rendering book, rendered with my physically based renderer. Rendered using bidirectional pathtracing.
			<p><b>Standing Chessboard</b>: A ground glass chessboard with a wooden frame and mirrored lettering. Rendered using bidirectional pathtracing.
			<p><b>Chessboard and Pieces</b>: The same chessboard as before, in addition to ground glass chess pieces. Adaptive firefly suppression was used to automatically detect, supersample, and clamp fireflies. Rendered using bidirectional pathtracing.
			<p><b>Glass Stanford Dragon in Cornell Box</b>: Two famous rendering test models in the same scene. Note the extremely complex caustics on the floor of the box caused by the glass dragon. These caustics are extremely difficult to resolve with naive unidirectional pathtracing. Rendered using vertex connection and merging.
			<p><b>Blue Metal XYZRGB Dragon in Cornell Box</b>: Another two famous rendering test models in the same scene. Note the caustics cast by the dragon's glossy blue metal material. These caustics are extremely difficult to resolve with naive unidirectional pathtracing. Rendered using vertex connection and merging.
			<p>For more information about this project, see the <a href="http://www.yiningkarlli.com/projects/takuarender/">Takua Render project page</a>.
			
			
			<div class="subtitle"><b>2. Ariel Fluid Simulator</b>: A PIC/FLIP fluid simulation with OpenVDB and Houdini integration. 2013-2015.</div>
			<p>Ariel is an experimental fluid simulator I wrote from scratch in C++ to explore the popular PIC/FLIP fluid solver algorithm and to evaluate OpenVDB. Ariel supports arbitrary animated meshes as fluid starting volumes and as solid obstacles, and supports exact fluid-solid boundary finding through an integrated raycasting engine. Meshing can either be done natively in the simulator through <a href="http://www.openvdb.org/">OpenVDB</a>, or through Houdini integration via <a href="http://www.disneyanimation.com/technology/partio.html">Partio</a>. Ariel is multithreaded using <a href="https://www.threadingbuildingblocks.org/">Threaded Building Blocks</a>.
			<p>This project has been under active development since 2013, although it is something more of a sandbox/hobby compared to the amount of focus I put into Takua Render.
			<p>Here is a list of the animations that appear in the reel, in order of appearance. All work is my own.
			<p><b>Waterfall Test</b>: A scenario where fluid is constantly added to the scene and cascades down a wall in a waterfall. This simulation was run on a 64x64x64 grid. Whiter particles indicate faster velocity and lower density, while bluer particles indicate slower velocity and higher density. More information can be found in this <a href="http://blog.yiningkarlli.com/2014/01/flip-simulator.html">blog post</a>.
			<p><b>Dam Break Test</b>: A scenario where starts in a large fixed volume and flows to fill a space. This simulation was run on a 128x64x64 grid. Whiter particles indicate faster velocity and lower density, while bluer particles indicate slower velocity and higher density. More information can be found in this <a href="http://blog.yiningkarlli.com/2014/01/flip-simulator.html">blog post</a>.
			<p><b>Dam Break Test Rendered</b>: The same dam break simulation as before, with meshing through OpenVDB and Houdini and rendered with Vray. This animation was rendered with Vray since at the time, my own renderer was not ready. This animation will be re-rendered using Takua Render soon. More information can be found in this <a href="http://blog.yiningkarlli.com/2014/02/flip-meshing-pipeline.html">blog post</a>.	
			<p>For more information about this project, see the <a href="http://www.yiningkarlli.com/projects/arielflip/">Ariel Fluids project page</a>.
			
			<div class="subtitle"><b>For more of my work</b>: See my <a href="http://www.yiningkarlli.com/demoreel/fall2012/">Fall 2012 reel</a>.</div>
			
			</body>
</html>






