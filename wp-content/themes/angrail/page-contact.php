<?php
/**
 * Template Name: Contact Us page
 */
get_header();
?>
<main id="primary" class="site-main">
<body id="top">
<div class="wrapper bgded overlay" style="background-image:url('wp-content/uploads/2021/09/pagetitlebar.jpg');">
  <div id="breadcrumb" class="hoc clear"> 
      <h2><?php echo get_the_title(); ?></h2>
  </div>
</div>

<div class="wrapper row3">
  <div class="hoc page-container clear"> 
    <div class="content about_align"> 
    <div class="two_quarter">
            <img class="imgstyle" src="/wp-content/uploads/2021/10/contact.png">
    </div>
    <div class="two_quarter contact_align">
    <div class="address">
              <h5>Address</h5>
              <p>AKSHAI NextGen Research and Innovation Labs (ANGRAIL)</p>
              <p>Plot No.6, First Street,</p>
              <p>Agasthiar Nagar, Nerkundam,</p>
              <p>Chennai - 600107</p>
              <p>Tamilnadu, India.</p>
            </div>
            <div class="phone" style="display:flex;">
            <i class="fas fa-phone-volume inspace-5 rgtspace-5"></i>
              <p><a href="tel:+919894694846">+919894694846</a></p>
            </div>
            <div class="email" style="display:flex;">
            <i class="far fa-envelope inspace-5 rgtspace-5"></i>
              <p><a href="mailto:info@angrail.com">info@angrail.com</a></p>
            </div>
    </div> 
    
    </div>
    <div class="clear"></div>
</div>
</div>
</body>
</main><!-- #main -->
<?php
get_sidebar();

get_footer();