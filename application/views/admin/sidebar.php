
<body class="sticky-header"  onload="initMap()">

  <section>

    <!-- left side start-->

    <div class="left-side sticky-left-side">

      <!--logo and iconic logo start-->

      <div class="logo">

        <h1><a href="<?php echo base_url();?>admin/dashboard">Admin <span> Panel</span></a></h1>

      </div>

      <div class="logo-icon text-center">

        <a href="<?php echo base_url();?>AdminHome"><i class="lnr lnr-home"></i> </a>

      </div>

      <!--logo and iconic logo end-->

      <div class="left-side-inner">

        <!--sidebar nav start-->

        <ul class="nav nav-pills nav-stacked custom-nav">

          <li class="active"><a href="<?php echo base_url();?>AdminHome"><i class="lnr lnr-power-switch"></i><span>Dashboard</span></a></li>

          <li class="menu-list">
            <a href="#"><i class="lnr lnr-cog"></i>
              <span>Slider</span></a>
            <ul class="sub-menu-list">

              <li><a href="<?php echo base_url();?>admin/addslider">Add slide</a> </li>

              <li><a href="<?php echo base_url();?>admin/viewslider">View slide</a></li>

            </ul>

          </li>

          <li class="menu-list"><a href="#"><i class="lnr lnr-book"></i> <span>About Us</span></a>
           <ul class="sub-menu-list">
              <li><a href="<?php echo base_url();?>admin/about">About Us</a> </li>
              <li><a href="<?php echo base_url();?>admin/INTRODUCTION">INTRODUCTION</a></li>
              <li><a href="<?php echo base_url();?>admin/Philosophy">Philosophy</a></li>
              <li><a href="<?php echo base_url();?>admin/objective">Objective</a></li>
              <li><a href="<?php echo base_url();?>admin/founder_acharya">Founder Acharya</a></li>
              <li><a href="<?php echo base_url();?>admin/present_acharya">Present Acharya</a></li>
              <li><a href="<?php echo base_url();?>admin/guru_parampara">Guru Parampara</a></li>
            </ul>
          </li>

          

          <li class="menu-list"><a href="#"><i class="lnr lnr-list"></i> <span>Event </span></a>

            <ul class="sub-menu-list">

              <li><a href="<?php echo base_url();?>admin/addproduct">Add Event</a> </li>

              <li><a href="<?php echo base_url();?>admin/viewproduct">View Event</a></li>

            </ul>

          </li>

         <li class="menu-list"><a href="#"><i class="lnr lnr-menu"></i> <span>Blog</span></a>

            <ul class="sub-menu-list">

              <li><a href="<?php echo base_url();?>adminHome/addpostData">Add Post</a> </li>

              <li><a href="<?php echo base_url();?>adminHome/viewpost">View Post</a></li>

            </ul>

          </li> 

          <li class="menu-list"><a href="#"><i class="lnr lnr-history"></i> <span>Quote</span></a>

            <ul class="sub-menu-list">

              <li><a href="<?php echo base_url();?>admin/testimonial">Add quote</a> </li>

              <li><a href="<?php echo base_url();?>admin/viewtestimonial">View quote</a></li>

            </ul>

          </li>


           <li class="menu-list"><a href="#"><i class="lnr lnr-history"></i> <span>Temple</span></a>

            <ul class="sub-menu-list">

              <li><a href="<?php echo base_url();?>adminHome/addtemple">Add Temple</a> </li>

              <li><a href="<?php echo base_url();?>adminHome/viewtemple">View Temple</a></li>

            </ul>

          </li>

          <!-- <li class="menu-list"><a href="#"><i class="lnr lnr-history"></i> <span>Update gallery category</span></a>

            <ul class="sub-menu-list">

              <li><a href="<?php //echo base_url('adminHome/view_img_category');?>">View image</a> </li>

            </ul>

          </li> -->

          <li class="menu-list"><a href="#"><i class="lnr lnr-list"></i> <span>Darshan</span></a>

            <ul class="sub-menu-list">

              <li><a href="<?php echo base_url();?>adminHome/addDarshan">Add Darshan</a> </li>

              <li><a href="<?php echo base_url();?>AdminHome/viewDarshan">View Darshan</a></li>

            </ul>

          </li>
          <!-- Festival images media gellery -->
          <li class="menu-list"><a href="#"><i class="lnr lnr-list"></i> <span>Festival Images</span></a>

            <ul class="sub-menu-list">

              <li><a href="<?php echo site_url("admin/add_gallery_images");?>">Add Images</a> </li>

              <li><a href="<?php echo base_url("admin/gallery_list");?>">View Festival Images</a></li>

            </ul>

          </li>
          <!-- Wallpapers -->
          <li class="menu-list"><a href="#"><i class="lnr lnr-list"></i> <span>Wallpaper Gallery</span></a>

            <ul class="sub-menu-list">

              <li><a href="<?php echo site_url("admin/add_wallpapers");?>">Add wallpaper</a> </li>

              <li><a href="<?php echo base_url("admin/wallpaper_list");?>">View wallpapers</a></li>

            </ul>

          </li>
          <li class="menu-list"><a href="#"><i class="lnr lnr-indent-increase"></i><span>Audio</span></a>

            <ul class="sub-menu-list">

              <li><a href="<?php echo base_url();?>adminHome/addaudiocategory">Add Category</a> </li>

              <li><a href="<?php echo base_url();?>AdminHome/viewaudiocate">View Category</a></li>
               <li><a href="<?php echo base_url();?>AdminHome/add_audio">Add Audio</a></li>
                <li><a href="<?php echo base_url();?>AdminHome/view_audio">View Audio</a></li>

            </ul>

          </li>
           <li class="menu-list"><a href="#"><i class="lnr lnr-briefcase"></i><span>Images</span></a>
            <ul class="sub-menu-list">
             <li><a href="<?php echo base_url();?>adminHome/addImages">Add Images category</a> </li>

              <li><a href="<?php echo base_url();?>AdminHome/viewimagescategory">View Images Category</a></li>

              <li><a href="<?php echo base_url();?>adminHome/addImagesamin">Add Images</a> </li>

              <li><a href="<?php echo base_url();?>AdminHome/viewimagesgallary">View Images</a></li>

            </ul>

          </li>
          <li class="menu-list"><a href="#"><i class="lnr lnr-indent-increase"></i><span>Video</span></a>

            <ul class="sub-menu-list">
              <li><a href="<?php echo base_url();?>AdminHome/add_video_link">Add Video link</a></li>
              <li><a href="<?php echo base_url();?>AdminHome/view_video">View Videoes</a></li>
            </ul>
          <li class="menu-list"><a href="#"><i class="lnr lnr-pencil"></i><span>Book</span></a>

            <ul class="sub-menu-list">

              <li><a href="<?php echo base_url();?>adminHome/addBookcategory">Add Category</a> </li>

              <li><a href="<?php echo base_url();?>AdminHome/viewbookcate">View Category</a></li>
               <li><a href="<?php echo base_url();?>AdminHome/add_book">Add Books</a></li>
                <li><a href="<?php echo base_url();?>AdminHome/viewbook">View Books</a></li>
            </ul>

          </li>
          <li class="menu-list"><a href="#"><i class="lnr lnr-list"></i><span>Festivals</span></a>
            <ul class="sub-menu-list">
              <li><a href="<?php echo base_url();?>adminHome/festivals">festivals</a> </li>
              <li><a href="<?php echo base_url();?>adminHome/view_festivals">View Festivals</a> </li>
            </ul>
          </li>
          <li class="menu-list"><a href="#"><i class="lnr lnr-list"></i><span>Activity</span></a>
            <ul class="sub-menu-list">
              <li><a href="<?php echo base_url();?>adminHome/view_activities">Activity list</a> </li>
              <li><a href="<?php echo base_url();?>adminHome/add_activity">View Activity</a> </li>
            </ul>
          </li>
          <li class="menu-list"><a href="#"><i class="lnr lnr-list"></i><span>Guruparampara</span></a>
            <ul class="sub-menu-list">
              <li><a href="<?php echo base_url();?>adminHome/Add_guruparampara">Add</a> </li>
              <li><a href="<?php echo base_url();?>adminHome/view_guruparampara">View list</a> </li>
            </ul>
          </li>
            <li class="menu-list"><a href="#"><i class="lnr lnr-list"></i><span>Contact Us</span></a>

            <ul class="sub-menu-list">

              <li><a href="<?php echo base_url();?>adminHome/contactUs">Contact us</a> </li>

              

            </ul>

          </li>


         <!--  <li><a href="<?php echo base_url();?>admin/quotation"><i class="lnr lnr-briefcase"></i> <span>Quotation</span></a></li> -->

<!--          <li><a href="tables.html"><i class="lnr lnr-menu"></i> <span>Tables</span></a></li>              

          

          <li class="menu-list"><a href="#"><i class="lnr lnr-indent-increase"></i> <span>Menu Levels</span></a>  

            <ul class="sub-menu-list">

              <li><a href="charts.html">Basic Charts</a> </li>

            </ul>

          </li>

          <li><a href="codes.html"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>

          <li><a href="media.html"><i class="lnr lnr-select"></i> <span>Media Css</span></a></li>

          <li class="menu-list"><a href="#"><i class="lnr lnr-book"></i>  <span>Pages</span></a> 

            <ul class="sub-menu-list">

              <li><a href="sign-in.html">Sign In</a> </li>

              <li><a href="sign-up.html">Sign Up</a></li>

              <li><a href="blank_page.html">Blank Page</a></li>

            </ul>

          </li>-->

        </ul>

        <!--sidebar nav end-->

      </div>

    </div>

    <!-- left side end-->

    

    <!-- main content start-->

<div class="main-content">

  <!-- header-starts -->

  <div class="header-section">



    <!--toggle button start-->

    <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>

    <!--toggle button end-->



    <!--notification menu start -->

    <div class="menu-right">

      <div class="user-panel-top">  	

        <div class="profile_details_left">

          <ul class="nofitications-dropdown">

            <div class="clearfix"></div>	

          </ul>

        </div>

        <div class="profile_details">		

          <ul>

            <li class="dropdown profile_details_drop">

              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

                <div class="profile_img">	

                  <span style="background:url(images/1.jpg) no-repeat center"> </span> 

                  <div class="user-name">

                    <p>Admin<span>Administrator</span></p>

                  </div>

                  <i class="lnr lnr-chevron-down"></i>

                  <i class="lnr lnr-chevron-up"></i>

                  <div class="clearfix"></div>	

                </div>	

              </a>

              <ul class="dropdown-menu drp-mnu">

<!--                <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 

                <li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li> -->

                <li> <a href="<?php echo base_url();?>AdminHome/logout"><i class="fa fa-sign-out"></i> Logout</a> </li>

              </ul>

            </li>

            <div class="clearfix"> </div>

          </ul>

        </div>		

<!--        <div class="social_icons">

          <div class="col-md-4 social_icons-left">

            <a href="#" class="yui"><i class="fa fa-facebook i1"></i><span>300<sup>+</sup> Likes</span></a>

          </div>

          <div class="col-md-4 social_icons-left pinterest">

            <a href="#"><i class="fa fa-google-plus i1"></i><span>500<sup>+</sup> Shares</span></a>

          </div>

          <div class="col-md-4 social_icons-left twi">

            <a href="#"><i class="fa fa-twitter i1"></i><span>500<sup>+</sup> Tweets</span></a>

          </div>

          <div class="clearfix"> </div>

        </div>            	-->

        <div class="clearfix"></div>

      </div>

    </div>

    <!--notification menu end -->

  </div>

  <!-- //header-ends -->