<?php

function makemove($col){
    if($col==0){
        if(getTurn()==0){
          setTurn();
          $sql = "UPDATE `boardTable` SET `c0`='X'";
          $con = mysqli_connect("localhost", "root", "","adise_project");
          if ($con->query($sql) === TRUE) {
            error_log("c0 changed to O");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
         }else if (getTurn()==1){
            setTurn();
            $sql = "UPDATE `boardTable` SET `c0`='O'";
            $con = mysqli_connect("localhost", "root", "","adise_project");
            if ($con->query($sql) === TRUE) {
                error_log("c0 changed to O");
          } else {
              echo "Error: " . $sql . "<br>" . $con->error;
          }
         }
         //test if it is the 2nd box
        }else if($col==1){
        if(getTurn()==0){
          setTurn();
          $sql = "UPDATE `boardTable` SET `c1`='X'";
          $con = mysqli_connect("localhost", "root", "","adise_project");
          if ($con->query($sql) === TRUE) {
            error_log("c1 changed to X");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
         }else if (getTurn()==1){
            setTurn();
            $sql = "UPDATE `boardTable` SET `c1`='O'";
            $con = mysqli_connect("localhost", "root", "","adise_project");
            if ($con->query($sql) === TRUE) {
                error_log("c1 changed to O");
          } else {
              echo "Error: " . $sql . "<br>" . $con->error;
          }
         }
         //test if it is the 3nd box
    }else  if($col==2){
        if(getTurn()==0){
          setTurn();
          $sql = "UPDATE `boardTable` SET `c2`='X'";
          $con = mysqli_connect("localhost", "root", "","adise_project");
          if ($con->query($sql) === TRUE) {
            error_log("c2 changed to X");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
         }else if (getTurn()==1){
            setTurn();
            $sql = "UPDATE `boardTable` SET `c2`='O'";
            $con = mysqli_connect("localhost", "root", "","adise_project");
            if ($con->query($sql) === TRUE) {
                error_log("c2 changed to O");
          } else {
              echo "Error: " . $sql . "<br>" . $con->error;
          }
         }
         //test if it is the 3nd box
    }else  if($col==3){
        if(getTurn()==0){
          setTurn();
          $sql = "UPDATE `boardTable` SET `c3`='X'";
          $con = mysqli_connect("localhost", "root", "","adise_project");
          if ($con->query($sql) === TRUE) {
            error_log("c3 changed to X");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
         }else if (getTurn()==1){
            setTurn();
            $sql = "UPDATE `boardTable` SET `c3`='O'";
            $con = mysqli_connect("localhost", "root", "","adise_project");
            if ($con->query($sql) === TRUE) {
                error_log("c3 changed to O");
          } else {
              echo "Error: " . $sql . "<br>" . $con->error;
          }
         }
         //test if it is the 4nd box
    }else  if($col==4){
        if(getTurn()==0){
          setTurn();
          $sql = "UPDATE `boardTable` SET `c4`='X'";
          $con = mysqli_connect("localhost", "root", "","adise_project");
          if ($con->query($sql) === TRUE) {
            error_log("c4 changed to X");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
         }else if (getTurn()==1){
            setTurn();
            $sql = "UPDATE `boardTable` SET `c4`='O'";
            $con = mysqli_connect("localhost", "root", "","adise_project");
            if ($con->query($sql) === TRUE) {
                error_log("c4 changed to O");
          } else {
              echo "Error: " . $sql . "<br>" . $con->error;
          }
         }
         //test if it is the 5nd box
    }else  if($col==5){
        if(getTurn()==0){
          setTurn();
          $sql = "UPDATE `boardTable` SET `c5`='X'";
          $con = mysqli_connect("localhost", "root", "","adise_project");
          if ($con->query($sql) === TRUE) {
            error_log("c5 changed to X");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
         }else if (getTurn()==1){
            setTurn();
            $sql = "UPDATE `boardTable` SET `c5`='O'";
            $con = mysqli_connect("localhost", "root", "","adise_project");
            if ($con->query($sql) === TRUE) {
                error_log("c5 changed to O");
          } else {
              echo "Error: " . $sql . "<br>" . $con->error;
          }
         }
         //test if it is the 6nd box
    }else  if($col==6){
        if(getTurn()==0){
          setTurn();
          $sql = "UPDATE `boardTable` SET `c6`='X'";
          $con = mysqli_connect("localhost", "root", "","adise_project");
          if ($con->query($sql) === TRUE) {
            error_log("c6 changed to X");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
         }else if (getTurn()==1){
            setTurn();
            $sql = "UPDATE `boardTable` SET `c6`='O'";
            $con = mysqli_connect("localhost", "root", "","adise_project");
            if ($con->query($sql) === TRUE) {
                error_log("c6 changed to O");
          } else {
              echo "Error: " . $sql . "<br>" . $con->error;
          }
         }
         //test if it is the 8nd box
    }else  if($col==7){
        if(getTurn()==0){
          setTurn();
          $sql = "UPDATE `boardTable` SET `c7`='X'";
          $con = mysqli_connect("localhost", "root", "","adise_project");
          if ($con->query($sql) === TRUE) {
            error_log("c7 changed to X");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
         }else if (getTurn()==1){
            setTurn();
            $sql = "UPDATE `boardTable` SET `c7`='O'";
            $con = mysqli_connect("localhost", "root", "","adise_project");
            if ($con->query($sql) === TRUE) {
                error_log("c7 changed to O");
          } else {
              echo "Error: " . $sql . "<br>" . $con->error;
          }
         }
         //test if it is the 9nd box
    }
    else  if($col==8){
        if(getTurn()==0){
          setTurn();
          $sql = "UPDATE `boardTable` SET `c8`='X'";
          $con = mysqli_connect("localhost", "root", "","adise_project");
          if ($con->query($sql) === TRUE) {
            error_log("c8 changed to X");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
         }else if (getTurn()==1){
            setTurn();
            $sql = "UPDATE `boardTable` SET `c8`='O'";
            $con = mysqli_connect("localhost", "root", "","adise_project");
            if ($con->query($sql) === TRUE) {
                error_log("c8 changed to O");
          } else {
              echo "Error: " . $sql . "<br>" . $con->error;
          }
         }
         
    }


}

function getColValue($col){
    if($col==0)
    {
        $query ="SELECT c0 FROM boardTable" ;
        $con = mysqli_connect("localhost", "root", "","adise_project");
        if ($result = $con->query($query)) {
         /* fetch associative array */
         while ($row = $result->fetch_assoc()) {
            $value = $row["c0"];
            }
         $result->free();
        }
         if($value != "X" && $value !="O"){
            makemove($col);
         }  
    } else if($col==1)
    {
        $query ="SELECT c1 FROM boardTable" ;
        $con = mysqli_connect("localhost", "root", "","adise_project");
        if ($result = $con->query($query)) {
         /* fetch associative array */
         while ($row = $result->fetch_assoc()) {
            $value = $row["c1"];
            }
         /* free result set */
         $result->free();
        }
         if($value != "X" && $value !="O"){
            makemove($col);
         }  
         
    } else if($col==2)
    {
        $query ="SELECT c2 FROM boardTable" ;
        $con = mysqli_connect("localhost", "root", "","adise_project");
        if ($result = $con->query($query)) {
         /* fetch associative array */
         while ($row = $result->fetch_assoc()) {
            $value = $row["c2"];
            }
         /* free result set */
         $result->free();
        }
         if($value != "X" && $value !="O"){
            makemove($col);
         }  
         
    } else if($col==3)
    {
        $query ="SELECT c3 FROM boardTable" ;
        $con = mysqli_connect("localhost", "root", "","adise_project");
        if ($result = $con->query($query)) {
         /* fetch associative array */
         while ($row = $result->fetch_assoc()) {
            $value = $row["c3"];
            }
         /* free result set */
         $result->free();
        }
         if($value != "X" && $value !="O"){
            makemove($col);
         }  
    } else if($col==4)
    {
        $query ="SELECT c4 FROM boardTable" ;
        $con = mysqli_connect("localhost", "root", "","adise_project");
        if ($result = $con->query($query)) {
         /* fetch associative array */
         while ($row = $result->fetch_assoc()) {
            $value = $row["c4"];
            }
         /* free result set */
         $result->free();
        }
         if($value != "X" && $value !="O"){
            makemove($col);
         }  
         
    } else if($col==5)
    {
        $query ="SELECT c5 FROM boardTable" ;
        $con = mysqli_connect("localhost", "root", "","adise_project");
        if ($result = $con->query($query)) {
         /* fetch associative array */
         while ($row = $result->fetch_assoc()) {
            $value = $row["c5"];
            }
         /* free result set */
         $result->free();
        }
         if($value != "X" && $value !="O"){
            makemove($col);
         }  
         
    } else if($col==6)
    {
        $query ="SELECT c6 FROM boardTable" ;
        $con = mysqli_connect("localhost", "root", "","adise_project");
        if ($result = $con->query($query)) {
         /* fetch associative array */
         while ($row = $result->fetch_assoc()) {
            $value = $row["c6"];
            }
         /* free result set */
         $result->free();
        }
         if($value != "X" && $value !="O"){
            makemove($col);
         }  
         
    } else if($col==7)
    {
        $query ="SELECT c7 FROM boardTable" ;
        $con = mysqli_connect("localhost", "root", "","adise_project");
        if ($result = $con->query($query)) {
         /* fetch associative array */
         while ($row = $result->fetch_assoc()) {
            $value = $row["c7"];
            }
         /* free result set */
         $result->free();
        }
         if($value != "X" && $value !="O"){
            makemove($col);
         }  
         
    } else if($col==8)
    {
        $query ="SELECT c8 FROM boardTable" ;
        $con = mysqli_connect("localhost", "root", "","adise_project");
        if ($result = $con->query($query)) {
         /* fetch associative array */
         while ($row = $result->fetch_assoc()) {
            $value = $row["c8"];
            }
         /* free result set */
         $result->free();
        }
         if($value != "X" && $value !="O"){
            makemove($col);
         }  
         
    }

}

function getTurn(){
    $turn;
    $query ="SELECT t FROM boardTable" ;
        $con = mysqli_connect("localhost", "root", "","adise_project");
        if ($result = $con->query($query)) {
         /* fetch associative array */
         while ($row = $result->fetch_assoc()) {
            $turn = $row["t"];
            }
         $result->free();
        }
    return $turn;
}


function setTurn(){
    if(getTurn()== 0){
        $con = mysqli_connect("localhost", "root", "","adise_project");
        $sql = "UPDATE `boardTable` SET `t`=1";
        if ($con->query($sql) === TRUE) {
            error_log("Turn changed");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }else{
        $con = mysqli_connect("localhost", "root", "","adise_project");
        $sql = "UPDATE `boardTable` SET `t`=0";
        if ($con->query($sql) === TRUE) {
            error_log("Turn changed");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
}

function checkState(){
    $c0; $c1; $c2; $c3; $c4; $c5; $c6; $c7; $c8; 
    $query ="SELECT * FROM boardTable" ;
    $con = mysqli_connect("localhost", "root", "","adise_project");
    if ($result = $con->query($query)) {
     /* fetch associative array */
     while ($row = $result->fetch_assoc()) {
        $c0 = $row["c0"];
        $c1 = $row["c1"];
        $c2 = $row["c2"];
        $c3 = $row["c3"];
        $c4 = $row["c4"];
        $c5 = $row["c5"];
        $c6 = $row["c6"];
        $c7 = $row["c7"];
        $c8 = $row["c8"];
        }
     $result->free();
    }

    checkWin($c0,$c1,$c2,$c3,$c4,$c5,$c6,$c7,$c8);
    

}

function checkWin($c0,$c1,$c2,$c3,$c4,$c5,$c6,$c7,$c8){
    $won = False;
    //test DRAW
    

    // test Top x-Axis
    if(!empty($c0) && !empty($c1) && !empty($c2)){
        if($c0=="O" && $c1=="O" && $c2=="O"){
            echo "winner is ".$_SESSION['player2'];
            setPoint(2);
            $won=True;
        }else if ($c0=="X" && $c1=="X" && $c2=="X") {
            echo "winner is ".$_SESSION['player1'];
            setPoint(1);
            $won=True;
        }
    }

    // test Middle x-Axis
    if(!empty($c3) && !empty($c4) && !empty($c5)){
        if($c3=="O" && $c4=="O" && $c5=="O"){
            echo "winner is ".$_SESSION['player2'];
            $won=True;
            setPoint(2);
        }else if ($c3=="X" && $c4=="X" && $c5=="X") {
            echo "winner is ".$_SESSION['player1'];
            setPoint(1);
            $won=True;
        }
    }
    // test Bottom x-Axis
    if(!empty($c6) && !empty($c7) && !empty($c8)){
        if($c6=="O" && $c7=="O" && $c8=="O"){
            echo "winner is ".$_SESSION['player2'];
            setPoint(2);
            $won=True;
        }else if ($c6=="X" && $c7=="X" && $c8=="X") {
            echo "winner is ".$_SESSION['player1'];
            setPoint(1);
            $won=True;
        }
    }

    //test Left y-Axis
    if(!empty($c0) && !empty($c3) && !empty($c6)){
        if($c0=="O" && $c3=="O" && $c6=="O"){
            echo "winner is ".$_SESSION['player2'];
            setPoint(2);
            $won=True;
        }else if ($c0=="X" && $c3=="X" && $c6=="X") {
            echo "winner is ".$_SESSION['player1'];
            setPoint(1);
            $won=True;
        }
    }

    //test Middle y-Axis
    if(!empty($c1) && !empty($c4) && !empty($c7)){
        if($c1=="O" && $c4=="O" && $c7=="O"){
            echo "winner is ".$_SESSION['player2'];
            setPoint(2);
            $won=True;
        }else if ($c1=="X" && $c4=="X" && $c7=="X") {
            echo "winner is ".$_SESSION['player1'];
            setPoint(1);
            $won=True;
        }
    }

    //test Right y-Axis
    if(!empty($c2) && !empty($c5) && !empty($c8)){
        if($c2=="O" && $c5=="O" && $c8=="O"){
            echo "winner is ".$_SESSION['player2'];
            setPoint(2);
            $won=True;
        }else if ($c2=="X" && $c5=="X" && $c8=="X") {
            echo "winner is ".$_SESSION['player1'];
            setPoint(1);
            $won=True;
        }
    }

    //test topleft-to-bottomright 
    if(!empty($c0) && !empty($c4) && !empty($c8)){
        if($c0=="O" && $c4=="O" && $c8=="O"){
            echo "winner is ".$_SESSION['player2'];
            setPoint(2);
            $won=True;
        }else if ($c0=="X" && $c4=="X" && $c8=="X") {
            echo "winner is ".$_SESSION['player1'];
            setPoint(1);
            $won=True;
        }
    }

    //test bottomleft-to-topright
    if(!empty($c2) && !empty($c4) && !empty($c6)){
        if($c2=="O" && $c4=="O" && $c6=="O"){
            echo "winner is ".$_SESSION['player2'];
            setPoint(2);
            $won=True;
        }else if ($c2=="X" && $c4=="X" && $c6=="X") {
            echo "winner is ".$_SESSION['player1'];
            setPoint(1);
            $won=True;
        }
    }
    if(!empty($c0) && !empty($c1) && !empty($c2) && !empty($c3) && !empty($c4) && !empty($c5) && !empty($c6) && !empty($c7) && !empty($c8) && $won==False){
        echo "Its a Draw";
    }


}

function getPoints($player){
    
    if($player == 1){
        //
        $query ="SELECT p1 FROM boardTable" ;
        $con = mysqli_connect("localhost", "root", "","adise_project");
        if ($result = $con->query($query)) {
         /* fetch associative array */
         while ($row = $result->fetch_assoc()) {
            $points = $row["p1"];
            }
         $result->free();
        }
        //
    }else if ($player == 2){
        $query ="SELECT p2 FROM boardTable" ;
        $con = mysqli_connect("localhost", "root", "","adise_project");
        if ($result = $con->query($query)) {
         /* fetch associative array */
         while ($row = $result->fetch_assoc()) {
            $points = $row["p2"];
            }
         $result->free();
        }
    }
    return $points;
}

function setPoint($player){
    if($player == 1){
        $con = mysqli_connect("localhost", "root", "","adise_project");
        $points = getPoints($player);
        $sql = "UPDATE `boardTable` SET `p1`= $points+1";
        if ($con->query($sql) === TRUE) {
            error_log("Added 1 to p1");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
        
    }else if($player == 2){
        $con = mysqli_connect("localhost", "root", "","adise_project");
        $points = getPoints($player);
        $sql = "UPDATE `boardTable` SET `p2`= $points + 1";
        if ($con->query($sql) === TRUE) {
            error_log("Added 1 to p2");
            
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
        
       
    }

}





?>