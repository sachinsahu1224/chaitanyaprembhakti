<style>
.contact-textarea textarea {
    height: 46% !important;
}
.contact-textarea {
   
    padding-bottom: 19px;
}
</style>
<section class="defult-page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <h2>Contact Us</h2>
                        <p><a href="<?php echo base_url();?>">Home</a> / <a href="#">Contact Us</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5051.577776419944!2d74.64467746855529!3d26.455570948778362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396be6e6e716786b%3A0xb48cf72716bac489!2sChaitanya+Mahaparbhu+Mandir!5e0!3m2!1sen!2sin!4v1527791043520" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>


    <!-- Team Start -->

     <!-- <section class="blog-section">

        <div class="container">

            <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title">

                        <div class="title-style">

                            <h2>GET IN TOUCH</h2>

                        </div>

                    </div>

                </div>     

            </div>

        </div>

    </section> -->

    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="contact-col contact-infobox">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <p>chaitanyaprembhakti@gmail.com</p>
                       
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="contact-col contact-infobox">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <p>09829845754 (Hare Krishna Das)</p>
                        <!-- <p> 0145-2423541</p> -->
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="contact-col contact-infobox">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        
                        <p>Vinay Nagar Colony, Pal Beechla, Ajmer (Raj.)</p>
                    </div>
                </div>
            </div>
            <div class="row contact-form-row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="contact-col">
                            <form id="ajax-contact" method="post" action="<?php echo base_url();?>Front/addEnquiry">
                                <div class="col-md-6">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required="">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required="">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" id="subject" required="">
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-textarea">
                                        <textarea class="form-control" rows="4" placeholder="Write Message" id="message" name="message" required="" name="comment"></textarea>
                                        <button class="btn btn-default my-btn text-center" type="submit" value="Submit Form">Send Message</button>
                                    </div>
                                </div>
                                <div id="form-messages"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact-col">
                        <img src="http://images.all-free-download.com/images/graphiclarge/peacock_feather_313016.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>



<!--     <section class="sunday-block">

        <div class="container">

          <div class="row">

            <div class="col-md-12">

             <form action="<?php echo base_url();?>Front/addEnquiry" method="post">

                    <div class="form-group">

                      <div class="col-xs-12 col-sm-12 col-md-12">

                      <div class="right-border">

                      <label>Your Name</label>

                        <input type="text" id="form2" class="form-control" placeholder="Name" name="name" required="">

                        <label>Your Email</label>

                        <input type="text" id="form2" class="form-control" placeholder="Email" name="email" required="">

                         <label>Your Mobile</label>

                        <input type="text" id="form2" class="form-control" placeholder="mobile" name="mobile" required="">

                        <label>Your Subject</label>

                        <input type="text" id="form2" class="form-control" placeholder="subject" name="subject" required="">

                        <label>Your Message</label>

                        <textarea class="form-control" id="comment" rows="5" placeholder="Comment here..." name="comment" required=""></textarea>

                        <button class="submit">SUBMIT</button>

                      </div>

                      </div>



                       

                       

                    </div>

             </form>

            </div>  

          </div>  

        </div>

    </section>
 -->