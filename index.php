<?php
// seconda versione con HTML
$dataOra = date("d/m/Y H:i:s");
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<title>Benvenuto</title>
</head>
<body>
<h1>Benvenuto nel nostro sito!</h1>
<p>Oggi è il <strong><?php echo $dataOra; ?></strong>. Siamo felici di
vederti qui.</p>
</body>
</html>
