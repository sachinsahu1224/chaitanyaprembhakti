<div id="page-wrapper">
  <div class="graphs">
    <h3 class="blank1">Edit Event</h3>
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
        <form class="form-horizontal" action="<?php echo base_url(); ?>admin/updateProduct" method="post" enctype="multipart/form-data">

          <input type="hidden" name="id" value="<?php echo $product->id;?>">
          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control1" name="product_name" placeholder="Enter Event name" required="" value="<?php echo $product->name;?>">
            </div>
          </div>
          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label"> Strat Date</label>
            <div class="col-sm-8">
              <input type="text" class="form-control1" name="starttdate" value="<?php echo $product->start_date;?>"  id="txtFrom" required="">
            </div>
          </div>
          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label"> End Date</label>
            <div class="col-sm-8">
              <input type="text" class="form-control1" name="enddate" id="txtTo" value="<?php echo $product->end_date;?>" required="">
            </div>
          </div>
          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Note</label>
            <div class="col-sm-8">
              <input type="text" class="form-control1" name="note" placeholder="Enter note" value="<?php echo $product->note;?>">
            </div>
          </div>
            <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Short Description</label>
            <div class="col-sm-8">
                <textarea class="form-control" name="short_description" required=""><?php echo $product->short_descrption;?></textarea>
                            <script>
                                CKEDITOR.replace('short_description');
                            </script>
          
            </div>
          </div>
          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Full Description</label>
            <div class="col-sm-8">
                <textarea class="form-control" name="description" required=""><?php echo  $product->description;?></textarea>
                            <script>
                                CKEDITOR.replace('description');
                            </script>
          
            </div>
          </div>
        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Upload Images</label>
            <div class="col-sm-3">
              <input type="file" name="images"  placeholder="Enter name" required="">
            </div>
            <div class="col-sm-5">
                            <img src="<?= base_url().$product->images; ?>" width="100" height="100">
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

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"
            type="text/javascript"></script>
 <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/start/jquery-ui.css"
          rel="Stylesheet" type="text/css" />
    <script type="text/javascript">
        $(function () {
            $("#txtFrom").datepicker({
                numberOfMonths: 2,
                onSelect: function (selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() + 1);
                    $("#txtTo").datepicker("option", "minDate", dt);
                }
            });
            $("#txtTo").datepicker({
                numberOfMonths: 2,
                onSelect: function (selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() - 1);
                    $("#txtFrom").datepicker("option", "maxDate", dt);
                }
            });
        });
    </script>
