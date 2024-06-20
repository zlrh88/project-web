<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Album example</h1>
        <p class="lead text-body-secondary">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-body-tertiary">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php foreach($menu as $key => $m):?>
        <div class="col">
          <div class="card shadow-sm">
            <img src="<?= base_url('uploads/' . $m['image'])?>" alt="" srcset="">
            <div class="card-body">
              <h5 class="card-title"><?=$m['judul']?></h5>
                <p class="mb-2">
                          <?php foreach($users as $key => $user):
                            if($user['id'] == $m['id_user']):
                            ?>
                           <small>
                             by : 
                            <a href="/posts?author={{ $post->author->username }}" class="text-decorations"><?=$user['username']?> </a> 
                            in 
                            <a href="/posts?category={{ $post->category->slug}}" class="text-decoration-none"><?=$m['kategori']?></a>
                            </small>
                            </p>
                            
                            <p class="card-text"><?=$m['excerpt']?></p>

                        <a href="<?=base_url('menu/show/' . $m['id'] . '/' . $user['id---'] )?>" class="btn btn-primary">Read more</a>
                            <?php  endif;
                            endforeach;
                            
                            ?>
              </div>
          </div>
        </div>
        <?php endforeach;?>
      </div>
    </div>
  </div>