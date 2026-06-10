<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Test - CodeIgniter App</title>
    <link href="<?= base_url('css/tailwind.css') ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary min-h-screen flex items-center justify-center">
    <div class="container">
        <div class="row justify-center">
            <div class="col col-md-6 col-lg-4">
                <div class="login-card p-6">
                    <div class="login-header">
                        <h2 class="text-3xl mb-3"><i class="fas fa-check-circle text-orange-600"></i></h2>
                        <h2 class="text-2xl font-bold">CSS Test Page</h2>
                        <p class="text-gray-600">Testing all CSS classes</p>
                    </div>

                    <div class="alert alert-success mb-4">
                        <i class="fas fa-check-circle me-2"></i>
                        CSS is loading correctly!
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="text-3xl text-orange-600 mb-2">
                                    <i class="fas fa-user"></i>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">Test 1</h3>
                                <p class="text-gray-600 text-sm">Grid working</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="text-3xl text-green-600 mb-2">
                                    <i class="fas fa-cog"></i>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">Test 2</h3>
                                <p class="text-gray-600 text-sm">Cards working</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="text-3xl text-purple-600 mb-2">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">Test 3</h3>
                                <p class="text-gray-600 text-sm">Icons working</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex space-x-4">
                        <a href="<?= base_url('auth/login') ?>" class="btn btn-primary">
                            <i class="fas fa-sign-in-alt me-2"></i>
                            Go to Login
                        </a>
                        <a href="<?= base_url('auth/register') ?>" class="btn btn-secondary">
                            <i class="fas fa-user-plus me-2"></i>
                            Go to Register
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 