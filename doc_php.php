<?php

    /*Connessione database */
    $servername = "localhost";
    $username = "root";
    $password = "";
    $port="3306";
    $dbname="set";

    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    //Query insert
    $query = "INSERT INTO dati (valore,chiave) VALUES (?,?)";
        if($stmt=$this->conn->prepare($query)){
            $stmt->bind_param('ss',$value,$key);
            $stmt->execute();
    }

    // Query select
    $query = "SELECT * FROM setDB ";
    if($stmt = $conn->prepare($query)){
        //$stmt->bind_param('s',$userId);
        $stmt->execute();
        $result = $stmt->get_result();
        $res = $result->fetch_all(MYSQLI_ASSOC);
    }else{
        echo "Errore";
        return ;
    }

    //Query update
    $query = "UPDATE dati SET valore=? WHERE chiave=?";
    if($stmt = $this->conn->prepare($query)){
        $stmt->bind_param('ss',$value,$key);
        $stmt->execute();
    }else{
         echo "Errore aggiornamento";
         return false ;
    }

    //Query select max
  
        $query = "SELECT MAX(id) AS maxid FROM insiemi";
        if($stmt = $this-> conn->prepare($query)){
            echo "entrato";
            $stmt->execute();
            $result = $stmt->get_result();
            $res = $result->fetch_all(MYSQLI_ASSOC);
            return $res[0]["maxid"];
        }else{
            echo "Errore";
            return false;
        } 
    


    /*  Operazioni con stringhe */
    $data;//stringa contentente valori numerici in questa forma 23-10-45
    $numeri = explode("-",$data);// restituisce un array (salvato in $numeri) . ogni valore in ogni cella dell'arrray, indicando il separatore

    
    $stringa = implode("-",$numeriElaborati); // crea una stringa conteneti i valori delle celle dell'array separato dal separatore indicato

    strlen($stringa); // lunghezza stringa

    //Array
    $intersection = array_intersect($vectSetA,$vectSetB); //intersezione dei due array

    
    //Cookie
    setcookie("pair",serialize($pair),time() + (86400 * 30)); //nome cookie, stringa con cui si serializza l'oggetto, scadenza cookie di 1 mese
    $pair = unserialize($_COOKIE["pair"]);// leggo i dati dal cookie



    
?>