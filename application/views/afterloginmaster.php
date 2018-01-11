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
          <li><a href="#course_registration">Course Registration</a></li>
          <li><a href="#result">Result</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="<?php echo site_url('afterlogin/logout');?>">Logout</a></li>
          <li><a href="#">Roll No:<?php echo $this->session->userdata('user_name'); ?></a></li>
        </ul>
        </div>
      </div>
    </nav>
    <!--/ Navigation bar-->
    
    <!--Course registration-->
    <section id ="course_registration" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Course Registration</h2>
            <table class="table">
              <thead>
                <tr>
                  <th class="text-center">Semester</th>
                  <th class="text-center">Slip No</th>
                  <th class="text-center">Status</th>
                </tr>
              </thead>
              <tbody>
            <?php if(isset($reg_info)){ foreach ($reg_info as $key => $value) {?>
                <tr>
                  <td>
              <?php print_r("Semester" . $value->sem_no); ?>
          </td>
                  <td>
              <?php print_r($value->slip_no); ?>
          </td>
                  <td>
              <?php if($value->status==0) echo "Pending"; ?>
              <?php if($value->status==1) echo "Registered"; ?>
          </td>

          </tr>
            <?php }} ?>
          </tbody>
            </table>
            <tbody></tbody>
          </div>
        </div>
      </div>
      

<div class="container">
  <h2>Status Table</h2>            
  <table class="table">
    <thead>
      <tr>
        <th>Semester</th>
        <th>Bank Authentication Number</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <form action="<?php echo site_url('afterlogin/submit_slip'); ?>" method="post"> 
      <tr>
        <td>
          <?php if(isset($last_sem->sem_no)): ?>

            <?php if($last_sem->sem_no<8 && $last_sem->status == 1): ?><span>Semester</span><?php echo  $last_sem->sem_no+1; ?> 

                <input type="hidden"  id="" name="reg[sem_no]" value="<?php echo $last_sem->sem_no+1; ?>">

            <?php  endif; ?> 

            <?php if($last_sem->sem_no<=8 && $last_sem->status == 0): ?><span>Semester</span><?php echo  $last_sem->sem_no; ?> 

                <input type="hidden"  id="" name="reg[sem_no]" value="<?php echo $last_sem->sem_no; ?>">

            <?php  endif; ?>  

            <?php if($last_sem->sem_no == 8 && $last_sem->status == 1): ?>

                <span>All registration Done</span> 

            <?php  endif; ?> 

          <?php else: echo "Semester1";?>

          <input type="hidden"  id="" name="reg[sem_no]" value="1">

          <?php endif; ?>
        </td>
        <?php 
          if(isset($last_sem->sem_no)): ?>
            <?php if($last_sem->sem_no == 8 && $last_sem->status == 1): ?>
            <td>--------------</td>
            <td>--------------</td>
           <?php endif;endif; ?>
        <?php 
          if(isset($last_sem->sem_no)): ?>
            <?php if($last_sem->sem_no != 8): ?>
             <td>   
            <input type="text"  id="" name="reg[slip_no]" placeholder="Slip number" required>       
            <input type="hidden"  id="" name="reg[std_id]" value="<?php echo $this->session->userdata('user_name'); ?>">
          
        </td>
        <td><button type="submit" class="btn btn-primary" name="submit" style="height: 30px; padding: 2px 5px;">Submit</button></td>  
      
           <?php endif;endif; ?>
        <?php 
          if(isset($last_sem->sem_no)): ?>
            <?php if($last_sem->sem_no == 8 && $last_sem->status == 0): ?>
             <td>   
            <input type="text"  id="" name="reg[slip_no]" placeholder="Slip number" required>       
            <input type="hidden"  id="" name="reg[std_id]" value="<?php echo $this->session->userdata('user_name'); ?>">
          
        </td>
        <td><button type="submit" class="btn btn-primary" name="submit" style="height: 30px; padding: 2px 5px;">Submit</button></td>  
      
           <?php endif;endif; ?>
           <?php if(empty($last_sem->sem_no)): ?>
        <td>   
            <input type="text"  id="" name="reg[slip_no]" placeholder="Slip number" required>       
            <input type="hidden"  id="" name="reg[std_id]" value="<?php echo $this->session->userdata('user_name'); ?>">
          
        </td>
        <td><button type="submit" class="btn btn-primary" name="submit" style="height: 30px; padding: 2px 5px;">Submit</button></td>  
      <?php endif; ?>
      </tr>
      </form>     
      
    </tbody>
  </table>
</div>

<hr class="bottom-line">
      
    </section>
    <!--/ Course registration-->
    <!--Semester result-->
    <section id ="result" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Semester Result</h2>
            <p>Under Construction</p>
            
            <p><div class="container">
   
<div>
  <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Result
</a>
<div class="collapse" id="collapseExample">
  <div class="well">
   <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#semester1" aria-controls="semester1" role="tab" data-toggle="tab"><b>Semester1</b></a></li>
    <li role="presentation"><a href="#semester2" aria-controls="semester2" role="tab" data-toggle="tab"><b>semester2</b></a></li>
    <li role="presentation"><a href="#semester3" aria-controls="semester3" role="tab" data-toggle="tab"><b>semester3</b></a></li>
    <li role="presentation"><a href="#semester4" aria-controls="semester4" role="tab" data-toggle="tab"><b>semester4</b></a></li>
    <li role="presentation"><a href="#semester5" aria-controls="semester5" role="tab" data-toggle="tab"><b>semester5</b></a></li>
    <li role="presentation"><a href="#semester6" aria-controls="semester6" role="tab" data-toggle="tab"><b>semester6</b></a></li>
    <li role="presentation"><a href="#semester7" aria-controls="semester7" role="tab" data-toggle="tab"><b>semester7</b></a></li>
    <li role="presentation"><a href="#semester8" aria-controls="semester8" role="tab" data-toggle="tab"><b>semester8</b></a></li>
  </ul> 
  <!-- Tab panes -->

  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="semester1">
    <?php if(isset($resulting1)): ?>
    <table class="table">
    <thead>
      <tr>
        <th>Roll No</th>
        <th>Name</th>
        <th>GP</th>
        <th>Semester Earned Credit</th>
        <th>GPA</th>
        <th>Total Earned Credit</th>
        <th>CGPA</th>
        <th>Failed Subjects</th>
        <th>X Grade Subjects</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $this->session->userdata('user_name'); ?></td>
        <td>----</td>
        <td><?php echo $resulting1->gp; ?></td>
        <td><?php echo $resulting1->semester_earn_credit; ?></td>
        <td><?php echo $resulting1->gpa; ?></td>
        <td><?php echo $resulting1->total_earned_credit; ?></td>
        <td><?php echo $resulting1->cgpa; ?></td>
        <td><?php echo $resulting1->failed_subject; ?></td>
        <td><?php echo $resulting1->x_grade_subject; ?></td>
      </tr>
      
      
    </tbody>
  </table>
  <?php else: ?>
      <h1>Result Not Found</h1>
    <?php endif; ?>
</div>
    <div role="tabpanel" class="tab-pane" id="semester2">
    <?php if(isset($resulting2)): ?>
    <table class="table">
    <thead>
      <tr>
        <th>Roll No</th>
        <th>Name</th>
        <th>GP</th>
        <th>Semester Earned Credit</th>
        <th>GPA</th>
        <th>Total Earned Credit</th>
        <th>CGPA</th>
        <th>Failed Subjects</th>
        <th>X Grade Subjects</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $this->session->userdata('user_name'); ?></td>
        <td>----</td>
        <td><?php echo $resulting2->gp; ?></td>
        <td><?php echo $resulting2->semester_earn_credit; ?></td>
        <td><?php echo $resulting2->gpa; ?></td>
        <td><?php echo $resulting2->total_earned_credit; ?></td>
        <td><?php echo $resulting2->cgpa; ?></td>
        <td><?php echo $resulting2->failed_subject; ?></td>
        <td><?php echo $resulting2->x_grade_subject; ?></td>
      </tr>
      
      
    </tbody>
  </table>
  <?php else: ?>
      <h1>Result Not Found</h1>
    <?php endif; ?>
</div>
    <div role="tabpanel" class="tab-pane" id="semester3">
    <?php if(isset($resulting3)): ?>
    <table class="table">
    <thead>
      <tr>
        <th>Roll No</th>
        <th>Name</th>
        <th>GP</th>
        <th>Semester Earned Credit</th>
        <th>GPA</th>
        <th>Total Earned Credit</th>
        <th>CGPA</th>
        <th>Failed Subjects</th>
        <th>X Grade Subjects</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $this->session->userdata('user_name'); ?></td>
        <td>----</td>
        <td><?php echo $resulting3->gp; ?></td>
        <td><?php echo $resulting3->semester_earn_credit; ?></td>
        <td><?php echo $resulting3->gpa; ?></td>
        <td><?php echo $resulting3->total_earned_credit; ?></td>
        <td><?php echo $resulting3->cgpa; ?></td>
        <td><?php echo $resulting3->failed_subject; ?></td>
        <td><?php echo $resulting3->x_grade_subject; ?></td>
      </tr>
      
      
    </tbody>
  </table>
  <?php else: ?>
      <h1>Result Not Found</h1>
    <?php endif; ?>
</div>
    <div role="tabpanel" class="tab-pane" id="semester4">
    <?php if(isset($resulting4)): ?>
    <table class="table">
    <thead>
      <tr>
        <th>Roll No</th>
        <th>Name</th>
        <th>GP</th>
        <th>Semester Earned Credit</th>
        <th>GPA</th>
        <th>Total Earned Credit</th>
        <th>CGPA</th>
        <th>Failed Subjects</th>
        <th>X Grade Subjects</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $this->session->userdata('user_name'); ?></td>
        <td>----</td>
        <td><?php echo $resulting4->gp; ?></td>
        <td><?php echo $resulting4->semester_earn_credit; ?></td>
        <td><?php echo $resulting4->gpa; ?></td>
        <td><?php echo $resulting4->total_earned_credit; ?></td>
        <td><?php echo $resulting4->cgpa; ?></td>
        <td><?php echo $resulting4->failed_subject; ?></td>
        <td><?php echo $resulting4->x_grade_subject; ?></td>
      </tr>
      
      
    </tbody>
  </table>
  <?php else: ?>
      <h1>Result Not Found</h1>
    <?php endif; ?>
</div>
    <div role="tabpanel" class="tab-pane" id="semester5">
      <?php if(isset($resulting5)): ?>
    <table class="table">
    <thead>
      <tr>
        <th>Roll No</th>
        <th>Name</th>
        <th>GP</th>
        <th>Semester Earned Credit</th>
        <th>GPA</th>
        <th>Total Earned Credit</th>
        <th>CGPA</th>
        <th>Failed Subjects</th>
        <th>X Grade Subjects</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $this->session->userdata('user_name'); ?></td>
        <td>----</td>
        <td><?php echo $resulting5->gp; ?></td>
        <td><?php echo $resulting5->semester_earn_credit; ?></td>
        <td><?php echo $resulting5->gpa; ?></td>
        <td><?php echo $resulting5->total_earned_credit; ?></td>
        <td><?php echo $resulting5->cgpa; ?></td>
        <td><?php echo $resulting5->failed_subject; ?></td>
        <td><?php echo $resulting5->x_grade_subject; ?></td>
      </tr>
      
      
    </tbody>
  </table>
  <?php else: ?>
      <h1>Result Not Found</h1>
    <?php endif; ?>
</div>
    <div role="tabpanel" class="tab-pane" id="semester6">
    <?php if(isset($resulting6)): ?>
    <table class="table">
    <thead>
      <tr>
        <th>Roll No</th>
        <th>Name</th>
        <th>GP</th>
        <th>Semester Earned Credit</th>
        <th>GPA</th>
        <th>Total Earned Credit</th>
        <th>CGPA</th>
        <th>Failed Subjects</th>
        <th>X Grade Subjects</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $this->session->userdata('user_name'); ?></td>
        <td>----</td>
        <td><?php echo $resulting6->gp; ?></td>
        <td><?php echo $resulting6->semester_earn_credit; ?></td>
        <td><?php echo $resulting6->gpa; ?></td>
        <td><?php echo $resulting6->total_earned_credit; ?></td>
        <td><?php echo $resulting6->cgpa; ?></td>
        <td><?php echo $resulting6->failed_subject; ?></td>
        <td><?php echo $resulting6->x_grade_subject; ?></td>
      </tr>
      
      
    </tbody>
  </table>
  <?php else: ?>
      <h1>Result Not Found</h1>
    <?php endif; ?>
</div>
    <div role="tabpanel" class="tab-pane" id="semester7">
   <?php if(isset($resulting7)): ?>
    <table class="table">
    <thead>
      <tr>
        <th>Roll No</th>
        <th>Name</th>
        <th>GP</th>
        <th>Semester Earned Credit</th>
        <th>GPA</th>
        <th>Total Earned Credit</th>
        <th>CGPA</th>
        <th>Failed Subjects</th>
        <th>X Grade Subjects</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $this->session->userdata('user_name'); ?></td>
        <td>----</td>
        <td><?php echo $resulting7->gp; ?></td>
        <td><?php echo $resulting7->semester_earn_credit; ?></td>
        <td><?php echo $resulting7->gpa; ?></td>
        <td><?php echo $resulting7->total_earned_credit; ?></td>
        <td><?php echo $resulting7->cgpa; ?></td>
        <td><?php echo $resulting7->failed_subject; ?></td>
        <td><?php echo $resulting7->x_grade_subject; ?></td>
      </tr>
      
      
    </tbody>
  </table>
  <?php else: ?>
      <h1>Result Not Found</h1>
    <?php endif; ?>
</div>
    <div role="tabpanel" class="tab-pane" id="semester8">
    <?php if(isset($resulting8)): ?>
    <table class="table">
    <thead>
      <tr>
        <th>Roll No</th>
        <th>Name</th>
        <th>GP</th>
        <th>Semester Earned Credit</th>
        <th>GPA</th>
        <th>Total Earned Credit</th>
        <th>CGPA</th>
        <th>Failed Subjects</th>
        <th>X Grade Subjects</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $this->session->userdata('user_name'); ?></td>
        <td>----</td>
        <td><?php echo $resulting8->gp; ?></td>
        <td><?php echo $resulting8->semester_earn_credit; ?></td>
        <td><?php echo $resulting8->gpa; ?></td>
        <td><?php echo $resulting8->total_earned_credit; ?></td>
        <td><?php echo $resulting8->cgpa; ?></td>
        <td><?php echo $resulting8->failed_subject; ?></td>
        <td><?php echo $resulting8->x_grade_subject; ?></td>
      </tr>
      
      
    </tbody>
  </table>
  <?php else: ?>
      <h1>Result Not Found</h1>
    <?php endif; ?>
</div>
  </div>
  </div>
</div>

 

</div>

</div></p>
            

          </div>
        
          
        </div>
      </div>
 <hr class="bottom-line">
    </section>

    <!--/ Semester result-->
    <!--Contact-->
    
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