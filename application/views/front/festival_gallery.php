<style type="text/css">
    .pagination>li>a, .pagination>li>span {
    padding: 9px 12px;!important;
}
</style>

    <!-- Team Start -->

     <section class="defult-page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <h2>Festival Photo Gallery</h2>
                        <p><a href="<?php echo base_url();?>">Home</a> / <a href="<?php echo site_url("image-gallery");?>">Image-gallery</a></p>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- Portfolio Start -->
     <section class="portfolio-details">
        <div class="container">
            <div class="row">
                <?php $i=0;
                //print_r($gallery_data);
                if(count($gallery_data) > 0){ 
                foreach($gallery_data as $key =>$value){ $i++;  ?>
                    <div class="col-md-3">
                        <!-- <a href="<?php //echo site_url('event_darshan/'.$result['Today Darshan']['id']);?>"> -->
                        <div class="hover-box">
                            <img src="<?php echo base_url($value['front_image']);?>" alt="" style="height: 300px;">
                            <div class="hover-layer11"></div>
                            <a href="<?php echo site_url('festival-gallery_images/'.$value['pg_id']);?>">
                                <div class="hover-box-content11">
                                    <span class="text-center"><b><?php echo $value['name']?></b></span><br>
                                    <!-- <a class="fancybox" href="<?php //echo base_url();?>front/images/gallery2.jpg"><i class="fa fa-arrows" aria-hidden="true"></i></a><br> -->
                                    <span class="text-center"><b><?php echo date("d-m-Y", strtotime($value['event_date']));?></b></span><br>
                                    <span class="text-center"><b><?php echo $value['title'];?></b></span><br>
                                </div>
                            </a>
                        </div>

                    </div>
                <?php if($i%4==0){?>
                </div><div class="row" style="margin-top: 10px;">
               <?php }
            }
                } 
               ?>
            </div>
            <div><center><?php echo $links;?></center></div>
        </div>
    </section>