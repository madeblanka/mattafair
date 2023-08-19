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
              <form action="<?php echo site_url('threeday2n/adminsavethreeday2n/') ?>" method="post"  enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">                        
                    <label for="exampleInputEmail1">Hotel Name</label>
                        <select name="id_package" id="idhotel" class="form-control select2" style="width: 100%;">
                            <?php foreach ($package as $p): ?>
                            <option value="<?php echo $p->id_package?>" required><?php echo $p->hotel?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                  
                    <div class="form-group">
                    <label for="exampleInputEmail1">2 Pax</label>
                    <input type="int" name="a" class="form-control" id="exampleInputEmail1" placeholder="2 - 4 Pax">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">5 Pax</label>
                    <input type="text" name="b" class="form-control" id="exampleInputEmail1" placeholder="5 - 8 Pax">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">9 Pax</label>
                    <input type="number" name="c" class="form-control" id="exampleInputEmail1" placeholder="9 - 12 Pax">
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