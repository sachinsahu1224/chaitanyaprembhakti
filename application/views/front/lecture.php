<table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Audio</th>
                      </tr>
                    </thead>
                    <tbody>
                         <?php
                        if(count($data) > 0) {
                        foreach ($data as $row) { ?>
                        <tr>
                            <td><h4 class="media-heading"><?php echo $row['name'];?></h4>
                                <span><?php echo $row['description'];?></span>
                            </td>
                            <td>
                                <audio controls="">
                                    <source src="<?php echo base_url().$row['audio'];?>" type="audio/mpeg">
                                </audio></td>
                        </tr>
                    <?php } }else{?>
                        <tr>
                            <td colspan="5">No Record Available</td>
                            
                        </tr> <?php } ?>
                    </tbody>
                </table>