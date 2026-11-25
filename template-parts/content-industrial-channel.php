<?php
/**
 * Template part for Industrial Channel
 */
?>
<div id="lead-in-channel">
<div id="ss-overlay"></div>
<video autoplay="autoplay" id="video-lead-in" loop="loop" muted="">
<source src="https://www.pipglobal.com/videos/mp4/industrial.mp4" type="video/mp4"/>
<source src="https://www.pipglobal.com/videos/webm/industrial.webm" type="video/webm"/>
<source src="https://www.pipglobal.com/videos/ogv/industrial.ogv" type="video/ogg"/>
</video>
<div id="lead-in-text">
<h1>
INDUSTRIAL<br/><span>CHANNEL</span></h1>
<p class="space">
The industrial manufacturing sector remains a pillar of America’s economic strength. With nearly 12 million people assembling, crafting and refining all types of goods and raw materials, it is just not possible to engineer out all the risks. PIP is there with personal safety equipment that is designed to be the last line of defense.</p>
</div>
</div>
<div class="testimonial">
<div class="container">
<h3 class="space" style="color:#fff; margin-bottom:50px;">
Improving Safety with PIP Products</h3>
<ul class="bxslider">
<li><img height="200" src="<?php echo pip_asset('images/channel/logo-amazon.png'); ?>" width="241"/></li>
<li><img height="200" src="<?php echo pip_asset('images/channel/logo-boeing.png'); ?>" width="241"/></li>
<li><img height="200" src="<?php echo pip_asset('images/channel/logo-gm.png'); ?>" width="241"/></li>
<li><img height="200" src="<?php echo pip_asset('images/channel/logo-toyota.png'); ?>" width="241"/></li>
<li><img height="200" src="<?php echo pip_asset('images/channel/logo-chevron.png'); ?>" width="241"/></li>
<li><img height="200" src="<?php echo pip_asset('images/channel/logo-dow.png'); ?>" width="241"/></li>
<li><img height="200" src="<?php echo pip_asset('images/channel/logo-exxon-mobil.png'); ?>" width="241"/></li>
<li><img height="200" src="<?php echo pip_asset('images/channel/logo-fluor.png'); ?>" width="241"/></li>
<li><img height="200" src="<?php echo pip_asset('images/channel/logo-honda.png'); ?>" style="margin-right:50px;" width="241"/></li>
<li style="width:50px;"></li>
<li><img height="200" src="<?php echo pip_asset('images/channel/logo-lockheed-martin.png'); ?>" width="241"/></li>
<li><img height="200" src="<?php echo pip_asset('images/channel/logo-nestle.png'); ?>" width="241"/></li>
<li><img height="200" src="<?php echo pip_asset('images/channel/logo-nissan.png'); ?>" width="241"/></li>
<li><img height="200" src="<?php echo pip_asset('images/channel/logo-nucor.png'); ?>" width="241"/></li>
<li><img height="200" src="<?php echo pip_asset('images/channel/logo-pepsico.png'); ?>" width="241"/></li>
<li><img height="200" src="<?php echo pip_asset('images/channel/logo-rio-tinto.png'); ?>" width="241"/></li>
<li><img height="200" src="<?php echo pip_asset('images/channel/logo-siemens.png'); ?>" width="241"/></li>
<li><img height="200" src="<?php echo pip_asset('images/channel/logo-total.png'); ?>" width="241"/></li>
<li><img height="200" src="<?php echo pip_asset('images/channel/logo-union-pacific.png'); ?>" width="241"/></li>
<li><img height="200" src="<?php echo pip_asset('images/channel/logo-ups.png'); ?>" width="241"/></li>
<li><img height="200" src="<?php echo pip_asset('images/channel/logo-volkswagen.png'); ?>" width="241"/></li>
</ul>
</div>
<div class="clear" id="chartstart"></div>
</div>
<div class="channel-info">
<div class="container clearfix">
<h2 class="space">
PPE THAT SAVES LIVES</h2>
<p class="space" style="line-height:1.5;">
Over the years, the advancement in the use of mechanical equipment, along with stricter regulatory compliance, has helped to prevent accidents and reduce injuries. However, the fact remains that  construction is amongst the highest risk industries to work in. Nearly 12% of worker fatalities involve construction workers, an alarming 14 deaths per week. Around 4.2 injuries have been reported per every 100 workers, with an average cost per claim around $38,000. This negatively affects our economy, but more importantly is a significant financial burden, on top of the physical pain and suffering, that extends to families and loved ones.</p>
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
</div><!-- #canvas-holder -->
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
"CONSTRUCTION","Transportation and warehousing","Agriculture*","Professional and business services","Government","Manufacturing","Mining*", "Wholesale trade", "Retail trade", "Leisure and hospitality", "Other services", "Educational and health services", "Financial activities", "Information", "Utilities",			],
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
INNOVATION AND CERTIFIED SAFETY
</h2>
<p class="space">
First to market with innovative products that keep you safe and help you to work more productively. ATG<sup>®</sup> and G-Tek<sup>®</sup> glove lines feature unparalleled proprietary designs, coating and materials. Lens technologies from Bouton® Optical offer more than just impact protection.</p>
</div><!-- intro -->
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
<div class="tiles tile tile-tall tile-quarter tile-right prod-slide-anchor" id="gtek" style="background-image: url('<?php echo pip_asset('images/channel/tile-industrial-xrystal.jpg'); ?>'); background-size:cover; background-position: center bottom;">
<h2 class="none">
The peak of cut protection</h2>
</div><!-- g-tek -->
<div class="prod-slide-wrap" id="gtek-slide-wrap">
<div class="prod-slide" id="gtek-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
<span class="brand-icon-gtek-xrystal" style="font-size:5vw; color:#666;"></span>
</div>
<div>
<h2 class="none">
NEXT GENERATION. MAXIMUM PROTECTION.</h2>
<p>
PolyKor® Xrystal® is an engineered yarn that represents the next generation in maximum cut protection and comfort. It is a blend of high-modulus polyethylene and mineral-based fibers. These mineral-based fibers have a similar chemical composition to glass, but are inherently better in terms of strength and oxidation resistance as well as compression and shear.</p>
<br/>
<a class="button" href="https://us.pipglobal.com/en/products/gtek-polykor-xrystal/" target="_blank">LEARN MORE</a>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2560&amp;ccID=11570&amp;liner_material=--PolyKor+Xrystal--" target="_blank">VIEW PRODUCTS</a>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-industrial-xrystal.jpg'); ?>');">
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
Be Seen, Be Safe</h2>
<p>
Construction jobs are not limited to the daytime, and it is essential to be easily seen in all light conditions. PIP has been a leader in ubiquitous adoption of Hi-Vis garments for all applications where workers are at risk. It's no longer just for road workers. For prudence, even mandating Hi-Vis T-shirts as a standard is an extra ounce of prevention. PIP has it all.</p> <br/>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2563&amp;ccID=11629" target="_blank">VIEW PRODUCTS</a>
</div><!-- slide-text -->
<div class="slide-image" style="background-image: url('<?php echo pip_asset('images/channel/slide-industrial-hivis.jpg'); ?>');">
<div class="close-slide">X</div><!-- close slide -->
</div><!--slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="jsp" style="background-image:url('<?php echo pip_asset('images/channel/img-construction-mk8-inuse.jpg'); ?>');">
<h2 class="space">
JSP<sup>®</sup> has evolved head protection</h2>
</div><!-- jsp -->
<div class="prod-slide-wrap" id="jsp-slide-wrap">
<div class="prod-slide" id="jsp-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
<span class="brand-icon-jsp" style="font-size:4vw; color:#666;"></span>
</div>
<div>
<h2 class="none">
The Evolution™ of Head Protection</h2>
<p>
JSP® Evolution® Hard Hats (left) incorporate several industry-leading features in the design, delivering a modern solution for head protection. Each detail and nuance of the Evolution® is specifically designed to provide enhanced protection, performance, and comfort. The result: Noticeable improvements over the standard 1970’s style hard hat (right).</p> <br/>
<p class="m-space">
<a class="button" href="https://us.pipglobal.com/en/products/jsp-evolution-hard-hats/">LEARN MORE</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background:#000; color:#fff;">
<div class="tech-view twentytwenty-container" id="tech-views-jsp">
<div class="img" id="jsbefore" style="background-image:url('<?php echo pip_asset('images/channel/jsp-before.jpg'); ?>'); background-position:center;"></div>
<div class="img" id="jsafter" style="background-image:url('<?php echo pip_asset('images/channel/jsp-after.jpg'); ?>'); background-position:center;"></div>
</div><!-- tech-views-io -->
<div class="close-slide">X</div>
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="polykor" style="background-image: url('<?php echo pip_asset('images/channel/tile-industrial-a5.jpg'); ?>');">
<h2 class="space">
POLYKOR A5</h2>
</div><!-- #polykor -->
<div class="prod-slide-wrap" id="polykor-slide-wrap">
<div class="prod-slide" id="polykor-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
<span class="brand-icon-gtek-polykor" style="font-size:5vw; color:#666;"></span>
</div>
<div>
<h2 class="none">
AFFORDABLE ANSI A5 CUT PROTECTION</h2>
<p class="space">
PolyKor® makes use of PIP’s proprietary fibers and engineered yarns to produce cut resistant gloves that surpass everyday performance standards. PolyKor® technology is optimized for the type of protection and comfort required by plant and field workers of today.</p>
<p class="m-space">The ultimate objective is affordable cut resistant gloves for every application.</p> <br/>
<p class="mspace">
<a class="button" href="https://us.pipglobal.com/en/products/gtek-polykor-a5/" target="_blank">LEARN MORE</a>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2560&amp;ccID=11570&amp;ansi_cut_9=A5&amp;brand=G-Tek%26reg;+PolyKor%26reg;" target="_blank">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-industrial-a5.jpg'); ?>');">
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
<div class="tiles tile tile-half prod-slide-anchor" id="maxsafety" style="background-image: url('<?php echo pip_asset('images/channel/tile-industrial-neofoam.jpg'); ?>');">
<h2 class="space" style="color:#fff; text-decoration:none;">
	
	G-TEK® NEOFOAM®</h2>
</div><!-- max-safety -->
<div class="prod-slide-wrap" id="maxsafety-slide-wrap">
<div class="prod-slide" id="maxsafety-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
<span class="brand-icon-neofoam" style="font-size:3vw; color:#666;"></span>
</div>
<div>
<h2 class="none">COMFORT AND FLEXIBILITY</h2>
<p class="space" style="line-height:1.5;">
NeoFoam® is a water based PU coating. It’s an even, thin coating allowing good flexibility and dexterity. Secure grip helps prevent injuries and waste when handling heavy or fine parts. NEOFOAM® IS ONLY AVAILABLE WITH G-TEK®.</p>
<br/>
<a class="button button-black" href="https://us.pipglobal.com/en/products/gtek-neofoam/" target="_blank">LEARN MORE</a>
</div></div><!-- slide-text -->
<div class="slide-image">
<div class="tech-view twentytwenty-container" id="liner-comparison">
<div class="img" style="background-image:url('<?php echo pip_asset('images/channel/slide-industrial-neofoam-blue.jpg'); ?>'); background-size:cover; background-position:center;"></div>
<div class="img" style="background-image:url('<?php echo pip_asset('images/channel/slide-industrial-neofoam-earth.jpg'); ?>'); background-size:cover; background-position:center;"></div>
</div>
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
</div>
<div class="testimonial_quote">
<div class="container">
<div class="construction-testimonial">
<p class="space">
“I switched all my guys to Maxiflex<sup>®</sup> and all the complaining stopped. One glove that moves like your hand and can stand up to all the tasks on a construction site… that’s what we needed.”</p>
<p class="space" style=" text-align:right; "><em>
- Rose Fiermonte, President</em>
</p>
<p style="text-align:right; "><em>
DCI Dorbec Construction Inc.
</em></p>
</div>
</div>
</div>
<script>
$('.bxslider').bxSlider({
	infiniteLoop: true,
	speed: 40000,
	minSlides:4,
	maxSlides:4,
	slideWidth: 260,
	slideMargin:50,
	
	ticker: true
});

</script>
