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
                <label for="name" />
                <input type="text" name="name">

                <input type="submit">
            </form>

            <p><?= $name ?? 'Hello' ?></p>
        </div>
    </main>

</body>
</html>