<?php
function getNameDate($value = false, $type = false) {
    $response = false;
    if ($value) {
        if ($type == 'month') {
            switch ($value) {
                case '01': $response = 'Janeiro'; break;
                case '02': $response = 'Fevereiro'; break;
                case '03': $response = 'Março'; break;
                case '04': $response = 'Abril'; break;
                case '05': $response = 'Maio'; break;
                case '06': $response = 'Junho'; break;
                case '07': $response = 'Julho'; break;
                case '08': $response = 'Agosto'; break;
                case '09': $response = 'Setembro'; break;
                case '10': $response = 'Outubro'; break;
                case '11': $response = 'Novembro'; break;
                case '12': $response = 'Dezembro'; break;
            }
        }
        else if ($type == 'day') {
            switch ($value) {
                case 1: $response = 'Segunda'; break;
                case 2: $response = 'Terça'; break;
                case 3: $response = 'Quarta'; break;
                case 4: $response = 'Quinta'; break;
                case 5: $response = 'Sexta'; break;
                case 6: $response = 'Sábado'; break;
                case 7: $response = 'Domingo'; break;
            }
        }
    }
    return $response;
}
?>