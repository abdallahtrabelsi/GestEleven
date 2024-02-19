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

    // include_once 'lib/Session.php';
    include 'inc/header.php';
    Session::CheckSession();
    $Player = new Player();
    $Users = new Users();
    $logMsg = Session::get('logMsg');
    // $userid = $_SESSION['id'];
    





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




        public function getPlayerInfoById($id_pl)
        {
            $sql = "SELECT * FROM player WHERE id_pl = :id_pl";

            $stmt = $this->db->pdo->prepare($sql);
            $stmt->bindValue(':id_pl', $id_pl);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_OBJ);
            if ($result) {
                return $result;

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












    if (isset($_GET['id'])) {
        $userid = preg_replace('/[^a-zA-Z0-9-]/', '', (int) $_GET['id']);


    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['updatez'])) {


        $updateUser = $Users->insertPlayerIntoUser($userid, $_POST);

        echo $updateUser;
    }
    if (isset($updateUser)) {
        echo ($updateUser);

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
                window.location.href = 'listplayer.php';
            }
        });
    });
</script>

    <?php


    // $userid = $_SESSION['id'];
    // $getUinfo = $users->getUserInfoById($userid);
    // if ($getUinfo) {
    //     echo ($getUinfo);
    //     echo ($userid)
    
    ?>


    <!-- Update Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Players</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Select Agent</label>
                            <select class="form-control" name="id" id="name">
                                <?php



                                $allUser = $Users->selectAllUserData();


                                foreach ($allUser as $Users):

                                    ?>
                                    <option selected='selected' value="<?php echo $Users->id; ?>">
                                        <?php
                                        // echo $Users->id;
                                        echo $Users->name;
                                        ?>
                                    </option>
                                    <?php
                                endforeach;
                                ?>
                            </select>
                        </div>
                        <?php
                        // }
                        ?>
                        <div class="form-group">

                            <label for="name_pl">Select Player</label><br>
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Check</th>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Name</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php


                                    $allPlayer = $Player->selectAllPlayerData();

                                    if ($allPlayer) {
                                        $i = 0;
                                        foreach ($allPlayer as $Player) {
                                            $i++;

                                            ?>
                                            <tr class="text-left" <?php if (Session::get("id_pl") == $Player->id_pl) {
                                                echo "style='background:#d9edf7' ";
                                            } ?>>

                                                <td>
                                                    <input type="checkbox" name="name_pl[]"
                                                        value="<?php echo $Player->name_pl; ?>">
                                                </td>
                                                <td>
                                                    <?php echo $i; ?>
                                                </td>
                                                <td>
                                                    <img style="width:50px;border-radius:0%; heigth:30px"
                                                        src="image/<?php echo $Player->image_pl; ?>"/>

                                                </td>
                                                <td>
                                                    <?php echo $Player->name_pl; ?>
                                                </td>
                                            <?php }
                                    } ?>
                                </tbody>
                            </table>



                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <button type="submit" name="updatez" class="btn btn-success">Update</button>
                        </div>
                        <?php
                        // }
                        // else {
                        
                        //     header('Location:index.php');
                        // }
                        ?>
                </form>
            </div>
        </div>
    </div>

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