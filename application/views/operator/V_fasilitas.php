
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="content-header">

        <div class="row mb-2">

          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Fasilitas</h1>
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"></a><i class="fa fa-plus"></i> Tambah Data</button></a>
          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
          <div class="container-fluid">
          <table id="example2" class="table table-bordered table-striped">
          <tr>
              <th>no</th>
              <th>Nama Fasilitas</th>
              <th>Deskripsi Fasilitas</th>
              <th>BY</th>
              <th>Foto Fasilitas</th>
             
              <th colspan="2">Aksi</th>
          </tr>
            <?php
          $no = 1;
          foreach ($data_fasilitas as $fasilitas) {
            ?>
            <tr>
              <td><?php echo $no++?> </td>
              <td><?php echo $fasilitas->nama_fasilitas ?></td>
              <td><?php echo $fasilitas->deskripsi_fasilitas?> </td>
              <td><?php echo $fasilitas->by_fasilitas?></td>
              <td>
                <img src="<?php echo base_url('upload/fasilitas/'.$fasilitas->foto_fasilitas) ?>"class ="img img-responsive img-thumbnail " width = "60">
              </td>
              <td><?php echo anchor('operator/O_fasilitas/edit/'.$fasilitas->id_fasilitas,'<div class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i></div>')?></td>
              <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('operator/O_perbank/hapus/'.$fasilitas->id_fasilitas, '<div class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></div>' ) ?>
              </td>
            </tr>
          <?php } ?> 
        </table>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Form Fasilitas</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url(). 'operator/O_fasilitas/tambahFasilitas';?>" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nama Fasilitas </label>
            <input type="text" name="nama_fasilitas" placeholder="Nama Fasilitas" class="form-control" required="required">
          </div>
          <div class="form-group">
          <label class="form-label">Deskripsi Fasilitas</label>
          <textarea name="deskripsi_fasilitas" rows="2" class="form-control" required></textarea>
        </div>
          <div class="form-group">
            <label>BY</label>
            <input type="text" name="by_fasilitas" placeholder="Oleh" class="form-control" required="required">
          </div>
          <div>
            <label>Foto Fasilitas</label>
            <input type="file" name="foto_fasilitas" placeholder="Pilih Logo" class="form-control">
          </div>
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        </div>
      </div>
    </div>
  </div>
   
    <!-- /.content -->
  </div>
