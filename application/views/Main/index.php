<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forex Keuangan</title>
        <!-- Styling Outline CSS, Did not require internet to style -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        <!-- Includes Bootstrap JS and Popper.js for dropdowns and responsive navbar -->
        <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo base_url('Controller/index'); ?>">AHAJAWA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo base_url('Controller/Aboutme'); ?>">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Your Forex</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('Controller/Changelogs'); ?>">ChangeLogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('Controller/Feedback'); ?>">Feedback</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact-Me</a>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="nav nav-pills">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Your Account
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo base_url('Controller/Login'); ?>">Log-in</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('Controller/Signup'); ?>">Sign-up</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('Controller/Profile'); ?>">Profile</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Settings
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Language</a></li>
                                <li><a class="dropdown-item" href="#">Themes</a></li>
                                <li><a class="dropdown-item" href="#">Customization</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>