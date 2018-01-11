<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cseruet</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset1/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset1/css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset1/css/style.css">
    
  </head>
  <body>
    <!--Navigation bar-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">CSE<span>ruet</span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url(); ?>teachers">Teachers</a></li>
          <li><a href="#feature">Features</a></li>
          <li><a href="#organisations">Organisations</a></li>
          <li><a href="#courses">Courses</a></li>
          <li><a href="#" data-target="#login" data-toggle="modal">Sign in</a></li>
          
        </ul>
        </div>
      </div>
    </nav>
    <!--/ Navigation bar-->
    <!--Modal box-->
    <div class="modal fade" id="login" role="dialog">
      <div class="modal-dialog modal-sm">
      
        <!-- Modal content no 1-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center form-title">Login</h4>
          </div>
          <div class="modal-body padtrbl">

            <div class="login-box-body">
              <p class="login-box-msg">Sign in to start your session</p>
              <div class="form-group">
                <form method="post" action="<?php echo site_url('welcome/sign_up');?>">
 <div class="form-group has-feedback"> <!----- username -------------->
      <input class="form-control" placeholder="Username" name="user_id" type="text" autocomplete="off" /> 
      <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span><!---Alredy exists  ! -->
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback"><!----- password -------------->
                <input class="form-control" placeholder="Password" name="password" type="password" autocomplete="off" />
      <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
  </div>
  <div class="row">
      <div class="col-xs-12">
          <div class="checkbox icheck">
              <label>
                <input type="checkbox" id="loginrem" > Remember Me
              </label>
          </div>
      </div>
      <div class="col-xs-12">
          <input type="submit" name="submit" value="Sign In" class="btn btn-green btn-block btn-flat"></input>
      </div>
  </div>
</form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!--/ Modal box-->
    <!--Banner-->
    <div class="banner">
      <div class="bg-color">
        <div class="container">
          <div class="row">
            <div class="banner-text text-center">
              <div class="text-border">
                <h2 class="text-dec">DEPARMENT OF COMPUTER SCIENCE AND ENGINEERING</h2>
              </div>
              <div class="intro-para text-center quote">
                <p class="big-text">RAJSHAHI UNIVERSITY OF ENGINEERING AND TECHNOLOGY</p>
                <p class="small-text">Trust & Quality.<br> Learning Today.. Tomorrow...</p>
              </div>
              <a href="#feature" class="mouse-hover"><div class="mouse"></div></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Banner-->
    <!--Feature-->
    <section id ="feature" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Features</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
            <hr class="bottom-line">
          </div>
          <div class="feature-info">
            <div class="fea">
              <div class="col-md-4">
                <div class="heading pull-right">
                  <h4>Latest Technologies</h4>
                  <p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-css3"></i>
                </div>
              </div>
            </div>
            <div class="fea">
              <div class="col-md-4">
                <div class="heading pull-right">
                  <h4>Toons Background</h4>
                  <p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-drupal"></i>
                </div>
              </div>
            </div>
            <div class="fea">
              <div class="col-md-4">
                <div class="heading pull-right">
                  <h4>Award Winning Design</h4>
                  <p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-trophy"></i>
                </div>
              </div>
            </div>
        </div>
        </div>
      </div>
    </section>
    <!--/ feature-->
    <!--Organisations-->
    <section id ="organisations" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">         
              <div class="orga-stru">
                <h3>65%</h3>
                <p>Say NO!!</p>
                <i class="fa fa-male"></i>
              </div>  
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">         
              <div class="orga-stru">
                <h3>20%</h3>
                <p>Says Yes!!</p>
                <i class="fa fa-male"></i>
              </div>  
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">         
              <div class="orga-stru">
                <h3>15%</h3>
                <p>Can't Say!!</p>
                <i class="fa fa-male"></i>
              </div>  
            </div>
          </div>
          <div class="col-md-6">
            <div class="detail-info">
              <hgroup>
                <h3 class="det-txt"> Is inclusive quality education affordable?</h3>
                <h4 class="sm-txt">(Revised and Updated for 2016)</h4>
              </hgroup>
              <p class="det-p">Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ Organisations-->
    <!--Cta-->
    <section id="cta-2">
      <div class="container">
        <div class="row">
            <div class="col-lg-12">
              <h2 class="text-center">Subscribe Now</h2>
              <p class="cta-2-txt">Sign up for our free weekly software design courses, we’ll send them right to your inbox.</p>
             <div class="cta-2-form text-center">
              <form action="#" method="post" id="workshop-newsletter-form">
                    <input name="" placeholder="Enter Your Email Address" type="email">
                    <input class="cta-2-form-submit-btn" value="Subscribe" type="submit">
                </form>
             </div>   
            </div>
        </div>
      </div>
    </section>
    <!--/ Cta-->
    <!--work-shop-->
    <section id="work-shop" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Upcoming Workshop</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
            <hr class="bottom-line">
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="service-box text-center">
              <div class="icon-box">
                <i class="fa fa-html5 color-green"></i>
              </div>
              <div class="icon-text">
                <h4 class="ser-text">Mentor HTML5 Workshop</h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="service-box text-center">
              <div class="icon-box">
                <i class="fa fa-css3 color-green"></i>
              </div>
              <div class="icon-text">
                <h4 class="ser-text">Mentor CSS3 Workshop</h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="service-box text-center">
              <div class="icon-box">
                <i class="fa fa-joomla color-green"></i>
              </div>
              <div class="icon-text">
                <h4 class="ser-text">Mentor Joomla Workshop</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ work-shop-->
    <!--Faculity member-->
    <section id="faculity-member" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Meet Our Faculty Member</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
            <hr class="bottom-line">
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                  <img src="<?php echo base_url();?>asset1/img/mentor1.jpg" alt="" class="img-thumbnail img-circle" />
                </div>   
              </div>                                
              <div class="pm-staff-profile-details text-center">  
                <p class="pm-staff-profile-name"><br>Prof. Dr. Engr. M. N. I Mondal</p>
                <p class="pm-staff-profile-title"><b>Professor , Head of CSE</b></p>
                
                <p class="pm-staff-profile-bio" style="text-align: left;"><br><br><br>
<b>Contact</b>:
              <br>Dept. of CSE, RUET, Kazla, Rajshahi-6204<br>CSE Building, Room CSE 108<br>
<b>Phone </b>:<br>
              (880)-721-750838 (Head)<br>
              (880)-721-750742-3 Ext: 509 (office)<br>
              (880)-721-750742-3 Ext: 510 (home)<br>
<b>Fax  </b>:<br> 
              (880)-721-750838 (office)<br>
<b>Mobile </b>:<br> 
              (880) 1720-662278<br>
              (880) 1912-744327<br>
<b>E-mail</b>  :<br>
              mondal@ruet.ac.bd<br> 
              nimbd@yahoo.com<br>
              nimbd109@gmail.com<br>
 
<b>Research Interest</b>
              <br>FPGA-based Reconfigurable Computing
              <br>Parallel Computing</li>
              <br>Mobile Computing</li>
              <br>Algorithms and Architectures</li>
              <br>Image Processing</li>
              <br>Digital Signal Processing</li>
              <br>Computer Networks and Data Communcations.</li>

 <b><br>Joined:</b> 24 June, 2001<br></p>
              </div>     
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                  <img src="<?php echo base_url();?>asset1/img/mentor2.jpg" alt="" class="img-thumbnail img-circle" />
                </div>   
              </div>                                
              <div class="pm-staff-profile-details text-center">  
                <p class="pm-staff-profile-name"><br>Prof. Dr. Md. Shahid Uz Zaman</p>
                <p class="pm-staff-profile-title"><b>Professor, Dept. Of CSE<br><h style="text-align: left;">Syndicate Member, RUET, Bangladesh</h>
                  <br>Member, Academic Council, RUET, Bangladesh</b></p>

                
                <p class="pm-staff-profile-bio" style="text-align: left;">
<b>Contact:</b> 
  <br>Dean's office
  <br>Faculty of ECE, RUET
   <br>2nd floor, CSE Building, RUET
   <br>Rajshahi-6204, Bangladesh
  <br><b>Phone:</b> <br>+880-721-750742-3, Ext. 400 (office)
  <br><b>Mobile:</b><br> +880 1713228537
  <br><b>Email:</b> <br>zaman@ruet.ac.bd
             :<br> szaman22@yahoo.com
 
<br><b>Research Interest</b>
<br>GIS-based Mapping,
<br>VRPs  and
<br>Satellite Imaging
 
Dept. of Computer Science & Engineering
<br><b>Joined: </b>26 May, 1991</p>
              </div>     
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                    <img src="<?php echo base_url();?>asset1/img/mentor3.jpg" alt="" class="img-thumbnail img-circle" />
                </div>   
              </div>                                
              <div class="pm-staff-profile-details text-center">  
                <p class="pm-staff-profile-name"><br>Prof. Dr. Engr. Boshir Ahmed</p>
                <p class="pm-staff-profile-title"><b>Professor, Dept. Of CSE<b></p>
                
                <p class="pm-staff-profile-bio" style="text-align: left;"><br><br><br><b>Contact:</b><br>
                  CSE Building, Room CSE 115
Rajshahi University of Engineering & Technology Rajshahi-6204 <br>
 <b>Phone:</b>  <br> (880)-721-750742-3 Ext: 507 (office)<br>
<b>Mobile:</b>  <br> (880) 1713-228547<br>
<b>E-mail:</b>  <br>boshir_bd@ruet.ac.bd <br>
             boshir_bd@yahoo.com<br>
  
<b>Research Interest</b><br>
Digital Image Processing specially Satellite Image
Remote Sensing
Digital Signal Processing
Data Communication
Computer Networks
Digital/Analog Circuit Design
Microprocessor Based System Design
Dept. of Computer Science & Engineering<br>
<b>Joined:</b> 24 June, 2001</p>
              </div>     
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ Faculity member-->
    <!--Testimonial-->
    <section id="testimonial" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2 class="white">Department of Computer Science & Engineering</h2>
            <p class="white">Computer engineering is a discipline that integrates several fields of electrical engineering and computer science required to develop computer hardware and software. Computer engineers are involved in many hardware and software aspects of computing, from the design of individual microprocessors, personal computers, and supercomputers, to circuit design.</p>
            <hr class="bottom-line bg-white">
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="text-comment">
              <p class="text-par">"It should be mandatory that you understand computer science."</p>
              <p class="text-name">will.i.am - American Musician</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="text-comment">
              <p class="text-par">"At its heart, engineering is about using science to find creative, practical solutions. It is a noble profession."</p>
              <p class="text-name">Queen Elizabeth II</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ Testimonial-->
    <!--Courses-->
    <section id ="courses" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Courses</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
            <hr class="bottom-line">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="<?php echo base_url();?>asset1/img/c3.jpg" class="img-responsive">
              <figcaption>
                  <h3><b>Artificial Intelligence</b></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="<?php echo base_url();?>asset1/img/c2.jpg" class="img-responsive">
              <figcaption>
                  <h3><b>Programming Languages</b></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="<?php echo base_url();?>asset1/img/c1.jpg" class="img-responsive">
              <figcaption>
                  <h3><b>CISCO</b></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="<?php echo base_url();?>asset1/img/c4.jpg" class="img-responsive">
              <figcaption>
                  <h3><b>Computer Algorithms</b></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="<?php echo base_url();?>asset1/img/c5.jpg" class="img-responsive">
              <figcaption>
                  <h3><b>Internet Security</b></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="<?php echo base_url();?>asset1/img/c6.jpg" class="img-responsive">
              <figcaption>
                  <h3><b>Data Science</b></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
        </div>
      </div>
    </section>
    <!--/ Courses-->
    
    <!--Contact-->
    <section id ="contact" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Contact Us</h2>
            <p>Address : Dept. of Computer Science and Engineering, Rajshahi University of Engineering & Technology, Rajshahi-6204, Bangladesh. 
Fax : +88 (0721) 750105 
PABX : +88 (0721) 750742-3, 751320-1
Website: http://cse.ruet.ac.bd
E-mail: cse@ruet.ac.bd</p>
            <hr class="bottom-line">
          </div>
          
          
          
          
        </div>
      </div>
    </section>
    <!--/ Contact-->
    <!--Footer-->
    <footer id="footer" class="footer">
      <div class="container text-center">      
      <ul class="social-links">
        <li><a href="https://twitter.com/"><i class="fa fa-twitter fa-fw"></i></a></li>
        <li><a href="https://facebook.com/"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li><a href="https://plus.google.com/"><i class="fa fa-google-plus fa-fw"></i></a></li>
       <li><a href="https://dribbble.com/"><i class="fa fa-dribbble fa-fw"></i></a></li>
        <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin fa-fw"></i></a></li>
      </ul>
        ©2017 JAMIL,EMON,SHIMON,NAHID,ANKUR,AZMAIN,ERAK.<br>STUDENT OF CSE RUET. ALL RIGHTS RESERVED
        <div class="credits">
            <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Mentor
            -->
            <a href="https://bootstrapmade.com/"></a>
        </div>
      </div>
    </footer>
    <!--/ Footer-->
    
    <script src="<?php echo base_url();?>asset1/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>asset1/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>asset1/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>asset1/js/custom.js"></script>
    <script src="<?php echo base_url();?>asset1/contactform/contactform.js"></script>
    
  </body>
</html>