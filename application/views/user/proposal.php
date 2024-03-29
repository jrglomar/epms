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
                  <div class="card-header card-header-primary">
                    <div class="d-flex justify-content-between">
                      <h3 class="card-title pull-left">Project Proposal</h3>
                      <button data-toggle="modal" data-target="#newProjectModal" data-dismiss="modal"
                        type="submit" class="btn btn-success pull-right"><i class="material-icons">add</i> New Project
                      </button>  
                    </div>
                    <p class="card-category"> List of Project Proposal</p>
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
                          <td><span class="badge badge-secondary">Pending</span></td>
                          <td>
                            <button class="btn btn-sm btn-info btnViewProject"  style="padding:5px"><i class="material-icons">visibility</i></button>
                            <button class="btn btn-sm btn-warning btnEditProject" style="padding:5px"><i class="material-icons">edit</i></button>
                            <button class="btn btn-sm btn-danger btnDeleteProject" style="padding:5px"><i class="material-icons">delete</i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>Test Title 2</td>
                          <td> <img src="<?php echo base_url('resources/images/avatar_0120.jpg'); ?>" width="30" height="30" style="border-radius: 50%;" />
                            Test Implementer 2
                          </td>
                          <td>Test Target Group 2</td>
                          <td>Febuary 26, 2021</td>
                          <td><span class="badge badge-info">In Process</span></td>
                          <td>
                            <button class="btn btn-sm btn-info btnViewProject"  style="padding:5px"><i class="material-icons">visibility</i></button>
                            <button class="btn btn-sm btn-warning btnEditProject" style="padding:5px"><i class="material-icons">edit</i></button>
                            <button class="btn btn-sm btn-danger btnDeleteProject" style="padding:5px"><i class="material-icons">delete</i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>Test Title 3</td>
                          <td> <img src="<?php echo base_url('resources/images/avatar_0120.jpg'); ?>" width="30" height="30" style="border-radius: 50%;" />
                            Test Implementer 3
                          </td>
                          <td>Test Target Group 3</td>
                          <td>March 30, 2021</td>
                          <td><span class="badge badge-secondary">Pending</span></td>
                          <td>
                            <button class="btn btn-sm btn-info btnViewProject"  style="padding:5px"><i class="material-icons">visibility</i></button>
                            <button class="btn btn-sm btn-warning btnEditProject" style="padding:5px"><i class="material-icons">edit</i></button>
                            <button class="btn btn-sm btn-danger btnDeleteProject" style="padding:5px"><i class="material-icons">delete</i></button>
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
  <!-- ADD NEW PROJECT  -->
  <div id="newProjectModal" class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="newProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#4caf50">
              <p class="card-category" style="color:white">Creating New Project Proposal</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form id="newProjectForm" name="newProjectForm">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Title</label>
                          <input id="projectTitle" name="projectTitle" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Implementer</label>
                          <select id="projectStatus" class="form-control">
                                <option selected value=""></option>
                                <option value="Pending">Test Implementer</option>
                                <option value="In Process">Test Implementer 2</option>
                                <option value="Approved">Test Implementer 3</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Target Group</label>
                          <input id="projectTargetGroup" name="projectTargetGroup" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cooperating Agencies (Optional)</label>
                          <input id="projectCooperatingAgencies" name="projectCooperatingAgencies" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label">Timeframe</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label">Date Start</label>
                          <input id="projectDateStart" name="projectDateStart" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label">Date End</label>
                          <input id="projectDateEnd" name="projectDateEnd" type="date" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-group">
                            <label class="bmd-label-floating">Impact Statement</label>
                            <textarea id="projectImpactStatement" name="projectImpactStatement" class="form-control" rows="8"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input id="btnNewProjectModal" type="submit" value="submit" class="btn btn-success">
            </div>
            </form>
          </div>
        </div>
      </div>
    <!-- END OF ADD NEW PROJECT -->

    <!-- Edit project  -->
    <div id="editprojectModal" class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="editprojectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#ff9800">
              <p class="card-category" style="color:white">Updating Project</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form id="editprojectForm" name="editprojectForm">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label">Title</label>
                          <input id="editprojectTitle" name="editprojectTitle" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label">Implementer</label>
                          <input id="editprojectImplementer" name="editprojectImplementer" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label">Target Group</label>
                          <input id="editprojectTargetGroup" name="editprojectTargetGroup" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label">Cooperating Agencies (Optional)</label>
                          <input id="editprojectCooperatingAgencies" name="editprojectCooperatingAgencies" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label">Timeframe</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label">Date Start</label>
                          <input id="editprojectDateStart" name="editprojectDateStart" type="date" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label">Date End</label>
                          <input id="editprojectDateEnd" name="editprojectDateEnd" type="date" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-group">
                            <label class="label">Impact Statement</label>
                            <textarea id="editprojectImpactStatement" name="editprojectImpactStatement" class="form-control" rows="8"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-group">
                            <label class="bmd-label-floating">Document</label>
                            <button data-toggle="modal" data-target="#docuModal" data-dismiss="modal"
                              type="submit" class="btn btn-primary pull-right"><i class="material-icons">add</i> View Document
                            </button>  
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input id="btnUpdateProject" type="submit" value="update" class="btn btn-warning">
            </div>
            </form>
          </div>
        </div>
      </div>
    <!-- END OF EDIT PROJECT -->

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="docuModal" width="2000" height="1000" tabindex="-1" role="dialog" aria-labelledby="docuModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            
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
        window.location.href = '<?php echo base_url()?>'+'user/proposal/view';

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