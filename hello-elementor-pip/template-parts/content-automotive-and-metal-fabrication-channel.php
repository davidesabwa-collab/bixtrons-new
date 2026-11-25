<?php
/**
 * Template part for Automotive & Metal Fabrication Channel
 */
?>
<div id="lead-in-channel">
<div id="ss-overlay"></div>
<video autoplay="autoplay" id="video-lead-in" loop="loop" muted="">
<source src="https://pipglobal.com/videos/mp4/automotive.mp4" type="video/mp4"/>
<!-- <embed
            src="YTPlayer.swf"
            flashvars="movieName=industrial.mp4&autoStart=true"
            width=100%
            height=auto
            allowFullScreen=true
            type="application/x-shockwave-flash"
            pluginspage="http://get.adobe.com/flashplayer" /> -->
</video>
<div id="lead-in-text">
<div class="clear" id="chartstart"></div>
<h1>
        AUTOMOTIVE AND METAL FABRICATION<br/><span>CHANNEL</span>
</h1>
<p class="space">
            Auto manufacturing poses many hazards for workers due to its challenging work environment and physical demands. According to the U.S. Bureau of Labor Statistics, workers in automobile and motor vehicle manufacturing have higher rates of injury and illness than workers in most other industries. PIP offers a full line of products for auto workers who are exposed to assembly line work, dangerous machinery and jobs that are physically demanding.
            </p>
</div>
</div>
<div class="testimonial">
<div class="container">
<h2 class="space" style="margin-bottom:50px; text-align:center; ">
            More than 1.9 million workers in the Automotive Manufacturing Industry are in the U.S.
            </h2>
<div class="automotive-testimonial graph-wrapper">
<canvas height="400" id="pie-chart" width="400"></canvas>
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
        inGraphDataFontSize : 11,
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
            title : "Engine Manufacturing"
        },
        {
            value : 29,
            color: "rgba(253,184,19,1.0)",
            title : "Parts Manufacturing"
        },
        {
            value : 46,
            color: "rgba(112,173,71,1.0)",
            title : "Repair and Maintenance"
        },
        {
            value : 3,
            color: "rgba(0,101,179,1.0)",
            title : "Tire Manufacturing"
        },
        {
            value : 7,
            color: "rgba(165,165,165,1.0)",
            title : "Trailer Manufacturing"
        },
        {
            value : 10,
            color: "rgba(243,111,35,1.0)",
            title : "Vehicle Manufacturing"
        }
        ]
    </script>
<div class="channel-info">
<div class="container">
<h3 class="space">
        Common Injuries in the Automotive Manufacturing Industry
        </h3>
<br/>
<div class="graph-wrapper">
<div id="charts">
<canvas height="400" id="injury" width="750"></canvas>
<h5 style="margin:0 0 0 140px; ">Number of Injuries</h5>
</div>
</div>
</div>
<div class="clear"></div>
</div>
<script>
            // Bar Graph data
            var startWithDataset =1;
            var startWithData =1; 

            var opt = {
            animationStartWithDataset : startWithDataset,
            animationStartWithData : startWithData,
            animationSteps : 175,
            canvasBorders : false,
            legend : true,
            inGraphDataShow : false,
            inGraphDataTmpl : "<%=v6 %>",
            legendBorders: false,
            annotateDisplay : true,
            annotateLabel : "<%=v3 %>", 
            scaleLineColor: "rgba(0,0,0,0.8)",
            scaleOverride: true,
            scaleSteps: 20,
            scaleStepWidth: 10,
            scaleShowGridLines: false,
            barValueSpacing: 2, 
          
            options:{
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Number of Injuries'
                        }
                    }]
                }
            }
            
            }
            var barChartData = {
            
            labels:[
                "Sprains, strains, tears",
                "All other natures",
                "Soreness, pain",
                "Fractures",
                "Cuts, lacerations",
                "Bruise, contusions",
                "Carpal tunnel syndrome",
                "Amputations",
                "Punctures (except gunshot wounds)",
                "Heat (thermal) burns",
                "Tendonitis",
                "Chemical burns and corrosions"
            ],
            datasets : [
                {
                fillColor:['rgba(205,27,0,1.0)',
                'rgba(84,84,84,1.0)',
                'rgba(205,27,0,1.0)',
                'rgba(84,84,84,1.0)',
                'rgba(205,27,0,1.0)',
                'rgba(84,84,84,1.0)',
                'rgba(205,27,0,1.0)',
                'rgba(84,84,84,1.0)',
                'rgba(205,27,0,1.0)',
                'rgba(84,84,84,1.0)',
                'rgba(205,27,0,1.0)',
                'rgba(84,84,84,1.0)'],
            
                data:[
                    189.5,72.5,65.1,52.8,42.7,36.8,11.2,7.6,4.2,3,2.3,0.4
                ],
                
                }
            ],
            options:{
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Number of Injuries'
                        }
                    }]
                }
            }
            }

           
</script>
<div id="channel-products">
<div class="tiles tile tile-quarter tile-lead">
<h2>
INNOVATION AND CERTIFIED SAFETY

</h2>
<p class="space">
First to market with innovative safety products that keep you safe and help you to work more productively. G-Tek<sup>®</sup> and Kut Gard<sup>®</sup> glove lines offer the cut protection workers need without sacrificing dexterity. Ambi-Dex<sup>®</sup> disposable gloves are designed with the utmost safety in mind.

</p>
</div><!-- intro -->
<div class="tiles tile tile-half prod-slide-anchor" id="tile1" style="background-image: url('<?php echo pip_asset('images/channel/tile-automotive-1.jpg'); ?>'); background-position: top;">
<h2 class="none">Arm Protection</h2>
</div><!-- maxiflex -->
<div class="prod-slide-wrap" id="tile1-slide-wrap">
<div class="prod-slide" id="tile1-slide">
<div class="slide-text" style="justify-content:space-between;">
<div></div>
<div>
<h2>PROTECT YOUR ARMS WITH CUT-RESISTANT SLEEVES</h2>
<p>
                PIP offers the widest range of seamless cut-resistant gloves and sleeves. Our products are manufactured using a variety of yarns containing advanced fibers including DuPont Kevlar<sup>®</sup> and Dyneema<sup>®</sup> as well as proprietary engineered yarns.
                </p>
<br/>
<p class="m-space">
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2575&amp;ccID=11622" target="_blank">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-automotive-1.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="tile2" style="background-image: url('<?php echo pip_asset('images/channel/tile-automotive-2.jpg'); ?>'); background-size:cover; background-position: center bottom;">
<h2 class="none">
            HAND PROTECTION<br/>
INSPECTION GLOVES</h2>
</div><!-- g-tek -->
<div class="prod-slide-wrap" id="tile2-slide-wrap">
<div class="prod-slide" id="tile2-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2 class="none">INSPECTION GLOVES</h2>
<p>
Uncoated gloves are an economic solution for keeping hands protected. With a reversible design, they can be replaced one at a time, instead of in pairs. They can also function as liners for other styles of hand protection.</p>
<br/>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2561&amp;ccID=11553&amp;liner_material=--Nylon--&amp;hem=Zigzag+Stitch|Hemmed" target="_blank">VIEW PRODUCTS</a>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-automotive-2.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-half prod-slide-anchor" id="tile3" style="background-image: url('<?php echo pip_asset('images/channel/tile-automotive-3.jpg'); ?>');">
<h2 class="space" style="display:flex; justify-content:space-between;">
<div>
Protective Clothing
</div>
<span>
<img alt="Posiwear logo" src="<?php echo pip_asset('images/channel/Posiwear-Logo.png'); ?>" style="width:70px;"/>
</span>
</h2>
</div>
<div class="prod-slide-wrap" id="tile3-slide-wrap">
<div class="prod-slide" id="tile3-slide">
<div class="slide-text">
<h2 class="none">
POSIWEAR<sup>®</sup> BREATHABLE ADVANTAGE</h2>
<p>
Posi-Wear<sup>®</sup> BA<sup>TM</sup> resists dry particulates and chemical-based sprays without sacrificing breathability. Constructed of low linting, antistatic material with a microporous film bonded to a spunbond polypropylene that’s ideal for painting, assembly and resurfacing. 
</p> <br/>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?q=search&amp;v=posiwear%20BA" target="_blank">VIEW PRODUCTS</a>
</div><!-- slide-text -->
<div class="slide-image" style="background-image: url('<?php echo pip_asset('images/channel/slide-automotive-3.jpg'); ?>');background-size: 70% 70%; background-position: center; ">
<img alt="" src=""/>
<div class="close-slide">X</div><!-- close slide -->
</div><!--slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="tile4" style="background-image:url('<?php echo pip_asset('images/channel/tile-automotive-4.jpg'); ?>');">
<h2 class="space">
Head Protection</h2>
</div><!-- jsp -->
<div class="prod-slide-wrap" id="tile4-slide-wrap">
<div class="prod-slide" id="tile4-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2 class="none">
AVOID BUMPS AND SCRAPES WITH BUMP CAPS</h2>
<p>
Getting workers to wear head protection can be tough, especially in areas where hard hats are not required. It’s estimated that a third of impact injuries to the head are suffered by workers who bumped into stationary objects while not wearing any head protection. PIP’s bump caps are sure to increase wearer acceptability and reduce injuries.</p> <br/>
<p class="m-space">
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2569&amp;ccID=11576" target="_blank">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image: url('<?php echo pip_asset('images/channel/slide-automotive-4.jpg'); ?>'); ">
<div class="close-slide">X</div>
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="tile5" style="background-image: url('<?php echo pip_asset('images/channel/tile-automotive-5.jpg'); ?>');">
<h2 class="space" style="display:flex; justify-content:space-between;">
<div>
Hand Protection 
</div>
<span>
<img alt="kut gard logo" src="<?php echo pip_asset('images/channel/Kut-Gard-Logo.png'); ?>" style="width:55px;"/>
</span>
</h2>
</div><!-- #polykor -->
<div class="prod-slide-wrap" id="tile5-slide-wrap">
<div class="prod-slide" id="tile5-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2 class="none"> HEAVY-DUTY PERFORMANCE
</h2>
<p class="space">
One glove does not fit all work conditions. PIP’s Seamless knit cut resistant uncoated Kut Gard<sup>®</sup> safety gloves have been trusted for more than 20 years to provide the highest level of cut resistance in hazardous working conditions.
</p>
<p class="mspace">
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2560&amp;ccID=11570&amp;coating=Uncoated&amp;ansi_cut_9=A4|A5|A6" target="_blank">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-automotive-5.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="tile6" style="background-image: url('<?php echo pip_asset('images/channel/tile-automotive-6.jpg'); ?>');">
<h2 class="space">
Hand Protection<br/>
Seamless Knit <br/>
Cut Resistant 

</h2>
</div><!-- #polykor -->
<div class="prod-slide-wrap" id="tile6-slide-wrap">
<div class="prod-slide" id="tile6-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2 class="none">
PROVEN AND TRUSTED CUT PROTECTION</h2>
<p class="space">
PolyKor<sup>®</sup> makes use of PIP’s proprietary fibers and engineered yarns to produce cut resistant gloves that surpass everyday performance standards. PolyKor<sup>®</sup> technology is optimized for the type of protection and comfort required by plant and field workers of today.
</p> <br/>
<p class="mspace">
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2560&amp;ccID=11570&amp;sID=28293&amp;ssID=80187" target="_blank">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-automotive-6.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="tile7" style="background-image: url('<?php echo pip_asset('images/img-construction-bouton.jpg'); ?>');">
<h2 class="space">
    Bouton<sup>®</sup> advances in lens technology
	</h2>
</div>
<div class="prod-slide-wrap" id="tile7-slide-wrap">
<div class="prod-slide" id="tile7-slide">
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
<div class="img" id="before" style="background-image:url('<?php echo pip_asset('images/lt-before-ar.jpg'); ?>');"></div>
<div class="img" id="after" style="background-image:url('<?php echo pip_asset('images/lt-after-ar.jpg'); ?>');"></div>
</div><!-- tech-views-io -->
<div class="close-slide">X</div>
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-half prod-slide-anchor" id="tile8" style="background-image: url('<?php echo pip_asset('images/channel/tile-automotive-8.jpg'); ?>');">
<h2 class="space" style="display:flex; justify-content:space-between;">
<div>
Disposable Gloves
</div>
<span>
<img alt="ambi-dex logo" src="<?php echo pip_asset('images/channel/ambidex-logo.png'); ?>" style="width:120px;"/>
</span>
</h2>
</div><!-- max-safety -->
<div class="prod-slide-wrap" id="tile8-slide-wrap">
<div class="prod-slide" id="tile8-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2 class="none">OIL AND LIQUID RESISTANT </h2>
<p class="space" style="line-height:1.5;">
Whether you’re assembling engine components, working in maintenance repair shops or working with dirt, grime and fluids, PIP has a full line of Ambi-Dex<sup>®</sup> disposable gloves that keep your hands protected.
</p>
<br/>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2560&amp;ccID=11547&amp;polymer=Nitrile&amp;grade=Industrial&amp;thickness=4|5|6&amp;powder=Powder+Free" target="_blank">VIEW PRODUCTS</a>
</div></div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/slide-automotive-8.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
</div>
