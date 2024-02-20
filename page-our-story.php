<?php include "header.php"; ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/horizontal-carousel.css"/>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page.css"/>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page_templates/ourstory.css"/>
<div class="page_container">
   <div class="page text-box container-width-800">       
         <p>
            From our beginnings in 1995 from the State of Qatar, 
            we have evolved into a global force with a presence across continents. 
            Our roots lie in a passion for entrepreneurship, a commitment to excellence, 
            and a relentless pursuit of growth. Over the years, we have expanded our 
            horizons and diversified our portfolio to encompass a diverse array of 
            industries from engineering, industrial, technology & business 
            services, trading, FMCG, health & wellness, each contributing to 
            our overall success. Our global reach and deep industry knowledge 
            empowers us to leverage local insights while harnessing international 
            opportunities, ensuring our sustained success across borders.
         </p>
   </div>
   <div class="horizontal-carousel-container">
      <div class="horizontal-carousel">
         <div data-w-id="4343f605-392e-459e-ccab-77035eb555a3" class="gallery">
            <div class="w-layout-grid grid-gallery-top"  id="carousel-left">
               <div class="gallery-item-end wrap-gallery-small"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner-horizontal/1(1).png" loading="lazy" sizes="100vw" alt="" class="image-gallery"></div>
               <div class="gallery-item-end wrap-gallery-big"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner-horizontal/1(3).png" loading="lazy" sizes="100vw" alt="" class="image-gallery"></div>
               <div class="gallery-item-end wrap-gallery-medium"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner-horizontal/1(6).png" loading="lazy" sizes="100vw" alt="" class="image-gallery"></div>
               <div class="gallery-item-end wrap-gallery-small last-image-top-grid"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner-horizontal/1(4).png" loading="lazy" sizes="100vw" alt="" class="image-gallery"></div>
            </div>
            <div class="w-layout-grid grid-gallery-bottom" id="carousel-right">
               <div class="wrap-gallery-small"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner-horizontal/1(5).png" loading="lazy" sizes="100vw"  alt="" class="image-gallery"></div>
               <div class="wrap-gallery-medium"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner-horizontal/1(2).png" loading="lazy" sizes="100vw"  alt="" class="image-gallery"></div>
               <div class="wrap-gallery-big"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner-horizontal/1(7).png" loading="lazy" sizes="100vw" alt="" class="image-gallery"></div>
               <div class="wrap-gallery-small last-image-top-grid"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner-horizontal/1(8).png" loading="lazy" sizes="100vw" alt="" class="image-gallery"></div>
            </div>
         </div>
      </div>
   </div>
   <section class="section content-wrap">
      <div class="">
         <div class="w-layout-blockcontainer container w-container">
            <div class="content-box container-width-800">
               <h2>Our Vision</h2>
               <p>To be a catalyst for progress and innovation in every market we enter. 
                  We aspire to create enduring value for our stakeholders, employees, and the 
                  communities in which we operate. Our unwavering dedication to excellence drives 
                  us to seek new opportunities and continuously evolve, 
                  ensuring we remain at the forefront of our chosen sectors.
               ​</p>
               <h2>Our Mission</h2>
               <p>We are committed to making a meaningful difference in the world. Through responsible business practices, community engagement, and philanthropic initiatives, we aim to contribute to a better tomorrow for all.​</p>
            </div>
         </div>
      </div>
   </section>
   
</div>

<script>
let carouselLeft = document.getElementById("carousel-left");
let carouselRight = document.getElementById("carousel-right");

let sTop = document.querySelector(".maze");

let isScrolling = false;

sTop.addEventListener('wheel', (e) => {
   if (!isScrolling) {
      isScrolling = true;
      let delta = e.deltaY;
      const scrollDirection = e.deltaY;
      if(scrollDirection > 0 ){
         
         carouselRight.classList.toggle("carousel-left");
         carouselLeft.classList.toggle("carousel-right");
         console.log("1")
      }if(scrollDirection < 0 ){
         carouselRight.classList.toggle("carousel-left");
         carouselLeft.classList.toggle("carousel-right");
         
         console.log("2")
      }
      setTimeout(() => {
         isScrolling = false;
      }, 1000); // Set your desired delay time in milliseconds
   }
});

// Handling swipe finger Mobile
let touchstartX = 0
let touchendX = 0
    
function checkDirection() {
  if (touchendX < touchstartX) {
      carouselRight.classList.toggle("carousel-left");
      carouselLeft.classList.toggle("carousel-right");
  } 
  if (touchendX > touchstartX) {
      carouselRight.classList.toggle("carousel-left");
      carouselLeft.classList.toggle("carousel-right");
  }
}
document.addEventListener('touchstart', e => {
  touchstartX = e.changedTouches[0].screenY
})
document.addEventListener('touchend', e => {
  touchendX = e.changedTouches[0].screenY
  checkDirection()
})
</script>
<?php include "footer.php"; ?>