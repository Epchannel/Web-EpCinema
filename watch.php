<?php
  if (isset($_GET['film_id'])) $film_id = $_GET['film_id'];
  if (isset($_GET['episode'])) $episode = $_GET['episode'];
  $sql = "select * from `episode` where `film_id` = '$film_id' and `episode` = '$episode'";
  $query= mysqli_query($link, $sql);
  $r=mysqli_fetch_assoc($query);
?>
<div id="content">
    <div  id="movie-display">
        <div class="row cur-location">
            <nav id="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="?mod=home">Xem phim</a>
                    </li>
                    /
                    <li class="breadcrumb-item">
                      <?php
                        if (isset($_GET['film_id'])) $film_id = $_GET['film_id'];
                        $sql = "select * from `film` where `id` = '$film_id'";
                        $query= mysqli_query($link, $sql);
                        $r1=mysqli_fetch_assoc($query);
                        $type_movie = $r1['type_movie'];
                        $sql2 = "select * from `type-movie` where `id` = '$type_movie'";
                        $query = mysqli_query($link, $sql2);
                        $r2=mysqli_fetch_assoc($query);
                      ?>
                      <a href="?mod=list&type=<?php echo $r2['handle'] ?>&year=2018"><?php echo $r2['name'] ?></a>
                    </li>
                    /
                    <?php
                    $sql = "select * from `film` where `id` = '$film_id'";
                    $query= mysqli_query($link, $sql);
                    $r3=mysqli_fetch_assoc($query);
                    ?>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $r3['name'] ?></li>
                </ol>
            </nav>
        </div>
        <div class="row body_video">
            <div class="col-sm-12">
                <video width="100%" height="100%" controls>
                    <source src="<?php echo $r['content'] ?>" type="video/mp4">
                    <!-- <src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4"> -->
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="share">
                <div class="row">
                    <button type="button" class="btn btn-secondary">
                        <img src="images/icons/plus.png" alt="Share" width="20px"> Thêm vào hộp
                    </button>
                    <button type="button" class="btn btn-primary share_fb">
                        <img src="images/icons/facebook_square_lightblue-512.png" alt="Share" width="20px"> Share
                    </button>
                    <button type="button" class="btn btn-secondary">AutoNext: On</button>
                    <button type="button" class="btn btn-secondary">Phóng to</button>
                    <button type="button" class="btn btn-secondary">
                        <img src="images/icons/lamp.png" alt="Share" width="20px"> Tắt đèn
                    </button>
                </div>

            </div>
        </div>
    </div>
    <div  id="detail">
        <div class="row">
            <p>Bạn đang xem phim
                <a href="#"><?php echo $r3['name'] ?></a> online chất lượng cao miễn phí tại server phim GD 1.</p>
            <fieldset>
                <legend>Hướng khắc phục lỗi xem phim</legend>
                <ul>
                    <li>Sử dụng DNS 8.8.8.8, 8.8.4.4 hoặc 208.67.222.222, 208.67.220.220 để xem phim nhanh
                        hơn.
                    </li>
                    <li>Chất lượng phim mặc định chiếu là 360. Để xem phim chất lượng cao hơn xin vui lòng
                        chọn trên player.</li>
                    <li>Xem phim nhanh hơn với trình duyệt Google Chrome, Cốc Cốc</li>
                    <li>Nếu bạn không xem được phim vui lòng nhấn CTRL + F5 hoặc CMD + R trên MAC vài lần.</li>
                </ul>
            </fieldset>
        </div>

    </div>
    <div  id="server-list">
        <div class="row">
            <div class="col-sm-3">
                Server
            </div>
            <div class="col-sm-9">
                <div class="row">
                  <?php
                    $query = mysqli_query($link, "select * from `episode` where `film_id` = '$film_id'");
                    while($r4 = mysqli_fetch_assoc($query)){
                  ?>
                    <a href="?mod=watch&film_id=<?php echo $r4['film_id'] ?>&episode=<?php echo $r4['episode'] ?>" title="<?php echo $r4['name'] ?>" class="button btn-secondary seat"><?php echo $r4['episode_name'] ?></a>
                  <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
