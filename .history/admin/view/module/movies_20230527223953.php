<?php
$sql = "SELECT * FROM movies";
$query = mysqli_query($conn, $sql);
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
<?php
while($row = mysqli_fetch_assoc($query)){ ?>

<?php}?>
<div class="main-show">
    <img src="https://cinestar.com.vn/pictures/Cinestar/04-2023/lat-mat-6.jpg" alt="">
    <div class="movie-info">
        <span class="movie-title">LẬT MẶT 6 (T16): TẤM VÉ ĐỊNH MỆNH</span>
        <div class="movie-content">
            <span class="">khởi chiếu:</span>
            <p>15/04/2023</p>
            <span>Thể loại:</span>
            <p>Hành Động</p>
            <span>Diễn viên:</span>
            <p>Lý Hải, Quốc Cường, Trung Dũng, Huy Khánh, Thanh Thức, Trần Kim Hải, Huỳnh Thi, Diệp Bảo Ngọc, Tú Tri, Quỳnh Như, Tạ Lâm, bé Thùy Linh…</p>
            <span>Đạo diễn:</span>
            <p>Lý Hải</p>
        </div>
        <div class="movie-action">
            <button type="submit">sửa</button>
            <button type="submit">xoá</button>
        </div>
    </div>

</div>