<?php
/**
 * Template part for Electricity Channel
 */
?>
<div id="lead-in-channel">
<div id="ss-overlay"></div>
<video autoplay="autoplay" id="video-lead-in" loop="loop" muted="">
<source src="https://www.pipglobal.com/videos/mp4/electrical.mp4" type="video/mp4"/>
<source src="https://www.pipglobal.com/videos/ogv/electrical.webm" type="video/webm"/>
<source src="https://www.pipglobal.com/videos/webm/electrical.ogv" type="video/ogg"/>
<!-- <embed
          src="YTPlayer.swf"
          flashvars="movieName=electrical.mp4&autoStart=true"
          width=100%
          height=auto
          allowFullScreen=true
          type="application/x-shockwave-flash"
          pluginspage="http://get.adobe.com/flashplayer" /> -->
</video>
<div id="lead-in-text">
<h1>
ELECTRICAL SAFETY<br/> <span>CHANNEL</span></h1>
<p class="space">
Electrical workers are 600,000 strong in the United States. Dedicated and highly skilled, these professionals work hard to keep America energized. Our commitment is to help keep electrical workers safe. PIP is a leader in safety garments, gloves and tools that meet and exceed tough ANSI and NFPA standards.</p>
</div>
</div>
<div class="testimonial" style="text-align:center;">
<div class="container">
<h3 class="space" style=" margin-bottom:40px; text-align:center;">
Types of Electricians &amp; their Working Environments</h3>
<div class="row" id="elec-types">
<div class="col-md-3 col-sm-6 col-xs-12">
<img src="<?php echo pip_asset('images/channel/electrical-type-residential.svg'); ?>"/>
<h4>
    RESIDENTIAL    </h4>
<p>
    Installs and maintains a variety of wiring systems including security systems, fire alarm systems and energy management systems along with the standard electrical wiring and lighting systems in a home.    </p>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<img src="<?php echo pip_asset('images/channel/electrical-type-commercial.svg'); ?>"/>
<h4>
    COMMERCIAL    </h4>
<p>
    Handles the complex computer, security, surveillance and lighting systems found in buildings such as offices, restaurants, theaters and schools.    </p>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<img src="<?php echo pip_asset('images/channel/electrical-type-industrial.svg'); ?>"/>
<h4>
    INDUSTRIAL    </h4>
<p>
    Works with the heavy machinery, generators, transformers, and control systems that operate within factories, processing plants and manufacturing centers. As technology advances, robotics are increasingly used and industrial engineers are involved.    </p>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<img src="<?php echo pip_asset('images/channel/electrical-type-lineman.svg'); ?>"/>
<h4>
    OUTSIDE LINEMAN    </h4>
<p>
    The professional who brings the electricity from the plant to the home. They work with substations, transformers, and the lines that run either underground or from pole to pole to bring the power to the structure.    </p>
</div>
</div>
</div>
<div class="clear" id="chartstart"></div>
</div>
<div class="channel-info">
<div class="container">
<h2 class="space">
PPE THAT SAVES LIVES</h2>
<p class="space" style="line-height:1.5;">
NFPA 70E has done a lot to improve the safety of electricians, workers and utility personnel. The proper use of personal protective equipment (PPE) is a critical aspect of any electrical safety program. Electrical hazards average about 4,000 injuries in the workplace each year. While fatalities related to worker electrocutions have declined dramatically with regulation on operating procedures, equipment improvements and PPE (from 300 deaths to around 70 per year in the last twenty years) even one death is too many.</p>
<p class="space" style="margin-bottom:30px;">
That is why PIP has invested in developing products that meet and surpass industry standards. We believe an ounce of prevention is worth a pound of cure.</p>
<div class="graph-wrapper">
<div id="charts" style="width:450px; float:left; margin-right:80px;">
<p class="space" style="text-align:center; font-weight:bold; color:#333;">
Electrical Fatalities by Industry Group<br/>United States, 2003-2010</p>
<canvas height="350" id="injury-death-rate" width="450"></canvas>
<p style="font-size:8px; text-align:center;">
Compiled by the Electrical Safety Foundation International using data from the U.S. Bureau of Labor Statistics, CFOI, 1992-2010</p>
</div>
</div>
<div class="graph-wrapper">
<div id="canvas-holder" style="width:450px; float:left; margin-right:10px;">
<p class="space" style="text-align:center; color:#333;"><strong>
Nonfatal Electrical Injuries by Part of Body Affected, <br/>United States, 2010</strong></p>
<canvas height="360" id="pie-chart" style="margin-left:50px;" width="360"></canvas>
</div>
</div>
<script>
// Bar Graph data
var startWithDataset =1;
var startWithData =1; 

var opt1 = {
animationStartWithDataset : startWithDataset,
animationStartWithData : startWithData,
animationSteps : 175,
canvasBorders : false,
legend : true,
inGraphDataShow : false,
inGraphDataTmpl : "<%=v6 + '%'%>",
legendBorders: false,
annotateDisplay : true,
annotateLabel : "<%=v3 + '%'%>", 
scaleLineColor: "rgba(0,0,0,0.5)",
scaleOverride: true,
scaleSteps: 6,
scaleStepWidth: 10,
scaleShowGridLines: false,
barValueSpacing: 1,
	  		
}
var barChartData = {
labels : ["Other services", "Professional & Business Services","Trade, Transportation & Utilities","Natural Resources and Mining","Manufacturing", "Construction"],
datasets : [
{
title: "Percent",
fillColor : "rgba(205,27,0,1.0)",
strokeColor : "rgba(255,255,255,0.8)",
highlightFill: "rgba(109,109,109,0.75)",
highlightStroke: "rgba(220,220,220,1)",
data : [6, 13, 11, 9, 8, 52]
}
				
		
]
}
		
//Pie-Chart Data
var myoptions = { 
inGraphDataShow : true, 
inGraphDataAnglePosition : 2,
inGraphDataRadiusPosition: 2,
inGraphDataRotate : "inRadiusAxisRotateLabels",
inGraphDataAlign : "center",
inGraphDataVAlign : "middle",
inGraphDataFontColor : "white",
inGraphDataFontSize : 12,
inGraphDataTmpl : "<%=v1%>",
animationEasing : "easeOutQuart",
annotateDisplay : true,
annotateLabel : "<%=(v1 == ''? '' : v1)+ ' - ' + v6 + '%'%>", 
animationSteps : 175,
}  
var pieData = [
				{
value : 2.8,
color: "rgba(0,151,180,1.0)",
highlight: "rgba(0,151,180,0.75)",
title : "Head"
},
{
value : 1.0,
color: "rgba(64,64,154,1.0)",
title : "Eye"
},
{
value : 14.2,
color: "rgba(205,27,0,1.0)",
title : "Upper Extremities"
},
{
value : 4.7,
color: "rgba(253,184,19,1.0)",
title : "Finger"
},
{
value : 5.2,
color: "rgba(243,111,35,1.0)",
highlight: "rgba(205,27,0,0.75)",
title : "Hand except finger"
},
{
value : 64.9,
color: "rgba(0,101,179,1.0)",
title : "Body Systems"
},
{
value : 6.2,
color: "rgba(163,192,48,1.0)",
title : "Multiple"
},
{
value : 1.0,
color: "rgba(168,159,142,1.0)",
title : "All other"
}
]
</script><!-- charts -->
</div>
<div class="clear"></div>
</div>
<div id="channel-products">
<div class="tiles tile tile-quarter tile-lead">
<h2>
INNOVATION AND CERTIFIED SAFETY</h2>
<p class="space">
First to market with innovative products that keep you safe and help you to work more productively. ATG® and G-Tek® glove lines feature unparalleled proprietary designs, coating and materials. Lens technologies from Bouton® Optical offer more than just impact protection.   
</p>
</div>
<div class="tiles tile tile-half prod-slide-anchor" id="novax" style="background-image: url('<?php echo pip_asset('images/channel/img-el-novax.jpg'); ?>'); background-position: top;">
<h2 class="none">NOVAX®</h2>
</div><!-- maxiflex -->
<div class="prod-slide-wrap" id="novax-slide-wrap">
<div class="prod-slide" id="novax-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
<span class="brand-icon-novax" style="font-size:4vw; color:#666;"></span>
</div>
<div>
<h2>
The Novax® Difference</h2>
<p class="space">
Novax® products exceed all requirements of ASTM D120, ensuring compliance with OSHA regulations and satisfying NFPA 70E requirements for protection against electrical shock hazards. The natural rubber construction offers excellent dielectric properties combined with flexibility, strength, and durability. Other features include a contoured shape that reduces hand fatigue and a rolled cuff for increased durability during donning and doffing.</p>
<br/>
<p class="m-space">
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2565&amp;ccID=11620" target="_blank">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-electrical-novax.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter tile-tall tile-right prod-slide-anchor" id="dual" style="background-image: url('<?php echo pip_asset('images/channel/img-el-dual.jpg'); ?>');">
<h2 class="none"><a href="https://us.pipglobal.com/en/products/?scID=2560&amp;ccID=11570&amp;sID=28093&amp;ssID=79676&amp;pID=980" style="color:#fff; font-weight:400; text-decoration:none;" target="_blank">
Dual Certified Clothing</a></h2>
</div>
<div class="prod-slide-wrap" id="dual-slide-wrap">
<div class="prod-slide" id="dual-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2 class="none">
DUAL CERTIFIED CLOTHING</h2>
<p class="space"><strong style="color:#cd1b00;">NFPA 70E:</strong> 
Electrical safety in the workplace</p>
<p class="space"><strong style="color:#cd1b00;">NFPA 2112:</strong> 
Protection against flash fire</p>
<p class="space">
PIP offers multiple styles and colors of workshirts, jeans and coveralls, designed for all day comfort. All metal parts are thermally protected from the skin, and the coveralls even feature a breakaway zipper, allowing a quick escape from the garment in a dangerous situation.</p>
<br/>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?q=search&amp;v=dual%20certified" target="_blank">VIEW PRODUCTS</a>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-electrical-dual.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-half prod-slide-anchor" id="argloves" style="background-image: url('<?php echo pip_asset('images/channel/tile-electrical-arc-gloves.jpg'); ?>'); background-position: top;">
<h2 class="none">
Arc Rated Gloves</h2>
</div><!-- maxiflex -->
<div class="prod-slide-wrap" id="argloves-slide-wrap">
<div class="prod-slide" id="argloves-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
<span class="brand-icon-novax" style="font-size:4vw; color:#666;"></span>
</div>
<div>
<h2>
Protection from Arc Flash Risks</h2>
<p class="space">
PIP offers three solutions for Arc Rated (AR) Gloves designed to meet the needs of workers operating in high risk electrical areas, including protection, dexterity and comfort for the job. 
</p>
<br/>
<p class="m-space">
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2560&amp;ccID=11581&amp;resistance_type=--Arc+Rated--" target="_blank">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-electrical-arc-gloves.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="sleeve" style="background-image: url('<?php echo pip_asset('images/channel/tile-electrical-novax-sleeve.jpg'); ?>');">
<h2 class="none">
NOVAX® SLEEVES</h2>
</div>
<div class="prod-slide-wrap" id="sleeve-slide-wrap">
<div class="prod-slide" id="sleeve-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
<span class="brand-icon-novax" style="font-size:4vw; color:#666;"></span>
</div>
<div>
<h2 class="none">
Insulating Sleeves</h2>
<p class="space">
Novax® sleeves are made from the highest quality, natural latex rubber with <strong>no solvents or additives</strong>, and offer outstanding durability, strength and excellent dielectric properties. Ergonomically designed through an aqueous dip process, the curved sleeve shape also helps reduce fatigue. They include straps and buttons that keep the sleeves in the proper position at no extra cost to the customer. </p>
<br/>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2565&amp;ccID=11670" target="_blank">VIEW PRODUCTS</a>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-electrical-novax-sleeve.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="40cal" style="background-image: url('<?php echo pip_asset('images/channel/tile-electrical-40cal.jpg'); ?>');">
<h2 class="none">
Ultralight 40 Cal/cm2</h2>
</div><!-- #kits -->
<div class="prod-slide-wrap" id="40cal-slide-wrap">
<div class="prod-slide" id="40cal-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2 class="none">
HYBRID FABRIC TECHNOLOGY</h2>
<p class="space">
Ultralight 40 Cal/cm2 clothing utilizes a Hybrid Fabric Technology to increase garment durability in the field while decreasing its weight by 37%. Our Ultralight garment uses a DuPont® shell to provide its superior tensile strength, industrial wash resistance, and long-term durability. Meets NFPA 70E, ASTM F1506, OSHA 29 CFR 1910.269</p>
<br/>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?q=search&amp;v=40%20cal" target="_blank">VIEW PRODUCTS</a>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-electrical-40cal.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="bouton" style="background-image: url('<?php echo pip_asset('images/channel/img-el-bouton.jpg'); ?>');">
<h2 class="none">
Bouton Dielectric Safety Glasses</h2>
</div>
<div class="prod-slide-wrap" id="bouton-slide-wrap">
<div class="prod-slide" id="bouton-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
<span class="brand-icon-bouton" style="font-size:4vw; color:#666;"></span>
</div>
<div>
<h2 class="none">
Dielectric Safety Glasses</h2>
<p class="space" style="line-height:1.5; color:#666;">
Bouton offers a few styles that do not contain any metal components, making them non-conductive and safe for those who are working near or around electricity. They are offered in a number of colors and lens treatments, and their rimless frame styles allow for a great field of vision and comfort, even for those who are not used to wearing glasses.</p>
<br/>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?q=search&amp;v=250-57|250-36" target="_blank">VIEW PRODUCTS</a>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-electrical-dielectric.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-half prod-slide-anchor" id="arckit" style="background-image: url('<?php echo pip_asset('images/channel/tile-electrical-arc-kits.jpg'); ?>');">
<h2 class="none">
ARC FLASH KITS</h2>
</div>
<div class="prod-slide-wrap" id="arckit-slide-wrap">
<div class="prod-slide" id="arckit-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2 class="none">
ARC FLASH KITS</h2>
<p class="space">
PIP has worked to develop multiple kits for high risk environments that meet and exceed standards for electrical safety in the workplace. For example, our Ultralight 40 cal/cm2 kits include:</p>
<p>
<strong>Jacket and overpants</strong> with Hybrid Fabric Technology to increase garment durability in the field while decreasing its weight by 37%. The garments have a DuPont® shell to provide superior tensile strength, industrial wash resistance and long-term durability.</p>
<p>
Arc flash suit hood, ventilated with battery pack or non-ventilated. The ventilation unit is protected by a compact and durable ABS case covered by our Ultralight fabric, weighs only 1 pound and provides over six hours of battery life.</p>
<p>
Bouton® Optical Tranzmission™ <strong>dielectric safety glasses</strong></p>
<p>
JSP® Evolution® Cap style <strong>Hard Hat</strong>, certified to Class E and tested to 20,000 volts.</p>
<p>
Your choice of a <strong>backpack or carry bag</strong> for storage.</p>
<br/>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?q=search&amp;v=250-57|250-36" target="_blank">VIEW PRODUCTS</a>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-electrical-kits.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
</div>
<div class="testimonial_quote">
<div class="container">
<p class="space">
        "Thirty years ago, my partner, Wellson Tao and I set out to build a company focused on providing workers personal protective products that provided value and met the highest performance standards. Choosing a name for our company was the easy part. Protective Industrial Products (PIP)"        </p>
<p class="space" style=" text-align:right; padding-right:50px;"><em>
        - Joe Milot, President        </em>
</p>
<p style="text-align:right; margin-right:50px;"><em>Protective Industrial Products Inc.</em></p>
</div>
</div>
