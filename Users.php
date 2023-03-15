<?php
include_once ''
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="./user.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php echo "Page Content";
        $connection=mysqli_connect('localhost','root','root','gripdatabase');
    ?>

    <header class="top-area">
        <div class="header-area">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a href="#" class="navbar-brand">GRIP BANK</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation"></button></button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a href="./HomePage.html" class="nav-item nav-link  "><i
                                    class="fa fa-fw fa-home"></i>Home</a>
                            <a href="./CreateUser.html" class="nav-item nav-link "><i class="fa fa-fw fa-user"></i>Add
                                User</a>
                            <a href="#" class="nav-item nav-link active"><i class=" fa fa-fw fa-users"></i>Users</a>
                            <a href="#" class="nav-link"><i class="fa fa-fw fa-exchange"></i>Transactions</a>
                            <a href="https://www.thesparksfoundationsingapore.org/join-us/internship-positions/"
                                target="_blank" class="nav-link"><i class="fa fa-fw fa-info"></i>About Us</a>
                            <a href="https://www.facebook.com/thesparksfoundation.info/"
                                class="nav nav-item nav-link float-right" target=" _blank" style="float:right;"><i
                                    class="fa fa-fw fa-facebook"></i></a>
                            <a href="https://twitter.com/tsfsingapore" target="_blank" class="nav nav-item nav-link"><i
                                    class="fa fa-fw fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/groups/10379184/" class="nav nav-item nav-link"
                                target="_blank"><i class="fa fa-fw fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <footer class="text-center text-white fixed-bottom">
        <!-- Copyright -->
        <div class="text-center text-white p-3" style="color:text-white">
            © 2022 Copyright :
            <a class="text-white" href="https://internship.thesparksfoundation.info/">The Sparks Foundation</a> : GRIP
        </div>

    </footer>


</body>

</html>