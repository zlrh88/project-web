<div class="row">
    <div class="col-md-3">
        <div class="list-group">
            <a href="<?= base_url('dashboard');?>" class="list-group-item list-group-item-action active"><i class="fa fa-tachometer me-2" aria-hidden="true"></i>Dashboard</a>
            <a href="<?= base_url('dashboard/menu');?>" class="list-group-item list-group-item-action"><i class="fa fa-book me-2" aria-hidden="true"></i>
            Menu</a>
           
        </div>
    </div>
    <div class="col-md-9">
    <div class="container">
    <h1>Daftar Pengguna</h1>
    <a href="<?= site_url('dashboard/create') ?>" class="btn btn-primary">Tambah Pengguna</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td><?= $user['id']; ?></td>
                <td><?= $user['username']; ?></td>
                <td>
                    <a href="<?= site_url('dashboard/view/'.$user['id']) ?>" class="btn btn-info">Lihat</a>
                    <a href="<?= site_url('dashboard/edit/'.$user['id']) ?>" class="btn btn-warning">Edit</a>
                    <a href="<?= site_url('dashboard/delete/'.$user['id']) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
                </td>
            </tr>
    
        </tbody>
    </table>
</div>
    </div>
</div>