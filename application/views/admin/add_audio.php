<div id="page-wrapper">
  <div class="graphs">
    <h3 class="blank1">Add Audio </h3>
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
        <form class="form-horizontal" action="<?php echo base_url(); ?>AdminHome/addaudioData1" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Audio Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control1" name="bookname" placeholder="Enter  name" required="">
            </div>
          </div>
          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Select Category</label>
            <div class="col-sm-8">
              <select class="form-control1" name="category" required="">
                <option value="">Select category</option>
                <?php
                foreach($category as $resultCategory){
                  ?>
                  <option value="<?php echo $resultCategory["id"]; ?>"><?php echo $resultCategory["name"]; ?></option>
                  <?php
                }
                ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label"> Description</label>
            <div class="col-sm-8">
              <textarea class="form-control" name="short_description" required=""></textarea>
              <script>
                CKEDITOR.replace('short_description');
              </script>

            </div>
          </div>
           <!-- <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Singer Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control1" name="Author" placeholder="Enter  name" required="">
            </div>
          </div> -->
          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Upload Cover photo</label>
            <div class="col-sm-8">
            <input type="file" name="coverpage"  required="">
            </div>
          </div>
          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Upload audio</label>
            <div class="col-sm-8">
            <input type="file" name="audio_file"  required="">
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


<!-- <script>
  $(document).ready(function(){
    $('.add_more').click(function(e){
      e.preventDefault();
      $(this).before("<input name='images[]' type='file'/>");
    });
  });
</script> -->
