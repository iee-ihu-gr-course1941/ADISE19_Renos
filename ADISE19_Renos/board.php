<?php
    require_once 'db_connect.php';
    require_once 'session.php';
    require 'functions.php';
    $player1 = $_SESSION['player1'];
    $player2 = $_SESSION['player2'];
    
   
    
    if (isset($_GET['change'])) {
        $col=$_GET['col'];
        getColValue($col);
        
    }
    //




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/board.css">
    <title>Tic-Tac-Toe</title>
</head>
<body>
    <div class="outer-container">
        <div class="outer-item">
            <div class="stat-container">
                <div class="stat-item">
                    <?php
                        if(getTurn()==0){
                            echo '<div class="turn-box" style="background-color: green"></div>';
                        }else {
                            echo '<div class="turn-box" style="background-color: #bbb"></div>';
                        }
                    ?>
                    <h5><?php echo "$player1";?> = X</h5>
                </div>
                <div class="stat-item">
                <?php
                        if(getTurn()==0){
                            echo '<div class="turn-box" style="background-color: #bbb"></div>';
                        }else {
                            echo '<div class="turn-box" style="background-color: green"></div>';
                        }
                    ?>
        
                    <h5><?php echo "$player2";?>= O</h5>
                </div>
            </div>
            <div class="grid-container">
                <div class="box  box-left" id="box1">
                    <a class="inner-box "  href="board.php?change=true&col=0" >
                        <?php 
                            $c0 = "";
                            $query ="SELECT c0 FROM boardTable" ;
                               if ($result = $con->query($query)) {
                            
                                   /* fetch associative array */
                                   while ($row = $result->fetch_assoc()) {
                                       $c0 = $row["c0"];
                                   
                                   }
                                
                                   /* free result set */
                                   $result->free();
                               }
                               if(!empty($c0)){
                                   echo $c0;
                               }
                               else{
                                   echo "1";
                               }
                        ?>
                    </a>
                </div>
                <div class="box" id="box2">
                    <a class="inner-box "  href="board.php?change=true&col=1" >
                    <?php 
                            $c1 = "";
                            $query ="SELECT c1 FROM boardTable" ;
                               if ($result = $con->query($query)) {
                            
                                   /* fetch associative array */
                                   while ($row = $result->fetch_assoc()) {
                                       $c1 = $row["c1"];
                                   
                                   }
                                
                                   /* free result set */
                                   $result->free();
                               }
                               if(!empty($c1)){
                                   echo $c1;
                               }
                               else{
                                   echo "2";
                               }
                        ?>
                        </a>
                </div>
                <div class="box" id="box3">
                    <a class="inner-box " href="board.php?change=true&col=2" >
                    <?php 
                            $c2 = "";
                            $query ="SELECT c2 FROM boardTable" ;
                               if ($result = $con->query($query)) {
                            
                                   /* fetch associative array */
                                   while ($row = $result->fetch_assoc()) {
                                       $c2 = $row["c2"];
                                   
                                   }
                                
                                   /* free result set */
                                   $result->free();
                               }
                               if(!empty($c2)){
                                   echo $c2;
                               }
                               else{
                                   echo "3";
                               }
                        ?>
                    </a>
                </div>
                <div class="box box-left" id="box4">
                    <a class="inner-box " href="board.php?change=true&col=3" > 
                    <?php 
                            $c3 = "";
                            $query ="SELECT c3 FROM boardTable" ;
                               if ($result = $con->query($query)) {
                            
                                   /* fetch associative array */
                                   while ($row = $result->fetch_assoc()) {
                                       $c3 = $row["c3"];
                                   
                                   }
                                
                                   /* free result set */
                                   $result->free();
                               }
                               if(!empty($c3)){
                                   echo $c3;
                               }
                               else{
                                   echo "4";
                               }
                        ?>
                        </a>
                </div>
                <div class="box" id="box5">
                    <a <a class="inner-box " href="board.php?change=true&col=4" >
                    <?php 
                            $c4 = "";
                            $query ="SELECT c4 FROM boardTable" ;
                               if ($result = $con->query($query)) {
                            
                                   /* fetch associative array */
                                   while ($row = $result->fetch_assoc()) {
                                       $c4 = $row["c4"];
                                   
                                   }
                                
                                   /* free result set */
                                   $result->free();
                               }
                               if(!empty($c4)){
                                   echo $c4;
                               }
                               else{
                                   echo "5";
                               }
                        ?>
                    </a>
                </div>
                <div class="box" id="box6" >
                    <a class="inner-box " href="board.php?change=true&col=5" >
                    <?php 
                            $c5 = "";
                            $query ="SELECT c5 FROM boardTable" ;
                               if ($result = $con->query($query)) {
                            
                                   /* fetch associative array */
                                   while ($row = $result->fetch_assoc()) {
                                       $c5 = $row["c5"];
                                   
                                   }
                                
                                   /* free result set */
                                   $result->free();
                               }
                               if(!empty($c5)){
                                   echo $c5;
                               }
                               else{
                                   echo "6";
                               }
                        ?>
                    </a>
                </div>
                <div class="box box-left" id="box7" >
                    <a class="inner-box " href="board.php?change=true&col=6" >
                    <?php 
                            $c6 = "";
                            $query ="SELECT c6 FROM boardTable" ;
                               if ($result = $con->query($query)) {
                            
                                   /* fetch associative array */
                                   while ($row = $result->fetch_assoc()) {
                                       $c6 = $row["c6"];
                                   
                                   }
                                
                                   /* free result set */
                                   $result->free();
                               }
                               if(!empty($c6)){
                                   echo $c6;
                               }
                               else{
                                   echo "7";
                               }
                        ?>
                    </a>
                </div>
                <div class="box" id="box8" >
                    <a class="inner-box " href="board.php?change=true&col=7" >
                    <?php 
                            $c7 = "";
                            $query ="SELECT c7 FROM boardTable" ;
                               if ($result = $con->query($query)) {
                            
                                   /* fetch associative array */
                                   while ($row = $result->fetch_assoc()) {
                                       $c7 = $row["c7"];
                                   
                                   }
                                
                                   /* free result set */
                                   $result->free();
                               }
                               if(!empty($c7)){
                                   echo $c7;
                               }
                               else{
                                   echo "8";
                               }
                        ?>
                    </a>
                </div>
                <div class="box " id="box9" >
                    <a class="inner-box " href="board.php?change=true&col=8" >
                    <?php 
                            $c8 = "";
                            $query ="SELECT c8 FROM boardTable" ;
                               if ($result = $con->query($query)) {
                            
                                   /* fetch associative array */
                                   while ($row = $result->fetch_assoc()) {
                                       $c8 = $row["c8"];
                                   
                                   }
                                
                                   /* free result set */
                                   $result->free();
                               }
                               if(!empty($c8)){
                                   echo $c8;
                               }
                               else{
                                   echo "9";
                               }
                        ?>
                    </a>
                </div>
            </div>
            <div class="point-system">
                <div class="points">
                    <?php
                        echo $player1." Points = ".getPoints(1);
                    ?>
                </div>
                <div class="points">
                <?php
                        echo $player2." Points = ".getPoints(2);
                    ?>
                </div>         
            </div>

        </div>
        <div class="outer-item rules">
            <h2 class="rulesHeader">Rules</h2>
            <p>1. The game is played on a grid that's 3 squares by 3 squares. </p></br>
            <p>2. You are X, your friend is O. Players take turns putting their marks in empty squares.</p></br>
            <p>3. The first player to get 3 of her marks in a row (up, down, across, or diagonally) is the winner.</p></br>
            <p>4. When all 9 squares are full, the game is over. If no player has 3 marks in a row, the game ends in a tie.</p></br>
               <div class="button-container">
                <form action="logout.php" method="post">
                    <button class="exit-btn" type="submit">END GAME</button>
                </form>
                <form action="resetAll.php" method="post">
                    <button class="reset-btn" type="submit">RESET</button>
                </form>
               </div>                
                    
                <?php
                checkState();
                ?>
        </div>


    </div>
    
    
</body>
</html>