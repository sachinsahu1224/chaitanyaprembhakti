



    <!-- Team Start -->
    <section class="defult-page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <h2>VIDEO GALLERY</h2>
                        <p><a href="<?php echo base_url();?>">Home</a> / <a href="<?php echo site_url('video');?>">VIDEO GALLERY</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<br>
<br>
    <section class="Video">

        <div class="container">

          <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <!-- <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/channel/UC3i5l3jbvNcnvd72DP1oPsA">Shri Chaitanya Prem Bhakti Sangh</a></h4><p>Shri Chaitanya Prem Bhakti Sangh</p></blockquote> 
                <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>-->

                    <center>
                        <?php if(isset($top_video_link)){ ?>
                            <iframe width="100%" height="550" src="<?php echo $top_video_link[0]['video_link_url'];?>" frameborder="0" allowfullscreen=""></iframe>
                        <?php }else{?>
                        <iframe width="100%" height="550" src="https://www.youtube.com/embed/5pOVaHpoMk4" frameborder="0" allowfullscreen=""></iframe>
                    <?php } ?>
                    </center>
                    <center>
                        <a href="https://www.youtube.com/channel/UC3i5l3jbvNcnvd72DP1oPsA?sub_confirmation=1" class="btn btn-danger" target="_blank" style="margin-top: 21px;"><i class="fa fa-youtube-play" aria-hidden="true"></i>&nbsp;&nbsp;  Subscribe to our channel</a>
                    </center>

            </div>
          </div>  
          <hr>
          <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="row">
                    <?php if(count($video_urls) > 0){ $i = 0;
                        foreach($video_urls as $vieoslink){ $i++;?>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <iframe width="350px" height="250" src="<?php echo $vieoslink['video_link_url'];?>" frameborder="0" allowfullscreen=""></iframe>
                                    <p><b><?php echo $vieoslink['title'];?></b></p>
                                </div>
                            <?php if($i%3=='0'){?>
                            </div><br><div class="row">
                            <?php } ?>
                    <?php } }?>
                </div>
                <center><?php echo $links;?></center>
              </div>
        </div>
        <br>
    </section>



