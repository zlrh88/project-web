<div class="container mt-5 border border-4 border-dark rounded px-5 py-5">
   <div>
        <h2 class="text-center mb-5">Register</h2>
   </div>
   <div>
       
       <div class="container">
            <form action="<?= site_url('/register/sign_up')?>" method="post">
                <div class="form-group mb-2">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                </div>
                <div class="form-group mb-2">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group mb-2">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group mb-2">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
            
            <div class="mt-3">
                <p>Already registered? <a href="<?= base_url('/login')?>">Login Now!</a></p>
            </div>

        </div>
   </div>
</div>