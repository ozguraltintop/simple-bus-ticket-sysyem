<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bu Bilet</title>

    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<?php include("baglan.php"); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand"><h2>BU BİLET</h2></a>
    <div class="col-md-2" >
    <a href="index.php" class="btn btn-success btn-block">Anasayfa</a>
   <a href="indexold.php" class="btn btn-success btn-block">Bilet Bul</a>
    <a href="kontrol.php" class="btn btn-success btn-block">Kontrol</a>
    </div>
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    

</nav>
    <br><hr>
    <div class="container mt-5">
        
    <div class="form-group">
                        <select name="sehirler" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)"
                            class="form-control">
                            <option>Şehir Seçiniz</option>
                            <?php 
$binisSonuc=$_GET["binis"];
foreach($db->query("select * from sehirler") as $sehirler){ ?>
                            <option value="index.php?&binis=<?php echo $sehirler['sehirIsim'];?>" <?php
                                if($binisSonuc==$sehirler["sehirIsim"]){echo "selected='selected'" ;} ?>>
                                <?php echo $sehirler["sehirIsim"]; ?>
                            </option>
                            <?php }   ?>

                        </select>
                    </div>
<hr>
<div class="form-group">
                        <select name="sehirler" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)"
                            class="form-control">
                            <option>Şehir Seçiniz</option>
                            <?php 
$varisSonuc=$_GET["varis"];
foreach($db->query("select * from sehirler") as $sehirler){ ?>
                            <option value="index.php?binis=<?php echo $binisSonuc ?>&varis=<?php echo $sehirler['sehirIsim'];?>" <?php
                                if($varisSonuc==$sehirler["sehirIsim"]){echo "selected='selected'" ;} ?>>
                                <?php echo $sehirler["sehirIsim"]; ?>
                            </option>
                            <?php }   ?>

                        </select>
                    </div>
</div>

<?php 
@$binis=$_GET["binis"];
@$varis=$_GET["varis"];

//echo $binis.$varis;
?> 

<hr>
<h1 class="text-center">SEFERLER</h1>

<?php 
if($binis=="" || $varis =="")
foreach($db->query("select * from seferler") as $seferler){ ?>
  <div class="container alert alert-success text-dark text-center mt-4" style="height:120px;">
   <div class="row align-items-center">
      <div class="col-md-1 "><img src="images/otobus.png" style="height:80px" alt=""></div>
      <div class="col-md-3 h4"> <?php echo $seferler["kalkis"]." - ".$seferler["varis"]; ?></div>
      <div class="col-md-3 h5"><?php echo $seferler["tarih"]; ?></div>
      <div class="col-md-2 h5"><?php echo $seferler["fiyat"] ?> ₺</div>
      <div class="col-md-3"> <a href="biletkayit.php?seferid=<?php echo $seferler["seferid"] ?>" class="btn btn-success btn-block">Satın Al</a></div>
      </div>
      </div>
 <hr>
 <?php } ?>




<?php foreach($db->query("select * from seferler where kalkis='$binis' and varis='$varis'") as $seferler2){ ?>
  <div class="container alert alert-success text-dark text-center mt-4" style="height:120px;">
   <div class="row align-items-center">
      <div class="col-md-1 "><img src="images/otobus.png" style="height:80px" alt=""></div>
      <div class="col-md-3 h4"> <?php echo $seferler2["kalkis"]." - ".$seferler2["varis"]; ?></div>
      <div class="col-md-3 h5"><?php echo $seferler2["tarih"]; ?></div>
      <div class="col-md-2 h5"><?php echo $seferler2["fiyat"] ?> ₺</div>
      <div class="col-md-3"> <a href="biletkayit.php?seferid=<?php echo $seferler2["seferid"] ?>" class="btn btn-success btn-block">Satın Al</a></div>
      </div>
      </div>
 <hr>
 <?php } ?>
 

    </div>











    <script type="text/javascript">
    function MM_jumpMenu(targ, selObj, restore) { //v3.0
        eval(targ + ".location='" + selObj.options[selObj.selectedIndex].value + "'");
        if (restore) selObj.selectedIndex = 0;
    }
    </script>
</body>

</html>