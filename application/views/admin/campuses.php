<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<!-- HEAD TAG -->
<?php $this->load->view('includes/head.php'); ?>

<body class="">

  <!-- WRAPPER -->
  <div class="wrapper ">

    <!-- SIDEBAR -->
    <?php $this->load->view('includes/admin/sidebar.php'); ?>
    
    <!-- MAIN CONTENT -->
    <div class="main-panel">

      <!-- NAVBAR -->
      <?php $this->load->view('includes/navbar.php'); ?>

      <!-- OPENING TAG OF CONTENT -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- END OF OPENING TAG OF CONTENT -->

            <!-- CAMPUSESS DATA TABLE -->
            <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-header-primary">
                    <div class="d-flex justify-content-between">
                      <h3 class="card-title pull-left">Campuses</h3>
                      <button data-toggle="modal" data-target="#newCampusesModal" data-dismiss="modal"
                        type="submit" class="btn btn-success pull-right"><i class="material-icons">add</i> Add Campus
                      </button>  
                    </div>
                    <p class="card-category"> List of Campuses</p>
                  </div>
                <div class="card-body">
                  <div class="table-responsive-data2">
                    <table id="campusessTable" class="table table-striped " style="width:100%">
                      <thead class=" text-sucess">
                          <th>ID</th>
                          <th>Name</th>
                          <th>Action</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td> <img src="<?php echo base_url('resources/images/avatar_0120.jpg'); ?>" width="30" height="30" style="border-radius: 50%;" />
                            Test
                          </td>
                          <td>
                            <!-- <button class="btn btn-sm btn-info btnViewCampuses"  style="padding:5px"><i class="material-icons">visibility</i></button> -->
                            <button class="btn btn-sm btn-warning btnEditCampuses" style="padding:5px"><i class="material-icons">edit</i></button>
                            <button class="btn btn-sm btn-danger btnDeleteCampuses" style="padding:5px"><i class="material-icons">delete</i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td> <img src="<?php echo base_url('resources/images/avatar_0120.jpg'); ?>" width="30" height="30" style="border-radius: 50%;" />
                            Test 2
                          </td>
                          <td>
                            <!-- <button class="btn btn-sm btn-info btnViewCampuses"  style="padding:5px"><i class="material-icons">visibility</i></button> -->
                            <button class="btn btn-sm btn-warning btnEditCampuses" style="padding:5px"><i class="material-icons">edit</i></button>
                            <button class="btn btn-sm btn-danger btnDeleteCampuses" style="padding:5px"><i class="material-icons">delete</i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td> <img src="<?php echo base_url('resources/images/avatar_0120.jpg'); ?>" width="30" height="30" style="border-radius: 50%;" />
                            Test 3
                          </td>
                          <td>
                            <!-- <button class="btn btn-sm btn-info btnViewCampuses"  style="padding:5px"><i class="material-icons">visibility</i></button>-->
                            <button class="btn btn-sm btn-warning btnEditCampuses" style="padding:5px"><i class="material-icons">edit</i></button>
                            <button class="btn btn-sm btn-danger btnDeleteCampuses" style="padding:5px"><i class="material-icons">delete</i></button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
             <!-- END OF CAMPUSESS DATA TABLE -->

            <!-- CLOSING TAG OF CONTENT -->
          </div>
        </div>
      </div>
      <!-- END OF CLOSING TAG OF CONTENT -->
      
      <!-- FOOTER -->

    </div>
    <!-- END OF MAIN CONTENT -->

  </div>
  <!-- END OF WRAPPER -->

  <!-- FIXED PLUGINS -->
  
  <!-- FIXED PLUGINS -->
  <?php $this->load->view('includes/core_js_files.php')?>
  
  <!-- MODALS -->
  <!-- ADD NEW CAMPUSES  -->
  <div id="newCampusesModal" class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="newCampusesModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#4caf50">
              <p class="card-category" style="color:white">Adding New Campus</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form id="newCampusesForm" name="newCampusesForm">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name of Campus</label>
                          <input id="campusName" name="campusName" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
            </div>     
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input id="btnNewCampusesModal" type="submit" value="submit" class="btn btn-success">
            </div>
            </form>
          </div>
        </div>
      </div>
    <!-- END OF ADD NEW CAMPUSES -->

    <!-- Edit campuses  -->
    <div id="editcampusesModal" class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="editcampusesModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#ff9800">
              <p class="card-category" style="color:white">Updating Campus</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form id="editcampusesForm" name="editcampusesForm">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label">Name of Campus</label>
                          <input id="editcampusName" name="editcampusName" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input id="btnUpdateCampuses" type="submit" value="update" class="btn btn-warning">
            </div>
            </form>
          </div>
        </div>
      </div>
    <!-- END OF EDIT CAMPUSES -->

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="docuModal" width="2000" height="1000" tabindex="-1" role="dialog" aria-labelledby="docuModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <iframe id="docu" width="2000" height="1000" src="<?php echo base_url()?>resources/files/test.pdf"></iframe>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    

</body>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

<!-- ADDED FUNCTIONS SCRIPTS -->
<?php $this->load->view('includes/added_js_functions.php')?>

<script>


  $(document).ready(function(){    

    function loadtable(){
        campusessTable = $('#campusessTable').DataTable({
          
          
          
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": true,
          "bInfo": false,
          "bAutoWidth": false
          
        })
        
    }

    loadtable()


    // Creating new campuses
    $('#newCampusesForm').on('submit', function(e){
        e.preventDefault();
        $("#btnNewCampusesModal").attr("disabled", true);

        // Confirmation
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, submit it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $("#btnNewCampusesModal").attr("disabled", false);
            $('#newCampusesModal').modal('hide');
            showNotify('add_alert', 'You successfully submitted a proposal campuses', 'success', 'top', 'right');
          }
          else{
            $("#btnNewCampusesModal").attr("disabled", false);
          }
          $("#btnNewCampusesModal").attr("disabled", false);
        })
        // End of Confirmation

    });
    // End of Creating new campuses

    // View campuses
    $('.btnViewCampuses').on('click', function(){
        window.location.href = '<?php echo base_url()?>'+'user/proposal/view';

    });
    // End of View campuses
    
    // Edit campuses
    $('.btnEditCampuses').on('click', function(){
      $('[name="editcampusesTitle"').val('Test Title');
      $('[name="editcampusesImplementer"').val('Test Implementer');
      $('[name="editcampusesTargetGroup"').val('Test Target Group');
      $('[name="editcampusesCooperatingAgencies"').val('Test Cooperating Agencies');
      $('[name="editcampusesDateStart"').val('2021-02-06');
      $('[name="editcampusesDateEnd"').val('2021-03-23');
      $('[name="editcampusesImpactStatement"').val('Test Impact Statement');
      $('#editcampusesModal').modal('show');
    })
    // End of edit campuses

    // Update Campuses
    $('#editcampusesForm').on('submit', function(e){
      e.preventDefault();
        $("#btnUpdateCampuses").attr("disabled", true);

        // Confirmation
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, update it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $("#btnUpdateCampuses").attr("disabled", false);
            $('#editcampusesModal').modal('hide');
            showNotify('system_update_alt', 'You successfully update your campuses', 'warning', 'top', 'right');
          }
          else{
            $("#btnUpdateCampuses").attr("disabled", false);
          }
          $("#btnUpdateCampuses").attr("disabled", false);
        })
        // End of Confirmation
    })
    // End of update campuses

    // Delete campuses
    $('.btnDeleteCampuses').on('click', function(){
      // Confirmation
      Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'error',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            showNotify('delete', 'You successfully deleted your campuses', 'danger', 'top', 'right');
          }
        })
        // End of Confirmation
    })
    // End of delete campuses
    
  });
</script>

</html>