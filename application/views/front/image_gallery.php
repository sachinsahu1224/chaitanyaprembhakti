
    <!-- Team Start -->

<style >

.add-font h2{font-size: 16px;
    color: #000000;
    font-weight: bold;}
.section-title .title-style h2 {
    font-size: 36px;
    margin-bottom: 0;
    color: #fff;
}

.blog-section{background-image: url(/front/images/new/Radha-Krishna-wallpapers1.jpg);background-size: 130%;
    height: 345px; -webkit-animation: slide 20s linear infinite;background-repeat: no-repeat;}

@-webkit-keyframes slide {
    from { background-position: 0 0; }
    to { background-position: -400px 0; }
}

</style>


   <section class="blog-section" style="">

        <div class="container">

            <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title">

                        <div class="title-style">

                            <h2>IMAGE GALLERY</h2>

                        </div>
                        <p><a href="<?php echo base_url();?>" style="color: #fff;">HOME</a> / <a href="<?php echo site_url('image-gallery');?>"  style="color: #fff;">IMAGE GALLERY</a></p>
                    </div>

                </div>     

            </div>

        </div>

    </section>



    <section class="gallery" style="margin-top: 40px">

      <div class="container-fluid">

            <?php if(count($category) > 0){ ?>
           <div class="col-xs-12 col-sm-4 col-md-4 add-font">

                       <h2><?php if(isset($category[0]['name'])){
                        echo $category[0]['name'];
                       };?></h2>

                        <div class="demo-3">

                        <a href="<?php echo site_url("category");?>" title="View all Temple deity darshan">

                          <figure>
                                <?php if(isset($category[0]['images'])){ ?>
                                <img src="<?php echo $category[0]['images']; ?>" alt=""/>
                            <?php } ?>
                              

                                <figcaption>

                                    <h2><?php if(isset($category[0]['name'])) { echo $category[0]['name']; }?></h2>

                                    <p>View all Temple deity darshan </p>

                                </figcaption>

                            </figure>

                          </a>

                        </div> 

            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 add-font">

                    <h2><?php if(isset($category[1]['name'])){ echo $category[1]['name']; } ?></h2>

                    <div class="demo-3">

                     <a href="<?php echo base_url('festival-gallery');?>">

                        <figure>
                            <?php if(isset($category[1]['images'])) { ?>
                            <img src="<?php echo $category[1]['images']; ?>" alt=""/>
                        <?php } ?>
                             <figcaption>

                                    <h2><?php if(isset($category[1]['name'])){ echo $category[1]['name']; } ?></h2>

                                    <p>View all festival event images</p>

                             </figcaption>

                        </figure>

                     </a>

                    </div>  

            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 add-font">

                    <h2><?php if(isset($category[2]['name'])){ echo $category[2]['name'];}?></h2>

                        <div class="demo-3">

                         <a href="#<?php //echo base_url('wallpaper-images');?>">

                            <figure>
                                <?php if(isset($category[2]['images'])){?>
                                <img src="<?php echo $category[2]['images']; ?>" alt=""/>
                            <?php } ?>
                                <figcaption>

                                    <h2><?php if(isset($category[2]['name'])){ echo $category[2]['name']; } ?></h2>

                                    <p>View all festival event images</p>

                                </figcaption>

                            </figure>

                         </a>

                       </div>

            </div> 
        <?php } ?>
        </div>

        <br><br><br>

    </section>
