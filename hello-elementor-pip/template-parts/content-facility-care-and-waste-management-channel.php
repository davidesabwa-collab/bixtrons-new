<?php
/**
 * Template part for Facility Care & Waste Management Channel
 */
?>
<div id="lead-in-channel">
<div id="ss-overlay"></div>
<video autoplay="autoplay" id="video-lead-in" loop="loop" muted="" width="100%">
<source src="https://www.pipglobal.com/videos/mp4/facilities.mp4" type="video/mp4"/>
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
<h1>FACILITY CARE AND WASTE MANAGEMENT<br/><span>CHANNEL</span></h1>
<p class="space" style="font-size:1.2em;">
            Traditionally not thought of as a dangerous industry, Facility Care and Waste Management professionals face sudden contact with chemicals, liquid splash, dust and other hazardous debris. These unforeseeable dangers leave all parts of the body vulnerable to injury without the proper use of personal protective equipment. With over 5,000 products offered, PIP has the necessary safety solution for the job at hand. 
            </p>
</div>
</div>
<div class="testimonial">
<div class="clear" id="chartstart"></div>
<div>
<h2 style="color:#fff; margin-bottom:50px; text-align:center;">
            PPE For Every Task
            </h2>
<div class="ppe_task">
<section>
<div>
<img alt="ppe_task_icon" src="<?php echo pip_asset('images/icons/img-mercury-spill.png'); ?>"/>
<br/>
<span>
                        Mercury Spill Cleanup
                        </span>
</div>
<div>
<img alt="ppe_task_icon" src="<?php echo pip_asset('images/icons/img-decontamination.png'); ?>"/>
<br/>
<span>
                        Decontamination
                        </span>
</div>
<div>
<img alt="ppe_task_icon" src="<?php echo pip_asset('images/icons/img-fleet-cleaning.png'); ?>"/>
<br/>
<span>
                        Fleet Cleaning
                        </span>
</div>
<div>
<img alt="ppe_task_icon" src="<?php echo pip_asset('images/icons/img-hydro-blasting.png'); ?>"/>
<br/>
<span>
                        Hydro Blasting
                        </span>
</div>
<div>
<img alt="ppe_task_icon" src="<?php echo pip_asset('images/icons/img-mold-removal.png'); ?>"/>
<br/>
<span>
                        Mold Removal &amp;<br/> Remediation
                        </span>
</div>
<div>
<img alt="ppe_task_icon" src="<?php echo pip_asset('images/icons/img-waste-collecting.png'); ?>"/>
<br/>
<span>
                        Waste Collecting
                        </span>
</div>
<div>
<img alt="ppe_task_icon" src="<?php echo pip_asset('images/icons/img-industrial-dewatering.png'); ?>"/>
<br/>
<span>
                        Industrial Dewatering

                        </span>
</div>
</section>
<section>
<div>
<img alt="ppe_task_icon" src="<?php echo pip_asset('images/icons/img-industrial-cleaning.png'); ?>"/>
<br/>
<span>
                        Industrial Plant Cleaning
                        </span>
</div>
<div>
<img alt="ppe_task_icon" src="<?php echo pip_asset('images/icons/img-industrial-vacuuming.png'); ?>"/>
<br/>
<span>
                        Industrial Vacuuming
                        </span>
</div>
<div>
<img alt="ppe_task_icon" src="<?php echo pip_asset('images/icons/img-janitorial-services.png'); ?>"/>
<br/>
<span>
                        Janitorial Services
                        </span>
</div>
<div>
<img alt="ppe_task_icon" src="<?php echo pip_asset('images/icons/img-landfill.png'); ?>"/>
<br/>
<span>
                        Land-Filling
                        </span>
</div>
<div>
<img alt="ppe_task_icon" src="<?php echo pip_asset('images/icons/img-lead-removal.png'); ?>"/>
<br/>
<span>
                        Lead Removal &amp; Abatement
                        </span>
</div>
<div>
<img alt="ppe_task_icon" src="<?php echo pip_asset('images/icons/img-material-handling.png'); ?>"/>
<br/>
<span>
                        Material Handling 
                        </span>
</div>
<div>
<img alt="ppe_task_icon" src="<?php echo pip_asset('images/icons/img-waste-sorting.png'); ?>"/>
<br/>
<span>
                        Waste Sorting
                        </span>
</div>
</section>
</div>
</div>
</div>
<div class="channel-info">
<div class="container">
<h3 class="space">
            PPE SAVES LIVES
            </h3>
<p class="space" style="line-height:1.5;">
            Studies have shown that Facility Care and Waste Management related jobs are among the most dangerous jobs in America. The leading sources of danger for these professions include exposure to harsh chemicals, respiratory hazards and hand injuries such as cuts and punctures. The key to staying safe is using the right PPE.
            </p>
<p class="space" style="text-align:center; font-weight:bold; color:#333;">
            Fatal and Nonfatal Injuries Among U.S. Facility Care and Waste Management Jobs
            </p>
<br/>
<br/>
<div class="graph-wrapper">
<div id="charts" style="float:left; ">
<p style="text-align:center; font-weight:bold; color:#333; ">Annual Fatal Injuries</p>
<canvas height="270" id="fatal-injuries" width="500"></canvas>
</div><!-- #charts -->
</div>
<div class="graph-wrapper">
<div id="charts" style=" float:right; ">
<p style="text-align:center; font-weight:bold; color:#333;  margin-bottom:10px;">Annual Nonfatal Injuries</p>
<canvas height="270" id="non-fatal-injuries" width="500"></canvas>
</div><!-- #charts -->
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
                inGraphDataTmpl : "<%=v6%>",
                legendBorders: false,
                annotateDisplay : true,
                annotateLabel : "<%=v3 %>", 
                scaleLineColor: "rgba(0,0,0,0.5)",
                scaleOverride: true,
                scaleSteps: 5,
                scaleStepWidth: 10,
                scaleShowGridLines: false,
                barValueSpacing: 1, 
            
                }
                var barChartData1 = {
                labels : [
                    "Refuse & Recyclable Material Collectors",
                    "Operating Engineers",
                    "Industrial Machinery Installation","Maintenance Workers ","Installers"] ,
                datasets : [
                {
                title: "Percent",
                fillColor:['rgba(205,27,0,1.0)','rgba(84,84,84,1.0)','rgba(205,27,0,1.0)','rgba(84,84,84,1.0)','rgba(205,27,0,1.0)'],
                
                data:[37,50,45,39,31],
                }]
                }

                var opt2 = {
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
                scaleLineColor: "rgba(0,0,0,0.5)",
                scaleOverride: true,
                scaleSteps: 7,
                scaleStepWidth: 1000,
                scaleShowGridLines: false,
                barValueSpacing: 1, 
                    
                }
                var barChartData2 = {
                labels : ["Refuse & Recyclable Material Collectors", "Operating Engineers","Industrial Machinery Installation","Maintenance Workers ", "Installers"] ,
                datasets : [
                {
                title: "Percent",
                fillColor:['rgba(84,84,84,1.0)','rgba(205,27,0,1.0)','rgba(84,84,84,1.0)','rgba(205,27,0,1.0)','rgba(84,84,84,1.0)'],
                
                data:[6830,3530,4490,4750,6170]
                }]
                }



            </script>
</div>
<div class="clear"></div>
</div>
<div id="channel-products">
<div class="tiles tile tile-quarter tile-lead">
<h2>
                Tested And Trusted Protection
                </h2>
<p class="space">
                PIP prides itself on bringing the best of the world to you by providing innovative and dependable safety products for the job at hand. Our trusted brands such as Posiwear<sup>®</sup>, Falcon<sup>TM</sup> and G-Tek<sup>®</sup> ensure comfortable, head-to-toe protection for those operating in the Facility Care and Waste Management industry. 
            
                </p>
</div><!-- intro -->
<div class="tiles tile tile-half prod-slide-anchor" id="tile1" style="background-image: url('<?php echo pip_asset('images/channel/tile-facilities-1.jpg'); ?>'); background-position: top;">
<h2 class="none">POSI-WEAR<sup>®</sup> DISPOSABLE CLOTHING</h2>
</div><!-- maxiflex -->
<div class="prod-slide-wrap" id="tile1-slide-wrap">
<div class="prod-slide" id="tile1-slide">
<div class="slide-text">
<div>
</div>
<div class="lens-tech-descriptions">
<div class="tech-desc" id="td-ub">
<h3>3678B Posi-Wear<sup>®</sup> Ultimate Barrier</h3>
<p>
                            Made from PolySafe material which provides the highest level of barrier protection against chemicals, dry particulates, light sprays and liquid splash.
                            </p>
</div>
<div class="tech-desc" id="td-ba" style="display:none;">
<h3>3602 Posiwear<sup>®</sup> Breathable Advantage</h3>
<p>
                            Provides proprietary technology against dry particulates and liquid sprays without sacrificing breathability.
                            </p>
</div>
<div class="tech-desc" id="td-m3" style="display:none;">
<h3>
                            C3902 Posi-Wear<sup>®</sup> M3<sup>TM</sup>
</h3>
<p>
                            Five layers of protection deliver a high level of breathability and protection against dry particulates and water-based light liquid sprays and splashes.
                            </p>
</div>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?q=search&amp;v=3602|3678B|C3902 " target="_blank">VIEW PRODUCTS</a>
</div>
</div>
<!-- slide-text -->
<div class="slide-image" style="justify-content: flex-start;  ">
<div class="gallery clearfix">
<div class="pics clearfix">
<div class="thumbs">
<div class="preview"> <a class="selected" data-full="https://pipglobal.com/images/channel/posi-ub.png" data-tab="ub" data-title="Ultimate Barrier" href="#"> <img src="<?php echo pip_asset('images/channel/posi-ub.png'); ?>"/> </a> </div>
<div class="preview"> <a data-full="https://pipglobal.com/images/channel/posi-ba.png" data-tab="ba" data-title="Breathable Advantage" href="#"> <img src="<?php echo pip_asset('images/channel/posi-ba.png'); ?>"/> </a> </div>
<div class="preview"> <a data-full="https://pipglobal.com/images/channel/posi-m3.png" data-tab="m3" data-title="M3" href="#"> <img src="<?php echo pip_asset('images/channel/posi-m3.png'); ?>"/> </a> </div>
</div>
<div class="full clearfix" style="width:57%;">
<!-- first image is viewable to start -->
<img src="<?php echo pip_asset('images/channel/posi-ub.png'); ?>"/>
</div>
</div>
</div>
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-tall tile-quarter tile-right prod-slide-anchor" id="tile2" style="background-image: url('<?php echo pip_asset('images/channel/tile-facilities-2.jpg'); ?>'); background-size:cover; background-position: center bottom;">
<h2 class="none">FALCON<sup>TM</sup> LIQUID SPLASH PROTECTION</h2>
</div><!-- g-tek -->
<div class="prod-slide-wrap" id="tile2-slide-wrap">
<div class="prod-slide" id="tile2-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2 class="none">THE TRUSTED NAME IN LIQUID SPLASH PROTECTION</h2>
<p>
                        Harmful skin irritants are inevitable when working in industrial cleaning and waste collection environments. If not properly protected, these irritants can cause burn and infection to the skin. Falcon™ keeps skin dry and protected with its durable liquid and chemical resistant technologies. Be safe, stay dry.
                        </p>
<br/>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2563&amp;pwr_brand_partner=falcon" target="_blank">VIEW PRODUCTS</a>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/falcon.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-half prod-slide-anchor" id="tile3" style="background-image: url('<?php echo pip_asset('images/channel/tile-facilities-3.jpg'); ?>');">
<h2 class="space" style="color:#fff; text-decoration:none;">
            FOGLESS<sup>®</sup> 3SIXTY<sup>TM</sup>  EYEWEAR </h2>
</div><!-- hi-vis -->
<div class="prod-slide-wrap" id="tile3-slide-wrap">
<div class="prod-slide" id="tile3-slide">
<div class="slide-text">
<h2 class="none">
                    THE CHOICE IS CLEAR</h2>
<p>
                    Liquid splash, impact from debris, and fog-filled air can all pose threats to eye and vision safety. Only Bouton<sup>®</sup> Fogless<sup>®</sup> 3Sixty<sup>TM</sup> eyewear can protect from all these threats at once by containing a densely bonded coating that continues to bead away water and moisture while providing the impact protection needed for everyday safety. 
                    </p> <br/>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2562&amp;lens_coating=--FogLess+3Sixty--" target="_blank">VIEW PRODUCTS</a>
</div><!-- slide-text -->
<div class="slide-image" style="background-image: url('<?php echo pip_asset('images/channel/fogless.jpg'); ?>');">
<div class="close-slide">X</div><!-- close slide -->
</div><!--slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-quarter prod-slide-anchor" id="tile4" style="background-image:url('<?php echo pip_asset('images/tile-construction-x7.jpg'); ?>');">
<h2 class="space">
            NEXT LEVEL HAND PROTECTION</h2>
</div><!-- jsp -->
<div class="prod-slide-wrap" id="tile4-slide-wrap">
<div class="prod-slide" id="tile4-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
<span class="brand-icon-jsp" style="font-size:4vw; color:#666;"></span>
</div>
<div>
<h2 class="none">
                        X7<sup>®</sup>  TECHNOLOGY</h2>
<p>
                        PIP offers the widest range of seamless cut-resistant gloves and sleeves. X7<sup>TM</sup>  Technology represents the latest in engineered yarn development. This super lightweight and thin 18-gauge reinforced yarn provides very high cut resistance and durability by way of proprietary fibers. The result is exceptional cut resistance in a thin liner configuration perfect for sorting and handling applications.</p> <br/>
<p class="m-space">
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2560&amp;ccID=11570&amp;liner_material=--PolyKor+X7--">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/slide-construction-x7.jpg'); ?>');">
<div class="close-slide">X</div>
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-half prod-slide-anchor" id="tile5" style="background-image: url('<?php echo pip_asset('images/channel/tile-facilities-5.jpg'); ?>');">
<h2 class="space">
            PVC PROTECTIVE BOOTS
            </h2>
</div><!-- #polykor -->
<div class="prod-slide-wrap" id="tile5-slide-wrap">
<div class="prod-slide" id="tile5-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2 class="none">
                    AVOID THE SLIP AND SPLASH</h2>
<p class="space">
                    Head-to-toe protection is not an option, but a must when operating in messy, hazardous environments. Reinforced toed, durable PVC Boots provide the confidence and protection to trudge through any facility or waste management environment. Designed to repel liquid and mud, these heavy-duty boots will get the messiest of jobs done.

                    </p>
<p class="mspace">
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2563&amp;ccID=11674&amp;sID=28353&amp;ssID=80359" target="_blank">VIEW PRODUCTS</a>
</p>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/pvc-protective-boots.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
<div class="tiles tile tile-half prod-slide-anchor" id="tile6" style="background-image: url('<?php echo pip_asset('images/channel/tile-facilities-6.jpg'); ?>');">
<h2 class="space" style="color:#fff; text-decoration:none;">DISPOSABLE RESPIRATORY PROTECTION</h2>
</div>
<div class="prod-slide-wrap" id="tile6-slide-wrap">
<div class="prod-slide" id="tile6-slide">
<div class="slide-text" style="justify-content:space-between;">
<div>
</div>
<div>
<h2 class="none">BREATHE SAFELY</h2>
<p class="space" style="line-height:1.5;">
                    Respiratory protection is vital to the overall health and safety of all employees. Our Dynamic<sup>®</sup> NIOSH approved disposable respirators are designed with advanced features for increased comfort and reliability when working in a variety of particulate environments.
                    </p>
<br/>
<a class="button button-black" href="https://us.pipglobal.com/en/products/?scID=2566" target="_blank">LEARN MORE</a>
</div>
</div><!-- slide-text -->
<div class="slide-image" style="background-image:url('<?php echo pip_asset('images/channel/disposable-respiratory.jpg'); ?>');">
<div class="close-slide">X</div><!-- close-slide -->
</div><!-- slide-image -->
</div><!-- prod-slide -->
</div><!-- prod-slide-wrap -->
</div>
