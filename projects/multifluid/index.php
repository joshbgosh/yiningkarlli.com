<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv='Content-Type' content='application/xhtml+xml; charset=utf-8' />
		<title>YINING KARL LI | Multiple Interacting Fluids</title>
		<?php
			include '../../includes/header.php';
		?>
		<link rel='stylesheet' href='../projects.css' type='text/css' media='screen' />
	</head>
	<?php
		include '../../includes/navigation.php';
	?>
	<body>
		<div class="content">
			<div class="title">Multiple Interacting Fluids</div>			
			<div class="subtitle">A Semi-Lagrangian fluid simulator supporting multiple fluids, in collaboration with <a href="http://www.danknowlton.com">Dan Knowlton</a></div>
			
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<a href="http://www.yiningkarlli.com/projects/multifluid/images/bunnytest.png"><img src="http://www.yiningkarlli.com/projects/multifluid/images/bunnytest.png" width="900" height="506" ></a>
				<div class="caption">A frame from our simulator of a simulation involving a red and blue liquids cascading over the Stanford Bunny. All simulation work was done entirely with our simulator, rendering was done with Vray.</div>
				</div>
			</div>			
			
			<div class="projecttextrow">
				<div class="subtitle">Overview</div>
				<p>For our spring 2012 <a href="https://www.seas.upenn.edu/~cis563/Spring2012/">CIS563: Physically Based Animation</a> final project, my friend Dan Knowlton and I developed a liquid simulator, nicknamed "Project Chocolate Syrup". Based on the paper <a href="http://dl.acm.org/citation.cfm?id=1141960">Multiple Interacting Liquids</a> by Losasso et. all, our simulator is capable of simulating multiple liquids with various properties interacting with an environment and with each other. Our system utilizes some base code (listed below), but has been heavily modified, customized, and extended to fit the needs of this project. This project is written entirely in C++.
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Base Code</div>
				<p>Our project utilizes base code from the following sources:
				<p>1. <a href="http://www.cs.columbia.edu/~batty/">Christopher Batty</a>'s Fluid3D framework, <a href="https://github.com/christopherbatty/Fluid3D">available on Github</a>.
				<p>2. <a href="http://www.cs.columbia.edu/~batty/">Christopher Batty</a>'s SDFGen OBJ to signed-distance-field convertor, <a href="https://github.com/christopherbatty/SDFGen">available on Github</a>.
				<p>3. <a href="http://local.wasp.uwa.edu.au/~pbourke/">Paul Bourke</a>'s Marching Cubes example, <a href="http://local.wasp.uwa.edu.au/~pbourke/geometry/polygonise/source/">available here</a>.
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Features</div>
				<div class="projecttextleftbar">
					<p><b>Semi-Lagrangian Fluid Simulation: </b>The simulation works in a semi-lagrangian fashion by advecting particles through a MAC grid structure and solving fluid states using a pre-conditioned conjugate gradient solver much like the one described in <a href="http://www.cs.ubc.ca/~rbridson/">Robert Bridson</a>'s 2007 SIGGRAPH <a href="http://www.cs.ubc.ca/~rbridson/fluidsimulation/">Fluid Simulation Course Notes</a>.
					<p><b>Multiple Liquids: </b>Support for simulating an arbitrary number of distinct liquids simultaneously against both each other and solid objects in a scene.
					<p><b>Level-Set Fluid Representation: </b>The simulator represents the combined fluid surface using level sets built from the particle system.
					<p><b>Incompressability: </b>Supports incompressible liquids by tracking and resolving overlapping particle positions.
					<p><b>Viscosity: </b>Each liquid in the simulation can have its own viscosity settings, allowing for anything from water to toothpaste to be simulated.
					<p><b>Modified Particle Level-Set Method: </b>To extract OBJ meshes from level-sets, we implemented a modified version of the Particle Level-Set Method. Our modified method works by moving helper particles through the level-set to find the liquid surface boundary, and then using the helper particles to create an up-sampled version of the level-set that is then converted to a mesh through marching cubes. 
				</div>
				<div class="projecttextrightbar">
					<p><b>Scene Loading: </b>Uses a custom scene format defining geometry, simulation boundaries, liquids, and liquid properties.
					<p><b>OBJ Mesh Import: </b>Supports importing OBJ meshes and simulating liquids against OBJ mesh objects and boundaries defined by OBJs. Starting liquid volumes can also be defined by OBJs.
					<p><b>OBJ Mesh Sequence Export: </b>Supports exporting the simulation as an OBJ mesh sequence suitable for use in Maya or any other 3D modeling/animation package.
					<p><b>Architecture: </b>Fully cross platform, compiles on OSX and Windows without modification and without external dependencies aside from the C++11 Standard Library itself. Internally includes GLM and stb_image for some linear algebra functions and for image output. Multithreaded using OpenMP.
					<p><b>Interface: </b>Includes a live OpenGL preview mode build using GLUT that displays the simulation as it progresses, with a moveable camera. Images from the live preview can be output alongside OBJ meshes.
				</div>
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Selected Videos</div>
				<br>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<iframe src="http://player.vimeo.com/video/43436713?color=ffffff" width="900" height="506" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				<div class="caption">Two liquids interacting with a mesh of the Stanford Bunny, brought into Maya from our simulator and rendered out with Vray. The two liquids have equal starting volumes and identical viscosities.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<iframe src="http://player.vimeo.com/video/40502967?color=ffffff" width="900" height="506" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>				
				<div class="caption">An early test of bringing fluid meshes into Maya for final rendering. Depicts a red liquid dropping into a wineglass.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<iframe src="http://player.vimeo.com/video/41462347?color=ffffff" width="900" height="506" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>				
				<div class="caption">Three tests demonstrating viscosity inside of our simulator. The first test demonstrates two viscous fluids resisting mixing with each other. The second test demonstrates a highly viscous fluid behaving similarly to a deformable solid body. The third test demonstrates two less viscous fluids flowing on top of each other.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<iframe src="http://player.vimeo.com/video/40341597?color=ffffff" width="900" height="506" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>				
				<div class="caption">Using the Stanford Dragon as a starting fluid volume. The mesh reconstruction system we used in this video predates our current modified particle level-set method based system and instead uses a standard marching cubes approach.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<iframe src="http://player.vimeo.com/video/40280486?color=ffffff" width="900" height="506" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>				
				<div class="caption">OBJs can be loaded in and then converted into signed distance fields which can in turn be used as any other sort of bounding volume. Here we show this functionality by filling a cow with liquid.</div>
				</div>
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Planned Future Improvements</div>
				<p>Although the class that this project was originally developed for has ended, we are planning to continue development with the following features:
				<div class="projecttextleftbar">
					<b>Bouyancy: </b>Support for fluids of differing densities interacting through bouyancy is planned and currently a high priority.
					<p><b>Better Mesh Reconstruction: </b>Implementing the full particle level-set method is being considered
					<p><b>Betted Interaction: </b>Although the current system includes a live preview mode, setting up the simulation system is still quite cumbersome and requires some scripting and coding. We hope to make simulation setup smoother down the road.
					<p><b>Additional Fluids: </b>We hope to add additional fluids such as smoke to the system in the future, but this feature is currently a low priority.
				</div>
				<div class="projecttextrightbar">
					<b>Various Bugfixes: </b>Currently some small glitches with the simulator exist, such as inverted normals in exported meshes. Fixing these problems is currently a high priority.
					<p><b>Maya OBJ Sequence Importing Tool: </b>We developed a simple utility for importing OBJ sequences to Maya, which we aim to release publicly once we have a chance to polish it a bit more.
					<p><b>Animated Scene: </b>Support for animating components of the scene and boundaries for liquids to interact with is planned.
				</div>
			</div>
			<div class="projecttextrow">
				<div class="subtitle">Acknowledgements</div>
				<p>This project would not be possible without the guidance of Dr. <a href="http://www.graphics.cornell.edu/~kiderj/">Joseph T. Kider</a>, the instructor for <a href="https://www.seas.upenn.edu/~cis563/Spring2012/">CIS563</a> in the spring of 2012. We would also like to thank CIS563 TAs <a href="https://sites.google.com/site/tiantianliugraphics/">Tiantian Liu</a> and <a href="http://peterkutz.com/">Peter Kutz</a>. Friends Gabriel Leung, <a href="http://ksuvee.wordpress.com/">Yui Suveepattananont</a>, <a href="http://www.giannic.com/"> Gianni Chen</a>, Xing Du, and Jason Merrin all acted as sounding boards for various ideas and discussed ideas, as well as joined us in late night coding sprints. Our project would not have been possible without the work of <a href="www.cs.ubc.ca/~rbridson/">Robert Bridson</a>, <a href="http://www.cs.columbia.edu/~batty/">Christopher Batty</a>, <a href="http://physbam.stanford.edu/~fedkiw/">Ronald Fedkiw</a>, and <a href="http://www.frankpetterson.com/index.cgi">Frank Losasso</a>. Finally, and most importantly, I have to thank <a href="http://www.danknowlton.com">Dan Knowlton</a> for being a brilliant partner on this project.
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Project Blog Posts</div>
				<p>Our progress updates for Project Chocolate Syrup were posted to our project development blog, <a href="http://chocolatefudgesyrup.blogspot.com/">Project Chocolate Syrup: Simulating Multiple Interacting Fluids</a>. The following posts detail the development of this project. Posts are listed starting with the most recent:
				<div class="projecttextleftbar">
					<p>11. <a href="http://chocolatefudgesyrup.blogspot.com/2012/05/two-fluids-and-bunny.html">Two Fluids and a Bunny</a>	
					<p>10. <a href="http://chocolatefudgesyrup.blogspot.com/2012/05/simulating-viscosity.html">Simulating Viscosity</a>	
					<p>9. <a href="http://chocolatefudgesyrup.blogspot.com/2012/04/maya-integration-test.html">Maya Integration Test</a>
					<p>8. <a href="http://chocolatefudgesyrup.blogspot.com/2012/04/meshes-as-starting-liquid-volumes-and.html">Meshes as Starting Liquid Volumes and Maya Integration</a>
					<p>7. <a href="http://chocolatefudgesyrup.blogspot.com/2012/04/mesh-interactions.html">Mesh Interactions</a>
					<p>6. <a href="http://chocolatefudgesyrup.blogspot.com/2012/04/surface-reconstruction-via-marching.html">Surface Reconstruction via Marching Cubes</a>		
				</div>
				<div class="projecttextrightbar">
					<p>5. <a href="http://chocolatefudgesyrup.blogspot.com/2012/04/multiple-arbitrary-bounding-volumes.html">Multiple Arbitrary Bounding Volumes</a>
					<p>4. <a href="http://chocolatefudgesyrup.blogspot.com/2012/03/bounding-volumes-lesson-1-dont-just.html">Bounding Volumes & Lesson 1: Don't just assume base code is perfect</a>
					<p>3. <a href="http://chocolatefudgesyrup.blogspot.com/2012/03/framework-improvements-and-particles.html">Framework Improvements and Particles with Properties</a>
					<p>2. <a href="http://chocolatefudgesyrup.blogspot.com/2012/03/github-and-windowsosx.html">GitHub and Windows/OSX</a>
					<p>1. <a href="http://chocolatefudgesyrup.blogspot.com/2012/03/project-proposal.html">Project Proposal</a>		
				</div>
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Resources</div>
				<p>In the process of building our simulator, we have drawn upon the following papers, books, and articles. They are listed in no particular order.
				<p><a href="http://dl.acm.org/citation.cfm?id=1141960">Multiple Interacting Liquids</a>: The core basis of our entire project describing methods for simulating multiple liquids interacting with each other, by Frank Losasso et. al. 	
				<p><a href="http://www.cs.ubc.ca/~rbridson/fluidsimulation/">SIGGRAPH 2007 Fluid Simulation Course Notes</a>: An extremely comprehensive set of notes detailing semi-lagrangian based fluid simulation, by Robert Bridson and Matthias Muller-Fischer.
				<p><a href="http://www.cs.ubc.ca/~rbridson/fluidbook/">Fluid Simulation for Computer Graphics</a>: The go-to reference book for fluid simulation, by Robert Bridson.
				<p><a href="http://dl.acm.org/citation.cfm?id=1276502">A Fast Variational Framework for Accurate Solid-Fluid Coupling</a>: A paper describing methods for fluid-solid interactions, by Christopher Batty.
				<p><a href="http://dl.acm.org/citation.cfm?id=641285">A Hybrid Particle Level Set Method for Improved Interface Capturing</a>: Describes the particle level-set method, by Douglas Enright, Ronald Fedkiw, et. al.
				<p><a href="http://local.wasp.uwa.edu.au/~pbourke/geometry/polygonise/">Polygonising a Scalar Field</a>: A description of the marching cubes algorithm, by Paul Bourke
				<p><a href="http://en.wikipedia.org/wiki/Preconditioner">Preconditioner Wikipedia Article</a>: An article summarizing how mathematical preconditioners work.
				<p><a href="http://en.wikipedia.org/wiki/Viscosity">Viscosity Wikipedia Article</a>: An article describing the physical and mathematical principles of fluid viscosity.
			</div>
						
		</div>
		</div>
	</body>
</html>





