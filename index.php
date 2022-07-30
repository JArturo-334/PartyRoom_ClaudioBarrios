<?php
include "connection.php";

    if(isset($_POST["add_record"])) {
        $checkingmail = $mysql->prepare("SELECT email FROM users WHERE email = ?");
        $checkingmail->bind_param("s", $_POST["email"]);
        $checkingmail->execute();
        $checkingmail->bind_result($email);
        $checkingmail->fetch();

        if($email == null){
        $insertstatement = $mysql->prepare("INSERT INTO users (username, password, email, full_name) VALUES (?, ?, ?, ?)");
        $insertstatement->bind_param("ssss", $_POST["username"], $_POST["password"], $_POST["email"], $_POST["full_name"]);
        $insertstatement->execute();
        }

        else{
            echo "USER EMAIL ALREADY EXISTS";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">

    <style>
        .HOME{
            background: url(img/graduate.jpg);
            background-position: -550px -250px;
            margin-top: 0px;
        }

        .login{
            width: 500px;
        }

        .enter{
            position: relative;
            left: 318px;
        }

        .register{
            position: relative;
            left: 155px;
        }

        @keyframes slidy {
            0% { left: 0%; }
            20% { left: 0%; }
            25% { left: -100%; }
            45% { left: -100%; }
            50% { left: -200%; }
            70% { left: -200%; }
            75% { left: -300%; }
            95% { left: -300%; }
            100% { left: -400%; }
            }

            body { margin: 0; } 
            div#slider { overflow: hidden; }
            div#slider figure img { width: 20%; float: left; }
            div#slider figure { 
            position: relative;
            width: 500%;
            margin: 0;
            left: 0;
            text-align: left;
            font-size: 0;
            animation: 30s slidy infinite; 
            }

    .photos{
        padding-top: 30px;
    }

    .slides{
        width: 895px;
    }

    footer{
        background: #c4a392;
    }
            </style>
</head>
<body>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#">Party Room</a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <div class="navbar-nav me-auto mt-2 mt-lg-0"></div>
                    <form class="d-flex my-2 my-lg-0">
                        <input class="form-control me-sm-2 rounded-pill" type="text" placeholder="Search">
                        <button class="btn btn-info my-2 my-sm-0 rounded-circle pt-0" type="submit">
                            <img src="img/search.svg" alt="search" height="15px" >
                        </button>
                        <img src="img/user.svg" height="35px" class="rounded-circle d-inline-block mx-3 p-0 btn" alt="profile">
                    </form>
                </div>
        </div>
        </nav>

        <article class="HOME py-5">
            <div class=" login container p-5 bg-light shadow rounded-3 ">
            <form action="auth.php" method="POST" class="container" id="form">
                <h1 class="display-5">LOG IN</h1>
                <div class="form-group">
                    <label for="">Username: </label>
                    <input type="text" name="user" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password: </label>
                    <input type="password" name="pass" class="form-control">
                </div>
                <div>
                    <p id="feedback" class="text-danger my-2"></p>
                    <button class="enter btn btn-primary" id="login">Enter</button>
                    <button type="button" class="btn btn-secondary register" data-bs-toggle="modal" data-bs-target="#modelId">Register</button>
                </div>
            </form>
            </div>

            <section class="container slides">
            <div id="slider" class="photos">
                <figure>
                <img src="img/graduate.jpg" alt>
                <img src="img/young.jpg" alt>
                <img src="img/daw.jpg" alt>
                <img src="img/studying.jpg" alt>
                <img src="img/champagne.jpg" alt>
                </figure>
            </div>
            </section>

        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add new user</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="index.php" method="POST">
                    <div class="modal-body">
                            <div>
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div>
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div>
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div>
                                <label for="">Full Name</label>
                                <input type="text" name="full_name" class="form-control">
                            </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <input type="submit" name="add_record" class="btn btn-primary" value="Confirm">
                    </div>
                </form>
            </div>
        </div>
        </div>
        </article>

        <footer class="py-5">
            <div class=" login container p-5 bg-light shadow rounded-3 ">
                <form action="emailTest.php" method="POST" class="container">
                    <h1 class="display-5">SUSCRIBE</h1>
                    <div class="form-group">
                        <label for="">EMAIL: </label>
                        <input type="text" name="suscribe" class="form-control">
                    </div>
                    
                    <div>
                        <p id="feedback" class="text-danger my-2"></p>
                        <button class="enter btn btn-primary" id="login">Confirm</button>
                    </div>
                </form>
            </div>
        </footer>

        <script>
        let button = document.getElementById("login");
        button.addEventListener("click", (event) =>{
            event.preventDefault();
            let data = new FormData(document.getElementById("form"));

            fetch('auth.php',{
                method: 'POST',
                body: data
            })
            .then((response)=>{
                if (response.ok){
                    return response.text();
                }

                else{
                    throw "Error in AJAX calling";
                }
            })
            .then((text)=>{
                if(text == 'Valid User'){
                    document.location.href = "partyRoom.php";
                }

                else {
                    document.getElementById("feedback").innerText="Invalid username or password";
                }
            });

        });
    </script>
    
</body>
</html>