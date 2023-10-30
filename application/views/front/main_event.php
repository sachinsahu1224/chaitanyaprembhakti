<style type="text/css">
    .pagination>li>a, .pagination>li>span {
    padding: 9px 12px;!important;
}
</style>
<section class="defult-page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <h2>Events</h2>
                        <p><a href="<?php echo base_url();?>">Home</a> / <a href="#">Activites</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="blog-section">
        <div class="container">
        <div class="row">
          
            <?php 
                    if(count($event) > 0){
                    foreach ($event as $row) {
                
                        # code...
                        ?>

            
              <div class="col-md-4 col-sm-6 col-xs-6 full-wd-480">
                     <div class="blog-col">
                         <div class="blog-img">
                       
                            <img src="<?php echo base_url().$row['images'];?>" alt="">
                            <div class="post-date">
                                <h3><?php echo date("d-M-y", strtotime($row['start_date']));  ?></span></h3>

                                 
                            </div>
                         </div>
                         <h4><a href="<?php echo base_url().'event/'.$row['id'];?>"><?php echo $row['name'];?></a></h4>
                         <div class="info-bar clearfix">
                             <ul>
                                 <li><?php echo $row['note'];?></li>
                             </ul>
                         </div>
                         <p><?php echo $row['description'];?>
</p>
                     </div>
                </div>


          <?php
      } }else{
        echo "<div>No Event Available";
      }
      ?>

           
         
            </div>
            <div><?php echo "<center>".$links."</center>"; ?></div>
            <!-- Pagination -->
          <!--   <div class="page-pagination">
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
            </div> -->
        </div>
    </section>