
<div id="page-wrapper">
    <div class="graphs">
        <h3 class="blank1">INTRODUCTION</h3>
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
        <form class="form-horizontal" action="<?php echo base_url(); ?>AdminHome/updateintroduction" method="post">
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-8">
                <?php 
                foreach ($intro as $result) {
                   
                  
               ?>

                    <textarea name="description"><?php  echo $result['description']; ?></textarea>
                    <?php
                     }
                    ?>
                    <script>
                        CKEDITOR.replace('description');
                    </script>
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