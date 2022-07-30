<?php
session_start();

include "connection.php";

if(isset($_GET["id_user"]) && isset($_GET["id"])){
    $id_user = $_GET["id_user"];
    $id = $_GET["id"];

    $query1 = "UPDATE chairs SET idUser = ? WHERE id = ?;";
    $statementu1 = $mysql->prepare($query1);
    $statementu1->bind_param("ii", $id_user, $id);
    $statementu1->execute();
    $statementu1->store_result();

    header('Location: partyRoom.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Party Room</title>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">

    <style>
        .table{
            width: 180px;
            height: 180px;
        }

        .chair{
            width: 26px;
            cursor: pointer;
            position: absolute;
        }

        .table-container{
            margin-top: 20px;
            width: 200px;
            height: 200px;
            position: relative;
        }

        .salon{
            display: flex;
        }

        .sectionSides{
            margin: 5px 20px 5px 20px;
        }

        .dancingArea{
            height: 415px;
            background: #540b0e;
            margin-top: 30px;
        }

        .sectionBottom{
            display: flex;
        }

        .pos1{
            right: 95px;
            top: -10px;
        }

        .pos2{
            right: 42px;
            top: 8px;
        }

        .pos3{
            right: 20px;
            top: 70px;
        }

        .pos4{
            right: 42px;
            top: 130px;
        }

        .pos5{
            right: 95px;
            top: 155px;
        }

        .pos6{
            right: 152px;
            top: 130px;
        }

        .pos7{
            right: 174px;
            top: 70px;
        }

        .pos8{
            right: 152px;
            top: 8px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand fw-bold" href="partyRoom.php">Party Room</a>
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
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link p-0" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="img/user.svg" height="35px" class="rounded-circle d-inline-block mx-3 p-0 btn" alt="profile">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="">Profile</a>
                            <a class="dropdown-item" href="index.php">Log out</a>
                        </div>
                    </li>
                </ul>
                </form>
            </div>
    </div>
    </nav>
    

    <article class="container my-2 text-center">
        <h1 class="display-5">GENERATION 2020-2024</h1>
        <h1 class="display-6">Welcome <?php echo $_SESSION["name"];?>!</h1>
    </article>

<article class="salon">
    <article class="sectionSides">
        <section class="party-room">
            <section class="table-container">
                <img src="img/table.png" alt="table" class="table">
                <img src="img/chair-available.png" alt="chair" class="chair id1 pos1">
                <img src="img/chair-available.png" alt="chair" class="chair id2 pos2">
                <img src="img/chair-available.png" alt="chair" class="chair id3 pos3">
                <img src="img/chair-available.png" alt="chair" class="chair id4 pos4">
                <img src="img/chair-available.png" alt="chair" class="chair id5 pos5">
                <img src="img/chair-available.png" alt="chair" class="chair id6 pos6">
                <img src="img/chair-available.png" alt="chair" class="chair id7 pos7">
                <img src="img/chair-available.png" alt="chair" class="chair id8 pos8">
            </section>
        </section>

        <section class="party-room">
            <section class="table-container">
                <img src="img/table.png" alt="table" class="table">
                <img src="img/chair-available.png" alt="chair" class="chair id9 pos1">
                <img src="img/chair-available.png" alt="chair" class="chair id10 pos2">
                <img src="img/chair-available.png" alt="chair" class="chair id11 pos3">
                <img src="img/chair-available.png" alt="chair" class="chair id12 pos4">
                <img src="img/chair-available.png" alt="chair" class="chair id13 pos5">
                <img src="img/chair-available.png" alt="chair" class="chair id14 pos6">
                <img src="img/chair-available.png" alt="chair" class="chair id15 pos7">
                <img src="img/chair-available.png" alt="chair" class="chair id16 pos8">
            </section>
        </section>

        <section class="party-room">
            <section class="table-container">
                <img src="img/table.png" alt="table" class="table">
                <img src="img/chair-available.png" alt="chair" class="chair id17 pos1">
                <img src="img/chair-available.png" alt="chair" class="chair id18 pos2">
                <img src="img/chair-available.png" alt="chair" class="chair id19 pos3">
                <img src="img/chair-available.png" alt="chair" class="chair id20 pos4">
                <img src="img/chair-available.png" alt="chair" class="chair id21 pos5">
                <img src="img/chair-available.png" alt="chair" class="chair id22 pos6">
                <img src="img/chair-available.png" alt="chair" class="chair id23 pos7">
                <img src="img/chair-available.png" alt="chair" class="chair id24 pos8">
            </section>
        </section>
    </article>

    <article class="sectionSides">
        <section class="party-room">
            <section class="table-container">
            <img src="img/table.png" alt="table" class="table">
                <img src="img/chair-available.png" alt="chair" class="chair id25 pos1">
                <img src="img/chair-available.png" alt="chair" class="chair id26 pos2">
                <img src="img/chair-available.png" alt="chair" class="chair id27 pos3">
                <img src="img/chair-available.png" alt="chair" class="chair id28 pos4">
                <img src="img/chair-available.png" alt="chair" class="chair id29 pos5">
                <img src="img/chair-available.png" alt="chair" class="chair id30 pos6">
                <img src="img/chair-available.png" alt="chair" class="chair id31 pos7">
                <img src="img/chair-available.png" alt="chair" class="chair id32 pos8">
            </section>
        </section>

        <section class="party-room">
            <section class="table-container">
            <img src="img/table.png" alt="table" class="table">
                <img src="img/chair-available.png" alt="chair" class="chair id33 pos1">
                <img src="img/chair-available.png" alt="chair" class="chair id34 pos2">
                <img src="img/chair-available.png" alt="chair" class="chair id35 pos3">
                <img src="img/chair-available.png" alt="chair" class="chair id36 pos4">
                <img src="img/chair-available.png" alt="chair" class="chair id37 pos5">
                <img src="img/chair-available.png" alt="chair" class="chair id38 pos6">
                <img src="img/chair-available.png" alt="chair" class="chair id39 pos7">
                <img src="img/chair-available.png" alt="chair" class="chair id40 pos8">
            </section>
        </section>

        <section class="party-room">
            <section class="table-container">
            <img src="img/table.png" alt="table" class="table">
                <img src="img/chair-available.png" alt="chair" class="chair id41 pos1">
                <img src="img/chair-available.png" alt="chair" class="chair id42 pos2">
                <img src="img/chair-available.png" alt="chair" class="chair id43 pos3">
                <img src="img/chair-available.png" alt="chair" class="chair id44 pos4">
                <img src="img/chair-available.png" alt="chair" class="chair id45 pos5">
                <img src="img/chair-available.png" alt="chair" class="chair id46 pos6">
                <img src="img/chair-available.png" alt="chair" class="chair id47 pos7">
                <img src="img/chair-available.png" alt="chair" class="chair id48 pos8">
            </section>
        </section>
    </article>

<article class="center">
    <section class="dancingArea"></section>

    <article class="sectionBottom">
        <section class="party-room">
            <section class="table-container">
            <img src="img/table.png" alt="table" class="table">
                <img src="img/chair-available.png" alt="chair" class="chair id49 pos1">
                <img src="img/chair-available.png" alt="chair" class="chair id50 pos2">
                <img src="img/chair-available.png" alt="chair" class="chair id51 pos3">
                <img src="img/chair-available.png" alt="chair" class="chair id52 pos4">
                <img src="img/chair-available.png" alt="chair" class="chair id53 pos5">
                <img src="img/chair-available.png" alt="chair" class="chair id54 pos6">
                <img src="img/chair-available.png" alt="chair" class="chair id55 pos7">
                <img src="img/chair-available.png" alt="chair" class="chair id56 pos8">
            </section>
        </section>

        <section class="party-room">
            <section class="table-container">
            <img src="img/table.png" alt="table" class="table">
                <img src="img/chair-available.png" alt="chair" class="chair id57 pos1">
                <img src="img/chair-available.png" alt="chair" class="chair id58 pos2">
                <img src="img/chair-available.png" alt="chair" class="chair id59 pos3">
                <img src="img/chair-available.png" alt="chair" class="chair id60 pos4">
                <img src="img/chair-available.png" alt="chair" class="chair id61 pos5">
                <img src="img/chair-available.png" alt="chair" class="chair id62 pos6">
                <img src="img/chair-available.png" alt="chair" class="chair id63 pos7">
                <img src="img/chair-available.png" alt="chair" class="chair id64 pos8">
            </section>
        </section>
    </article>
</article>

<article class="sectionSides">
        <section class="party-room">
            <section class="table-container">
            <img src="img/table.png" alt="table" class="table">
                <img src="img/chair-available.png" alt="chair" class="chair id65 pos1">
                <img src="img/chair-available.png" alt="chair" class="chair id66 pos2">
                <img src="img/chair-available.png" alt="chair" class="chair id67 pos3">
                <img src="img/chair-available.png" alt="chair" class="chair id68 pos4">
                <img src="img/chair-available.png" alt="chair" class="chair id69 pos5">
                <img src="img/chair-available.png" alt="chair" class="chair id70 pos6">
                <img src="img/chair-available.png" alt="chair" class="chair id71 pos7">
                <img src="img/chair-available.png" alt="chair" class="chair id72 pos8">
            </section>
        </section>

        <section class="party-room">
            <section class="table-container">
            <img src="img/table.png" alt="table" class="table">
                <img src="img/chair-available.png" alt="chair" class="chair id73 pos1">
                <img src="img/chair-available.png" alt="chair" class="chair id74 pos2">
                <img src="img/chair-available.png" alt="chair" class="chair id75 pos3">
                <img src="img/chair-available.png" alt="chair" class="chair id76 pos4">
                <img src="img/chair-available.png" alt="chair" class="chair id77 pos5">
                <img src="img/chair-available.png" alt="chair" class="chair id78 pos6">
                <img src="img/chair-available.png" alt="chair" class="chair id79 pos7">
                <img src="img/chair-available.png" alt="chair" class="chair id80 pos8">
            </section>
        </section>

        <section class="party-room">
            <section class="table-container">
            <img src="img/table.png" alt="table" class="table">
                <img src="img/chair-available.png" alt="chair" class="chair id81 pos1">
                <img src="img/chair-available.png" alt="chair" class="chair id82 pos2">
                <img src="img/chair-available.png" alt="chair" class="chair id83 pos3">
                <img src="img/chair-available.png" alt="chair" class="chair id84 pos4">
                <img src="img/chair-available.png" alt="chair" class="chair id85 pos5">
                <img src="img/chair-available.png" alt="chair" class="chair id86 pos6">
                <img src="img/chair-available.png" alt="chair" class="chair id87 pos7">
                <img src="img/chair-available.png" alt="chair" class="chair id88 pos8">
            </section>
        </section>
    </article>

    <article class="sectionSides">
        <section class="party-room">
            <section class="table-container">
            <img src="img/table.png" alt="table" class="table">
                <img src="img/chair-available.png" alt="chair" class="chair id89 pos1">
                <img src="img/chair-available.png" alt="chair" class="chair id90 pos2">
                <img src="img/chair-available.png" alt="chair" class="chair id91 pos3">
                <img src="img/chair-available.png" alt="chair" class="chair id92 pos4">
                <img src="img/chair-available.png" alt="chair" class="chair id93 pos5">
                <img src="img/chair-available.png" alt="chair" class="chair id94 pos6">
                <img src="img/chair-available.png" alt="chair" class="chair id95 pos7">
                <img src="img/chair-available.png" alt="chair" class="chair id96 pos8">
            </section>
        </section>

        <section class="party-room">
            <section class="table-container">
            <img src="img/table.png" alt="table" class="table">
                <img src="img/chair-available.png" alt="chair" class="chair id97 pos1">
                <img src="img/chair-available.png" alt="chair" class="chair id98 pos2">
                <img src="img/chair-available.png" alt="chair" class="chair id99 pos3">
                <img src="img/chair-available.png" alt="chair" class="chair id100 pos4">
                <img src="img/chair-available.png" alt="chair" class="chair id101 pos5">
                <img src="img/chair-available.png" alt="chair" class="chair id102 pos6">
                <img src="img/chair-available.png" alt="chair" class="chair id103 pos7">
                <img src="img/chair-available.png" alt="chair" class="chair id104 pos8">
            </section>
        </section>

        <section class="party-room">
            <section class="table-container">
            <img src="img/table.png" alt="table" class="table">
                <img src="img/chair-available.png" alt="chair" class="chair id105 pos1">
                <img src="img/chair-available.png" alt="chair" class="chair id106 pos2">
                <img src="img/chair-available.png" alt="chair" class="chair id107 pos3">
                <img src="img/chair-available.png" alt="chair" class="chair id108 pos4">
                <img src="img/chair-available.png" alt="chair" class="chair id109 pos5">
                <img src="img/chair-available.png" alt="chair" class="chair id110 pos6">
                <img src="img/chair-available.png" alt="chair" class="chair id111 pos7">
                <img src="img/chair-available.png" alt="chair" class="chair id112 pos8">
            </section>
        </section>
    </article>

    <!-- Modal -->
    <div class="modal fade" id="Chosen" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center">Reserve chair for <?php echo $_SESSION["name"];?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <form action="code/chairsUpdate.php" method="POST">
                        <label for="">Write the number of the chair:</label>
                        <input class="idtest btn btn-success" disabled type="integer" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Dismisschair">Dismiss chair</button>
                            <input type="submit" name="reserve_cahir" class="btn btn-primary" value="Reserve chair">                        
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal DELETE -->
    <div class="modal fade" id="Dismisschair" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Dismiss chair</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="code/chairsDelete.php" method="POST">
                        <div class="modal-body">
                        <div class="form-group">
                                <label for="">Write the number of the actual chair: (You must be the occupant)</label>
                                <input type="integer" name="idchair" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" name="vacateChair" class="btn btn-danger" value="Dismiss">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    

</article>
</body>

<script>
        async function getChairs(){
        let url = "code/chairs.php";
        
        await fetch(url)
        .then(response=> response.json())
        .then(data=>{
            console.log(data);

            data.forEach(chair=> {

                if(chair.name != 0){
                var $refChair = $(".id"+chair.id);
                $refChair.attr("src", "img/chair-occupied.png");
                $refChair.attr("data-bs-toggle", "popover");
                $refChair.attr("title", "Reserved by: ");
                $refChair.attr("data-bs-trigger", "hover focus");
                $refChair.attr("data-bs-placement", "top");
                $refChair.attr("data-bs-content", chair.name);

                new bootstrap.Popover($refChair);
            }

            else{
                var $refChair = $(".id"+chair.id);
                $refChair.attr("data-bs-placement", "top");
                $refChair.attr("data-bs-trigger", "hover focus");
                $refChair.attr("data-bs-content", "Available chair: "+chair.id);

                new bootstrap.Popover($refChair);
            }
            });
        });
    }

    getChairs();
</script>

<script>
        async function updateChairs(){
            let url = "code/chairsID.php";
            fetch(url)
            .then(response=>response.json())
            .then(data=>{
                console.log(data);

                data.forEach(chair=>{
                    let $chairB = $(".id" + chair.id);
                    $chairB.attr("role","button");
                    $chairB.attr("data-bs-toggle", "modal");
                    $chairB.attr("data-bs-target", "#Chosen");
                    $chairB.attr("data-bs-content", "Update");
                    new bootstrap.Button($chairB);
                }
                );
            });
        }
        updateChairs();
</script>

<script>
        async function getChairID(){
            let url = "code/chairsID.php";
            fetch(url)
            .then(response=>response.json())
            .then(data=>{
                console.log(data);

                data.forEach(chair=>{
                    let $showid = $(".idtest");
                    $showid.attr("name", chair.id);
                    $showid.attr("data-bs-content", "Num"+chair.id);
                    $showid.attr("value", "Num"+chair.id);

                    new bootstrap.Button($showid);
                }
                );
            });
        }
        getChairID();
    </script>

</html>