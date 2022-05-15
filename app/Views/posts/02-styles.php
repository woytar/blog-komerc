<h1><?= esc($title) ?></h1>

<b>Zastosowanie arkusza stylów</b></br>
<i>app\Views\templates\header.php</i></br>
<i>Poniższe odniesienie w header, zawiera link do darmowych arkuszy w3s oraz prywatnego arkusza styles.css, zawartego w katalogu publicznym</i></br>


<textarea name="templateHeader" rows="20" cols="100" style="font-family:'Courier New';font-size:15px;color:blue"

<!DOCTYPE html>
<html lang="pl-PL">
<title>Blog popularno-naukowo-przyrodniczy :: Hiperfizyka</title>
<meta charset="UTF-8">
<meta name="Keywords" content="Corsup, Precorsup, Hiperfizyka, unikatowy sposób myślenia, programowanie przestrzeni, Torus, Vortex, Nikola Tesla">
<meta name="Description" content="Blog popularno-naukowo-przyrodniczy. Kreacja nowego modelu rzeczywistości. Wolność, zdrowie, szczęśliwe życie, hiperfizyka, algorytmy raju.">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--składnia base_url() generuje nazwę domeny, w której działa aplikacjia. np. localhost, corsup.pl itd ... zapis działa dla każdej domeny-->
<link rel = "stylesheet" type = "text/css" href = "<?= base_url(); ?>/css/styles.css">
<style>
</style>
<body>
    <h1><?= esc($title) ?></h1>
	
	
</textarea>
</br>
</br>