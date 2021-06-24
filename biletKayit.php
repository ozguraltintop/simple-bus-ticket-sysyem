<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bu Bilet</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<script>

function yazdir(){

    alert("Bilet Satın Alınmıştır !");
    var ad=document.getElementById("takipno");
		window.alert("Takip Kodunuz : "+ad.value);

}
</script>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
<a class="navbar-brand"><h2>BU BİLET</h2></a>
    <div class="col-md-2"  style="position:absolute;right:20px;">
    <a href="index.php" class="btn btn-success btn-block">Bilet Bul</a>
    </div>
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
</nav>

<div class="container mt-5">
<br><hr>
<?php include("baglan.php");
$seferid=$_GET["seferid"];
//echo "Sefer İd: ".$seferid;
foreach($db->query("Select * from seferler where seferId='$seferid'")as $sefer){ }
?>

<form action="kaydet.php" method="post">

<div class="card">
    <div class="card-header">   
         <h5 class="card-title text-center"><?php echo $sefer["kalkis"]." - ".$sefer["varis"]; ?> Seferi</h5>
</div>
    <div class="card-body">
 <div class="form-group">
 <input type="text" class="form-control" placeholder="Ad Soyad" name="ad" required>
 </div>   

 <div class="form-group">
 <input type="text" class="form-control" placeholder="Tc Kimlik No" name="tc" required>
 </div> 

 <div class="form-group">
 <input type="text" class="form-control" placeholder="Telefon Numarası" name="tel" required>
 </div> 


 <div class="form-group">
 <input type="text" class="form-control" placeholder="Mail Adresi" name="mail" required>
 </div> 

 <div class="form-group">
<div class="float-left" style="width:600px">
<input type="text" class="form-control" name="kart" placeholder="Kart Numarası : 0000-0000-0000-0000-0000" required>
</div>
<div class="float-left ml-3" style="width:217px">
<input type="text" class="form-control" name="son" placeholder="Son Kullanma Tarihi" required>
</div>
<div class="float-left ml-3"  style="width:217px">
<input type="text" class="form-control"name="cvv" placeholder="CVV Kodu" required>
</div>
<div class="float-left ml-3"  style="width:217px">
<input type="text" name="takipno" id="takipno" value="BB<?php echo substr(md5(rand(0, 1000)), 0, 4); ?>" >
</div>
 </div> 
    </div>
    <div class="card-footer">
    <input class="btn btn-primary btn-block" value="Satın Al" type="submit" name="btn"  onclick="yazdir()"> 
    <input type="hidden" name="seferid" value="<?php echo $seferid ?> ">
    </div>
<br>
<div class="alert alert-primary text-dark" role="alert">
    <?php echo "Tarih: ".$sefer['tarih'].'<hr>'."Ücret: ". $sefer['fiyat']; ?>₺
    
</div>
</form>


</div>
</body>
</html>