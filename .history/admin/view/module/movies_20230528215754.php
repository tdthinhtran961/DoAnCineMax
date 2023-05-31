<?php
//insert movie
if (isset($_POST['movie-add']) && ($_POST['movie-add'])) {
    $sqlInsert = "INSERT INTO movies(title, genre, director, actor, relDate, image) VALUES (:title, :genre, :director, :actor, :relDate, :image)";
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $director = $_POST['director'];
    $actor = $_POST['actor'];
    $relDate = $_POST['relDate'];
    $image = $_POST['image'];

    try {
        //1: Khai báo hàm
        $stmt = $conn->prepare($sqlInsert);
        //2: Gán gía trị
        $data = [
            "title" => $title,
            "genre" => $genre,
            "director" => $director,
            "actor" => $actor,
            "relDate" => $relDate,
            "image" => $image,
        ];
        //3: Thực thi câu lệnh
        $insertMovie =  $stmt->execute($data);
    } catch (Exception $exp) {
        echo $exp->getMessage() . "<br>";
        echo "File: " . $exp->getFile() . "<br>";
        echo "Line: " . $exp->getLine();
    }
}
?>

<div class="main-add">
    <h1 class="module-movies">movies</h1>
    <form action="/admin/" method="post" class="form-movies">
        <div>
            <label for="title" class="label">TITLE</label>
            <input type="text" id="title" name="title" placeholder="Enter your title...">
        </div>
        <div>
            <label for="image" class="label">IMAGE</label>
            <input type="text" id="image" name="image" placeholder="Enter your image address...">
        </div>
        <div>
            <label for="genre" class="label">GENRE</label>
            <input type="text" id="genre" name="genre" placeholder="Mời nhập thể loại phim ...">
        </div>
        <div>
            <label for="director" class="label">DIRECTOR</label>
            <input type="text" id="director" name="director" placeholder="Mời nhập tên đạo diễn ...">
        </div>
        <div>
            <label for="actor" class="label">ACTOR</label>
            <input type="text" id="actor" name="actor" placeholder="Mời nhập tên diễn viên ...">
        </div>
        <div>
            <label for="reldate" class="label">RELEASE DATE</label>
            <input type="text" id="reldate" name="relDate" placeholder="Mời nhập ngày khởi chiếu ...">
        </div>
        <button name="movie-add" type="submit">Add Movies</button>
    </form>
</div>

<?php
//select movie
$sql = "SELECT * FROM movies";
try {
    $statement = $conn->prepare($sql);
    $statement->execute();
    $dataMovies = $statement->fetchALL(PDO::FETCH_ASSOC);
} catch (Exception $exp) {
    echo $exp->getMessage() . "<br>";
    echo "File: " . $exp->getFile() . "<br>";
    echo "Line: " . $exp->getLine();
}
?>

<?php
//update movie
if (isset($_POST['movie-edit']) && ($_POST['movie-edit'])) {
    $sqlUpdate = "UPDATE movies SET title=:titleEdit, genre=:genreEdit, director=:directorEdit, actor=:actorEdit, relDate=:relDateEdit, image=:imageEdit  WHERE id=:idEdit";
    //Data update
    $titleEdit = $_POST['titleEdit'];
    $genreEdit = $_POST['genreEdit'];
    $directorEdit = $_POST['directorEdit'];
    $actorEdit = $_POST['actorEdit'];
    $relDateEdit = $_POST['relDateEdit'];
    $imageEdit = $_POST['imageEdit'];
    $idEdit = $_POST['idAction'];

    try {
        $stmtUpdate = $conn->prepare($sqlUpdate);

        $valuesUpdate = [
            "titleEdit" => $titleEdit,
            "genreEdit" => $genreEdit,
            "directorEdit" => $directorEdit,
            "actorEdit" => $actorEdit,
            "relDateEdit" => $relDateEdit,
            "imageEdit" => $imageEdit,
            "idEdit" => $idEdit
        ];
        $stmtUpdate->execute($valuesUpdate);
        // if ($updateStatus) {
        //     echo "update thành công";
        // }
    } catch (Exception $exp) {
        echo $exp->getMessage() . "<br>";
        echo "File: " . $exp->getFile() . "<br>";
        echo "Line: " . $exp->getLine() . "<br>";
        var_dump($idEditInt);
    }
}
?>

<?php
//Data delete
if (isset($_POST['movie-delete']) && ($_POST['movie-delete'])) {
    $sqlDelete = "DELETE FROM movies WHERE id=:idDelete";
    $idDel = $_POST['idAction'];

    try {
        $stmtDelete = $conn->prepare($sqlDelete);

        $dataDelete = ["idDelete" => $idDel];
        $stmtDelete->execute($dataDelete);
        // if ($deleteStatus) {
        //     echo "Delete thành công";
        // }
    } catch (Exception $exp) {
        echo $exp->getMessage() . "<br>";
        echo "File: " . $exp->getFile() . "<br>";
        echo "Line: " . $exp->getLine();
    }
}
?>

<?php foreach ($dataMovies as $item) { ?>
    <div class="main-show">
        <img src="<?php echo $item['image'] ?>" alt="">
        <div class="movie-info">
            <p class="movie-title"><?php echo $item['title'] ?></p>
            <form action="#" method="post">
                <div class="movie-content">
                    <span class="">movie id:</span>
                    <div>
                        <input type="text" name="idAction" value="<?php echo $item['id'] ?>" readonly>
                        <span>Read only</span>
                    </div>
                    <span>Title:</span>
                    <input type="text" name="titleEdit" placeholder="Enter your title..." value="<?php echo $item['title'] ?>">
                    <span class="">khởi chiếu:</span>
                    <input type="text" name="relDateEdit" placeholder="Mời nhập ngày khởi chiếu ..." value="<?php echo $item['relDate'] ?>">
                    <span>Thể loại:</span>
                    <input type="text" name="genreEdit" placeholder="Mời nhập thể loại phim ..." value="<?php echo $item['genre'] ?>">
                    <span>Diễn viên:</span>
                    <input type="text" name="actorEdit" placeholder="Mời nhập tên diễn viên ..." value="<?php echo $item['actor'] ?>">
                    <span>Đạo diễn:</span>
                    <input type="text" name="directorEdit" placeholder="Mời nhập tên đạo diễn..." value="<?php echo $item['director'] ?>">
                    <span>Image:</span>
                    <input type="text" name="imageEdit" placeholder="Mời nhập tên đạo diễn..." value="<?php echo $item['image'] ?>">
                </div>
                <div class="movie-action">
                    <button type="submit" name="movie-edit">Edit</button>
                    <button type="submit" name="movie-delete">Delete</button>
                </div>
            </form>
        </div>

    </div>
<?php } ?>