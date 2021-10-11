<div class="wrapper row4" style="height:410px;">
  <footer id="footer" class="hoc clear"> 
   
    <div class="one_quarter first">
      <h6 class="heading">About Us</h6>
        <p class="foo_text" >AKSHAI NexGen Research and Innovation Labs (ANGRAIL) is a global hub for any educational needs. ANGRAIL join hands with schools, colleges, universities & institutes and setup remotely operated research labs. And ANGRAIL offers end to end project support for schools, colleges and PhD students. And the radar of ANGRAIL also extended to offer online courses, sales and support of educational products. </p>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Our Services</h6>
      <nav class="sdb_holder"> 
                                <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'footer',   
                                            'menu_id'      => 'test',    
                                            'container'       => 'ul',
								                            'menu_class'    => 'footer_links parent-menu',
                                            'depth'           => 3,
                                            'walker'          => new My_Walker_Nav_Menu() //call walker 
                                          ));
                                        class My_Walker_Nav_Menu extends Walker_Nav_Menu {
                                        function start_lvl(&$output, $depth = 0, $args = array()) {
                                            $indent = str_repeat("\t", $depth);
                                            $output .= "\n$indent<ul class=\"child_menu\">\n";
                                          }
                                        }
                                ?>
            </nav>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Contact Us</h6>
      <ul class="nospace linklist">
      <li>
      <p>Head Quarters:</p>
        <i style="color:#1ba99b;" class="fas fa-map-marker-alt rgtspace-5"></i>
        <a href="#">Chennai 600107, TN, India</a>
      </li>
      <li>
      <p>Write to us on: </p>
        <i style="color:#1ba99b;" class="far fa-envelope rgtspace-5"></i>
        <a style="text-transform:lowercase"; href="mailto:info@angrail.com">info@angrail.com</a>
      </li>
      <li>
        <p>Get us on: </p>
        <i style="color:#1ba99b;" class="fas fa-phone-volume rgtspace-5"></i>
        <a href="tel:9894694846">+91 9894694846</a>
      </li>
      </ul>
    </div>
   
  </footer>
</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p style="text-align:center; color:#fff;">Copyright © <a href="">ANGRAIL</a>. All rights reserved.</p>
  </div>
</div>