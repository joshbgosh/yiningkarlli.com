<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv='Content-Type' content='application/xhtml+xml; charset=utf-8' />
		<title>YINING KARL LI | GPU Pathtracer</title>
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
			<div class="title">GPU Pathtracer</div>			
			<div class="subtitle">An experimental GPU Pathtracer, in collaboration with <a href="http://www.peterkutz.com">Peter Kutz</a></div>
			
			<div align="center" class="projectimagerow">
				<div style="width:528px">
				<a href="http://www.yiningkarlli.com/projects/gpupathtracer/images/RedStack.png"><img src="http://www.yiningkarlli.com/projects/gpupathtracer/images/RedStack.png" width="528" height="550" ></a>
				<div class="caption">A screenshot of our experimental renderer running in realtime on a scene of some spheres with subsurface scattering properties.</div>
				</div>
			</div>			
			
			<div class="projecttextrow">
				<div class="subtitle">Overview</div>
				<p>For our spring 2012 <a href="http://cis565-spring-2012.github.com/">CIS565: GPU Programming</a> final project, my friend Peter Kutz and I developed a prototype, experimental GPU pathtracing renderer using NVIDIA's CUDA language and toolset. The purpose of the project was the explore the feasibility of building high performance, unbiased, physically based renderers using massively parallel architectures such as NVIDIA GPUs, and to inform future projects. Much of the experience and knowledge gained in this project has since been reapplied to <a href="http://www.yiningkarlli.com/projects/takuarender/"> Takua Render </a> project.
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Features</div>
				<div class="projecttextleftbar">
					<p><b>CUDA Acceleration: </b>Our experimental renderer is written entirely in CUDA and utilizes the mass parallel nature of the GPU to achieve order of magnitude speed increases over CPU based pathtracing.
					<p><b>Global Illumination: </b>Full, physically based, unbiased indirect illumination rendering through unidirectional Monte-carlo pathtracing with support for an arbitrary number of arbitrarily shaped light sources.
					<p><b>Geometry: </b>Supports spheres, infinite planes, and obj mesh loading (without any acceleration structure).
					<p><b>Materials: </b>Supports physically based diffuse and perfect specular reflections, transmission and refraction, and brute force subsurface scatter. Also supports atmospheric scattering and absorption.	
				</div>
				<div class="projecttextrightbar">
					<p><b>Skydome: </b>Includes a highly simplified skydome system to provide illumination from the sky determined by a simple view-dependent color gradient.
					<p><b>Camera Effects: </b>Supports physically correct depth of field through simulation of aperture shape and size and lens shape. Supports realtime gamma correction of the render view.
					<p><b>Interactive Camera: </b>Allows for realtime control of the camera's position, view, and orientation and realtime updating of the render.
					<p><b>Architecture: </b>Compiles on Windows with dependencies on the CUDA runtime and CUDA 4.x SDK. Aside from CUDA, the only other dependencies are the C++11 Standard Library and GLUT.
				</div>
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Selected Images/Videos</div>
				<br>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<iframe src="http://player.vimeo.com/video/41109177?color=ffffff" width="900" height="506" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				<div class="caption">Our final presentation video summarizing the capabilities of the final prototype renderer.</div>
				</div>
			</div>
				
			<div align="center" class="projectimagerow">
				<div style="width:528px">
				<a href="http://www.yiningkarlli.com/projects/gpupathtracer/images/Dust.png"><img src="http://www.yiningkarlli.com/projects/gpupathtracer/images/Dust.png" width="528" height="550" ></a>
				<div class="caption">A render demonstrating atmospheric scatter and absorption.</div>
				</div>
			</div>
			
			<div align="center" class="projectimagerow">
				<div style="width:528px">
				<a href="http://www.yiningkarlli.com/projects/gpupathtracer/images/DustAtEyeLevel.png"><img src="http://www.yiningkarlli.com/projects/gpupathtracer/images/DustAtEyeLevel.png" width="528" height="550" ></a>
				<div class="caption">A closer-up render demonstrating atmospheric scatter and absorption.</div>
				</div>
			</div>
			
			<div align="center" class="projectimagerow">
				<div style="width:528px">
				<a href="http://www.yiningkarlli.com/projects/gpupathtracer/images/SoftFocus.png"><img src="http://www.yiningkarlli.com/projects/gpupathtracer/images/SoftFocus.png" width="528" height="550" ></a>
				<div class="caption">A render demonstrating physically based depth of field and our simplified skydome system.</div>
				</div>
			</div>
			
			<div align="center" class="projectimagerow">
				<div style="width:528px">
				<a href="http://www.yiningkarlli.com/projects/gpupathtracer/images/DepthOfField.png"><img src="http://www.yiningkarlli.com/projects/gpupathtracer/images/DepthOfField.png" width="528" height="550" ></a>
				<div class="caption">A render showcasing subsurface scattering and physically based depth of field.</div>
				</div>
			</div>
			
			<div align="center" class="projectimagerow">
				<div style="width:550px">
				<a href="http://www.yiningkarlli.com/projects/gpupathtracer/images/monkeyhead.png"><img src="http://www.yiningkarlli.com/projects/gpupathtracer/images/monkeyhead.png" width="550" height="550" ></a>
				<div class="caption">The standard Suzanne test model rendered with subsurface scattering.</div>
				</div>
			</div>
			
			<div align="center" class="projectimagerow">
				<div style="width:550px">
				<a href="http://www.yiningkarlli.com/projects/gpupathtracer/images/diamond.png"><img src="http://www.yiningkarlli.com/projects/gpupathtracer/images/diamond.png" width="550" height="550" ></a>
				<div class="caption">A diamond mesh demonstrating transmission, refraction, and total internal reflection.</div>
				</div>
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Acknowledgements</div>
				<p>This project would not be possible without the guidance of <a href="http://www.seas.upenn.edu/~pcozzi/">Patrick Cozzi</a>, the instructor for <a href="http://cis565-spring-2012.github.com/">CIS565</a> in the spring of 2012, and also Dr. <a href="http://www.graphics.cornell.edu/~kiderj/">Joseph T. Kider</a>. We would also like to thank CIS565 TA <a href="http://vsampath.com/">Varun Sampath</a>. Friends Gabriel Leung, Xing Du, and <a href="http://www.danknowlton.com">Dan Knowlton</a> acted as sounding boards for various ideas and discussed ideas. Finally, and most importantly, I have to thank <a href="http://www.peterkutz.com">Peter Kutz</a> for being a brilliant partner on this project.
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Project Blog Posts</div>
				<p>Our progress updates for our experimental GPU pathtracer were posted to our project development blog, <a href="http://gpupathtracer.blogspot.com/">Peter and Karl's GPU Pathtracer Blog</a>. The following posts detail the development of this project. Posts are listed starting with the most recent:
				<div class="projecttextleftbar">	
					<p>19. <a href="http://gpupathtracer.blogspot.com/2012/04/final-project-submission.html">Final Project Submission</a>				
					<p>18. <a href="http://gpupathtracer.blogspot.com/2012/04/depth-of-field.html">Depth of Field</a>	
					<p>17. <a href="http://gpupathtracer.blogspot.com/2012/04/subsurface-scattering.html">Subsurface Scattering</a>	
					<p>16. <a href="http://gpupathtracer.blogspot.com/2012/04/convergence.html">Fast Convergence</a>	
					<p>15. <a href="http://gpupathtracer.blogspot.com/2012/04/transmission.html">Transmission</a>	
					<p>14. <a href="http://gpupathtracer.blogspot.com/2012/04/cool-error-render.html">Cool Error Render</a>	
					<p>13. <a href="http://gpupathtracer.blogspot.com/2012/04/thirty-seconds.html">Performance Optimization</a>	
					<p>12. <a href="http://gpupathtracer.blogspot.com/2012/04/anti-aliasing.html">Anti-aliasing</a>	
					<p>11. <a href="http://gpupathtracer.blogspot.com/2012/04/abstract-art.html">Abstract Art</a>	
					<p>10. <a href="http://gpupathtracer.blogspot.com/2012/04/fresnel-reflections.html">Fresnel Reflections</a>		
				</div>
				<div class="projecttextrightbar">
					<p>9. <a href="http://gpupathtracer.blogspot.com/2012/04/specular-reflection-test.html">Specular Reflection Test</a>
					<p>8. <a href="http://gpupathtracer.blogspot.com/2012/04/alpha-review-presentation.html">Alpha Review Presentation</a>
					<p>7. <a href="http://gpupathtracer.blogspot.com/2012/04/interactivity-and-moveable-camera.html">Interactivity and Moveable Camera</a>
					<p>6. <a href="http://gpupathtracer.blogspot.com/2012/03/we-have-path-tracing.html">We Have Pathtracing</a>	
					<p>5. <a href="http://gpupathtracer.blogspot.com/2012/03/accumulating-iterations.html">Accumulating Iterations</a>
					<p>4. <a href="http://gpupathtracer.blogspot.com/2012/03/first-rays-on-gpu.html">First Rays on the GPU</a>
					<p>3. <a href="http://gpupathtracer.blogspot.com/2012/04/random-number-generator.html">Random Number Generation</a>
					<p>2. <a href="http://gpupathtracer.blogspot.com/2012/03/github-repository.html">GitHub Repository and Starting Framework</a>
					<p>1. <a href="http://gpupathtracer.blogspot.com/2012/03/project-proposal.html">Project Proposal</a>		
				</div>
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Resources</div>
				<p>In the process of building our simulator, we have drawn upon the following papers, books, and articles. They are listed in no particular order.
				<p><a href="http://cis565-spring-2012.github.com/schedule.html">CIS565 GPU Programming Notes</a>: The class notes and slides for CIS565: GPU Programming, created by instructor Patrick Cozzi and TA Varun Sampath. 	
				<p><a href="http://www.sci.utah.edu/~wald/Publications/2011///PathCompaction/download//compact.pdf">Active Thread Compaction for GPU Pathtracing</a>: Ingo Wald's 2011 paper on thread compaction as an acceleration technique for GPU pathtracing.
				<p><a href="http://www.flipcode.com/archives/Reflections_and_Refraction_in_Raytracing.shtml">Reflections and Refraction in Raytracing</a>: A paper detailing the math behind reflection and refraction, by Bram de Greve.
				<p><a href="http://www-personal.umich.edu/~nikitan/articles/pathtracing/">Writing A Pathtracer</a>: An incomplete, but nonetheless useful primer on some basic pathtracing concepts, by Nikita Nikishin.
				<p><a href="http://en.wikipedia.org/wiki/Path_tracing">Wikipedia Pathtracer Article</a>: A fairly concise description of the pathtracing concept.
				<p><a href="http://raytracey.blogspot.com/">Ray Tracey's Blog</a>: Sam Lampere (Ray Tracey)'s blog following the development of OTOY's Brigade Engine.
			</div>		
		</div>
		</div>
	</body>
</html>





