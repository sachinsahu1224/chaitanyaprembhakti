<div class="row">
          <?php  $i =0;
          if(count($data) > 0){
            foreach ($data as $key => $row) { $i++;
            ?>
              <div class="col-xs-12 col-md-4 col-md-4">
                <h3  class="text-center"><?php echo $row['name'];?></h3><br>
                <div class="col-xs-12 col-md-4 col-md-4">
                <div class="zoomin">
                <img src="<?php echo base_url(). $row['coverpage'];?>" alt="img" title="temple" style="width:100px; height: 125px;" />
                <!-- <hr> -->
                 <!-- <h4><?php //echo $value['name'];?></h4> -->
                </div>
                </div> 
                <div class="col-xs-12 col-md-8 col-md-8" >

                  <div class="">
                      <?php echo $row['description'];?>
                  </div>
                </div>
                <audio controls="" style="margin-left: 8px; width: 406px;margin-top: 5px;" controlsList="nodownload">
                        <source src="<?php echo base_url().$row['audio'];?>" type="audio/mpeg">
                    </audio>
                    <hr>
              </div> 
            <?php if($i%3==0){ ?>
            </div><div class="row" style="margin-top: 3%;"> 
<?php } } }?>