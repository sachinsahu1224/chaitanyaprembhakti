

<div id="page-wrapper">

  <div class="graphs">

    <h3 class="blank1">Edit Template</h3>

    <?php

    if($this->session->flashdata('sucess')) {

    ?>

    <div class="col-sm-12">

      <div class="col-sm-2">

      </div>

      <div class="alert alert-success alert-dismissable fade in col-sm-8">



        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

        <strong>Success!</strong> <?php echo $this->session->flashdata('Sucess'); ?>.

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

      <div class="alert alert-success alert-dismissable fade in col-sm-8">



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

        <form class="form-horizontal" action="<?php echo current_url(); ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="pre_img" value="<?php echo $images;?>">
          <div class="form-group">

            <label for="focusedinput" class="col-sm-2 control-label">Name</label>

            <div class="col-sm-8">

              <?php echo $this->session->flashdata('error'); ?>

              <input type="text" class="form-control1" name="name" placeholder="Enter name" required="" value="<?php echo $name;?>">

            </div>

          </div>

          <div class="form-group">

            <label for="focusedinput" class="col-sm-2 control-label">Description</label>

            <div class="col-sm-8">

              <textarea class="form-control" rows="5" id="comment" name="description" placeholder="Enter your description" required=""><?php echo $description;?></textarea>

            </div>
            <script>
                        CKEDITOR.replace('description');
                    </script>
          </div>

          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Palce</label>

            <div class="col-sm-8">

              <input type="text" class="form-control1" name="place" placeholder="Enter name" required="" value="<?php echo $place;?>">
              <?php echo $this->session->flashdata('place'); ?>
            </div>
          </div>
          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Contact person</label>

            <div class="col-sm-8">

              <input type="text" class="form-control1" name="contact_person" placeholder="Enter contact person" required="" value="<?php echo $contact_person;?>">
              <?php echo $this->session->flashdata('contact_person'); ?>
            </div>
          </div>
          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Phone</label>
            <div class="col-sm-8">
              <input type="text" class="form-control1" name="phone" placeholder="Enter name" value="<?php echo $phone;?>">
              <?php echo $this->session->flashdata('phone'); ?>
            </div>
          </div>
           <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Contact person 2</label>
            <div class="col-sm-8">
              <input type="text" class="form-control1" name="mobile" placeholder="Enter name" value="<?php echo $mobile;?>">
              <?php echo $this->session->flashdata('mobile'); ?>
            </div>
          </div>
          <div class="form-group">

            <label for="focusedinput" class="col-sm-2 control-label">Upload Images</label>

            <div class="col-sm-8">

              <input type="file" name="images"  placeholder="Enter name">

              <?php

              if (isset($error)) {

                  echo $error;

              }

              ?>

            </div>

          </div>

          <div class="form-group">

            <label for="focusedinput" class="col-sm-2 control-label"></label>

            <div class="col-sm-8">

              <button type="Submit" class="btn btn-success">Submit</button>

              <a href="<?php echo base_url(); ?>AdminHome/addSlider"><button type="button" class="btn btn-danger">Cancel</button></a>

            </div>

          </div>

        </form>

        <?php echo form_close(); ?>

      </div>

    </div>

    <!--body wrapper start-->

  </div>

  <!--body wrapper end-->

</div>

