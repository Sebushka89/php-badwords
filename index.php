<?php

$p = "Naturalmente il pasticcino (ormai Alice non si stupisce di nulla) la fa crescere, ma in modo esagerato: ora non è più assolutamente possibile passare attraverso la porta e la bevanda per rimpicciolire è finita. Alice piange, piange, finché si forma sul pavimento un laghetto alto 10 centimetri. Nel frattempo il Coniglio Bianco, rientrato nel vestibolo, la vede e spaventato fugge via lasciando cadaere i guanti bianchi e il ventaglio. Alice è frastornata e si domanda chi è e se ha perso la memoria cercando di ricordare tabelline, geografia e filastrocche senza molto successo: teme di essersi trasformata in Mabel, una bimba evidentemente piuttosto ignorante e anche povera.";
$p_length = strlen($p);
$word = $_GET["word"];
$p_censored = str_ireplace($word, '***', $p);
$p_censored_length = strlen($p_censored);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BadWords</title>
</head>
<body>
    
    <h2>Paragrafo</h2>
    <p> <?php echo $p ?> </p>
    <p>Lunghezza paragrafo: <?php echo $p_length ?> </p>

    <h2>Paragrafo cesurato</h2>
    <p> <?php echo $p_censored ?> </p>
    <p>Lunghezza paragrafo: <?php echo $p_censored_length ?> </p>

</body>
</html>

<style>
p{
    font-size: 20px
}
</style>