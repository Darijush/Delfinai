<?php
 session_start();
 if (isset($_POST['login'])) {
     $username = $_POST['username'];
     $password = $_POST['password'];
     if(!file_exists('C:\xampp\htdocs\Delfinai\bank1/data/users.json')){
       $warning = '<p>Register at least one user</p>';
    }else{
        $userData = json_decode(file_get_contents('C:\xampp\htdocs\Delfinai\bank1/data/users.json',1),true);
        function getUserData($username, $userData){
            foreach($userData as &$user){
                if(in_array($username,$user)){
                    $result = [$user['userId'],$user['username'],$user['passwordHash']];
                    return $result;
                    break;
                }
            }

        }
        $user = getUserData($username,$userData);
         if (password_verify($password, $user[2])) {
             $_SESSION['user_id'] = $user[0];
             header ('Location: http://localhost/delfinai/bank1/main.php');
             die;
         } else {
            $warning = '<p class="error">Username password combination is wrong!</p>';
         }
     }
 }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Bank V1 Login</title>
</head>
<body>
        <div class='container' style = 'padding-top: 100px'>
            <?= (isset($_GET))? "Enter username and password for Bank V1 user login
            <div>
            or go to registration page <a href='http://localhost/delfinai/bank1/pages/userRegistration.php' role='button' class='btn btn-primary btn-sm' style = 'margin-top: 50px'>CREATE USER</a>
            </div>": $warning?>
        </div>
    <form class='container' method='POST'>
        <div class="form-group">
            <label for="formGroupExampleInput">Username</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name='username' pattern="[a-zA-Z0-9]+" placeholder="Enter new username here" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Password</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name='password' placeholder="Enter password here">
        </div>
        <div class="form-group">
            <button type='submit' class=' btn btn-primary ' style = 'margin: 70px 20px 0px 20px' name = 'login' value = 'login'>LOG IN</button>
        </div>
    </form>
</body>
</html>