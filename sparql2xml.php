<?php
/*Script permettant de traiter directement en XSL des résultats XML de Sparql Endpoint, en modifiant l'en-tête (type MIME)
En entrée, il faut fournir l'URL (variable $url) de la requête.
Attention aux caractères présents dans la requête (après &query=) :
espaces  +
?        %3F
:        %3A
/        %2F
"        %22
(        %28
)        %29
<        %3C
>        %3E

Exemple : 
$url = "http://fr.dbpedia.org/sparql?default-graph-uri=&query=select+distinct+*+where+{%3FPerson+%3Chttp%3A%2F%2Fdbpedia.org%2Fontology%2FbirthDate%3E+%3FdateDeNaissance.+%0D%0A++%3FPerson+a+%3Chttp%3A%2F%2Fdbpedia.org%2Fontology%2FArtist%3E.+%0D%0A++FILTER+regex%28%3FdateDeNaissance%2C+%22^1947%22%29+}&format=text%2Fxml&timeout=0&debug=on";
*/
	
$type = "xml";
$url = $_GET["url"];
$content = file_get_contents($url);
header('Content-Type: text/xml');
print $content;
?>
