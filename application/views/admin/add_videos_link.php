<div id="page-wrapper">
  <div class="graphs">
    <h3 class="blank1">Add Video </h3>
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
        <form class="form-horizontal" action="<?php echo base_url(); ?>AdminHome/add_video_link" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-8">
              <input type="text" class="form-control1" name="title" placeholder="Enter  Title" required="">
            </div>
          </div>
          
          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label"> Video link</label>
            <div class="col-sm-8">
              <textarea class="form-control" name="video_link_url" rows="3" required="">https://www.youtube.com/embed/</textarea>
              <span>video url like this:- https://www.youtube.com/embed/5pOVaHpoMk4</span>
            </div>
          </div>
          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label"> Disable</label>

              <div class="col-sm-8">
                <select class="form-control1" name="status">
                  <option value="0">No</option>
                  <option value="1">Yes</option>
                </select>
              </div>
          </div>
          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label"> View in top</label>

              <div class="col-sm-8">
                <select class="form-control1" name="view_top_video">
                  <option value="0">No</option>
                  <option value="1">Yes</option>
                </select>
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
