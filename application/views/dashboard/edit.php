<div class="row">
    <div class="col-md-3">
        <div class="list-group">
            <a href="<?= base_url('dashboard');?>" class="list-group-item list-group-item-action"><i class="fa fa-tachometer me-2" aria-hidden="true"></i>Dashboard</a>
            <a href="<?= base_url('dashboard/menu');?>" class="list-group-item list-group-item-action active"><i class="fa fa-book me-2" aria-hidden="true"></i>Menu</a>
        </div>
    </div>

    <div class="col-md-9">
        <h1>Edit Menu</h1>
        <?= form_open_multipart('dashboard/update/' . $menu['id']); ?>
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control <?= form_error('judul') ? 'is-invalid' : ''; ?>" id="judul" name="judul" required autofocus value="<?= set_value('judul', $menu['judul']); ?>">
            <div class="invalid-feedback">
                <?= form_error('judul'); ?>
            </div>
        </div>

        <div class="mb-3">
            <label for="excerpt" class="form-label">Excerpt</label>
            <input type="text" class="form-control <?= form_error('excerpt') ? 'is-invalid' : ''; ?>" id="excerpt" name="excerpt" required value="<?= set_value('excerpt', $menu['excerpt']); ?>">
            <div class="invalid-feedback">
                <?= form_error('excerpt'); ?>
            </div>
        </div>

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select" name="kategori">
                <?php foreach ($categories as $key => $category): ?>
                    <option value="<?= $category['nama']; ?>" <?= set_select('kategori', $category['nama'], $category['nama'] == $menu['kategori']); ?>><?= $category['nama']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control <?= form_error('image') ? 'is-invalid' : ''; ?>" type="file" id="image" name="image" onchange="previewImage()">
            <div class="invalid-feedback">
                <?= form_error('image'); ?>
            </div>
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <input id="body" type="hidden" name="body" value="<?= set_value('body', $menu['body']); ?>">
            <trix-editor input="body"></trix-editor>
            <div class="invalid-feedback">
                <?= form_error('body'); ?>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Update Menu</button>
        <?= form_close(); ?>
    </div>
</div>