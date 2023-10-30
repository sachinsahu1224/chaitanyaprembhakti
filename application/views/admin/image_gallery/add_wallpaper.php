<div id="page-wrapper">
  <div class="graphs">
    <h3 class="blank1">Wallpaper Gellary </h3>
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
        <form class="form-horizontal" action="<?php echo base_url(); ?>admin/add_wallpapers" method="post" enctype="multipart/form-data">
          	<div class="form-group">
	            <label for="focusedinput" class="col-sm-2 control-label">Category <span class="text-danger">*</span></label>
	            <div class="col-sm-8">
                  <select class="form-control1" name="category">
                    <option value="1">Mobile</option>
                    <option value="2">Desktop</option>
                  </select>
	              	<span class="text-danger"><?php echo form_error('category');?></span>
	            </div>
          	</div>
  
            <div class="form-group">
				      <label for="focusedinput" class="col-sm-2 control-label">Upload </label>
	            <div class="col-sm-8">
					      <input type="file" name="images[]"  placeholder="Enter name" required="">
	              <button class="add_more">Add More Files</button>
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

<style type="text/css">
  #datepicker{width:180px; margin: 0 20px 20px 0px;}
#datepicker > span:hover{cursor: pointer;}
</style>
<script>
      $(document).ready(function(){
        $('.add_more').click(function(e){
          e.preventDefault();
          $(this).before("<input name='images[]' type='file'/>");
        });
      });
    </script>

