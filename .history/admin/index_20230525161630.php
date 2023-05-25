<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="./index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <?php include "./view/layout/sidebar.php" ?>
        <main class="main">
            <?php include "./view/layout/header.php" ?>
            <div class="main-container">
                <h1>blocks:</h1>
                include các file như home và các file quản lý...mặc định là home
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit sequi facilis, ducimus, numquam similique quod, architecto in facere laborum culpa beatae odit et possimus repellendus quisquam minima inventore laudantium tempore!</p>
            </div>
        </main>
    </div>
</body>
</html>