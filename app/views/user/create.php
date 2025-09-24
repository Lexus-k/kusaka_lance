<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User/create</title>
    <link rel="stylesheet" href="<?=base_url();?>public/create-style.css">
</head>
<body>
    <div class="container">
        <div class="form-header">
            <h1>☠ New Pirate Crew ☠</h1>
            <a href="<?= site_url('users'); ?>" class="btn-back">
                <span class="icon">🏴‍☠️</span>
                <span class="text">Back to Crew</span>
            </a>
        </div>
        <form action="<?=site_url('user/create');?>" method="post" class="pirate-form">
            <label for="username">Crew Name:</label>
            <input type="text" id="username" name="username" required placeholder="Enter name">

            <label for="email">Crew Email:</label>
            <input type="email" id="email" name="email" required placeholder="Enter email">

            <input type="submit" value="Recruit Pirate">
        </form>
    </div>
</body>
</html>
