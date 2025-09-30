<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>One Piece View</title>
  <link rel="stylesheet" href="<?=base_url();?>public/style.css">
</head>
<body>
  <h1>☠ One Piece Crew ☠</h1>

  <!-- 🔹 Create Button -->

<div style="display: flex; justify-content: space-between; align-items: center; width: 80%; margin: auto; margin-bottom: 15px;">
    <!-- Create Button -->
    <a href="<?=site_url('user/create');?>" class="btn-create">➕ Create New Crew</a>

    <!-- Search Form -->
    <form method="get" action="<?= site_url('users'); ?>" class="search-bar">
        <input type="text" name="q" class="search-input" placeholder="Search username / email" value="<?= html_escape($q ?? '') ?>">
        <button type="submit" class="search-button">Search</button>
    </form>
</div>

  <table>
    <tr>
      <th><img class="skull" src="<?=base_url();?>public/images/skull.png" alt="skull"> ID</th>
      <th>Username</th>
      <th>Email</th>
      <th>Action</th>
    </tr>
    <?php foreach($users as $user): ?>
    <tr>
      <td><?= html_escape($user['id']); ?></td>
      <td><?= html_escape($user['username']); ?></td>
      <td><?= html_escape($user['email']); ?></td>

      <td>
        <a href="<?=site_url('user/update/'. $user['id']);?>" class="btn-edit">✍ Edit</a>
        <a href="<?=site_url('user/delete/'. $user['id']);?>" 
            class="btn-delete" 
            onclick="return confirm('Are you sure you want to delete this user?');">🗑 Delete</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
    <!-- Pagination -->
    <?php if (!empty($page)): ?>
        <div class="pagination">
            <?= $page ?>
        </div>
    <?php endif; ?>
    <a href="<?= site_url('auth/logout'); ?>" 
     class="btn-logout" onclick="return confirm('Are you sure you want to log out?');">
     🚪 Logout</a>
    </a>
</body>
</html>
