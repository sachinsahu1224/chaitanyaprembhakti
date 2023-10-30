<style type="text/css">
    .mange{
        height: 265px;
    
    width: 441px;
}
</style>
<section class="defult-page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-box">
                    <h2>Blog</h2>
                    <p><a href="<?php echo base_url();?>">Home</a> / <a href="#">Blog</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-section">
    <div class="container">
        <div class="row">


                <?php 
                foreach ($post as $row) {
                    ?>

                <div class="col-md-12 col-sm-12 col-xs-12 full-wd-480">
                    <div class="well">
                      <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object img-thumbnail mange" src="<?php echo base_url().$row['images']; ?>">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo $row['post_name']; ?></h4>
                            <!-- <p class="text-right"><i><?php echo $row['note']; ?></i></p> -->
                            <p><?php echo $row['short_descrption']; ?></p>
                                <ul class="list-inline list-unstyled">
                                    <li><span><i class="glyphicon glyphicon-calendar"></i><?php echo $row['date']; ?> </span></li>

                                    <!-- <span><i class="glyphicon glyphicon-calendar"></i> <?php echo $row['end_date']; ?></span> -->
                                    <!-- <li>|</li>
                                    <li>
                                     <span class="glyphicon glyphicon-star"></span>
                                     <span class="glyphicon glyphicon-star"></span>
                                     <span class="glyphicon glyphicon-star"></span>
                                     <span class="glyphicon glyphicon-star"></span>
                                     <span class="glyphicon glyphicon-star-empty"></span>
                                 </li> -->
                                 <li>|</li>
                                 <li><a href="<?php echo base_url().'singleblog/'.$row['url_slug'];?>">Read more...</a></li>
                              
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        }
        ?>


  



    </div>
    <!-- Pagination -->
          <!--   <div class="page-pagination">
                <ul class="pagination text-center">
                    <li>
                        <a href="#">
                            <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li><a href="#">1</a>
                    </li>
                    <li><a href="#">2</a>
                    </li>
                    <li><a href="#">3</a>
                    </li>
                    <li><a href="#">4</a>
                    </li>
                    <li><a href="#">5</a>
                    </li>
                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div> -->
        </div>
    </section>