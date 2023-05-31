<?php
$sql = "SELECT * FROM movies";
$statement = $conn -> prepare($sql);
$statement -> execute();
$dataMovies = $statement -> fetchALL(PDO::FETCH_ASSOC);
?>



<div class="main-add">
    <h1 class="module-movies">movies</h1>
    <form action="" method="post" class="form-movies">
        <div>
            <label for="title" class="label">TITLE</label>
            <input type="text" id="title" name="title" placeholder="Enter your title...">
        </div>
        <div>
            <label for="image" class="label">IMAGE</label>
            <input type="text" id="image" name="iamge" placeholder="Enter your image address...">
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
        <button type="submit">Add Movies</button>
    </form>
</div>
<?php foreach ($dataMovies as $item) { ?>
<div class="main-show">
    <img src="<?php echo $item['image'] ?>" alt="">
    <div class="movie-info">
        <span class="movie-title"><?php echo $item['title'] ?></span>
        <div class="movie-content">
            <span class="">movie id:</span>
            <p> <?php echo $item['relDate'] ?> </p>
            <span class="">khởi chiếu:</span>
            <p> <?php echo $item['relDate'] ?> </p>
            <span>Thể loại:</span>
            <p><?php echo $item['genre'] ?></p>
            <span>Diễn viên:</span>
            <p><?php echo $item['actor'] ?></p>
            <span>Đạo diễn:</span>
            <p><?php echo $item['director'] ?></p>
        </div>
        <div class="movie-action">
            <button type="submit">sửa</button>
            <button type="submit">xoá</button>
        </div>
    </div>

</div>
<?php } ?>