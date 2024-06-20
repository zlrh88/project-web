<div class="row">
    <div class="col-md-3">
        <div class="list-group">
            <a href="<?= base_url('dashboard');?>" class="list-group-item list-group-item-action "><i class="fa fa-tachometer me-2" aria-hidden="true"></i>Dashboard</a>
            <a href="<?= base_url('dashboard/menu');?>" class="list-group-item list-group-item-action active"><i class="fa fa-book me-2" aria-hidden="true"></i>
            Menu</a>
           
        </div>
    </div>
    <div class="col-md-9">
    <?php if($this->session->flashdata('msg')): ?>
        <div class="alert alert-success"><?= $this->session->flashdata('msg'); ?></div>
    <?php endif; ?>
        <h1>Selamat Datang <?=$user['username']?> !!!</h1>
        <div class="table-responsive col-lg-8 mt-4">
        <a href="<?=base_url('dashboard/create')?>" class="btn btn-primary mb-3">Buat menu baru</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody> 
            <tr>
                <?php foreach($menu as $key => $m): ?>
                <td><?= $key + 1 ?></td>
                <td><?= $m['judul']?></td>
                <td><?= $m['kategori']?></td>
                <td>
                    <a href="<?= base_url('dashboard/read')?>" class="badge bg-info"> <span data-feather="eye"></span></a>

                  
                    <a href="<?= base_url('dashboard/edit/')?><?=$m['id']?>" class="badge bg-warning"> <span data-feather="edit"></span></a>


                    <a href="<?= base_url('dashboard/delete/')?><?=$m['id'] ?>" class="badge bg-danger" onclick="return confirmDelete();">  <span data-feather="x-circle"></span></a>
                    
                    
                </td>
            </tr> 
            <?php endforeach;?>
          </tbody>
        </table>
    </div>
    </div>
</div>

<script>
function confirmDelete() {
    return confirm("Are you sure you want to delete this item?");
}
</script>