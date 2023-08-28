<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User - Dark Admin</title>

    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="asset/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="asset/css/local.css" />

    <script type="text/javascript" src="asset/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>   

    <style>
        div {
            padding-bottom:20px;
        }
        .form-control{
            color: black;
        }
        .notifyerror{
            color: red;
            font-size: 90%;
            font-style: italic;
            font-weight: normal;
            margin-bottom: 0px;
        }
    </style>
</head>
<body>
    <?php
    require('libs/db.php');

    if(isset($_GET["id"])){
        $filmID = $_GET['id'];
    }
    $sql = "SELECT * FROM film WHERE id = $filmID";
    $result = mysqli_query($link, $sql);
    
    if (mysqli_num_rows($result) == 0) { 
        echo "No required user";
    } else {
        $row = mysqli_fetch_assoc($result);
    ?>
        
    <div id="wrapper">
        <?php
            include("common.php");
        ?>
        <div id="edit-film">
            <div class="row text-center">
                <h2>Chỉnh sửa film</h2>
            </div>
            <form method="post" id="form-insert-film" name="form-insert-film" class="form-horizontal" action="" role="form" >
                <div>
                    <label for="ID-film" class="col-md-2">
                        ID phim
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="ID-film" value="<?php echo $row["id"]; ?>" readonly>
                    </div>
                </div>
                <div>
                    <label for="film-name" class="col-md-2">
                        Tên phim
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="film-name" name="film-name" value="<?php echo $row["name"]; ?>">
                    </div>
                </div>
                <div>
                    <label for="film-name2" class="col-md-2">
                        Tên phim 2
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="film-name2" name="film-name2" value="<?php echo $row["name2"]; ?>">
                    </div>
                </div>
                <div>
                    <label for="status" class="col-md-2">
                        Trạng thái
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="status" name="status" value="<?php echo $row["status"]; ?>">
                    </div>
                </div>
                <div>
                    <label for="director" class="col-md-2">
                        Đạo diễn
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="director" name="director" value="<?php echo $row["director"]; ?>">
                    </div>
                </div>
                <div>
                    <label for="actor" class="col-md-2">
                        Diễn viên
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="actor" name="actor" value="<?php echo $row["actor"]; ?>">
                    </div>
                </div>
                <div>
                    <label for="category" class="col-md-2">
                        Thể loại 
                    </label>
                    <div class="col-md-10">
                        <select id="category" style="color: black" name="category">
                            <?php 
                                $sql1 = "SELECT * FROM category";
                                $result1 = mysqli_query($link, $sql1);

                                if (mysqli_num_rows($result1) > 0) { 
                                    while($row1 = mysqli_fetch_assoc($result1)) { ?>
                                    <option value="<?php echo $row1["id"];?>" <?php echo ($row1["id"] == $row["category_id"]) ?  "selected": "" ?> >
                                        <?php echo $row1["name"];?>
                                    </option>
                            <?php 
                                    }
                                    
                                }  
                                else {
                                    echo "No catagory";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="type" class="col-md-2">
                        Type-movie 
                    </label>
                    <div class="col-md-10">
                        <select id="type" style="color: black" name="type_movie" >
                            <option value="1" <?php echo ($row["category_id"] == 1) ?  "selected": "" ?>>Phim lẻ</option>
                            <option value="2" <?php echo ($row["category_id"] == 2) ?  "selected": "" ?>>Phim bộ</option>
                            <option value="3" <?php echo ($row["category_id"] == 3) ?  "selected": "" ?>>Phim rạp</option>
                            
                            <!-- <?php 
                                $sql = "SELECT * FROM type_movie";
                                $result = mysqli_query($link, $sql);

                                if (mysqli_num_rows($result) > 0) { 
                                    while($row = mysqli_fetch_assoc($result)) { ?>
                                    <option value="<?php echo $row["id"];?>">
                                        <?php echo $row["name"];?>
                                    </option>
                            <?php 
                                    }
                                }  
                                else {
                                    echo "No nation";
                                }
                            ?> -->
                        </select>
                    </div>
                </div>
                <div>
                    <label for="nation" class="col-md-2">
                        Quốc gia
                    </label>
                    <div class="col-md-10">
                        <select id="nation" style="color: black" name="nation" >
                            <?php 
                                $sql1 = "SELECT * FROM nation";
                                $result1 = mysqli_query($link, $sql1);

                                if (mysqli_num_rows($result1) > 0) { 
                                    while($row1 = mysqli_fetch_assoc($result1)) { ?>
                                    <option value="<?php echo $row1["id"];?>" <?php echo ($row["nation_id"] == $row1["id"]) ?  "selected": "" ?>>
                                        <?php echo $row1["name"];?>
                                    </option>
                            <?php 
                                    }
                                }  
                                else {
                                    echo "No nation";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="year" class="col-md-2">
                        Năm phát hành
                    </label>
                    <div class="col-md-9">
                        <select id="year" name="year" id="year" style="color: black" >
                            <option value="2015" <?php echo ($row["year"] == 2015) ?  "selected": "" ?>>2015</option>
                            <option value="2016" <?php echo ($row["year"] == 2016) ?  "selected": "" ?>>2016</option>
                            <option value="2017" <?php echo ($row["year"] == 2017) ?  "selected": "" ?>>2017</option>
                            <option value="2018" <?php echo ($row["year"] == 2018) ?  "selected": "" ?>>2018</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="image" class="col-md-2">
                    Link ảnh 
                    </label>
                    <div class="col-md-9">
                        <input type="file" name="image_name" id="image_name" onchange="alertName()"/>
                        <input type="text" class="form-control" id="image_link" name="image" value="<?php echo $row["image"]; ?>">
                        <p class="help-block">
                            Ví dụ: /images/cuoc-chien-vo-cuc.jpg
                        </p>
                        <script>
                            function alertName() {
                                var name =  document.getElementById("image_name").value;
                                var n = name.lastIndexOf('\\'); 
                                var result = name.substring(n + 1);
                                document.getElementById("image_link").value = "image/" + result;
                            }
                        </script>
                    </div>
                </div>
                <div>
                    <label for="decription" class="col-md-2">
                    Mô tả phim 
                    </label>
                    <div class="col-md-9" style="color: black">
                        <textarea name="decription" id="decription" cols="82" rows="10" ><?php echo $row["description"]; ?></textarea>
                    </div>
                
                </div>
                <div>
                    <label for="duration" class="col-md-2">
                    Thời lượng (phút)
                    </label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" id="duration" name="duration" value="<?php echo $row["duration"]; ?>">
                    </div>
                </div>
                <div>
                    <label for="author" class="col-md-2">
                    Tác giả
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="author" name="author" value="<?php echo $row["author"]; ?>">
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-9"></div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary" id="button_update" name="button_update">Lưu lại</button>
                    </div>
                </div>
            </form>
            
        </div>  
    </div>
   
   
    <?php
        require_once("libs/db.php");
        if(isset($_POST["button_update"])){
            $name = $_POST["film-name"];
            $name2 = $_POST["film-name2"];
            $status = $_POST["status"];
            $director = $_POST["director"];
            $actor = $_POST["actor"];
            $category = $_POST["category"];
            $type_movie = $_POST["type_movie"];
            $nation = $_POST["nation"];
            $year = $_POST["year"];
            $link_image = $_POST["image"];
            $link_film = '';
            $description = $_POST["decription"];
            $duration = $_POST["duration"];
            $author = $_POST["author"];

            //thực hiện việc lưu trữ dữ liệu vào db 
            $sql = "SELECT * FROM film WHERE ID = '$filmID'";
            $check = mysqli_query($link,$sql);
            if(mysqli_num_rows($check) <= 0){ ?>
                <script>
                    alert('Phim với ID <?php echo $userID;?> không tồn tại');
                </script>";
                <?php
            }
            else{
                $sql = "UPDATE film SET 
                    name='$name',
                    name2='$name2', 
                    status='$status', 
                    director='$director', 
                    actor='$actor', 
                    category_id='$category',
                    type_movie='$type_movie',
                    nation_id='$nation',
                    image='$link_image',
                    description='$description',
                    duration='$duration',
                    author='$author'
                WHERE id = $filmID";
                $result = mysqli_query($link,$sql); 

                if ($result){?>
                    <script>
                        alert("Edit film successfully!");
                        location.href= window.location.href; //reload page
                    </script>
                <?php 
                } else{ 
                ?>
                    <script>
                        alert("Edit film fail!"); -->
                    </script>
                <?php
                }
            }
        }
    ?>
    <?php }
        mysqli_close($link);
    ?>


</body>
</html>

        
    


