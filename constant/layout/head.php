<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="This Penglead Lead management System Developed by Mayuri K. Freelancer in india">
  <meta name="keywords" content="Mayuri K.freelancer in india">
  <meta name="author" content="Mayuri K">
  <?php

  function url()
  {
    return sprintf(
      "%s://%s%s",
      isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
      $_SERVER['SERVER_NAME'],
      $_SERVER['REQUEST_URI']
    );
  }

  ?>
  <base href="<?= url() ?>">

  <link rel="icon" type="image/png" sizes="16x16" href="assets/uploadImage/Logo/favicon.png">
  <?php

  include('./constant/connect.php');
  // $sql_head_title = "select * from manage_website"; 
  // $result_head_title = $conn->query($sql_head_title);
  // $row_head_title = mysqli_fetch_array($result_head_title);
  ?>
  <title>Penglead Lead management System</title>

  <link href="../assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
  <link href="assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
  <link href="assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />

  <link href="assets/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">

  <link href="assets/css/helper.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/lib/html5-editor/bootstrap-wysihtml5.css" />
  <link href="assets/css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
  <link href="assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
  <link href="assets/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
  <link href="assets/css/lib/datepicker/bootstrap-datepicker3.min.css" rel="stylesheet">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>


</head>

<body class="fix-header fix-sidebar">

  <div id="page"></div>
  <div id="loading"></div>