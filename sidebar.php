<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 30%;
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        .main-content {
            width: 65%;
            padding: 20px;
            border: 2px solid #333;
            border-radius: 10px;
        }

        .sidebar1 {
            width: 70%;
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        #navigation_inner {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        #navigation_innermost {
            max-width: 1200px;
            margin: 0 auto;
        }

        #navigation_wrapper {
            display: flex;
            flex-direction: column;
        }

        #mainNav1 {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        #mainNav1 li {
            margin-bottom: 5px;
        }

        #mainNav1 a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: clamp(14px, 3vw, 18px);
            padding: 8px 12px;
            border-radius: 5px;
            display: block;
            background-color: #555;
            transition: background-color 0.3s ease;
        }

        #mainNav1 a:hover {
            background-color: #777;
        }

        .current a {
            background-color: #777;
        }

        /* Responsive Styles */
        @media only screen and (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .sidebar,
            .main-content,
            .sidebar1 {
                width: 100%;
            }

            .main-content {
                border: none;
            }
        }

        @media only screen and (max-width: 440px) {
            #mainNav1 a {
                font-size: clamp(12px, 2vw, 16px);
                padding: 8px;
            }

            .sidebar {
                text-align: center;
            }

            footer {
                text-align: center;
            }

            .button-with-badge {
                width: clamp(220px, 100%, 100%);
                padding: 10px;
                box-sizing: border-box;
            }

            .badge {
                background-color: #ff0000;
                color: #fff;
                padding: 5px;
                border-radius: 5px;
                margin-left: 10px;
            }

            .main-content {
                border: none;
            }
        }
        /* Existing styles above this line */

        /* Add a class to hide the second level initially */
        .hidden {
            display: none;
        }
    </style>
</head>
<body>

<aside class="sidebar">
    <div id="navigation_inner">
        <div id="navigation_innermost">
            <div id="navigation_wrapper">
                <div data-container="navigation">
                    <div class="j-nav-variant-standard">
                        <ul id="mainNav1" class="mainNav1">
                            <li><a href="?page=main" class="level_1"><span>Главная</span></a></li>
                            <li><a href="?page=main1" class="level_1"><span>Коллегам</span></a></li>
                            <li><a href="?page=main2" class="level_1"><span>Ученикам</span></a></li>
                            <li><a href="?page=main3" class="level_1"><span>Подготовка к олимпиадам</span></a></li>
                            <li><a href="?page=main4" class="level_1"><span>Подготовка к экзаменам</span></a></li>
                            <li><a href="?page=main5" class="level_1"><span>Подготовка к экзаменам</span></a></li>
                            <li><a href="?page=main6" class="level_1"><span>Родителям</span></a></li>
                            <li><a href="?page=main7" class="level_1"><span>Портфолио</span></a></li>
     
		                      <li>
    <a href="?page=main1" class="level_2"><span>Гостевая книга</span></a>
    <ul class="mainNav1 hidden">
        <li><a href="?page=main4" class="level_2"><span>Написать комментарий</span></a></li>
        <li><a href="?page=main8" class="level_2"><span>Смотреть комментарии</span></a></li>
    </ul>
</li>

         <li><a href="?page=main9" class="level_2"><span>Тесты</span> </a>
                                <ul id="mainNav2" class="mainNav1 hidden">
                                    <li><a href="?page=main10" class="level_2"><span>Тест по трехмерной графике</span></a></li>
                                    <li><a href="?page=main11" class="level_2"><span>Тест по растровой графике</span></a></li>
                                    <li><a href="?page=main12" class="level_2"><span>Тест по трехмерной графике</span></a></li>
                                </ul>
                            </li>
                            <!-- ... More first-level links ... -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>

// <script>
    // document.addEventListener('DOMContentLoaded', function () {
        // var firstLevelLinks = document.querySelectorAll('#mainNav1 .level_2');
        // var firstLevelLinks = document.querySelectorAll('#mainNav1 .level_2');
        // firstLevelLinks.forEach(function (link) {
            // link.addEventListener('click', function (event) {
                // event.preventDefault();
                // var secondLevel = link.nextElementSibling;
                // secondLevel.classList.toggle('hidden');
            // });
        // });
    // });
// </script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var firstLevelLinks = document.querySelectorAll('#mainNav1 .level_2');
        firstLevelLinks.forEach(function (link) {
            link.addEventListener('click', function (event) {
                event.preventDefault();
                var secondLevel = link.nextElementSibling;
                secondLevel.classList.toggle('hidden');
            });
        });
    });
</script>
</body>
</html>
