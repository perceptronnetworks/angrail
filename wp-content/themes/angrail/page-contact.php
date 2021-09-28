<?php
/**
 * Template Name: Contact Us page
 */
get_header();
?>
<main id="primary" class="site-main">
<body id="top">
<div class="wrapper bgded overlay" style="background-image:url('/wp-content/uploads/2021/09/pagetitlebar.jpg');">
  <div id="breadcrumb" class="hoc clear"> 
      <h2><?php echo get_the_title(); ?></h2>
  </div>
</div>

<div class="wrapper row3">
  <div class="hoc page-container clear"> 
    <div class="content contact_align"> 
    <div class="two_quarter">
        <img src="/wp-content/uploads/2021/09/melinda-gimpel-5Ne6mMQtIdo-unsplash-scaled.jpg">
        </div>
      <div class="two_quarter">
          <div class="address">
              <h5>Address</h5>
              <p>AKSHAI NextGen Research and Innovation Labs (ANGRAIL)</p>
              <p>Plot No.6, First Street,</p>
              <p>Agasthiar Nagar, Nerkundam,</p>
              <p>Chennai - 600107</p>
              <p>Tamilnadu, India.</p>
            </div>
            <div class="phone">
            <h5>Phone Number</h5>
              <p><a href="tel:+919894694846">+919894694846</a></p>
            </div>
            <div class="email">
            <h5>Email Id</h5>
              <p><a href="mailto:info@angrail.com">info@angrail.com</a></p>
            </div>
        </div>
      

        
        
      
    </div>
    <div class="clear"></div>
</div>
</body>
</main><!-- #main -->
<?php
get_sidebar();

get_footer();