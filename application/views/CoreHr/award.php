<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header pt-0 pb-2">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-left mt-2">
            <h4>Awards</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card collapsed-card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Add New Award</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-sm btn-primary" data-card-widget="collapse">Add New</button>
                </div>
              </div>
              <!--  -->
                <div class="card-body p-0" style="display: none;">
                  <form class="input_form m-0" id="form_action" role="form" action="" method="post">
                    <div class="row px-3">
                      <div class="form-group col-md-6 select_sm">
                        <div class="row">
                          <div class="form-group col-md-12 select_sm">
                            <label>Company</label>
                            <select class="form-control select2" name="company" id="company" data-placeholder="Company">
                              <option value="">Company</option>
                            </select>
                          </div>

                          <div class="form-group col-md-12 select_sm">
                            <label>Employee</label>
                            <select class="form-control select2" name="employee" id="employee" data-placeholder="Choose an Employee">
                              <option value="">Choose an Employee</option>
                            </select>
                          </div>

                          <div class="form-group col-md-6 select_sm">
                            <label>Award Type</label>
                            <select class="form-control select2" name="award_type" id="award_type" data-placeholder="Award Type">
                              <option value=""> Award Type</option>
                            </select>
                          </div>

                          <div class="form-group col-md-6 select_sm">
                            <label>Date</label>
                            <input type="text" class="form-control form-control-sm" name="date" id="date"  placeholder="Date" required>
                          </div>


                          <div class="form-group col-md-6 select_sm">
                            <label>Gift</label>
                            <input type="text" class="form-control form-control-sm" name="gift" id="gift"  placeholder="Gift" required>
                          </div>

                          <div class="form-group col-md-6 select_sm">
                            <label>Cash</label>
                            <input type="text" class="form-control form-control-sm" name="cash" id="cash"  placeholder="Cash" required>
                          </div>

                        </div>
                      </div>

                      <div class="form-group col-md-6 select_sm">
                        <div class="row">
                          <div class="form-group col-md-12 select_sm">
                            <label>Discription</label>
                            <textarea class="form-control" name="name" rows="4" cols="85"></textarea>
                            </div>

                            <div class="form-group col-md-12 select_sm">
                              <label>Month & Year</label>
                              <input type="text" class="form-control form-control-sm" name="month_year" id="month_year"  placeholder="Month & Year" required>
                            </div>

                            <div class="form-group col-md-12 select_sm">
                              <label>Award Photo</label>
                              <input type="file" name="" value="">
                            </div>

                        </div>
                      </div>

                      <div class="form-group col-md-12 select_sm">
                        <label>Award Information</label>
                        <textarea class="form-control" name="award_info" rows="4" cols="85"></textarea>
                        </div>

                    </div>
                    <div class="card-footer clearfix" style="display: block;">
                      <button class="btn btn-sm btn-primary float-right px-3">Save</button>
                    </div>
                  </form>
                </div>
            </div>
          </div>


          <div class="col-md-12">
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">List All Custom Fields</h3>
              </div>
              <div class="card-body p-2">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="wt_50">Action</th>
                    <th>Award Name</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Gift</th>
                    <th>Month & Year</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></button>
                          <button type="button" class="btn btn-sm btn-default" onclick="return confirm('Delete this Party');"><i class="fa fa-trash text-danger"></i></button>
                        </div>
                      </td>
                      <td>asd</td>
                      <td>asd</td>
                      <td>asd</td>
                      <td>asd</td>
                      <td>asd</td>                    
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </div>

</body>
</html>
<script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
<script type="text/javascript">
  <?php if($this->session->flashdata('save_success')){ ?>
    $(document).ready(function(){
      toastr.success('Saved successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('update_success')){ ?>
    $(document).ready(function(){
      toastr.info('Updated successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('delete_success')){ ?>
    $(document).ready(function(){
      toastr.error('Deleted successfully');
    });
  <?php } ?>
</script>
