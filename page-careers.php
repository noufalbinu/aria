<?php include "header.php"; ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page.css"/>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page_templates/contact-page.css"/>
<div class="page">
   <div class="w-layout-blockcontainer container hero w-container">

      <div class="page-heading">
         <h1 class="page-title">Join Our Team</h1>
      </div>
      <section class="section container-width-1100">
         <div class="contact-container">
            <div class="grid-careers">
               <div class="contact-form">
                  <div class="form-block w-form">
                    <?php echo do_shortcode('[contact-form-7 id="524c2ea" title="careers"]'); ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</page>
        
         
<?php include "footer.php"; ?>