
    <!-- Team Start -->
    <section class="defult-page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <h2><?php echo $this->uri->segment(2);?></h2>
                        <p><a href="<?php echo base_url();?>">Home</a> / <a href="<?php echo site_url('audio-gallery');?>">AUDIO GALLERY</a>/<a href="<?php echo current_url();?>"><?php echo $this->uri->segment(2);?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><hr><br>

    <?php if($this->uri->segment(2) == 'RINGTONES'){?>
        <!-- <section class="blog-section"> -->
            <div class="container">
                <div class="row">
                    <?php $this->load->view('front/ringtone'); ?>   
                </div>
                <div><center><?php echo $links;?></center></div>
            </div>
            <br><br>
        <!-- </section> -->
    <?php }elseif ($this->uri->segment(2) == 'LECTURES') { ?>
        <!-- <section class="blog-section"> -->
            <div class="container">
                <div class="row">
                    <?php $this->load->view('front/lecture'); ?>   
                </div>
                <div><center><?php echo $links;?></center></div>
            </div>
            <br><br>
       <!--  </section> -->
    <?php }
    elseif($this->uri->segment(2) == 'KIRTANS'){ ?>    
    <section class="gallery">
        <div class="container-fluid">
            <?php $this->load->view('front/kirtan'); ?>
        </div>
        <div><center><?php echo $links;?></center></div>
        <br><br><br>
    </section>
<?php } ?>
 

