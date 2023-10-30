<section class="defult-page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-box">
                    <h2><?php if(isset($description[0]['name'])){
                                echo $description[0]['name'];
                            }?>
                    </h2>
                    <p><a href="<?php echo base_url();?>">Home</a> / <a href="<?php echo site_url('guru-parampara');?>">GURU PARAMPARA</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

     <section class="blog-section">

        <div class="container">

            <!-- <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title">

                        <div class="title-style">

                         <h2><?php /*if(isset($description[0]['name'])){
                                //echo $description[0]['name'];
                            }*/?></h2> 



                        </div>

                        

                        

                    </div>

                </div>

            </div>-->
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="Introduction">
                    <?php if(isset($description[0]['description'])){
                                echo strip_tags($description[0]['description']);
                            }?>
                </div>

            </div>

        </div>

    </div>

    </section>



 

    

