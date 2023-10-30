
<style type="text/css">
    
    .mange{
           height: 177px!important;
    width: 174px!important;
    }
</style>
<!-- Team Start -->

<section class="blog-section">

    <div class="container">

        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <div class="section-title">
                    <div class="title-style">
                        <h2>Audio <?php echo $this->uri->segment(2);?></h2>
                    </div>

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <?php

                        foreach ($data as $row) {


                    ?>

                <div class="well">
                  <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object img-thumbnail mange" src="<?php echo base_url(). $row['coverpage'];?>">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $row['name'];?></h4>
                        <p class="text-right">By <b><?php echo $row['singer'];?></b></p>
                        <p style="text-align: justify!important;"><?php echo $row['description'];?></p>
                            <br/>
                            <ul class="list-inline list-unstyled">
                                <li><span><a href="<?php echo base_url().$row['audio'];?>" target="1"><button type="button" class="btn btn-warning">play</button></a></li>
                            </ul>
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

</section>

<br>




