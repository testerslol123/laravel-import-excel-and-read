<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Superchat demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="text-center">
    <div>
      {{-- <a href="/superchat">Ke Input File</a> --}}
    </div>
    <div>
      <a href="/display-data">Ke Tunjukkan Data</a>
    </div>
    <h2>Model</h2>
    <h3>
      Superchat = 3.062 x10<sup>8</sup> + totalview x 5.750 x 10<sup>1</sup> + ccv x 5.246 x 10<sup>5</sup>
    </h3>
    <div>
      <p>Superchat = 3.062 x10<sup>8</sup> + <input type='number' name='totalview' id="totalview" onChange="hitungHasilSuperchat()" /> x 5.750 x 10<sup>1</sup> + <input type='number' name='ccv' id="ccv" onChange="hitungHasilSuperchat()" /> x 5.246 x 10<sup>5</sup></p>
    </div>
    <div>
      <p>Superchat = <input disabled type='number' name="hasil" id="hasilperkalian" /></p>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
      
      function hitungHasilSuperchat() {
        var valueAwal = 306200000;
        var valueTengah = 57.5;
        var valueAkhir = 524600;
        var valueTotalView = document.getElementById('totalview').value;
        var valueCCV = document.getElementById('ccv').value;
        var valueHasil = document.getElementById('hasilperkalian');
        
        var valueAkhir = valueAwal + (valueTotalView * valueTengah) + (valueCCV * valueAkhir)
        valueHasil.value = valueAkhir;
      }
    </script>

  </body>
</html>
