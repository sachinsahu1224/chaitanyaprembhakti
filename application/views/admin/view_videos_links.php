

<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>

<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>



<script>

    $(document).ready(function () {



        $('#example').DataTable();

    });

</script>

<div id="page-wrapper">

  <div class="graphs">

    <h3 class="blank1">View Audio</h3>

    <?php

    if ($this->session->flashdata('Sucess')) {

        ?>

        <div class="col-sm-12">

          <div class="col-sm-2">

          </div>

          <div class="alert alert-success alert-dismissable fade in col-sm-8">



            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

            <strong>Success!</strong> <?php echo $this->session->flashdata('sucess'); ?>.

          </div>

          <div class="col-sm-2">



          </div>

        </div>

        <?php

    }



    if ($this->session->flashdata('error')) {

        ?>

        <div class="col-sm-12">

          <div class="col-sm-2">

          </div>

          <div class="alert alert-danger alert-dismissable fade in col-sm-8">



            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

            <strong>error!</strong> <?php echo $this->session->flashdata('error'); ?>.

          </div>

          <div class="col-sm-2">



          </div>

        </div>

        <?php

    }

    ?>

    <div class="xs tabls">

      <div class="bs-example4" data-example-id="contextual-table">

        <table class="table table-hover" id="example" class="display" width="100%" cellspacing="0">

          <thead>

            <tr>

              <th>S.No</th>
              <th>Date</th>
              <th>Title</th>
              <th>Video link url</th>
              <th>Status</th>
              <th>View in tob</th>
              <th>Action</th>

            </tr>

          </thead>

          <tbody>

              <?php

            

              $i = 0;

              if(count($video_links) > 0){

              foreach ($video_links as $row) {  $i++; ?>

                <tr>

                  <td><?php echo $i++; ?></td>
                  <td><?php echo $row['create_at']; ?></td>

                  <td><?php echo $row['title']; ?></td>

                  <td><?php echo $row['video_link_url']; ?></td>
                 
                  <td><?php if($row['status']=='0'){ echo "Enable";}else if($row['status']=='1'){ echo "Disable" ; }?></td>
                  <td><?php if($row['view_top_video']=='0'){ echo "Enable";}else if($row['status']=='1'){ echo "Disable" ; }?></td>
                  <td><a href="<?php echo base_url(); ?>AdminHome/edit_video_link/<?php echo $row['id']; ?>"><button type="button" class="btn btn-info">Edit</button></a>
                  </td>



                </tr>



                <?php
              }
            }

            ?>



          </tbody>





        </table>

      </div>

    </div>

  </div>

</div>