<div class="container">
    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-7 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <img class="img" src="<?= base_url('resources/'); ?>img/logo.png" style="height: 100px;width: 100px;margin: 25px;">
                                    <h1 class="h4 text-gray-900 mb-4">Sign Up</h1>
                                </div>
                                <form class="user" method="POST" action="<?= base_url('auth/registration'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="nidn" name="nidn" placeholder="NIDN/NIDS" value="<?= set_value('nidn'); ?>">
                                        <?= form_error('nidn', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="fullname" name="fullname" placeholder="Full Name" value="<?= set_value('fullname'); ?>">
                                        <?= form_error('fullname', '<small class="text-danger pl-3">', '</small>'); ?>

                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="inputemail" name="inputemail" placeholder="Email Address" value="<?= set_value('inputemail'); ?>">
                                        <?= form_error('inputemail', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user" id="inputpassword" name="inputpassword" placeholder="Password">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user" id="repeatpassword" name="repeatpassword" placeholder="Repeat Password">
                                        </div>
                                        <?= form_error('inputpassword', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Sign Up
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url("auth/"); ?>forgot_password">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url(); ?>">Already have an account? Sign In!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>