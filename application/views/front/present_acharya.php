<?php
  if(count($present_acharya) > 0){
    $image = base_url($present_acharya[0]['image']);
    $description = $present_acharya[0]['description'];
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
                        <h2>PRESENT ACHARYA</h2>
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

                            <h2>Sri Chakradhara Prasad Ji Maharaj</h2>

                        </div>

                    </div>

                </div>

            </div>

            <div class="row img-part">

              <div class="col-xs-12 col-sm-6 col-md-8">

                  <div> <?php echo $description;?></div>

              </div>
              <div class="col-xs-12 col-sm-6 col-md-4">

                 <img src="<?php echo $image;?>" alt="image" width="100%"> 

              </div>

            </div>

           <!--  <br>

               <br> -->

            <!-- <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">

                

                <form>

                 <h3>POST A COMMENT</h3>

                 <p>Your email address will not be published. Required fields are marked *</p>

                 <br>

                    <div class="form-group">

                      <div class="col-xs-12 col-sm-6 col-md-6">

                        <input type="text" id="form2" class="form-control" placeholder="Name">

                        <input type="text" id="form2" class="form-control" placeholder="Email">

                        <input type="text" id="form2" class="form-control" placeholder="Website">

                      </div>



                       <div class="col-xs-12 col-sm-6 col-md-6">

                        <textarea class="form-control" id="comment" rows="5" placeholder="Comment here..."></textarea>

                        <button class="button">SUBMIT</button>

                       </div> 

                       

                    </div>

                </form>

            </div> 

        </div>

    </div> -->

    </section>



 

    

