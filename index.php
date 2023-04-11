<?php
    session_start();

    if(! isset($_SESSION['login'])){
        echo("<h3>Kindly <a href='./auth/login.php'>login</a> to continue using this app</h3>");
    }
    else{ 
        // $user = $_SESSION['username']; 
        // $pass = $_SESSION['pass'];
?>

<?php if (isset($_POST['changeSubmit'])){
            $newUser = $_POST['changeUser'];
            $newPass = $_POST['changePass'];

            $_SESSION['user'] = $newUser;
            $_SESSION['pass'] = $newPass;
        } ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bluecrest Student Pack">
    <meta name="author" content="James Akweter, Angel Dev Group">
    <link rel="apple-touch-icon" href="favicon.png">
    <title>Student Pack</title>
    <link rel="stylesheet" href="./styles/home.css">
    <!-- <link rel="stylesheet" href="./styles/page_loader.css"> -->
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="file:///C:/Users/ACER/Downloads/bootstrap-frames-templates-master/bootstrap-frames-templates-master/font-awesome.min.css">
    <link rel="stylesheet" href="./node-modules/bootstrap.min.css">
    <link rel="stylesheet" href="./node-modules/fontawesome.min.css">
    <script src="./node-modules/bootstrap.min.js"></script>
    <style>
        html{
            margin:0;
            padding:0;
        }
        div#main_content{
            padding-left: 5%;
            background-colo: #0c063d;
        }
        div#the_blue_challange{
            background: #282A35;
            color: white;
            text-align: center;
            border-radius: 90px 50px 70px 0;
        }
        h3.the_blue_challange{
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            background-image: radial-gradient(#434443, #ffffff 90%);
        }
    </style>

</head>
<body>
    <div id="loader"></div>
    <div class="global_loader" id="content-loader">
        <header>
            <!-- Navigation -->
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark text-bg-dark " aria-label="Main Navbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="./" alt="Logo"> BSP</a>
                    <?php //echo("Welcome ");  print_r($_SESSION['username']); ?>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse row navbar-collapse" id="mainNavbar">
                        <a href="/forum" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                        </a>

                        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-start mb-md-0">
                            <li><a href="./" class="nav-link px-2 text-secondary">Home</a></li>
                            <li><a href="./projects" class="nav-link px-2 text-white">Projects</a></li>
                            <li><a id="modal" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdropLive" class="nav-link px-2 text-white">Timetable</a></li>
                            <li><a href="./courses" class="fa fa-address-book nav-link px-2 text-white">Courses</a></li>
                            <li><a href="./tools" class="nav-link px-2 text-white">Tools Pack</a></li>
                            <li><a href="./fanzone" class="nav-link px-2 text-white">Fanzone</a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#onlineJotter" class="nav-link px-2 text-white">Quick Notes</a></li>
                        </ul>

                        <!-- <form class="col-12 col-md-2 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                            <input type="search" class="form-control form-control-dark" placeholder="I am looking..." aria-label="Search">
                        </form>
                        <div class="text-end  col-md-2">
                            <button type="button" class="btn btn-outline-light me-2">Login</button>
                            <button type="button" class="btn btn-warning">Sign-up</button>
                        </div> -->

                        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                        </form>

                        <div class="dropdown text-end">
                            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu text-small">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <!-- HERO BLOCK -->
            <div class="col-xxl-8 px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center rounded-3 g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6 d-none d-sm-block d-sm-none d-md-block">
                        <img src="./img/1.png" class="d-block mx-lg-auto img-fluid" alt="BSP Hero Image" width="700" height="500" loading="lazy">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="display-4 fw-bold lh-1 mb-3">The results are out now</h1>
                        <p class="lead">Log on to the Knack system and view the provisioanl results for spring 2022, or vist the <cite>Student Department</cite> for provisioanl transcript</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <button type="button" class="btn btn-outline-primary btn-lg px-4 me-md-2">Check results</button>
                        </div>
                    </div>
                </div>
            </div>
            
                <div class="row mt-5">
                    <div id="main_content" class="col-md-10 col-sm-12 mb-4">

                        <div class="row">
                            <div class="col-sm-12 col-md-7">
                                <div class="card">
                                    <img src="./img/4.png" alt="Images" class="bd-placeholder-img card-img-top" width="100%" height="180" />
                                    <div class="card-body">
                                        <h5 class="card-title">He build robots</h5>
                                        <p class="card-text">Building modern and dynamic robots is the hobby of Kwassi ~ Sem VII</p>
                                        <a href="#" class="btn btn-primary">View Samples</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-5">
                                <div class="card">
                                    <div class="card-header"><strong>Due Assignments</strong></div>
                                    <div class="card-body">
                                        <h5 class="card-title">Courses</h5>
                                        <ol type="1" class="card-text">
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">OOP | Create tables</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Calculus | Matrix</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Adv Web Tech</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Processor | Algorithms</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Sys D&A | Data Diagram</a></li>
                                        </ol>
                                        <a href="#" class="btn btn-primary">View all</a>
                                    </div>
                                    <div class="card-footer text-muted">24 hours ago</div>
                                </div>
                            </div>
                        </div>

                        <div style="display:flex;flex-direction:row;" class="row mt-5 p-5 bg-primary">
                            <div class="col-sm-12 col-md-8">
                                <label for="input file" class="fs-3 text-light justify-content-center">DOCX 2 PDF Converter | align-center</label>
                                <input type="file" class="form-control form-control-lg" id="input file" aria-label="Large file input example">
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <input type="submit" class="btn btn-light  btn-lg form-control mt-5 mb-1" value="Submit">
                            </div>
                        </div>

                        <div id="the_blue_challange" class="row mt-5 pb-5 pt-5 px-3 align-items-center justify-content-center">
                            <h3 class="fs-1 the_blue_challange">The Blue Challange</h3>
                            <p class="fs-4">Find inspiration from 2k+ blue student developers.</p>
                            <i><a class="btn btn-warning btn-lg" href="./tools">Join The Challange</a></i>
                        </div>

                        <div class="row mt-5 mb-3 p-2">
                            <div class="col-sm-12 mb-3 col-md-6 align-items-stretch">
                                <div class="col">
                                    <div class="card card-cover h-100 pb-5 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background: ur('./img/2.png');">
                                        <div class="d-flex flex-column h-100 p-4 pb-3 text-white text-shadow-1">
                                            <div style="display:flex;flex-direction:row;"><img style="border-radius:50px;" src="./img/4.png" width="40" height="40" alt="Henry"><h3 class="mb-4 offset-1 offset-md-3" >Fanzone</h3></div>
                                            <small><p>Sake of the assignment we shorn give him, he started dey bore. I taya this statistic lecturer saf... <br> <a class="fa fa-f25d f25d rounded-pill" href="#">Comment</a> | <a href="#">Reply</a> | <a href="#">Read</a></p></small>
                                            <ul class="d-flex list-unstyled mt-4">
                                                <!-- <li class="me-auto">
                                                    <img src="./img/1.png" alt="BSP" width="32" height="32" class="rounded border border-white">
                                                </li> -->
                                                <li class="d-flex align-items-center me-3">
                                                    <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                                    <small>Henry</small>
                                                </li>
                                                <li class="d-flex align-items-center">
                                                    <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                                                    <small>13 mins ago</small>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- <div class="col p-2">
                                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background: ur('./img/5.png');">
                                        <div class="d-flex flex-column h-100 p-3 pb-3 text-white text-shadow-1">
                                            <img  class="pb-5" src="../img/1.png" alt="Edmond">
                                            <p>Guys, I think the model of lectures need some... <br> <a class="link-primary" href="#">Read More</a></p>
                                            <ul class="d-flex list-unstyled mt-auto pt-3">
                                                <li class="me-auto">
                                                    <img src="./img/1.png" alt="BSP" width="32" height="32" class="rounded border border-white">
                                                </li>
                                                <li class="d-flex align-items-center me-3">
                                                    <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                                    <small>Edmond</small>
                                                </li>
                                                <li class="d-flex align-items-center">
                                                    <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                                                    <small>1 hr ago</small>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> -->
                            </div>

                            <div id="blog_col" class="col pb-5 col-md-6">
                                <article id="homeArcticles" class="blog-post">
                                    <h2 class="blog-post-title mb-1">Blog</h2>
                                    <p class="blog-post-meta">March 14, 2023 by <a href="#">Viveck A.</a></p>
                                    <p class="d-flex sm-none">Instead of lots of commands to output HTML (as seen in C or Perl), PHP pages contain HTML with embedded code that does "something" (in this case, output "Hi, I'm a PHP script!"). The...</p>
                                </article>
                                <nav class="blog-pagination" aria-label="Pagination">
                                    <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
                                    <a class="btn btn-outline-secondary rounded-pill disabled">Newer</a>
                                </nav>
                            </div>
                        </div>

                        <!-- don't meddle with the below div -->
                    </div>

                    <div class="col-md-2 col-sm-12 bg-light">
                        <div class="position-sticky" style="top: 2rem;">
                            <div class="mb-3 rounded">
                                <h4 class="fst-italic">Bluecrest Student Pack</h4>
                                <p>A platform built for purpose</p>
                            </div>
                            <aside class="bd-aside sticky-xl-top text-muted align-self-start mb-3 mb-xl-5 px-2">
                                <h2 class="h6 pt-4 pb-3 mb-4 border-bottom">Helpful Tips</h2>
                                <nav class="small" id="toc">
                                    <ul class="list-unstyled">

                                        <li class="my-2">
                                            <button class="btn d-inline-flex align-items-center collapsed border-0" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#exams-btn-collapes" aria-controls="exams-btn-collapes">Exams</button>
                                            <ul class="list-unstyled ps-3 collapse" id="exams-btn-collapes">
                                                <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#typography">Sem I</a></li>
                                            </ul>
                                        </li>

                                        <li class="my-2">
                                            <button class="btn d-inline-flex align-items-center collapsed border-0" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#assignment-btn-collapes" aria-controls="assignment-btn-collapes">Assignments</button>
                                            <ul class="list-unstyled ps-3 collapse" id="assignment-btn-collapes">
                                                <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#overview">Course name</a></li>
                                            </ul>
                                        </li>

                                        <li class="my-2">
                                            <button class="btn d-inline-flex align-items-center collapsed border-0" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#take-course-collapes" aria-controls="take-course-collapes">Take Course</button>
                                            <ul class="list-unstyled ps-3 collapse" id="take-course-collapes">
                                                <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#accordion">Web Application with PHP</a></li>
                                            </ul>
                                        </li>

                                        <li class="my-2">
                                            <button class="btn d-inline-flex align-items-center collapsed border-0" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#projects-btn-collapes" aria-controls="projects-btn-collapes">Projects</button>
                                            <ul class="list-unstyled ps-3 collapse" id="projects-btn-collapes">
                                                <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#accordion">Project title</a></li>
                                            </ul>
                                        </li>

                                        <li class="my-2">
                                            <button class="btn d-inline-flex align-items-center collapsed border-0" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#latest-blog-collapes" aria-controls="latest-blog-collapes">Latest News</button>
                                            <ul class="list-unstyled ps-3 collapse" id="latest-blog-collapes">
                                                <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#accordion">The folks are here</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="dropdown border-top">
                                    <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        BSP<img src="./img/2.png" alt="BSP" width="24" height="24" class="rounded-circle">
                                    </a>
                                    <ul class="dropdown-menu text-small shadow">
                                        <li><a class="dropdown-item" href="#">New project...</a></li>
                                        <li><a class="dropdown-item" href="#">Settings</a></li>
                                        <li><a class="dropdown-item" href="#">Profile</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>

            <!-- Online Jotter Modal -->
            <div class="modal fade" id="onlineJotter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="onlineJotter">Write Note & Download in MS WORD</h1>
                            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <form action="./tools/CREATE-MS-WORD.php" method="post">
                            <div class="modal-body">
                                <h4>Title</h4>
                                <input type="text" placeholder="What is Osmosis?" name="topic" class="form-control"/>
                                <br/>
                                <h4>Body</h4>
                                <textarea name="bodyContent" placeholder="Osmosis is the movement of a solvent through a semipermeable membrane into a solution of higher concentration" class="form-control" cols="95" rows="10"></textarea>
                            </div>
                            <div style="display:flex;flex-direction:row;padding:20px;">
                                <select style="width:35%;" name="select_format" id="select" class="form-select">
                                    <option>Choose Format</option>
                                    <option value=".doc">MS Word</option>
                                    <option value=".pdf">PDF</option>
                                    <option value=".ppt">PPT</option>
                                </select>
                                <button style="width:35%; margin-right:10px; margin-left:10px;" data-bs-dismiss="modal" name="create_doc" class="btn btn-info">Download</button>
                                <i data-bs-dismiss="modal"class="btn btn-danger fa fa-times-circle">Close</i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- User Account Information Modal -->
            <div class="modal fade" id="dashboardModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="dashboardModal">Account's Information</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="post">
                            <div class="modal-body">
                                    <strong>User Name</strong>
                                    <input type="text" name="changeUser" class="form-control"/><br/>
                                    <strong>Password</strong>
                                    <input type="text" name="changePass" class="form-control"/>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-primary" value="Change" name="changeSubmit">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Timetable Modal -->
            <div class="modal fade" id="staticBackdropLive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLiveLabel">Timetable | Semester IV</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="time_table_modal" class="carousel slide">
                                <div class="carousel-inner">

                                    <div class="carousel-item active">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr class="table-dark">
                                                    <th scope="col">Course</th>
                                                    <th scope="col">Regular</th>
                                                    <th scope="col">Weekend</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Course 1</th>
                                                    <td class="blog-post-meta">Mon 9:00 am</td>
                                                    <td class="blog-post-meta">Mon 6:00 pm</td>
                                                </tr>
                                                
                                                <tr class="table-secondary">
                                                    <th scope="row">Course 2</th>
                                                    <td class="blog-post-meta">Tue 9:00 am</td>
                                                    <td class="blog-post-meta">Tue 6:00 pm</td>
                                                </tr>
                                                <tr class="table-success">
                                                    <th scope="row">Course 3</th>
                                                    <td class="blog-post-meta">Wed 9:00 am</td>
                                                    <td class="blog-post-meta">Wed 7:30 pm</td>
                                                </tr>
                                                <tr class="table-warning">
                                                    <th scope="row">Course 4</th>
                                                    <td class="blog-post-meta">Thur 9:30 am</td>
                                                    <td class="blog-post-meta">X</td>
                                                </tr>
                                                <tr class="table-info">
                                                    <th scope="row">Course 5</th>
                                                    <td class="blog-post-meta">Fri 12:00 pm</td>
                                                    <td class="blog-post-meta">Fri 6:30 pm</td>
                                                </tr>
                                                <tr class="table-light">
                                                    <th scope="row">Course 6</th>
                                                    <td class="blog-post-meta">X</td>
                                                    <td class="blog-post-meta">Sat 9:00 am, 12:00 pm, 3:00 pm</td>
                                                </tr>
                                                <tr class="table-primary">
                                                    <th scope="row">Course 7</th>
                                                    <td class="blog-post-meta">X</td>
                                                    <td class="blog-post-meta">Sun 9:00 am, 12:00 pm, 3:00 pm</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="carousel-item">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr class="table-dark">
                                                    <th scope="col">Course</th>
                                                    <th scope="col">Regular</th>
                                                    <th scope="col">Weekend</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Course 1</th>
                                                    <td class="blog-post-meta">Mon 9:00 am</td>
                                                    <td class="blog-post-meta">Mon 6:00 pm</td>
                                                </tr>
                                                
                                                <tr class="table-secondary">
                                                    <th scope="row">Course 2</th>
                                                    <td class="blog-post-meta">Tue 9:00 am</td>
                                                    <td class="blog-post-meta">Tue 6:00 pm</td>
                                                </tr>
                                                <tr class="table-success">
                                                    <th scope="row">Course 3</th>
                                                    <td class="blog-post-meta">Wed 9:00 am</td>
                                                    <td class="blog-post-meta">Wed 7:30 pm</td>
                                                </tr>
                                                <tr class="table-warning">
                                                    <th scope="row">Course 4</th>
                                                    <td class="blog-post-meta">Thur 9:30 am</td>
                                                    <td class="blog-post-meta">X</td>
                                                </tr>
                                                <tr class="table-info">
                                                    <th scope="row">Course 5</th>
                                                    <td class="blog-post-meta">Fri 12:00 pm</td>
                                                    <td class="blog-post-meta">Fri 6:30 pm</td>
                                                </tr>
                                                <tr class="table-light">
                                                    <th scope="row">Course 6</th>
                                                    <td class="blog-post-meta">X</td>
                                                    <td class="blog-post-meta">Sat 9:00 am, 12:00 pm, 3:00 pm</td>
                                                </tr>
                                                <tr class="table-primary">
                                                    <th scope="row">Course 7</th>
                                                    <td class="blog-post-meta">X</td>
                                                    <td class="blog-post-meta">Sun 9:00 am, 12:00 pm, 3:00 pm</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="carousel-item">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr class="table-dark">
                                                    <th scope="col">Course</th>
                                                    <th scope="col">Regular</th>
                                                    <th scope="col">Weekend</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Course 1</th>
                                                    <td class="blog-post-meta">Mon 9:00 am</td>
                                                    <td class="blog-post-meta">Mon 6:00 pm</td>
                                                </tr>
                                                
                                                <tr class="table-secondary">
                                                    <th scope="row">Course 2</th>
                                                    <td class="blog-post-meta">Tue 9:00 am</td>
                                                    <td class="blog-post-meta">Tue 6:00 pm</td>
                                                </tr>
                                                <tr class="table-success">
                                                    <th scope="row">Course 3</th>
                                                    <td class="blog-post-meta">Wed 9:00 am</td>
                                                    <td class="blog-post-meta">Wed 7:30 pm</td>
                                                </tr>
                                                <tr class="table-warning">
                                                    <th scope="row">Course 4</th>
                                                    <td class="blog-post-meta">Thur 9:30 am</td>
                                                    <td class="blog-post-meta">X</td>
                                                </tr>
                                                <tr class="table-info">
                                                    <th scope="row">Course 5</th>
                                                    <td class="blog-post-meta">Fri 12:00 pm</td>
                                                    <td class="blog-post-meta">Fri 6:30 pm</td>
                                                </tr>
                                                <tr class="table-light">
                                                    <th scope="row">Course 6</th>
                                                    <td class="blog-post-meta">X</td>
                                                    <td class="blog-post-meta">Sat 9:00 am, 12:00 pm, 3:00 pm</td>
                                                </tr>
                                                <tr class="table-primary">
                                                    <th scope="row">Course 7</th>
                                                    <td class="blog-post-meta">X</td>
                                                    <td class="blog-post-meta">Sun 9:00 am, 12:00 pm, 3:00 pm</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a type="button" class="btn btn-primary"  data-bs-slide="prev" data-bs-target="#time_table_modal">Last Sem</a>
                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Seen</button> -->
                            <a type="button" class="btn btn-primary" data-bs-target="#time_table_modal"  data-bs-slide="next">Next Sem</a>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <footer class="py-3 my-4">
            <div class="row">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
                    </a>
                    <span class="mb-3 mb-md-0 text-muted">&copy; 2023 Bluecrest Students Pack, Inc</span>
                </div>

                <ul class="nav col-md-6 justify-content-center list-unstyled d-flex">
                    <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
                    <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
                    <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
                </ul>
            </div>
        </footer>
    </div>

</body>
</html>
<?php 
    }
?>
