<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login Page</title>
    <style>
        /* --------------------Login form------------------- */
        *{
            padding:0;
            margin:0;
            box-sizing: border-box;

        }
        body{
            background: rgb(219,226,226);
        }
        .row{
            background:white;
            border-radius: 30px;
            box-shadow:12px 12px 22px grey; 
        }
        .img{
            border-top-left-radius:30px;
            border-bottom-left-radius:30px;

        }
        .btn1{
            border:none;
            outline:none;
            height:50px;
            width:100%;
            background-color: black;
            color: white;
            border-radius:4px;
            font-weight: bold;
        }
        .btn1:hover{
            background:white;
            border:1px solid;
            color:black;
        }


        /* ---------------------------------End of Login form---------------------------- */
    </style>
  </head>
  <body>
  <!-- /* --------------------Login form------------------- */ -->
    
    <section class="Form">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="./GGSIU_logo.svg.png" alt="Logo" class="img-fluid ">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-3">Login Here </h1>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="email" placeholder="Email-Address" class="form-control my-3 p-4">

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="password" placeholder="*******" class="form-control my-3 p-4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7 ">
                            <button type="submit" class="btn1 mt-3 mb-5"> <a href="./Profile.php">Login</a></button>
                        </div>
                    </div>
                    <a href="#">Forgot Password</a>
                    <p>Don't have an account? <a href="#"> Register here</a></p>
                </div>
            </div>
        </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


  </body>
</html>