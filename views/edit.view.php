<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <title><?= $heading ?></title>
</head>
<body id="body">
    <?php require 'views/components/nav.php' ?>

    <main class="main">
        <div class="card">
            <form action="/test/" method="POST">

                <label for="full_name">
                <input type="text" name="full_name" value="<?= $user['full_name'] ?>">
                
                <label for="job_position">
                <input type="text" name="job_position" value="<?= $user['job_position'] ?>">

                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                
                <button type="submit">Update</button>
            </form>
        </div>
    </main>
</body>
</html>