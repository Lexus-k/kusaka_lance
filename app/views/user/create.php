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
        <h1>☠ Create New Pirate Crew Member ☠</h1>
        <form action="<?=site_url('user/create');?>" method="post" class="pirate-form">
            <label for="username">Crew Name:</label>
            <input type="text" id="username" name="username" required placeholder="Enter crew member name">

            <label for="email">Crew Email:</label>
            <input type="email" id="email" name="email" required placeholder="Enter crew member email">

            <input type="submit" value="Recruit Pirate">
        </form>
    </div>
</body>
</html>
