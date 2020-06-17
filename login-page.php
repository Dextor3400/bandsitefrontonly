<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="/favicon.png" />

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.0/darkly/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-J01jr7rrJqxij+hUE1E+8N35mlD7L/TMrAO7tOarwMP7AWJM3P/lGXOjt0KLNhtE" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">

    <title>Home</title>
</head>

<body>
    <div class="container">
        <!-------------------------------------HEADER TOP IMAGE------------------------------------->
        <header>
            <a href="/index.php"><img class="img-fluid d-none d-md-block" src="/images/header-top-image.png"
                    alt="header-top-image"></a>
        </header>
        <!-------------------------------------HEADER TOP IMAGE END------------------------------------->
        <!-------------------------------------NAVIGATION------------------------------------->
        <nav class="navbar p-2 mb-5 navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand d-md-none" href="/index.php">Fetish Section</a>
            <button class="ml-md-auto navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav nav-pills container">
                    <li class="col-12 col-lg-auto my-2 text-center nav-item mx-auto">
                        <a class="text-uppercase nav-link" href="/index.php">Home</a>
                    </li>
                    <li class="col-12 col-lg-auto my-2 text-center nav-item mx-auto">
                        <a class="text-uppercase nav-link" href="/news.php">News</a>
                    </li>
                    <li class="col-12 col-lg-auto my-2 text-center nav-item mx-auto">
                        <a class="text-uppercase nav-link" href="/tour.php">Tour</a>
                    </li>
                    <li class="col-12 col-lg-auto my-2 text-center nav-item mx-auto">
                        <a class="text-uppercase nav-link" href="/media.php">Media</a>
                    </li>
                    <li class="col-12 col-lg-auto my-2 text-center nav-item mx-auto">
                        <a class="text-uppercase nav-link" href="/contact.php">Contact</a>
                    </li>
                    <li class="col-12 col-lg-auto my-2 text-center nav-item d-md-none mx-auto">
                        <a class="text-uppercase nav-link active" href="/login-page.php">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-------------------------------------NAVIGATION END------------------------------------->
        <!-------------------------------------LOGIN FORM------------------------------------->
        <main class="login-form">
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Register</div>
                            <div class="card-body">
                                <form action="" method="">
                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail
                                            Address</label>
                                        <div class="col-md-6">
                                            <input type="text" id="email_address" class="form-control"
                                                name="email-address" required autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password"
                                            class="col-md-4 col-form-label text-md-right">Password</label>
                                        <div class="col-md-6">
                                            <input type="password" id="password" class="form-control" name="password"
                                                required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember"> Remember Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                        <a href="#" class="btn btn-link">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </main>
    <!-------------------------------------FOOTER START------------------------------------->
    <footer class="text-center mt-4 pt-4 border-top border-light">
        <p class="lead">Follow us on:</p>
        <a href="https://www.facebook.com/Fetish-section-216667235599340/" target="blank" class="social-margin">
            <div class="social-icon facebook">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </div>
        </a>
        <a href="https://soundcloud.com/user-831484464" target="blank" class="social-margin">
            <div class="social-icon soundcloud">
                <i class="fa fa-soundcloud" aria-hidden="true"></i>
            </div>
        </a>
        <a href="http://youtube.com/" target="blank" class="social-margin">
            <div class="social-icon youtube">
                <i class="fa fa-youtube" aria-hidden="true"></i>
            </div>
        </a>
        <a href="http://twitter.com/" target="blank" class="social-margin">
            <div class="social-icon twitter">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </div>
        </a>
        <p class="lead">© 2023 by Fetish Section.</p>
        <p class="lead">Proudly created with Laravel</p>
    </footer>
    <!-------------------------------------FOOTER END------------------------------------->

    </div>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>

</html>