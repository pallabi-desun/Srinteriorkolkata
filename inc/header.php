<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SR Interior || Home</title>
    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="SR Interior offers bespoke interior designs for your modern home, including modern kitchens, stylish bathrooms, elegant dining rooms, and cozy bedrooms." />
<link rel="canonical" href="http://srinteriorkolkata.in/" />
<meta property="og:locale" content="en_IN" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Modern Home Interior Designers SR Interior" />
<meta property="og:description" content="SR Interior offers bespoke interior designs for your modern home, including modern kitchens, stylish bathrooms, elegant dining rooms, and cozy bedrooms." />
<meta property="og:url" content="http://srinteriorkolkata.in/" />
<meta property="og:site_name" content="SR Interior" />
    <!-- master stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">
    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
    <div class="boxed_wrapper">
        <div class="preloader"></div>
        
        <!--Start Main Header-->
        <header class="main-header header-style2 stricky stricky-fixed">
            <div class="inner-container clearfix">
                <div class="logo-box-style2 float-left">
                    <a href="index.html">
                        <img src="images/resources/logo.png" alt="SR-Interior">
                    </a>
                </div>
                <div class="main-menu-box float-right">
                    <nav class="main-menu style2 clearfix">
                        <div class="navbar-header clearfix">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="<?= $_SERVER['REQUEST_URI']=="/Srinteriorkolkata/index.php"?"current":"" ?>"><a href="index.php">Home</a></li>
                                <li class="<?= $_SERVER['REQUEST_URI']=="/Srinteriorkolkata/about.php"?"current":"" ?>"><a href="about.php">About Us</a></li>
                                <li class="<?= $_SERVER['REQUEST_URI']=="/Srinteriorkolkata/services.php"?"current":"" ?>" class="dropdown"><a href="services.php">Services</a>
                                    <ul>
                                    <li><a href="services.php">View All Services</a></li>
                                    <?php ;
                                    $sql = "SELECT * FROM `service_cat`";
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_num_rows($result);
                                        while ($rows = mysqli_fetch_assoc($result)) {
									?>	
                                        <li><a href="<?php echo $rows['sevice_name'] ?>'.php'"><?php echo $rows['sevice_name'] ?></a></li>
                                        <?php } ?> 
                                    </ul>
                                </li>
                                <li class="<?= $_SERVER['REQUEST_URI']=="/Srinteriorkolkata/project.php"?"current":"" ?>"><a href="project.php">Projects</a></li>
                                <li class="<?= $_SERVER['REQUEST_URI']=="/Srinteriorkolkata/blog.php"?"current":"" ?>"><a href="blog.php">Blog</a></li>
                                <li class="<?= $_SERVER['REQUEST_URI']=="/Srinteriorkolkata/contact.php"?"current":"" ?>"><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    
                    <div class="mainmenu-right style2">
                        <div class="button">
                            <a class="btn-one" href="#">Get a Quote<span class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--End Main Header-->