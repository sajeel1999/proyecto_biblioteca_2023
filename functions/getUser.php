<?php
    // require obligatorio
    // session_start();

    require("inicioBD.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password =  $_POST['pssword'];

        $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";


        $users = $db->prepare($sql);
    
    $users->execute();
    $user = $users->fetch(PDO::FETCH_ASSOC);

   

    // var_dump(password_verify($password, $user['password'])); die;


        if ($user && password_verify($password, $user['password'])) {
            $_SESSION["userLogeado"]=$user;

            
            
            ?>

            <script>
                window.location.href= "<?= SITE_ROOT ?>pages/libros.php";
            </script>
            <?php
            // exit();
        } else {
            // Invalid login credentials. Display error message.
            $errorMsg = "Email or password is incorrect";
        }
    }
?>