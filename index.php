
<?php
    $file = fopen("log.csv", "r");

    if(!$file){
        die("Errore nell'apertura del file");
    }

    echo "<table border='1'>";

    // Leggo il file riga per riga
    while(!feof($file)){
        $row = fgets($file);

        if($row !== false){
            // Separo i dati utilizzando la virgola
            $dati = explode(",", $row);

            echo "<tr>";

            // Visualizzo ogni elemento in una cella
            foreach($dati as $elemento){
                echo "<td>" . htmlspecialchars(trim($elemento)) . "</td>";
            }

            echo "</tr>";
        }
    }

    echo "</table>";

    fclose($file);
?>
