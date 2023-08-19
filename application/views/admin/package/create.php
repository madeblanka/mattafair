<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("admin/_partials/head.php") ?>
<body class="hold-transition sidebar-mini layout-fixed">

  <?php $this->load->view("admin/_partials/sidebar.php") ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo site_url('package/adminsavepackage/') ?>" method="post"  enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">                        
                    <label for="exampleInputEmail1">Kategori </label>
                        <select name="kategori" id="kategori" class="form-control select2" style="width: 100%;">
                            <option value="Free and Easy">Free and Easy</option>
                            <option value="Bali Beautiful Package">Bali Beautiful Package</option>
                            <option value="Honeymoon Package">Honeymoon Package</option>
                            <option value="Combine Lovina">Combine Lovina</option>
                            <option value="Combine Ubud I">Combine Ubud I</option>
                            <option value="Combine Ubud II">Combine Ubud II</option>
                            <option value="Combine Ubud III">Combine Ubud III</option>
                        </select>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hotel Name</label>
                    <input type="text" name="hotel" class="form-control" id="exampleInputEmail1" placeholder="Enter Room Name">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php $this->load->view("admin/_partials/footer.php") ?>
</body>
</html>