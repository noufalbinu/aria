<?php include "header.php"; ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page.css"/>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page_templates/contact-page.css"/>
<div class="page">
   <div class="w-layout-blockcontainer container hero w-container">

      <div class="page-heading">
         <h1 class="page-title">Contact Us</h1>
      </div>
      <section class="section container-width-1100">
         <div class="contact-container">
            <div class="grid-contact">
               <div class="contact-info">
                  <div class="wrap-map">
                     <a href="#">
                        <img class="map-image" src="<?php echo get_stylesheet_directory_uri(); ?>/extra_files/aria-holding-location.jpg" width="100%" height="100%" loading="lazy">
                     </a>
                  </div>
                  <div class="contact-address">
                     <p>
                        PO Box 4413, 9th Floor, Tower 3 <br>
                        The Gate Mall, Doha, Qatar <br>
                        Phone: +974 4463 5278 <br>
                        Email: info@ariaholding.com    
                     </p>
                  </div>
               </div>
               <div class="contact-form">
                  <div class="form-block w-form">
                    <?php echo do_shortcode('[contact-form-7 id="0a0df16" title="contact"]'); ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</page>
        
         
<?php include "footer.php"; ?>