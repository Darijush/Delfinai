<?php
    session_start();
    //userdata ['userId':rand,'username':john,'passwordHash': password_hash ]
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        if(!file_exists('C:\xampp\htdocs\Delfinai\bank1/data/users.json')){
            file_put_contents('C:\xampp\htdocs\Delfinai\bank1/data/users.json',json_encode([]));
        }
        $userData = json_decode(file_get_contents('C:\xampp\htdocs\Delfinai\bank1/data/users.json',1));
        function userNameValidation($username, $userData){
            foreach($userData as $user){
                if(in_array($username,$userData))
                return 0;
                break;
            }
            return 1;
        }
        if (userNameValidation($username, $userData) == 0) {
            $warning =  "<p style='color: crimson'>The username is already registered!</p>";
        }
        if (userNameValidation($username, $userData) == 1) {
            function createUniqId(){
                $userId = '';
                foreach(range(1,10) as $_){
                    $digit = rand(0,9);
                    $userId.="$digit";
                    }
                       
                if(!file_exists('C:\xampp\htdocs\Delfinai\bank1/data/usersID.json')){
                    file_put_contents('C:\xampp\htdocs\Delfinai\bank1/data/usersID.json',json_encode([]));
                }
                $usersId= json_decode(file_get_contents('C:\xampp\htdocs\Delfinai\bank1/data/usersID.json',1));
                if(!in_array($userId,$usersId)){
                return $userId;
                } else{
                    return createValidIBAN();
                }
                };
           
            $user = [];
            $user['id'] = createUniqId();
            $user['username'] = $username;
            $user['passwordHash'] = $password_hash;
            $userData[] = $user;
            file_put_contents('C:\xampp\htdocs\Delfinai\bank1/data/users.json',json_encode($userData));
            file_put_contents('C:\xampp\htdocs\Delfinai\bank1/data/usersID.json',json_encode($user['id']));
          
                $warning = '<p>Your registration was successful!</p>';
            }
            }
        
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Bankv V1 Registration</title>
</head>
<body>
        <div class='container' style = 'padding-top: 100px'>
        <?= (isset($_GET))? "Enter data for Bank V1 user registration": $warning?>
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
            <button type='submit' class=' btn btn-primary ' style = 'margin: 70px 20px 0px 20px' name = 'register' value = 'register'>ADD USER</button>
        </div>
    </form>
</body>
</html>