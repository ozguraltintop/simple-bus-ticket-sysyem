<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body {
    
        background: #e8e8e6;
    }
    a:link, a:visited {
      background-color: #f44336;
      color: white;
      padding: 5px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-family:Anton;
    }
    
    a:hover, a:active {
      background-color: red;
    }
    .middle {
      

             position:absolute;
             left: 40%;
             top: 30%;
             margin-left: -50px;
             margin-top: -50px;
}
       
    .input {
        width: 60px;
        height: 60px;
        background: none;
        outline: none;
        border-radius: 50px;
        border: 4px solid white;
        box-sizing: border-box;
        transition: width 0.2s ease-in-out,
        border-radius 0.8s ease-in-out,
        padding 0.2s ease-in-out;
        transition-delay: 0.4s;
        color: white;
        font-size: 20px;
    }
    .inclicked {
        width: 360px;
        border-radius: 0;
        padding: 0 15px;
        padding-right: 40px;
    }
    .btn {
        position: absolute;
        width: 60px;
        height: 60px;
        top: 0;
        right: 0;
        box-sizing: border-box;
        background: none;
        border: none;
        outline: none;
        cursor: pointer;
    }
    .btn::before {
        content: "";
        width: 4px;
        height: 25px;
        background: white;
        position: absolute;
        transform: rotate(-45deg);
        bottom: -16px;
        right: -6px;
        transform: 0.3s;
    }
    .close::before, .close::after {
        content: "";
        width: 4px;
        height: 34px;
        background: white;
        position: absolute;
        bottom: 12px;
        right: 28px;
    }
    .close::before {
        transform: rotate(-45deg);
    }
    .close::after {
        transform: rotate(45deg);
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

 $(".btn").on("click",function(){
 $(".input").toggleClass("inclicked");
$(".btn").toggleClass("close")
        })
</script>

</head>
<body>

    <div class="middle">
       
<?php
$search_value=$_POST["search"];
$con=new mysqli("localhost","root","","bubilet");
if($con->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql="select * from kayit where takipno = '$search_value'";

        $res=$con->query($sql);

              while($row=$res->fetch_assoc()){
             echo '<img src=images/logo.png style="width:50px;" ><br>';
            echo '<b style="width:8px">Please provide a tracking number.</b><br><br><hr>';
            echo '<b style="color:black

"><i>Tracking Number </i></b>:  <u>'.$row["takipno"].'</u><br>';
            echo '<b>Name Sender: </b>  <i>'.$row["ad"].'</i><br>';
            echo '<b>Receiver: </b>  <i>'.$row["tc"].'</i><br>';
            echo '<b>Address:</b>  <i>'.$row["mail"].'</i><br>';
            echo '<b>Product:</b>  <i>'.$row["tel"].'</i><br>';
 
               

        
            
            echo '<a href="index.php" style="color:blue">BACK : </a><br><hr>  ';
          
                

   
        
        }
            
      
          
        }
       
?>
    </div>


</body>
</html>



