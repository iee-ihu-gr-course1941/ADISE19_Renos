<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Log-in</title>
</head>
<body>
    <div class="grid-container">
        <div class="grid-item">
            <h2>Welcome to Tic Tac Toe</h2>
        </div>
       
        <div class="grid-item">
        <form action="index.php" method="post">
          <input type="text" name="player_1" id="player_1" placeholder="Player 1">
        </div>
        <div class="grid-item">
        <input type="text" name="player_2" id="player_2" placeholder="Player 2">
        </div>
        <div class="grid-item">
            <input id="play-submit"  name="login-btn" type="submit" value="Play">
        </form>  
        </div>
                        
    </div>
    
</body>
</html>


<?php

if(isset($_POST['login-btn'])){
        if(empty($_POST['player_1']) || empty($_POST['player_2'])){
            printf("<h3>Please fill both names</h3>");     
        }else {
            require_once 'session.php';
            $_SESSION['player1'] = $_POST['player_1'];
            $_SESSION['player2'] = $_POST['player_2'];
            $_SESSION['turn'] = 0;
            header('location: board.php');
        }
    }






?>



