<?php
  session_start();
  if(isset($_POST['submit'])){
    if(!isset($_POST['email']) || !isset($_POST['password'])){
      $email = htmlspecialchars($_POST['email']);
      $usename = htmlspecialchars($_POST['password']);
      try
       {
        $query = $bdd->prepare("SELECT * FROM `users` WHERE `email`=:email AND `password` = :password");
        $query->bindParam(':email', $email);
        $query->bindParam(':password', $password);
        $query->execute();

       }
        catch (PDOException $e)
       {
        // If an error is thrown, display the message
        die('Erreur : ' . $e->getMessage());
        echo "Échec lors de l'insertion : " . $e->getMessage();
       }
       $query->execute(array($username,$password));
       $row = $query->rowCount();
       $fetch = $query->fetch();

      if($row > 0) {
        $_SESSION['user'] = $fetch['mem_id'];
        header("location: home.php");
      } else{
        echo "
        <script>alert('Invalid username or password')</script>
        <script>window.location = 'index.php'</script>
        ";
      }
    }else{
      echo "
        <script>alert('Please complete the required field!')</script>
        <script>window.location = 'index.php'</script>
      ";
    }
  }
?>
