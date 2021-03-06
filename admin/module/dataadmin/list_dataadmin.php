
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Manajemen Admin</h4>
                  <div class="card-header-action">
                    <a href="adminweb.php?module=tambah_admin" class="btn btn-primary">Tambah admin<i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Id admin</th>
                        <th>Nama admin</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th>Action</th>
                      </tr>
                      <?php
                            include "../lib/config.php";
                            include "../lib/koneksi.php";
                            $kueriAdmin = mysqli_query($koneksi, "SELECT * FROM tbl_admin");
                            while($Amd=mysqli_fetch_array($kueriAdmin)){
                      ?>
                      <tr>
                        <td><?= $Amd['id_admin']; ?></td>
                        <td><?= $Amd['nama']; ?></td>
                        <td><?= $Amd['username']; ?></td>
                        <td><?= $Amd['password']; ?></td>
                        <td><?= $Amd['level']; ?></td>
                        <td>
                        <div class="btn-group">

                          <a href="<?= $admin_url; ?>adminweb.php?module=edit_admin&id_admin=<?= $Amd['id_admin']; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                          <a href="<?= $admin_url; ?>module/dataadmin/aksihapus.php?&id_admin=<?= $Amd['id_admin']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger"><i class="fa fa-power-off"></i></a>
                        </div>
                        </td>
                      </tr>
                      <?php
                      }
                      ?>
                
                    </table>
                  </div>
                  </div>
                </div>
                </div>
              </div>
            </section>
            </div>
        