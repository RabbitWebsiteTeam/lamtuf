<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<section id="section12">
<div class="container" >
 		   <div class="row">
		
	          <div class="col-md-12 col-sm-12 col-xs-12 banner">
				<div id="myCarousel" class="carousel slide" data-ride="carousel"  data-interval="8000"> 
			  <!-- Indicators -->
					  <ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						
					  </ol>
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
				<div class="item active">
				  <img src="<?php bloginfo('template_url'); ?>/assets/images/banner1.jpg" alt="" width="1100" height="434" >
				 
				  
				  </div>
				  <div class="item">
				  <img src="<?php bloginfo('template_url'); ?>/assets/images/banner1.jpg" alt="" width="1100" height="434" >
				 
					
				  </div>
				</div>
				  
				  
				</div>
					  <!-- Wrapper for slides -->
			

				
		  </div>
		     
		  
      </div>
	   </div>
	   </section>
	<section id="section13">   
 <div class="container">
	<div class="row">
       
            <div class="col-lg-4 col-md-4 col-sm-4 col-lg-12 col-xs-12">
			 <div class="list-group-item text-center product-head">Product<br/> Range</div>
              <div class="list-group">
			 
                <a href="#" class="list-group-item active text-center">
                 Phenolic Fabric Laminates
                </a>
                <a href="#" class="list-group-item text-center">
                 Phenolic Paper Laminates
                </a>
                <a href="#" class="list-group-item text-center">
                 DensifiedWood Laminates
                </a>
                <a href="#" class="list-group-item text-center">
                Epoxy Laminates
                </a>
                <a href="#" class="list-group-item text-center">
                Phenolic Shuttering Film
                </a>
				 <a href="#" class="list-group-item text-center">
                Phenolic Shuttering Film
                </a>
				 <a href="#" class="list-group-item text-center">
                Phenolic Shuttering Film
                </a>
              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                 
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/product-image.jpg">
                    <p>These laminates are produced by impregnating cotton fabric with Phenolic resin and then pressing these prepegs under high pressure and controlled temperature. By choosing different grades (coarse/ medium/ fine wave) of Fabric and modifying phenolic resin, laminates of various grades and specifications are produced. If required, lubricants are added in the resin system to achieve better wear resistance. </p>

					
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
              
                      <img src="<?php bloginfo('template_url'); ?>/assets/images/product-image.jpg">
                     <p>Phenolic paper laminate products are produced by impregnating paper with Phenolic resin and then pressing these treated papers under calculated pressure and controlled temperature. By choosing different papers and impregnating them with specially produced resins, various grades and specifications of laminates are produced.</p>
                </div>
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
                 
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/product-image.jpg">
                    <p>These laminates are produced by treating beech wood veneers with Phenolic resin and then pressed under controlled pressure and temperature. By orienting veneers in cross or longitudinal manner products for specific applications are produced.

These products have excellent electrical insulating property, thermal insulation and good insulation in oil immersed applications in Transformers. </p>
				
                </div>
                <div class="bhoechie-tab-content">
                   
                      <img src="<?php bloginfo('template_url'); ?>/assets/images/product-image.jpg">
                  <p>These laminates are manufactured by treating E-Class glass fabric with electrical grade epoxy resin and then pressing these prepegs under high temperature and controlled pressure. Laminates are produced in grades to work upto 130Deg C,155Deg C and 180Deg C. Flame retardant grade is produced by modifying resin system 

These products have mechanical strength at elevated temperature, </p>
                </div>
                <div class="bhoechie-tab-content">
                   
                     <img src="<?php bloginfo('template_url'); ?>/assets/images/product-image.jpg">
                 <p>Phenolic shuttering films are produced by coating specially produced phenolic resin on a paper and cured to the required degree by monitoring processing parameter in the treator. These films are offered in various grammage  to suit the different application.
These films find extensive usage in production of shuttering boards for construction industry.</p>
                </div>
				  <div class="bhoechie-tab-content">
              
                      <img src="<?php bloginfo('template_url'); ?>/assets/images/product-image.jpg">
                     <p>Phenolic paper laminate products are produced by impregnating paper with Phenolic resin and then pressing these treated papers under calculated pressure and controlled temperature. By choosing different papers and impregnating them with specially produced resins, various grades and specifications of laminates are produced.

</p>
                </div>
				  <div class="bhoechie-tab-content">
              
                      <img src="<?php bloginfo('template_url'); ?>/assets/images/product-image.jpg">
                     <p>Phenolic paper laminate products are produced by impregnating paper with Phenolic resin and then pressing these treated papers under calculated pressure and controlled temperature. By choosing different papers and impregnating them with specially produced resins, various grades and specifications of laminates are produced.

</p>
                </div>
            </div>
       
  </div>  </div>
</section>   
<section id="section14">   
	        <div class="container">
 <div class="row">
		    <div class="col-md-4 col-sm-4 col-xs-12 block-left1">
		   <div class="left-txt1">
		   EnQuire<br/>Now
		   </div>
		 </div>
	          <div class="col-md-8 col-sm-8 col-xs-12 form-book">
			
			
			
            <?php echo do_shortcode( ' [contact-form-7 id="5" title="enquire now"]' ); ?>
				
		    </div>
		  
      </div>
	  </div>
	  </section> 
<div class="m-paneler1">

<a class="trigger text-uppercase" href="#"  data-toggle="modal" data-target="#myModal">Enquire Now</a>

				
</div>	  
	   </div>
	  <script>
$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});

$(function(){
$('.clickable').on('click',function(){ 
		 
         $(".bhoechie-tab .bhoechie-tab-content").removeClass("active");
         $("#ul_menu li").removeClass("active");
		 
         })
 })
</script>

 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Enquire Now</h4>
        </div>
        <div class="modal-body">
          <?php echo do_shortcode( ' [contact-form-7 id="5" title="enquire now"]' ); ?>
        </div>

      </div>
      
    </div>
  </div>
  
</div>
<?php get_footer(); ?>
