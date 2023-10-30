

    <!-- Team Start -->

     <section class="blog-section">

        <div class="container">

            <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title">

                        <div class="title-style">

                            <h2>DALIY DARSHAN</h2>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    </section>


<?php
print_r($darshan);
?>

    <!-- Portfolio Start -->

    <section class="portfolio-section portfolio-col-three">

        <div class="container">

            <div class="row">

                <div class="portfolio-col">

                    <!-- Filter Nav -->
<!-- 
                    <ul class="portfolio-nav">

                        <li data-filter="all"> All </li>

                        <li data-filter="1"> DEITY DARSHAN </li>

                        <li data-filter="2"> FESTIVAL PHOTOS </li>

                        <li data-filter="3"> TEMPELS </li>

                    </ul> -->

                    <!-- Filter Content -->

                    <div class="filtr-container">
                    <?php foreach ($darshan as $row)

                    {


                     ?>
                        
                    

                        <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="3, 2" data-sort="value">

                            <div class="hover-box">

                                <img src="<?php echo base_url().$row['images'];?>" alt="">

                                <div class="hover-layer"></div>

                                <div class="hover-box-content">

                                    <a href="<?php echo base_url();?>front/images/gallery1.jpg"><i class="fa fa-arrows" aria-hidden="true"></i></a>

                                    <p><a href="#"><?php echo $row['place'];?></a></p>

                                </div>

                            </div>

                        </div>
                        <?php
                    }
                    ?>

                     <!--    <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="2, 1" data-sort="value">

                            <div class="hover-box">

                                <img src="<?php echo base_url();?>front/images/gallery2.jpg" alt="">

                                <div class="hover-layer"></div>

                                <div class="hover-box-content">

                                    <a class="fancybox" href="<?php echo base_url();?>front/images/gallery2.jpg"><i class="fa fa-arrows" aria-hidden="true"></i></a>

                                    <p><a href="#">Bhopal Deity Darshan</a></p>

                                </div>

                            </div>

                        </div>

                        <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="3, 1" data-sort="value">

                            <div class="hover-box">

                                <img src="<?php echo base_url();?>front/images/gallery3.jpg" alt="">

                                <div class="hover-layer"></div>

                                <div class="hover-box-content">

                                    <a class="fancybox" href="<?php echo base_url();?>front/images/gallery3.jpg"><i class="fa fa-arrows" aria-hidden="true"></i></a>

                                    <p><a href="#">Damoh Deity Darshan</a></p>

                                </div>

                            </div>

                        </div>

                        <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="1, 2" data-sort="value">

                            <div class="hover-box">

                                <img src="<?php echo base_url();?>front/images/gallery4.jpg" alt="">

                                <div class="hover-layer"></div>

                                <div class="hover-box-content">

                                    <a class="fancybox" href="<?php echo base_url();?>front/images/gallery4.jpg"><i class="fa fa-arrows" aria-hidden="true"></i></a>

                                    <p><a href="#">Kota Deity Darshan</a></p>

                                </div>

                            </div>

                        </div>

                        <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="3, 2" data-sort="value">

                            <div class="hover-box">

                                <img src="<?php echo base_url();?>front/images/gallery5.jpg" alt="">

                                <div class="hover-layer"></div>

                                <div class="hover-box-content">

                                    <a class="fancybox" href="<?php echo base_url();?>front/images/gallery5.jpg"><i class="fa fa-arrows" aria-hidden="true"></i></a>

                                    <p><a href="#">Sagar Deity Darshan</a></p>

                                </div>

                            </div>

                        </div>

                        <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="3, 1" data-sort="value">

                            <div class="hover-box">

                                <img src="<?php echo base_url();?>front/images/gallery6.jpg" alt="">

                                <div class="hover-layer"></div>

                                <div class="hover-box-content">

                                    <a class="fancybox" href="<?php echo base_url();?>front/images/gallery6.jpg"><i class="fa fa-arrows" aria-hidden="true"></i></a>

                                    <p><a href="#">Vrindavan Deity Darshan</a></p>

                                </div>

                            </div>

                        </div> -->

                    </div>

                </div>

            </div>

            <!-- Pagination -->

            <div class="page-pagination">

                <ul class="pagination text-center">

                    <li>

                        <a href="#">

                            <i class="fa fa-angle-double-left" aria-hidden="true"></i>

                        </a>

                    </li>

                    <li><a href="#">1</a>

                    </li>

                    <li><a href="#">2</a>

                    </li>

                    <li><a href="#">3</a>

                    </li>

                    <li><a href="#">4</a>

                    </li>

                    <li><a href="#">5</a>

                    </li>

                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>

                    </li>

                </ul>

            </div>

        </div>

    </section>

   

