 <?php
    include "connection.php";
    include "navbar.php"
?> 

    <h1 style="text-align: center;">Edit Information</h1>

      <!------------------------------------------ PHP--------------------------------- -->

        <?php
        
        $sql = "SELECT * FROM s_register WHERE name = '$_SESSION[login_user]'";
        $result = mysqli_query($db,$sql) or die (mysql_error());

        while($row = mysqli_fetch_assoc(result))

        {
            $name=$row['name'];
            $mobile=$row['mobile'];
            $email=$row['email'];
            $password=$row['password'];

        }

?>



    <form action=""  method="POST" autocomplete="off">

<input autocomplete="off" class="form-control" style="margin-left:434px;width: 30%;" type="text" name="name" placeholder="User Name" value="<?php
    echo $name; ?>">  <br>

<input autocomplete="off" class="form-control" style="margin-left:434px;width: 30%;" type="text" name="mobile" placeholder="Mobile No" value="<?php
echo $mobile ; ?>"> <br>

<input autocomplete="off" class="form-control" style="margin-left:434px;width: 30%;" type="text" name="email" placeholder="Email" value="<?php
echo $email ; ?>"> <br> 

<input autocomplete="off" class="form-control" style="margin-left:434px;width: 30%;" type="text" name="password" placeholder="Password" value="<?php
echo $password ; ?>"> <br> 
    
<!-- ----------------------------------------------------BUTTON------------------------------------------------------------ -->
   
   </label> </div> </div> <div class=mt-4><button type=submit
    class="btn btn-block btn-primary" name="submit" style="height:5%;width:10%;padding:0.7%;margin-left:44%;">Save</button>
</form>
</div>

     <!-- ----------------------------PHP------------------- -->


<?php

if(isset($_POST['submit']))

            $name=$_POST['name'];
            $mobile=$_POST['mobile'];
            $email=$_POST['email'];
            $password=$_POST['password'];

            $sql1= "UPDATE s_register SET name='$name', mobile='$mobile' , email = '$email', password = '$password' WHERE name = '".$_SESSION['login_user']."'; ";


            if(mysqli_query($db,$sql1))
            {
                ?>

                
                <script type="text/javascript">
                
                alert("Saved Successfully")

                </script>
                <?php
            }
?>






</body>