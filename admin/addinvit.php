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
$invit = new Invit();

class invit
{
    private $db;

    // Db __construct Method
    public function __construct()
    {
        $this->db = new Database();
    }

    public function addNewInvitByAdmin($data)
    {
        $nameinvit = $data['nameinvit'];
        $email = $data['email'];
        $mobileinvit = $data['mobileinvit'];
        $password = $data['password'];
        $expiration = $data['expiration'];
        // $id_pl = $data['id_pl'];
        $brands = $_POST['name_pl'];
        // $xyz = implode(",", $brands);
        $id_pl = $data["id_pl"];
        //  foreach ($_POST["name_pl"] as $xyz) {
            // Get other data (you might need to adjust this part based on your form structure)
            
        //  }
        // $checkEmail = $this->checkExistEmail($email);


        //         if ($name == "" || $username == "" || $email == "" || $mobile == "" || $name_tm == "" || $password == "") {
//             $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
// <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
// <strong>Error !</strong> Input fields must not be Empty !</div>';
//             return $msg;
//         } elseif (strlen($username) < 3) {
//             $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
// <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
// <strong>Error !</strong> Username is too short, at least 3 Characters !</div>';
//             return $msg;
//         } elseif (filter_var($mobile, FILTER_SANITIZE_NUMBER_INT) == FALSE) {
//             $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
// <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
// <strong>Error !</strong> Enter only Number Characters for Mobile number field !</div>';
//             return $msg;

        //         } elseif (strlen($password) < 5) {
//             $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
// <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
// <strong>Error !</strong> Password at least 6 Characters !</div>';
//             return $msg;
//         } elseif (!preg_match("#[0-9]+#", $password)) {
//             $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
// <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
// <strong>Error !</strong> Your Password Must Contain At Least 1 Number !</div>';
//             return $msg;
//         } elseif (!preg_match("#[a-z]+#", $password)) {
//             $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
// <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
// <strong>Error !</strong> Your Password Must Contain At Least 1 Number !</div>';
//             return $msg;
//         } elseif (filter_var($email, FILTER_VALIDATE_EMAIL === FALSE)) {
//             $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
// <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
// <strong>Error !</strong> Invalid email address !</div>';
//             return $msg;
//         } elseif ($checkEmail == TRUE) {
//             $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
// <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
// <strong>Error !</strong> Email already Exists, please try another Email... !</div>';
//             return $msg;
//         } else {

        $sql = "INSERT INTO tbl_invit(nameinvit ,email, password, mobileinvit,expiration,id_pl,name_pl) VALUES(:nameinvit, :email, :password, :mobileinvit,:expiration,:id_pl,:name_pl)";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindValue(':nameinvit', $nameinvit);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':password', SHA1($password));
        $stmt->bindValue(':mobileinvit', $mobileinvit);
        $stmt->bindValue(':expiration', $expiration);
        $stmt->bindValue(':id_pl', $id_pl);
        $stmt->bindValue(':name_pl', $brands);
        $result = $stmt->execute();
        // echo $xyz;
        if ($result) {
            $msg = '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success !</strong> Wow, you have Registered Successfully !</div>';
echo "<script>location.href='listeinvite.php';</script>";
//     echo $link;
            return $msg;
        } else {
            $msg = '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error !</strong> Something went Wrong !</div>';
            return $msg;




        }





    }

}



if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {

    $register = $invit->addNewInvitByAdmin($_POST);
}

if (isset($register)) {
    echo $register;

}

function generateRandomPassword($length = 8)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-_';
    $characterCount = strlen($characters);
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, $characterCount - 1)];
    }

    return $password;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $passwordLength = $_POST["length"];
    $expirationHours = $_POST["expiration"];

    // Generate password
    $password = generateRandomPassword();

    // Calculate expiration timestamp
    // $expirationTimestamp = time() + ($expirationHours * 3600);

    // Display generated password and expiration time
    // echo "<h2>Generated Password:</h2>";
    // echo "<p>Password: $password</p>";
    // echo "<p>Expiration Time: " . date('Y-m-d H:i:s', $expirationTimestamp) . "</p>";
}
//  else {
//     // Redirect to the index page if accessed directly
//     header("Location: index.php");
//     exit();
// }
// $invit = new Invit();

?>

<?php
     use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    


require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();  // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify your SMTP server
    $mail->SMTPAuth = true;   // Enable SMTP authentication
    $mail->Username = 'abdallahtrabelsi4@gmail.com';   // SMTP username
    $mail->Password = 'famr ggmg lumd ywhs';   // SMTP password
    $mail->SMTPSecure = 'ssl';   // Enable TLS encryption, 'ssl' also accepted
    $mail->Port = 465;   // TCP port to connect to

    //Sender and recipient settings
    $mail->setFrom('abdallahtrabelsi4@gmail.com', 'Your Name');
    $mail->addAddress('webcos123@gmail.com', 'Recipient Name');

    //Content
    $mail->isHTML(true);   // Set email format to HTML
    $mail->Subject = 'Subject of the email';
    $mail->Body    = 'This is the HTML message body';

    //Send the email
    $mail->send();
    echo 'Email has been sent';

 $name = $_POST["nameinvit"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $expiration=$_POST["expiration"];

    // Email information
    $to = $email;
    $subject = "Welcome To Guest Eleven";
    $headers = "From: $email";
     $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Compose the email message
   
   $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "password: $password\n";
    $email_message .= "expiration:  ".date('Y-m-d', strtotime($expiration))."\n"; 
$mail->AddEmbeddedImage("./image/logo-gest-eleven-gold.png", 'logo');
    // *************************************
$body ="
<html>

<body style='background-image: url('./image/0.png');'>

    <h1>Gest11</h1>    
    <div >
        <h3>You have been invited!</h3>
       
        <p>Here are your invitation details: </p>
        <pre>".$email_message."</pre>
        
        <a href=\"https://gesteleven.ae/admin/Espace.php\" class=\"button\">Go to espace</a><br />
    </div>
</body>
</html>";


} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

   
// Hello,\r\nYou have received a new guest invitation from the website.\r\nHere are the details:\r\n".$email_message."\r";
	

    // Send email
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your message! We will get back to you soon.";
        echo "<script>location.href='listeinvite.php';</script>";
    } else {
        echo "Error sending the message. Please try again later.";
        echo $email_message;

    }
}
//  else {
//     // If the form is not submitted, redirect to the form page
//    echo $email_message;
// }
// ?>
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

 <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="POST" >
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Guest</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
    <div class="cad-body">



        <div style="width:400px; margin:0px auto">

            <!-- <form class="" action="" method="post"> -->
                <div class="form-group pt-3">
                    <label for="nameinvit"> name :</label>
                    <input id="nameinvit" type="text" name="nameinvit" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email address :</label>
                    <input id="email" type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="mobileinvit">Mobile Number :</label>
                    <input type="text" name="mobileinvit" class="form-control">
                </div>
                <div class="form-group">
                    <label for='password'>Password :</label>
                    <input type='text' name='password' id='password' class="form-control">
                    <!-- <button onclick="createPassword()">Generate Password</button> -->
                    
                <input type="button" value="Generate Password" onclick="createPassword()" >
                </div>
                <script>
                    const passwordBox=document.getElementById("password");
                    const lenght=12;
                    const upperCase="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-+=<>?";
                    const allChars=upperCase;
                    function createPassword(){
                        let password="";
                        password +=upperCase[Math.floor(Math.random()* upperCase.length)];
                        while (lenght > password.length){
                            password +=allChars[Math.floor(Math.random()* allChars.length)];
                        }
                        passwordBox.value=password;
                    }
          
                </script>

                <br>
                <!-- <label for="length">Password Length:</label>
                <input type="number" id="length" name="length" min="6" max="30" required> -->
                <div class="form-group">
                    <label for="expiration">Expiration Time :</label>
                    <input type="datetime-local" id="expiration" name="expiration" class="form-control">
                </div>
                <br>
                <!-- <div class="form-group">
                    <input type="submit" value="Generate Password">
                </div> -->

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
                                                    
                                                <select class="form-control" name="id_pl"  id="name_pl" > 

                                                            <?php 
                                                            foreach ($allPlayer as $Player):
                                                    if (in_array($Player->name_pl, $array)){ 
                                                                ?>
                                                                
                                                                <option selected='selected' value="<?php echo $Player->id_pl; ?> <?php echo $Player->name_pl; ?>">
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
                <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                <script>
                $(document).ready(function() {
                var i = 1;
                $('#add').click(function() {
                    if (i <= 7) {
                    $('#dynamic_field').append('<div id="row' + i + '"><label" for="member_' + i + '">Member ' + i + '</label><input type="text" name="member_' + i + '" value=""><button type="button" class="btn_remove" name="remove" id="' + i + '">X</button></div>')
                    i++;
                    }
                });
                $(document).on('click', '.btn_remove', function() {
                    var button_id = $(this).attr("id");
                    i--;
                    $('#row' + button_id + '').remove();
                });
                });

                </script>
                <button type="button" name="add" id="add">Add Other link</button>
                <div id="dynamic_field"></div> -->
                <div class="form-group">
                    <input type="submit" value="Register" name="register" class="btn btn-success">
                </div>


            </form>
        </div>


    </div>
</div>
                </body>
<?php
if (isset($register) == true) {
    echo 'succes';
    // $link = 'http://localhost/adminpanel/player.php?id_pl=' . urlencode($Player->$id_pl);
    // echo $link;

    // header('Location:' . $link);
}
?>