

<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>

<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>



<script>

    $(document).ready(function () {
        $('#example').DataTable();
    });

</script>

<div id="page-wrapper">

  <div class="graphs">

    <h3 class="blank1">All Wallpapers</h3>

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
              <th>Category</th>
              <th>imges</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

              <?php

            

              $i = 1;



              foreach ($wallpapers as $row) {

                  ?>

                <tr>

                  <td><?php echo $i++; ?></td>
                  <td><?php if($row['category'] == '1'){ echo "Mobile"; }elseif($row['category'] == '2'){ echo "Desktop"; }?></td>

                  <td><img src="<?php echo base_url().$row['images']; ?>" height="100px" width="100px"></td>
                  <td>
                  <a href="<?php echo site_url('admin/Deletewallpaper/'.$row['id']); ?>" class ="btn btn-danger">Delete</a></td>
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