<?php
/**
 * Template part for Construction Channel
 */
?>
<div id="lead-in-channel">
<div id="ss-overlay"></div>
<video autoplay="autoplay" id="video-lead-in" loop="loop" muted="">
<source src="https://www.pipglobal.com/videos/mp4/construction.mp4" type="video/mp4"/>
<source src="https://www.pipglobal.com/videos/webm/construction.webm" type="video/webm"/>
<source src="https://www.pipglobal.com/videos/ogv/construction.ogv" type="video/ogg"/>
</video>
<div id="lead-in-text">
<h1>

CONSTRUCTION<br/><span>CHANNEL</span></h1>
<p class="space">

Dynamic and colossal, the construction market accounts for nearly four percent of America’s gross domestic product and is responsible for keeping over six million Americans employed. PIP sets its goal on keeping each and every one of them safe.</p>
</div>
</div>
<div class="testimonial">
<div class="container">
<div class="construction-testimonial">
<p class="space">

	“I have been in the construction field for more than 20 years. In my experience, I have found nothing that beats the quality and durability of Protective Industrial Products’ glove line.”</p>
<p class="space" style=" text-align:right;"><em>- John Ruggiero</em></p>
<p style="text-align:right;">
<em>

End User, Billington Heights, NY</em>
</p>
</div>
</div><!-- channel container -->
<div class="clear" id="chartstart"></div>
</div>
<div class="channel-info">
<div class="container">
<h3 class="space">

PPE THAT SAVES LIVES</h3>
<p class="space" style="line-height:1.5;">

Over the years, the advancement in the use of mechanical equipment, along with stricter regulatory compliance, has helped to prevent accidents and reduce injuries. However, the fact remains that  construction is amongst the highest risk industries to work in. Nearly 12% of worker fatalities involve construction workers, an alarming 14 deaths per week. Around 4.2 injuries have been reported per every 100 workers, with an average cost per claim around $38,000. This negatively affects our economy, but more importantly is a significant financial burden, on top of the physical pain and suffering, that extends to families and loved ones.

</p>
<p class="space" style="margin-bottom:30px;">

 That is why PIP has invested in developing products that meet and surpass industry standards. We believe an ounce of prevention is worth a pound of cure.</p>
<div class="graph-wrapper">
<div id="charts" style="width:450px; float:left; margin-right:80px;">
<p class="space" style="text-align:center; font-weight:bold; color:#333;">

Occupational unintentional-injury-related deaths<br/> and death rates by industry, United States, 2010</p>
<canvas height="350" id="injury-death-rate" width="450"></canvas>
<p style="font-size:8px; text-align:center;">

* Agriculture includes foresty, fishing and hunting. Mining includes oil and gas extraction. Other services excludes public administration</p>
</div><!-- #charts -->
</div>
<div class="graph-wrapper">
<div id="canvas-holder" style="width:450px; float:left; margin-right:10px;">
<p class="space" style="text-align:center; color:#333;"><strong>

Percent of Injury Related emergency department visits by <br/>body site of primary diagnosis, United States, 2010</strong></p>
<canvas height="360" id="pie-chart" style="margin-left:50px;" width="360"></canvas>
</div>
</div><!-- #canvas-holder -->
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

inGraphDataTmpl : "<%=v1+' '+v2%>",

legendBorders: false,

annotateDisplay : false,

scaleLineColor: "rgba(0,0,0,0.5)",

scaleOverride: true,

scaleSteps: 5,

scaleStepWidth: 5,

scaleShowGridLines: false,

barValueSpacing: 1, 		

}

var barChartData = {

labels : [

"CONSTRUCTION","Transportation and warehousing","Agriculture*","Professional and business services","Government","Manufacturing","Mining*", "Wholesale trade", "Retail trade", "Leisure and hospitality", "Other services", "Educational and health services", "Financial activities", "Information", "Utilities",],

datasets : [

{

title: "Deaths (in hundreds)",

fillColor : "rgba(90,90,90,1)",

strokeColor : "rgba(109,109,109,0.8)",

highlightFill: "rgba(109,109,109,0.75)",

highlightStroke: "rgba(220,220,220,1)",

data : [7.5, 6, 4.5, 4, 3.5, 3, 2, 2, 1.5, 1, 1, 0.5, 0.5, 0.2, 0.1,]

},

{

title: "Deaths per 100,000 full-time equivalent workers",

fillColor : "rgba(205,27,0,1)",

strokeColor : "rgba(220,220,220,0.8)",

highlightFill: "rgba(229,56,30,0.75)",

highlightStroke: "rgba(220,220,220,1)",

data : [9, 12, 21, 2, 1.5, 1.75, 15, 4, 1, 1.2, 1.75, 0.5, 0.7, 1, 2.5,]

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

inGraphDataFontSize : 11,

inGraphDataTmpl : "<%=(v1 == ''? '' : v1)+ ' - ' + v6 + '%'%>",

animationEasing : "easeOutQuart",

annotateDisplay : true,

annotateLabel : "<%=(v1 == ''? '' : v1)+ ' - ' + v6 + '%'%>", 

animationSteps : 175,

}  

var pieData = [

				{

value : 12,

color: "rgba(0,151,180,1.0)",

highlight: "rgba(0,151,180,0.75)",

title : "Head and Neck"

},

{

value : 5,

color: "rgba(253,184,19,1.0)",

title : "Torso"

},

{

value : 5,

color: "rgba(168,159,142,1.0)",

title : "  Vertibral column"

},

{

value : 17,

color: "rgba(0,101,179,1.0)",

title : "Upper extremity"

},

{

value : 13,

color: "rgba(205,27,0,1.0)",

highlight: "rgba(205,27,0,0.75)",

title : "Lower Extremity"

},

{

value : 5,

color: "rgba(243,111,35,1.0)",

title : "Systemwide"

},

{

value : 5,

color: "rgba(1,115,55,1.0)",

title : "Other"

},

{

value : 18,

color: "rgba(163,192,48,1.0)",

title : "Multiple Diagnoses"

},

{

value : 20,

color: "rgba(64,64,154,1.0)",

title : "Without Diagnoses"

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
<div class="tiles tile tile-half prod-slide-anchor" id="maxiflex" style="background-image: url('<?php echo pip_asset('images/channel/tile-industrial-adapt.jpg'); ?>'); background-position: top;">
<h2 class="none">

A NEW AND IMPROVED MaxiFlex®</h2>
</div><!-- maxiflex -->
<div class="prod-slide-wrap" id="maxiflex-slide-wrap">
<div class="prod-slide" id="maxiflex-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
<span class="brand-icon-atg" style="font-size:4vw; color:#666;"></span>
</div>
<div>
<h2>

The #1 Industrial Glove in America Just Got Better</h2>
<p>

MaxiFlex® Ultimate™ gloves are designed and developed with 360° breathability through the use of ATG’s patented AIRtech® platform now improved using game-changing technology. Now, the next generation MaxiFlex® Ultimate™ with AD-APT™ Technology is also treated to keep worker’s hands cooler and drier. AD-APT™ provides a new “Ultimate” in all-day comfort and improved productivity.</p>
<br/>
<p class="m-space">
<a class="button" href="https://us.pipglobal.com/en/products/maxiflex-ultimate-with-ad-apt/" target="_blank">LEARN MORE</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image">
<div class="tech-view twentytwenty-container" id="tech-views-adapt">
<div class="img" style="background-image:url('<?php echo pip_asset('images/channel/slide-industrial-adapt-before.jpg'); ?>'); background-position:center;"></div>
<div class="img" style="background-image:url('<?php echo pip_asset('images/channel/slide-industrial-adapt-after.jpg'); ?>'); background-position:center;"></div>
</div><!-- tech-views-io -->
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-tall tile-quarter tile-right prod-slide-anchor" id="gtek" style="background-image: url('<?php echo pip_asset('images/channel/tile-construction-x7.jpg'); ?>'); background-size:cover; background-position: center bottom;">
<h2 class="none">

MAXIMUM CUT PROTECTION AND DURABILITY</h2>
</div><!-- g-tek -->
<div class="prod-slide-wrap" id="gtek-slide-wrap">
<div class="prod-slide" id="gtek-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
<span class="brand-icon-gtek-x7" style="font-size:5vw; color:#666;"></span>
</div>
<div>
<h2 class="none">

The latest in engineered yarn development.</h2>
<p>

PIP’s G-Tek® PolyKor® with X7™ Technology represents the latest in engineered yarn development. This super light-weight and thin, 18 gauge reinforced yarn provides very high cut resistance and durability by way of proprietary fibers. The result is exceptional cut resistance in a thin liner configuration. </p>
<br/>
<p class="m-space">
<a class="button" href="https://us.pipglobal.com/en/products/gtek-polykor-xrystal/" target="_blank">LEARN MORE</a>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2560&amp;ccID=11570&amp;liner_material=--PolyKor+Xrystal--" target="_blank">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-construction-x7.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-half prod-slide-anchor" id="hivis" style="background-image: url('<?php echo pip_asset('images/channel/img-construction-hi-vis.jpg'); ?>');">
<h2 class="space" style="color:#fff; text-decoration:none;">

Be Seen, Be safe</h2>
</div><!-- hi-vis -->
<div class="prod-slide-wrap" id="hivis-slide-wrap">
<div class="prod-slide" id="hivis-slide">
<div class="slide-text">
<h2 class="none">

Be Seen, Be safe</h2>
<p>

Construction jobs are not limited to the daytime, and it is essential to be easily seen in all light conditions. PIP has been a leader in ubiquitous adoption of Hi-Vis garments for all applications where workers are at risk. It's no longer just for road workers. For prudence, even mandating Hi-Vis T-shirts as a standard is an extra ounce of prevention. PIP has it all.</p> <br/>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2563&amp;ccID=11629" target="_blank">VIEW PRODUCTS</a>
</div><!-- slide-text -->
<div class="slide-image" style="background-image: url('<?php echo pip_asset('images/channel/slide-industrial-hivis.jpg'); ?>');">
<div class="close-slide">X</div><!-- close slide -->
</div><!--slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="jsp" style="background-image:url('<?php echo pip_asset('images/channel/tile-construction-4200.jpg'); ?>');">
<h2 class="space">

AFFORDABLE PERFORMANCE</h2>
</div><!-- jsp -->
<div class="prod-slide-wrap" id="jsp-slide-wrap">
<div class="prod-slide" id="jsp-slide">
<div class="slide-text">
<h2 class="none">

4200 Series HARD HATS</h2>
<p>

Our newest line of hard hats is value-engineered for performance and affordability. Featuring a light weight design for minimal fatigue and 4-point suspension that provides unrivalled comfort, the 4200 series is certified for Protection-ANSI/ISEA Z89.1 and CSA Z94.1, as well Class E Electrical Insulation requirements. Available with a wheel ratchet or slip ratchet to provide the proper fit.</p>
<p class="gap"></p>
<a class="button" href="https://us.pipglobal.com/en/products/pip-4200-series-hard-hats/">LEARN MORE</a>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-construction-4200.jpg'); ?>'); color:#fff;">
<div class="close-slide">X</div>
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="polykor" style="background-image: url('<?php echo pip_asset('images/channel/tile-construction-resp.jpg'); ?>');">
<h2 class="space">

BREATHE SAFELY</h2>
</div><!-- #polykor -->
<div class="prod-slide-wrap" id="polykor-slide-wrap">
<div class="prod-slide" id="polykor-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
<span class="brand-icon-safety-works" style="font-size:4vw; color:#666;"></span>
</div>
<div>
<h2 class="none">

FILTER OUT THE RISK</h2>
<p class="space">

For over ten years, Safety Works has provided the market with high quality reusable and disposable respirators that are comfortable, lightweight and help workers stay safe. Now, PIP is excited to bring you the NEW Safety Works® Respiratory Product line, providing an excellent solution to keep you safe, hazard free, in alignment with OSHA regulation and enforcement of respirable crystalline silica standard.</p>
<br/>
<p class="m-space">
<a class="button" href="https://us.pipglobal.com/en/products/safety-works-respiratory-line/" target="_blank">LEARN MORE</a>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2566" target="_blank">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-construction-resp.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="bouton" style="background-image: url('<?php echo pip_asset('images/channel/img-construction-bouton.jpg'); ?>');">
<h2 class="space">

    Bouton<sup>®</sup> advances in lens technology

	</h2>
</div>
<div class="prod-slide-wrap" id="bouton-slide-wrap">
<div class="prod-slide" id="bouton-slide">
<div class="slide-text" style="justify-content:space-between;">
<div style="color:#666;">
<span class="brand-icon-bouton" style="font-size:3vw;"></span>
<p class="none" style="font-size:0.8rem; letter-spacing:1px;">

    LENS TECHNOLOGIES

	</p>
</div>
<div class="lens-tech-descriptions">
<div class="class-icon">
<span class="lt lt-current icon-lt-arplus" id="ar"></span>
<span class="lt icon-lt-mirrorplus" id="mp"></span>
<span class="lt icon-lt-ioblue" id="io"></span>
<span class="lt icon-lt-gradient" id="gr"></span>
<span class="lt icon-lt-polarized" id="po"></span>
</div>
<div class="tech-desc" id="td-ar">
<h3>

	ANTI-REFLECTIVE<span>PLUS™</span>
</h3>
<p><strong>

	THE CLOSEST THING TO NOT WEARING GLASSES

    </strong></p>
<p>

    Bouton® Anti-ReflectivePLUS™ lenses allow an astounding 96% Visible Light Transmission (VLT) compared to the 88—90% VLT provided by standard clear lenses. Durable Anti-ReflectivePLUS™ Anti-Reflective coating significantly reduces the amount of light that reflects back into the wearer’s eyes, providing ultimate visual acuity. Inspect, distinguish and see with more clarity—and less eye fatigue.

	</p>
</div>
<div class="tech-desc" id="td-gr" style="display:none;">
<h3>Gradient</h3>
<p><strong>

	REDUCE GLARE FROM OVERHEAD LIGHT</strong></p>
<p>

	High-powered overhead lights, such as fluorescent and mercury lighting, can cause glare that increases eye strain. Gradient lenses feature a slight mirror coating on the top portion of the lens, reducing glare, while the remainder of the lens remains clear. As a result, workers are still able to see clearly when looking straight ahead or down at their work.

	</p>
</div>
<div class="tech-desc" id="td-io" style="display:none;">
<h3>INDOOR OUTDOOR BLUE</h3>
<p><strong>

	PROTECT AGAINST HARMFUL BLUE LIGHT

	</strong></p>
<p>

	Overexposure to blue light, including smart phones, tablets and computer screens, has been known to cause eyestrain, fatigue and possibly contribute to long term macular degeneration. I/O Blue lenses are uniquely coated to help filter out harsh blue light and improve worker comfort and visual acuity. Lenses are also treated with a contrast booster to enhance color contrast.

	</p>
</div>
<div class="tech-desc" id="td-mp" style="display:none;">
<h3>

	MIRROR<span>PLUS™</span>
</h3>
<p><strong>

	TAKE ANTI-REFLECTIVE PLUS™ OUTDOORS</strong></p>
<p>

	A mirror coating on the face of the lens will deflect sunlight from the wearer’s eyes, delivering noticeably less glare and reflection than standard gray lenses. Anti-ReflectivePLUS™ coating on the back of the lens significantly reduces light reflecting back into the eye for enhanced comfort and performance.

	</p>
</div>
<div class="tech-desc" id="td-po" style="display:none;">
<h3>

	POLARIZED<span>XL5™</span>
</h3>
<p><strong>

	FILTER REFLECTED SUNLIGHT FOR A CLEAR VIEW</strong></p>
<p>

	Reflected sunlight from smooth surfaces, such as water, pavement, and snow can dangerously hinder vision and cause significant eyestrain. PolarizedXL5™ lenses filter the scatter light by controlling the angle at which it enters the lens. The result is clearer vision of the surrounding area and greatly reducing eye glare.

	</p>
</div>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background:#000; color:#fff;">
<div class="tech-view twentytwenty-container" id="tech-views-io">
<div class="img" id="before" style="background-image:url('<?php echo pip_asset('images/channel/lt-before-ar.jpg'); ?>');"></div>
<div class="img" id="after" style="background-image:url('<?php echo pip_asset('images/channel/lt-after-ar.jpg'); ?>');"></div>
</div><!-- tech-views-io -->
<div class="close-slide">X</div>
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-half prod-slide-anchor" id="maxsafety" style="background-image: url('<?php echo pip_asset('images/channel/img-construction-maxsafety.jpg'); ?>');">
<h2 class="space" style="color:#fff; text-decoration:none;">

Pioneers in TPR technology</h2>
</div><!-- max-safety -->
<div class="prod-slide-wrap" id="maxsafety-slide-wrap">
<div class="prod-slide" id="maxsafety-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
<span class="brand-icon-maximum-safety" style="font-size:4vw; color:#666;"></span>
</div>
<div>
<h2 class="none">

maximum performance, maximum safety.</h2>
<p class="space" style="line-height:1.5;">

Our high-performance glove styles are designed to combine comfort, safety performance, and maximum protection. Thermo plastic rubber (TPR) gives additional cut and pinch point protection where it matters most, on the back of the hand, fingers, knuckles and thumb.</p>
<p class="mspace" style="line-height:1.5;">

For example, the Maximum Safety® TuffMax3 and TuffMax5 provide users with cut and pinch point protection in general duty handling and oily conditions. The HPPE fiber shell is light weight and provides excellent dexterity, tactile sensitivity and cut resistance that is available in EN cut level 3 and EN cut level 5. They also feature a MicroSurface nitrile-coated padded palm for an enhanced grip in wet and dry work conditions such as petrochem, construction, auto repair, demo, mining and fabrication.</p>
<br/>
<p class="m-space">
<a class="button" href="https://us.pipglobal.com/en/products/?q=search&amp;v=tpr" target="_blank">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-industrial-maximum-safety.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
</div>
<div class="testimonial_quote">
<div class="container">
<p class="space">

“I switched all my guys to Maxiflex<sup>®</sup> and all the complaining stopped. One glove that moves like your hand and can stand up to all the tasks on a construction site… that’s what we needed.”</p>
<p class="space" style=" text-align:right; padding-right:50px;"><em>

- Rose Fiermonte, President</em>
</p>
<p style="text-align:right; margin-right:50px;"><em>

DCI Dorbec Construction Inc.

</em></p>
</div>
</div>
