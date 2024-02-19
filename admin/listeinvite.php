<?php
include 'inc/header.php';
Session::CheckSession();
// $logMsg = Session::get('logMsg');

$invit = new Invit();
$Player =new Player();

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
        
        
    }}
class Invit
{

    private $db;

    // Db __construct Method
    public function __construct()
    {
        $this->db = new Database();
    }

    public function selectAllInvitData()
    {
        $sql = "SELECT * FROM tbl_invit ORDER BY id_invit ";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
   public function deleteinviteById($remove)
  {
    $sql = "DELETE FROM tbl_invit WHERE id_invit = :id_invit ";
    $stmt = $this->db->pdo->prepare($sql);
    $stmt->bindValue(':id_invit', $remove);
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

}
    if (isset($_GET['remove'])) {
    $remove = preg_replace('/[^a-zA-Z0-9-]/', '', (int) $_GET['remove']);
    $removeinvit = $invit->deleteinviteById($remove);
}

if (isset($removeUser)) {
    echo $removeUser;
    
}
?>
<?php if (Session::get("roleid") == '1' || Session::get("roleid") == '3')  { ?>
    <!-- <div>
        <a class="btn btn-success btn-sm " href="addPlToUser.php">Add player to user</a>
    </div> -->
    <div>
        <a class="btn btn-success btn-sm " href="addinvit.php">Add New Guest</a>
    </div>
<?php } 
?>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr align=center>
            <th>ID</th>
            <th>Name</th>
            <th>Email Adresse</th>
            <th>Mobile</th>
            <!-- <th>Password</th> -->
            <th>Expiration Time</th>
            <th>Player List</th>
            <th>Action</th>
            

        </tr>
    </thead>
    <tbody>
        <?php


        $allinvit = $invit->selectAllInvitData();
            // $password=password_hash($password, PASSWORD_DEFAULT);
            $allPlayer = $Player->selectAllPlayerData();
        if ($allinvit) {
            $i = 0;
            foreach ($allinvit as $invit) {
                $i++;

                ?>
                <tr  class="text-left" <?php if (Session::get("id_invit") == $invit->id_invit) {
                    echo "style='background:#d9edf7' ";
                } ?>>

                    <td align=center>
                        <?php echo $i; ?>
                    </td>
                    <td align=center>
                        <?php echo $invit->nameinvit; ?>
                    </td>
                    <td align=center>
                        <?php echo $invit->email; ?>
                    </td>
                     <td align=center>
                        <?php echo $invit->mobileinvit; ?>
                    </td>
                    
                   
                    <td align=center>
                        <?php echo $invit->expiration; ?>
                    </td>
                    <td align=center>
                     <?php 
                       foreach ($allPlayer as $Player)
                       {
                        if ($Player->id_pl == $invit->id_pl){  
                            ?>
                            <span class="badge badge-lg badge-secondary text-white">
                            <?php 
                            echo $Player->name_pl; ?>
                            </span>
                        
                               
                               <br>
                               <br> 
                               <?php
                       }
                               elseif ($Player->id_pl == $invit->id_pl2){
                               if (!isset($invit->id_pl2)){
                               
                            echo '';
                               }
                               else {
                                ?>
                                <span class="badge badge-lg badge-secondary text-white">
                                    <?php
                                echo $Player->name_pl; ?>
                               </span>
                               <?php
                               }
                               }}
                               ?> 

                    </td> 



                    <td align=center>


                        <?php if (Session::get("roleid") == '1') { ?>
                            <a class="btn btn-success btn-sm
                                    " href="listeinvite.php?id_invit=<?php echo $invit->id_invit; ?>">View</a>
                            <a class="btn btn-info btn-sm " href="updateGest.php?id_invit=<?php echo $invit->id_invit; ?>">Edit</a>
                            <a onclick="return confirm('Are you sure To Delete ?')" class="btn btn-danger
                            <?php if (Session::get("id_invit") == $invit->id_invit) {
                                echo "disabled";
                            } ?>
                           
                               btn-sm " href="?remove=<?php echo $invit->id_invit; ?>">Remove</a>




                        <?php } elseif (Session::get("id_invit") == $invit->id_invit && Session::get("roleid") == '2') { ?>
                            <a class="btn btn-success btn-sm " href="profile.php?id=<?php echo $invit->id_invit; ?>">View</a>
                            <a class="btn btn-info btn-sm " href="profile.php?id=<?php echo $invit->id_invit; ?>">Edit</a>
                        <?php } elseif (Session::get("roleid") == '2') { ?>
                            <a class="btn btn-success btn-sm
                                  <?php if ($invit->roleid == '1') {
                                      echo "disabled";
                                  } ?>
                                  " href="profile.php?id_tm=<?php echo $invit->id_invit; ?>">View</a>
                            <a class="btn btn-info btn-sm
                                  <?php if ($invit->roleid == '1') {
                                      echo "disabled";
                                  } ?>
                                  " href="profile.php?id_invit=<?php echo $invit->id_pl; ?>">Edit</a>
                        <?php } 
                        
                        $Users = new Users();
                        $allUser = $Users->selectAllUserData();
                        if ($allUser){
                            $i=0;
                                    foreach($allUser as $value)
                                $i++;
                                   

                        if ( Session::get("roleid") == '3') { 
                            // $array =explode (",",$valuename_pl);
                            // if (in_array())
                            
                            ?>
                            <a class="btn btn-success btn-sm " href="listeinvite.php?id_invit=<?php echo $invit->id_invit; ?>">View</a>
                            <a class="btn btn-info btn-sm " href="updateGest.php?id_invit=<?php echo $invit->id_invit; ?>">Edit</a>
                            <a onclick="return confirm('Are you sure To Delete ?')" class="btn btn-danger
                            <?php if (Session::get("id_invit") == $invit->id_invit) {
                                echo "disabled";
                            } ?>
                               
                                     btn-sm " href="#">Remove</a>
                        <?php } 
                        else { 
                            ?>
                           
                        <?php
                        //  }
            } 
        }}
        } ?>

            </td>
        </tr>
    </tbody>

</table>