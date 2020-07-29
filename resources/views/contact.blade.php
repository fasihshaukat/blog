<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Starting Laravel</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <script src="js/jquery.min.js"> </script>
    <script src="js/popper.min.js"> </script>
    <script src="js/tooltip.min.js"> </script>
    <script src="js/bootstrap.min.js"> </script>

    <link href="css/bootstrap-theme.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <title>Contact us</title>



</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light   ">


    <a class="navbar-brand" href="#page-top">

    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
            <li class="nav-item " >
                <a class="nav-link" href="{{ url('/') }}" >Welcome</a>
            </li>
                <a class="nav-link" href="{{ url('/page1') }}">Login <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/page2') }}">Signup</a>
            </li>

            <li class="nav-item active" >
                <a class="nav-link" href="{{ url('/contact') }}" style="color: #28a745">Contact Us</a>
            </li>






        </ul>
        <div class=" mr-auto" id="Home">
            <a  href="{{ url('/') }}" ><img class="d-block" src="images/logo.png" height="55" alt="logo"></a>
        </div>




        <button  type="button" class="btn btn-success " style="margin-right: 10px;">
            Laravel <span class="badge badge-light">1</span>
            <span class="sr-only">unread messages</span>
        </button>


        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

</body>
</html>
<style type="text/css">
    html {
        height: 100%;


        background-color: #000000;
        background-image: linear-gradient(147deg, #000000 0%, #2c3e50 74%);
    }
</style>
