<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Episode</title>

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
  ?>
    <div id="wrapper">
        <?php
            include("common.php");
        ?>
        <div id="edit-film">
            <div class="row text-center">
                <h2>Thêm tập phim</h2>
            </div>

            <form action="" method="post">
                <div>
                    <label for="id_film" class="col-md-2">
                        Chọn phim 
                    </label>
                    <div class="col-md-10">
                        <select id="id_film" style="color: black; width:90%" name="id_film" class="form-control">
                            <?php 
                                $sql1 = "SELECT * FROM film";
                                $result1 = mysqli_query($link, $sql1);

                                if (mysqli_num_rows($result1) > 0) { 
                                    while($row1 = mysqli_fetch_assoc($result1)) { ?>
                                    <option value="<?php echo $row1["id"];?>">
                                        <?php echo $row1["name"];?>
                                    </option>
                                <?php 
                                    }
                                }  
                                else {?>
                                    <option value="-1">None</option>
                                <?php }
                            ?>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="ID-episode" class="col-md-2">
                        ID tập phim
                    </label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" id="ID-episode" value="" name="id_episode">
                    </div>
                </div>
                <div>
                    <label for="name_episode" class="col-md-2">
                        Tên tập phim
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="name_episode" value="" name="name_episode">
                    </div>
                </div>
                <div>
                    <label for="link" class="col-md-2">
                        Link tập phim
                    </label>
                    <div class="col-md-9">
                            <input type="file" name="video_name" id="video_name" onchange="getlink()"/>
                            <input type="text" class="form-control" id="video_link" name="video" >
                            <p class="help-block">
                                Ví dụ: images/video/cuoc-chien-vo-cuc.jpg
                            </p>
                            <script>
                                function getlink() {
                                    var name =  document.getElementById("video_name").value;
                                    var n = name.lastIndexOf('\\'); 
                                    var result = name.substring(n + 1);
                                    document.getElementById("video_link").value = "images/video/" + result;
                                }
                            </script>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-9"></div>
                    <div class="col-md-3">
                        <!-- <input class="btn btn-primary" type="submit" value="Post"> -->
                        <button type="submit" class="btn btn-primary" id="button_post" name="button_post">Thêm tập phim </button>
                    </div>
                </div>
            </form>

            <?php
            if(isset($_POST["button_post"])){
                $id_film = $_POST["id_film"];
                $id_episode = $_POST["id_episode"];
                $name_episode = $_POST["name_episode"];
                $content = $_POST["video"];

                $sql = "SELECT * FROM episode WHERE episode=". $id_episode;
                $result = mysqli_query($link,$sql);
                if (mysqli_num_rows($result)){?>
                    <script>
                        alert("Tập phim này đã có");
                    </script>
                <?php
                }else {
                    $sql = "INSERT INTO episode(film_id,episode,episode_name,content)            
                        VALUES ('$id_film', '$id_episode','$name_episode','$content')";
                    $result = mysqli_query($link,$sql);
                    if($result){?>
                        <script>
                            alert("Thêm tập phim thành công!");
                        </script>
                    <?php
                    } else { ?>
                        <script>
                            alert("Lỗi thêm tập phim"); -->
                        </script>
                    <?php 
                
                    }
                }
            }
            ?>
        </div>  
    </div>
</body>
</html>
