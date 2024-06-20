<div class="row">
    <div class="col-md-3">
        <div class="list-group">
            <a href="<?= base_url('dashboard');?>" class="list-group-item list-group-item-action"><i class="fa fa-tachometer me-2" aria-hidden="true"></i>Dashboard</a>
            <a href="<?= base_url('dashboard/menu');?>" class="list-group-item list-group-item-action active"><i class="fa fa-book me-2" aria-hidden="true"></i>Menu</a>
        </div>
    </div>

    <div class="col-md-9">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Buat menu baru</h1>
        </div>

        <?= form_open_multipart('dashboard/create'); ?>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control <?= form_error('title') ? 'is-invalid' : ''; ?>" id="title" name="title" required autofocus value="<?= set_value('title'); ?>">
                <div class="invalid-feedback">
                    <?= form_error('title'); ?>
                </div>
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Excerpt</label>
                <input type="text" class="form-control <?= form_error('slug') ? 'is-invalid' : ''; ?>" id="slug" name="excerpt" required value="<?= set_value('slug'); ?>">
                <div class="invalid-feedback">
                    <?= form_error('slug'); ?>
                </div>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category">
                    <?php foreach ($categories as $key => $category): ?>
                        <option value="<?= $category['nama']; ?>" <?= set_select('category_id', $category['id']); ?>><?= $category['nama']; ?></option>
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
                <input id="body" type="hidden" name="body" value="<?= set_value('body'); ?>">
                <trix-editor input="body"></trix-editor>
                <div class="invalid-feedback">
                    <?= form_error('body'); ?>
                </div>
               
            </div>

            <button type="submit" class="btn btn-primary mt-4">Buat menu</button>
        <?= form_close(); ?>
    </div>
</div>

