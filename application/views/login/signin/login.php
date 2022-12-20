


<div class="content-wrapper mt-3">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="col-md-6 d-flex flex-column mx-auto my-5">
                            <div class="card flex-grow-1 mb-2">
                                <div class="card-body">
                                    <h3 class="mt-5 mb-2 text-center">Sign In</h3><br>
                                    <form action="<?= base_url('home/dashboard') ?>" method="post">
                                        <div class="form-group"><label>Email / Username</label>
                                            <input type="text" name="user_email" class="form-control" value="">
                                        </div>
                                        <div class=" form-group"><label>Password</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>

                                        <button type="submit" class="btn btn-primary mt-4">Login</button>
                                        <a class="btn btn-default mt-4 float-right" href='#'>Lupa password ?</a><br>

                                        <div class="text-center mt-5">
                                            <p>Belum punya akun? <a href='<?= base_url('login/signup') ?>'>Daftar akun baru</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>