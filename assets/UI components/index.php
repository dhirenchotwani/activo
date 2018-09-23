<!DOCTYPE html>

<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <!-- Icons-->
    <link href="assets/global/icons/coreui-icons-master/css/coreui-icons.min.css" rel="stylesheet">
    <link href="assets/global/icons/flag-icon-css-master/css/flag-icon.min.css" rel="stylesheet">
    <link href="assets/global/icons/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/global/icons/simple-line-icons-master/css/simple-line-icons.css" rel="stylesheet">


    <!-- Main styles for this application-->
    <link href="assets/css/style-dark.css" rel="stylesheet">
    <link href="assets/vendors/pace-progress/css/pace.min.css" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <!--        HEADER BEGINS    -->
<?php require_once("includes/header.php")?>
    <!--        HEADER ENDS    -->

    <!--    MAIN CONTENT STARTS-->
    <div class="app-body">
        <!-- SIDEBAR BEGINS -->
<?php require_once("includes/sidebar.php")?>
        <!-- SIDEBAR ENDS-->
        <!--MAIN PAGE STARTS-->
        <main class="main">
            <!-- Breadcrumb-->
<?php require_once("includes/breadcrumb.php")?>
            <!--Breadcrumb Ends-->
<!-- core page -->
          <?php require_once("untitled1.php");?>
           
<!-- core page ends-->
        </main>
        <!-- MAIN PAGE ENDS-->

        <!--   RIGHT SIDEBAR BEGINS   -->
<!-- CONFUSED ABOUT THIS SIDEBAR  WILL SEE AT THE END-->
        <!--   RIGHT SIDEBAR ENDS     -->

    </div>
    <!--  FOOTER BEGINS  -->
    <?php require_once("includes/footer.php")?>
    <!--  FOOTER ENDS  -->

    <!-- CoreUI and necessary plugins-->
    <script src="assets/global/js/jquery.min.js"></script>
    <script src="assets/global/js/popper.min.js"></script>
    <script src="assets/global/js/bootstrap-min.js"></script>
    <script src="assets/global/js/pace.min.js"></script>
    <script src="assets/global/js/perfect-scrollbar.min.js"></script>
    <script src="assets/global/js/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="assets/global/js/charts.js"></script>
    <script src="assets/global/js/custom-tooltips.js"></script>
    <script src="assets/global/js/main.js"></script>
</body>

</html>
