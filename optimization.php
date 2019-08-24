<?php

/* Task: From the array of publications, print aggregate numbers of  publications per year, e.g:
2018: 3
2019: 5
...
*/

$publications = [
    ['date'=> '2019-01-20', 'title' => 'Hallo Leute, wie geht es heute?'],
    ['date'=> 'Nov 11, 2019', 'title' => 'Das Chlorophyll im Blatt'],
    ['date'=> '15/318', 'title' => 'Die Sorge der Vielen'],
    ['date'=> '21/4/17', 'title' => 'Am Ende der Fahnenstange'],
    ['date'=> '2017-03-26', 'title' => 'Ohne Zahlen rechnen'],
    ['date'=> '2019-04-18', 'title' => 'Der kleine Papagei'],
    ['date'=> '1.2.2009', 'title' => 'Warum ich?'],
];

// optimized for speed:
$pubByKey=[];
for($i=0;$i<count($publications);++$i) {
    echo $yearAsTimestamp."\n";
    $yearAsTimestamp=strftime("%Y",strtotime($publications[$i]['date']));
    if(!isset($pubByKey[$yearAsTimestamp])) {
        $pubByKey[$yearAsTimestamp] = 0;
    } else {
        $pubByKey[$yearAsTimestamp] += 1;
    }
}

foreach($pubByKey as $k => $v) {
    echo "$k: $v\n";
}