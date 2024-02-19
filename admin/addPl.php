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

    include 'inc/header.php';
    Session::CheckSession();
    $player = new Player();
    // $Users = new Users();
    // $logMsg = Session::get('logMsg');
    // $userid = $_SESSION['id'];
    





    class Player
    {



        private $db;

        // Db __construct Method
        public function __construct()
        {
            $this->db = new Database();
        }
        public function addNewPlayerByAdmin($data)
        {
            $image_pl =$_FILES["image_pl"]["name"];
            $tempname = $_FILES["image_pl"]["tmp_name"];
            $folder = "./image/". $image_pl;
            move_uploaded_file($tempname,$folder);

            // *********************insert icon1***************************
            $logo_equipe =$_FILES["logo_equipe"]["name"];
            $tempname_logo = $_FILES["logo_equipe"]["tmp_name"];
            $folder = "./image/". $logo_equipe;
            move_uploaded_file($tempname_logo,$folder);
            // *********************insert icon2***************************
             $logo_equipe2 =$_FILES["logo_equipe2"]["name"];
            $tempname_logo2 = $_FILES["logo_equipe2"]["tmp_name"];
            $folder = "./image/". $logo_equipe2;
            move_uploaded_file($tempname_logo2,$folder);
            // *********************insert icon3***************************
             $logo_equipe3 =$_FILES["logo_equipe3"]["name"];
            $tempname_logo3 = $_FILES["logo_equipe3"]["tmp_name"];
            $folder = "./image/". $logo_equipe3;
            move_uploaded_file($tempname_logo3,$folder);

            // *********************insert video1***************************
            $video1 =$_FILES["video1"]["name"];
            $tempname_video1 = $_FILES["video1"]["tmp_name"];
            $folder = "./image/". $video1;
            move_uploaded_file($tempname_video1,$folder);
            // *********************insert video2***************************
             $video2 =$_FILES["video2"]["name"];
            $tempname_video2 = $_FILES["video2"]["tmp_name"];
            $folder = "./image/". $video2;
            move_uploaded_file($tempname_video2,$folder);
            // *********************insert video3***************************
             $video3 =$_FILES["video3"]["name"];
            $tempname_video3 = $_FILES["video3"]["tmp_name"];
            $folder = "./image/". $video3;
            move_uploaded_file($tempname_video3,$folder);
           
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

  


            //             if ($name_pl == "" || $username == "" || $email == "" || $mobile == "" || $name_tm == "" || $password == "") {
//                 $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
// <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
// <strong>Error !</strong> Input fields must not be Empty !</div>';
//                 return $msg;
//             } elseif (strlen($username) < 3) {
//                 $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
// <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
// <strong>Error !</strong> Username is too short, at least 3 Characters !</div>';
//                 return $msg;
//             } elseif (filter_var($mobile, FILTER_SANITIZE_NUMBER_INT) == FALSE) {
//                 $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
// <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
// <strong>Error !</strong> Enter only Number Characters for Mobile number field !</div>';
//                 return $msg;
    
            //             } elseif (strlen($password) < 5) {
//                 $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
// <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
// <strong>Error !</strong> Password at least 6 Characters !</div>';
//                 return $msg;
//             } elseif (!preg_match("#[0-9]+#", $password)) {
//                 $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
// <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
// <strong>Error !</strong> Your Password Must Contain At Least 1 Number !</div>';
//                 return $msg;
//             } elseif (!preg_match("#[a-z]+#", $password)) {
//                 $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
// <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
// <strong>Error !</strong> Your Password Must Contain At Least 1 Number !</div>';
//                 return $msg;
//             } elseif (filter_var($email, FILTER_VALIDATE_EMAIL === FALSE)) {
//                 $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
// <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
// <strong>Error !</strong> Invalid email address !</div>';
//                 return $msg;
//             } elseif ($checkEmail == TRUE) {
//                 $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
// <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
// <strong>Error !</strong> Email already Exists, please try another Email... !</div>';
//                 return $msg;
//             } else {
   
            $sql = "INSERT INTO players (image_pl,name_pl,datebirthday,age,height,nationality,foot,currenttime,logo_equipe,logo_equipe2,logo_equipe3,video1,video2,video3,transferthistory,season,datee,joinedd,leftt,mv, fee, seasontwo, datetwo,lefttwo, joinedtwo , mvtwo, feetwo, usernamepl, about, startingeleven, minutess, goalparticipation, shotstaken) VALUES (:image_pl,:name_pl,:datebirthday,:age,:height,:nationality,:foot,:currenttime,:logo_equipe,:logo_equipe2,:logo_equipe3,:video1,:video2,:video3,:transferthistory,:season,:datee,:joinedd,:leftt,:mv, :fee, :seasontwo, :datetwo,:lefttwo, :joinedtwo , :mvtwo, :feetwo, :usernamepl, :about, :startingeleven, :minutess, :goalparticipation, :shotstaken)";
            $stmt = $this->db->pdo->prepare($sql);
            
            $stmt->bindValue(':image_pl', $image_pl);
            $stmt->bindValue(':name_pl', $name_pl);
            $stmt->bindValue(':datebirthday', $date_birthday);
            $stmt->bindValue(':age', $age);
            $stmt->bindValue(':height', $height);
            $stmt->bindValue(':nationality', $nationality);
            $stmt->bindValue(':foot', $foot);
            $stmt->bindValue(':currenttime', $current_time);
            $stmt->bindValue(':logo_equipe', $logo_equipe);
            $stmt->bindValue(':logo_equipe2', $logo_equipe2);
            $stmt->bindValue(':logo_equipe3', $logo_equipe3);
            $stmt->bindValue(':video1', $video1);
            $stmt->bindValue(':video2', $video2);
            $stmt->bindValue(':video3', $video3);
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
            $result = $stmt->execute();

            if ($result) {
                echo "<script>location.href='listplayer.php';</script>";
                $msg = '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success !</strong> Wow, you have Registered Successfully !</div>';
                return $msg;
            } else {

                $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error !</strong> Something went Wrong !</div>';
                return $msg;
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













    ?>



    <div
        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; text-align: center; font-size: 30px; position: relative; top: 150px;">
        <a href="#editEmployeeModal" class="edit" data-toggle="modal">Click Here <i class="material-icons"
                data-toggle="tooltip" title="Add">&#xE254;</i></a>
    </div>


    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addplayer'])) {

        $addnewplayer = $player->addNewPlayerByAdmin($_POST);
    }

    if (isset($addnewplayer)) {
        echo $addnewplayer;
    }

    ?>
    <form method="POST" action="" enctype="multipart/form-data">
        <!-- Update Modal HTML -->
        <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Add Players</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Insert Players</label>
                            <div class="cad-body">



                                <div style="width:400px; margin:0px auto">

                                    <!-- <form class="" action="" method="POST"> -->
                                    <div class="form-group">
                                        <label for="image_pl">image</label>
                                        <input type="file" name="image_pl" class="form-control">
                                    </div>

                                    <div class="form-group pt-3">
                                        <label for="name_pl">name player</label>
                                        <input type="text" name="name_pl" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="datebirthday">date_birthday</label>
                                        <input type="text" name="datebirthday" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="age">age</label>
                                        <input type="text" name="age" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="height">height</label>
                                        <input type="text" name="height" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="nationality">nationality</label>
                                        <input type="text" name="nationality" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="foot">foot</label>
                                        <input type="text" name="foot" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="currenttime">current_time</label>
                                        <input type="text" name="currenttime" class="form-control">
                                    </div>
                                     <div class="form-group">
                                        <label for="logo_equipe">logo_equipe</label>
                                        <input type="file" name="logo_equipe" class="form-control">
                                    </div>
                                     <div class="form-group">
                                        <label for="logo_equipe2">logo_quipe2</label>
                                        <input type="file" name="logo_equipe2" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="logo_equipe3">logoe_quipe3</label>
                                        <input type="file" name="logo_equipe3" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="video1">video1</label>
                                        <input type="file" name="video1" class="form-control">
                                    </div>
                                     <div class="form-group">
                                        <label for="video2">video2</label>
                                        <input type="file" name="video2" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="video3">video3</label>
                                        <input type="file" name="video3" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="transferthistory">transfert_history</label>
                                        <input type="text" name="transferthistory" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="season">season1</label>
                                        <input type="text" name="season" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="datee">date1</label>
                                        <input type="text" name="datee" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="joinedd">joined</label>
                                        <input type="text" name="joinedd" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="leftt">left</label>
                                        <input type="text" name="leftt" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="mv">MV</label>
                                        <input type="text" name="mv" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="fee">fee</label>
                                        <input type="text" name="fee" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="seasontwo">season2</label>
                                        <input type="text" name="seasontwo" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="datetwo">date2</label>
                                        <input type="text" name="datetwo" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="lefttwo">left1</label>
                                        <input type="text" name="lefttwo" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="joinedtwo">joined1</label>
                                        <input type="text" name="joinedtwo" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="mvtwo">MV1</label>
                                        <input type="text" name="mvtwo" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="feetwo">fee1</label>
                                        <input type="text" name="feetwo" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="usernamepl">username_pl</label>
                                        <input type="text" name="usernamepl" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="about">about</label>
                                        <input type="text" name="about" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="startingeleven">starting_eleven</label>
                                        <input type="text" name="startingeleven" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="minutess">minutes</label>
                                        <input type="text" name="minutess" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="goalparticipation">goal_participation</label>
                                        <input type="text" name="goalparticipation" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="shotstaken">shots_taken</label>
                                        <input type="text" name="shotstaken" class="form-control">
                                    </div>


                                    <div class="form-group">
                                        <button type="submit" name="addplayer" class="btn btn-success">Register</button>
                                    </div>


    </form>
    </div>


    </div>
    </div>

    </div>

    </div>

    </div>

    </div>




</body>


</html>