<div class="container mt-5 border border-4 border-dark rounded px-5 py-5">
   <div>
        <h2 class="text-center mb-5">Register</h2>
   </div>
   <div>
   <div>
        <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
                <?= $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>
    </div>
   <div class="container">

    <?= form_open('register/sign_up'); ?>
        <div class="form-group mb-2">
            <label for="name">Nama Lengkap</label>
            <input type="text" class="form-control <?= form_error('name') ? 'is-invalid' : ''; ?>" id="name" name="name" value="<?= set_value('name'); ?>">
            <div class="invalid-feedback">
                <?= form_error('name'); ?>
            </div>
        </div>

        <div class="form-group mb-2">
            <label for="username">Username</label>
            <input type="text" class="form-control <?= form_error('username') ? 'is-invalid' : ''; ?>" id="username" name="username" value="<?= set_value('username'); ?>">
            <div class="invalid-feedback">
                <?= form_error('username'); ?>
            </div>
        </div>

        <div class="form-group mb-2">
            <label for="email">Alamat Email</label>
            <input type="email" class="form-control <?= form_error('email') ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= set_value('email'); ?>">
            <div class="invalid-feedback">
                <?= form_error('email'); ?>
            </div>
        </div>

        <div class="form-group mb-2">
            <label for="password">Password</label>
            <input type="password" class="form-control <?= form_error('password') ? 'is-invalid' : ''; ?>" id="password" name="password">
            <div class="invalid-feedback">
                <?= form_error('password'); ?>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Register</button>
    <?= form_close(); ?>

    <div class="mt-3">
                <p>Already registered? <a href="<?= base_url('/login')?>">Login Now!</a></p>
            </div>
</div>
   </div>
</div>