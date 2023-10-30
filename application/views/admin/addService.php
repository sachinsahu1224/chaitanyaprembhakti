<div id="page-wrapper">
  <div class="graphs">
    <h3 class="blank1">Add Service</h3>
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
        <form class="form-horizontal" action="<?php echo base_url(); ?>admin/addservice" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control1" name="title" placeholder="Enter service title" required="">
            </div>
          </div>
            
            <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-8">
                <textarea class="form-control" name="description" required=""></textarea>
                <script>
                                CKEDITOR.replace('description');
                            </script>
            </div>
          </div>
            
            <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Upload Image</label>
                        <div class="col-sm-3">
                            <input type="file" name="image" >
                        </div>
                        <div class="col-sm-3">
                           *Size should be 250x250.
                        </div>
                        
                    </div>
          
          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label"></label>
            <div class="col-sm-8">
                <button type="Submit" class="btn btn-success">Submit</button>
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
