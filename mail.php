<?php
$name = $_POST['name'];
// $firstname = $_POST['firstname'];
// $telephone = $_POST['telephone'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = "Ce message vous a été envoyé via le formulaire de contact du site Joys.agency";


$mailheader = "From:".$name."<".$email.">\r\n";


$recipient = "haddadomar02@gmail.com";

mail($recipient,$subject,$message,$mailheader)
or die ("error");

echo'
<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>JOYS AGENCY</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/j.jpeg" type="image/png">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== LineIcons CSS ======-->
    <link rel="stylesheet" href="assets/css/lineicons.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--====== Style PROJECTS CSS ======-->
    <link rel="stylesheet" href="assets/css/styleprojets.css">

    <!--====== Style FORMS CSS ======-->
    <link rel="stylesheet" href="assets/css/forms.css">

    <!--====== Style MSG ENVOYE CSS ======-->
    <link rel="stylesheet" href="assets/css/msgenvoye.css">

</head>

<body>
<div id="middle">
    <br><br>
  <h2>Votre message a bien été envoyé</h2>
  <br><br>
  <h2>Une réponse par e-mail vous sera envoyé par notre équipe</h2>
  <br><br>
  <a href="index.html" id="revenir" rel="nofollow" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.4s">REVENIR A LA PAGE PRINCIPALE</a>
</div> 
<br><br>
<footer>
    <div class="footer_content text-center">
        <a href="#"><img src="assets/images/logo JOYS-06.png" alt="Logo"></a>
            <ul class="footer_social">                       
                <li><a href="https://www.pinterest.com/joys_agency/_saved/" target="_blank"><i class="lni lni-pinterest "></i></a></li>
                <li><a href="https://www.instagram.com/joys.agency/" target="_blank"><i class="lni lni-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/company/joysagency/" target="_blank"><i class="lni lni-linkedin"></i></a></li>
            </ul>
            <span class="email">contact@joys.agency | + 33 6 37 24 90 81</span>
            <br><br>
            <h6 class="droit">© 2021 Joys Agency.</h6>                  
    </div> <!-- footer content -->
</footer>
   
</body>

</html>
';
?>


