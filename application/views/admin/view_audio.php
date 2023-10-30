

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
              <th>Name</th>
              <th>Category</th>
              <th>Description</th>
              <th>Singer</th>
              <th>Audio</th>
              <th>View Coverpage</th>
              <th>Delete</th>

            </tr>

          </thead>

          <tbody>

              <?php

            

              $i = 1;



              foreach ($audio as $row) {
                  $category = "";
                  $audio_category =$this->Admin_model->get_selected_value("name",'audiocatgory',$condition=array('id' =>$row['categoryid']),$order='',$type='');
                  if(count($audio_category) > 0){
                    $category = $audio_category[0]['name'];
                  }
                  ?>

                <tr>

                  <td><?php echo $i++; ?></td>
                  <td><?php echo $row['create_at']; ?></td>

                  <td><?php echo $row['name']; ?></td>

                  <td><?php echo $category; ?></td>
                  <td style="word-break: break-word;"><?php echo $row['description']; ?></td>
                  <td><?php echo $row['singer']; ?></td>

                  <td>
                    
                    <audio controls>
                
                <source src="<?php echo  base_url(). $row['audio'];?>" type="audio/mpeg">
                Your browser does not support the audio element.
</audio>

                  </td>
                  <td><img src="<?php echo  base_url(). $row['coverpage']; ?>" height="70px"></td>

            
                  <td><a href="<?php echo base_url(); ?>AdminHome/editaudioData/<?php echo $row['id']; ?>"><button type="button" class="btn btn-info">Edit</button></a>
                    <a href="<?php echo base_url(); ?>AdminHome/Deleteaudio/<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>



                </tr>



                <?php

            }

            ?>



          </tbody>





        </table>

      </div>

    </div>

  </div>

</div>