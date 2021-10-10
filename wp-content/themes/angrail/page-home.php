<?php
/**
 * Template Name: Home page
 */
get_header();
?>
<main id="primary" class="site-main">
<body id="top">

<div class="wrapper">
    <?php echo do_shortcode('[smartslider3 slider="3"]'); ?>  
</div>

<div class="wrapper row2">
  <section id="introblocks" class="hoc container clear"> 
   
    <ul class="nospace group">
      <li class="one_third first">
        <article>
          <a href="#"><img src="wp-content/uploads/2021/10/33-338946_transparent-foco-idea-png-tangier-png-download.png" /></a>
          <h6 class="heading underline">Creativity</h6>
          <p>Our carefully designed labs, project metholodgies and courses will ignite the creativity among learners.</p>
        </article>
      </li>
      <li class="one_third">
        <article class="active">
          <a href="#"><img src="wp-content/uploads/2021/10/d4cc7940fa499a6e274c3f719a67ad4f.png" /></a>
          <h6 class="heading underline">Research</h6>
          <p>Our pool of international experts  across the globe has proven track records. Our network creates an international research standards in higher learning institutes and industries.</p>
        </article>
      </li>
      <li class="one_third">
        <article>
          <a href="#"><img src="wp-content/uploads/2021/10/900967.png" /></a>
          <h6 class="heading underline">Innovation</h6>
          <p>Our curriculum and pedagogy are carefully designed after years of research. This makes the learners highly innovative and focused.</p>
        </article>
      </li>
    </ul>
  </section>
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="center btmspace-80">
      <h6 class="heading underline font-x2">Products and Services</h6>
    </div>
    <ul class="nospace group overview btmspace-80 home-grid">
      <li class="one_half first">
        <article>
          <div class="clear"><a href="#"><img class="imgstyle" width="150px" height="150px" src="wp-content/uploads/2021/10/5.1.2.jpeg"></a>
            <h6 class="heading">Research Labs</h6>
          </div>
          <p>ANGRAIL offers state of the art and high quality Research and Special Labs to the institutiosn. It also provides institutions with the access to Virtual Labs, Remote Labs and Hybrid Labs.</p>
        </article>
      </li>
      <li class="one_half">
        <article>
          <div class="clear"><a href="#"><img class="imgstyle" width="150px" height="150px" src="wp-content/uploads/2021/10/5.2.2a-1.jpg"></i></a>
            <h6 class="heading">Projects</h6>
          </div>
          <p>ANGRAIL accomplishes end to end project needs such as problem identification, mentoring, defining the problem, carry out the project, documenting, fabrication, presenting, publishing and patenting.</p>
        </article>
      </li>
      <li class="one_half">
        <article>
          <div class="clear"><a href="#"><img class="imgstyle" width="150px" height="150px" src="wp-content/uploads/2021/10/5.1.3a.jpg"></i></a>
            <h6 class="heading">Services</h6>
          </div>
          <p>ANGRAIL offers the state of the art services to schools, colleges, universities, industries and individuals to create Research, Creativity and Innovation among learners. </p>
        </article>
      </li>
      <li class="one_half">
        <article>
          <div class="clear"><a href="#"><img class="imgstyle" width="150px" height="150px" src="wp-content/uploads/2021/10/3.5a.jpg"></i></a>
            <h6 class="heading">Courses</h6>
          </div>
          <p>ANGRAIL offers online, offline and blended courses in trending topics across all domains such as arts, Science, Engineering, Education, Management, Agriculture, Animal Husbandry, Medical and Allied Sciences</p>
        </article>
      </li>
      
    </ul>
    <!-- <footer class="center"><a class="btn inverse" href="#">View all Services</a></footer> -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>



<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
</body>
</main><!-- #main -->
<?php
get_sidebar();

get_footer();
