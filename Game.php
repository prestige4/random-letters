<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WordoGraph</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="javascript/jquery-3.7.0.min.js"></script>
    <style>
        #logo {
            width : 500px;
            height : 180px;
            border-radius: 7px;
        }
        .timerContainer {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="mb-4">
            <p class="text-lg mb-3" style="color: green;">
                Your total score is : 
                <?php
                if ( isset($_SESSION['oldScore']) ) {
                    echo $_SESSION['oldScore'];
                }else {
                    echo "0";
                }
                ?>
                points.
            </p>
        </div>
        <form>
            <div class="text-center mb-4">
                <p class="timerContainer">
                    You have only 
                    <span id="timer">90</span>
                     seconds
                </p>
            </div>
            <div class="text-center mb-4">
                <img src="image/game logo.jpeg" alt="logo" class="img-fluid" id="logo">
            </div>
            <div class="mb-3">
                <center>
                    <p id="letters">
                        Write a correct word from this random letters (
                        <span style="color: blue;" id="theString">
                            <?php
                            require('oop.php');
                            echo $randomString;
                            ?>
                        </span>
                        )
                        <p id="try" style="color: green;">You have to write only one correct word ( Hint :- Choose the longest word )</p>
                    </p>
                </center>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control random" placeholder="Add one correct word">
            </div>
            <div class="text-center">
                <button class="btn btn-primary btn" type="submit">Check</button>
            </div>
        </form>
    </div>
    <br>
    <div class="mb-3">
        <center>
            <p id="scoreContainer">
                Your score in this game is : 
                <span id="score">
                    0 piont
                </span>
            </p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger modalbtn" data-toggle="modal" data-target="#exampleModalCenter">
                New Score
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Warning</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            Are you sure to end your score and start a new score !
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger newScore">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <p>
                To read about this game visit this github link
                <a target="_blank" href="https://github.com/prestige4/random-letters/blob/main/README.md">GitHub</a>
            </p>
        </center>
    </div>
    <script src="javascript/check.js"></script>
    <script src="javascript/newscore.js"></script>
</body>
</html>