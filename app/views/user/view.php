<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>One Piece View</title>
  <link rel="stylesheet" href="<?=base_url();?>public/style.css">
</head>
<body>
  <h1>☠ Welcome to One Piece Crew ☠</h1>

   <div style="display: flex; justify-content: space-between; align-items: center; width: 80%; margin: auto; margin-bottom: 15px;">
    <a href="<?=site_url('user/create');?>" class="btn-create">➕ Create New Crew</a>
  </div>
  <table>
    <tr>
      <th><img class="skull" src="<?=base_url();?>public/images/skull.png" alt="skull"> ID</th>
      <th>Username</th>
      <th>Email</th>
      <th>Action</th>
    </tr>
    <?php foreach(html_escape($users) as $user): ?>
    <tr>
      <td><?=$user['id'];?></td>
      <td><?=$user['username'];?></td>
      <td><?=$user['email'];?></td>
      <td>
        <a href="<?=site_url('user/update/'. $user['id']);?>" class="btn-edit">✍ Edit</a>
        <a href="<?=site_url('user/delete/'. $user['id']);?>" 
            class="btn-delete" 
            onclick="return confirm('Are you sure you want to delete this user?');">🗑 Delete</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>
