<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Gallery | NMV</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!--title icon-->
            <link rel="icon" type="image/ico" href="../img/logo.jpg"/>

            <!-- bootstrap jquary -->
            <script src="../js/bootstrap.min.js"></script>

            <!-- bootstrap v4.3.1 css -->
            <link rel="stylesheet" href="../css/bootstrap.min.css">

            <!-- font awesome icon -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.css" rel="stylesheet">

            <!-- google font -->
            <link href='https://fonts.googleapis.com/css?family=Aleo' rel='stylesheet'>
            <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
            <link href='https://fonts.googleapis.com/css?family=Anonymous Pro' rel='stylesheet'>
            <link href='https://fonts.googleapis.com/css?family=Baloo Bhaina' rel='stylesheet'>
            <link href='https://fonts.googleapis.com/css?family=Habibi' rel='stylesheet'>


            <!-- popper for tooltip -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


            <!-- jquary -->        
            <script src="../js/jquery.min.js"></script>
            <script src="../js/bootstrap.min.js"></script>

            <!-- css -->
            <link href="../css/main.css" rel="stylesheet">
            
            <style>
            
                .gallery-image{
                    height:250px;
                    background-position: center;
                    background-size: cover;
                    background-repeat: no-repeat;
                }
                
                .img-thumbnail:hover {
                    box-shadow: 0 0 3px 5px rgba(0, 0, 0, 0.2);
                    text-decoration: none;
                }
                
                .img-thumbnail:hover a {
                    text-decoration: none;
                }
                
                .img-thumbnail h5 {
                    color: rgb(116, 15, 23);
                } 
                
                .gallery-topic {
                    font-family: 'Baloo Bhaina';
                    text-align: center;
                }
            </style>

        </head>

        <body>
            <nav class="navbar navbar-expand-sm">
                <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index.php"><img src="../img/logo.jpg">  Sri Nishshankamalla Maha Vidyalaya</a>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="colorYellow col-lg-12 col-md-12 col-sm-12 col-12"></div>
            <div class="colorGreen col-lg-12 col-md-12 col-sm-12 col-12"></div>

            <nav class="navbar navbar-expand-sm navbar-dark">
                <!--<div class="mx-auto d-sm-flex d-block flex-sm-nowrap">-->
                    <div class="container">
                        <ul class="link nav navbar-nav">
                            <li class="mx-3 nav-item"><a class="nav-link" href="../index.php"><i class="fas fa-home"></i> | HOME</a></li>
                            <li class="mx-3 nav-item"><a class="nav-link" href="history_en.php"><i class="fas fa-history"></i> | HISTORY</a></li>
                            <li class="mx-3 nav-item"><a class="nav-link" href="about_en.php"><i class="fas fa-info"></i> | ABOUT</a></li>
                            <li class="mx-3 nav-item active"><a class="nav-link" href="gallery_en.php"><i class="fas fa-photo-video"></i> | GALLERY</a></li>
                            <li class="mx-3 nav-item"><a class="nav-link" href="contact_en.php"><i class="fas fa-phone"></i> | CONTACT</a></li>
                        </ul>
                        <span class="navbar-text">
                            <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-outline-light"  onclick="window.location.href = 'gallery_en.php';">En</button>
                            <button type="button" class="btn btn-outline-light"  onclick="window.location.href = 'gallery_si.php';">සිං</button>
                        </div>
                        </span>
                    </div>
                <!--</div>-->
            </nav>
            
            <div class="container-fluid py-4">
                <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="px-5 py-5">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="px-5 py-5">
                                <h1 class="topic text-center">Gallery</h1>
                                <div class="colorYellow col-lg-12 col-md-12 col-sm-12 col-12"></div>
                                <div class="colorGreen col-lg-12 col-md-12 col-sm-12 col-12"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="px-5 py-5">
                            </div>
                        </div>
                    </div>
                
                <div class="row">
                    
                    <?php
                        $dir = "../img/gallery";

                        // Open a directory, and read its contents
                        if (is_dir($dir)){
                            if ($dh = opendir($dir)){
                                while (($file = readdir($dh)) !== false){
                                    if(strlen($file) > 3) {
                    ?>
                    
                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 p-4">
                        <div class="img-thumbnail">
                            <a href="../img/gallery/<?php echo $file; ?>" target="_blank">
                                <div class="gallery-image rounded" style="background-image: url('../img/gallery/<?php echo $file; ?>');">

                                </div>
                                <div class="caption">
                                    <h5 class="text-center lead"><?php echo strstr($file,".",true); ?></h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- gallery item -->
                    
                    <?php
                                        }
                                }
                                closedir($dh);
                            }
                        }
                    ?>
                    
                </div>
            </div>

            <section>        
                <div class="footer position-relative">
                    <div class="container">
                        <div class="row">
                            <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
                                <div class="footerLogo col-lg-4 col-md-4 col-sm-12 col-12 py-5">
                                    <img src="../img/logo.jpg">
                                </div> 
                            </div>
                            <div class="footerLink  col-lg-4 col-md-4 col-sm-12 col-12 py-5">
                                <h6>MAIN MENU</h6>
                                <ul>
                                    <a href="../index.php"><li>Home</li></a>
                                    <a href="history_en.php"><li>History</li></a>
                                    <a href="about_en.php"><li>About</li></a>
                                    <a href="gallery_en.php"><li>Gallery</li></a>
                                    <a href="contact_en.php"><li>Contact Us</li></a>
                                </ul>
                            </div>
                            <div class="footerLink  col-lg-4 col-md-4 col-sm-12 col-12 py-5">
                                <h6>USEFUL LINKS</h6>
                                <ul>
                                    <a href="http://www.moe.gov.lk/" target="_blank"><li>Ministry of Education</li></a>
                                    <a href="https://doenets.lk/" target="_blank"><li>Department of Examination</li></a>
                                    <a href="http://www.schoolnet.lk/" target="_blank"><li>SchoolNET</li></a>
                                    <a href="http://www.nie.lk/" target="_blank"><li>National Institute of Education</li></a>
                                </ul>
                            </div>
                        </div>
                        <div class="colorYellow col-lg-12 col-md-12 col-sm-12 col-12"></div>
                        <div class="colorGreen col-lg-12 col-md-12 col-sm-12 col-12"></div>
                        <div class="row">
                            <div class="footerBottom col-lg-6 col-md-6 col-sm-6 col-6 py-3">
                                <p>copyright@madushansandaru1@gmail.com | 2019</p>
                            </div>
                            <div class="sociaMedia col-lg-6 col-md-62 col-sm-6 col-12 py-3 text-right">
                                <a href="#" target="_blank"><i class="fab fa-facebook-square fa-2x ml-3"></i></a>
                                <a href="#" target="_blank"><i class="fas fa-envelope-square fa-2x ml-3"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-twitter-square fa-2x ml-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </body>

    </html>