<?php
  date_default_timezone_set("Asia/Bangkok");
?

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style css new1.css" 

    <title>.</title>
  </head>
  <body> 


    <div class="jumbotron jumbotron-fluid bg-success text-white">
    <div class="container text-center">
      
      <div class="container-content">
          <img src="logokemenagputih.png" style="width:125px" imges-center class="img-content"/>
     </div> 


    <h1 class="display-4"> Kementerian Agama Kabupaten Dharmasraya </h1>

    <marquee bgcolor='#CCCC00' scrolldelay='160' style='font-family:arial narrow ; font-size:20px; color:#001a70;'> Jl. Lintas Sumatera No.Km. 4, Sungai Kambut, Kec. Pulau Punjung, Kabupaten Dharmasraya, Sumatera Barat 27573 </marquee>
    <marquee direction='right' font-size: 30px >----------Selamat Datang----------</marquee>

    <p class="lead">
    <h2> indeks kepuasan masyarakat <br> terhadap pelayanan kantor </h2>
  </p>
</div>
</div> 

<style type="text/css"> 
  .box { padding: 30px 40px
  border-radius: 5px} 
  .box { width: 50px height: 50px}
</style>  

<?php
  //panggil koneksi database
  include "koneksi.php";
  

 //tampilkan data dari tabel ikm
 $tampil =mysqli_query($koneksi, "SELECT" from ikm);
 $data= mysqli_fetch_array($tampil);
?>


<!--NAVIGATION BAR-->

     
<!--Awal Container-->
<div class="c">
  <div class="alert alert-warning" role="alert">
  Perhatian! untuk memberikan penilaian/poling/suara silakan klik icon/emoji
  </div> 

  <!--NAVIGATION BAR-->

<il>
  <div class="container-navbar">
  <div class="row">
      <div class="col-md-4">
       <div class="bg-success box text-white"> 
        <div class="row">
         <div class="col-md-6">
            <h5>MEMUASKAN</h5>
            <h2>[ <?=$data['memuaskan']?>]</h2>
            <h5>suara</h5>
          </div>
          <div class="col-md-6">
            <a href="simpan.php?ket=puas" title="jika anda merasa puasa dengan pelayanan kami, klik icon ini">
            <div class="container-content">
            <img src="images puas.jpg" style="width:125px" imges-center class="img-content"/>
              </a>
           </div> 
            </a>
          </div>
        </div>
      </div>  
    </div>
  
   

<div class="col-md-4">
       <div class="bg-primary box text-white"> 
        <div class="row">
         <div class="col-md-6">
            <h5>CUKUP</h5>
            <h2>[ <?=$data['cukup']?>]</h2>
            <h5>suara</h5>
          </div>
          <div class="col-md-6">
            <a href="simpan.php?ket=cukup" title="jika anda merasa cukup dengan pelayanan kami, klik icon ini">
            <div class="container-content">
                <img src="images cukup.jpg" style="width:78px" imges-center class="img-content"/>
              </a>
           </div> 
            </a>
          </div>
        </div>
      </div>  
    </div>
  

 
<div class="col-md-4">
       <div class="bg-warning box text-white"> 
        <div class="row">
         <div class="col-md-6">
            <h5>KURANG PUAS</h5>
            <h2>[ <?=$data['kurang']?>]</h2>
            <h5>suara</h5>
          </div>
          <div class="col-md-6">
            <a href="simpan.php?ket=kurang puas" title="jika anda merasa kurang puas dengan pelayanan kami, klik icon ini">
            <div class="container-content">
                <img src="images kurang puas.jpg" style="width:95px" imges-center class="img-content"/>
              </a>
           </div> 
            </a>
          </div>
        </div>
      </div>  
    </div>
  

   

  


  </div>


</div>
 <!--NAVIGATION BAR SELESAI--> 
    

</div>
 <!--Akhir Container-->  
 <footer class="bg-info text-center text-white mt-3 bt-2 pb-2"> 
  create by Kantor

  



  </body>
</html>