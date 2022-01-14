<?php

/*
    //data types
    Number 1,2,3,4,0,9....
    Alphabets a,b,c,d,e..
    Special Characters %,<,"",_,=
    Boolean  True, False  
    VarChar  123Waqas


    int 0,1,2,3,4,5
  -   strings "nice","bad","good" |  'abc','def'
    boolean True, False 
  -  char    'a','&','$'
    float     23.5

    */


// Assigment Expression
  $player1 = "Azeem";
  $player2 = "Ali";

  $player1points = 110;

  $player2points = 17;



  



 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


  <div class="container">

    <div class="menu">
      <div class="left ib">
        <div class="table"> 
          <div class="table-cell"> 
        
            <div class="image-wrapper">
            <img src="https://bit.ly/3noeB9S" />
            </div>

          </div>
        </div>
      </div>
      <div class="right ib">
        <div class="table"> 
          <div class="table-cell"> 
            <ul class="menu">
              
              <li><a href="https://google.com">Home</a></li>
              <li><a href="https://google.com">About Us </a></li>
              <li><a href="https://google.com">Contact Us</a></li>
                <li><a href="https://google.com">Blog</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- menu ended -->

    <div class="data">

      <div class="alertbox">

        <label>Both players <?php echo $player1; ?> and <?php echo $player2 ?> are on the ground</label>


        <div class="scoreboard">
          <div class="table">
            <div class="table-cell"> 
              <div class="points"> 
          P1-> <?php echo $player1points ?> - <?php  echo $player2points; ?> <-p2
              </div>
              <div class="total goals">
               Total: <?php echo $player1points + $player2points; ?>
              </div>

              <div class="winner">
                <?php


                if($player1points > $player2points  ){
                  echo $player1." is winner";
                 }
                 else{
                  echo $player2." is winner";
                 }


                 ?>
              </div>
            </div>
          </div>
        </div>




      </div>


    </div>



  </div>

</body>
</html>