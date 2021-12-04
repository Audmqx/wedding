<?php

    class Database{

        //variable static pour se connecter à la bdd

        static $hostname = "localhost";
        static $dbname = "qajwnejq_am";
        static $userdb = "qajwnejq_am";
        static $mdpdb = "Pixodeo2021!";
        static $driverdb = "mysql";

        static $conn;

        //function qui se connecte à la bdd

        static function createConnexion(){
            if(empty(self::$conn)){
                self::$conn = new PDO(self::$driverdb.":host=".self::$hostname.";dbname=".self::$dbname, self::$userdb, self::$mdpdb);
            }
        }

		 static function create($data){
		            self::createConnexion();
		            try{
		                $sql = "INSERT INTO `form` ( `name`, `ceremonie_diner`, `brunch`, `ne_viens_pas`, `enfants`, `prenoms`, `age`, `song`, `allergies`) VALUES (:name, :ceremonie, :brunch, :ne_viens_pas, :enfants, :prenoms, :age, :song, :allergies)";
		                $req = self::$conn->prepare($sql);
		                
		                $req->bindValue(":name", $data['nom']);
		                $req->bindValue(":ceremonie", $data['ceremonie et diner']);
		                $req->bindValue(":brunch", $data['brunch']);
		                $req->bindValue(":ne_viens_pas", $data['Ne viens pas']);
		                $req->bindValue(":enfants", $data['enfants']);
		                $req->bindValue(":prenoms", $data['prenoms']);
		                $req->bindValue(":age", $data['ages']);
		                $req->bindValue(":song", $data['song']);
		                $req->bindValue(":allergies", $data['allergies']);

		                $req->execute();
		      
		                return true;
		            } catch(PDOException $e){
		                return $e;
		            }
		    }
	}

if (!empty($_POST) && !empty($_POST['key'] == "xqjfhsdhb")) {


	$nom = "false";
	if (!empty($_POST['name']) && isset($_POST['name']) ) {
	$nom = $_POST['name'];
		}

	$ceremonieDiner = "false";
	if (!empty($_POST['cérémonie+diner']) && isset($_POST['cérémonie+diner']) ) {
	$ceremonieDiner = $_POST['cérémonie+diner'];
		}

	$ne_viens_pas = "false";
	if (!empty($_POST['ne_viens_pas']) && isset($_POST['ne_viens_pas']) ) {
	$ne_viens_pas = $_POST['ne_viens_pas'];
		}

	$brunch = "false";
	if (!empty($_POST['brunch']) && isset($_POST['brunch']) ) {
	$brunch = $_POST['brunch'];
		}

	$enfants = "false";
	if (!empty($_POST['présence_enfant']) && isset($_POST['présence_enfant']) ) {
	$enfants = $_POST['présence_enfant'];
		}

	$prenoms[] = "false";
	$ages[] = "false";
	if ($enfants == "on") {
		for ($i=1; $i < 10; $i++) { 
		// $string = "prenom-".$i;
			if (isset($_POST["prenom-".$i]) && $_POST["prenom-".$i] != "")  {
			$prenoms[] = strval($_POST["prenom-".$i]);		
			$implodePrenom = implode(",", $prenoms);
				}
			if (isset($_POST["age-".$i]) && $_POST["age-".$i] != "" ) {
			$ages[] = strval($_POST["age-".$i]);
			$implodeAge = implode(",", $ages);
				}
		}
	}

	$song = "false";
	if (!empty($_POST['song']) && isset($_POST['song']) ) {
	$song = $_POST['song'];
		}

	$allergies = "false";
	if (!empty($_POST['allergies']) && isset($_POST['allergies']) ) {
	$allergies = $_POST['allergies'];
		}


if (isset($implodePrenom)) {
	$prnm = $implodePrenom;
}else {
	$prnm = "false";
}

if (isset($implodeAge)) {
	$ag = $implodeAge;
}else {
	$ag = "false";
}



$array = [
	"nom" =>$nom, 
	"ceremonie et diner"=>$ceremonieDiner,
	"brunch" => $brunch,
	"Ne viens pas" => $ne_viens_pas,
	"enfants" => $enfants,
	"prenoms" => $prnm,
	"ages" => $ag,
	"song" => $song,
	"allergies" => $allergies
];

$test = Database::create($array);

foreach ($array as $key => $value) {
	if ($value != "false") {
		$yala[] = $key ." : ". $value;
	}
}

 // // ini_set( 'display_errors', 1 );
 // //    error_reporting( E_ALL );
 //    $from = "test@test.fr";
 //    $to = "maxim@pixodeo.com";
 //    $subject = "Formulaire reçu : ".$nom;
 //    $message = "
 //      Nouveau formulaire de la part de ".$nom."
     	
 //     "print_r($yala, true)".
       
	//   ";

 //    // $headers = "De :" . $from;
 //    mail($to,$subject,$message);

   
    $from = "test@hostinger-tutorials.fr";
    $to = "maxim@pixodeo.com, audrey.vergoni@gmail.com";
    $subject = "Formulaire reçu : ".$nom;
     $message = "
      Nouveau formulaire de la part de ".$nom."
     	
    ".print_r($yala, true)."
       
	  ";
    $headers = "De :" . $from;
    mail($to,$subject,$message, $headers);






echo json_encode($yala);
} else {
header('Location: /');
exit;
}

?>     