

    <section style="margin-bottom:20px;">
    <?php if(isset($single_place)): ?>
      <div class="container">
        <div class="row">
          <div class="col-md-8 title">
            <h1 style="text-transform: uppercase;"><?php echo $title;?>&nbsp;<small><?php echo $single_place->near_by;?></small></h1>
          </div>
          <div class="col-md-4">
            <?php if($like == 1): ?>
            <a href="<?php echo site_url('place/unlike/' . $single_place->place_id); ?>"><i class="fa fa-thumbs-o-down fa-2x" aria-hidden="true" style="position: relative;top: 20px;"></i></a><span style="position: relative;top: 15px;">&nbsp;unlike&nbsp;<?php echo $count; ?> people likes this</span>
            <?php else: ?>
            <a href="<?php echo site_url('place/like_count/' . $single_place->place_id); ?>"><i class="fa fa-thumbs-o-up fa-2x" aria-hidden="true" style="position: relative;top: 20px;"></i></a><span style="position: relative;top: 15px;">&nbsp;like&nbsp;<?php echo $count; ?> people likes this</span>
            <?php endif; ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="<?php echo base_url(); ?>asset/images/slider/<?php echo $single_place->img1; ?>" alt="<?php echo $title;?>" style="height: 400px; width: 1140px;">
                <div class="carousel-caption">
                  First Caption
                </div>
              </div>
              <div class="item">
                <img src="<?php echo base_url(); ?>asset/images/slider/<?php echo $single_place->img2; ?>" alt="<?php echo $title;?>" style="height: 400px; width: 1140px;">
                <div class="carousel-caption">
                  Second Caption
                </div>
              </div>
              <div class="item">
                <img src="<?php echo base_url(); ?>asset/images/slider/<?php echo $single_place->img3; ?>" alt="<?php echo $title;?>" style="height: 400px; width: 1140px;">
                <div class="carousel-caption">
                  Third Caption
                </div>
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h2>Overview of this place</h2>
            <p style="text-align: justify;"><?php echo $single_place->place_desc; ?></p>
        </div>
      </div>
        <div class="row">
          <div class="col-md-6">
            <form method="post" action="<?php echo site_url('place/comment/' . $single_place->place_id); ?>">
              <h4>Review the place</h4>
              <textarea class="form-control" name="comment" rows="3" required></textarea><br />
              <button type="submit" class="btn btn-danger" value="Post">Post</button>
            </form>
            <div class="review" style='background-color: #2b1c56;'>
            <?php foreach($get_comments as $value): ?>
            
              <h4 style="background-color: #180e35; 
                         text-transform: uppercase;
                         color: #83c5ff;
                         padding-left: 10px;">
              <?php echo $value->user_name;?>
              </h4>
              <h5 style="color: #03da02; 
                         padding-left: 10px;">
              <?php echo $value->date;?>
              </h5>
              <p style="text-align: justify; 
                        color: #31ff00; 
                        padding-right: 10px; 
                        padding-left: 10px;">
              <?php echo wordwrap($value->comment,90,"<br>\n"); ?>
              </p>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="col-md-6">
            <?php echo $single_place->google_map; ?>
          </div>
        </div>
      </div>
    <?php else: ?>
      <h1>Place Not Found</h1>
    <?php endif; ?>
    </section>

