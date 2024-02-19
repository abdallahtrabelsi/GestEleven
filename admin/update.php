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
    
    $Teams = new Teams();

    class Teams
    {

        private $db;

        // Db __construct Method
        public function __construct()
        {
            $this->db = new Database();
        }


        public function getTeamInfoById($id_tm)
        {
            $sql = "SELECT * FROM team WHERE id_tm = :id_tm LIMIT 1";
            $stmt = $this->db->pdo->prepare($sql);
            $stmt->bindValue(':id_tm', $id_tm);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_OBJ);
            if ($result) {
                return $result;
            } else {
                return false;
            }


        }



        public function updateTeamByIdInfo($id_tm, $data)
        {

            $name_tm = $data['name_tm'];

            // print_r($name_tm);
    



            if ($name_tm == "") {
                $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error !</strong> Input Fields must not be Empty !</div>';
                return $msg;
            } else {
                $sql = "UPDATE team SET
        				name_tm = :name_tm
       				 WHERE  id_tm = :id_tm";
                $stmt = $this->db->pdo->prepare($sql);
                $stmt->bindValue(':name_tm', $name_tm);
                $stmt->bindValue(':id_tm', $id_tm);
                $result = $stmt->execute();


                if ($result) {
                    echo "<script>location.href='team.php';</script>";
                    Session::set('msg', '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success !</strong> Wow, Your Information updated Successfully !</div>');
                } else {
                    return false;
                }
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








    if (isset($_GET['id_tm'])) {
        $id_tm = preg_replace('/[^a-zA-Z0-9-]/', '', (int) $_GET['id_tm']);


    }




    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
        $updateTeam = $Teams->updateTeamByIdInfo($id_tm, $_POST);

    }
    if (isset($updateTeam)) {
        echo $updateTeam;
    }





    ?>



    <div
        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; text-align: center; font-size: 30px; position: relative; top: 150px;">
        <a href="#editEmployeeModal" class="edit" data-toggle="modal">Click Here to Update<i class="material-icons"
                data-toggle="tooltip" title="Update">&#xE254;</i></a>
    </div>

    <?php $getUinfi = $Teams->getTeamInfoById($id_tm);
    if ($getUinfi) {
        ?>


        <!-- Update Modal HTML -->
        <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="">
                        <div class="modal-header">
                            <h4 class="modal-title">Update Data</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Name of Team</label>
                                <input type="text" name="name_tm" class="form-control"
                                    value="<?php echo $getUinfi->name_tm; ?>" required>
                            </div>

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