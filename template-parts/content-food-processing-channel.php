<?php
/**
 * Template part for Food Processing Channel
 */
?>
<div id="lead-in-channel">
<div id="ss-overlay"></div>
<video autoplay="autoplay" id="video-lead-in" loop="loop" muted="">
<source src="https://www.pipglobal.com/videos/mp4/food-processing.mp4" type="video/mp4"/>
<source src="https://www.pipglobal.com/videos/webm/food-processing.webm" type="video/webm"/>
<source src="https://www.pipglobal.com/videos/ogv/food-processing.ogv" type="video/ogg"/>
<!-- <embed
          src="YTPlayer.swf"
          flashvars="movieName=food-processing.mp4&autoStart=true"
          width=100%
          height=auto
          allowFullScreen=true
          type="application/x-shockwave-flash"
          pluginspage="http://get.adobe.com/flashplayer" /> -->
</video>
<div id="lead-in-text">
<h1>
FOOD SERVICE &amp; PROCESSING<br/><span>CHANNEL</span></h1>
<p class="space">
Complex, busy and fast-paced. That's today's food related industry. PIP and its distributor-partners pay very strong attention to this market and its special needs. Together we want to ensure that there is no weak link in safety - to the worker and ultimately to the consumer.</p>
</div>
</div>
<div class="testimonial">
<div class="container">
<h3 class="space">
The Expanding Food Industry in the United States</h3>
<div class="ce-testimonial">
<img alt="testimonial-food" src="<?php echo pip_asset('images/channel/img-food-info-en.png'); ?>"/>
</div>
</div>
<div class="clear" id="chartstart"></div>
</div>
<div class="channel-info">
<div class="container clearfix">
<h2 class="space">
PROTECTING WORKERS, CONSUMERS AND PRODUCTS</h2>
<p class="space" style="line-height:1.5;">
The food industry’s outbreaks of E.coli, Salmonella and other food related ailments have raised the profile of food safety in not only consumers, but also with manufacturers. Ensuring food safety requires a unified systems approach. Food handling GMP (Good Manufacturing Practices) along with HACCP (Hazard Analysis Critical Control Points) food sanitation practices require effective personal protective equipment.</p>
<p class="space" style="line-height:1.5; margin-bottom:30px;">
Quality products, training and clear information is key. That’s were PIP comes in.</p>
<div class="graph-wrapper">
<div id="charts" style="width:450px;  float:left; margin-right:100px;">
<p class="space" style="text-align:center; font-weight:bold; color:#333;">
Average Incidence Rates for Injuries and Infections in 8 Pork Meatpacking Plants (per 100 workers)</p>
<p style="font-size:12px; line-height:1.5;">
The data below shows an example of the high chance for cut injuries and subsequent infection in the food processing industry. The safety of workers must be considered in addition to preventing contamination of food products they are working with.</p><br/>
<canvas height="250" id="food-processing" width="450"></canvas>
<p style="font-size:8px; text-align:center;">
From the US National Library of Medicine, National Institutes of Health</p>
</div>
</div>
<div class="graph-wrapper">
<div id="canvas-holder" style="width:420px;  float:left;">
<p class="space" style="text-align:center; font-weight:bold; color:#333;">
Dangers Facing Food Service Workers <br/>and their Approximate Claims Per Year</p>
<p style="font-size:12px; line-height:1.5;">
These injuries range in severity, with approximately 1 of out 130 Knife Lacerations and 1 out of 80 Meat Slicer Lacerations resulting in amputations, and 1 out of 40 burn injuries that were third-degree burns. </p><br/>
<canvas height="250" id="food-service" width="420"></canvas>
<p style="font-size:8px; text-align:center;">
Based off statistics from 'Top 7 Dangers for Young Workers', WorkSafeBC</p>
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
    annotateLabel : "<%=v3%>", 
    scaleLineColor: "rgba(0,0,0,0.5)",
    scaleOverride: true,
    scaleSteps: 5,
    scaleStepWidth: 0.5,
    scaleShowGridLines: false,
    barValueSpacing: 1,
                
    }
    var barChartData = {
    labels : ["2004", "2005","2006","2007","2008", "2009"],
    datasets : [
    {
    title: "Laceration",
    fillColor : "rgba(205,27,0,1.0)",
    strokeColor : "rgba(255,255,255,0.8)",
    highlightFill: "rgba(109,109,109,0.75)",
    highlightStroke: "rgba(220,220,220,1)",
    data : [2.1, 1.3, 1.6, 2.0, 2.2, 1.8]
    }, 
                    
    {
    title: "Infected Laceration",
    fillColor : "rgba(56,140,255,1.00)",
    strokeColor : "rgba(255,255,255,0.8)",
    highlightFill: "rgba(109,109,109,0.75)",
    highlightStroke: "rgba(220,220,220,1)",
    data : [0.1, 0.2, 0.2, 0.2, 0.5, 0.4]
    },
    {
    title: "Skin Infection",
    fillColor : "rgba(103,191,49,1.00)",
    strokeColor : "rgba(255,255,255,0.8)",
    highlightFill: "rgba(109,109,109,0.75)",
    highlightStroke: "rgba(220,220,220,1)",
    data : [0.1, 0.1, 0.3, 0.2, 0.4, 0.1]
    },
    {
    title: "All Infection",
    fillColor : "rgba(115,51,216,1.00)",
    strokeColor : "rgba(255,255,255,0.8)",
    highlightFill: "rgba(109,109,109,0.75)",
    highlightStroke: "rgba(220,220,220,1)",
    data : [0.2, 0.3, 0.5, 0.4, 0.9, 0.5]
    }
                    
            
    ]
    }
            
            
            
    // Horizontal Bar Graph data
    var startWithDataset =1;
    var startWithData =1; 

    var opt2 = {
    animationStartWithDataset : startWithDataset,
    animationStartWithData : startWithData,
    animationSteps : 175,
    canvasBorders : false,
    legend : true,
    inGraphDataShow : false,
    inGraphDataTmpl : "<%=v6 + '%'%>",
    legendBorders: false,
    annotateDisplay : true,
    annotateLabel : "<%=v3 + ' Claims'%>", 
    scaleLineColor: "rgba(0,0,0,0.5)",
    scaleOverride: true,
    scaleSteps: 4,
    scaleStepWidth: 10000,
    scaleShowGridLines: false,
    barValueSpacing: 10,
                
    }
    var barChartData2 = {
    labels : [
    "Knives", "Meat Slicers","Hot Substances"],
    datasets : [
    {
    title: "Claims Per Year", fillColor : "rgba(205,27,0,1.0)",
    strokeColor : "rgba(255,255,255,0.8)",
    highlightFill: "rgba(109,109,109,0.75)",
    highlightStroke: "rgba(220,220,220,1)",
    data : [31500, 9000, 21000]
    } 
                    
                            
    ]
    }
		

</script><!-- charts -->
</div>
<div class="channel-info" style=" padding:80px 50px; background:#e6e6e7; color:#000;">
<div class="container clearfix">
<h2 class="space" style="margin-bottom:20px;">
Regulations for Food Contact</h2>
<div class="row">
<!-- <div style="padding-right:50px; width:450px; float:left; line-height:1.5;"> -->
<div class="col-sm-6">
<p>
When working in the food industry, there are three types of potential contact that can be made with food:</p><br/>
<table style="color:#000">
<tr>
<td><img alt="" height="65" src="<?php echo pip_asset('images/channel/img-food-contact-direct.jpg'); ?>" style="float:left; margin-right:20px;" width="65"/></td><td>
<strong>Direct Contact:</strong> Handling or preparing food</td>
</tr>
<tr style="background-color: #E8E8E8;">
<td><img alt="" height="65" src="<?php echo pip_asset('images/channel/img-food-contact-indirect.jpg'); ?>" style="float:left; margin-right:20px;" width="65"/></td><td>
<strong>Indirect Contact:</strong> Working on or touching something that food will be in direct contact with</td>
</tr>
<tr>
<td><img alt="" height="65" src="<?php echo pip_asset('images/channel/img-food-contact-incidental.jpg'); ?>" style="float:left; margin-right:20px;" width="65"/></td><td>
<strong>Incidental Contact:</strong> Rare or incidental touching of food</td>
</tr></table>
</div>
<!-- <div style="width:450px; float:left; line-height:1.5;"> -->
<div class="col-sm-6">
<p>
In any situation, it is important that the protective gloves and sleeves are constructed with materials that comply with federal regulations for food contact in the United States (21 CFR 170-199) or Canada (CFIA).</p>
<p>
For <strong>Direct Contact</strong>, disposable polymer gloves or unsupported, unlined canners are typically used. In situations where cut protection is also needed, compliant seamless knit gloves can be worn as liners underneath gloves that meet the criteria for direct contact, or some premium styles can be used on their own. </p>
<p> 
With <strong>Indirect</strong> or <strong>Incidental Contact</strong>, typically coated seamless knit gloves are worn to provide enhanced grip as needed, as well as protect against injury risks such as cuts, scrapes, and abrasions.</p>
<br/>
</div>
</div>
<img src="<?php echo pip_asset('images/channel/img-food-contact-en.png'); ?>" style="margin-top:40px; margin-left:-10px; width:100%;"/>
</div>
</div>
<div id="channel-products">
<div class="tiles tile tile-quarter tile-lead">
<h2>INNOVATION AND CERTIFIED SAFETY</h2>
<p class="space">
First to market with innovative products that keep you safe and help you to work more productively. Kut-Gard<sup>®</sup> offers the cut protection workers need while meeting the standards for food safety. Assurance<sup>®</sup> disposable gloves have been designed with the utmost safety in mind. </p>
</div>
<div class="tiles tile tile-half prod-slide-anchor" id="kutgard" style="background-image: url('<?php echo pip_asset('images/channel/img-food-kutgard-bg.jpg'); ?>');">
<h2 class="none"><a href="https://us.pipglobal.com/en/products/?scID=2560&amp;ccID=11549&amp;sID=28095&amp;ssID=79679&amp;pID=1212" style="color:#fff; font-weight:400; text-decoration:none;" target="_blank">
Highest Possible Cut Protection for the Food Industry
</a></h2>
</div>
<div class="prod-slide-wrap" id="kutgard-slide-wrap">
<div class="prod-slide" id="kutgard-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
<span class="brand-icon-kutgard" style="font-size:5vw; color:#666;"></span>
</div>
<div>
<h2>
Highest Possible Cut Protection for the Food Industry</h2>
<p class="space">
Made in the U.S.A., Kut-Gard<sup>®</sup> seamless knit gloves are designed to provide the highest possible cut protection for the food industry. Because they comply with both the US and Canadian standards for food contact, Kut-Gard<sup>®</sup> gloves can be used for operations where direct, indirect, and incidental contact with food may occur. Many styles also incorporate the strength of Dyneema<sup>®</sup> Diamond Technology, which is 15 times stronger than steel on a weight for weight basis! It's a High Performance Polyethylene fiber made from Ultra-High Molecular Weight Polyethylene. Dyneema<sup>®</sup> fiber is much thinner and more flexible than traditional materials, such as leather and cotton, while offering higher protection.
</p>
<br/>
<p class="m-space">
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2560&amp;ccID=11570&amp;chID=fsd" target="_blank">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-food-cut.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter tile-tall tile-right prod-slide-anchor" id="ambidex" style="background-image: url('<?php echo pip_asset('images/channel/img-food-disposable-gloves.jpg'); ?>');">
<h2 class="none">Ambi-dex<sup>®</sup></h2>
</div>
<div class="prod-slide-wrap" id="ambidex-slide-wrap">
<div class="prod-slide" id="ambidex-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
<span class="brand-icon-ambidex" style="font-size:4vw; color:#666;"></span>
</div>
<div>
<h2>
Disposable Gloves</h2>
<p class="space">
Ambi-dex<sup>®</sup> disposable gloves are used to avoid cross contamination between your hands and what you’re handling, as well as from task to task. Ambi-dex<sup>®</sup> is available in different polymer technologies to meet the needs of various applications within the food industry. <strong>Latex</strong> gloves offer superior flexibility and tactile sensitivity. <strong>Nitrile</strong> gloves have excellent flexibility and are the preferred substitution for Latex if workers experience intolerance to that technology. <strong>Vinyl</strong> gloves provide a cost effective alternative to both Latex and Nitrile gloves.<strong>Polyethylene</strong> offers the most economical choice, and is used mainly in food preparation.</p>
<br/>
<p class="m-space">
<a class="button button-black" href="https://us.pipglobal.com/en/products/?q=search&amp;v=62-321|62-322|62-323|63-338|63-336|63-3314|63-332|63-532|63-232|63-331|65-543|65-544|65-545|65-553|64-v1000|64-v3000|64-V2000|64-435|64-v77b|64-436|64-433|64-346|66-832pf" target="_blank">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-food-disp.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-half prod-slide-anchor" id="dress" style="background-image: url('<?php echo pip_asset('images/channel/img-food-dress.jpg'); ?>');">
<h2 class="none">
The White Glove Treatment</h2>
</div>
<div class="prod-slide-wrap" id="dress-slide-wrap">
<div class="prod-slide" id="dress-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2>
The White Glove Treatment</h2>
<p class="space">
White gloves add a touch of class to any service, whether it is at a hotel, restaurant or catered event. For over 30 years, PIP has been the leader of white gloves for dress applications. Cabaret™ gloves are constructed in a full fashion pattern with fourchettes and set in thumbs for a tailored fit, providing comfort in mulitple applications.</p>
<br/>
<p class="m-space">
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2560&amp;ccID=11568" target="_blank">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-food-parade.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="disposable" style="background-image: url('<?php echo pip_asset('images/channel/img-food-disposable.jpg'); ?>');">
<h2 class="none">
Disposable Clothing</h2>
</div>
<div class="prod-slide-wrap" id="disposable-slide-wrap">
<div class="prod-slide" id="disposable-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2>
Disposable Clothing</h2>
<p class="space">
Food service demands a high degree of cleanliness. PIP offers an extensive and economical line of specialty aprons, hair, and beard protectors as well as disposable sleeves that offer superior barrier qualities while being comfortable to wear on the job.
</p>
<br/>
<p class="m-space">
<a class="button button-black" href="https://us.pipglobal.com/en/products/?q=search&amp;v=200-91018|200-bc18|200-bc21|200-bc24|200-bg01|200-01001|200-01002|200-06001|200-06002|200-07501|200-08001|200-20001" target="_blank">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-food-dispclothing.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="arm" style="background-image:url('<?php echo pip_asset('images/channel/img-food-arm.jpg'); ?>');">
<h2 class="none">
ARM PROTECTION</h2>
</div><!-- #kits -->
<div class="prod-slide-wrap" id="arm-slide-wrap">
<div class="prod-slide" id="arm-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
<span class="brand-icon-kutgard" style="font-size:5vw; color:#666;"></span>
</div>
<div>
<h2>
ARM PROTECTION</h2>
<p class="space">
Protective sleeves are often used in meat and fish processing. Kut-Gard™ protective sleeves, manufactured in the U.S., provide ANSI 5 cut protection to help protect against potential cut and slash injuries. Dyneema<sup>®</sup> and Pritex™ sleeves also provide cut and abrasion protection while delivering a cooler, more comfortable experience.</p>
<br/>
<p class="m-space">
<a class="button button-black" href="https://us.pipglobal.com/en/products/?q=search&amp;v=20-d|20-da|20-sd|25-612|25-618|25-621|15-218" target="_blank">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-food-arm.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="bouton" style="background-image: url('<?php echo pip_asset('images/channel/img-food-bouton.jpg'); ?>');">
<h2 class="none">Bouton<sup>®</sup> Optical</h2>
</div>
<div class="prod-slide-wrap" id="bouton-slide-wrap">
<div class="prod-slide" id="bouton-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
<span class="brand-icon-bouton" style="font-size:4vw; color:#666;"></span>
</div>
<div>
<h2>
Eye Protection for the Food Industry</h2>
<p class="space">
<strong>Anti-Reflective</strong> - Daily work in the food processing industry often means a schedule of repetitive tasks in a bright, indoor environment, which can lead to eye fatigue. The addition of Anti-Reflective coating reduces reflection and glare from bright light, for improved lens clarity. Foam-lined styles offer an additional seal of protection for workers in refrigerated areas, to keep out cold air that dries out eyes. Anti-Fog coating eliminates the condensation of moisture on lenses that causes fogging, so that workers lenses and vision stay clear. In meat and fish plants, workers that handle the product require splash protection. The Stone™ goggle features an additional ANSI rated polycarbonate visor that can be attached and removed in seconds, providing a face shield to give even more protective coverage from splash hazards.
</p>
<br/>
<p class="m-space">
<a class="button button-black" href="https://us.pipglobal.com/en/products/?q=search&amp;v=20-d|20-da|20-sd|25-612|25-618|25-621|15-218" target="_blank">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-food-eye.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-half prod-slide-anchor" id="detectable" style="background-image: url('<?php echo pip_asset('images/channel/img-food-hearing-bg.jpg'); ?>');">
<h2 class="none">Metal Detectable Ear Plugs</h2>
</div><!-- #maxsafety -->
<div class="prod-slide-wrap" id="detectable-slide-wrap">
<div class="prod-slide" id="detectable-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2>Metal Detectable Ear Plugs</h2>
<p class="space">
The daily noise exposure of a food processing facility can cause damage to the ears over time. It is important to protect workers from this injury, but there is also the risk of contamination to consider. While ear plugs are a cost effective and hygenic solution, it is very possible that they can fall off of a worker and into a production area.
PIP's hearing line offers a solution with metal detectable ear plugs. Their bright blue color makes them easy to spot in production areas, and if they fall beyond being visible, they can still be detected by their metal insert. They are available in a single-use polyurethane foam, with our "X" Emboss at the end to reduce pressure at the opening of the ear canal, or a multiple use TPR with a combination of sealing flanges and discs for best wearing comfort and attenuation. Both styles feature a cord with the same bright blue color to make them more practical to wear and keep track of during the work day.</p>
<br/>
<p class="m-space">
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2568&amp;ccID=11598&amp;sID=28169" target="_blank">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/img-food-hearing-bg.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
</div>
<div class="testimonial_quote">
<div class="container">
<div class="construction-testimonial">
<p class="space">
"Thirty years ago, my partner, Wellson Tao and I set out to build a company focused on providing workers personal protective products that provided value and met the highest performance standards. Choosing a name for our company was the easy part. Protective Industrial Products (PIP)"</p>
<p class="space" style=" text-align:right; padding-right:50px;"><em>
- Joe Milot, President</em>
</p>
<p style="text-align:right; margin-right:50px;"><em>Protective Industrial Products Inc.</em></p>
</div>
</div>
</div>
