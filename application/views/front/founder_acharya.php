<?php
  if(count($founder_acharya) > 0){
    $image = base_url($founder_acharya[0]['image']);
    $description = $founder_acharya[0]['description'];
  }else{
    $image = base_url('front/images/2-375x500.jpg');
    $description = "Yet to be published";
  }

?>

  <section class="defult-page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <h2>FOUNDER ACHARYA</h2>
                        <p><a href="<?php echo base_url();?>">Home</a> / <a href="<?php echo site_url('guru-parampara');?>">GURU PARAMPARA</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Start -->

     <section class="blog-section">

        <div class="container">

             <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title">

                        <div class="title-style">

                         <h3>Sri Vasudeva Sharan "Virahi" Ji Maharaj</h3> 



                        </div>

                        

                        

                    </div>

                </div>

            </div>

            <div class="row img-part">

              <div class="col-xs-12 col-sm-6 col-md-4">
                 <img src="<?php echo $image;?>" alt="image" width="100%"> 

              </div>

              <div class="col-xs-12 col-sm-6 col-md-8">

                  <div> <?php echo $description;?></div>
              </div>

                

            </div>

            <div class="row">

                

            </div>

        </div>

    </div>

    </section>



 

    

    <!-- Footer Start -->

