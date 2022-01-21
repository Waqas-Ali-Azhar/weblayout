<?php

  
  if(!empty($_POST)){

    $name = $_POST['name'];
    $address = $_POST['address'];
    $cnic = $_POST['cnic'];
    $contact = $_POST['contact_no'];

    if(!empty($_POST['update'])){
      $sql = "Update tbl_person SET ".
              "name = '".$name."',  
               address = '".$address."', 
               cnic = '".$cnic."', 
               contact = '".$contact."'  
               where id=".$_POST['id'];

     
       
    }
    else{
      $sql = "insert into tbl_person(name,address,contact,cnic) values 
    ('".$name."',
     '".$address."',
     '".$contact."',
     '".$cnic."'
    )";

    }

    
    



    $result = $conn->query($sql);
    if($result > 0){
      
      if($_POST['id'])
        echo "Record Updated";
      else
        echo "Record Inserted";
    }
  }


 ?>