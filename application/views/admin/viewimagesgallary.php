

<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>

<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>



<script>

    $(document).ready(function () {



        $('#example').DataTable();

    });

</script>

<div id="page-wrapper">

  <div class="graphs">

    <h3 class="blank1">View Images Gallery</h3>

    <?php

    if ($this->session->flashdata('Sucess')) {

        ?>

        <div class="col-sm-12">

          <div class="col-sm-2">

          </div>

          <div class="alert alert-success alert-dismissable fade in col-sm-8">



            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

            <strong>Success!</strong> <?php echo $this->session->flashdata('Sucess'); ?>.

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

          <div class="alert alert-success alert-dismissable fade in col-sm-8">



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

              <th>Name</th>

              <th>Description</th>

              <th>Category</th>

              <th>View images</th>

              <th>Delete</th>

            </tr>

          </thead>

          <tbody>

              <?php

            

              $i = 1;



              foreach ($temple as $row) {

                  ?>

                <tr>

                  <td><?php echo $i++; ?></td>

                  <td><?php echo $row['name']; ?></td>

                  <td><?php echo $row['description']; ?></td>

                  <td><?php echo $row['category_name']; ?></td>
                   <td><a href="<?php echo base_url(); ?>AdminHome/viewmultpleimages/<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger">View images</button></a></td>

            
                  <td><a href="<?php echo base_url(); ?>AdminHome/DeleteimagesGallery/<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>



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