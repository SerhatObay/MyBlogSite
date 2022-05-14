<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>@yield('title','Blog Sitesi')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="{{asset('f_end/img/favicon.ico')}}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('f_end/css/style.css')}}" rel="stylesheet">
</head>
<div class="wrapper">

<div class="sidebar">
    <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
        <img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-3" src="{{asset('f_end/img/profile.jpg')}}" alt="Image">
        <h1 class="font-weight-bold">Kate Glover</h1>
        <p class="mb-4">
            Justo stet no accusam stet invidunt sanctus magna clita vero eirmod, sit sit labore dolores lorem. Lorem at sit dolor dolores sed diam justo
        </p>
        <div class="d-flex justify-content-center mb-5">
            <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <a href="" class="btn btn-lg btn-block btn-primary mt-auto">Hire Me</a>
    </div>
    <div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
        <i class="fas fa-2x fa-angle-double-right text-primary"></i>
    </div>
</div>
    <div class="content">
<!-- Navbar Start -->
<div class="container p-0">
    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
        <a href="" class="navbar-brand d-block d-lg-none">Navigation</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav m-auto">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu">
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="single.html" class="dropdown-item">Blog Detail</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->
    </div>
</div>
