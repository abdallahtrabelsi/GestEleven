<?php
include_once 'inc/header.php';
// Session::CheckSession();
// Session::CheckLogin();

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

<div class="card-header">
    <h3><i class="fas fa-users mr-2"></i><span class="float-right">Welcome! <strong>
                <span class="badge badge-lg badge-secondary text-white">
                    <?php
                    $username = Session::get('username');
                    if (isset($username)) {
                        echo $username;
                    }
                    ?>
                </span>

            </strong></span></h3>
</div>