<?php
/**
 * Template part for Controlled Environment Channel
 */
?>
<div id="lead-in-channel">
<div id="ss-overlay"></div>
<video autoplay="autoplay" id="video-lead-in" loop="loop" muted="">
<source src="https://pipglobal.com/videos/mp4/critical-environment.mp4" type="video/mp4"/>
<source src="https://pipglobal.com/videos/webm/critical-environment.webm" type="video/webm"/>
<source src="https://pipglobal.com/videos/ogv/critical-environment.ogv" type="video/ogg"/>
<!-- <embed
          src="YTPlayer.swf"
          flashvars="movieName=critical-environment.mp4&autoStart=true"
          width=100%
          height=auto
          allowFullScreen=true
          type="application/x-shockwave-flash"
          pluginspage="http://get.adobe.com/flashplayer" /> -->
</video>
<div id="lead-in-text">
<h1>
CONTROLLED ENVIRONMENT<br/><span>CHANNEL</span></h1>
<p class="space">
Not all work environments are plaids and hard hats. Some work environments are about specialty safety needs, such as keeping the dirt out, keeping a safe zone or protecting your body from extreme cold, heat or pathogens. Protective Industrial Products offers an extensive line-up of gloves, aprons and accessories to meet the needs of this diverse market, designed to provide protection while simultaneously protecting the product or process that is being handled.   
</p>
</div>
</div>
<div class="testimonial">
<div class="container">
<h3 class="space" style="text-align:center;">
        The Strict Standards of Cleanroom        </h3>
<div class="ce-testimonial">
<img src="<?php echo pip_asset('images/channel/img-ce-infographic-en.png'); ?>"/>
</div>
</div>
</div>
<div class="clear" id="chartstart"></div>
<div class="channel-info">
<div class="container clearfix">
<h2 class="space">
    CONTROLLING CONTAMINATION    </h2>
<p class="space" style="line-height:1.5;">
    While more than 30 different industry segments utilize cleanrooms, 70 percent of U.S. cleanroom floor space is in the semiconductor and other electronic components, pharmaceutical, and biotechnology industries. The evolution of cleanrooms gained momentum as a result of NASA’s space travel program in the 1950s and 1960s. During this time, problems with particulate contamination were identified and a research program was started.    </p>
<div class="graph-wrapper">
<div id="charts" style="width:400px; float:left; margin-right:80px;">
<div id="canvas-holder" style="width:400px; float:left; margin-right:10px;">
<p class="space"><strong>
            Research shows contamination came from three sources:            </strong></p>
<canvas height="360" id="ce-chart" style="margin-top:20px; margin-left:20px;" width="360"></canvas>
</div>
</div>
</div>
<script>
		
//Pie-Chart Data
var myoptions = { 
inGraphDataShow : true, 
inGraphDataAnglePosition : 2,
inGraphDataRadiusPosition: 2,
inGraphDataRotate : "inRadiusAxisRotateLabels",
inGraphDataAlign : "center",
inGraphDataVAlign : "middle",
inGraphDataFontColor : "white",
inGraphDataFontSize : 14,
inGraphDataTmpl : "<%=(v1 == ''? '' : v1)+ ' - ' + v6 + '%'%>",
animationEasing : "easeOutQuart",
annotateDisplay : true,
annotateLabel : "<%=(v1 == ''? '' : v1)+ ' - ' + v6 + '%'%>", 
animationSteps : 175,
}  
var pieData = [
{
value : 5,
color: "rgba(0,151,180,1.0)",
highlight: "rgba(0,151,180,0.75)",
title : "Room"
},

{
value : 15,
color: "rgba(205,27,0,1.0)",
title : "Equipment"
},
{
value : 80,
color: "rgba(8,51,114,1.0)",
highlight: "rgba(205,27,0,0.75)",
title : "People"
}
]
</script><!-- charts -->
<style>
#contaminants li { min-height:75px; margin:0px 10px 0px 0px; line-height:1.4; }
#contaminants img {margin: 0px 5px;}
</style>
<div id="contaminants" style="width: 470px; float:left; margin-top:10px;">
<p><strong>
	  
There are four main groups of contaminants:</strong></p><br/>
<ul style="list-style:none; margin:0px; padding:0px;">
<li><img height="78" src="<?php echo pip_asset('images/channel/img-ce-particles.png'); ?>" style="float:left;" width="75"/>
<strong>Particles</strong> - usually carried on air currents, are solid matter, such as human skin flakes, dust and fibers from clothing, particles from production materials or from tooling and equipment.</li><br/><br/>
<li><img height="78" src="<?php echo pip_asset('images/channel/img-ce-bacteria.png'); ?>" style="float:left;" width="75"/>
<strong>Microorganisms</strong> such as bacteria can be extremely dangerous if they are allowed to contaminate medicines that will be administered to people who are injured or sick, or if they should contaminate food and cause poisoning.</li><br/>
<li><img height="78" src="<?php echo pip_asset('images/channel/img-ce-chemicals.png'); ?>" style="float:left;" width="75"/><br/>
<strong>Chemicals</strong> can react with the product and cause changes to the formulation or destroy the product.</li><br/>
<li><img height="78" src="<?php echo pip_asset('images/channel/img-ce-static.png'); ?>" style="float:left;" width="75"/>
<strong>Electrostatic discharge</strong> given off by the human body can be as high as 35,000 volts. The energy attracts particles and, as these particles colonize in one place, they cause particulate damage. The discharge itself can also cause severe damage.</li><br/>
</ul>
</div>
</div>
</div>
<div id="channel-products" style="height:50vw;">
<div class="tiles tile tile-quarter tile-lead">
<h2>
        INNOVATION AND CERTIFIED SAFETY</h2>
<p>
        PIP is a known leader in the fabrication of fabric inspection gloves for all critical environments, but our product line for specialty safety needs does not end there. Whether it is gloves, aprons or matting, we have you covered.        </p>
</div>
<div class="tiles tile tile-half prod-slide-anchor" id="inspection" style="background-image: url('<?php echo pip_asset('images/channel/img-ce-cotton-inspection.jpg'); ?>');">
<h2 class="none" style="color:#666;">
    Leading the market for thirty years</h2>
</div>
<div class="prod-slide-wrap" id="inspection-slide-wrap">
<div class="prod-slide" id="inspection-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2>
Leading the market for thirty years</h2>
<p class="space">
Cotton lisle inspection gloves are designed to minimize contamination from human hands, but can also be used as liners to enhance comfort or minimize alleric reastions when wearing single-use or unsupported liquid proof gloves.</p>
<br/>
<p class="m-space">
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2561&amp;ccID=11553&amp;construction=--Cut-and-Sewn--" target="_blank">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-ce-inspection.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<!-- extreme -->
<div class="tiles tile tile-quarter tile-tall tile-right prod-slide-anchor" id="extreme" style="background-image: url('<?php echo pip_asset('images/channel/ce-extreme-temp.jpg'); ?>');">
<h2 class="none"><a href="https://us.pipglobal.com/en/products/?scID=2560&amp;ccID=11570&amp;sID=28093&amp;ssID=79676&amp;pID=980" style="color:#fff; font-weight:300; text-decoration:none;" target="_blank">
HANDLE EXTREME TEMPERATURES</a></h2>
</div>
<div class="prod-slide-wrap" id="extreme-slide-wrap">
<div class="prod-slide" id="extreme-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2>
HANDLE EXTREME TEMPERATURES</h2>
<p class="space">
Our Temp-Gard™ products keep you protected in the most extreme temperatures, ranging from -321°F (-196°C) to +500°F (+260°C). Liquid-proof silicone fabric is easy to clean and will not stain, and retains superior flexibility and grip at all temperatures. These qualities make them ideal for working conditions in cryogenic cleaning or systems maintenance, as well as the conservations of food produce.
</p>
<br/>
<p class="m-space">
<a class="button button-black" href="https://us.pipglobal.com/en/products/?q=search&amp;v=temp-gard" target="_blank">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-ce-temp.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<!-- single-use -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="single" style="background-image: url('<?php echo pip_asset('images/channel/img-ce-single-use.jpg'); ?>');">
<h2 class="none" style="color:#666; text-decoration:none;">
Single Use Gloves</h2>
</div>
<div class="prod-slide-wrap" id="single-slide-wrap">
<div class="prod-slide" id="single-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2>
Single Use Gloves</h2>
<p class="space">
Our Ambidex<sup>®</sup> and Cleanteam<sup>®</sup> line up of gloves include medical grade sterile and cleanroom rated gloves in latex, vinyl and nitrile.</p>
<p class="space">Cleanrooms are classified according to the number and size or particles permitted per volume of air. Large numbers like "Class 100" refer to FED-STD-209E, and denote the number of particles of size 0.5 or larger permitted per cubic foot of air. Gloves are carefully manufactured, tested and packaged to ensure a particle count that is compatible with the cleanroom environment in which they will be used.</p>
<br/>
<p class="m-space">
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2561&amp;ccID=11553&amp;sID=27907" target="_blank">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-ce-disposable.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<!-- seamless -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="seamless" style="background-image: url('<?php echo pip_asset('images/channel/img-ce-seamless-knit.jpg'); ?>');">
<h2 class="none">
Low lint knits</h2>
</div>
<div class="prod-slide-wrap" id="seamless-slide-wrap">
<div class="prod-slide" id="seamless-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2>
Low lint knits</h2>
<p class="space">
<p class="space" style="line-height:1.5; color:#666;">
Our Cleanteam<sup>®</sup> line of gloves includes multiple styles in coated and uncoated versions. These durable gloves serve cleanroom assembly manufacturing, pharmaceuticals and paint and finishing facilities. <strong>Nylon</strong> yarns absorb perspiration and leave hands cool and comfortable. Ideal for electronics assembly, photography labs and computer manufacturing. <strong>Polyester</strong> can be sterilized and can be washed with minimal shrinkage. Ideal for paint rooms and pharmaceutical production. Electrostatic Dissapative Nylon Knit (ESD) fiber yarns are blended with low-lint nylon, to reduce static build-up, making them ideal for circuit board manufacturing, electronics assembly and aerospace applications.</p>
<br/>
<p class="m-space">
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2561&amp;ccID=11553&amp;sID=27949" target="_blank">VIEW PRODUCTS</a>
</p>
</p></div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-ce-lint.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="mats" style="background-image: url('<?php echo pip_asset('images/channel/img-ce-mats.jpg'); ?>');">
<h2 class="none" style="color:#666;">
Contamination Control</h2>
</div>
<div class="prod-slide-wrap" id="mats-slide-wrap">
<div class="prod-slide" id="mats-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2>
Contamination Control</h2>
<p class="space">
<p class="space" style="line-height:1.5; color:#666;">
Specially designed adhesive coated mats reduce foot borne dust and particulates from entering cleanrooms and controlled environments. We also offer clearnoom paper, which has anti-static properties to reduce attraction of airborne particles and is resistant to chemicals<br/> and moisture.</p>
<br/>
<p class="m-space">
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2561&amp;ccID=11548" target="_blank">VIEW PRODUCTS</a>
</p>
</p></div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-ce-mat.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
</div>
<div class="testimonial_quote">
<div class="container">
<p class="space">
"Thirty years ago, my partner, Wellson Tao and I set out to build a company focused on providing workers personal protective products that provided value and met the highest performance standards. Choosing a name for our company was the easy part. Protective Industrial Products (PIP)"</p>
<p class="space" style=" text-align:right; padding-right:50px;"><em>
- Joe Milot, President</em>
</p>
<p style="text-align:right; margin-right:50px;"><em>Protective Industrial Products Inc.</em></p>
</div>
</div>
