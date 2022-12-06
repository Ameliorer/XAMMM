<?php 

function showTable($table,$isMatrix,$nameDBField) {
    $showTableHTML = "<table class='dataTable'>";
    $showTableHTML .= "<tr id='line1DataTable'>";
    foreach($nameDBField as $field){
        $showTableHTML .= "<td>$field | </td>";
    }
    $showTableHTML .= "</tr>";
    if($isMatrix){
        for($i=0;$i<count($table);$i++){
            $showTableHTML .= "<tr class='lineOfTable'>";
            foreach($table[$i] as $element){
                $showTableHTML .= "<td class='line'>$element</td>";
            }
            $showTableHTML .= "</tr>";
        }

    }
    else{
        foreach($table as $element){
            $showTableHTML .= "<td class='line'>$element</td>";
        }
        $showTableHTML .= "</tr>";
    }

    $showTableHTML .= "</table>";
    echo($showTableHTML);
    
}


?>