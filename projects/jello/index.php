<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv='Content-Type' content='application/xhtml+xml; charset=utf-8' />
		<title>YINING KARL LI | Multiple Interacting Jellos</title>
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
			<div class="title">Multiple Interacting Jellos</div>			
			<div class="subtitle">A mass-spring system designed to simulate multiple interacting blocks of jello</div>
			
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<a href="http://www.yiningkarlli.com/projects/jello/images/jello_03.png"><img src="http://www.yiningkarlli.com/projects/jello/images/jello_03.png" width="900" height="506" ></a>
				<div class="caption">A frame from a simulation of four jello cubes interacting with each other and a glass pitcher. All simulation work was done entirely with my simulator, rendering was done with Vray.</div>
				</div>
			</div>			
			
			<div class="projecttextrow">
				<div class="subtitle">Overview</div>
				<p>One of the spring 2012 <a href="https://www.seas.upenn.edu/~cis563/Spring2012/">CIS563: Physically Based Animation</a> assignments was a mass-spring damper system capable of simulating a single jello cube interacting against a plane. I took that project and extended it to allow for complex multiple jello interactions, interactions against arbitrary mesh scenes, Maya integration, multithreading, better integration methods, KD-Tree acceleration for intersection testing, and more. This project is written entirely in C++.
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Base Code</div>
				<p>This project utilizes base code written by <a href="http://www.alinenormoyle.com/">Aline Normyle</a> for CIS563: Physically Based Animation.
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Features</div>
				<div class="projecttextleftbar">
					<p><b>Mass-spring Damper System: </b>The simulator models jello cubes as a lattice of masses connected with a variety of springs acting as constraints on shearing, compressing, and bending. Stiffness for each spring type can be specified at simulation initialization and can also be modified on the fly at runtime for more art-directable behavior.
					<p><b>Multiple Integration Schemes: </b>The simulator supports Euler, Midpoint, and fourth-order Runge-Kutta integration to solve the equations of motion in a discretized fashion. Integration schemes can be specified at simulation initialization and can also be modified on the fly at runtime to deal with any stability issues. The time step of the simulation can also be modified on the fly.
					<p><b>Arbitrary Surfaces: </b>In addition to support for jello interaction against planes, spheres, cylinders, and boxes, the system also supports interaction against arbitrary geometry loaded in as OBJ meshes. Meshes can also be dynamically unloaded and swapped out for different meshes, allowing for jello cubes to interact against a dynamic, changing, animated scene.
					<p><b>Live Preview: </b>The simulator comes with an OpenGL preview complete with interactive camera and built in screen recording and spring debugging tools.	
				</div>
				<div class="projecttextrightbar">
					<p><b>KD-Tree Acceleration: </b>A KD-Tree is used for accelerating intersection tests between jello vertices and scene surfaces. Rapid KD-Tree reconstruction is done every frame to account for changing jello positions and changing scene geometry.
					<p><b>Inter-jello Interaction: </b>Jello cubes can interact with each other instead of passing through each other. The simulator solves a single jello cube at a time while treating all other jellos in the scene as static meshes. Support for stacked jello is also included by having the simulator sort jello order by closeness to the ground before solving.
					<p><b>Maya Integration: </b>Maya integration is supported through a Python script that wraps the simulator and modifies vertex positions for cube meshes in Maya correspondingly. Simulations can also be exported as OBJ sequences for use in Maya and other programs.
					<p><b>Architecture: </b>The simulator has been modified from the original base code extensively; GLM is used as the math library instead of the original custom library, and various modifications have been made to allow for compilation without modification on Windows, OSX, and Fedora Linux. The live preview mode was also modified to use stb_image for image sequence output instead of DevIL. Multithreading through OpenMP was also added.			
				</div>
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Selected Videos</div>
				<br>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<iframe src="http://player.vimeo.com/video/41545296?color=ffffff" width="900" height="506" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				<div class="caption">Four jello cubes interacting with each other and with a glass pitcher. The simulation was created entirely in my simulator, then exported to Maya with my Python wrapper, and rendered out with Vray on my standard studio lighting setup.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<iframe src="http://player.vimeo.com/video/37534077?color=ffffff" width="900" height="506" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>				
				<div class="caption">Four jello cubes interacting with each other and with a bowl inside of my Kitchen scene. The simulation was created entirely in my simulator, then exported to Maya with my Python wrapper and rendered with Vray.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<iframe src="http://player.vimeo.com/video/37098929?color=ffffff" width="900" height="506" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>				
				<div class="caption">A collection of videos directly from within the simulator's GL Preview view, demonstrating various capabilities of the simulator.</div>
				</div>
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Acknowledgements</div>
				<p>This project would not be possible without the guidance of Dr. <a href="http://www.graphics.cornell.edu/~kiderj/">Joseph T. Kider</a>, the instructor for <a href="http://www.seas.upenn.edu/~cis563/">CIS563</a> in the spring of 2012. I would also like to thank CIS563 TAs <a href="https://sites.google.com/site/tiantianliugraphics/">Tiantian Liu</a> and <a href="http://peterkutz.com/">Peter Kutz</a>. Friends Gabriel Leung, Adam Mally, and <a href="http://www.danknowlton.com/"> Dan Knowlton</a> acted as sounding boards for various ideas and discussed ideas.
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Project Blog Posts</div>
				<p>Progress updates for this project were posted to my development blog, <a href="http://blog.yiningkarlli.com">Code & Visuals</a>. The following posts detail the development of this project. Posts are listed starting with the most recent:
				<div class="projecttextleftbar">
					<p>3. <a href="http://blog.yiningkarlli.com/2012/05/more-fun-with-jello.html">More Fun With Jello</a>	
					<p>2. <a href="http://blog.yiningkarlli.com/2012/02/jello-sim-maya-integration.html">Jello Sim Maya Integration</a>	
					<p>1. <a href="http://blog.yiningkarlli.com/2012/02/multijello-simulation.html">Multijello Simulation</a>	
				</div>
				<div class="projecttextrightbar">
		
				</div>
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Resources</div>
				<p>In the process of building my simulator, I drew upon the following papers, and articles. They are listed in no particular order.
				<p><a href="http://www.pixar.com/companyinfo/research/pbm2001/">Physically Based Modeling SIGGRAPH 2001 Course Notes</a>: A primer on differential equation basics, particle dynamics, and implicit integration techniques by Andrew Witkin, David Baraff and Michael Kass.
				<p><a href="http://dl.acm.org/citation.cfm?id=357320">Particle Systems: A Technique for Modeling a Class of Fuzzy Objects</a>: The original 1983 William Reeves paper introducing particle systems
				<p><a href="http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.3.7754">Implicit-Explicit Schemes for Fast Animation with Particle Systems</a>: A 2010 paper on integration schemes by Bernhard Eberhardt, Olaf Etzmuss, and Michael Hauth.
				<p><a href="http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.48.1525">Implicit-Explicit Runge-Kutta Methods for Time-Dependent Partial Differential Equations</a>: A 1997 paper describing using RK4 integration for solving equations of motion by Uri Ascher, Steven Ruuth, and Raymond Spiteri.
				<p><a href="http://en.wikipedia.org/wiki/Runge%E2%80%93Kutta_methods">Runge-Kutta Methods Wikipedia Article</a>: A fairly concise summary of the Runge-Kutta integration schemes, including RK4
				<p><a href="http://en.wikipedia.org/wiki/Effective_mass_(spring%E2%80%93mass_system)">Effective Mass Wikipedia Article</a>: A fairly concise summary of spring-mass systems
			</div>				
		</div>
		</div>
	</body>
</html>





