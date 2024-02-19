<?php



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
    public function selectAllTeamData()
    {
        $sql = "SELECT * FROM team ORDER BY id_tm ";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }



}
?>
<!-- ***************updateTeam ********************* -->



<!--***************** update Team  ********************-->

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <?php

        $allTeam = $Teams->selectAllTeamData();

        if ($allTeam) {
            $i = 0;
            foreach ($allTeam as $Teams) {
                $i++;

                ?>
                <tr class="text-left" <?php if (Session::get("id_tm") == $Teams->id_tm) {
                    echo "style='background:#d9edf7' ";
                } ?>>

                    <td>
                        <?php echo $i; ?>
                    </td>
                    <td>
                        <?php echo $Teams->name_tm; ?>
                    </td>




                    <td>
                        <?php if (Session::get("roleid") == '1') { ?>
                            <a class="btn btn-success btn-sm
                                    " href="team.php?id_tm=<?php echo $Teams->id_tm; ?>">View</a>
                            <a class="btn btn-info btn-sm " href="update.php?id_tm=<?php echo $Teams->id_tm; ?>">Edit</a>
                            <a onclick="return confirm('Are you sure To Delete ?')" class="btn btn-danger
                            <?php if (Session::get("id_tm") == $Teams->id_tm) {
                                echo "disabled";
                            } ?>
                                     btn-sm " href="?remove=<?php echo $Teams->id_tm; ?>">Remove</a>






                        <?php } elseif (Session::get("id_tm") == $Teams->id && Session::get("roleid") == '2') { ?>
                            <a class="btn btn-success btn-sm " href="profile.php?id=<?php echo $Teams->id_tm; ?>">View</a>
                            <a class="btn btn-info btn-sm " href="profile.php?id=<?php echo $Teams->id_tm; ?>">Edit</a>
                        <?php } elseif (Session::get("roleid") == '2') { ?>
                            <a class="btn btn-success btn-sm
                                  <?php if ($Teams->roleid == '1') {
                                      echo "disabled";
                                  } ?>
                                  " href="profile.php?id_tm=<?php echo $Teams->id_tm; ?>">View</a>
                            <a class="btn btn-info btn-sm
                                  <?php if ($Teams->roleid == '1') {
                                      echo "disabled";
                                  } ?>
                                  " href="profile.php?id_tm=<?php echo $Teams->id_tm; ?>">Edit</a>
                        <?php } elseif (Session::get("id_tm") == $Teams->id_tm && Session::get("roleid") == '3') { ?>
                            <a class="btn btn-success btn-sm " href="team.php?id_tm=<?php echo $Teams->id_tm; ?>">View</a>
                            <a class="btn btn-info btn-sm " href="team.php?id_tm=<?php echo $Teams->id_tm; ?>">Edit</a>
                        <?php } else { ?>
                            <a class="btn btn-success btn-sm
                                  <?php if ($Teams->roleid == '1') {
                                      echo "disabled";
                                  } ?>
                                  " href="profile.php?id=<?php echo $Teams->id_tm; ?>">View</a>

                        <?php }
            }
        } ?>

            </td>
        </tr>
    </tbody>

</table>