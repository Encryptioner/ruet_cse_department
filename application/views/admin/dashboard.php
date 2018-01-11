<section class="content-header">
   <h1>
      Result Table
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tables</a></li>
      <li class="active">Result table</li>
   </ol>
   <div class="row">
      <form class="form-group" action="<?php echo site_url('csv_import/upload_sampledata') ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
         <label class="col-md-2"> Select Semester</label>
         <select class="col-md-2" name="semester" required>
            <option value="">Select Semester</option>
            <?php for ($i=1; $i <9 ; $i++) { ?>
            <option value="<?php echo $i; ?>">Semester <?php echo $i; ?></option>
            <?php } ?>
         </select>
         <input class="col-md-3" type="file" name="userfile" id="userfile" align="center"/>
         <button type="submit" name="submit" class="col-md-1 btn btn-success"><i class="fa fa-cloud-upload"> import</i></button>
      </form>
   </div>
</section>