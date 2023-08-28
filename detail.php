<?php
  if (isset($_GET['film_id'])) $film_id = $_GET['film_id'];
  $sql = "select * from `film` where `id` = '$film_id'";
  $query= mysqli_query($link, $sql);
  $r=mysqli_fetch_assoc($query);
?>
<div id="content">
  <div class="block" id="page-info">
    <div class="blocktitle breadcrumbs">
        <div class="item">
            <a href="?mod=home" title="Xem Phim Nhanh, Xem Phim Online chất lượng cao miễn phí">
                <span>Xem phim</span>
            </a>
        </div>
        <div class="item">
            <?php
              $type_movie = $r['type_movie'];
              $sql = "select * from `type-movie` where `id` = '$type_movie'";
              $query= mysqli_query($link, $sql);
              $r1=mysqli_fetch_assoc($query);
            ?>
            <a href="?mod=list&type=<?php echo $r1['handle'] ?>&year=2018"><span><?php echo $r1['name'] ?></span></a>
        </div>
        <div class="item last-child">
            <span itemprop="title"><?php echo $r['name'] ?></span>
        </div>
    </div>
    <div class="info">
        <h2 class="title fr"><?php echo $r['name'] ?></h2>
        <div class="poster"><a href="#" title="Xem phim <?php echo $r['name'] ?>"><img src="<?php echo $r['image'] ?>" alt="<?php echo $r['name'] ?>"></a></div>
        <div class="name2 fr">
            <h3><?php echo $r['name2'] ?></h3><span class="year" style="font-size:12px">(2010)</span>
        </div>
        <div class="dinfo">
            <div class="col1 fr">
                <ul>
                    <li>Status: <span class="status1"><?php echo $r['status'] ?></span></li>
                    <li>Đạo diễn: <?php echo $r['director'] ?></li>
                    <li>Diễn viên: <?php echo $r['actor'] ?></li>
                    <li>Thể loại: <a href="the-loai/phim-hanh-dong/" title="Phim Hành Động"> Phim Hành Động</a></li>
                </ul>
            </div>
            <div class="col2">
                <ul>
                    <?php
                      $nation_id = $r['nation_id'];
                      $sql = "select * from `nation` where `id` = '$nation_id'";
                      $query=mysqli_query($link,$sql);
                      $r2=mysqli_fetch_assoc($query);
                    ?>
                    <li>Quốc gia: <a href="?mod=list&type=nation&id=<?php echo $r2['id'] ?>" title="Phim <?php echo $r2['name'] ?>"><?php echo $r2['name'] ?></a></li>
                    <li>Thời lượng: <?php echo $r['duration'] ?> Phút</li>
                    <li>Lượt xem: <?php echo $r['num_view'] ?></li>
                    <li>Đăng bởi: <?php echo $r['author'] ?></li>
                </ul>
            </div>
        </div>
        <div class="groups-btn">
            <a href="?mod=watch&film_id=<?php echo $r['id'] ?>&episode=1"><div class="btn-watch fr"></div></a>
        </div>
    </div>
    <div class="detail">
        <div class="blocktitle tab">Thông tin phim</div>
        <div class="content">
            <h4>Nội dung phim <?php echo $r['name'] ?>:</h4>
            <p><?php echo $r['description'] ?></p>
        </div>
    </div>
  </div>
</div>
