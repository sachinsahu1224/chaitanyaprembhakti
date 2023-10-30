

<div id="page-wrapper">

  <div class="graphs">

    <h3 class="blank1">Edit Activity </h3>

    <?php

    if($this->session->flashdata('success')) {

    ?>

    <div class="col-sm-12">

      <div class="col-sm-2">

      </div>

      <div class="alert alert-success alert-dismissable fade in col-sm-8">



        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

        <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>.

      </div>

      <div class="col-sm-2">



      </div>

    </div>

    <?php

    }

   

    if($this->session->flashdata('error')) {

    ?>

    <div class="col-sm-12">

      <div class="col-sm-2">

      </div>

      <div class="alert alert-danger alert-dismissable fade in col-sm-8">



        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

        <strong>error!</strong> <?php echo $this->session->flashdata('error'); ?>.

      </div>

      <div class="col-sm-2">



      </div>

    </div>

    <?php

    }

    ?>

    <div class="tab-content">

      <div class="tab-pane active" id="horizontal-form">

        <form class="form-horizontal" action="<?php echo current_url() ;?>" method="post" enctype="multipart/form-data">
          <?php foreach($activity as $row){?>
          <div class="form-group">

            <label for="focusedinput" class="col-sm-2 control-label">Name</label>

            <div class="col-sm-8">

              <input type="text" class="form-control1" name="activity_name" placeholder="Enter Activity name" value="<?php echo $row['name'];?>" required="">
              <span class="text-danger"><?php echo form_error('activity_name');?></span>
            </div>

          </div>

            <div class="form-group">

            <label for="focusedinput" class="col-sm-2 control-label">Short Description</label>

            <div class="col-sm-8">

                <textarea class="form-control" name="short_description" required=""><?php echo $row['short_descrption'];?></textarea>
                <span class="text-danger"><?php echo form_error('short_description');?></span>
                <script>

                    CKEDITOR.replace('short_description');

                </script>

            </div>

          </div>

          <div class="form-group">

            <label for="focusedinput" class="col-sm-2 control-label">Full Description</label>

            <div class="col-sm-8">

                <textarea class="form-control" name="description" required=""><?php echo $row['description'];?></textarea>
                 <span class="text-danger"><?php echo form_error('description');?></span>
                            <script>

                                CKEDITOR.replace('description');

                            </script>

          

            </div>

          </div>

          <div class="form-group">

            <label for="focusedinput" class="col-sm-2 control-label">Upload Images</label>

            <div class="col-sm-8">

              <input type="file" name="images"  placeholder="Enter name">

            </div>

          </div>

          <div class="form-group">

            <label for="focusedinput" class="col-sm-2 control-label"> Read More</label>

            <div class="col-sm-8">
              <select class="form-control1" name="readmore">
                <option value="0" <?php if($row['readmore']=='0'){ echo "selected";}?> >No</option>
                <option value="1" <?php if($row['readmore']=='1'){ echo "selected";}?>>Yes</option>
              </select>
            </div>

          </div>
          <div class="form-group">

            <label for="focusedinput" class="col-sm-2 control-label"> Disable</label>

            <div class="col-sm-8">
              <select class="form-control1" name="status">
                <option value="0" <?php if($row['status']=='0'){ echo "selected";}?> >No</option>
                <option value="1" <?php if($row['status']=='1'){ echo "selected";}?>>Yes</option>
              </select>
            </div>

          </div>
          <div class="form-group">

            <label for="focusedinput" class="col-sm-2 control-label">Serial no.</label>

            <div class="col-sm-8">

              <input type="number" name="sno"  placeholder="Enter name" required="" min="1" value="<?php echo $row['serial_code'];?>">
            </div>
          </div>

          <div class="form-group">

            <label for="focusedinput" class="col-sm-2 control-label"></label>

            <div class="col-sm-8">

                <button type="Submit" class="btn btn-success">Submit</button>

            </div>

          </div>
<?php } ?>
        </form>

      </div>

    </div>

    <!--body wrapper start-->

  </div>

  <!--body wrapper end-->

</div>





   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"

            type="text/javascript"></script>

 <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/start/jquery-ui.css"

          rel="Stylesheet" type="text/css" />