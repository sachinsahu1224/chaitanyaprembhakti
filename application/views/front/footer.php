 <!-- Footer Start -->

    <footer class="main-footer">

        <div class="container">

            <div class="row">

                <div class="col-md-3 col-sm-6">

                    <div class="footer-col">

                        <h3><span>About Us</span></h3>

                        <p class="top-para"><b>Official website of " Shree Chaitanya Prem Bhakti Sangh"</b></p>

                        <p><b>Founder Acharaya:-</b>

                        <br/>His Divine Grace

Shri Vasudev Sharan Ji Maharaj "Virahi"</p>

                        

                        

                            <!-- Social Link  -->

                        <!-- <div class="social-group">

                            <ul>

                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>

                            </ul>

                        </div> -->

                    </div>

                </div>

                

                <div class="col-md-4 col-sm-6">

                    <div class="footer-col address-col">

                        <h3><span>CONTACT US</span></h3>

                        <p></p>

                        <ul>
                            



                            <li><p style="color:#fb831b;">Sri Gaur Radha Govind Ju Mandir ,</p>

                           OCF - 5, Ganesh Nagar Kota ,  <br/>(Rajasthan) India  Pincode-324010</li>

                            <li><i class="fa fa-envelope" aria-hidden="true"></i> chaitanyaprembhakti@gmail.com</li>

                            <li><i class="fa fa-phone" aria-hidden="true"></i> 09829845754 (Hare Krishna Das)</li>

                            <!--<li><i class="fa fa-phone" aria-hidden="true"></i> 0145-2423541 </li>-->

                        </ul>

                    </div>

                </div>



                <div class="col-md-2 col-sm-6">

                    <div class="footer-col">

                        <h3><span>Quick Links</span></h3>

                        <ul>

                            <li><a href="<?php echo base_url();?>">Home</a></li>

                            <li><a href="<?php echo site_url('introduction');?>">About Us</a></li>

                            <li><a href="<?php echo site_url('objective');?>">Objective</a></li>

                            <li><a href="<?php echo site_url('all_event');?>">Event</a></li>

                            <li><a href="<?php echo site_url('contact-us');?>">Contact Us</a></li>



                        </ul>

                    </div>

                </div>

                <div class="col-md-3 col-sm-6">

                    <div class="footer-col">

                        <h3><span>FOLLOW US</span></h3>

                         <ul>

                            <li><a href="https://www.facebook.com/chaitanyaprembhakti/" target="_blank"><img src="<?php echo base_url();?>front/images/socal/icon1.png" style="width:48%;"></a></li>

                            <li><a href="#"><img src="<?php echo base_url();?>front/images/socal/icon2.png" style="width:48%;"></a></li>

                            <li><a href="https://www.youtube.com/channel/UC3i5l3jbvNcnvd72DP1oPsA" target="_blank"><img src="<?php echo base_url();?>front/images/socal/icon3.png" style="width:48%;"></a></li>

                            <li><a href="https://www.instagram.com/chaitanya_prem_bhakti/?hl=en" target="_blank"><img src="<?php echo base_url();?>front/images/socal/icon4.png" style="width:48%;"></a></li>

                        </ul>

                    </div>

                </div>

                

            </div>

        </div>

    </footer>

    

    <!-- Copyright Start -->

    <section class="copyright-bar">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="copyright-col text-center">

                        <p>©2018. Designed by <a href="#" target="_blank"></a> All Rights Reserved.</p>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <a href="#" class="scrollup">

        <i class="fa fa-long-arrow-up" aria-hidden="true"></i>

    </a>



    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

  <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
            
            $('#lightgallery').lightGallery();
             var url      = window.location.href;  
             console.log(url);

            $(".img-responsive").click(function()
            {
               
                
              $("nav#navbar-main").css("display","none");

            });

            $("#sliderclick").click(function()
            {
                alert('hello');

            });

          
            $('.viewpdf').click(function(){
                var pdf = "<?php echo base_url();?>"+'/'+ $(this).data('pdf');
                
                $("#pdfdata").html('');
                $("#pdfdata").html('<embed src="'+pdf+'#toolbar=0" width="100%" height="500">');
                $('#pdf_view_modal').modal('show');
            });

        });
        </script>
        <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
        <script src="<?php echo base_url();?>front/dist/js/lightgallery-all.min.js"></script>

        <script src="<?php echo base_url();?>front/lib/jquery.mousewheel.min.js"></script>


   



    <!-- Bootstrap Core JavaScript -->

    <script type="text/javascript" src="<?php echo base_url();?>front/js/bootstrap.min.js"></script>



    <!-- all plugins and JavaScript -->

    <script type="text/javascript" src="<?php echo base_url();?>front/js/modernizr-custom.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>front/js/css3-animate-it.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>front/js/bootsnav.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>front/js/VideoPopUp.jquery.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>front/js/jquery.counterup.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>front/js/jquery.waypoints.min.js"></script> 

    <script type="text/javascript" src="<?php echo base_url();?>front/js/jquery.filterizr.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>front/js/owl.carousel.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>front/js/jarallax.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>front/js/jquery.fancybox.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>front/js/header-animation.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>front/js/imagesloaded.min.js"></script>
    
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6241630018439385"
     crossorigin="anonymous"></script>



    <!-- Main Custom JS -->

    <script type="text/javascript" src="<?php echo base_url();?>front/js/custom.js"></script>

    

    <!-- Color Switcher JS -->

    <script type="text/javascript" src="<?php echo base_url();?>front/js/color-switcher.js"></script>

</body>



</html>

