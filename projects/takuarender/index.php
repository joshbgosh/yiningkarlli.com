<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv='Content-Type' content='application/xhtml+xml; charset=utf-8' />
		<title>YINING KARL LI | Takua Render</title>	
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
			<div class="title">Takua Render</div>			
			<div class="subtitle">A physically-based photorealistic global illumination renderer</div>
			
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/room.png"><img src="images/room.jpg" width="900" height="506" ></a>
				<div class="caption">A complex scene rendered using Takua Render's Vertex Connection and Merging implementation. The poster on the back wall is by <a href="http://alice-yang.tumblr.com/">Alice Yang</a>, the two main furniture pieces are by <a href="http://odesd2.com.ua/ru">ODESD2</a>, the flowers are a heavily modified version of a model by <a href="https://www.behance.net/andi_mix">Andrei Mikhalenko</a>, and the Braun SK4 record player model is by <a href="bertrand-benoit.com">Bertrand Benoit</a>. All textures, shading, and other models are my own.</div>
				</div>
			</div>
						
			<div class="projecttextrow">
				<div class="subtitle">Overview</div>
				<p>Takua Render is a physically-based photorealistic 3D renderer I am writing from scratch in C++. Takua is built from the ground up as a global illumination renderer supporting global illumination through several different light transport algorithms, including unidirectional pathtracing with direct light sampling, Veach-style bidirectional pathtracing with multiple importance sampling, progressive photon mapping, and vertex connection and merging. The renderer is still a work in progress, but already supports a number of features, listed below. The ultimate objective of this project is to learn about building an advanced production-ready renderer.
				<p>There have been 5 major versions of Takua Render so far, with each version representing a significant refactoring/rewrite and exploration of a new architecture. The current version of Takua Render is Revision 5, or Takua a0.5. Past versions are:
				<p><b>Takua a0.5: </b>Brand new massively concurrent CPU renderer with a highly modular, plugin based architecture and multiple advanced light transport algorithms. Can also optionally make use of CUDA in certain plugin types. The design of Takua a0.5's core is considered stable and is not expected to be completely refactored again soon.
				<p><b>Takua a0.4: </b>Experimental CUDA/CPU hybrid unidirectional pathtracer with significant shared code paths between the CUDA and CPU rendering cores. Essentially a merger of Takua a0.3 and Takua a0.2.
				<p><b>Takua a0.3: </b>Experimental CUDA unidirectional pathtracer built from scratch after gaining knowledge from building a previous <a href="http://www.yiningkarlli.com/projects/gpupathtracer/">GPU Pathtracer with Peter Kutz</a>.
				<p><b>Takua a0.2: </b>Experimental CPU unidirectional pathtracer built from scratch after gaining knowledge from building Takua a0.1.
				<p><b>Takua a0.1: </b>My first CPU pathtracer.</div>
				<p>This project has been under active development since 2012 and is currently my primary focus. Takua Render is also currently used at Cornell University's Program of Computer Graphics as a research renderer.
					
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/flowers.cam2.png"><img src="images/flowers.cam2.png" width="900" height="506" ></a>
				<div class="caption">Nearly a quarter of a billion triangles. Rendered using bidirectional pathtracing with multiple importance sampling. See <a href="http://blog.yiningkarlli.com/2015/02/flower-vase-render.html">this blog post</a> for more details.</div>
				</div>
			</div>

			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/venus.png"><img src="images/venus.png" width="900" height="900" ></a>
				<div class="caption">A render of a 2 million triangle Venus sculpt by <a href="http://vimeo.com/zxyzhu">Zia Zhu</a>. Rendered using unidirectional pathtracing with direct light sampling. See <a href="http://blog.yiningkarlli.com/2013/04/giant-mesh-test.html">this blog post</a> for more details.</div>
				</div>
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Features</div>
				<div class="projecttextleftbar">
					<p><b>Advanced Global Illumination: </b>Full, physically based, consistent indirect illumination rendering through multiple advanced light transport. Supports unbiased unidirectional pathtracing with direct light sampling, unbiased bidirectional pathtracing with multiple importance sampling, consistent progressive photon mapping, and consistent vertex connection and merging.
					<p><b>Geometry: </b>Supports arbitrary triangle and quad meshes with instancing. Also can support any other geometry type implemented through geometry plugins.
					<p><b>Lights: </b>Supports area lights with optimized rect light, sphere light, and dome light implementations. Light emittance can be driven by textures and animated. Also can support any other light type implemented through light plugins.
					<p><b>Materials and BSDFs: </b>Supports physically based BRDFs, including Lambertian diffuse, normalized Blinn-Phong specular/reflective, Fresnel reflectance/transmission via both Schlick's Approximation and actual S-P polarization, Schnell's law of refraction, and more. Also includes support for full subsurface scattering through brute-force Monte-Carlo scattering. Also can support any other material type implemented through BSDF plugins.
					<p><b>Complex shading: </b>Supports combining various BSDFs to create more complex BSDFs, such as combining Fresnel refractive with normalized Blinn-Phong to create ground glass. Supports complex layered shaders combining an arbitrary number of materials and BSDFs. Also supports bump mapping.					
					<p><b>Textures: </b>Supports loading an arbitrary number of arbitrarily sized textures in PNG and BMP format to drive any material property in the renderer. Some examples include texture driven color, reflectance, glossiness, index of refraction, and more. Also can support any other texture type implemented through texture plugins.
					<p><b>Acceleration Structure System: </b>Uses a two-level acceleration structure with an upper structure for the scene, and individual structures per geometry instance. Includes standard BVH, BVH with perfect spatial splits, and KD-tree with Surface Area Heuristic implementations. Also includes <a href="https://embree.github.io/">Embree</a> support for individual geometries. Also can support any other accelerator type implemented through accelerator plugins.
					<p><b>Hierarchical Adaptive Sampling: </b>Supports adaptive sampling for automatic convergence detection. The adaptive sampling technique used is based on <a href="http://jo.dreggn.org/home/2009_stopping.pdf">A Hierarchical Automatic Stopping Condition for Monte Carlo Global Illumination</a> by Dammertz et al. Also can support any other sampling method implemented through sampler plugins.
				</div>
				<div class="projecttextrightbar">
					<p><b>Firefly Detection: </b>Supports automatically identifying firefly pixels and firefly removal through supersampling and intensity clamping.
					<p><b>Distributed Effects: </b>Supports transformational motion blur by sampling at multiple points in time, and supports physically correct depth of field through simulation of aperture shape and size and lens shape. All properties in the renderer can be set to vary over time.
					<p><b>Deformational Motion Blur: </b>Supports deformational motion blur for animated meshes by interpolating vertex positions between frames. Also supports efficient acceleration structure creation for animated meshes.
					<p><b>Modular, Extensible Architecture: </b>Takua a0.5 is built around a raytracing core that is highly modular and extensible. Almost any component of the render can be replaced or extended with a new module, and most renderer subsystems have a plugin API to make adding new functionality and features easy.		
					<p><b>Massively Concurrent: </b>Takua a0.5 achieves highly efficient parallelism through task-based concurrency and <a href="https://www.threadingbuildingblocks.org/"> Threaded Building Blocks</a>. Much of this model is inspired by <a href="https://vimeo.com/49718712">concepts from Rob Pike and the GoLang team</a>, and by Eisenacher et al.'s <a href="https://disney-animation.s3.amazonaws.com/uploads/production/publication_asset/70/asset/Sorted_Deferred_Shading_For_Production_Path_Tracing.pdf">Sorted Deferred Shading for Production Path Tracing</a> paper. Integrators are written to be re-entrant and broken up into numerous smaller tasks, which are mapped onto the TBB task graph.			
					<p><b>Scene Loading: </b>Uses a custom scene format defining geometry, lights, materials, camera settings, render settings, animation over time, and more.
					<p><b>Image Output: </b>Outputs BMP or PNG images and includes antialiasing through jittered supersampling. Also includes gamma correction for final renders. Z-Depth passes can be output alongside color passes.
					<p><b>Interface: </b>Includes a live preview mode built using GLFW that displays the render as it progresses. Also includes a OpenGL wireframe preview view for scene files and a path visualizer that can visualize the current photon path being traced by the renderer.
					<p><b>Hardware Architecture: </b>Takua a0.5 is primarily a CPU renderer designed to run on x86-64 hardware. CUDA can optionally be used in plugins to offload select components and workloads to NVIDIA graphics cards, but the core renderer is highly optimized C++ that runs on the CPU.
					<p><b>Build Toolchain: </b>Takua a0.5 is written using C++11 and builds on OSX using the native Clang/LLVM included with Xcode, on Windows using Visual Studio 2013, and on Fedora Linux using GCC 4.9. Takua uses CMake for build file generation.
				</div>
			</div>

			<div class="projecttextrow">
				<div class="subtitle">Select Images</div>
				<br>
			</div>

			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/still_life.png"><img src="images/still_life.png" width="900" height="506" ></a>
				<div class="caption">Still life scene with various complex materials. Rendered using Vertex Connection and Merging.</div>
				</div>
			</div>

			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/flowers.cam0.png"><img src="images/flowers.cam0.png" width="900" height="506" ></a>
				<div class="caption">Rendered using bidirectional pathtracing with multiple importance sampling.</div>
				</div>
			</div>
			
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/flowers.cam1.png"><img src="images/flowers.cam1.png" width="900" height="506" ></a>
				<div class="caption">Rendered using bidirectional pathtracing with multiple importance sampling.</div>
				</div>
			</div>
			
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/veach.bdpt.png"><img src="images/veach.bdpt.png" width="900" height="506" ></a>
				<div class="caption">Recreation of the Veach thesis multiple importance sampling test scene. Rendered using bidirectional pathtracing with multiple importance sampling. See <a href="http://blog.yiningkarlli.com/2015/02/multiple-importance-sampling.html">this post</a> for more details.</div>
				</div>
			</div>
			
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/cornellbox.png"><img src="images/cornellbox.png" width="900" height="900" ></a>
				<div class="caption">Recreation of the famous Cornell Box. This scene was constructed from the original measured data for the original box. Rendered using Vertex Connection and Merging.</div>
				</div>
			</div>
			
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/globe.png"><img src="images/globe.png" width="900" height="506" ></a>
				<div class="caption">Globe rendered using hierarchical adaptive sampling and Vertex Connection and Merging. See <a href="http://blog.yiningkarlli.com/2015/03/adaptive-sampling.html">this post</a> for more details.</div>
				</div>
			</div>
			
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/pbrt.png"><img src="images/pbrt.png" width="900" height="506" ></a>
				<div class="caption">A render of the book upon which this project draws a lot of resources from. Rendered with bidirectional pathtracing and multiple importance sampling.</div>
				</div>
			</div>

			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/chessboard_1.png"><img src="images/chessboard_1.png" width="900" height="506" ></a>
				<div class="caption">A ground glass chessboard. Rendered with bidirectional pathtracing and multiple importance sampling.</div>
				</div>
			</div>

			<div class="projecttextrow">
				<div class="subtitle">Planned Future Improvements</div>
				<div class="projecttextleftbar">
					<p><b>More Light Transport: </b>Support for Metropolis Light Transport is being considered. Support for a hybrid MLT-VCM approach is also being looked in to.
					<p><b>More BSDFs: </b>Implementations of additional, better BSDFs such as Beckmann, GGX, and the Disney Principled BSDF are planned.
					<p><b>Displacement/Subdivision: </b>Support for texture driven displacement mapping and OpenSubdiv integration are planned.
				</div>
				<div class="projecttextrightbar">
					<p><b>Software Integration: </b>Maya and Houdini integration are being considered.
					<p><b>Dispersion/Diffraction: </b>Support for wavelength based splitting of light into component colors to achieve effects like diffraction is planned.
					<p><b>Volumetric Rendering: </b>A integrated system for volumetrics and scattering is planned. The planned approach is to implement the <a href="http://www.cs.dartmouth.edu/~wjarosz/publications/krivanek14upbp.html">Unified Points, Beams, and Paths</a> algorithm by Krivanek et al. and presented at SIGGRAPH 2014. OpenVDB integration is also planned.
				</div>
			</div>

			<div class="projecttextrow">
				<div class="subtitle">Older Images</div>
				<br>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:800px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/dragonsss_bright.png"><img src="images/dragonsss_bright.png" width="800" height="800" ></a>
				<div class="caption">A render of the Stanford Dragon exhibiting subsurface scatter through brute force Monte-Carlo scattering. Lighting was calculated all indirectly through unidirectional pathtracing. No modifications have been made to this image outside of the renderer.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:800px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/glassdragon_dof.png"><img src="images/glassdragon_dof.png" width="800" height="800"></a>
				<div class="caption">A render of the Stanford Dragon with a glass material inside a Cornell-Box type environment, with an extremely shallow depth of field.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:800px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/stripes.png"><img src="images/stripes.png" width="800" height="800"></a>
				<div class="caption">A render of a test scene demonstrating texture-driven color, glossiness, reflectance, and index of refraction.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:800px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/uvtest.png"><img src="images/uvtest.png" width="800" height="800"></a>
				<div class="caption">A render from Takua Render demonstrating a number of textures with various UV transforms applied. Note the lack of aliasing and moire-patterns in textured surfaces.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/eames_aluminum.png"><img src="images/eames_aluminum.png" width="900" height="508" ></a>
				<div class="caption">Eames Lounge Chair Wood lit with a single large area light (off camera) and glossy wood and rough aluminum materials. Approximately 2 minutes rendering time using CUDA mode.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/dragon_kd.png"><img src="images/dragon_kd.png" width="900" height="506"></a>
				<div class="caption">A heatmap showing the cost of traversing through a KD-Tree build for the Stanford Dragon. Areas with brighter red indicate more expensive ray-intersection tests, whereas darker areas are cheaper to test.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/dragon_white.png"><img src="images/dragon_white.png" width="900" height="506"></a>
				<div class="caption">A test render of the Stanford Dragon on a white backdrop with a standard studio style lighting setup.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/deloreon.png"><img src="images/deloreon.png" width="900" height="506"></a>
				<div class="caption">A test render of a approximately 100000 poly Deloreon model on a white backdrop with a standard studio style lighting setup.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/lambo_back.png"><img src="images/lambo_back.png" width="900" height="506" ></a>
				<div class="caption">A render of a 200000 polygon Lamborghini Aventador model. Lighting was calculated all indirectly through unidirectional pathtracing, entirely on the GPU through CUDA. The render took about 1.5 hours to generate approximately 25000 samples per pixel. No modifications have been made to this image outside of the renderer.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<iframe src="http://player.vimeo.com/video/53735318" width="900" height="508" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				<div class="caption">An animated sequence consisting of 300 frames. Each frame took approximately one minute to render with 5000 samples per pixel.</div>
				</div>
			</div>
			
			<div class="projecttextrow">
					<div class="subtitle">Acknowledgements</div>
					<p>This project would not be possible without the guidance of <a href="http://www.graphics.cornell.edu/~kiderj/">Joseph T. Kider</a>, <a href="http://www.graphics.cornell.edu/people/director.html">Don Greenberg</a>, <a href="http://www.alinenormoyle.com/">Aline Normoyle</a>, <a href="http://www.seas.upenn.edu/~pcozzi/">Patrick Cozzi</a>, and <a href="http://www.cis.upenn.edu/~badler/">Norm Badler</a>. Also, friends <a href="http://www.harmonymli.com">Harmony Li</a>, Gabriel Leung, and <a href="http://danknowlton.com/">Dan Knowlton</a> have been instrumental as sounding boards for ideas and partners for discussion. Numerous discussions with <a href="http://peterkutz.com/">Peter Kutz</a> have provided me with a number of critical insights and his <a href="http://photorealizer.blogspot.com/">Photorealizer</a> project is what inspired me to undertake this project. Finally, countless people in industry and academia have been kind enough to talk with me and provide encouragement at conferences such as SIGGRAPH and at places I have worked.
			</div>
			
			<div class="projecttextrow">
			<div class="subtitle">Project Blog Posts</div>
					<p>I am posting progress updates for Takua Render to my development blog, <a href="http://blog.yiningkarlli.com">Code & Visuals</a>. The following posts detail the ongoing development of this project. Posts are listed starting with the most recent:
				<div class="projecttextleftbar">
					<p>28. <a href="http://blog.yiningkarlli.com/2015/03/bsdf-system.html">BSDF System</a>
					<p>27. <a href="http://blog.yiningkarlli.com/2015/03/adaptive-sampling.html">Adaptive Sampling</a>
					<p>26. <a href="http://blog.yiningkarlli.com/2015/02/flower-vase-render.html">Flower Vase Renders</a>
					<p>25. <a href="http://blog.yiningkarlli.com/2015/02/multiple-importance-sampling.html">Multiple Importance Sampling</a>
					<p>24. <a href="http://blog.yiningkarlli.com/2015/02/bidirectional-pathtracing-integrator.html">Bidirectional Pathtracing Integrator</a>
					<p>23. <a href="http://blog.yiningkarlli.com/2015/01/consistent-normal-interpolation.html">Consistent Normal Interpolation</a>
					<p>22. <a href="http://blog.yiningkarlli.com/2014/12/takua-revision-5.html">Takua Render Revision 5</a>
					<p>21. <a href="http://blog.yiningkarlli.com/2013/12/takua-chair-renders.html">Takua Chair Renders</a>
					<p>20. <a href="http://blog.yiningkarlli.com/2013/04/giant-mesh-test.html">Giant Mesh Test</a>
					<p>19. <a href="http://blog.yiningkarlli.com/2013/04/importance-sampled-direct-lighting.html">Importance Sampled Direct Lighting</a>
					<p>18. <a href="http://blog.yiningkarlli.com/2013/04/working-towards-importance-sampled.html">Working Towards Importance Sampled Direct Lighting</a>
					<p>17. <a href="http://blog.yiningkarlli.com/2013/03/stratified-versus-uniform-sampling.html">Stratified versus Uniform Sampling</a>
					<p>16. <a href="http://blog.yiningkarlli.com/2013/03/first-progress-on-new-pathtracing-core.html">First Progress on New Pathtracing Core</a>
					<p>15. <a href="http://blog.yiningkarlli.com/2013/03/short-stack-kd-tree-traversal.html">Short-stack KD-Tree Traversal</a>
				</div>
				<div class="projecttextrightbar">
					<p>14. <a href="http://blog.yiningkarlli.com/2013/02/stackless-kd-tree-traversal.html">Stackless KD-Tree Traversal</a>
					<p>13. <a href="http://blog.yiningkarlli.com/2013/02/revision-3-kd-treeobjcore.html">Revision 3 KD-Tree/ObjCore</a>
					<p>12. <a href="http://blog.yiningkarlli.com/2013/02/bounding-boxes-for-ellipsoids.html">Bounding Boxes for Ellipsoids</a>
					<p>11. <a href="http://blog.yiningkarlli.com/2013/01/revision-3-old-renders.html">Revision 3, Old Renders</a>
					<p>10. <a href="http://blog.yiningkarlli.com/2012/12/texture-mapping.html">Texture Mapping</a>
					<p>9. <a href="http://blog.yiningkarlli.com/2012/12/blurred-glossy-reflections.html">Blurred Glossy Reflections</a>
					<p>8. <a href="http://blog.yiningkarlli.com/2012/09/thoughts-on-stackless-kd-tree-traversal.html">Thoughts on Stackless KD-Tree Traversal</a>
					<p>7. <a href="http://blog.yiningkarlli.com/2012/09/takuaavohkii-render.html">TAKUA/Avohkii Render</a>
					<p>6. <a href="http://blog.yiningkarlli.com/2012/07/random-point-sampling-on-surfaces.html">Random Point Sampling on Surfaces</a>
					<p>5. <a href="http://blog.yiningkarlli.com/2012/07/thoughts-on-ray-bounce-depth.html">Thoughts on Ray Bounce Depth</a>
					<p>4. <a href="http://blog.yiningkarlli.com/2012/06/more-kd-tree-fun.html">More KD-Tree Fun</a>
					<p>3. <a href="http://blog.yiningkarlli.com/2012/05/subsurface-scattering-and-new-name.html">Subsurface Scattering and New Name</a>
					<p>2. <a href="http://blog.yiningkarlli.com/2012/03/pathtracer-with-kd-tree.html">Pathtracer with KD-Tree</a>
					<p>1. <a href="http://blog.yiningkarlli.com/2012/03/first-pathtraced-image.html">First Pathtraced Image</a>
				</div>
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Resources</div>
				<p>In the process of building Takua Render, I have drawn upon the following papers, books, and articles. They are listed in no particular order. This list, of course, is nowhere near complete.
				<p><a href="http://www.pbrt.org/">Physically Based Rendering</a>: The go-to reference book for rendering, by Matt Phar and Greg Humphreys.
				<p><a href="https://graphics.cg.uni-saarland.de/2012/vertex-connection-and-merging/">Light Transport Simulation with Vertex Connection and Merging</a>: Georgiev et al.'s 2012 paper introducing the VCM algorithm.
				<p><a href="https://graphics.cg.uni-saarland.de/2012/implementing-vertex-connection-and-merging/">Implementing Vertex Connection and Merging</a>: Iliyan Georgiev's technical report describing implementation details for VCM.				
				<p><a href="http://dl.acm.org/citation.cfm?id=1409083">Progressive Photon Mapping</a>: Hachisuka et al.'s 2008 paper presenting a progressive extension to photon mapping.
				<p><a href="http://dl.acm.org/citation.cfm?id=1618487">Stochastic Progressive Photon Mapping</a>: Hachisuka et al.'s 2009 paper extending PPM to handle distributed effects such as depth of field and motion blur.								
				<p><a href="http://cgg.mff.cuni.cz/~jaroslav/papers/2014-gpult/">Progressive Light Transport Simulation on the GPU: Survey and Improvements</a>: Davidovic et al.'s 2012 paper discussing a variety of light transport algorithms.
				<p><a href="https://disney-animation.s3.amazonaws.com/uploads/production/publication_asset/70/asset/Sorted_Deferred_Shading_For_Production_Path_Tracing.pdf">Sorted Deferred Shading for Production Path Tracing</a>: Eisenacher et al.'s 2013 paper describing the architecture of Walt Disney Animation Studios' production renderer, Hyperion.			
				<p><a href="https://www.mitsuba-renderer.org/~wenzel/papers/phdthesis.pdf">Light Transport on Path-Space Manifolds</a>: Wenzel Jakob's 2012 Cornell PhD thesis on Metropolis Light Transport and Manifold Exploration.
				<p><a href="https://www.mitsuba-renderer.org/~wenzel/papers/phdthesis.pdf">Efficient Monte Carlo Methods for Light Transport in Scattering Media</a>: Wojciech Jarosz's 2008 UCSD PhD thesis on Monte Carlo rendering for participating media.	
				<p><a href="http://dl.acm.org/citation.cfm?id=15902">The Rendering Equation</a>: The original 1986 paper presenting the global illumination rendering problem and pathtracing solution, by James Kajiya.
				<p><a href="http://graphics.stanford.edu/papers/veach_thesis/">Robust Monte Carlo Methods for Light Transport Simulation</a>: Eric Veach's 1997 Stanford PhD thesis presenting the Metropolis Light Transport method. Also contains useful information on unidirectional and bidirectional pathtracing.		
				<p><a href="http://graphics.pixar.com/library/PhysicallyBasedLighting/">Physically Based Lighting at Pixar</a>: Christophe Hery and Ryusuke Villemin's SIGGRAPH 2013 course notes on physically based rendering.
				<p><a href="https://www.mitsuba-renderer.org/">Mitsuba</a>: Wenzel Jakob's research renderer.	
				<p><a href="https://embree.github.io/">Embree</a>: Intel's open source high performance ray tracing kernels.	
				<p><a href="https://www.threadingbuildingblocks.org/">Threaded Building Blocks</a>: Intel's open source parallel C++ toolkit.	
				<p><a href="http://graphics.stanford.edu/~henrik/papers/book/">Realistic Image Synthesis Using Photon Mapping</a>: Henrik Wann Jensen's Photon Mapping book.			
				<p><a href="http://www.flipcode.com/archives/Reflections_and_Refraction_in_Raytracing.shtml">Reflections and Refraction in Raytracing</a>: A paper detailing the math behind reflection and refraction, by Bram de Greve.
				<p><a href="http://graphics.ucsd.edu/~henrik/papers/book/">Realistic Image Synthesis Using Photon Mapping</a>: The original photon mapping book covering general GI problems and the photon mapping algorithm, by Henrik Wann Jensen.	
				<p><a href="http://jo.dreggn.org/home/2009_stopping.pdf">A Hierarchical Automatic Stopping Condition for Monte Carlo Global Illumination</a>: Dammertz et al.'s 2009 paper on a hierarchical adaptive sampling algorithm.		
				<p><a href="http://dl.acm.org/citation.cfm?id=1866168">Consistent Normal Interpolation</a>: Reshetov et al.'s 2010 paper on a better normal interpolation algorithm.	
				<p><a href="http://portal.acm.org/citation.cfm?id=192952&CFID=15151515&CFTOKEN=6184618">The Direct Lighting Computation in Global Illumination Methods</a>: Changyaw Wang's 1994 Indiana University, Bloomington PhD Dissertation detailing the direct lighting component in GI.
				<p><a href="http://dl.acm.org/citation.cfm?doid=563858.563893">Models of Light Reflection for Computer Synthesized Pictures</a>: James Blinn's 1977 paper on the Blinn-Phong shading model.
				<p><a href="http://www.sci.utah.edu/~wald/Publications/2011///PathCompaction/download//compact.pdf">Active Thread Compaction for GPU Pathtracing</a>: Ingo Wald's 2011 paper on thread compaction as an acceleration technique for GPU pathtracing.
				<p><a href="http://www.kunzhou.net/2008/kdtree.pdf">Real-Time KD-Tree Construction on Graphics Hardware</a>: Kun Zhou's 2008 paper on short-stack KD-Tree construction and traversal.
				<p><a href="http://graphics.cs.uni-sb.de/fileadmin/cguds/papers/2007/popov_07_GPURT/Popov_et_al._-_Stackless_KD-Tree_Traversal_for_High_Performance_GPU_Ray_Tracing.pdf">Stackless KD-Tree Traversal for High Performance GPU Ray Tracing</a>: Stefan Popov's 2007 paper on stackless KD-Tree traversal through rope-based KD-Trees.
				<p><a href="http://graphics.stanford.edu/papers/i3dkdtree/">Interactive KD-Tree GPU Raytracing</a>: Daniel Horn's 2007 paper on various GPU KD-Tree traversal techniques, including short-stack while-while traversal.
				<p><a href="http://twvideo01.ubm-us.net/o1/vault/gdc09/slides/takahiroGDC09s_1.pdf">Parallelizing the Physics Pipeline: Physics Simulations on the GPU</a>: Takahiro Harada's 2009 GDC talk on GPU physics. The relevant part for this project is the section on history-flag based stackless KD-Tree traversal.
				<p><a href="http://www.iquilezles.org/www/articles/ellipses/ellipses.htm">Working with Ellipses</a>: An article by Inigo Quilez on quirks with calculating ellipse bounding boxes and other math.
				<p><a href="http://en.wikipedia.org/wiki/Fresnel_equations">Fresnel Equations Wikipedia Article</a>: A good overview of the math behind Fresnel reflection/refraction.
				<p><a href="http://en.wikipedia.org/wiki/Kd_tree">KD-Tree Wikipedia Article</a>: A description of the KD-tree spatial partitioning data structure.
				<p><a href="https://graphics.stanford.edu/wikis/cs248-11-winter/Assignment_4/kdtree">KD-Tree Assignment Description</a>: A summary of how kd-trees work from a Stanford University computer science course's homework assignment. 
				<p><a href="http://www-personal.umich.edu/~nikitan/articles/pathtracing/">Writing A Pathtracer</a>: An incomplete, but nonetheless useful primer on some basic pathtracing concepts, by Nikita Nikishin.
				<p><a href="http://en.wikipedia.org/wiki/Path_tracing">Wikipedia Pathtracer Article</a>: A fairly concise description of the pathtracing concept.
				<p><a href="http://en.wikipedia.org/wiki/Bidirectional_reflectance_distribution_function">Bidirectional Reflectance Distribution Function Wikipedia Article</a>: General summary of what BRDFs are and how they work.
				<p><a href="http://en.wikipedia.org/wiki/Bidirectional_scattering_distribution_function">Bidirectional Scattering Distribution Function Wikipedia Article</a>: Describes what BSDFs are and how they differ from BRDFs.
				<p><a href="http://raytracey.blogspot.com/">Ray Tracey's Blog</a>: Sam Lampere (Ray Tracey)'s blog following the development of OTOY's Brigade Engine.
				<p><a href="http://photorealizer.blogspot.com/">Photorealizer: Physically-Based Renderer Blog</a>: Peter's Kutz's development blog for Photorealizer.
				<p><a href="http://renderspud.blogspot.com/">Renderspud Blog</a>: Mike Farnsworth's development blog for Renderspud.
				<p><a href="http://www.cis.upenn.edu/~badler/courses/cis560.html">CIS460 Computer Graphics Notes</a>: An extremely detailed and thorough set of slides created by Professor Norm Badler for his course CIS460: Computer Graphics at the University of Pennsylvania. Unfortunately, Professor Badler's notes are not available publicly.
				<p><a href="http://www.sjbrown.co.uk/">Simon's Graphics Blog</a>: Simon Brown's pathtracing development blog.
				<p><a href="http://ompf2.com/">OMPF2</a>: A rendering enthusiast forum and discussion board.
				
			</div>
		</div>
	</body>
</html>





