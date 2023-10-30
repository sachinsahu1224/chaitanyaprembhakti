
    <!-- Team Start -->
    <section class="defult-page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <h2>OUR CENTRES</h2>
                        <p><a href="<?php echo base_url();?>">Home</a> / <a href="#">OUR CENTRES</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <br><hr>
    <section class="center">

        <div class="container">
          <div class="row">
          <?php  $i =0;
          if(count($center) > 0){
            foreach ($center as $key => $value) { $i++;
              $contact = json_decode($value['contact']);
              $contact_person = $contact->contact_person;
              $mobile= $contact->mobile;
              $phone= $contact->phone;
            ?>
              <div class="col-xs-12 col-md-6 col-md-6">
                <h1  class="text-center"><?php echo $value['place'];?></h1><br>
                <div class="col-xs-12 col-md-6 col-md-6">
                <div class="zoomin">
                <img src="<?php echo base_url($value['images']);?>" alt="img" title="temple" style="width:300px; height:200px" />
                <hr>
                 <!-- <h4><?php //echo $value['name'];?></h4> -->
                </div>
                </div> 
                <div class="col-xs-12 col-md-6 col-md-6">

                  <div class="">
                      <?php echo $value['description'];?>
                     <p><?php echo $phone;?></p>
                     <span>Contact Person :</span>
                     <p><?php echo $contact_person;?></p>

                     <p><?php echo $mobile;?></p>

                     <br>

                     <!-- <button class="button"><a href="#">Read More</a></button> -->

                  </div>  

                </div> 
              </div> 
            <?php if($i%2==0){ ?>
            </div><div class="row" style="margin-top: 6%;"> 
<?php } } }?>  
          </div> 
        <!-- <div class="row">

           <div class="col-xs-12 col-md-6 col-md-6">

            <h1  class="text-center">Damoh Mandir</h1>

            

            <div class="col-xs-12 col-md-6 col-md-6">

            <div class="zoomin">

            <img src="<?php //echo base_url();?>front/images/center3.jpg" alt="img" title="temple" width="100%" />

            <hr>

             <h4>SHRI SHRI GOUR RADHA RAMAN JI MANDIR</h4>

            </div>

            </div> 

            <div class="col-xs-12 col-md-6 col-md-6">

              <div class="">

                  <p>Shri Gour Radha Raman Ji Mandir</p>

                 <p>Uma Mistri Talaiya, Damoh (M.P)</p>

                 <p>Radhika Sharan Prabhu</p>

                 <p>Contact - 9425690190</p>

                 <p>Shachinandan Das</p>

                 <p>Contact - 09630762630</p>

                 <br>

                 <button class="button"><a href="#">Read More</a></button>

              </div>  

            </div> 
        </div>
        <div class="col-xs-12 col-md-6 col-md-6">
          <h1  class="text-center">Kota Mandir</h1>
            <div class="col-xs-12 col-md-6 col-md-6">

                <div class="zoomin">

                     <img src="<?php //echo base_url();?>front/images/center4.jpg" alt="img" title="temple" width="100%" />

                   <hr>

                     <h4>SHRI SHRI GOUR RADHA GOVIND JI MANDIR</h4>

                </div>

            </div> 

            <div class="col-xs-12 col-md-6 col-md-6">

              <div class="">

                  <p>Shri Krishna Chaitanya Prem Bhakti Dham</p>

                 <p>(Under Construction)</p>

                 <p>OCF – 5, Ganesh Nagar, Kota (Rajasthan)</p>

                 <p>Contact Person –</p>

                 <p>i)  Sudarshan Das</p>

                 <p>Mob – 08890534417</p>

                 <p>ii) Bhudhari Das</p>

                 <p>Ph - 09680995439</p>

                 <br>

                 <button class="button"><a href="#">Read More</a></button>

              </div>  

            </div> 

          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-6 col-md-6">
             <h1  class="text-center">'Shri Gurudham' - Sagar</h1>
            <div class="col-xs-12 col-md-6 col-md-6">

                <div class="zoomin">

                <img src="<?php //echo base_url();?>front/images/center5.jpg" alt="img" title="temple" width="100%" />

                <hr>

                 <h4>SHRI SHRI GOUR RADHA KUNJBIHARI JU MANDIR</h4>

                </div>
            </div> 
            <div class="col-xs-12 col-md-6 col-md-6">
              <div class="">
                  <p>Shri Guru “Virahi” Dham</p>

                 <p>Bhuteshwar Road, Near Moti Nagar Thana, Sagar (M.P) 470002</p>

                 <p>Ram Narayan Prabhu Ji</p>

                 <p>Contact – 08109070037</p>

                 

                 <br>

                 <button class="button"><a href="#">Read More</a></button>
              </div>  
            </div> 
          </div>
          <div class="col-xs-12 col-md-6 col-md-6">
            <h1  class="text-center">Vrindavan Mandir</h1>
            <div class="col-xs-12 col-md-6 col-md-6">
                <div class="zoomin">
                  <img src="<?php //echo base_url();?>front/images/center6.jpg" alt="img" title="temple" width="100%" />
                  <hr>
                 <h4>SHRI SHRI GOUR RADHA MADHAV JI MANDIR</h4>
                </div>
            </div> 
            <div class="col-xs-12 col-md-6 col-md-6">
              <div class="">
                  <p>Shri Chaitanya Prem Bhakti Sangh</p>

                 <p>Shri Guru “Virahi” Kunj, Kailash Nagar,</p>

                 <p>Mayur Vihar Colony, Vrindavan {Mathura}</p>

                 <p>(U.P) 281121</p>

                 <p>Contact -</p>

                 <p>Devkinandan Das</p>

                 <p>09983950656</p>

                 <p>Lalit Krishna Das</p>

                 <p>09425978238</p>

                 <br>

                 <button class="button"><a href="#">Read More</a></button>

              </div>  

            </div> 
          </div>
        </div>
        <br><br><br> -->
      </div>
</section>

    <!-- Footer Start -->

