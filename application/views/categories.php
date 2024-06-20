<div class="container">
    
    <h1 class="my-4">Menu Categories : </h1>
    </div>

<div class="container">
    <div class="row">
            <div class="col-md-4">
                <a href="<?=base_url('menu/show_by_category/' .  $kategori[0]['nama'])?>">
                    <div class="card bg-dark text-white">
                        <img src="<?=base_url('/assets/img/coffee.jpg')?>" class="card-img d-block w-100" height="217">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)"><?=$kategori[0]['nama']?></h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="<?=base_url('menu/show_by_category/' .  $kategori[1]['nama'])?>">
                    <div class="card bg-dark text-white">
                        <img src="<?=base_url('/assets/img/others.jpeg')?>" class="card-img" height="217">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)"><?=$kategori[1]['nama']?></h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="<?=base_url('menu/show_by_category/' .  $kategori[2]['nama'])?>">
                    <div class="card bg-dark text-white">
                        <img src="<?=base_url('/assets/img/makanan.jpeg')?>" class="card-img" height="217">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)"><?=$kategori[2]['nama']?></h5>
                        </div>
                    </div>
                </a>
            </div>
    </div>
</div>