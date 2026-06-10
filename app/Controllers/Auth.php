<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        // Redirect to login if not logged in
        if (session()->get('logged_in')) {
            return redirect()->to('/dashboard');
        }
        
        return redirect()->to('/auth/login');
    }

    public function login()
    {
        // If already logged in, redirect to dashboard
        if (session()->get('logged_in')) {
            return redirect()->to('/dashboard');
        }

        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // Validate input
            $rules = [
                'username' => 'required|min_length[3]',
                'password' => 'required|min_length[6]'
            ];

            if (!$this->validate($rules)) {
                return view('auth/login', [
                    'validation' => $this->validator,
                    'error' => 'Please check your input.'
                ]);
            }

            // Attempt authentication
            $user = $this->userModel->authenticate($username, $password);

            if ($user) {
                // Set session data
                session()->set([
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'logged_in' => true
                ]);

                return redirect()->to('/dashboard')->with('success', 'Welcome back, ' . $user['name'] . '!');
            } else {
                return view('auth/login', [
                    'error' => 'Invalid username/email or password.'
                ]);
            }
        }

        return view('auth/login');
    }

    public function register()
    {
        // If already logged in, redirect to dashboard
        if (session()->get('logged_in')) {
            return redirect()->to('/dashboard');
        }

        if ($this->request->getMethod() === 'post') {
            $data = [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'name' => $this->request->getPost('name')
            ];

            // Validate input
            if (!$this->userModel->validate($data)) {
                return view('auth/register', [
                    'validation' => $this->userModel->errors(),
                    'data' => $data
                ]);
            }

            // Create user
            $userId = $this->userModel->createUser($data);

            if ($userId) {
                return redirect()->to('/auth/login')->with('success', 'Registration successful! Please login.');
            } else {
                return view('auth/register', [
                    'error' => 'Registration failed. Please try again.',
                    'data' => $data
                ]);
            }
        }

        return view('auth/register');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/login')->with('success', 'You have been logged out successfully.');
    }

    public function dashboard()
    {
        // Check if user is logged in
        if (!session()->get('logged_in')) {
            return redirect()->to('/auth/login');
        }

        $user = $this->userModel->getUserById(session()->get('user_id'));

        return view('auth/dashboard', [
            'user' => $user
        ]);
    }
}
