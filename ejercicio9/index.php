<?php
/*
- Escribir una página en PHP que presente un calendario del mes actual.
- Utlizar HTML y CSS para darle color y estilo al calendario. El día actual debe ser resaltado en negrita y con la celda de diferente color.
- Pista: utilizar la función date(). Entre otros parámetros la función date puede recibir: ‘Y’, ‘m’, ‘d’, ‘N’. Investigar sobre la función date si es necesario utilizar otros parámetros (http://php.net/manual/es/function.date.php).
- Pista: Utilizar tablas HTML para presentar el calendario.
*/

function generar_calendario($month,$year,$day){
 
    $calendar = '<table cellpadding="2" cellspacing="2" class="calendar">';
 
    
    $dias = array('L','M','M','J','V','S','D');
    
   
    $calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'
    .implode
    ('</td><td class="calendar-day-head">',$dias);
 
    $running_day = date('w');
    $days_in_month = date('t',mktime(0,0,0,$month,1,$year));
    $days_in_this_week = 1;
    $day_counter = 0;
 
    $calendar.= '<tr class="calendar-row">';
    $class="day-number ";
    for($a = 0; $a < $running_day; $a++):
        $calendar.= '<td class="calendar-day-np"> </td>';
        $days_in_this_week++;
    endfor;
 
    for($list_day = 1; $list_day <= $days_in_month; $list_day++):
        $calendar.= '<td class="calendar-day">';
            $calendar.= "<div class='{$class}'>".$list_day."</div>";
     
        if($running_day == 6):
            $calendar.= '</tr>';
            if(($day_counter+1) != $days_in_month):
                $calendar.= '<tr class="calendar-row">';
            endif;
            $running_day = -1;
            $days_in_this_week = 0;
        endif;
        $days_in_this_week++; $running_day++; $day_counter+;
    endfor;
    $calendar.= '</tr>';
    $calendar.= '</table>';
     
    return $calendar;
}
 date("j");
echo generar_calendario(date("m"),date("Y"),date("j") );
 
?>

<style>
.calendar-day, .calendar-day-head{
    border: 2px solid #eee;
    padding: 3px;
}
.calendar-day-head{
    background: #aaa;
}
</style>
