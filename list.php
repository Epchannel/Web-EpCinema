<?php
  if ((!isset($_POST['filter_type']) || $_POST['filter_type']=='')  && (!isset($_POST['filter_nation']) || $_POST['filter_nation']=='') && (!isset($_POST['filter_year']) || $_POST['filter_year']=='')) {
    if ($_GET['type'] == 'category') {
      echo $cate_id = $_GET['id'];
      echo $sql_filter = "select * from `film` where `category_id` = '$cate_id'";
    }
    elseif ($_GET['type'] == 'nation') {
      echo $nation = $_GET['id'];
      echo $sql_filter = "select * from `film` where `nation_id` = '$nation'";
    }
    elseif ($_GET['type'] == 'single-movie') {
      echo $year = $_GET['year'];
      echo $sql_filter = "select * from `film` where `type_movie` = 1 and `year` = '$year'";
    }
    elseif ($_GET['type'] == 'series-movie') {
      echo $year = $_GET['year'];
      echo $sql_filter = "select * from `film` where `type_movie` = 2 and `year` = '$year'";
    }
    else {
      echo $year = $_GET['year'];
      echo $sql_filter = "select * from `film` where `type_movie` = 3 and `year` = '$year'";
    }
  }
  else {
    if ($_GET['type'] == 'category') {
      $cate_id = $_GET['id'];
      if ($_POST['filter_type'] != '' && $_POST['filter_nation'] == '' && $_POST['filter_year'] == '') {
        echo $filter_type = $_POST['filter_type'];
        if ($filter_type == 'filter_id') {
          echo  $sql_filter = "select * from `film` where `category_id` = '$cate_id' order by `id` desc limit 32";
        }
        elseif ($filter_type == 'filter_view') {
          echo  $sql_filter = "select * from `film` where `category_id` = '$cate_id' order by `num_view` desc limit 32";
        }
        elseif ($filter_type == 'filter_name_desc') {
          echo  $sql_filter = "select * from `film` where `category_id` = '$cate_id' order by `name` desc limit 32";
        }
        elseif ($filter_type == 'filter_name_asc') {
          echo  $sql_filter = "select * from `film` where `category_id` = '$cate_id' order by `name` asc limit 32";
        }
        elseif ($filter_type == 'filter_lenght') {
          echo  $sql_filter = "select * from `film` where `category_id` = '$cate_id' order by `duration` desc limit 32";
        }
      }
      // type = 1,nation = 0, year = 0
      elseif ($_POST['filter_type'] != '' && $_POST['filter_nation'] != '' && $_POST['filter_year'] == '') {
        $filter_type = $_POST['filter_type'];
        $filter_nation = $_POST['filter_nation'];
        if ($filter_type == 'filter_id') {
          echo  $sql_filter = "select * from `film` where `category_id` = '$cate_id' and `nation_id` = '$filter_nation' order by `id` desc limit 32";
        }
        elseif ($filter_type == 'filter_view') {
          echo  $sql_filter = "select * from `film` where `category_id` = '$cate_id' and `nation_id` = '$filter_nation' order by `num_view` desc limit 32";
        }
        elseif ($filter_type == 'filter_name_desc') {
          echo  $sql_filter = "select * from `film` where `category_id` = '$cate_id' and `nation_id` = '$filter_nation' order by `name` desc limit 32";
        }
        elseif ($filter_type == 'filter_name_asc') {
          echo  $sql_filter = "select * from `film` where `category_id` = '$cate_id' and `nation_id` = '$filter_nation' order by `name` asc limit 32";
        }
        elseif ($filter_type == 'filter_lenght') {
          echo  $sql_filter = "select * from `film` where `category_id` = '$cate_id' and `nation_id` = '$filter_nation' order by `duration` desc limit 32";
        }
      }
      // type = 1,nation = 1, year = 0
      elseif ($_POST['filter_type'] != '' && $_POST['filter_nation'] == '' && $_POST['filter_year'] != '') {
        $filter_type = $_POST['filter_type'];
        $filter_year = $_POST['filter_year'];
        if ($filter_type == 'filter_id') {
          echo  $sql_filter = "select * from `film` where `category_id` = '$cate_id' and `year` = '$filter_year' order by `id` desc limit 32";
        }
        elseif ($filter_type == 'filter_view') {
          echo  $sql_filter = "select * from `film` where `category_id` = '$cate_id' and `year` = '$filter_year' order by `num_view` desc limit 32";
        }
        elseif ($filter_type == 'filter_name_desc') {
          echo  $sql_filter = "select * from `film` where `category_id` = '$cate_id' and `year` = '$filter_year' order by `name` desc limit 32";
        }
        elseif ($filter_type == 'filter_name_asc') {
          echo  $sql_filter = "select * from `film` where `category_id` = '$cate_id' and `year` = '$filter_year' order by `name` asc limit 32";
        }
        elseif ($filter_type == 'filter_lenght') {
          echo  $sql_filter = "select * from `film` where `category_id` = '$cate_id' and `year` = '$filter_year' order by `duration` desc limit 32";
        }
      }
      // type = 1,nation = 0, year = 1
      elseif ($_POST['filter_type'] != '' && $_POST['filter_nation'] != '' && $_POST['filter_year'] != '') {
        $filter_type = $_POST['filter_type'];
        $filter_nation = $_POST['filter_nation'];
        $filter_year = $_POST['filter_year'];
        if ($filter_type == 'filter_id') {
          echo  $sql_filter = "select * from `film` where `category_id` = '$cate_id' and `nation_id` = '$filter_nation' and `year` = '$filter_year'  order by `id` desc limit 32";
        }
        elseif ($filter_type == 'filter_view') {
          echo  $sql_filter = "select * from `film` where `category_id` = '$cate_id' and `nation_id` = '$filter_nation' and `year` = '$filter_year' order by `num_view` desc limit 32";
        }
        elseif ($filter_type == 'filter_name_desc') {
          echo  $sql_filter = "select * from `film` where `category_id` = '$cate_id' and `nation_id` = '$filter_nation' and `year` = '$filter_year' order by `name` desc limit 32";
        }
        elseif ($filter_type == 'filter_name_asc') {
          echo  $sql_filter = "select * from `film` where `category_id` = '$cate_id' and `nation_id` = '$filter_nation' and `year` = '$filter_year' order by `name` asc limit 32";
        }
        elseif ($filter_type == 'filter_lenght') {
          echo  $sql_filter = "select * from `film` where `category_id` = '$cate_id' and `nation_id` = '$filter_nation' and `year` = '$filter_year' order by `duration` desc limit 32";
        }
      }
      // type = 1,nation = 1, year = 1
      elseif ($_POST['filter_type'] == '' && $_POST['filter_nation'] != '' && $_POST['filter_year'] == '') {
        $filter_nation = $_POST['filter_nation'];
        echo $sql_filter = "select * from `film` where `category_id` = '$cate_id' and `nation_id` = '$filter_nation' limit 32";
      }
      // type = 0,nation = 1, year = 0
      elseif ($_POST['filter_type'] == '' && $_POST['filter_nation'] != '' && $_POST['filter_year'] != '') {
        $filter_nation = $_POST['filter_nation'];
        $filter_year = $_POST['filter_year'];
        echo $sql_filter = "select * from `film` where `category_id` = '$cate_id' and `nation_id` = '$filter_nation' and `year` = '$filter_year'";
      }
      // type = 0,nation = 1, year = 1
      elseif ($_POST['filter_type'] == '' && $_POST['filter_nation'] == '' && $_POST['filter_year'] != '') {
        echo $filter_year = $_POST['filter_year'];
        echo $sql_filter = "select * from `film` where `category_id` = '$cate_id' and `year` = '$filter_year'";
      }
      // type = 0,nation = 0, year = 1 ()
    }
    elseif ($_GET['type'] == 'nation') {
      $nation = $_GET['id'];
      if ($_POST['filter_type'] != '' && $_POST['filter_nation'] == '' && $_POST['filter_year'] == '') {
        echo $filter_type = $_POST['filter_type'];
        if ($filter_type == 'filter_id') {
          echo  $sql_filter = "select * from `film` where `nation_id` = '$nation' order by `id` desc limit 32";
        }
        elseif ($filter_type == 'filter_view') {
          echo  $sql_filter = "select * from `film` where `nation_id` = '$nation' order by `num_view` desc limit 32";
        }
        elseif ($filter_type == 'filter_name_desc') {
          echo  $sql_filter = "select * from `film` where `nation_id` = '$nation' order by `name` desc limit 32";
        }
        elseif ($filter_type == 'filter_name_asc') {
          echo  $sql_filter = "select * from `film` where `nation_id` = '$nation' order by `name` asc limit 32";
        }
        elseif ($filter_type == 'filter_lenght') {
          echo  $sql_filter = "select * from `film` where `nation_id` = '$nation' order by `duration` desc limit 32";
        }
      }
      // type = 1,nation = 0, year = 0
      elseif ($_POST['filter_type'] != '' && $_POST['filter_nation'] == '' && $_POST['filter_year'] != '') {
        $filter_type = $_POST['filter_type'];
        $filter_year = $_POST['filter_year'];
        if ($filter_type == 'filter_id') {
          echo  $sql_filter = "select * from `film` where `nation_id` = '$nation' and `year` = '$filter_year' order by `id` desc limit 32";
        }
        elseif ($filter_type == 'filter_view') {
          echo  $sql_filter = "select * from `film` where `nation_id` = '$nation' and `year` = '$filter_year' order by `num_view` desc limit 32";
        }
        elseif ($filter_type == 'filter_name_desc') {
          echo  $sql_filter = "select * from `film` where `nation_id` = '$nation' and `year` = '$filter_year' order by `name` desc limit 32";
        }
        elseif ($filter_type == 'filter_name_asc') {
          echo  $sql_filter = "select * from `film` where `nation_id` = '$nation' and `year` = '$filter_year' order by `name` asc limit 32";
        }
        elseif ($filter_type == 'filter_lenght') {
          echo  $sql_filter = "select * from `film` where `nation_id` = '$nation' and `year` = '$filter_year' order by `duration` desc limit 32";
        }
      }
      // type = 1,nation = 0, year = 1
      elseif ($_POST['filter_type'] == '' && $_POST['filter_nation'] == '' && $_POST['filter_year'] != '') {
        echo $filter_year = $_POST['filter_year'];
        echo $sql_filter = "select * from `film` where `nation_id` = '$nation' and `year` = '$filter_year'";
      }
      // type = 0,nation = 0, year = 1
    }
    elseif ($_GET['type'] == 'single-movie') {
      $year = $_GET['year'];
      if ($_POST['filter_type'] != '' && $_POST['filter_nation'] == '' && $_POST['filter_year'] == '') {
        echo $filter_type = $_POST['filter_type'];
        if ($filter_type == 'filter_id') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 1 order by `id` desc limit 32";
        }
        elseif ($filter_type == 'filter_view') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 1 order by `num_view` desc limit 32";
        }
        elseif ($filter_type == 'filter_name_desc') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 1 order by `name` desc limit 32";
        }
        elseif ($filter_type == 'filter_name_asc') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 1 order by `name` asc limit 32";
        }
        elseif ($filter_type == 'filter_lenght') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 1 order by `duration` desc limit 32";
        }
      }
      // type = 1,nation = 0, year = 0
      elseif ($_POST['filter_type'] != '' && $_POST['filter_nation'] != '' && $_POST['filter_year'] == '') {
        $filter_type = $_POST['filter_type'];
        $filter_nation = $_POST['filter_nation'];
        if ($filter_type == 'filter_id') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 1 and `nation_id` = '$filter_nation' order by `id` desc limit 32";
        }
        elseif ($filter_type == 'filter_view') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 1 and `nation_id` = '$filter_nation' order by `num_view` desc limit 32";
        }
        elseif ($filter_type == 'filter_name_desc') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 1 and `nation_id` = '$filter_nation' order by `name` desc limit 32";
        }
        elseif ($filter_type == 'filter_name_asc') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 1 and `nation_id` = '$filter_nation' order by `name` asc limit 32";
        }
        elseif ($filter_type == 'filter_lenght') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 1 and `nation_id` = '$filter_nation' order by `duration` desc limit 32";
        }
      }
      // type = 1,nation = 1, year = 0
      elseif ($_POST['filter_type'] == '' && $_POST['filter_nation'] != '' && $_POST['filter_year'] == '') {
        $filter_nation = $_POST['filter_nation'];
        echo $sql_filter = "select * from `film` where `type_movie` = 1 and `nation_id` = '$filter_nation' limit 32";
      }
      // type = 0,nation = 1, year = 0
    }
    elseif ($_GET['type'] == 'series-movie') {
      $year = $_GET['year'];
      if ($_POST['filter_type'] != '' && $_POST['filter_nation'] == '' && $_POST['filter_year'] == '') {
        echo $filter_type = $_POST['filter_type'];
        if ($filter_type == 'filter_id') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 2 order by `id` desc limit 32";
        }
        elseif ($filter_type == 'filter_view') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 2 order by `num_view` desc limit 32";
        }
        elseif ($filter_type == 'filter_name_desc') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 2 order by `name` desc limit 32";
        }
        elseif ($filter_type == 'filter_name_asc') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 2 order by `name` asc limit 32";
        }
        elseif ($filter_type == 'filter_lenght') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 2 order by `duration` desc limit 32";
        }
      }
      // type = 1,nation = 0, year = 0
      elseif ($_POST['filter_type'] != '' && $_POST['filter_nation'] != '' && $_POST['filter_year'] == '') {
        $filter_type = $_POST['filter_type'];
        $filter_nation = $_POST['filter_nation'];
        if ($filter_type == 'filter_id') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 2 and `nation_id` = '$filter_nation' order by `id` desc limit 32";
        }
        elseif ($filter_type == 'filter_view') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 2 and `nation_id` = '$filter_nation' order by `num_view` desc limit 32";
        }
        elseif ($filter_type == 'filter_name_desc') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 2 and `nation_id` = '$filter_nation' order by `name` desc limit 32";
        }
        elseif ($filter_type == 'filter_name_asc') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 2 and `nation_id` = '$filter_nation' order by `name` asc limit 32";
        }
        elseif ($filter_type == 'filter_lenght') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 2 and `nation_id` = '$filter_nation' order by `duration` desc limit 32";
        }
      }
      // type = 1,nation = 1, year = 0
      elseif ($_POST['filter_type'] == '' && $_POST['filter_nation'] != '' && $_POST['filter_year'] == '') {
        $filter_nation = $_POST['filter_nation'];
        echo $sql_filter = "select * from `film` where `type_movie` = 2 and `nation_id` = '$filter_nation' limit 32";
      }
      // type = 0,nation = 1, year = 0
    }
    else {
      $year = $_GET['year'];
      if ($_POST['filter_type'] != '' && $_POST['filter_nation'] == '' && $_POST['filter_year'] == '') {
        echo $filter_type = $_POST['filter_type'];
        if ($filter_type == 'filter_id') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 3 order by `id` desc limit 32";
        }
        elseif ($filter_type == 'filter_view') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 3 order by `num_view` desc limit 32";
        }
        elseif ($filter_type == 'filter_name_desc') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 3 order by `name` desc limit 32";
        }
        elseif ($filter_type == 'filter_name_asc') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 3 order by `name` asc limit 32";
        }
        elseif ($filter_type == 'filter_lenght') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 3 order by `duration` desc limit 32";
        }
      }
      // type = 1,nation = 0, year = 0
      elseif ($_POST['filter_type'] != '' && $_POST['filter_nation'] != '' && $_POST['filter_year'] == '') {
        $filter_type = $_POST['filter_type'];
        $filter_nation = $_POST['filter_nation'];
        if ($filter_type == 'filter_id') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 3 and `nation_id` = '$filter_nation' order by `id` desc limit 32";
        }
        elseif ($filter_type == 'filter_view') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 3 and `nation_id` = '$filter_nation' order by `num_view` desc limit 32";
        }
        elseif ($filter_type == 'filter_name_desc') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 3 and `nation_id` = '$filter_nation' order by `name` desc limit 32";
        }
        elseif ($filter_type == 'filter_name_asc') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 3 and `nation_id` = '$filter_nation' order by `name` asc limit 32";
        }
        elseif ($filter_type == 'filter_lenght') {
          echo  $sql_filter = "select * from `film` where `type_movie` = 3 and `nation_id` = '$filter_nation' order by `duration` desc limit 32";
        }
      }
      // type = 1,nation = 1, year = 0
      elseif ($_POST['filter_type'] == '' && $_POST['filter_nation'] != '' && $_POST['filter_year'] == '') {
        $filter_nation = $_POST['filter_nation'];
        echo $sql_filter = "select * from `film` where `type_movie` = 3 and `nation_id` = '$filter_nation' limit 32";
      }
      // type = 0,nation = 1, year = 0
    }
  }
?>
<div id="content">
  <div class="block" id="page-list">
    <div class="blocktitle breadcrumbs">
      <div class="item">
        <a href="?mod=home" title="Xem Phim Nhanh, Xem Phim Online chất lượng cao miễn phí">
          <span>Xem phim</span>
        </a>
      </div>
      <div class="item last-child">
        <span itemprop="title">Phim bộ</span>
      </div>
    </div>
    <div class="filter">
      <?php
        if (isset($_GET['id'])) {
      ?>
      <form method="post" action="?mod=list&type=<?php echo $_GET['type']?>&id=<?php echo $_GET['id'] ?>">
      <?php }elseif(isset($_GET['year'])) { ?>
        <form method="post" action="?mod=list&type=<?php echo $_GET['type']?>&year=<?php echo $_GET['year'] ?>">
      <?php } ?>
        <div class="item"><span>Sắp xếp</span>
          <select class="input" name="filter_type">
            <option value="">-Mặc định-</option>
            <option value="filter_id">Mới nhất</option>
            <option value="filter_name_asc">Tiêu đề phim A-Z</option>
            <option value="filter_name_desc">Tiêu đề phim Z-A</option>
            <option value="filter_view">Lượt xem</option>
            <option value="filter_lenght">Thời lượng dài nhất</option>
          </select>
        </div>
        <div class="item <?php if($_GET['type'] == 'nation') echo 'hide' ?>"><span>Quốc gia</span>
          <select class="input" name="filter_nation">
            <option value="">-Mặc định-</option>
            <?php
              $query = mysqli_query($link, 'select * from `nation`');
              while ($r=mysqli_fetch_assoc($query)) {
            ?>
              <option value="<?php echo $r['id'] ?>"><?php echo $r['name'] ?></option>
            <?php
              }
            ?>
          </select>
        </div>
        <div class="item <?php if($_GET['type'] != 'category' && $_GET['type'] != 'nation') echo 'hide' ?>"><span>Năm</span>
          <select class="input" name="filter_year">
            <option value="">-Mặc định-</option>
            <?php
              for ($i=2018; $i >= 2015 ; $i--) {
            ?>
              <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php
              }
            ?>
          </select>
        </div>
        <div class="btn1">
          <button type="submit" class="btn" id="locphim">Lọc phim</button>
        </div>
      </form>
    </div>
    <a href="detail.html">
      <div class="blockbody" id="list-movie-update">
        <div class="tab toan-bo">
          <ul class="list-film tab toan-bo">
            <?php
              $query = mysqli_query($link, $sql_filter);
              while($r=mysqli_fetch_assoc($query)){
            ?>
            <li data-liked="852" data-views="<?php echo $r['num_view'] ?>">
              <div class="inner"><a href="?mod=detail&film_id=<?php echo $r['id'] ?>" title="<?php echo $r['name'] ?>"><img src="<?php echo $r['image'] ?>"
                    alt="<?php echo $r['name'] ?>"></a>
                <div class="info">
                  <div class="name"><a href="?mod=detail&film_id=<?php echo $r['id'] ?>" title="<?php echo $r['name'] ?>"><?php echo $r['name'] ?></a></div>
                  <div class="name2"><?php echo $r['name2'] ?></div>
                </div>
                <div class="status"><?php echo $r['status'] ?></div>
              </div>
            </li>
            <?php
              }
            ?>
          </ul>
        </div>
      </div>
    </a>
  </div>
</div>
