<?php


  
if(!empty($_GET['edit'])){

    $id = $_GET['id'];

  $sql = "select * from tbl_person where id=".$id; 
  $result = $conn->query($sql);
  $record = $result->fetch_assoc();

}  


$sql = "Select * from tbl_person";
$result = $conn->query($sql);


$table = "<table>";
$th = "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Cnic</th>
        </tr>";
$tr = "";

if($result->num_rows > 0){
  while( $row = $result->fetch_assoc()){

      //$tr = $tr . '';
      
      $tr .= '<tr><td>'.$row['id'].'</td>
             <td>'.$row['name'].'</td>
             <td>'.$row['address'].'</td>
             <td>'.$row['contact'].'</td>
             <td>'.$row['cnic'].'</td>
             <td><a href="?id='.$row['id'].'&edit=1">edit</a></td>
             <td><a href="?id='.$row['id'].'&delete=1">delete</a></td>
             </tr>';

  }
}

$table = $table.$th.$tr."</table>";
?>