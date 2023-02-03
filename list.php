<?php
include ('function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">Edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $select=$pdo->prepare("SELECT * FROM crud");
    $select->execute();
    echo"<pre>";
    while($row=$select->fetch(PDO::FETCH_OBJ)){
    // print_r($row);
        echo '<tr>
        <td>'.$row->id.'</td>
        <td>'.$row->username.'</td>
        <td>'.$row->email.'</td>
        <td><button class="btn btn-secondary" type="submit" name="edit"><a href="edit.php?id='.$row->id.'" class="text-light">Edit</a></button></td>
        <td><button class="btn btn-secondary" type="submit" name="delete"><a href="delete.php?delete='.$row->id.'" class="text-light">Delete</a></button></td>
        <td></td>
      </tr>'
;
}
?>

  </tbody>
</table>
</body>
</html>