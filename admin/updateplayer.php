<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap CRUD Data Table for Database with Modal Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            color: rgb(156, 131, 33);
            background: #f5f5f5;
            font-family: 'Varela Round', sans-serif;
            font-size: 13px;

        }
    </style>

</head>

<body>

    <?php

    include_once 'lib/Session.php';


    include 'inc/header.php';
    Session::CheckSession();
    // $logMsg = Session::get('logMsg');
    
    $Player = new Player();

    class Player
    {

        private $db;

        // Db __construct Method
        public function __construct()
        {
            $this->db = new Database();
        }


        public function getPlayerInfoById($id_pl)
        {
            $sql = "SELECT * FROM players WHERE id_pl = :id_pl LIMIT 1";
            $stmt = $this->db->pdo->prepare($sql);
            $stmt->bindValue(':id_pl', $id_pl);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_OBJ);
            if ($result) {
                return $result;
            } else {
                return false;
            }


        }



        public function updatePlayerByIdInfo($id_pl, $data)
        {
            $name_pl = $data['name_pl'];
            $date_birthday = $data['datebirthday'];
            $age = $data['age'];
            $height = $data['height'];
            $nationality = $data['nationality'];
            $foot = $data['foot'];
            $current_time = $data['currenttime'];
            $transfert_history = $data['transferthistory'];
            $season1 = $data['season'];
            $date1 = $data['datee'];
            $joined = $data['joinedd'];
            $left = $data['leftt'];
            $MV = $data['mv'];
            $fee = $data['fee'];
            $season2 = $data['seasontwo'];
            $date2 = $data['datetwo'];
            $left1 = $data['lefttwo'];
            $joined1 = $data['joinedtwo'];
            $MV1 = $data['mvtwo'];
            $fee1 = $data['feetwo'];
            $username_pl = $data['usernamepl'];
            $about = $data['about'];
            $starting_eleven = $data['startingeleven'];
            $minutes = $data['minutess'];
            $goal_participation = $data['goalparticipation'];
            $shots_taken = $data['shotstaken'];
            $position = $data['position'];


// ****************update image*******************
    $new_image=$_FILES['image']['name'];
            $image_pl=$data['image_pl'];
if ($new_image !=''){
    $update_filename=$new_image;
    if(file_exists("./image/". $_FILES['image']['name'])){
    $filename=$_FILES['image']['name'];
    $_SESSION['status']=$filename." image already exists";
    header('location:listplayer.php');
}
}
else{
    $update_filename=$image_pl;
}


// ****************update logo*******************
    $new_image_logo=$_FILES['image_logo']['name'];
            $image_logo=$data['image_logo'];
if ($new_image_logo !=''){
    $update_filename_image_logo=$new_image_logo;
    if(file_exists("./image/". $_FILES['image']['name'])){
    $filename_image_logo=$_FILES['image']['name'];
    $_SESSION['status']=$filename_image_logo." image already exists";
    header('location:listplayer.php');
}
}
else{
    $update_filename_image_logo=$image_logo;
}

// *********update icon ****************
   $new_logo_equipe=$_FILES['image_logo_equipe']['name'];
            $logo_equipe=$data['logo_equipe'];
if ($new_logo_equipe !=''){
    $update_filename_logo_equipe=$new_logo_equipe;
    if(file_exists("./image/". $_FILES['image_logo_equipe']['name'])){
    $filename_logo_equipe=$_FILES['image_logo_equipe']['name'];
    $_SESSION['status']=$filename_logo_equipe." image already exists";
    header('location:listplayer.php');
}
}
else{
    $update_filename_logo_equipe=$logo_equipe;
}

// *********update icon2 ****************
   $new_logo_equipe2=$_FILES['image_logo_equipe2']['name'];
            $logo_equipe2=$data['logo_equipe2'];
if ($new_logo_equipe2 !=''){
    $update_filename_logo_equipe2=$new_logo_equipe2;
    if(file_exists("./image/". $_FILES['image_logo_equipe2']['name'])){
    $filename_logo_equipe2=$_FILES['image_logo_equipe2']['name'];
    $_SESSION['status']=$filename_logo_equipe2." image already exists";
    header('location:listplayer.php');
}
}
else{
    $update_filename_logo_equipe2=$logo_equipe2;
}

// *********update icon3 ****************
   $new_logo_equipe3=$_FILES['image_logo_equipe3']['name'];
            $logo_equipe3=$data['logo_equipe3'];
if ($new_logo_equipe3 !=''){
    $update_filename_logo_equipe3=$new_logo_equipe3;
    if(file_exists("./image/". $_FILES['image_logo_equipe3']['name'])){
    $filename_logo_equipe3=$_FILES['image_logo_equipe3']['name'];
    $_SESSION['status']=$filename_logo_equipe3." image already exists";
    header('location:listplayer.php');
}
}
else{
    $update_filename_logo_equipe3=$logo_equipe3;
}

// *********update video1 ****************
   $new_video1=$_FILES['image_video1']['name'];
            $video1=$data['video1'];
if ($new_video1 !=''){
    $update_filename_video1=$new_video1;
    if(file_exists("./image/". $_FILES['image_video1']['name'])){
    $filename_video1=$_FILES['image_video1']['name'];
    $_SESSION['status']=$filename_video1." image already exists";
    header('location:listplayer.php');
}
}
else{
    $update_filename_video1=$video1;
}

// *********update video2 ****************
   $new_video2=$_FILES['image_video2']['name'];
            $video2=$data['video2'];
if ($new_video2 !=''){
    $update_filename_video2=$new_video2;
    if(file_exists("./image/". $_FILES['image_video2']['name'])){
    $filename_video2=$_FILES['image_video2']['name'];
    $_SESSION['status']=$filename_video2." image already exists";
    header('location:listplayer.php');
}
}
else{
    $update_filename_video2=$video2;
}

// *********update video3 ****************
   $new_video3=$_FILES['image_video3']['name'];
            $video3=$data['video3'];
if ($new_video3 !=''){
    $update_filename_video3=$new_video3;
    if(file_exists("./image/". $_FILES['image_video3']['name'])){
    $filename_video3=$_FILES['image_video3']['name'];
    $_SESSION['status']=$filename_video3." image already exists";
    header('location:listplayer.php');
}
}
else{
    $update_filename_video3=$video3;
}


//             if ($name_tm == "") {
//                 $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
//   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
//   <strong>Error !</strong> Input Fields must not be Empty !</div>';
//                 return $msg;
//             } else {
                $sql = "UPDATE players SET
        				image_pl=:image_pl,name_pl=:name_pl,datebirthday=:datebirthday,age=:age,height=:height,nationality=:nationality,foot=:foot,currenttime=:currenttime,
                        logo_equipe=:logo_equipe,logo_equipe2=:logo_equipe2,logo_equipe3=:logo_equipe3,video1=:video1,video2=:video2,video3=:video3,
                       transferthistory=:transferthistory,
                        season=:season,datee=:datee,joinedd=:joinedd,leftt=:leftt,mv=:mv, fee=:fee, seasontwo=:seasontwo, datetwo=:datetwo,lefttwo=:lefttwo, joinedtwo=:joinedtwo ,
                         mvtwo=:mvtwo, feetwo=:feetwo, usernamepl=:usernamepl, about=:about, startingeleven=:startingeleven, minutess=:minutess, goalparticipation=:goalparticipation,
                          shotstaken=:shotstaken, image_logo= :image_logo , position= :position
       				 WHERE  id_pl = :id_pl";
                $stmt = $this->db->pdo->prepare($sql);
                $stmt->bindValue(':id_pl', $id_pl);
            $stmt->bindValue(':image_pl', $update_filename);
            $stmt->bindValue(':name_pl', $name_pl);
            $stmt->bindValue(':datebirthday', $date_birthday);
            $stmt->bindValue(':age', $age);
            $stmt->bindValue(':height', $height);
            $stmt->bindValue(':nationality', $nationality);
            $stmt->bindValue(':foot', $foot);
            $stmt->bindValue(':currenttime', $current_time);
            $stmt->bindValue(':logo_equipe', $update_filename_logo_equipe);
            $stmt->bindValue(':logo_equipe2', $update_filename_logo_equipe2);
            $stmt->bindValue(':logo_equipe3', $update_filename_logo_equipe3);
            $stmt->bindValue(':video1', $update_filename_video1);
            $stmt->bindValue(':video2', $update_filename_video2);
            $stmt->bindValue(':video3', $update_filename_video3);
            $stmt->bindValue(':transferthistory', $transfert_history);
            $stmt->bindValue(':season', $season1);
            $stmt->bindValue(':datee', $date1);
            $stmt->bindValue(':joinedd', $joined);
            $stmt->bindValue(':leftt', $left);
            $stmt->bindValue(':mv', $MV);
            $stmt->bindValue(':fee', $fee);
            $stmt->bindValue(':seasontwo', $season2);
            $stmt->bindValue(':datetwo', $date2);
            $stmt->bindValue(':lefttwo', $left1);
            $stmt->bindValue(':joinedtwo', $joined1);
            $stmt->bindValue(':mvtwo', $MV1);
            $stmt->bindValue(':feetwo', $fee1);
            $stmt->bindValue(':usernamepl', $username_pl);
            $stmt->bindValue(':about', $about);
            $stmt->bindValue(':startingeleven', $starting_eleven);
            $stmt->bindValue(':minutess', $minutes);
            $stmt->bindValue(':goalparticipation', $goal_participation);
            $stmt->bindValue(':shotstaken', $shots_taken);
            $stmt->bindValue(':image_logo', $update_filename_image_logo);
            $stmt->bindValue(':position', $position);
                $result = $stmt->execute();


                if ($result) {
                    echo "<script>location.href='listplayer.php';</script>";
                    Session::set('msg', '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success !</strong> Wow, Your Information updated Successfully !</div>');
                } else {
                    return false;
                }
            
               
            ?>
            <!-- ***************updateTeam ********************* -->

            <script>
                window.location.replace("listplayer.php");
            </script>

            <?php
            //  else {
            // 	echo 'Not Updated';
            // }
    
         }    
            }
    








    if (isset($_GET['id_pl'])) {
        $id_pl = preg_replace('/[^a-zA-Z0-9-]/', '', (int) $_GET['id_pl']);


    }




    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
        $updatePlayer = $Player->updatePlayerByIdInfo($id_pl, $_POST);
 if($_FILES['image']['name'] !='')
        {
            move_uploaded_file($_FILES["image"]["tmp_name"],"./image/".$_FILES["image"]["name"]);
        }
        else $_SESSION['status']="image updation failed!";
   


    // *******update logoequipe****************
    if($_FILES['image_logo_equipe']['name'] !='')
        {
            move_uploaded_file($_FILES["image_logo_equipe"]["tmp_name"],"./image/".$_FILES["image_logo_equipe"]["name"]);
        }
        else $_SESSION['status']="image updation failed!";

         // *******update logoequipe2****************
    if($_FILES['image_logo_equipe2']['name'] !='')
        {
            move_uploaded_file($_FILES["image_logo_equipe2"]["tmp_name"],"./image/".$_FILES["image_logo_equipe2"]["name"]);
        }
        else $_SESSION['status']="image updation failed!";

           // *******update logoequipe3****************
    if($_FILES['image_logo_equipe3']['name'] !='')
        {
            move_uploaded_file($_FILES["image_logo_equipe3"]["tmp_name"],"./image/".$_FILES["image_logo_equipe3"]["name"]);
        }
        else $_SESSION['status']="image updation failed!";

        
        // *******update video1****************
    if($_FILES['image_video1']['name'] !='')
        {
            move_uploaded_file($_FILES["image_video1"]["tmp_name"],"./image/".$_FILES["image_video1"]["name"]);
        }
        else $_SESSION['status']="image updation failed!";

         // *******update video2****************
    if($_FILES['image_video2']['name'] !='')
        {
            move_uploaded_file($_FILES["image_video2"]["tmp_name"],"./image/".$_FILES["image_video2"]["name"]);
        }
        else $_SESSION['status']="image updation failed!";

           // *******update video2****************
    if($_FILES['image_video3']['name'] !='')
        {
            move_uploaded_file($_FILES["image_video3"]["tmp_name"],"./image/".$_FILES["image_video3"]["name"]);
        }
        else $_SESSION['status']="image updation failed!";
    

        // *******update image_logo****************
    if($_FILES['image_logo']['name'] !='')
        {
            move_uploaded_file($_FILES["image_logo"]["tmp_name"],"./image/".$_FILES["image_logo"]["name"]);
        }
        else $_SESSION['status']="image updation failed!";
    }











    if (isset($updatePlayer)) {
        echo $updatePlayer;
    }





    ?>



    <div
        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; text-align: center; font-size: 30px; position: relative; top: 150px;">
        <a href="#editEmployeeModal" class="edit" data-toggle="modal">Click Here to Update<i class="material-icons"
                data-toggle="tooltip" title="Update">&#xE254;</i></a>
    </div>

    <?php $getUinfi = $Player->getPlayerInfoById($id_pl);
    if ($getUinfi) {
        ?>


        <!-- Update Modal HTML -->
        <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h4 class="modal-title">Update Player</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div style="width:400px; margin:0px auto">

                                    <!-- <form class="" action="" method="POST"> -->
                                    <div class="form-group">
                                        <label for="image_pl">image</label>
                                        <input type="file" name="image" class="form-control">
                                        <input type="hidden" name="image_pl" value="<?php echo $getUinfi->image_pl; ?>" class="form-control">
                                        <img style="width:50px;border-radius;heigth:50px" src="<?php echo "./image/" . $getUinfi->image_pl; ?>" />
                                    </div>

                                    <div class="form-group pt-3">
                                        <label for="name_pl">name player</label>
                                        <input type="text" name="name_pl" value="<?php echo $getUinfi->name_pl; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="datebirthday">date_birthday</label>
                                        <input type="text" name="datebirthday" value="<?php echo $getUinfi->datebirthday; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="age">age</label>
                                        <input type="text" name="age" value="<?php echo $getUinfi->age; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="height">height</label>
                                        <input type="text" name="height" value="<?php echo $getUinfi->height; ?>" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="nationality">nationality</label>
                                        <input type="text" name="nationality" value="<?php echo $getUinfi->nationality; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="foot">foot</label>
                                        <input type="text" name="foot" value="<?php echo $getUinfi->foot; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="currenttime">current_time</label>
                                        <input type="text" name="currenttime" value="<?php echo $getUinfi->currenttime; ?>" class="form-control">
                                    </div>
                                    <!-- *************************** -->
                                    <div class="form-group">
                                        <label for="currenttime">logo_equipe</label>
                                         <input type="file" name="image_logo_equipe" class="form-control">
                                        <input type="hidden" name="logo_equipe" value="<?php echo $getUinfi->logo_equipe; ?>" class="form-control">
                                        <img style="width:50px;border-radius;heigth:50px" src="<?php echo "./image/" . $getUinfi->logo_equipe; ?>" />
                                    </div>
                                     <div class="form-group">
                                        <label for="currenttime">logo_equipe2</label>
                                         <input type="file" name="image_logo_equipe2" class="form-control">
                                        <input type="hidden" name="logo_equipe2" value="<?php echo $getUinfi->logo_equipe2; ?>" class="form-control">
                                        <img style="width:50px;border-radius;heigth:50px" src="<?php echo "./image/" . $getUinfi->logo_equipe2; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="logo_equipe3">logo_equipe3</label>
                                        <input type="file" name="image_logo_equipe3" class="form-control">
                                        <input type="hidden" name="logo_equipe3" value="<?php echo $getUinfi->logo_equipe3; ?>" class="form-control">
                                        <img style="width:50px;border-radius;heigth:50px" src="<?php echo "./image/" . $getUinfi->logo_equipe3; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="video1">video1</label>
                                        <input type="file" name="image_video1" class="form-control">
                                        <input type="hidden" name="video1" value="<?php echo $getUinfi->video1; ?>" class="form-control"  >
                                        <video id="vp" style="width:50px;" autoplay muted loop controls >
                                            <source id="videoprev" src="<?php echo "./image/" . $getUinfi->video1; ?>"  type="video/mp4">
                                        </video>
                                        
                                    </div>
                                     <div class="form-group">
                                        <label for="video2">video2</label>
                                        <input type="file" name="image_video2" class="form-control">
                                        <input type="hidden" name="video2" value="<?php echo $getUinfi->video2; ?>" class="form-control">
                                       <video id="vp" style="width:50px;" autoplay muted loop controls >
                                            <source id="videoprev" src="<?php echo "./image/" . $getUinfi->video2; ?>"  type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="form-group">
                                        <label for="video3">video3</label>
                                          <input type="file" name="image_video3" class="form-control">
                                        <input type="hidden" name="video3" value="<?php echo $getUinfi->video3; ?>" class="form-control">
                                        <video id="vp" style="width:50px;" autoplay muted loop controls >
                                            <source id="videoprev" src="<?php echo "./image/" . $getUinfi->video3; ?>"  type="video/mp4">
                                        </video>
                                    </div>
                                    <!-- ************************************************ -->
                                    <div class="form-group">
                                        <label for="transferthistory">transfert_history</label>
                                        <input type="text" name="transferthistory" value="<?php echo $getUinfi->transferthistory; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="season">season1</label>
                                        <input type="text" name="season" value="<?php echo $getUinfi->season; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="datee">date1</label>
                                        <input type="text" name="datee" value="<?php echo $getUinfi->datee; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="joinedd">joined</label>
                                        <input type="text" name="joinedd" value="<?php echo $getUinfi->joinedd; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="leftt">left</label>
                                        <input type="text" name="leftt" value="<?php echo $getUinfi->leftt; ?>"  class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="mv">MV</label>
                                        <input type="text" name="mv" value="<?php echo $getUinfi->mv; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="fee">fee</label>
                                        <input type="text" name="fee" value="<?php echo $getUinfi->fee; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="seasontwo">season2</label>
                                        <input type="text" name="seasontwo" value="<?php echo $getUinfi->seasontwo; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="datetwo">date2</label>
                                        <input type="text" name="datetwo" value="<?php echo $getUinfi->datetwo; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="joinedtwo">joined1</label>
                                        <input type="text" name="joinedtwo" value="<?php echo $getUinfi->joinedtwo; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="lefttwo">left1</label>
                                        <input type="text" name="lefttwo" value="<?php echo $getUinfi->lefttwo; ?>" class="form-control">
                                    </div>
                                    

                                    <div class="form-group">
                                        <label for="mvtwo">MV1</label>
                                        <input type="text" name="mvtwo" value="<?php echo $getUinfi->mvtwo; ?>"  class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="feetwo">fee1</label>
                                        <input type="text" name="feetwo" value="<?php echo $getUinfi->feetwo; ?>"  class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="usernamepl">username_pl</label>
                                        <input type="text" name="usernamepl" value="<?php echo $getUinfi->usernamepl; ?>"  class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="about">about</label>
                                        <input type="text" name="about" value="<?php echo $getUinfi->about; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="startingeleven">starting_eleven</label>
                                        <input type="text" name="startingeleven" value="<?php echo $getUinfi->startingeleven; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="minutess">minutes</label>
                                        <input type="text" name="minutess" value="<?php echo $getUinfi->minutess; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="goalparticipation">goal_participation</label>
                                        <input type="text" name="goalparticipation" value="<?php echo $getUinfi->goalparticipation; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="shotstaken">shots_taken</label>
                                        <input type="text" name="shotstaken" value="<?php echo $getUinfi->shotstaken; ?>" class="form-control">
                                    </div> 
                                    <div class="form-group">
                                        <label for="image_logo">image_logo</label>
                                         <input type="file" name="image_logo" class="form-control">
                                        <input type="hidden" name="image_logo" value="<?php echo $getUinfi->image_logo; ?>" class="form-control">
                                        <img style="width:50px;border-radius;heigth:50px" src="<?php echo "./image/" . $getUinfi->image_logo; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="position">position</label>
                                        <input type="text" name="position" value="<?php echo $getUinfi->position; ?>" class="form-control">
                                    </div>
                                    <!-- 
                                     <div class="form-group">
                                        <button type="submit" name="addplayer" class="btn btn-success">Register</button>
                                    </div> -->

                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" name="update" class="btn btn-success" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <!-- delete modele -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>


</html>