<div class="container mt-5 border border-4 border-dark rounded px-5 py-5">
    <div>
        <h2 class="text-center mb-5">Login</h2>
    </div>
    <div>
        <?php if($this->session->flashdata('msg')) :?>
            <div class="alert alert-danger"><?= $this->session->flashdata('msg');?></div>
        <?php endif; ?>
        <div class="container">
            <form action="<?= site_url('/login/auth')?>" method="post">
                <div class="form-group mb-2">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            
            <div class="mt-3">
                <p>Not Registered? <a href="<?= base_url('/register')?>">Register Now!</a></p>
            </div>
        </div>
    </div>
</div>