<?= 

if(empty($_POST)== false){

	$search = $_POST['ser'];

	$orderNumber = $_GET['orderNumber'];
var_dump($orderNumber);


$pdo = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', 'troiswa'); //permet de se connecter a la base de donné


$pdo->exec('SET NAMES UTF8');



$query = $pdo->prepare     // requetes sql
(
	'SELECT productName FROM products  WHERE product LIKE=%?%'
); 	


$query->execute( [ $_POST['ser'] ] );  // execute la requete


$info_search = $query->fetch(PDO::FETCH_ASSOC); // on affecte la requete a une variable;  fetchAll permet de ranger les données dans un tableau , fetch permet de stocker une valeur,


}

include 'search.phtml';












?>