<?php

include 'inc/header.php';
// include_once __DIR__ .'/classes/Users.php';
// include_once 'lib/Database.php';
// include_once 'lib/Session.php';

// Session::init();
// require_once ('classes/Users.php');
 
// function my_autoloader($class) {
//     require_once 'classes/' . $class . '.Users.php';
// }

// spl_autoload_register('my_autoloader');

// $users = new Users(); 
// print($users->getUserInfoById($name_pl));    

Session::CheckSession();




$logMsg = Session::get('logMsg');


if (isset($logMsg)) {
    echo $logMsg;
}
$msg = Session::get('msg');
if (isset($msg)) {
    echo $msg;
}
Session::set("msg", NULL);
Session::set("logMsg", NULL);





$Player = new Player();


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
    public function deleteplayerById($remove)
  {
    $sql = "DELETE FROM players WHERE id_pl = :id_pl ";
    $stmt = $this->db->pdo->prepare($sql);
    $stmt->bindValue(':id_pl', $remove);
    $result = $stmt->execute();
    if ($result) {
      $msg = '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success !</strong> User account Deleted Successfully !</div>';
      return $msg;
    } else {
      $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error !</strong> Data not Deleted !</div>';
      return $msg;
    }
  }
// function callA(){
// $Users=new Users();
// $allUser =$Users->getUserInfoById($userid);
// echo $allUser;

// }




//     public function SelectNamePlayerfromUser($name_pl) {
    
//     $sql = "SELECT name_pl from  players WHERE name_pl = :name_pl";
//     $stmt = $this->db->pdo->prepare($sql);
//     $stmt->bindValue(':name_pl', $name_pl);
//     $stmt->execute();
//     if ($stmt->rowCount() > 0) {
//       return true;
//     } else {
//       return false;
//     }
//   }

}
// $getUinfo->callA();
    if (isset($_GET['remove'])) {
    $remove = preg_replace('/[^a-zA-Z0-9-]/', '', (int) $_GET['remove']);
    $removePlayer = $Player->deleteplayerById($remove);
}

if (isset($removePlayer)) {
    echo $removePlayer;
    
}
?>





<?php if (Session::get("roleid") == '1') { ?>
    
    <div style="height: 50px";>
        <a class="btn btn-success btn-sm "  href="addPlToUser.php">Add player to agent</a>
    
        <!-- <a class="btn btn-success btn-sm " href="addPl.php">Add New player</a> -->
    </div>
<?php } ?>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr align="center">
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Current Time</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>


        <?php
        $Users = new Users();
        $allPlayer = $Player->selectAllPlayerData();
         $allUser = $Users->selectAllUserData();

                // if ($allUser) {
                //     $i = 0;
                //     foreach ($allUser as $value) {
                //         $i++;


        // $nameplayer=$Player->SelectNamePlayerfromUser($id_pl);
       
        //  $play = $Player->SelectNamePlayerfromUser();
            // $matchingNames = array_intersect(array_column($allPlayer, 'name_pl'), array_column($allUser, 'name_pl'));
    
        if ($allPlayer && $allUser) {
            $i = 0;
            foreach ($allPlayer as $Player) {
                $i++;
                
               
                

                ?>
                <tr class="text-left" <?php if (Session::get("id_pl") == $Player->id_pl) {
                    echo "style='background:#d9edf7' ";
                } ?>>

                    <td align="center">
                        <?php echo $i; ?>
                    <td align="center">
                        <img style="width:50px;border-radius;heigth:50px" src="./image/<?php echo $Player->image_pl; ?>" />
                    </td>
                    </td>
                    <td align="center">
                        <span class="badge badge-lg badge-secondary text-white" >
                        <?php echo $Player->name_pl; ?>
                        </span>
                    </td>
                   <td align="center">
                        <span class="badge badge-lg badge-secondary text-white">
                        <?php echo $Player->currenttime; ?>
                        </span><br>
                        <img style="width:50px;border-radius;heigth:50px" src="./image/<?php echo $Player->logo_equipe; ?>" />
                    </td>



                    <td align="center">
                         
    
                        <?php 
                       
                
// if($allUser->$Users == true ){   
    // $i=1;                  
                     if (Session::get("roleid") == '1')  {
                // foreach($allUser as $value)
                
                //             $valuename_pl=$value->name_pl;
                //           $array = explode (",", $valuename_pl);
                //         // print_r ($array);
                //        if (in_array($Player->name_pl, $array)){
                           
                         ?>
                        
                            <a class="btn btn-success btn-sm
                                    " href="player.php?id_pl=<?php echo $Player->id_pl; ?>">View</a>
                                    
                     <?php
                 
                
            // }
                // }
                ?>
                            <!-- <a class="btn btn-info btn-sm " href="updateplayer.php?id_pl=<?php echo $Player->id_pl; ?>">Edit</a> -->

                            <a id="refreshButton" onclick="return confirm('Are you sure To Delete ?')" class="btn btn-danger
                            <?php if (Session::get("id_pl") == $Player->id_pl) {
                                echo "disabled";
                            } ?>
                                     btn-sm " href="?remove=<?php echo $Player->id_pl; ?>">Remove</a>
                                    
                                 


                        <?php 
                //     }
                   }


                         elseif (Session::get("id_pl") == $Player->id_pl && Session::get("roleid") == '2') { ?>
                            <!-- <a class="btn btn-success btn-sm " href="profile.php?id=<?php echo $Player->id_pl; ?>">View</a> -->
                            <!-- <a class="btn btn-info btn-sm " href="profile.php?id=<?php echo $Player->id_pl; ?>">Edit</a> -->
                        <?php } 
                        elseif (Session::get("roleid") == '2') { ?>
                            <a class="btn btn-success btn-sm
                                  <?php if ($value->roleid == '1') {
                                      echo "disabled";
                                  } ?>
                                  " href="profile.php?id_tm=<?php echo $Player->id_pl; ?>">View</a>
                            <a class="btn btn-info btn-sm
                                  <?php if ($Player->roleid == '1') {
                                      echo "disabled";
                                  }
                                   ?>
                                  <!-- " href="profile.php?id_pl= -->
                                  <?php 
                                //   echo $Player->id_pl; 
                                ?>
                                <!-- ">Edit</a> -->
                        <?php }


                         
                           foreach($allUser as $value){
                            $valuename_pl=$value->name_pl;
                        
                        
                         if (Session::get("id") == $value->id &&  Session::get("roleid") == '3' ){
                           
                            $array = explode (",", $valuename_pl);
                        // print_r ($array);
                       if (in_array($Player->name_pl, $array)){
                       
                            ?>
                            <a class="btn btn-success btn-sm " href="player.php?id_pl=<?php echo $Player->id_pl; ?>?id=<?php echo $value->id; ?>">View</a>
                            <?php
                        }
                        ?>
                            <!-- <a class="btn btn-info btn-sm " href="player.php?id_pl=
                            <?php
                            //  echo $Player->id_pl;
                              ?>
                            ">Edit</a> -->
                        <?php } 
                       
                        
            }
        }
    }
    // }}
         ?>

            </td>
        </tr>
    </tbody>

</table>