<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Frontpage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <style media="screen">
      /*!
        * Start Bootstrap - Busines Frontpage (https://startbootstrap.com/template-overviews/business-frontpage)
        * Copyright 2013-2017 Start Bootstrap
        * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-business-frontpage/blob/master/LICENSE)
        */

        body {
        padding-top: 54px;
        }

        @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
        }

        .card {
        height: 100%;
        }
    </style>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- Page Content -->
    <div class="container">
      <h1>SchoolManager</h1>
      <br>
      <div class="row">
        <div class="col-sm-4 my-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Courses</h4>
              <p class="card-text">See course list, add new courses, edit ot delete existing courses</p>
            </div>
            <div class="card-footer">
              <a href="{{ url('courses') }}" class="btn btn-primary">Go to Courses</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 my-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Teachers</h4>
              <p class="card-text">See all available teachers, add, edit or delete teacher records, assign courses to teachers</p>
            </div>
            <div class="card-footer">
              <a href="{{ url('teachers') }}" class="btn btn-primary">Go to Teachers</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 my-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Students</h4>
              <p class="card-text">See all registered students, add, edit or delete student records, assign courses to students</p>
            </div>
            <div class="card-footer">
              <a href="{{ url('students') }}" class="btn btn-primary">Go to Students</a>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
