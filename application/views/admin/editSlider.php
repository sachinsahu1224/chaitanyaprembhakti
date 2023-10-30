<?php
//echo $singledata['id'];
foreach ($singledata as $row) {
    ?>
    <div id="page-wrapper">
        <div class="graphs">
            <h3 class="blank1">Edit slider</h3>
            <div class="tab-content">
                <div class="tab-pane active" id="horizontal-form">
                    <form class="form-horizontal" action="<?php echo base_url(); ?>AdminHome/updateSlide" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-8">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <input type="text" class="form-control1" name="name" placeholder="Enter name" required="" value="<?php echo $row['name']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" rows="5" id="comment" name="description" placeholder="Enter your description" required=""><?php echo $row['description']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Upload Images</label>
                            <div class="col-sm-8">
                                <input type="file" name="images1"  placeholder="Enter name">
                                <input type="hidden" value="<?php echo $row['images']; ?>" name="images">
                                <img src="<?php echo base_url().$row['images']; ?>" height="200px" width="200px" class="img-thumbnail">
                            </div>
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
                    <?php
                    echo form_close();
                }
                ?>
            </div>
        </div>
    </div>
</div>