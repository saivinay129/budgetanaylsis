<?php
  $conn = mysqli_connect("localhost","root","","mystore");
  if(isset($_POST['login_Btn'])){
      $username=$_POST['username'];
      $password=$_POST['password'];
      $sql="SELECT * FROM mystore.details WHERE username ='$username'";
      $result = mysqli_query($conn,$sql);
      while($row = mysqli_fetch_assoc($result)){
          $resultpassword = $row['password'];
          if($password == $resultpassword){
              header('start.html');
          }
          else{
              echo "<script>
                     alert('login unsuccessful');
                  </script>";
          }
      }
  }
?>