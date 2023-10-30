<section class="defult-page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-box">
                        <h2>Festivals</h2>
                        <p><a href="<?php echo base_url();?>">Home</a> / <a href="#">Event</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php 
    foreach ($single_event as $row) {
        ?>

    <section class="portfolio-details">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="details-col">
                        <img src="<?php echo base_url().$row['images'];?>" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="details-col">
                        <ul>
                            <li>
                                <i class="fa fa-hand-o-right" aria-hidden="true"></i> <strong>FESTIVALS :</strong><?php echo $row['name'] ;?>
                            </li>
                            <li>
                                <i class="fa fa-hand-o-right" aria-hidden="true"></i> <strong> Start Date :</strong> <?php echo date("d-M-y", strtotime($row['start_date']));  ?>
                            </li>
                             <li>
                                <i class="fa fa-hand-o-right" aria-hidden="true"></i> <strong> End Date :</strong> <?php echo date("d-M-y", strtotime($row['end_date']));  ?>
                            </li>
                            <li>
                                <i class="fa fa-hand-o-right" aria-hidden="true"></i> <strong>Note :</strong> <?php echo $row['note'] ;?>
                            </li>
                           <!--  <li>
                                <i class="fa fa-hand-o-right" aria-hidden="true"></i> <strong>Project Ranking :</strong> 
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            </li> -->
                           <!--  <li>
                                <i class="fa fa-hand-o-right" aria-hidden="true"></i> <strong>Live Demo :</strong> <a href="#">www.YourSite.com</a>
                            </li> -->
                        </ul>
                        <p><?php echo $row['short_descrption'] ;?></p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="details-col">
                        <h3>Description</h3>
                        <p><?php echo $row['description'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
}
?>