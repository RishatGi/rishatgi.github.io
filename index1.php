<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>

<body>
    <div class="container">
        <?php include('sidebar.php'); ?>
        <?php include('main.php'); ?>
    </div>

    <?php include('footer.php'); ?>

    <script src="script.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>

<body>
    <div class="container">
        <?php include('sidebar.php'); ?>
        <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'main';
            include('main_content.php'); // This is where you include the code snippet you provided
        ?>
    </div>

    <?php include('footer.php'); ?>

    <script src="script.js"></script>
</body>

</html>
