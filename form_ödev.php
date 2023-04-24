<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
     
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <style>
  .submit-button {
      background-color: #6610f2;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .input-frame{
      background-color: #ffc107;
      color: white;
      border: border -5px;
      border-color:#6610f2;
      border-radius: 4px;
      border-width:10px;
    }
    .label-frame{
      font-size:25px;
      color: black;
    }
    h2{
      padding: 12px 20px;
    }
 </style>
  </head>
  <body>
    <h2>3 ile Bölünebilme</h2>
    <form action="" method="post">
    <label class="label-frame" label for="number_input"><h2>Sayı Değeri:</h2></label>
    <input class="input-frame " input type="number" name=number_input >
    <button class="submit-button" type="Submit"> Gönder </button>
    </form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php
if(isset($_POST['number_input'])){
  $number=$_POST['number_input'];
  if(!empty($number)){
    if($number % 3 == 0) {
      echo $number . " sayısı 3 ile tam bölünür.";
    }else{
      echo $number . " sayısı 3 ile tam bölünmez. Bu sayının 3 ile bölümünden kalan " .$number % 3 . "'dir.";
      $firstMultipleOfThree = ceil($number / 3) * 3;
      echo " Bölünebilen ilk değer: " . $firstMultipleOfThree;
    }
  }else{
    echo "Değer boş olamaz!";
  }
}


?>