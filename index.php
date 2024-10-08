<?php
 include __DIR__ .'/functions/functions.php';





 $messagio = '';
 
 if(isset($_GET["length"]) && !empty($_GET["length"])) {
    $messagio = getRandonString($_GET["length"]);
 }else{
    $messagio = "Non hai messo una lunghezza!";
 }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
      <!-- Bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

      <!-- CSS -->
       <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <main >
        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>
       
        <p><b> <?=$messagio?> </b></p>
          
        <section>
            <form action="index.php" method="get">
            <div class="mb-3 d-flex justify-content-between">
                <label for="length" class="form-label">Lunghezza della password:</label>
                <input type="number" name="length" class="form-control" style="width: 15rem;" id="legth">
            </div>
            <!-- <div >
                <div class="form-label">Consenti ripetizioni di uno o più caratteri:</div>
                <div class="mb-1">
                    <input type="radio" name="yes" id="yes">
                    <label for="yes" class="form-label">Si</label>
                </div>
                <div class="mb-3">
                    <input type="radio" name="yes" id="No">
                    <label for="No" class="form-label">No</label>
                </div>
                <div class="mb-1">
                    <input type="checkbox" name="letter" id="letter">
                    <label for="letter" class="form-label">Lettera</label>
                </div>
                <div class="mb-1">
                    <input type="checkbox" name="number" id="number">
                    <label for="number" class="form-label">Number</label>
                </div>
                <div class="mb-1">
                    <input type="checkbox" name="simbol" id="simbol">
                    <label for="simbol" class="form-label">Simbolo</label>
                </div> -->
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-secondary">Annulla</button>
            </div>

            </form>
        </section>
    </main>
</body>
</html>