<!DOCTYPE html>
<html>
<head>
    <title>login page</title>

    <link rel = "icon" href =
    "C:/Users/fasih/Downloads/flat icons/login.png"
          type = "image/x-icon">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <style type="text/css">
        .bg { background-image: url("https://cyberpanel.net/wp-content/uploads/revslider/slider1/slide-background.jpg")}

    </style>
</head>
<body class="bg" >
<div class="row my-auto">
    <div class="col-lg-6 ">

        <h1 style="color: white ; font-family:'Roboto light'; font-size: 40px; margin-top: 300px; margin-left: 60px;">Sign in to our page and check your assignment details <i class="fa fa-chevron-circle-right  " aria-hidden="true" style="color: white ;  " ></i> </h1>
    </div>

    <div class="col-lg-6 ">
        <div class="card" style = " margin-top: 150px; margin-right: 100px;" >
            <div class="card-header text-center">
                <h4> Sign In   </h4>
            </div>
            <div class="card-body ">
                <form action="file:///E:/6th%20semester/web%20technologies/landing/page.html" method="get">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control form-rounded" id="exampleInputEmail1" aria-describedby="emailHelp" required style="border-radius: 2rem;" placeholder="Email address">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control form-rounded" id="exampleInputPassword1" pattern="{6,10}" required style="border-radius: 2rem; " placeholder="type between 6,10 characters" title="password must be greater than 6 digits " required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">I'm not a Robot </label>
                    </div>
                    <button href="file:///E:/6th%20semester/web%20technologies/landing/page.html" type="submit" class="btn btn-info " style="width: 100% " >Sign In</button>
                    <br>
                    <p class="text-center" style="padding-top: 10px;">OR</p>
                    <div class="row mx-auto ">
                        <div class="col-lg-12">
																<span class="float-left">
																	<div class="btn-group" role="group" aria-label="Basic example">
																		<button href="file:///E:/6th%20semester/web%20technologies/landing/page.html"  type="button" class="btn btn-secondary " style="background-color: #3b5998"  >
																			<img src="E:/6th semester/web technologies/login/images/fb.png" style="width:30px"  >
																			</button>
																			<button  href = "  https://www.facebook.com/ " type="button" class="btn btn-secondary" style="background-color: #3b5998">Facebook</button>
																		</div>
																	</span>
                            <span class="float-right">
																		<div class="btn-group" role="group" aria-label="Basic example">
																			<button type="button" class="btn btn-light">
																				<img src="E:/6th semester/web technologies/login/images/google.png" style="width:30px"  >
																				</button>
																				<button  href = "  https://www.facebook.com/" type="button" class="btn btn-light">Google</button>
																			</div>
																		</span>
                        </div>
                    </div>
                    <div class="text-center p-t-136">
                        <a class="txt2" href="#" style="color: grey" text-center>
                            Create your Account

                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="page-footer font-small cyan darken-3">
    <!-- Footer Elements -->
    <div class="container">
        <!-- Grid row-->
        <div class="row">
            <!-- Grid column -->
            <div class="col-md-12 py-5">
                <div class="mb-5 flex-center"></div>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row-->
    </div>
    <!-- Footer Elements -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© fiverr.com/fasih_shaukat:

        <a href="https://www.fiverr.com/fasih_shaukat" style="color: white"> Services on fiverr</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
</html>
