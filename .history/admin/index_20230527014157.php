<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin CineMax</title>

    <link rel="stylesheet" href="./index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <?php include "./view/layout/sidebar.php" ?>
        <main class="main">
            <?php include "./view/layout/topbar.php" ?>
            <div class="main-container">
                <?php
                    session_start();
                    ob_start();
                    include "../model/connectDB.php";
                    include "../model/selectMoviesDb.php";
                    if(isset($_GET['act'])){
                        switch ($_GET['act']) {
                            case 'movies':
                                $$dataMovies=getallMovies();
                                include "./view/module/movies.php";
                                break;
                            case 'rooms':
                                include "./view/module/rooms.php";
                                break;
                            case 'bookings':
                                include "./view/module/bookings.php";
                                break;
                            default:
                                include "./view/module/home.php";
                                break;
                        }
                    } else {
                        include "./view/module/home.php";
                    }
                ?>
            </div>
        </main>
    </div>
</body>
</html>