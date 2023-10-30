
<div id="page-wrapper">
    <div class="graphs">
        <h3 class="blank1">Testimonial</h3>
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
                <form class="form-horizontal" action="<?php echo base_url(); ?>admin/testimonial" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-8">

                            <input type="text" class="form-control1" name="name" placeholder="Enter Name" required="">
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label for="post" class="col-sm-2 control-label">Post</label>
                        <div class="col-sm-8">

                            <input type="text" class="form-control1" name="post" placeholder="Enter Post" required="">
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label for="comment" class="col-sm-2 control-label">Comment</label>
                        <div class="col-sm-8">
                            <textarea class="form-control1" name="comment" required="" rows="5" cols="10"></textarea>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image" class="col-sm-2 control-label">Upload Images</label>
                        <div class="col-sm-3">
                            <input type="file" name="image"  placeholder="Enter name">
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


    </div>
</div>