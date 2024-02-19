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
    
    $invit = new Invit();

    class Invit
    {

        private $db;

        // Db __construct Method
        public function __construct()
        {
            $this->db = new Database();
        }


        public function getInvitInfoById($id_invit)
        {
            $sql = "SELECT * FROM tbl_invit WHERE id_invit = :id_invit LIMIT 1";
            $stmt = $this->db->pdo->prepare($sql);
            $stmt->bindValue(':id_invit', $id_invit);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_OBJ);
            if ($result) {
                return $result;
            } else {
                return false;
            }


        }
        public function updateInvitByInfoId($id_invit, $data)
        {
            $name_invit = $data['nameinvit'];
            $email_invit = $data['email'];
            $date_expiration = date("Y-m-d H:i", strtotime($data['expiration']));
            $mobileinvit = $data['mobileinvit'];
            // $token = sha1($data['password']);
            $id_pl2 = $data['id_pl2'];
            $name_pl2 = $data['name_pl2'];

            $sql ="UPDATE tbl_invit SET 
            nameinvit=:nameinvit , email=:email ,expiration=:expiration ,mobileinvit=:mobileinvit,
            id_pl2=:id_pl2, name_pl2 =:name_pl2 WHERE id_invit=:id_invit      
            ";
            $stmt = $this->db->pdo->prepare($sql);
                $stmt->bindValue(':id_invit', $id_invit);
            $stmt->bindValue(':nameinvit', $name_invit);
            $stmt->bindValue(':email', $email_invit);
            $stmt->bindValue(':expiration', $date_expiration);
             $stmt->bindValue(':mobileinvit', $mobileinvit);
            $stmt->bindValue(':id_pl2', $id_pl2);
            $stmt->bindValue(':name_pl2', $name_pl2);

  $result = $stmt->execute();


                if ($result) {
                    echo "<script>location.href='listeinvite.php';</script>";
                    Session::set('msg', '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success !</strong> Wow, Your Information updated Successfully !</div>');
                } else {
                    return false;
                }
            
               
            ?>
  <script>
                window.location.replace("listeinvite.php");
            </script>

            <?php
        }
    }
   if (isset($_GET['id_invit'])) {
        $id_invit = preg_replace('/[^a-zA-Z0-9-]/', '', (int) $_GET['id_invit']);

    }
     if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
        $updateInvit = $invit->updateInvitByInfoId($id_invit, $_POST);
     }
     if (isset($updatePlayer)) {
        echo $updatePlayer;
    }
    ?>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Find the modal element by its ID and trigger its show method
        var myModal = new bootstrap.Modal(document.getElementById('editEmployeeModal'));
        myModal.show();

        // Add an event listener for clicks outside of the modal content
        document.addEventListener('click', function (event) {
            // Check if the clicked element is outside of the modal content
            if (!myModal._element.contains(event.target)) {
                // Redirect to another page or perform any action here
                window.location.href = 'listeinvite.php';
            }
            
        });
        
    });
</script>

    <?php 
    // $invit=new Invit();
    
    $getUinfoinvit = $invit->getInvitInfoById($id_invit);
    if ($getUinfoinvit) {
        ?>


        <!-- Update Modal HTML -->
        <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h4 class="modal-title">Update Guest</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div style="width:400px; margin:0px auto">

                            <div class="form-group pt-3">
                                        <label for="name_pl">name Guest</label>
                                        <input type="text" name="nameinvit" value="<?php echo $getUinfoinvit->nameinvit; ?>" class="form-control">
                                    </div>
                                    <div class="form-group pt-3">
                                        <label for="email">Email Adress :</label>
                                        <input type="text" name="email" value="<?php echo $getUinfoinvit->email; ?>" class="form-control">
                                    </div>
                                    <div class="form-group pt-3">
                                        <label for="mobile">mobile:</label>
                                        <input type="text" name="mobileinvit" value="<?php echo $getUinfoinvit->mobileinvit; ?>" class="form-control">
                                    </div>
                                    <div class="form-group pt-3">
                                        <label for="expiration">expiration time</label>
                                        <input type="datetime-local" name="expiration" value="<?php echo $getUinfoinvit->expiration; ?>" class="form-control">
                                    </div>


                                    <!-- ***************************************************************** -->
                                    <!-- ********************************************************* -->


                                     <div class="form-group">

                    <!-- <label for="expiration">Link :</label> -->
                    <?php
                    // require_once(dirname(__FILE__) . '/addPlToUser.php');
                        class Player
                                    {



                                        private $db;

                                        // Db __construct Method
                                        public function __construct()
                                        {
                                            $this->db = new Database();
                                        }
                                        public function selectAllPlayerData()
                                        {
                                            $sql = "SELECT * FROM players ORDER BY id_pl ";
                                            $stmt = $this->db->pdo->prepare($sql);
                                            $stmt->execute();
                                            return $stmt->fetchAll(PDO::FETCH_OBJ);
                                        }
                                    }
                                                                
                                $Player = new Player();
?>
                            <div class="form-group">

                            <label for="name_pl">Select Player</label><br>
                            <!-- <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Check</th>
                                        <th>ID</th>
                                        <th>ID1</th>
                                        <th>Image</th>
                                        <th>Name</th>


                                    </tr>
                                </thead>
                                <tbody> -->
                                    <?php
                                    $Users = new Users();
                                    $allUser = $Users->selectAllUserData();
                                    $allPlayer = $Player->selectAllPlayerData();

                                    if ($allPlayer && $allUser) {
                                        $i = 0;
                                        // foreach ($allPlayer as $Player) {
                                                                                          
                                             foreach($allUser as $value){
                                                     
                                    if (  Session::get("id") == $value->id ){
                                                      
                                        $valuename_pl=$value->name_pl;
                                                     $array = explode (",", $valuename_pl);                                                                                
                                                // print_r ($value->id);
                                                    ?>
                                                    
                                                <select class="form-control" name="id_pl2" id="name_pl"> 

                                                            <?php 
                                                            foreach ($allPlayer as $Player):
                                                    if (in_array($Player->name_pl, $array)){ 
                                                                ?>
                                                                
                                                                <option selected='selected' value=" <?php echo $Player->id_pl; ?> <?php echo $Player->name_pl; ?>">
                                                                <?php echo $Player->name_pl;?>
                                                            </option>
                                                                <?php
                                                    } 
                                                            endforeach 
                                                            ?>
                                                </select>
                                                    
                                                <?php 
                                                } 

                                                

                                            }                                                                           
                                        }
                                        // *****************************
                                        

                                    
                                    ?>
                             
                </div>

                <!-- ***************************************** -->
                <!-- ******************************** -->

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