<?php
   session_start();
   
 if(isset($_POST['Sign_In'])){ 
  if(!empty($_POST['email']) && !empty($_POST['mdp']) && !empty($_POST['cmdp'])){

   if(isset($_POST['email']) && isset($_POST['mdp']) && isset($_POST['cmdp'])){
    
    $email=htmlspecialchars($_POST['email']);
    $pass=htmlspecialchars($_POST['mdp']);
    $cpass=htmlspecialchars($_POST['cmdp']);

        $bdd= new PDO('mysql:host=localhost;dbname=reservation','root','');
        $sql="SELECT * FROM login WHERE email='$email' ";
        $result= $bdd->prepare($sql);
        $result->execute();
        $data=$result->fetchAll();
        $row = $result->rowCount();

        if($row >=0){
           if(strlen($email) <=30){
              if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                
                 if($pass == $cpass){
                  
                    $pass=hash('sha256',$pass);
                    $cpass=hash('sha256',$cpass);
                    $ip=$_SERVER['REMOTE_ADDR'];

                    $insert=$bdd->prepare('INSERT INTO login(email,pword,cpssword) VALUES(:email, :pword, :cpssword)');
                    $insert->execute(array(
                       'email' => $email,
                       'pword' => $pass,
                       'cpssword' => $cpass
                    ));
                    header('Location: login.php?req_suc=success');
                 }header('Location: login.php?req_err=password');
              }else header('Location: login.php?req_err=email');
           }else header('Location: login.php?req_err=email_length');
        }else header('Location: login.php?req_err=already');       
   }else header('Location: login.php?req_err=msg1');
  }else header('Location: login.php?req_err=msg');
 }








//    if(isset($_POST['Sign_In'])){
      
//     $email=$_POST['email'];
//     $pass=$_POST['mdp'];

//     $db= new PDO('mysql:host=localhost;dbname=reservation','root','');

//     $sql="SELECT * FROM login WHERE email='$email' ";
//     $result= $db->prepare($sql);
//     $result->execute();

//     if($result->rowCount() > 0){

//         $data = $result->fetchAll();
//         if(password_hash($pass, $data[0]["password"])){

//            echo "Connexion effectue !";
//            $_SESSION['email'] = $email;
           
//         }
//     }
//     else{
//         $pass=password_hash($pass,PASSWORD_DEFAULT);
//         $sql="INSERT INTO login(email,pword) VALUES('$email','$pass')";
//         $req=$db->prepare($sql);
//         $req->execute();
//         echo "Enregistrement effectue";
//     }
//    }

?>