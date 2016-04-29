<?php

   $dbuser = 'root';
   $dbpass = '';

   try {
      //connect to DB
      $conn = new PDO('mysql:host=localhost;dbname=lqdwrapsdb', $dbuser, $dbpass);
      $stmt = $conn->prepare('INSERT INTO quotedb (userID, firstName, lastName,
                              email, phoneNumber, carMake, carModel, carYear,
                              color, finish, doorJams, fullCarOrWheels, comments)
        VALUES(NULL, :firstName, :lastName, :email, :phoneNumber, :carMake, :carModel,
              :carYear, :color, :finish, :doorJams, :fullCarOrWheels, :comments)')
      $stmt->execute(array(':firstName' => $_POST['inputFirstName'],
        ':lastName' => $_POST['inputLastName'],
        ':email' => $_POST['inputEmail'],
        ':phoneNumber' => $_POST['inputPhone'],
        ':carMake' => $_POST['inputMake'],
        ':carModel' => $_POST['inputModel'],
        ':carYear' => $_POST['inputYear'],
        ':color' => $_POST['inputColor'],
        ':finish' => $_POST['inputFinish'],
        ':doorJams' => $_POST['inputJams'],
        ':fullCarOrWheels' => $_POST['inputCarWheels'],
        ':comments' => $_POST['inputComment']))

      header('Location: formSubmitted.php');
      exit;

   } catch(PDOException $e) {
       echo 'ERROR: ' . $e->getMessage();
   }


    //FOR SENDING EMAILS AFTER FORM IS SUBMITTED
    //TO BE UNCOMMENTED ONCE SITE GOES LIVE!
    /*$msg = "Thank you for choosing LQD Wraps!\n
            Please review this information and make sure it is correct\n
            First Name: ".$firtname."\n";
    mail('$email','LQD Wraps Quote Confirmation','$msg','From: spangler.ns.nate@gmail.com');*/
?>
