<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Crud Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    


       <div class="container">
          <div class="row">
            <div class="col-md-9">
            <div class="card">
             <div class="card-header">
                  <h1>Student CRUD Application</h1>
          </div>

          <div class="card-body">
            <button class="btn-success"> <a href="add.php" class="text-light"> Add New </a> </button>
            <br/>
            <br/>

          <table class="table">
  <thead>
    <tr>
     <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $connection =mysqli_connect("localhost","root","");
    $db =mysqli_select_db($connection,"dbcrud");
    $sql="select*from student";
    $id=1;
      while($row =mysqli_fetch_array($run))
      {
        $uid=$row['id'];
        $name=$row['name'];
        $address=$row['address'];
        $mobile=$row['mobile'];
      
    ?>
    <tr>
        <td><?php  echo $name ?></td>
        <td><?php echo $address ?></td>
        <td><?php echo $mobile ?></td>
      </tr>
      <?php} ?>
  </tbody>
</table>
    
  </div>
           
                   </div>






         </div>
                </div>
                      </div>
            </body>            
</html>
