<?php


$servername = "localhost";
$username = "root";
$password = "mysql";
$database = "phpintro";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




include 'insert.php';

include 'select.php';





 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
<style type="text/css">
  
  form{
    /*border:  1px solid orange;*/
    width: 50%;
    margin: 30px auto;
  }

  form div.fieldgroup{
    padding:  5px;
    border-bottom: 1px solid grey;
  }

  form div.fieldgroup input[type=submit]
  {
    position: absolute;
    right: 0px;
    padding: 10px 15px;
    background: green;
    color: white;
    display: inline-block;

  }

  form div.fieldgroup:last-of-type{
    border: none;
  }

  .ib{
    display: inline-block;
    width: 49%;
    float: right;
  }

</style>
</head>

<body>


  <div class="ib" >
  <form method="POST" action="">
    
    <div class="fieldgroup">
      <label>Name</label>
      <div>
        <input type="text" name="name" value="<?php echo $record['name']; ?>">
      </div>
    </div>


    <div class="fieldgroup">
      <label>Address</label>
      <div>
        <input type="text" name="address" value="<?php echo $record['address']; ?>">
      </div>
    </div>


    <div class="fieldgroup">
      <label>Contact No</label>
      <div>
        <input type="phone" name="contact_no" value="<?php echo $record['contact']; ?>">
      </div>
    </div>


    <div class="fieldgroup">
      <label>Cnic</label>
      <div>
        <input type="text" name="cnic" value="<?php echo $record['cnic']; ?>">
      </div>
    </div>

    <div class="fieldgroup" style="position:relative;">
      <?php 

          if(!empty($record)){
            echo '<input type="hidden" name="update" value="1" />';
            echo '<input type="hidden" name="id" value="'.$record['id'].'" />';
          }

       ?>
      <input type="submit" name="" value="Add"> 

    </div>

  </form>
</div>

  <div class="ib">
      
      <?php echo $table; ?>

  </div>

</body>
</html>