<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - CodeIgniter App</title>
    <link href="<?= base_url('css/tailwind.css') ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg border-b border-gray-200">
        <div class="container">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-gray-800">
                        <i class="fas fa-tachometer-alt text-orange-600 me-2"></i>
                        Dashboard
                    </h1>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">
                        Welcome, <span class="font-semibold text-gray-800"><?= $user['name'] ?></span>
                    </span>
                    <a href="<?= base_url('auth/logout') ?>" class="btn btn-secondary">
                        <i class="fas fa-sign-out-alt me-2"></i>
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container py-8">
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible mb-6">
                <i class="fas fa-check-circle me-2"></i>
                <?= session()->getFlashdata('success') ?>
                <button type="button" class="btn-close" onclick="this.parentElement.remove()"></button>
            </div>
        <?php endif; ?>

        <!-- Welcome Section -->
        <div class="card mb-8">
            <div class="card-header">
                <h2 class="text-xl font-semibold text-gray-800">
                                            <i class="fas fa-user-circle text-orange-600 me-2"></i>
                    User Information
                </h2>
            </div>
            <div class="card-body">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="form-label">Full Name</label>
                        <p class="text-gray-800 font-medium"><?= $user['name'] ?></p>
                    </div>
                    <div>
                        <label class="form-label">Username</label>
                        <p class="text-gray-800 font-medium"><?= $user['username'] ?></p>
                    </div>
                    <div>
                        <label class="form-label">Email Address</label>
                        <p class="text-gray-800 font-medium"><?= $user['email'] ?></p>
                    </div>
                    <div>
                        <label class="form-label">Member Since</label>
                        <p class="text-gray-800 font-medium"><?= date('F j, Y', strtotime($user['created_at'])) ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="card">
                <div class="card-body text-center">
                    <div class="text-3xl text-blue-600 mb-2">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-1">Profile</h3>
                    <p class="text-gray-600 text-sm">Manage your account</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <div class="text-3xl text-green-600 mb-2">
                        <i class="fas fa-cog"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-1">Settings</h3>
                    <p class="text-gray-600 text-sm">Configure preferences</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <div class="text-3xl text-purple-600 mb-2">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-1">Analytics</h3>
                    <p class="text-gray-600 text-sm">View your statistics</p>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="card">
            <div class="card-header">
                <h2 class="text-xl font-semibold text-gray-800">
                                            <i class="fas fa-clock text-orange-600 me-2"></i>
                    Recent Activity
                </h2>
            </div>
            <div class="card-body">
                <div class="space-y-4">
                    <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                        <div class="text-orange-600 me-3">
                            <i class="fas fa-sign-in-alt"></i>
                        </div>
                        <div>
                            <p class="font-medium text-gray-800">Login successful</p>
                            <p class="text-sm text-gray-600">You logged in successfully</p>
                        </div>
                        <div class="ml-auto text-sm text-gray-500">
                            Just now
                        </div>
                    </div>
                    <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                        <div class="text-green-600 me-3">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <div>
                            <p class="font-medium text-gray-800">Account created</p>
                            <p class="text-sm text-gray-600">Your account was successfully created</p>
                        </div>
                        <div class="ml-auto text-sm text-gray-500">
                            <?= date('M j, Y', strtotime($user['created_at'])) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-12">
        <div class="container py-6">
            <div class="text-center text-gray-600">
                <p>&copy; <?= date('Y') ?> CodeIgniter App. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html> 