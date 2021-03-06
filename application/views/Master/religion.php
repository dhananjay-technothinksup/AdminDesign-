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
            <h4>Religion</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <?php include('master_menu.php') ?>
          </div>
          <div class="col-md-9">
            <!-- Religion -->
            <div class="row">
              <div class="col-md-5">
                <div class="card card-default">
                  <div class="card-header">
                    <h5 class="card-title f-16"><?php if(isset($religion_info)){ echo 'Update'; } else{ echo 'Add New'; } ?> Religion</h5>
                  </div>
                  <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                    <div class="card-body row">
                      <div class="form-group col-md-12">
                        <label>Religion</label>
                        <input type="text" class="form-control form-control-sm" name="religion_name" id="religion_name" value="<?php if(isset($religion_info)){ echo $religion_info['religion_name']; } ?>" placeholder="Religion" required>
                      </div>
                      <div class="form-group col-md-12 text-right m-0">
                        <?php if(isset($religion_info)){ ?>
                          <button id="btn_save" type="submit" class="btn btn-sm btn-primary px-4">Update</button>
                        <?php } else{ ?>
                          <button id="btn_save" type="submit" class="btn btn-sm btn-success px-4">Save</button>
                        <?php } ?>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-md-7">
                <div class="card card-default">
                  <div class="card-header">
                    <h5 class="card-title f-16">List All Religion</h5>
                  </div>
                  <div class="card-body pt-0">
                    <table id="example1" class="table table-striped">
                      <thead>
                      <tr>
                        <th style="display:none;">#</th>
                        <th>Religion</th>
                        <th class="wt_50">Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php $i=0; foreach ($religion_list as $list) { $i++; ?>
                          <tr>
                            <td style="display:none;"><?php echo $i; ?></td>
                            <td><?php echo $list->religion_name; ?></td>
                            <td>
                              <div class="btn-group">
                                <a href="<?php echo base_url(); ?>Master/edit_religion/<?php echo $list->religion_id; ?>" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></a>
                                <a href="<?php echo base_url(); ?>Master/delete_religion/<?php echo $list->religion_id; ?>" class="btn btn-sm btn-default" onclick="return confirm('Delete this Religion');" ><i class="fa fa-trash text-danger"></i></a>
                              </div>
                            </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- // Religion -->
          </div>
        </div>
      </div>
    </section>
  </div>

</body>
</html>
