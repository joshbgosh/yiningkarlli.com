<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv='Content-Type' content='application/xhtml+xml; charset=utf-8' />
		<title>YINING KARL LI | Ariel Fluid Simulator</title>
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
			<div class="title">Ariel Fluid Simulator</div>			
			<div class="subtitle">A PIC/FLIP fluid simulation with OpenVDB and Houdini integration</div>
			
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<a href="http://www.yiningkarlli.com/projects/dambreak/images/dambreak.0200.png"><img src="images/dambreak.0200.png" width="900" height="506" ></a>
				<div class="caption">A frame from a "dambreak" scenario simulation. Simulated using Ariel, meshed via OpenVDB/Houdini, rendered with Vray. Soon to be re-rendered using <a href="http://www.yiningkarlli.com/projects/takuarender/">Takua Render</a>.</div>
				</div>
			</div>			
			
			<div class="projecttextrow">
				<div class="subtitle">Overview</div>
				<p>Ariel is an experimental fluid simulator I wrote from scratch to explore the popular PIC/FLIP fluid solver algorithm and to evaluate <a href="http://www.openvdb.org/">OpenVDB</a>. Ariel supports arbitrary animated meshes as fluid starting volumes and as solid obstacles, and supports exact fluid-solid boundary finding through an integrated raycasting engine. Meshing can either be done natively in the simulator through OpenVDB, or through Houdini integration via <a href="http://www.disneyanimation.com/technology/partio.html">Partio</a>. This project is written entirely in C++.
				
				<p>This project has been under active development since 2013, although it is something more of a sandbox/hobby compared to the amount of focus I put into my main <a href="http://www.yiningkarlli.com/projects/takuarender/">renderer project</a>.
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Features</div>
				<div class="projecttextleftbar">
					<p><b>PIC/FLIP: </b>The core solver method used is the industry standard PIC/FLIP method. Supports solving using only PIC, only FLIP, or combining both as a weighted sum for PIC/FLIP. Supports particle resampling after particle advection for better fluid reconstruction.
					<p><b>Memory Efficient Grids: </b>Ariel supports both native float arrays and <a href="http://www.openvdb.org/">OpenVDB</a> as underlying data structures for storing grid information in the solver. Native float arrays are faster to access but use more memory and are therefore suitable for smaller simulations that require fast simulation times. OpenVDB grids are slower to access, but are more memory efficient and support sparse storage, allowing for extremely large scale simulations.
					<p><b>Animated Meshes: </b>Starting fluid volumes and solid obstacles can be specified through animated OBJ meshes. Fluid volumes can be added and subtracted from the simulation at any point in time, as can solid obstacles.
					<p><b>Live Preview: </b>The simulator comes with an OpenGL viewer complete with interactive camera and built in screen recording and debugging tools.	
				</div>
				<div class="projecttextrightbar">
					<p><b>Raycast Solid-Fluid Boundaries: </b>Instead of finding solid-fluid boundaries through level sets, Ariel incorporates a modified version of Takua Render's fast intersection engine for finding precise solid-fluid boundaries by raycasting fluid particles against the scene's solid obstacles. This method allows for extremely precise fluid-solid boundary reconstruction and meshing.
					<p><b>Houdini Integration: </b>Ariel can interface with Houdini through OpenVDB volumes and can also write particle and simulation data directly to Houdini's native BGEO format through <a href="http://www.disneyanimation.com/technology/partio.html">Partio</a>. As a result, Ariel can either complete the entire simulation pipeline from particles all the way through meshing, or can complete only select portions of the simulation pipeline and offload to Houdini for functionality such as meshing.
					<p><b>Build Toolchain: </b>Ariel is written using C++11 and is multithreaded using <a href="https://www.threadingbuildingblocks.org/">Threaded Building Blocks</a>. Ariel builds on OSX using the native Clang/LLVM included with Xcode and on Windows using Visual Studio 2013. Ariel uses CMake for build file generation.		
				</div>
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Selected Videos</div>
				<br>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<iframe src="https://player.vimeo.com/video/87050516?color=ffffff" width="900" height="506" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				<div class="caption">A "dambreak" scenario simulation in a glass box. Simulated using Ariel, meshed via OpenVDB/Houdini, rendered with Vray. Soon to be re-rendered using <a href="http://www.yiningkarlli.com/projects/takuarender/">Takua Render</a>.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<iframe src="http://player.vimeo.com/video/87331839?color=ffffff" width="900" height="506" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>				
				<div class="caption">Same "dambreak" scenario above, but in particle view. Approximately a million particles on a 128x64x64 grid. Whiter particles indicate faster velocity and lower density, while bluer particles indicate slower velocity and higher density.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<iframe src="http://player.vimeo.com/video/88078336?color=ffffff" width="900" height="506" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>				
				<div class="caption">"Waterfall" scenario with fluid added to the simulation over time on a 64x64x64 grid. Whiter particles indicate faster velocity and lower density, while bluer particles indicate slower velocity and higher density.</div>
				</div>
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Acknowledgements</div>
				<p>The beginnings of this project were overseen by Professor <a href="http://www.cs.cornell.edu/~djames/">Doug James</a> as part of his Computational Motion course at Cornell University. Friends <a href="http://harmonymli.com/">Harmony Li</a>, <a href="http://danknowlton.com/">Dan Knowlton</a>, and John DeCorato were invaluable sounding boards for various ideas.
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Project Blog Posts</div>
				<p>Progress updates for this project were posted to my development blog, <a href="http://blog.yiningkarlli.com">Code & Visuals</a>. The following posts detail the development of this project. Posts are listed starting with the most recent:
				<div class="projecttextleftbar">
					<p>2. <a href="http://blog.yiningkarlli.com/2014/02/flip-meshing-pipeline.html">PIC/FLIP Simulator Meshing Pipeline</a>	
					<p>1. <a href="http://blog.yiningkarlli.com/2014/01/flip-simulator.html">New PIC/FLIP Simulator</a>	
				</div>
				<div class="projecttextrightbar">
		
				</div>
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Resources</div>
				<p>In the process of building my simulator, I drew upon the following papers and articles. They are listed in no particular order.
				<p><a href="http://www.cs.ubc.ca/~rbridson/docs/zhu-siggraph05-sandfluid.pdf">Animating Sand as a Fluid</a>: The original PIC/FLIP graphics simulation paper by Zhu and Bridson.
				<p><a href="http://www.openvdb.org/">OpenVDB</a>: An open source hierarchical volumetric data structure and toolkit by Dreamworks Animation.
				<p><a href="http://www.openvdb.org/download/openvdb_toolset.pdf">OpenVDB SIGGRAPH 2013 Course Notes</a>: Useful presentations and notes on using OpenVDB and OpenVDB in industry.
				<p><a href="http://dl.acm.org/citation.cfm?id=2487235">VDB: High-resolution Sparse Volumes with Dynamic Topology</a>: Ken Museth's original 2013 paper presenting OpenVDB.
				<p><a href="http://www.disneyanimation.com/technology/partio.html">Partio</a>: An open source particle file format wrangling library by Walt Disney Animation Studios.
				<p><a href="http://www.cs.ubc.ca/~rbridson/fluidbook/">Fluid Simulation for Computer Graphics</a>: The go-to reference book for fluid simulation, by Robert Bridson.
			</div>				
		</div>
		</div>
	</body>
</html>





