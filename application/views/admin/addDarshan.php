<div id="page-wrapper">
  <div class="graphs">
    <h3 class="blank1">Add Darshna </h3>
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
        <form class="form-horizontal" action="<?php echo base_url(); ?>AdminHome/adddarshandata" method="post" enctype="multipart/form-data">
          	<div class="form-group">
	            <label for="focusedinput" class="col-sm-2 control-label">Title <span class="text-danger">*</span></label>
	            <div class="col-sm-8">
                   <input type="text" class="form-control1" name="title" placeholder="Enter title" value="<?php echo set_value('title');?>" required="">
	              	<span class="text-danger"><?php echo form_error('title');?></span>
	            </div>
          	</div>
    
          	<div class="form-group">
	            <label for="focusedinput" class="col-sm-2 control-label">Event <span class="text-danger">*</span></label>
	            <div class="col-sm-8">
                  <input type="text" class="form-control1" name="event" placeholder="Enter event" value="<?php echo set_value('event');?>" required="">
	              	<span class="text-danger"><?php echo form_error('event');?></span>
	            </div>
          	</div>
            <div class="form-group">
            	<label for="focusedinput" class="col-sm-2 control-label">Event Date <span class="text-danger">*</span></label>
            		<div class="col-sm-8">
                  <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                    <input class="form-control" type="text" placeholder="Select event date" name="event_date" value="<?php echo set_value('event_date');?>" readonly required=""/>
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  </div>
                  <span class="text-danger"><?php echo form_error('event_date');?></span>
                </div>
          	</div>
            <div class="form-group">
              <label for="focusedinput" class="col-sm-2 control-label">Title Image <span class="text-danger">*</span></label>
              <div class="col-sm-8">
                  <input type="file" name="front_img" required="">
              </div>
            </div>
            <div class="form-group">
              <label for="focusedinput" class="col-sm-2 control-label">Today darshan <span class="text-danger">*</span></label>
              <div class="col-sm-8">
                  <select class="form-control1" name="darshan_type">
                    <option value="0" <?php if(set_value('darshan_type')=="0"){ echo "selected";}?>>No</option>
                    <option value="1" <?php if(set_value('darshan_type')=="1"){ echo "selected";}?>>Yes</option>
                  </select>
                  <span class="text-danger"><?php echo form_error('darshan_type');?></span>
              </div>
            </div>
            <div class="form-group">
            	<label for="focusedinput" class="col-sm-2 control-label">Description <span class="text-danger">*</span></label>
        		<div class="col-sm-8">
            		<textarea class="form-control" name="short_description" required=""><?php echo set_value('short_description');?></textarea>
                    <script>
                        CKEDITOR.replace('short_description');
                    </script>
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
        /*Date picker*/
        $("#datepicker").datepicker({ 
              autoclose: true, 
              todayHighlight: true
        }).datepicker('update', new Date());
        /*Date picker*/
        $('.add_more').click(function(e){
          e.preventDefault();
          $(this).before("<input name='images[]' type='file'/>");
        });
      });
    </script>

