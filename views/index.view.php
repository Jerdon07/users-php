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
            <h3>Hello</h3>

            <form action="/test/" method="POST">
                <label for="full_name">Full Name</label>
                <input type="text" id="full_name" name="full_name" required>

                <label for="job_position">Job Position</label>
                <input type="text" id="job_position" name="job_position" required>

                <input type="submit">
            </form>

        </div>

        <div class="card">
            <table>
                <thead>
                    <tr>
                        <td>Full Name</td>
                        <td>Job Position</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($query as $user) :?>
                        <tr>
                            <td><?= htmlspecialchars($user['full_name']) ?></td>
                            <td><?= htmlspecialchars($user['job_position']) ?></td>
                            <td>
                                <a 
                                    href="/test/edit?id=<?= $user['id'] ?>"
                                    method="GET"
                                >
                                    Edit
                                </a>
                                <a href="?delete=<?= $user['id'] ?>" method="GET">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>