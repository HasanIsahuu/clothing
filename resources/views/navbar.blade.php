<!DOCTYPE html>
<html>

<head>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <!-- regular fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- font -->

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="bower_components/aos/dist/aos.css">
    <script src="bower_components/aos/dist/aos.js"></script>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

    <!-- css  -->

    <link rel="stylesheet" href="{{ URL::asset('css/navbar.css') }}">



    <title>Clothing</title>
</head>

<body>

    <div>


        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img width="115px" src="https://c.tenor.com/hLQHo8YyYooAAAAC/nike-shoe.gif" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <!--  <li class="nav-item active">
                    <a style="color: white;" class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Men
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Women
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kids
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Accessories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Footwear
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>


                    <li class="nav-item login dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-sign-in-alt"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Log in</a>
                            <a class="dropdown-item" href="#">Register</a>
                        </div>
                    </li>

                    <li class="nav-item shopingcart dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i style="font-size:26px;" class="fas fa-shopping-bag"></i>
                        </a>
                    </li>

                    <li class="nav-item favourite121 dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i style="font-size:26px;" class="fas fa-heart"></i>
                        </a>
                    </li>






                </ul> <br>


            </div>
        </nav>
    </div>
    <br><br>


</body>

<style>
    .login {
        font-size: 26px;
        margin-left: 640px;
    }
    .carta121 {
        width: auto;
    }
    .mbiheader {
        height: 10px;
        background-color: white;
        width: 100%;
        padding: 10px;
    }
    .navbar {
        background: rgb(29, 53, 87);
        background: linear-gradient(90deg, rgba(29, 53, 87, 1) 0%, rgba(107, 168, 255, 1) 58%, rgba(181, 202, 232, 1) 100%);
    }
    .shopingcart {
        margin-left: -40px;
    }
    .favourite121 {
        margin-left: -49px;
    }
    .navbar-light .navbar-nav .nav-link {
        color: white;
        float: center;
        font-family: 'DM Sans', sans-serif;
        font-weight: 800;
        padding: 5px;
        margin-left: 30px;
        margin-right: 30px;
    }
    .navbar-light .navbar-nav .nav-link:hover {
        color: #CACFD2;
        float: center;
        font-family: 'DM Sans', sans-serif;
        font-weight: 800;
    }
    .navbar-light .navbar-nav .nav-link:focus {
        color: #CACFD2;
    }
    .btn {
        padding: 5px 10px;
        color: white;
        border: 1px solid white;
    }
    .btn:hover {
        color: black;
        background-color: #F1FAEE;
    }
    .useri {
        color: black;
    }
    .search-box {
        position: absolute;
        top: 50%;
        left: 75%;
        transform: translate(-50%, -50%);
        background: #F1FAEE;
        height: 70px;
        border-radius: 50px;
        padding: 10px;
    }
    .searchbari {
        background: #F1FAEE;
        height: 50px;
        border-radius: 50px;
        padding: 10px;
    }
    .search-btn {
        color: white;
        float: right;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: #F1FAEE;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 2s;
    }
    .fa-search {
        background: white;
        font-size: 24px;
        color: #1D3557;
    }
    .search-input {
        border: none;
        background: none;
        outline: none;
        float: left;
        padding: 0;
        color: black;
        font-size: 20px;
        transition: 0.4s;
        line-height: 50px;
        width: 0;
    }
    .search-box:hover>.search-input {
        width: 200px;
        padding: 0 7px;
    }
</style>


</html>