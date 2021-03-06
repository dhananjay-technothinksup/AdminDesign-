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
            <h4>Custom Fields</h4>
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
                <h3 class="card-title">Add New Custom Field</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-sm btn-primary" data-card-widget="collapse">Add New</button>
                </div>
              </div>
              <!--  -->
                <div class="card-body p-0" style="display: none;">
                  <form class="input_form m-0" id="form_action" role="form" action="" method="post">
                    <div class="row px-3">
                      <div class="form-group col-md-3 select_sm">
                        <label>Modules</label>
                        <select class="form-control select2" name="custom_fields_modules" id="custom_fields_modules" data-placeholder="Select One">
                          <option value="">Select One</option>
                        </select>
                      </div>
                      <div class="form-group col-md-3">
                        <label>Name</label>
                        <input type="text" class="form-control form-control-sm" name="custom_fields_name" id="custom_fields_name" value="<?php if(isset($custom_fields)){ echo $custom_fields['custom_fields_name']; } ?>" placeholder="Name" required>
                      </div>
                      <div class="form-group col-md-3">
                        <label>Field Label</label>
                        <input type="text" class="form-control form-control-sm" name="custom_fields_label" id="custom_fields_label" value="<?php if(isset($custom_fields)){ echo $custom_fields['custom_fields_label']; } ?>" placeholder="Field Label" required>
                      </div>
                      <div class="form-group col-md-3">
                        <label>Priority</label>
                        <input type="text" class="form-control form-control-sm" name="custom_fields_priority" id="custom_fields_priority" value="<?php if(isset($custom_fields)){ echo $custom_fields['custom_fields_priority']; } ?>" placeholder="Priority" required>
                      </div>
                      <div class="form-group col-md-3 select_sm">
                        <label>Validation</label>
                        <select class="form-control select2" name="custom_fields_validation" id="custom_fields_validation" data-placeholder="Select One">
                          <option value="">Select One</option>
                        </select>
                      </div>
                      <div class="form-group col-md-3 select_sm">
                        <label>Field Type</label>
                        <select class="form-control select2" name="custom_fields_type" id="custom_fields_type" data-placeholder="Select One">
                          <option value="">Select One</option>
                        </select>
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
                    <th>Modules</th>
                    <th>Name</th>
                    <th>Field Label</th>
                    <th>Field Type</th>
                    <th>Validation</th>
                    <th>Priority</th>
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
