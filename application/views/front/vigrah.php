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
                        <h2>Deity Darshan</h2>
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
                <div class="col-md-6">
                   <!--  <div class="details-col">
                        <img src="<?php //echo base_url().$row['images'];?>" alt="">
                    </div> -->
                </div>
                <div class="col-md-6">
                   <?php /*<div class="details-col">
                        <ul>
                            <li>
                                <i class="fa fa-hand-o-right" aria-hidden="true"></i> <strong>Event :</strong><?php echo $row['name'] ;?>
                            </li>
                            <li>
                                <i class="fa fa-hand-o-right" aria-hidden="true"></i> <strong> Start Date :</strong> <?php echo date("d-M-y", strtotime($row['start_date']));  ?>
                            </li>
                             <li>
                                <i class="fa fa-hand-o-right" aria-hidden="true"></i> <strong> End Date :</strong> <?php echo date("d-M-y", strtotime($row['end_date']));  ?>
                            </li>
                            <li>
                                <i class="fa fa-hand-o-right" aria-hidden="true"></i> <strong>Note :</strong> <?php echo $row['note'] ;?>
                            </li>
                           <!--  <li>
                                <i class="fa fa-hand-o-right" aria-hidden="true"></i> <strong>Project Ranking :</strong> 
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            </li> -->
                           <!--  <li>
                                <i class="fa fa-hand-o-right" aria-hidden="true"></i> <strong>Live Demo :</strong> <a href="#">www.YourSite.com</a>
                            </li> -->
                        </ul>
                        <p><?php echo $row['short_descrption'] ;?></p>
                    </div>*/?>
                </div>
                <!-- <div class="col-md-12">
                    <div class="details-col">
                        <h3>Description</h3>
                        <p><?php //echo $row['description'];?></p>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <?php if(count($today_darshan) > 0){ ?>
                            <!-- <a href="<?php //echo site_url('event_darshan/'.$result['Today Darshan']['id']);?>"> -->
                            <div class="hover-box">
                                <img src="<?php echo base_url($today_darshan['image']);?>" alt="" style="height: 300px;">
                                <div class="hover-layer11"></div>

                                <a href="<?php echo site_url('Deity-darshan/'.$today_darshan['id']);?>">
                                    <div class="hover-box-content11">
                                    <!-- <a class="fancybox" href="<?php //echo base_url();?>front/images/gallery2.jpg"><i class="fa fa-arrows" aria-hidden="true"></i></a><br> -->
                                    <span class="text-center"><b><?php echo $today_darshan['title'];?></b></span><br>
                                    <span class="text-center"><b><?php echo date("d-m-Y", strtotime($today_darshan['event_date']));?></b></span><br>
                                    <span class="text-center"><b><?php echo $today_darshan['event_name']?></b></span>
                                </div></a>
                            </div>
                        <?php } ?>
                </div>
                <div class="col-md-4"></div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <?php $i=0;
                if(count($result) > 0){ 
                foreach($result as $key =>$value){ $i++;  ?>
                    <div class="col-md-4">
                        <!-- <a href="<?php //echo site_url('event_darshan/'.$result['Today Darshan']['id']);?>"> -->
                        <div class="hover-box">
                            <img src="<?php echo base_url($value['image']);?>" alt="" style="height: 300px;">
                            <div class="hover-layer11"></div>
                            <a href="<?php echo site_url('Deity-darshan/'.$value['id']);?>">
                                <div class="hover-box-content11">
                                    <!-- <a class="fancybox" href="<?php //echo base_url();?>front/images/gallery2.jpg"><i class="fa fa-arrows" aria-hidden="true"></i></a><br> -->
                                    <span class="text-center"><b><?php echo $value['title'];?></b></span><br>
                                    <span class="text-center"><b><?php echo date("d-m-Y", strtotime($value['event_date']));?></b></span><br>
                                    <span class="text-center"><b><?php echo $value['event_name']?></b></span>
                                </div>
                            </a>
                        </div>

                    </div>
                <?php if($i%3==0){?>
                </div><div class="row" style="margin-top: 10px;">
               <?php }
            }
                } ?>
            </div>
            <div><center><?php echo $links;?></center></div>
        </div>
    </section>

   

