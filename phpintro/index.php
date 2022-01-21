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
   
   define('COUNT', 100);


   $number1 = 10;
   $number2 = 10;

   //Arithmentic operators & Arithmetic operations
   // Assignment expression
   $number3 = $number2 + $number1;  

   $name = "waqas";

   $firstname = "waqas";
   $midname = "ali";
   $lastname = "azhar";

   echo $firstname.' '.$midname.' '.$lastname;

   echo "<p>".$firstname." ".$lastname."</p>";

   


    //pre increment
    echo ++$number3;

    echo "<br>";

    //post increment
    echo $number1+$number3++;

    echo $number3;


   // echo $$number2;
   // 
   // 
   // 
   
   // elements at consecutive memory locations
   // Array length of is equal to number of elements - 10
   // array index always starts from 0 and end at length -1

    //simple array
   $marks_array = array(
     100,90,80,70,60,50,40,30,20,10
   );

   echo "<pre>";
   print_r($marks_array);


   //2d array
   //
  $marks_array = array(
    array(100,90),
    array(90,90),
    array(90,30)

   );



  // echo "<pre>";
  print_r($marks_array);

  echo $marks_array[0][1] + $marks_array[1][1];



  //Associative
  //
  $marks = array(
    "one" => array("urdu" => 15,"english" => '10' ),
    "two" => array("english" => 99, "urdu" => 37)
  );


  print_r($marks);

  $marks2 = array(
    "one" => array("urdu" => 15,"english" => '1000' ),
    "two" => array("english" => 99, "urdu" => 3007)
  );


  echo "<pre>";
  // print_r($marks);
  // print_r($marks["one"]["english"]);
  // print_r($marks["two"]["urdu"]);

  $sum = $marks["one"]["english"] + $marks["two"]["urdu"];
  // print_r($sum);




  function calculate_average($marksArr){
    //set of statement that can be called anywhere in program
    //
    
    $sum = $marksArr["one"]["english"] + $marksArr["two"]["english"];
    $average = $sum /2;
    return $average;

  }


  $result = calculate_average($marks);
  $result2 = calculate_average($marks2);

 // echo $result;
 // 
 // 
 //if else dicision making
$shape = "triangle"; //initiliastion 


function calculate_area($shape,$r=0,$h=0,$w=0){

    if($shape == "circle"){

     
     $area = pi()*$r**2;
     $area = round($area,0);
     $result = "Area of cricle is ".$area." cm<sup>2</sup>";


  } 
  elseif( $shape == "triangle"){

    

    $area =  0.5 * ($h * $w);
    $area = round($area,0);


    $result = "Area of triangle is ".$area." cm<sup>2</sup>";

  } 
  else{
    // area of square
    
    $area = $h * $w;
    $area = round($area,0);

    $result = "Area of square is ".$area." cm<sup>2</sup>";
  }


  return $result;




  }


$area_of_shape = calculate_area("circle",35,10,44);
echo  $area_of_shape;











for($i=0; $i<10; ++$i ){
  echo "<br>";
  echo "Value of i is". $i;
  // break;
}


$i = 0;
while($i<10){
  echo "<br>";
  echo "i is less than ten and its value is ". $i;
  ++$i;
}


$i=0;

do{
  echo "<br>";
  echo "I's value is ".$i;

  ++$i;

}
while($i<10);



$arr1 = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
$arr2 = array(10,20,30,40,50,60,70,80,90,100,110,120,130,140,150);

$length = count($arr1);
$arr3 = array();
for($i=0; $i<$length; ++$i){
  $arr3[$i] = $arr1[$i] * $arr2[$i];
}

echo "<pre>";
print_r($arr3);


$arr4 = array();
foreach($arr1 as $key => $val){
  if($key == 5){
    break;
  }
  $arr4[$key] = $val * $arr2[$key];

}


echo"<pre>";
print_r($arr4);


  





 







  











   






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


  <div class="container" style="display: none;">

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