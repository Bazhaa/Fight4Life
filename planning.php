<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fight4Fife</title>
    <link rel="shortcut icon" type="image/x-icon" href="resources/img/logo.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light nav-custom">
        <a class="nav-link" href="selection.php">Previous</a>
        <a class="nav-link ml-auto" data-toggle="modal" data-target="#myModal">Next</a>
    </nav>    
    <br>
    <img src="resources/img/planing400.png" style="width:40%; left:30%;" alt="planing">
    <br>
    <table class="table table-borderless">
        <th>
            TASK
        </th>
        <th>
            UNIT
        </th>
        <th>
            TIME
        </th>
        <tr>
            <td>
                <img src="resources/img/planing402.png" class="pimg1" alt="error">
            </td>
            <td>
                <input type="number" name="num" id="" min=1><strong> Rep/Set</strong>
            </td>
            <td>
                From: <input type="datetime-local" name="st" id="">
                To: <input type="datetime-local" name="et" id="">
            </td>
        </tr>
        <tr>
            <td>
                <img src="resources/img/planing403.png" class="pimg2" alt="error">
            </td>
            <td>
                <input type="number" name="num" id="" min=10><strong>mins/day</strong>
            </td>
            <td>
                From: <input type="datetime-local" name="st" id="st">
                To: <input type="datetime-local" name="et" id="">
            </th>
        </tr>
        <tr>
            <td>
                <img src="resources/img/planing404.png" class="pimg3" alt="error">
            </td>
            <td>
            <input type="number" name="num" id="" min=10><strong>mins/day</strong><strong>mins/day</strong>
            </td>
            <td>
                From: <input type="datetime-local" name="st" id="st">
                To: <input type="datetime-local" name="et" id="">
            </td>
        </tr>
    </table>

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body" style="text-align:center;">
            <strong>Are you ready for your fight ?</strong>
      </div>
      <div class="modal-footer">
      <a href="gamming.php"><button type="button" class="btn btn-primary">Yes</button></a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>