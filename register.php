<?php

include 'includes/header.php';
include 'includes/navbar.php';

if (isPostRequest()) {
    $full_name = getPostData('full_name');
    $email = getPostData('email');
    $password = getPostData('password');
    $confirm_password = getPostData('confirm_password');

    $user = new User();
    if ($user->register($full_name, $email, $password)) {
        redirect('login.php');
    } else {
        echo " Registration Failed";
    }
}

?>

<!-- Main Content -->
<main class="container my-5">
    <h2 class="text-center mb-4">Register</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST">
                <div class="mb-3">
                    <label for="full_name" class="form-label">Full Name *</label>
                    <input
                        type="text"
                        class="form-control"
                        id="full_name"
                        name="full_name"
                        required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address *</label>
                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password *</label>
                    <input
                        type="password"
                        class="form-control"
                        id="password"
                        name="password"
                        required>
                </div>
                <div class="mb-3">
                    <label for="confirm-password" class="form-label">Confirm Password *</label>
                    <input
                        type="password"
                        class="form-control"
                        id="confirm-password"
                        name="confirm_password"
                        required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
            <p class="mt-3 text-center">
                Already have an account? <a href="login.php">Login here</a>.
            </p>
        </div>
    </div>
</main>

<?php include 'includes/footer.php' ?>