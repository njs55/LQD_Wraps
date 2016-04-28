<?php
   include 'connectionDB.php';
   
   $firstName = $_POST['inputFirstName'];
   $lastName = $_POST['inputLastName'];
   $email = $_POST['inputEmail'];
   $phone = $_POST['inputPhone'];
   $make = $_POST['inputMake'];
   $model = $_POST['inputModel'];
   $year = $_POST['inputYear'];
   $color = $_POST['inputColor'];
   $finish = $_POST['inputFinish'];
   $jams = $_POST['inputJams'];
   $carWheels = $_POST['inputCarWheels'];
   $comments = $_POST['inputComment'];
   
   //****Wasn't sure how to accomplish this tast*****
   
   //in case the user does not fill out the form properly
   //if(!$_POST['submit']) {
     // echo "please fill out the form";
      //header('Location: quote.php');
  // }
   //else {
      mysqli_query($db,"INSERT INTO quotedb (`userID`,`firstName`,`lastName`,
                     `email`,`phoneNumber`,`carMake`,`carModel`,`carYear`,
                     `color`,`finish`,`doorJams`,`fullCarOrWheels`,`comments`)
                     VALUES(NULL,'$firstName','$lastName','$email',$phone,
                     '$make','$model',$year,'$color','$finish',$jams,
                     '$carWheels','$comments')");
      header('Location: formSubmitted.php');
    //}
    $msg = "Thank you for choosing LQD Wraps!\n
            Please review this information and make sure it is correct\n
            First Name: ".$firtname."\n";
    mail('$email','LQD Wraps Quote Confirmation','$msg','From: spangler.ns.nate@gmail.com');
?>
