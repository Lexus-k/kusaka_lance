<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User/update</title>
    <link rel="stylesheet" href="<?=base_url();?>public/update-style.css">
</head>
<body>
    <div class="container">
        <h1>☠ Update Pirate Crew Member ☠</h1>
        <form action="<?=site_url('user/update/'. $user['id']);?>" method="post" class="pirate-form">
            <label for="username">Crew Name:</label>
            <input type="text" id="username" name="username" value="<?=html_escape($user['username']);?>" required>

            <label for="email">Crew Email:</label>
            <input type="email" id="email" name="email" value="<?=html_escape($user['email']);?>" required>

            <input type="submit" value="Update Pirate">
        </form>
    </div>
</body>
</html>
