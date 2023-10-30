<style>
.mange {
     height: 209px;
     border: 1px solid;
    /*box-shadow: 8px 10px 30px #ccc;*/
    /*border-radius: 30px 0 40px 0;
    height:170px;*/
}
.add-new{padding: 16px;
    text-align: justify;border-radius: 22px; box-shadow: 2px 3px 0px #7773738a;}
    .add-new h4{ margin-top: 6px; color: #fff;}
    .add-new p{color: #fff;
    font-weight: bold;}

  .img-add  {background-image: url("/front/images/new/img02.jpg");background-size: 100%;}
  .img-add2{background-image: url("/front/images/new/img03.jpg");background-size: 100%;}
   .img-add3{background-image: url("/front/images/new/img01.png");background-size: 100%;}
</style>

<!-- 
    <!-- Slider Start -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
  <?php
                    $j=1;
                    foreach($slider as $row){ 
                      $active= ($j==1?"active":"")
                      ?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo $j++;?>" class="<?php echo $active;?>"></li>
                      
                      <?php
                    }
                    
                    ?>
    
   
  </ol>

  <!-- <ol class="carousel-indicators">
                  <?php
                    $j=1;
                    foreach($slider as $row){ 
                        $active= ($j==1?"active":"");
                    echo '<li data-target="#myCarousel" data-slide-to="0" class="'.$active.'"></li>';
                    $j++;
                    
                    }
                    ?>
                </ol> -->

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
   <?php 
                   $i=1;
                   foreach($slider as $row){ 
                       $class = ($i==1? "item active":"item");
                       ?>
                    
                    <div class="<?php echo $class; ?>">
                        <img src="<?php echo base_url().$row['images'];?>">
                        </div>
                    
                   <?php 
                   $i++;
                   } ?>

                  
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <!-- About Start -->
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-col">
                     
                        
                        

                        <h2><span><?php  echo $about->heading; ?></span></h2>
                        <h5><?php echo $about->sub_heading; ?></h5>
                       
                        <p class="para-space xyz"> <?php echo $about->description; ?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-col about-img">
                        <img src="<?php echo base_url().$about->image; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Service Start -->
    <section class="service-section">
        <div class="container">
            
            <div class="row animatedParent animateOnce">
                <div class="col-md-4 col-sm-6 col-xs-6 full-wd-480" style="height:209px">
                    <div class="service-col animated fadeInUpShort slow mange add-new img-add" style="">
                        <!-- <i class="icofont icofont-castle"></i> -->
                        <h4 style="text-align: center;"> <a style="color: #fff;" href="<?php echo site_url('category');?>">Deity Darshan</a></h4>
                        <p>Daily Darshan of Beloved Deities of Shrila Gurudev Maharaj installed in the temples.
The deities installed in the temple from left are Shri Chaitanya Mahaprabhu, Shri Krishna Chandra Followed By Shrimati Radha Rani.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 full-wd-480" style="height:209px">
                    <div class="service-col animated fadeInUpShort slow delay-250 mange add-new img-add2">
                        <!-- <i class="icofont icofont-swirl"></i>audio-gallery -->
                        <h4 style="text-align: center;"><a style="color: #fff;" href="<?php echo base_url();?>audio-gallery">Kirtanam</a></h4>
                        <p>Devotees perform kirtan and dance with ecstacy in front of the Deities to give a
chance to the conditioned souls to be benefited from hearing Krishna’s holy names.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 full-wd-480 " style="height:209px">
                    <div class="service-col animated fadeInUpShort slow delay-500 mange add-new img-add3">
                        <!-- <i class="icofont icofont-star-shape"></i> -->
                        <h4 style="text-align: center;"><a style="color: #fff;" href="<?php echo base_url();?>books-gallery">Spiritual Books</a></h4>
                        <p>Spiritual Books are essential for proper cultivation Of Devotional Service.
By reading & contemplating the message sincerely,
one becomes freed from all sinful reactions and attain the nectar of devotion</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Counter Start -->
   <!--  <section class="counter-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="counter-col">
                        <div class="counter">
                            <span class="count">12345</span>
                        </div>
                        <p>Project Done</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="counter-col">
                        <div class="counter">
                            <span class="count">18355</span>
                        </div>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="counter-col">
                        <div class="counter">
                            <span class="count">1250</span>
                        </div>
                        <p>Employees</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="counter-col">
                        <div class="counter">
                            <span class="count">560</span>
                        </div>
                        <p>Awards</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Portfolio Start -->

    <!-- Testimonial Start -->
    

<!--     <section class="testimonial-section parallax overlay-black">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="testimonial-col">
                        <div class="testimonial-carousel owl-theme">
                            <?php
                                foreach ($testimonial as $testimon) {
                                 ?>
                            <div class="test-item">
                                <img src="<?php echo base_url().$testimon['image']; ?>" alt="">
                                <h4><?php echo $testimon['name']; ?></h4>
                                
                                <p><?php echo $testimon['comment']; ?></p>
                            </div>
                            <?php
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     -->

    <!-- Newsletter Start -->

    <!-- Team Start -->
     <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <div class="title-style">
                            <h2>UPCOMING EVENTS</h2>

                        </div>
                        <p><a href="<?php echo base_url();?>all_event">All Events</a> | <a href="<?php echo base_url();?>all_event">Upcoming</a></p>
                        
                    </div>
                </div>
            </div>
            <div class="row">
            <?php 

                foreach ($product as $row) {

                  ?>

                  <div class="col-md-4 col-sm-6 col-xs-6 full-wd-480">
                     <div class="blog-col">
                         <div class="blog-img">
                       
                            <img src="<?php echo base_url().$row['images'];?>" alt="">
                            <div class="post-date">
                                <h3><?php echo date("d-M-y", strtotime($row['start_date']));  ?></span></h3>

                                 
                            </div>
                         </div>
                         <h4><a href="<?php echo base_url().'event/'.$row['id'];?>"><?php echo $row['name'];?></a></h4>
                         <div class="info-bar clearfix">
                             <ul>
                                 <li><?php echo $row['note'];?></li>
                             </ul>
                         </div>
                         <p><?php echo $row['description'];?>
</p>
                     </div>
                </div>


                  <?php
                  # code...
                }
                ?>
                
               
            </div>
        </div>
    </section>

 
