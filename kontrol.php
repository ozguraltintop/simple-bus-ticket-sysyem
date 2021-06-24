<!DOCTYPE html>
<html lang="en">
<head>
<style>
 
    body {
        padding: 0;
        margin: 0;
        background: #e8e8e6;
    }
    .topmiddle{
        position: absolute;
        top: 30%;
        left: 57%;
        width:500px;
        height:50px;
        background-color:#e8e8e6;
        transform: translate(-50%, -50%);
    }
    .middle {
        position: absolute;
        top: 53%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .input {
        width: 60px;
        height: 60px;
        background: none;
        outline: none;
        border-radius: 50px;
        border: 4px solid black;
        box-sizing: border-box;
        transition: width 0.2s ease-in-out,
        border-radius 0.8s ease-in-out,
        padding 0.2s ease-in-out;
        transition-delay: 0.4s;
        color: black;
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
        background: black;
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
        background: black;
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
@media only screen and (max-width: 700px) {
  div.middle {
   width:%100;
  }
  div.topmiddle {
     position: absolute;
     top:50%;
     left:50%;
   width:%100;
   font-size: 60px;
  }
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
        <form class="search-box" method="post" action="sonuc.php">
            <input type="text" class="input" name="search">
            <button type="button" class="btn" name="button"></button>
        </form>
        <br><br><br><br><br>
        
    </div>
    <div class="topmiddle">
  
        
    </div>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(".btn").on("click",function(){
            $(".input").toggleClass("inclicked");
            $(".btn").toggleClass("close")
        })
    </script>

</body>
</html>