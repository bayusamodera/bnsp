
<div class="content-wrapper mt-3">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="col-md-6 d-flex flex-column mx-auto my-5">
                            <div class="card flex-grow-1 mb-0">
                                <div class="card-body">
                                    <h3 class="mt-5 mb-2 text-center">Sign Up</h3><br>
                                    <form action="<?= base_url('login/signin'); ?>" method="post">

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email">
                                        </div>

                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" name="username">
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="form-control" name="nama">
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name='password1'>
                                        </div>

                                        <div class="form-group">
                                            <label>Ulangi Password</label>
                                            <input type="password" class="form-control" name='password2'>
                                        </div>
                                        <hr>
                                        <button type="submit" name="submit" class="btn btn-primary mt-4">Daftar</button>
                                        <a class="btn btn-default mt-4 float-right" href='<?= base_url('login/signin') ?>'>Sudah Punya Akun?</a>
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