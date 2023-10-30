
<?php $result=$about[0]; ?>
<div id="page-wrapper">
    <div class="graphs">
        <h3 class="blank1">About Us</h3>
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
                <form class="form-horizontal" action="<?php echo base_url(); ?>admin/about" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Heading</label>
                        <div class="col-sm-8">
<input type="hidden" class="form-control1" value="<?= $result->id; ?>" name="id" required="">
                            <input type="text" class="form-control1" value="<?= $result->heading; ?>" name="heading" placeholder="Enter Heading" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Sub Heading</label>
                        <div class="col-sm-8">
<input type="hidden" class="form-control1" value="<?= $result->id; ?>" name="subheading" required="">
                            <input type="text" class="form-control1" value="<?= $result->sub_heading; ?>" name="sub_heading" placeholder="Enter Sub Heading" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-8">
                            <textarea name="description"><?= $result->description; ?></textarea>
                            <script>
                                CKEDITOR.replace('description');
                            </script>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Upload Images</label>
                        <div class="col-sm-3">
                            <input type="file" name="image"  placeholder="Enter name">
                        </div>
                        <div class="col-sm-5">
                            <img src="<?= base_url().$result->image; ?>" width="100" height="100">
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


    </div>
</div>