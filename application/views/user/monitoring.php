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
    <?php $this->load->view('includes/sidebar.php'); ?>
    
    <!-- MAIN CONTENT -->
    <div class="main-panel">

      <!-- NAVBAR -->
      <?php $this->load->view('includes/navbar.php'); ?>

      <!-- OPENING TAG OF CONTENT -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- END OF OPENING TAG OF CONTENT -->

            <!-- PROJECTS DATA TABLE -->
            <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-header-warning">
                    <div class="d-flex justify-content-between">
                      <h3 class="card-title pull-left">Project Monitoring</h3>
                    </div>
                    <p class="card-category">List of Projects</p>
                  </div>
                <div class="card-body">
                  <div class="table-responsive-data2">
                    <table id="projectsTable" class="table table-striped " style="width:100%">
                      <thead class=" text-sucess">
                          <th>Title</th>
                          <th>Implementer</th>
                          <th>Target Group</th>
                          <th>Date Start</th>
                          <th>Status</th>
                          <th>Action</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Test Title</td>
                          <td> <img src="<?php echo base_url('resources/images/avatar_0120.jpg'); ?>" width="30" height="30" style="border-radius: 50%;" />
                            Test Implementer
                          </td>
                          <td>Test Target Group</td>
                          <td>March 3, 2021</td>
                          <td><span class="badge badge-warning">Ongoing</span></td>
                          <td>
                            <button class="btn btn-sm btn-info btnViewProject"  style="padding:5px"><i class="material-icons">visibility</i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>Test Title 2</td>
                          <td> <img src="<?php echo base_url('resources/images/avatar_0120.jpg'); ?>" width="30" height="30" style="border-radius: 50%;" />
                            Test Implementer 2
                          </td>
                          <td>Test Target Group 2</td>
                          <td>Febuary 26, 2021</td>
                          <td><span class="badge badge-success">Approved</span></td>
                          <td>
                            <button class="btn btn-sm btn-info btnViewProject"  style="padding:5px"><i class="material-icons">visibility</i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>Test Title 3</td>
                          <td> <img src="<?php echo base_url('resources/images/avatar_0120.jpg'); ?>" width="30" height="30" style="border-radius: 50%;" />
                            Test Implementer 3
                          </td>
                          <td>Test Target Group 3</td>
                          <td>March 30, 2021</td>
                          <td><span class="badge badge-warning">Ongoing</span></td>
                          <td>
                            <button class="btn btn-sm btn-info btnViewProject"  style="padding:5px"><i class="material-icons">visibility</i></button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
             <!-- END OF PROJECTS DATA TABLE -->

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

</body>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

<!-- ADDED FUNCTIONS SCRIPTS -->
<?php $this->load->view('includes/added_js_functions.php')?>

<script>


  $(document).ready(function(){    

    function loadtable(){
        projectsTable = $('#projectsTable').DataTable({
          
          
          
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": true,
          "bInfo": false,
          "bAutoWidth": false
          
        })
        
    }

    loadtable()


    // Creating new project
    $('#newProjectForm').on('submit', function(e){
        e.preventDefault();
        $("#btnNewProjectModal").attr("disabled", true);

        // Confirmation
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, submit it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $("#btnNewProjectModal").attr("disabled", false);
            $('#newProjectModal').modal('hide');
            showNotify('add_alert', 'You successfully submitted a proposal project', 'success', 'top', 'right');
          }
          else{
            $("#btnNewProjectModal").attr("disabled", false);
          }
          $("#btnNewProjectModal").attr("disabled", false);
        })
        // End of Confirmation

    });
    // End of Creating new project

    // View project
    $('.btnViewProject').on('click', function(){
        window.location.href = '<?php echo base_url()?>'+'user/monitoring/view';

    });
    // End of View project
    
    // Edit project
    $('.btnEditProject').on('click', function(){
      $('[name="editprojectTitle"').val('Test Title');
      $('[name="editprojectImplementer"').val('Test Implementer');
      $('[name="editprojectTargetGroup"').val('Test Target Group');
      $('[name="editprojectCooperatingAgencies"').val('Test Cooperating Agencies');
      $('[name="editprojectDateStart"').val('2021-02-06');
      $('[name="editprojectDateEnd"').val('2021-03-23');
      $('[name="editprojectImpactStatement"').val('Test Impact Statement');
      $('#editprojectModal').modal('show');
    })
    // End of edit project

    // Update Project
    $('#editprojectForm').on('submit', function(e){
      e.preventDefault();
        $("#btnUpdateProject").attr("disabled", true);

        // Confirmation
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, update it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $("#btnUpdateProject").attr("disabled", false);
            $('#editprojectModal').modal('hide');
            showNotify('system_update_alt', 'You successfully update your project', 'warning', 'top', 'right');
          }
          else{
            $("#btnUpdateProject").attr("disabled", false);
          }
          $("#btnUpdateProject").attr("disabled", false);
        })
        // End of Confirmation
    })
    // End of update project

    // Delete project
    $('.btnDeleteProject').on('click', function(){
      // Confirmation
      Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'error',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            showNotify('delete', 'You successfully deleted your project', 'danger', 'top', 'right');
          }
        })
        // End of Confirmation
    })
    // End of delete project
    
  });
</script>

</html>