<?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'main';
?>

<main class="main-content">
    <?php
        // Define an array of allowed pages
        $allowedPages = ['main', 'main1', 'main2', 'main3', 'main4', 'main5', 'main6', 'main7', 'main8', 'main9', 'main10', 'main11', 'main12'];

        // Check if the requested page is in the allowedPages array
        if (in_array($page, $allowedPages)) {
            include($page . '.php');
        } else {
            // If the requested page is not allowed, include a default page or show an error message
            include('main.php'); // Default page
            // You can also show an error message like: echo 'Invalid page requested';
        }
    ?>
</main>
