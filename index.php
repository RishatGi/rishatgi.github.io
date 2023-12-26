<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <?php include('sidebar.php'); ?>
        <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'main';
            include('main_content.php'); // This is where you include the code snippet you provided
        ?>
    </div>
<br><br><br><br><br><br>
    <?php include('footer.php'); ?>

    <script src="script.js"></script>
</body>

</html>

