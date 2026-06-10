<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - CodeIgniter App</title>
    <link href="<?= base_url('css/tailwind.css') ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary min-h-screen flex items-center justify-center py-8">
    <div class="container">
        <div class="row justify-center">
            <div class="col col-md-6 col-lg-5">
                <div class="register-card p-6">
                    <div class="register-header">
                        <h2 class="text-3xl mb-3"><i class="fas fa-user-plus text-orange-600"></i></h2>
                        <h2 class="text-2xl font-bold">Create Account</h2>
                        <p class="text-gray-600">Join us today</p>
                    </div>

                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger alert-dismissible">
                            <i class="fas fa-exclamation-circle me-2"></i>
                            <?= $error ?>
                            <button type="button" class="btn-close" onclick="this.parentElement.remove()"></button>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('auth/register') ?>" method="post">
                        <?= csrf_field() ?>
                        
                        <div class="mb-4">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                                <input type="text" 
                                       class="form-control <?= (isset($validation) && $validation->hasError('name')) ? 'is-invalid' : '' ?>" 
                                       name="name" 
                                       placeholder="Full Name" 
                                       value="<?= isset($data['name']) ? $data['name'] : old('name') ?>" 
                                       required>
                            </div>
                            <?php if (isset($validation) && $validation->hasError('name')): ?>
                                <div class="invalid-feedback d-block">
                                    <?= $validation->getError('name') ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="mb-4">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-at"></i>
                                </span>
                                <input type="text" 
                                       class="form-control <?= (isset($validation) && $validation->hasError('username')) ? 'is-invalid' : '' ?>" 
                                       name="username" 
                                       placeholder="Username" 
                                       value="<?= isset($data['username']) ? $data['username'] : old('username') ?>" 
                                       required>
                            </div>
                            <?php if (isset($validation) && $validation->hasError('username')): ?>
                                <div class="invalid-feedback d-block">
                                    <?= $validation->getError('username') ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="mb-4">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <input type="email" 
                                       class="form-control <?= (isset($validation) && $validation->hasError('email')) ? 'is-invalid' : '' ?>" 
                                       name="email" 
                                       placeholder="Email Address" 
                                       value="<?= isset($data['email']) ? $data['email'] : old('email') ?>" 
                                       required>
                            </div>
                            <?php if (isset($validation) && $validation->hasError('email')): ?>
                                <div class="invalid-feedback d-block">
                                    <?= $validation->getError('email') ?>
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
                                       placeholder="Password (min 6 characters)" 
                                       required>
                            </div>
                            <?php if (isset($validation) && $validation->hasError('password')): ?>
                                <div class="invalid-feedback d-block">
                                    <?= $validation->getError('password') ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            <i class="fas fa-user-plus me-2"></i>
                            Create Account
                        </button>
                    </form>

                    <div class="login-link">
                        <p class="m-0">Already have an account? 
                            <a href="<?= base_url('auth/login') ?>">Sign in here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 