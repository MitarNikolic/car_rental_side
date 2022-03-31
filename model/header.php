<?php

function printHeader(bool $isInRoot){
    $pathToRoot = '';
    if(!$isInRoot){
         $pathToRoot = '../../';
    }
    echo '<head>

    <title>PHPJabber | Car Rental Website Template</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="'.$pathToRoot.'view/css/bootstrap.min.css">
    <link rel="stylesheet" href="'.$pathToRoot.'view/css/font-awesome.min.css">
    <link rel="stylesheet" href="'.$pathToRoot.'view/css/owl.carousel.css">
    <link rel="stylesheet" href="'.$pathToRoot.'view/css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="'.$pathToRoot.'view/css/style.css">


    <!-- SCRIPTS -->
    <script src="'.$pathToRoot.'js/jquery.js"></script>
    <script src="'.$pathToRoot.'js/bootstrap.min.js"></script>
    <script src="'.$pathToRoot.'js/owl.carousel.min.js"></script>
    <script src="'.$pathToRoot.'js/smoothscroll.js"></script>
    <script src="'.$pathToRoot.'js/custom.js"></script>

</head>'; 
}

?>