 <style type="text/css">
 #chng:hover {
   background-color: #ddd;
}
 </style>
 <?php
    if(count($data) > 0) { $i = 0;
    foreach ($data as $row) { $i++; ?>
<div class="col-md-6">
	<div class="row" id="chng">
		<div class="col-md-6">
			<h4 class="media-heading"><?php echo $row['name'];?></h4>
            <span><?php echo $row['description'];?></span>
		</div>
		<div class="col-md-6">
			<audio controls="" style="width: 265px;">
                <source src="<?php echo base_url().$row['audio'];?>" type="audio/mpeg">
            </audio>
		</div>
	</div>
</div>
<?php if($i%2==0){ ?>
        </div><div class="row">     
<?php } } }
else{
	?>
	<span>No Record Available</span>
	<?php } ?>