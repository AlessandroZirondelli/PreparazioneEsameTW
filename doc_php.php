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


    /*  Operazioni con stringhe */
    $data;//stringa contentente valori numerici in questa forma 23-10-45
    $numeri = explode("-",$data);// restituisce un array (salvato in $numeri) . ogni valore in ogni cella dell'arrray, indicando il separatore

    
    $stringa = implode("-",$numeriElaborati); // crea una stringa conteneti i valori delle celle dell'array separato dal separatore indicato

    strlen($stringa); // lunghezza stringa









?>