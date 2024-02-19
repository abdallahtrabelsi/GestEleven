<?php
include 'inc/header.php';

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
?>
<?php

if (isset($_GET['remove'])) {
    $remove = preg_replace('/[^a-zA-Z0-9-]/', '', (int) $_GET['remove']);
    $removeUser = $users->deleteUserById($remove);
}

if (isset($removeUser)) {
    echo $removeUser;
}
if (isset($_GET['deactive'])) {
    $deactive = preg_replace('/[^a-zA-Z0-9-]/', '', (int) $_GET['deactive']);
    $deactiveId = $users->userDeactiveByAdmin($deactive);
}

if (isset($deactiveId)) {
    echo $deactiveId;
}
if (isset($_GET['active'])) {
    $active = preg_replace('/[^a-zA-Z0-9-]/', '', (int) $_GET['active']);
    $activeId = $users->userActiveByAdmin($active);
}

if (isset($activeId)) {
    echo $activeId;
}


?>
<style>
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: center;
    }

    th {
      background-color: #f2f2f2;
    }

    @media only screen and (max-width: 550px) {
      th, td {
        display: block;
        width: 100%;
        box-sizing: border-box;
      }
      
      th {
        text-align: center;
      }
    }
  </style>
<div class="card ">

    <div class="card-body pr-2 pl-2">

        <table id="example" >
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Username</th>
                    <th class="text-center">Player Liste</th>
                    <th class="text-center">Email address</th>
                    <th class="text-center">Mobile</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Created</th>
                    <th width='25%' class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $allUser = $users->selectAllUserData();

                if ($allUser) {
                    $i = 0;
                    foreach ($allUser as $value) {
                        $i++;

                        ?>

                        <tr class="text-center" <?php if (Session::get("id") == $value->id) {
                            echo "style='background:#d9edf7' ";
                        } ?>>

                            <td>
                                <?php echo $i; ?>
                            </td>
                            <td>
                                <?php echo $value->name; ?>
                            </td>
                            <td>
                                <?php echo $value->username; ?> <br>
                                <?php if ($value->roleid == '1') {
                                    echo "<span class='badge badge-lg badge-info text-white'>Admin</span>";
                                } elseif ($value->roleid == '2') {
                                    echo "<span class='badge badge-lg badge-dark text-white'>Editor</span>";
                                } elseif ($value->roleid == '3') {
                                    echo "<span class='badge badge-lg badge-dark text-white'>User Only</span>";
                                }
                                ?>
                                <br>
                               
                            </td>
                             <td>        
                                 <span class=" badge-lg ">
                                    <?php echo $value->name_pl ?> 
                                </span>    
                             </td>
                            <td>
                                <?php echo $value->email; ?>
                            </td>

                            <td><span class="badge badge-lg badge-secondary text-white">
                                    <?php echo $value->mobile; ?>
                                </span></td>
                            <td>
                                <?php if ($value->isActive == '0') { ?>
                                    <span class="badge badge-lg badge-info text-white">Active</span>
                                <?php } else { ?>
                                    <span class="badge badge-lg badge-danger text-white">Deactive</span>
                                <?php } ?>

                            </td>
                            <td ><span class="badge badge-lg badge-secondary text-white">
                                    <?php echo $users->formatDate($value->created_at); ?>
                                </span></td>

                            <td>
                                <?php if (Session::get("roleid") == '1') { ?>
                                    <a class="btn btn-success btn-sm
                            " href="profile.php?id=<?php echo $value->id; ?>">View</a>
                                    <a class="btn btn-info btn-sm " href="profile.php?id=<?php echo $value->id; ?>">Edit</a>
                                    <a onclick="return confirm('Are you sure To Delete ?')" class="btn btn-danger
                    <?php if (Session::get("id") == $value->id) {
                        echo "disabled";
                    } ?>
                             btn-sm " href="?remove=<?php echo $value->id; ?>">Remove</a>

                                    <?php if ($value->isActive == '0') { ?>
                                        <a onclick="return confirm('Are you sure To Deactive ?')" class="btn btn-warning
                       <?php if (Session::get("id") == $value->id) {
                           echo "disabled";
                       } ?>
                                btn-sm " href="?deactive=<?php echo $value->id; ?>">Disable</a>
                                    <?php } elseif ($value->isActive == '1') { ?>
                                        <a onclick="return confirm('Are you sure To Active ?')" class="btn btn-secondary
                       <?php if (Session::get("id") == $value->id) {
                           echo "disabled";
                       } ?>
                                btn-sm " href="?active=<?php echo $value->id; ?>">Active</a>
                                    <?php } ?>




                                <?php } elseif (Session::get("id") == $value->id && Session::get("roleid") == '2') { ?>
                                    <a class="btn btn-success btn-sm " href="profile.php?id=<?php echo $value->id; ?>">View</a>
                                    <a class="btn btn-info btn-sm " href="profile.php?id=<?php echo $value->id; ?>">Edit</a>
                                <?php } elseif (Session::get("roleid") == '2') { ?>
                                    <a class="btn btn-success btn-sm
                          <?php if ($value->roleid == '1') {
                              echo "disabled";
                          } ?>
                          " href="profile.php?id=<?php echo $value->id; ?>">View</a>
                                    <a class="btn btn-info btn-sm
                          <?php if ($value->roleid == '1') {
                              echo "disabled";
                          } ?>
                          " href="profile.php?id=<?php echo $value->id; ?>">Edit</a>
                                <?php } elseif (Session::get("id") == $value->id && Session::get("roleid") == '3') { ?>
                                    <a class="btn btn-success btn-sm " href="profile.php?id=<?php echo $value->id; ?>">View</a>
                                    <a class="btn btn-info btn-sm " href="profile.php?id=<?php echo $value->id; ?>">Edit</a>
                                <?php } else { ?>
                                    <a class="btn btn-success btn-sm
                          <?php if ($value->roleid == '1') {
                              echo "disabled";
                          } ?>
                          " href="profile.php?id=<?php echo $value->id; ?>">View</a>

                                <?php } ?>

                            </td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr class="text-center">
                        <td>No user availabe now !</td>
                    </tr>
                <?php } ?>

            </tbody>

        </table>









    </div>
</div>



<?php
include 'inc/footer.php';

?>