<?php

require_once 'lib/Database.php';
require_once 'lib/Session.php';

class Invit
{


    // Db Property
    private $db;

    // Db __construct Method
    public function __construct()
    {
        $this->db = new Database();
    }

    // Date formate Method
    public function formatDate($date)
    {
        // date_default_timezone_set('Asia/Dhaka');
        $strtime = strtotime($date);
        return date('Y-m-d H:i:s', $strtime);
    }

    public function checkExistEmailinvit($email)
    {
        $sql = "SELECT email from  tbl_invit WHERE email = :email";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function invitLoginAutho($email, $password)
    {

        $password = SHA1($password);
        $sql = "SELECT * FROM tbl_invit WHERE email = :email AND password = :password AND expiration > NOW() LIMIT 1";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':password', $password);
        // $stmt->bindValue(':expiration', $expiration);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function invitLoginAuthotication($data)
    {

        $email = $data['email'];
        $password = $data['password'];
        

        // $dateString = "2024-01-10 12:30:00";
        // $timestamp = strtotime($dateString);

        $checkEmail = $this->checkExistEmailinvit($email);

        
        if ($email == "" || $password == ""  ) {
            $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error !</strong> Email or Password not be Empty !</div>';
            return $msg;

        } elseif (filter_var($email, FILTER_VALIDATE_EMAIL === FALSE)) {
            $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error !</strong> Invalid email address !</div>';
            return $msg;
        } elseif ($checkEmail == FALSE) {
            $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error !</strong> Email did not Found, use Register email or password please !</div>';
            return $msg;}
        else{

            $logResult = $this->invitLoginAutho($email, $password);
            // $checkExpiration = $this->checkExistexpirationinvit($expirationn);
            // $chkActive = $this->CheckActiveinvit($email);

            //             if
//             ($timestamp >= $checkExpiration) {
//                 $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
//   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
//   <strong>Error !</strong> expired password!</div>';

            //             }
            if ($logResult == TRUE) {

                Session::init();
                Session::set('login', TRUE);
                Session::set('id_invit', $logResult->id_invit);
                Session::set('nameinvit', $logResult->nameinvit);
                Session::set('id_pl', $logResult->id_pl);
                Session::set('name_pl', $logResult->name_pl);
                Session::set('id_pl2', $logResult->id_pl2);
                Session::set('name_pl2', $logResult->name_pl2);
                Session::set('email', $logResult->email);
                
                Session::set('expiration', $logResult->expiration);
                Session::set('logMsg', '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success !</strong> You are Logged In Successfully !</div>');
    // echo "<script>location.href='http://localhost/adminpanel/admin/listeinvite.php';</script>";
                echo "<script>location.href='List-Footballer.php';</script>";
               
            } else {
                $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error !</strong> Email or Password did not Matched !</div>';
                return $msg;
            }

        }


    }
    public function getinvitInfoById($id_invit)
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
    public function selectAllInvitData()
  {
    $sql = "SELECT * FROM tbl_invit ORDER BY id_invit DESC";
    $stmt = $this->db->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }



}

?>