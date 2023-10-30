
<style type="text/css">
    
    .mange{
           height: 225px!important;
    width: 174px!important;
    }
</style>
<section class="defult-page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <h2>BOOKS GALLERY</h2>
                        <p><a href="<?php echo base_url();?>">Home</a> / <a href="<?php echo site_url('books-gallery');?>">BOOKS GALLERY</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Team Start -->

<section class="blog-section">

    <div class="container">

        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <!-- <div class="section-title">

                    <div class="title-style">

                        <h2>BOOKS GALLERY</h2>



                    </div>

                </div> -->

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <?php

                        foreach ($book as $row) {

                    ?>

                <div class="well">
                  <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object img-thumbnail mange" src="<?php echo base_url(). $row['coverpage'];?>">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $row['name'];?></h4>
                        <a href="javascript:void(0);" class="btn btn-warning pull-left viewpdf" data-pdf="<?php echo $row['book'];?>" style="margin-top: 7px;">Read Now</a>
                        <br><br>
                       <p style="text-align: justify!important;"><?php echo $row['description'];?></p>
                            <!-- <ul class="list-inline list-unstyled">
                                <li><span><a href="<?php //echo base_url().$row['book'];?>" target="1"><button type="button" class="btn btn-warning">Read Now</button></a></li>
                            </ul> -->
                            <!-- <a href="<?php //echo base_url().$row['book'];?>" class="btn btn-warning pull-right"  target="1">Read Now</a> -->
                    </div>
                </div>
            </div>

            <?php
           }
        ?>
        </div>



    </div>



</div>

</div>
<!-- large modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="pdf_view_modal" style="margin-top: 100px;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" id="pdfdata"></div>
  </div>
</div>
<!-- large model end -->
</section>





