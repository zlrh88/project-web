<div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <article>
                    <h3><?=$menu['judul']?></h3>

                    <p>
                        By : 
                        <a href=""><?=$user['username']?></a> 
                    </p>
                    <p>
                        Kategori
                        :
                        <a href="">Kategori <?=$menu['kategori']?></a>
                    </p>

                    <?php if (!empty($menu['image'])): ?>
                        <div style="max-height: 350px; overflow: hidden;">
                            <img class="img-fluid mb-3" src="<?= base_url('uploads/' . $menu['image']); ?>" alt="<?= $menu['kategori']; ?>">
                        </div>
                    <?php else: ?>
                        <img class="img-fluid mb-5" src="https://source.unsplash.com/1200x600?<?= $menu['kategori']; ?>" alt="<?= $menu['kategori']; ?>">
                    <?php endif; ?>

                    <p><?= $menu['body']; ?> </p>
                </article>
                
                <a href="<?= base_url('menu'); ?>">Kembali Menu</a>
            </div>
        </div>
    </div>