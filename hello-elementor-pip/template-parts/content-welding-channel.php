<?php
/**
 * Template part for Welding Channel
 */
?>
<div id="lead-in-channel">
<div id="ss-overlay"></div>
<video autoplay="autoplay" id="video-lead-in" loop="loop" muted="" width="100%">
<source src="https://www.pipglobal.com/videos/mp4/welding.mp4" type="video/mp4"/>
<source src="https://www.pipglobal.com/videos/webm/electrical.webm" type="video/webm"/>
<source src="https://www.pipglobal.com/videos/ogv/electrical.ogv" type="video/ogg"/>
<embed allowfullscreen="true" flashvars="movieName=electrical.mp4&amp;autoStart=true" height="auto" pluginspage="http://get.adobe.com/flashplayer" src="YTPlayer.swf" type="application/x-shockwave-flash" width="100%"/>
</video>
<div id="lead-in-text">
<h1>

        WELDING<br/> <span>CHANNEL</span>
</h1>
<p class="space">

        Welding is inherently dangerous. Gas, flame sparks, blinding light – nothing can be left to chance. PIP’s Ironcat<sup>®</sup> brand offers the right product designed specifically for protecting professional welders and metal fabricators that are tailored to work in the toughest applications.

        </p>
</div>
</div>
<div class="testimonial">
<div class="container">
<h3 class="space">

    MOST COMMON WELDING INJURIES 

    </h3>
<div class="clear" id="chartstart"></div>
<div class="welding-injury">
<figure>
<img alt="electric-shock" src="<?php echo pip_asset('images/web-icon-electric-shock.svg'); ?>"/>
</figure>
<p>
<strong>Electric Shock:</strong> One of the most common welding accidents welders face. It is typically caused when two metal parts that have a voltage touch, or by secondary voltage shock where a welder touches a part of the welding or electrical circuit while the body touches a part of the metal that is being welded.

        </p>
</div>
<div class="welding-injury">
<figure>
<img alt="hearing-loss" src="<?php echo pip_asset('images/web-icon-hearing-loss.svg'); ?>"/>
</figure>
<p>
<strong>Hearing loss:</strong> Exposure to excessive noise – above 85 decibels on average throughout a workday – without proper ear protection can result in permanent hearing loss.

        </p>
</div>
<div class="welding-injury">
<figure>
<img alt="respirator" src="<?php echo pip_asset('images/web-icon-respirator.svg'); ?>"/>
</figure>
<p>
<strong>Respiratory Illness:</strong> Exposure to toxic metal welding fumes and gases, including harmful metal oxide compounds, base metals, base coatings, beryllium, and manganese, toxins may accumulate in the lungs and lead to a range of adverse effects and long-term conditions such as pulmonary fibrosis.

        </p>
</div>
<div class="welding-injury">
<figure>
<img alt="respirator" src="<?php echo pip_asset('images/web-icon-burns.svg'); ?>"/>
</figure>
<p>
<strong>Chemical, Electrical &amp; Contact Burns:</strong> The high heat of a welding arc and the hazardous fumes, gases, and chemicals welders work with causes them to face serious risk of being injured in a fire or explosion. Welders are exposed to extremely hot materials.

        </p>
</div>
<div class="welding-injury">
<figure>
<img alt="optical-hazards" src="<?php echo pip_asset('images/web-icon-optical-hazards.svg'); ?>"/>
</figure>
<p>
<strong>Optical hazards:</strong> Eye injuries account for around a quarter of all welding injuries and can be serious permanent injuries that result from welding sparks, chemical vapors, and “arc eye,” ultraviolet and infrared radiation from the welding electrical arc. “Welder’s flash”, a burn to the eyes, accounts for a great deal of construction eye injuries. Arc radiation can penetrate the retina and cause permanent retinal damage, including cataracts, diminished vision, and higher sensitivity to light.

        </p>
</div>
</div>
</div>
<div class="channel-info">
<div class="container">
<h2 class="space" style="line-height:35px; text-align:center;">

        There are approximately 425,000 Welders, Cutters, Solderers and Brazers in the U.S.

        </h2>
<div class="graph-wrapper">
<div id="canvas-holder" style="display: flex; justify-content: center;">
<canvas height="450" id="pie-chart" style="padding-top:15px;" width="450"></canvas>
</div>
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

animationSteps : 175

}  

var pieData = [

{

value : 63,

color: "rgba(243,111,35,1.0)",

highlight: "rgba(205,27,0,0.75)",

title : "Manufacturing"

},

 {   value : 12,

color: "rgba(8,51,114,1.0)",

highlight: "rgba(0,151,180,0.75)",

title : "Construction"

},

{

value : 10,

color: "rgba(64,64,154,1.0)",

highlight: "rgba(205,27,0,0.75)",

title : "Maintenance and Repair"

},

{

value : 4,

color: "rgba(253,184,19,1.0)",

title : "Wholesale Trade"

},

{

value : 9,

color: "rgba(163,192,48,1.0)",

highlight: "rgba(205,27,0,0.75)",

title : "All Other"

},

{

value : 2,

color: "rgba(0,151,180,1.0)",

highlight: "rgba(205,27,0,0.75)",

title : "Oil and Gas"

}





]

</script>
<div id="channel-products">
<div class="tiles tile tile-quarter tile-lead">
<h2>

        INNOVATION AND CERTIFIED SAFETY

        </h2>
<p class="space">

        First to market with innovative products that keep you safe and help you to work more productively. The Ironcat<sup>®</sup> line is designed specifically for the unique heat shielding, dexterity, tactility and protection demands of all welding applications. Lens technologies from Bouton<sup>®</sup> Optical offer more than just impact protection.

        </p>
</div>
<div class="tiles tile tile-half prod-slide-anchor" id="novax" style="background-image: url('<?php echo pip_asset('images/channel/tile-fr-apparel.jpg'); ?>'); background-position: top;">
<h2 class="none">FR Apparel</h2>
</div><!-- maxiflex -->
<div class="prod-slide-wrap" id="novax-slide-wrap">
<div class="prod-slide" id="novax-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2>

    FLAME RESISTANT APPAREL

    </h2>
<p class="space">

    Professional welders are constantly at risk due to welding equipment that puts out heat, sparks, metal and fumes. Identifying the right type of protection for each job is the key to ensuring welders are comfortable and protected. There are many types of PPE for welding and they can be combined in many ways. Selecting the proper PPE depends on the hazard, where you work, how often you do the task, job site requirements and ultimately what you are comfortable with.

    </p>
<br/>
<p class="m-space">
<a class="button button-black" href="https://us.pipglobal.com/en/products/?q=search&amp;v=7050&gt;7060&gt;7051&gt;7052&gt;7080&gt;7070&gt;7071&gt;7040&gt;7043&gt;7042&gt;7041" target="_blank">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/fr-apparel.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter tile-tall tile-right prod-slide-anchor" id="dual" style="background-image: url('<?php echo pip_asset('images/channel/tile-tig-gloves.jpg'); ?>');">
<h2 class="none">TIG GLOVES</h2>
</div>
<div class="prod-slide-wrap" id="dual-slide-wrap">
<div class="prod-slide" id="dual-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2 class="none">

    EXTREME PRECISION AND DURABILITY

    </h2>
<p class="space">

    Constructed of lighter-weight materials, unlined TIG welding gloves allow for maximum dexterity. Goatskin is available for durability and comfort, while kidskin offers unmatched dexterity. For a softer feel and increased comfort, a deerskin glove is available. Wing thumb designs for open-handed work are available, with a straight thumb design for optimal torch grip.

    </p>
<br/>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?q=search&amp;v=6144&gt;9073&gt;6130&gt;6141&gt;6140&gt;6100&gt;6142&gt;75-4904&gt;75-4854" target="_blank">VIEW PRODUCTS</a>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/tig-gloves.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-half prod-slide-anchor" id="argloves" style="background-image: url('<?php echo pip_asset('images/channel/tile-stick-gloves.jpg'); ?>'); background-position: top;">
<h2 class="none">

    STICK GLOVES

    </h2>
</div><!-- maxiflex -->
<div class="prod-slide-wrap" id="argloves-slide-wrap">
<div class="prod-slide" id="argloves-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2>

    MAXIMUM HEAT PROTECTION AND DURABILITY

    </h2>
<p class="space">

    Gloves for stick welding are designed with thicker materials to withstand higher temperatures. The longer length provides better forearm coverage, while welts protect finger seams against sparks and abrasion. Various materials (split cowhide, elk), linings (cotton, foam insulation) and thumb designs (wing, straight, reinforced strap) are available to suit worker preferences.

    </p>
<br/>
<p class="m-space">
<a class="button button-black" href="https://us.pipglobal.com/en/products/?q=search&amp;v=9070%3e9060%3e9061%3e9051%3e73-7250%3e9050%3e73-7150%3e2086GLF%3e74-SC7104%3e9040%3e9012L%3e9041%3e73-7018%3e73-7015%3e73-7007%3e9020%3e9401%3e945%3e9400%3e9010%3e73-7088%3e73-7015A%3e940R%3e73-888%3e930K%3e930%3e73-888A%3e9076" target="_blank">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/stick-gloves.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="sleeve" style="background-image: url('<?php echo pip_asset('images/channel/tile-mig-gloves.jpg'); ?>');">
<h2 class="none">

    MIG GLOVES</h2>
</div>
<div class="prod-slide-wrap" id="sleeve-slide-wrap">
<div class="prod-slide" id="sleeve-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2 class="none">

    ENHANCED DEXTERITY AND COMFORT

    </h2>
<p class="space">

    MIG welding gloves allow for maximum dexterity with an unlined palm, while foam insulation on the back of the hand provides increased heat protection. Various lighter-weight materials are available including cowhide for durability, goatskin for increased dexterity, deerskin for unparalleled comfort and pigskin, which stays pliable even with increased wear and exposure to moisture. Wing thumb designs for open-handed work are available, as are straight thumb designs for better grip. A reinforced thumb strap increases durability in high-wear areas.</p>
<br/>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?q=search&amp;v=9072&gt;9071&gt;75-2026&gt;6143&gt;6010&gt;6030&gt;6021&gt;75-320&gt;75-2022&gt;6000" target="_blank">VIEW PRODUCTS</a>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/mig-gloves.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="40cal" style="background-image: url('<?php echo pip_asset('images/channel/tile-arm-protection.jpg'); ?>');">
<h2 class="none">

    Arm Protection</h2>
</div><!-- #kits -->
<div class="prod-slide-wrap" id="40cal-slide-wrap">
<div class="prod-slide" id="40cal-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2 class="none">

    ARM PROTECTION</h2>
<p class="space">

    Welding sleeves are made of strong, fireproofed fabric that protects the welder’s forearms. Constructed from lightweight FR cotton/sateen fabrics to heavyweight leather, sleeves are ideal for jobs requiring more arm movement.</p>
<br/>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?q=search&amp;v=7042&gt;7041&gt;7070&gt;7071&gt;10-K46&gt;11-453&gt;7020" target="_blank">VIEW PRODUCTS</a>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/arm-protection.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="bouton" style="background-image: url('<?php echo pip_asset('images/channel/tile-ir.jpg'); ?>');">
<h2 class="space">

    IR EYEWEAR

	</h2>
</div>
<div class="prod-slide-wrap" id="bouton-slide-wrap">
<div class="prod-slide" id="bouton-slide">
<div class="slide-text" style="justify-content:space-between;">
<div style="color:#666;">
</div>
<div class="lens-tech-descriptions" style="height:440px;">
<div>
<h2 class="none">

                BOUTON<sup>®</sup> OPTICAL IR FILTER SHADE</h2>
<p class="space" style="line-height:1.5; color:#666;">

                IR lenses protect your eyes from UV rays and flash burns, while also offering a high level of impact-protection from flying objects associated with cutting, brazing and torch soldering. These safety glasses for welding DO NOT have the same level of protection as a helmet and should NOT be worn instead of a welding mask when arc welding.

                </p>

</div>
<ul class="ir-list">
<li class="ir ir-current" id="ar">

                    IR 1.7 <p><i>54% visible light transmission</i></p>
</li>
<li class="ir" id="gr">

                    IR 3.0 <p><i>10% visible light transmission</i></p>
</li>
<li class="ir" id="io">

                    IR 5.0 <p><i>2% visible light transmission</i></p>
</li>
</ul>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?q=search&amp;v=IR%20FILTER" target="_blank">VIEW PRODUCTS</a>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background:#000; color:#fff;">
<div class="tech-view twentytwenty-container" id="tech-views-io">
<div class="img" id="before" style="background-image:url('<?php echo pip_asset('images/channel/ir.jpg'); ?>');"></div>
<div class="img" id="after" style="background-image:url('<?php echo pip_asset('images/channel/ir-after-ar.jpg'); ?>');"></div>
</div><!-- tech-views-io -->
<div class="close-slide">X</div>
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-half prod-slide-anchor" id="arckit" style="background-image: url('<?php echo pip_asset('images/channel/tile-leather-wear.jpg'); ?>'); ">
<h2 class="none">

    Leather Wear</h2>
</div>
<div class="prod-slide-wrap" id="arckit-slide-wrap">
<div class="prod-slide" id="arckit-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2 class="none">

    LEATHER WELDING APPAREL

    </h2>
<p class="space">

    Constructed with premium select side split cowhide to deliver excellent heat and abrasion-resistance for even the toughest of welds.

    </p>
<br/>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?q=search&amp;v=7005&gt;7000&gt;7001&gt;7010&gt;7011&gt;7012&gt;7020&gt;7030" target="_blank">VIEW PRODUCTS</a>
</div>
</div><!-- slide-text -->
<div class="slide-image" style=";justify-content: flex-start; align-items:center; ">
<div class="gallery clearfix">
<div class="pics clearfix">
<div class="thumbs">
<div class="preview"> <a class="selected" data-full="https://pipglobal.com/images/channel/leather_apparel1.png" data-id="7005" data-title="Jacket" href="#"> <img src="<?php echo pip_asset('images/channel/leather_apparel1.png'); ?>"/> </a> </div>
<div class="preview"> <a data-full="https://pipglobal.com/images/channel/leather_apparel4.png" data-id="7000" data-title="Cape Sleeve" href="#"> <img src="<?php echo pip_asset('images/channel/leather_apparel4.png'); ?>"/> </a> </div>
<div class="preview"> <a data-full="https://pipglobal.com/images/channel/leather_apparel3.png" data-id="7010" data-title="Apron" href="#"> <img src="<?php echo pip_asset('images/channel/leather_apparel3.png'); ?>"/> </a> </div>
<div class="preview"> <a data-full="https://pipglobal.com/images/channel/leather_apparel2.png" data-id="7030" data-title="Shoe Protectors" href="#"> <img src="<?php echo pip_asset('images/channel/leather_apparel2.png'); ?>"/> </a> </div>
</div>
<div class="full clearfix">
<!-- first image is viewable to start -->
<h2>Jacket</h2>
<img src="<?php echo pip_asset('images/channel/leather_apparel1.png'); ?>"/>
<span>7005</span>
</div>
</div>
</div>
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
</div>
<script>
</script>
<div class="testimonial_quote">
<div class="container">
<div class="construction-testimonial">
<p class="space">

“I trust Ironcat<sup>®</sup> to keep my welders safe and comfortable in a welding environment that can be as cold as the Arctic and has hot as the Sahara. We have used the PIP™ Ironcat<sup>®</sup> family of products over a year in our trade school and production. We are huge fans!”

</p>
<p class="space" style=" text-align:right;;"><em>

-Tom Stevens, 



</em>
</p>
<p style="text-align:right;"><em>Superintendent of Welding, Bath, ME</em></p>
</div>
</div>
</div>
<script>

    //leather wear image

    $(document).ready(function(){



        $(".preview a").on("click", function(){

            $(".selected").removeClass("selected");

            $(this).addClass("selected");

            var picture = $(this).data();

            

            event.preventDefault(); //prevents page from reloading every time you click a thumbnail





            $(".full").fadeOut( 100, function() { 

                $(".full h2").text(picture.title);

                $(".full span").text(picture.id);

            $(".full img").attr("src", picture.full);

            }).fadeIn();





        });// end on click



    });//end doc ready

 

</script>
