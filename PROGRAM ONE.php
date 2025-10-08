<?php 

const Php = 50;
const Python = 65;
const Java = 84;
const JavaScript = 67;
const React = 69;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Subject</th>
      <th scope="col">Marks</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Php</td>
      <td><?php echo Php ;?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Python</td>
      <td><?php echo Python ;?></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>JavaScript</td>
      <td><?php echo JavaScript ;?></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Java</td>
      <td><?php echo Java ;?></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Ract</td>
      <td><?php echo React ;?></td>
    </tr>
  </tbody>
</table>
</body>
</html>