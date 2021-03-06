<!DOCTYPE html>
<html>
<style media="screen">
  .dataTables_length{
    display: none !important;
  }
  .dataTables_filter{
    display: none !important;
  }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header pt-0 pb-2">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-left mt-2">
            <h4>Leave</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h5 class="card-title f-16"> </h5>
              </div>
              <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="col-md-12">
                    <div class="row">

                      <div class="form-group col-md-3">
                        <label>Date</label>
                        <input type="text" class="form-control form-control-sm" name="date" id="date" value="" placeholder="Date" required>
                      </div>
                      <div class="form-group col-md-3 select_sm">
                        <label>Company</label>
                        <select class="form-control select2" name="company" id="company" data-placeholder="Choose an Company">
                          <option value="">Choose an Company</option>
                        </select>
                      </div>
                      <div class="form-group col-md-3 select_sm">
                        <label>Employee</label>
                        <select class="form-control select2" name="employee" id="employee" data-placeholder="Choose an Employee">
                          <option value="">Choose an Employee</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2 text-right mt-4">
                        <button id="btn_save" type="submit" class="btn btn-sm btn-primary px-4 ">Get</button>
                      </div>
                      </div>
                    </div>


                </div>
              </form>
            </div>
          </div>



              <div class="col-md-12">
                <div class="card card-default" style="overflow:auto!important;">
                  <div class="card-header">
                    <h5 class="card-title f-16">Employee Timesheet </h5>
                  </div>
                  <div class="card-body pt-0">
                    <table id="example2" class="table table-striped">
                      <thead>
                      <tr>
                        <th style="display:none;">#</th>
                        <th>Employee</th>
                        <th>01 Wed</th>
                        <th>01 Wed</th>
                        <th>01 Wed</th>
                        <th>01 Wed</th>
                        <th>01 Wed</th>
                        <th>01 Wed</th>
                        <th>01 Wed</th>
                        <th>01 Wed</th>
                        <th>01 Wed</th>
                        <th>01 Wed</th>
                        <th>01 Wed</th>
                        <th>01 Wed</th>
                        <th>01 Wed</th>
                        <th>01 Wed</th>
                        <th>01 Wed</th>
                        <th>01 Wed</th>
                        <th>01 Wed</th>
                        <th>01 Wed</th>
                        <th class="wt_50">Action</th>
                      </tr>
                      </thead>
                      <tbody>

                          <tr>
                            <td style="display:none;"></td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>

                            <td>
                              <div class="btn-group">
                                <a href="<?php echo base_url(); ?>Master/edit_education_level/" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></a>
                                <a href="<?php echo base_url(); ?>Master/delete_education_level/" class="btn btn-sm btn-default" onclick="return confirm('Delete this Education Level');" ><i class="fa fa-trash text-danger"></i></a>
                              </div>
                            </td>
                          </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- // Education Level -->



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
