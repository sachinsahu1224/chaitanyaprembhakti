
    <!-- Team Start -->
     <section class="defult-page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-box">
                    <h2>AUDIO GALLERY</h2>
                    <p><a href="<?php echo base_url();?>">Home</a> / <a href="<?php echo site_url('audio-gallery');?>">Audio Gallery</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

   <!--  <section class="blog-section">

    <div class="container">

        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <div class="section-title">
                    <div class="title-style">
                        <h2>Audio Gallery</h2>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section> -->
<br><br>
    <section class="gallery">
      <div class="container-fluid">
      <?php
      foreach ($audio_category as $row) {
        ?>
                 <div class="col-xs-12 col-sm-4 col-md-4">
                       <h2><?php echo $row['name'];?></h2>
                <a href="<?php echo base_url();?>audio/<?php echo $row['name'].'/'.$row['id'];?>">
                        <div class="demo-3">
                          <figure>
                                <img src="<?php echo base_url().$row['images'];?>" alt="<?php echo $row['images'];?>"/>
                                <figcaption>
                                    <h2><?php echo $row['name'];?></h2>
                                    <p><?php echo $row['description'];?></p>
                                </figcaption>
                            </figure>
                        </div> 
                        </a>
            </div>
  

          <?php
}
?>
            <!-- <div class="col-xs-12 col-sm-4 col-md-4">

                    <h2>PRAVACHAN</h2>

                    <div class="demo-3">

                        <figure>

                            <img src="<?php echo base_url();?>front/images/Behind-Mic.jpg" alt=""/>

                             <figcaption>

                                    <h2>PRAVACHAN</h2>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>

                             </figcaption>

                        </figure>

                    </div>  

            </div> -->

            <!-- <div class="col-xs-12 col-sm-4 col-md-4">

                    <h2>RINGTONS</h2>

                        <div class="demo-3">

                            <figure>

                                <img src="<?php echo base_url();?>front/images/578650fe544c4.jpg" alt=""/>

                                <figcaption>

                                    <h2>RINGTONS</h2>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>

                                </figcaption>

                            </figure>

                       </div>

            </div> -->

        </div>

        <br><br><br>

    </section>



 

