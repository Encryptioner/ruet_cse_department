<section class="content-header">
   <h1>
      Approve Registration
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tables</a></li>
      <li class="active">Approve Registration table</li>
   </ol>
   <br />
   <div class="row">
      <form class="form-group" action="<?php echo site_url('csv_import/approve') ?>" method="post" name="form1" id="form1">
         <label class="col-md-2"> Series / Roll</label>
         <input class="col-md-2" name="search[series]" type="text">
         <label class="col-md-1"> Semester</label>
         <select class="col-md-2" name="search[semester]">
            <option value="">Select Semester</option>
            <?php for ($i=1; $i <9 ; $i++) { ?>
            <option value="<?php echo $i; ?>">Semester <?php echo $i; ?></option>
            <?php } ?>
         </select>
         <button type="submit" name="submit" class="col-md-offset-1 col-md-1 btn-sm btn btn-success"><i class="fa fa-cloud-upload"> Search</i></button>
         
      </form>
      <a href="<?php echo site_url('csv_import/reset_search'); ?>"><button class="col-md-offset-1 col-md-1 btn-sm btn btn-danger"><i class="fa fa-check"> Reset</i></button></a>
   </div>
   <br />
   <?php if(isset($search_data)): ?>
   <div class="row">
      <table class="table table-bordered table-striped table-condensed text-center">
         <thead>
            <tr>
               <th>Roll No.</th>
               <th>Semester</th>
               <th>Slip No.</th>
               <th>Approve / Decline</th>
            </tr>
         </thead>
         <tbody>
            <?php foreach($search_data as $value): ?>
               <tr>
                  <td><?php echo $value->std_id; ?></td>
                  <td><?php echo $value->sem_no; ?></td>
                  <td><?php echo $value->slip_no; ?></td>
                  <td>
                     <?php if($value->status == 1): ?>
                     <button class="btn btn-success"><span style="color:white;">Approved</span></button>
                     <?php else: ?>
                     <a href="<?php echo site_url('csv_import/confirm/' . $value->reg_id); ?>"><button class="btn btn-success"><i class="fa fa-check" style="color:white;"></i></button></a>
                  <a href="<?php echo site_url('csv_import/decline/' . $value->reg_id); ?>"><button class="btn btn-danger"><i class="fa fa-times" style="color:white;"></i></button></a></td>
                  <?php endif; ?>
               </tr>
            <?php endforeach; ?>
         </tbody>
      </table>
   </div>
</section>
<?php endif; ?>