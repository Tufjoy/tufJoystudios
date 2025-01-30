<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php echo SITENAME; ?></title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="<?php echo URLROOT; ?>/assets/img/surge-pays-fav.png" type="image/x-icon" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/assets/css/plugins.min.css" />
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/assets/css/kaiadmin.min.css" />
</head>

<body class="d-flex justify-content-center align-items-center">
    <section class="p-3 p-md-4 p-xl-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xxl-8" style="padding: 4rem;">
                    <div class="card border-light-subtle shadow-sm">
                        <div class="row g-0">
                            <div class="col-12 col-md-12 wrap-center">
                                <div class="col-12">
                                    <div class="text-center mb-4">
                                        <a href="#!">
                                            <img class="img-fluid" src="<?php echo URLROOT; ?>/assets/img/logos/whiteBgColor_up.png" alt="Logo" style="height: 145px;">
                                        </a>
                                    </div>

                                    <?php if (@$_GET['inactivity']) { ?>
                                        <!-- <div class="alert alert-info alert-dismissible fade show" role="alert">
                                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div> -->
                                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            The session has expired due to inactivity. Please log in again.
                                        </div>
                                    <?php } else { ?>
                                        <h4 class="text-center mt-2 mb-5">Welcome!</h4>
                                    <?php } ?>


                                    <form action="<?php echo URLROOT ?>/auths/login" method="POST">
                                        <div class="row gy-3 overflow-hidden">
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ""; ?>   " name="email" id="email" value="<?php echo $data['email']; ?>" placeholder="name@example.com">
                                                    <label for="email" class="form-label">Email</label>
                                                    <small id="emailHelp" class="form-text text-muted text-danger"><?php echo $data['email_err'] ?></small>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : '' ?>" name="password" id="password" value="" placeholder="Password">
                                                    <label for="password" class="form-label">Password</label>
                                                    <small id="passHelp" class="form-text text-muted text-danger"><?php echo $data['password_err']; ?></small>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button class="btn btn-dark btn-lg" type="submit">Log in now</button>
                                                </div>
                                            </div>
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
</body>
<script src="<?php echo URLROOT ?>/assets/js/core/jquery-3.7.1.min.js"></script>
<script src="<?php echo URLROOT ?>/assets/js/core/popper.min.js"></script>
<script src="<?php echo URLROOT ?>/assets/js/core/bootstrap.min.js"></script>
</html>

<style>
    body {
        background: linear-gradient(4deg, rgba(3, 29, 82, 1) 0%, rgba(0, 0, 3, 1) 100%) !important;
    }

    .wrap-center {
        padding: 3rem;
        justify-content: center;
        align-items: center;
        display: flex;
        flex-wrap: wrap;
        margin-top: 0rem;
    }
</style>