<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Account - Bookepink</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { /* Gaya latar belakang */
            background: linear-gradient(135deg, #ffb6d9, #ffd6e8);
            min-height: 100vh;
            font-family: "Poppins", sans-serif;
            padding-top: 60px;
        }

        .account-wrapper { 
            max-width: 800px;
            margin: auto;
        }

        .account-card { 
            background: white;
            border-radius: 25px;
            box-shadow: 0 10px 25px rgba(255, 105, 180, 0.3);
            overflow: hidden;
        }

        .header-pink { /* Gaya header */
            background: linear-gradient(135deg, #ff5da2, #ff85c1);
            padding: 40px;
            color: white;
            text-align: center;
        }

        .header-pink h2 {
            font-size: 32px;
            font-weight: 700;
        }

        .profile-section {
            padding: 30px 40px;
        }

        .profile-item {
            margin-bottom: 25px;
        }

        .profile-label {
            color: #ff5da2;
            font-weight: 600;
            font-size: 14px;
        }

        .profile-value {
            font-size: 18px;
            font-weight: 500;
            color: #444;
        }

        .btn-pink {
            background: #ff5da2;
            padding: 10px 30px;
            color: white;
            border-radius: 30px;
            border: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-pink:hover {
            background: #ff77b5;
        }
    </style>
</head>

<body>

<div class="account-wrapper">
    <div class="account-card">

        <!-- Header -->
        <div class="header-pink">
            <h2>My Account</h2>
            <p>Profile Information</p>
        </div>

        <!-- Content -->
        <div class="profile-section">

            <?php if(isset($user)): ?>

            <div class="profile-item"> <!-- Menampilkan username -->
                <div class="profile-label">USERNAME</div>
                <div class="profile-value"><?php echo $user->username; ?></div> 
            </div>

            <div class="profile-item"> <!-- Menampilkan email -->
                <div class="profile-label">EMAIL</div>
                <div class="profile-value"><?php echo $user->email; ?></div>
            </div>

            <div class="profile-item"> <!-- Menampilkan tanggal bergabung -->
                <div class="profile-label">JOINED</div>
                <div class="profile-value"><?php echo $user->created_at; ?></div>
            </div>

            <div class="mt-4 text-center"> <!-- Tombol kembali ke dashboard -->
                <a href="<?php echo site_url('dashboard'); ?>" class="btn btn-pink">
                Back to Menu
                </a>
            </div>

            <?php else: ?>

            <p class="text-center text-danger">User data not found!</p> 

            <?php endif; ?>

        </div>
    </div>
</div>

</body>
</html>
