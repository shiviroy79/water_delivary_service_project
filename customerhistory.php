<?php include("connection.php");
$getAll = "SELECT * FROM customer";
$query = mysqli_query($conn, $getAll);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Message</th>
            <th scope="col">Number</th>
            <th scope="col">Added On(Date:Time)</th>
          </tr>
        </thead>
        <tbody>
          <?php while($result = mysqli_fetch_array($query)){ ?>
          <tr>
            <td><?php echo $result['name']; ?></td>
            <td><?php echo $result['lastname']; ?></td>
            <td><?php echo $result['email']; ?></td>
            <td><?php echo $result['message']; ?></td>
            <td><?php echo $result['number']; ?></td>
            <td><?php echo $result['created_at']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    
</body>
</html>

