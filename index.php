<div classs="container">
<legend>Data Jurusan</legend>
<a class="btn btn-primary" href="<?= base_url('jurusan/tambah'); ?>" role="button">Tambah Jurusan</a>
<?php if( $this->session->flashdata('flash') ) : ?>
  <div class="alert alert-success alert-dismissible fade show mt-2 mb-2" role="alert">
    Data jurusan <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
  </div>
<?php endif; ?>
  <form action="" method="post" class="d-flex mb-2 mt-2" role="search">
    <input class="form-control me-2" type="text" placeholder="cari" aria-label="search" name="keyword" style="width : 500px;">
    <button class="btn btn-outline-success" type="submit">Cari</button>
  </form>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
      </tr>
    </thead>
    <tbody>
      <?php if( empty($jurusan) ) : ?>
        <tr>
          <td colspan=2>
            <div class="alert alert-danger" role="alert">
              Data Jurusan Tidak Ditemukan
            </div>
          </td>
        </tr>
      <?php endif; ?>
      <?php $i=1; ?>
      <?php foreach( $jurusan as $jur ) : ?>
        <tr>
          <th scope="row"><?= $i++; ?></th>
          <td><?= $jur['Jurusan']; ?></td>
          <td>
            <a href="<?= base_url('jurusan/ubah/'); ?><?= $jur['Id']; ?>" class="badge text-bg-warning">Ubah</a>
            <a href="<?= base_url('jurusan/hapus/'); ?><?= $jur['Id']; ?>" class="badge text-bg-danger" onclick="return confirm('yakin??');">Hapus</a>
          </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
</div>