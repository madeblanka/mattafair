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
              <form action="<?php echo site_url('image/adminsaveimage/') ?>" method="post"  enctype="multipart/form-data">
                <div class="card-body">

                    <div class="form-group">                        
                    <label for="exampleInputEmail1">Package</label>
                        <select name="id_package" id="idroom" class="form-control select2" style="width: 100%;">
                            <option selected value="0">-</option>
                            <?php foreach ($package as $p): ?>
                            <option value="<?php echo $p->id_package?>" required><?php echo $p->hotel?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">                        
                    <label for="exampleInputEmail1">Room Name</label>
                        <select name="id_room" id="idroom" class="form-control select2" style="width: 100%;">
                            <option selected value="0">-</option>
                            <?php foreach ($room as $r): ?>
                            <option value="<?php echo $r->id_room?>" required><?php echo $r->name?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                  
                    <div class="form-group">                        
                    <label for="exampleInputEmail1">Tour Name</label>
                        <select name="id_tour" id="idTour" class="form-control select2" style="width: 100%;">
                            <option selected value="0">-</option>
                            <?php foreach ($tour as $t): ?>
                            <option value="<?php echo $t->id_tour?>" required><?php echo $t->name?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">                        
                    <label for="exampleInputEmail1">Hotel Tour Name</label>
                        <select name="id_hoteltour" id="idTour" class="form-control select2" style="width: 100%;">
                            <option selected value="0">-</option>
                            <?php foreach ($hoteltour as $ht): ?>
                            <option value="<?php echo $ht->id_hoteltour?>" required><?php echo $ht->name?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image1" >
                        
                      </div>
                    </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image2" >
                        
                      </div>
                    </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image3" >
                        
                      </div>
                    </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image4" >
                        
                      </div>
                    </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image5" >
                        
                      </div>
                    </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image6" >
                        
                      </div>
                    </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image7" >
                        
                      </div>
                    </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image8" >
                        
                      </div>
                    </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image9" >
                        
                      </div>
                    </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image10" >
                        
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