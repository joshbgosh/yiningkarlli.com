<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv='Content-Type' content='application/xhtml+xml; charset=utf-8' />
		<title>YINING KARL LI | Spring 2011 Demoreel</title>
		<?php
			include '../../includes/header.php';
		?>
	</head>
	<?php
		include '../../includes/navigation.php';
	?>
	<body>
		<div class="content">
			<div class="title">Spring 2011 Demoreel</div>	
			<div class="subtitle">Please note that this an old, out of date reel. My current reel can be found <a href="http://www.yiningkarlli.com/demoreel">here</a>.</div>	
			<p><iframe src="http://player.vimeo.com/video/20909195" width="900" height="506" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			<br><br>
			
			<div class="title">Breakdown</div>	
			<div class="subtitle">(PDF Version Available <a href="http://www.yiningkarlli.com/demoreel/spring2011/spring2011breakdown.pdf">Here</a>)</div>	
			<p>
			<div class="subtitle"><b>1. Chairs</b>: Modeled in Maya, Textured in Photoshop, Lit/Shaded/Rendered with 
Mentalray, 2010</div>	
			The chairs and tables are polygonal and shaded entirely using procedural shaders based on Mentalray mia_materials with bump and spectral mapping derived from procedurally generated random noise maps set up to simulate the look of anodized metal, glass, and smooth leather. The floor is a single polygon plane with the floorboard look achieved through displacement mapping and a 
procedural Mentalray mia_materials based shader. The back wall is the only element in the entire scene to not be procedurally textured/shaded; the back wall uses a standard bitmap texture based lambert shader. Lighting is provided by a combination of area lights and Mentalray's Sun&Sky system. Depth of field was achieved by rendering out a Z-Depth map and using said map to apply lens blur in After Effects using Frischluft Lenscare. Further color grading was also done in After Effects. Due to large amounts of raytracing, each frame took approximately eleven minutes to render. Responsible for everything.
			<p>
			<div class="subtitle"><b>2. Falling Apples</b>: Falling Apples: Modeled in Maya, Textured in Photoshop and Mudbox, Lit/Shaded/Rendered with Mentalray, Composited in After Effects, 2010</div>
			All of the apples in the scene are instances of a single apple; that single apple was modeled and shaded using a real life apple as reference. The apple skin was painted from scratch by hand in Photoshop using real life reference and mapped onto the geometry using Mudbox; the stem's texture is procedurally generated by stretching out various noise maps and layering them on top of one another. The apple's shader is a Blinn shader with bump and spectral mapping. Lighting is provided by a single large area light. The falling animation was done through gravity simulation with each apple having a preset spin. Depth of field was achieved by rendering out a Z-Depth map and using said map to apply lens blur in After Effects using Frischluft Lenscare. Further color grading was also done in After Effects. Each frame rendered out in about two minutes. Responsible for everything.
			<p>
			<div class="subtitle"><b>3. Hermit Crab</b>: Modeled in Maya, Textured in Photoshop and Mudbox, Lit/Shaded/Rendered with Mentalray, 2010</div>
			The shell was modeled by duplicating a single segment in a spiral of decreasing radius. The shell's shader is a Blinn shader with a spectral map that provides the glossy look on the inside of the shell. The crab's shader is a normal Lambert. The bumps on the crab's shell are displacement mapped, as are the grooves on the shell of the crab. Lighting is provided by a single large area light. Each frame rendered out in about a minute. Responsible for everything.
			<p>
			<div class="subtitle"><b>4. White Room</b>: Modeled in Maya, Textured in Photoshop, Lit/Shaded/Rendered with Mentalray, Composited in After Effects, 2011</div>
			The floorboards are all transformed instances of a single floorboard model; although the floorboard appears to be just a rectangular prism, it also has imperfect edges to give the floorboards a more believable flawed feel. The wood texture was created in Photoshop based on photographic sources and mapped onto the geometry using normal UV mapping techniques. The metal components of the staircase and platform are shaded using a Mentalray mia_material set up to simulate the look of anodized metal with bump and spectral mapping derived from procedurally generated random noise maps. The ceiling lamps are shaded with lamberts set up to resemble ceramic or glossy plastic; the glass components of the lamps are lamberts set up with transparency to simulate glass. Lighting is provided by two large area lights in the windows; the overexposed look was achieved by using an exposure shader on the camera in Maya. animation was done through gravity simulation with each apple having a preset spin. Depth of field was achieved by rendering out a ZDepth map and using said map to apply lens blur in After Effects using Frischluft Lenscare. Further color grading was also done in After Effects. Due to heavy amounts of raytracing and shadow tracing, each frame took about 11 minutes to render. Responsible for everything.
			<p>
			<div class="subtitle"><b>5. Clock</b>: Modeled in Maya, Textured with Photoshop, Lit/Shaded/Rendered with Mentalray, Composited in After Effects, 2010</div>
			The clock's gears were modeled by creating polygon rings and extruding the outer faces of each ring. The clock face texture was hand painted in Photoshop and mapped onto the geometry using normal UV mapping techniques. The gears, clock shell, and clock arms are all shaded using a Mentalray mia_material set up to simulate the look of polished metal. Bump and spectral mapping was done using procedurally generated random noise maps. Lighting is provided via image-based lighting using an HDR panoramic photograph. Depth of field was achieved by rendering out a Z-Depth map and using said map to apply lens blur in After Effects using Frischluft Lenscare. Due to large amounts of raytracing, each frame took approximately six minutes to render. Responsible for everything.
			<p>
			<div class="subtitle"><b>6. Girl In Raincoat</b>: Modeled in Maya, Textured in Photoshop and Mudbox, 
Lit/Shaded/Rendered with Mentalray, Composited in After Effects, 2010</div>
			The girl's hair was created using Maya's built in hair simulation system and controlled using a network of control curves in the shape of the desired hairstyle. The girl's raincoat and pants were draped on using Maya's nCloth cloth simulation system. The jeans and gloves have subtle displacement maps to bring them closer to the cloth materials they are supposed to be made from. The girl's skin is shaded with a layered shader that combines a painted texture map and a subsurface scatter shader. The mud/dirt textures on her coat and boots were hang painted from scratch in Photoshop. Lighting in the turntable is provided by a single large area light overhead, while in theporch scene lighting is provided by a combination of area lights and Mentalray's Sun and Sky system. The grass in the porch scene was created using Maya's Fur simulation system. The stone effect in the porch scene was made through displacement mapping a flat plane. Each turntable frame took about 5 minutes to render, each porch frame took about 20 minutes to render due to heavy amounts of hair and fur simulation. Responsible for everything.

		</div>	
	</body>
</html>





