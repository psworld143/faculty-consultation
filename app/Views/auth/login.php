<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CodeIgniter App</title>
    <link href="<?= base_url('css/tailwind.css') ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary min-h-screen flex items-center justify-center">
    <div class="container">
        <div class="row justify-center">
            <div class="col col-md-6 col-lg-4">
                <div class="login-card p-6">
                    <div class="login-header">
                        <h2 class="text-3xl mb-3"><i class="fas fa-user-circle text-orange-600"></i></h2>
                        <h2 class="text-2xl font-bold">Welcome Back</h2>
                        <p class="text-gray-600">Sign in to your account</p>
                    </div>

                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success alert-dismissible">
                            <i class="fas fa-check-circle me-2"></i>
                            <?= session()->getFlashdata('success') ?>
                            <button type="button" class="btn-close" onclick="this.parentElement.remove()"></button>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger alert-dismissible">
                            <i class="fas fa-exclamation-circle me-2"></i>
                            <?= $error ?>
                            <button type="button" class="btn-close" onclick="this.parentElement.remove()"></button>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('auth/login') ?>" method="post">
                        <?= csrf_field() ?>
                        
                        <div class="mb-4">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                                <input type="text" 
                                       class="form-control <?= (isset($validation) && $validation->hasError('username')) ? 'is-invalid' : '' ?>" 
                                       name="username" 
                                       placeholder="Username or Email" 
                                       value="<?= old('username') ?>" 
                                       required>
                            </div>
                            <?php if (isset($validation) && $validation->hasError('username')): ?>
                                <div class="invalid-feedback d-block">
                                    <?= $validation->getError('username') ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="mb-6">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input type="password" 
                                       class="form-control <?= (isset($validation) && $validation->hasError('password')) ? 'is-invalid' : '' ?>" 
                                       name="password" 
                                       placeholder="Password" 
                                       required>
                            </div>
                            <?php if (isset($validation) && $validation->hasError('password')): ?>
                                <div class="invalid-feedback d-block">
                                    <?= $validation->getError('password') ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            <i class="fas fa-sign-in-alt me-2"></i>
                            Sign In
                        </button>
                    </form>

                    <div class="register-link">
                        <p class="m-0">Don't have an account? 
                            <a href="<?= base_url('auth/register') ?>">Register here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 