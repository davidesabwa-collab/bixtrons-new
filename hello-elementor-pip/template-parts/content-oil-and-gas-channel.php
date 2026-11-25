<?php
/**
 * Template part for Oil & Gas Channel
 */
?>
<div id="lead-in-channel">
<div id="ss-overlay"></div>
<video autoplay="autoplay" id="video-lead-in" loop="loop" muted="" width="100%">
<source src="https://www.pipglobal.com/videos/mp4/oil-gas-video.mp4" type="video/mp4"/>
</video>
<div id="lead-in-text">
<h1>

OIL AND GAS<br/> <span>CHANNEL</span>
</h1>
<p class="space">

The oil and gas industry produces some of the most dangerous work environments. There are many areas and elements that are hazardous to employees which makes it vital to take precautions when they are facing potentially hazardous tasks. Using the correct PPE can greatly reduce those hazards. PIP offers a full line of products specifically for the Oil and Gas industry to withstand the harshest conditions from the most demanding jobs.

</p>
<div class="clear" id="chartstart"></div>
</div>
</div>
<div class="testimonial">
<div class="container">
<h3 class="space">

    There are more than 500,000 workers in the Oil and Gas Industry in the U.S.

    </h3>
<div class="graph-wrapper">
<div class="oil-gas-testimonial">
<canvas height="450" id="pie-chart" width="450"></canvas>
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

            inGraphDataFontSize : 12,

            inGraphDataTmpl : "<%=(v1 == ''? '' : v1)+ ' - ' + v6 + '%'%>",

            animationEasing : "easeOutQuart",

            annotateDisplay : true,

            annotateLabel : "<%=(v1 == ''? '' : v1)+ ' - ' + v6 + '%'%>", 

            animationSteps : 175,

            }  

            var pieData = [

                            {

            value : 34,

            color: "rgba(115,170,68,1.0)",

            title : "Oil and Gas Extraction"

            },

            

            {

            value : 32,

            color: "rgba(252,177,26,1)",

            title : "Petroluem Refineries"

            },

            {

            value : 24,

            color: "rgba(255,104,29,1.0)",

            title : "All Others"

            },

            {

            value : 10,

            color: "rgba(36,203,229,1.0)",

            title : "Ppieline Transportation"

            }

            ]

        </script>
<!-- charts -->
<div class="clear"></div>
</div>
</div>
<div class="channel-info">
<div class="container clearfix">
<h2 class="space" style="line-height:35px; text-align:center;">

Fatalities in the Oil and Gas Extraction Sector by Event or Exposure from 2003 – 2015

</h2>
<div class="graph-wrapper">
<div id="charts" style="  display:flex; justify-content:center; padding-top:20px;">
<canvas height="270" id="injury-death-rate" width="700"></canvas>
</div>
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

scaleSteps: 12,

scaleStepWidth: 5,

scaleShowGridLines: false,

barValueSpacing: 1,

	  		

}

var barChartData = {

labels : ["Transportation","Contact with objects and equipment", "Exposure to harmful substances or environments ","Fall, Slip or Trip","Fire or Explosion "] ,

datasets : [

{

title: "Percent",

fillColor :['rgba(84,84,84,1.0)',

            'rgba(205,27,0,1.0)',

            'rgba(84,84,84,1.0)',

            'rgba(205,27,0,1.0)',

            'rgba(84,84,84,1.0)'],

data : [51,17, 9, 7, 16]

}		

]

}

</script>
</div>
<div id="channel-products">
<div class="tiles tile tile-quarter tile-lead">
<h2>

        INNOVATION AND CERTIFIED SAFETY

        </h2>
<p class="space">

        First to market with innovative products that keep you safe and help you to work more productively. The G-Tek<sup>®</sup> PolyKor<sup>®</sup> and R2 glove lines offer protection against impact, cut, flash fires, chemical exposure and repetitive use. Dynamic hard hats protect from falling objects, struck-by hazards, and other unplanned events. FR clothing prevents fire from spreading to different areas of the body.

        </p>
</div>
<div class="tiles tile tile-half prod-slide-anchor" id="novax" style="background-image: url('https://us.pipglobal.com/archive/hero/brand-features/brand-gtek-impact.jpg'); background-position: top;">
<h2 class="none">G-TEK<sup>®</sup> Impact</h2>
</div><!-- maxiflex -->
<div class="prod-slide-wrap" id="novax-slide-wrap">
<div class="prod-slide" id="novax-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2>

    NEXT GENERATION IMPACT PROTECTION

    </h2>
<p class="space">

    Engineered specifically for heavy-duty applications, the G-Tek<sup>®</sup> Impact Series sets the standard for back of hand protection by combining high-density impact resistant TPR (thermoplastic rubber) with the most advanced coated seamless knit G-Tek<sup>®</sup> glove technologies.

    </p>
<ul>
<li>

        ADVANCED IMPACT PROTECTION

        </li>
<li>

        OUTSTANDING GRIP PERFORMANCE

        </li>
<li>

        UNMATCHED COMFORT AND DEXTERITY

        </li>
</ul>
<p>

    Tough jobs put hands at serious risk of impact injury. Workers need gloves with back of hand protection that does not impede performance.

    </p>
<br/>
<p class="m-space">
<a class="button button-black" href="https://us.pipglobal.com/en/products/gtek-impact/" target="_blank">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/g-tek-glove.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter tile-tall tile-right prod-slide-anchor" id="dual" style="background-image: url('<?php echo pip_asset('images/channel/tile-arc-flash.jpg'); ?>');">
<h2 class="none">

    ARC Flash Clothing – Coveralls/Shirts

    </h2>
</div>
<div class="prod-slide-wrap" id="dual-slide-wrap">
<div class="prod-slide" id="dual-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2 class="none">

    SERIOUS PROTECTION DEMANDS SERIOUS PRODUCTS

    </h2>
<p class="space">

    Whether you’re working on a drilling rig, construction barge or production platform, PIP offers a full line of Arc Flash/Flame Retardant clothing to meet the demands of the harshest working conditions.

    </p>
<br/>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2565&amp;ccID=11642" target="_blank">VIEW PRODUCTS</a>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/arc-flashing.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-half prod-slide-anchor" id="argloves" style="background-image: url('<?php echo pip_asset('images/channel/posi-wear.jpg'); ?>'); background-position: top;">
<h2 class="none">

    POSIWEAR<sup>®</sup>
</h2>
</div><!-- maxiflex -->
<div class="prod-slide-wrap" id="argloves-slide-wrap">
<div class="prod-slide" id="argloves-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div class="lens-tech-descriptions">
<div class="tech-desc" id="td-fr">
<h3>

            3100 Posi-Wear<sup>®</sup> FR

            </h3>
<p>

            Created as a secondary garment designed for use in applications where sparks are present including utilities, oil refineries, welding, energy, general maintenance and construction.

            </p>
<br/>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2563&amp;ccID=11561&amp;fabric=--PosiWear+FR--" target="_blank">VIEW PRODUCTS</a>
</div>
<div class="tech-desc" id="td-ba" style="display:none;">
<h3>3602 Posi-Wear<sup>®</sup> Breathable Advantage</h3>
<p>

            High-powered overhead lights, such as fluorescent and mercury lighting, can cause glare that increases eye strain. Gradient lenses feature a slight mirror coating on the top portion of the lens, reducing glare, while the remainder of the lens remains clear. As a result, workers are still able to see clearly when looking straight ahead or down at their work.

            </p>
<br/>
<a class="button button-black" href=" https://us.pipglobal.com/en/products/?scID=2563&amp;ccID=11561&amp;fabric=--PosiWear+BA--" target="_blank">VIEW PRODUCTS</a>
</div>
<div class="tech-desc" id="td-ub" style="display:none;">
<h3>3678B Posi-Wear<sup>®</sup> Ultimate Barrier</h3>
<p>

            Made from PolySafe material which provides the highest level of barrier protection against chemicals, dry particulates, light sprays and liquid splash.

            </p>
<br/>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2563&amp;ccID=11561&amp;fabric=--PosiWear+UB+Plus--|--PosiWear+UB--" target="_blank">VIEW PRODUCTS</a>
</div>
<div class="tech-desc" id="td-m3" style="display:none;">
<h3>

            C3906 Posi-Wear<sup>®</sup> M3

            </h3>
<p>

            Five layers of protection deliver a high level of breathability and protection against dry particulates and water-based light liquid sprays and splashes.

            </p>
<br/>
<a class="button button-black" href=" https://us.pipglobal.com/en/products/?scID=2563&amp;ccID=11561&amp;fabric=--PosiWear+M3--" target="_blank">VIEW PRODUCTS</a>
</div>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="justify-content: flex-start;  ">
<div class="gallery clearfix">
<div class="pics clearfix">
<div class="thumbs" style="width:14%;">
<div class="preview"> <a class="selected" data-full="https://pipglobal.com/images/channel/posi-fr.png" data-tab="fr" data-title="FR" href="#"> <img src="<?php echo pip_asset('images/channel/posi-fr.png'); ?>"/> </a> </div>
<div class="preview"> <a data-full="https://pipglobal.com/images/channel/posi-ba.png" data-tab="ba" data-title="Breathable Advantage" href="#"> <img src="<?php echo pip_asset('images/channel/posi-ba.png'); ?>"/> </a> </div>
<div class="preview"> <a data-full="https://pipglobal.com/images/channel/posi-ub.png" data-tab="ub" data-title="Ultimate Barrier" href="#"> <img src="<?php echo pip_asset('images/channel/posi-ub.png'); ?>"/> </a> </div>
<div class="preview"> <a data-full="https://pipglobal.com/images/channel/posi-m3.png" data-tab="m3" data-title="M3" href="#"> <img src="<?php echo pip_asset('images/channel/posi-m3.png'); ?>"/> </a> </div>
</div>
<div class="full clearfix" style="width:57%;">
<!-- first image is viewable to start -->
<img src="<?php echo pip_asset('images/channel/posi-fr.png'); ?>"/>
</div>
</div>
</div>
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="sleeve" style="background-image: url('<?php echo pip_asset('images/channel/tile-head-protection.jpg'); ?>');">
<h2 class="none">

    Head protection

    </h2>
</div>
<div class="prod-slide-wrap" id="sleeve-slide-wrap">
<div class="prod-slide" id="sleeve-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2 class="none">

    DYNAMIC<sup>®</sup> HEAD PROTECTION

    </h2>
<p class="space">

    PIP Dynamic<sup>®</sup> head protection products are developed and manufactured to perform in the most demanding work conditions.

     </p>
<br/>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?q=search&amp;v=280-hp" target="_blank">VIEW PRODUCTS</a>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/head-protection.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="40cal" style="background-image: url('<?php echo pip_asset('images/channel/tile-r2.jpg'); ?>');">
<h2 class="none">

   

    Heavy-Duty <br/>Hand Protection 

    </h2>
</div><!-- #kits -->
<div class="prod-slide-wrap" id="40cal-slide-wrap">
<div class="prod-slide" id="40cal-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2 class="none">

        RUGGED RIGGER GLOVES

    </h2>
<p class="space">

    Our R2 gloves are designed specifically for the Oil, Gas and Mining industries to withstand the harshest conditions from the most demanding jobs.

    </p>
<br/>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2560&amp;ccID=11581&amp;sID=28191&amp;ssID=80382 " target="_blank">VIEW PRODUCTS</a>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/r2.jpg'); ?>');">
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

    Bouton<sup>®</sup> Anti-ReflectivePLUS™ lenses allow an astounding 96% Visible Light Transmission (VLT) compared to the 88—90% VLT provided by standard clear lenses. Durable Anti-ReflectivePLUS™ Anti-Reflective coating significantly reduces the amount of light that reflects back into the wearer’s eyes, providing ultimate visual acuity. Inspect, distinguish and see with more clarity—and less eye fatigue.

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
<div class="tiles tile tile-half prod-slide-anchor" id="arckit" style="background-image: url('<?php echo pip_asset('images/channel/tile-87800.jpg'); ?>');">
<h2 class="none">

    Maximum Grip and Durability 

    </h2>
</div>
<div class="prod-slide-wrap" id="arckit-slide-wrap">
<div class="prod-slide" id="arckit-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2 class="none">

    

    LIQUID CHANNELING CORDED PALMS

    </h2>
<p class="space">

    Engineered to keep your grip even in slick conditions, these R2 Corded Palm gloves are designed with a COTTON corded palm that channels liquids off your hand. Our sonic-welded TPRs are super soft and have a ridged design so that they're lightweight and flexible. They provide complete back-of-hand protection through the fingertips. The green palm aids in awareness.

    </p>
<br/>
<a class="button button-black" href=" https://us.pipglobal.com/en/products/?scID=2560&amp;ccID=11581&amp;sID=27962&amp;ssID=80358&amp;pID=94013" target="_blank">VIEW PRODUCTS</a>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/87800.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
</div>
<div class="testimonial_quote">
<div class="container">
<div class="construction-testimonial">
<p class="space">



    “The G-Tek<sup>®</sup> Impact series has the most amazing gloves ever. It feels like I’m using my bare hands they’re so comfortable, but with better grip. I’ve told all the other guys on my rig that they have to try these.”  

    </p>
<p class="space" style="  text-align:right;"><em>

    -  Bobby Smith

    </em>
</p>
<p style="text-align:right;"><em>Major Oil &amp; Gas Contractor, East Texas</em></p>
</div>
</div>
</div>
