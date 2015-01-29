<?php
$file = $_GET["apri"];
$xml=simplexml_load_file($file);
//$xml=simplexml_load_file('LAYOUT.xml');
//echo $xml->CUTFILE,"<br>";
//echo $xml->WIDTH['number'],"<br>";
//echo $xml->JOBS->JOB[1]->JOBNAME,"<br>";
echo '<div id="clickme">';
echo '<table id="hor-minimalist-b">', PHP_EOL;
echo '<caption>',$file,'</caption>';
echo '<thead><tr><th>CUTFILE</th><th>WIDTH</th><th>HEIGHT</th><th>COPIES</th><th>YIELD</th></tr></thead>',PHP_EOL;
//echo '<colgroup>', '<col width="40%"><col width="20%"><col width="20%"><col width="10%"><col width="10%"></colgroup>',PHP_EOL;
echo '<tbody><tr>';
        echo '<td>', $xml->CUTFILE, '</td><td>', $xml->WIDTH['number'], '</td>', PHP_EOL;
        echo '<td>', $xml->HEIGHT['number'], '</td><td>', $xml->COPIES['number'], '</td><td>', $xml->YIELD['number'], '</td>', PHP_EOL;
echo '</tbody></tr>';
echo '</table>', PHP_EOL;
echo '</div>';
//echo '<BR>';
echo '<div id="ciccio">';
echo '<table id="hor-minimalist-b">', PHP_EOL;
//echo '<colgroup>', '<col class="vzebra-odd"><col class="vzebra-even"><col class="vzebra-odd"><col class="vzebra-even"><col class="vzebra-odd"></colgroup>',PHP_EOL;
echo '<thead><tr><th scope="col">Jobname</th><th scope="col">Numberup</th><th scope="col">Remaining</th><th scope="col">VSIZE</th>
<th scope="col">HSIZE</th></tr></thead>',PHP_EOL;
echo '<tbody>';
foreach ($xml->JOBS->JOB as $job) {
		echo '<tr>';
        echo '<td>', $job->JOBNAME, '</td><td>', $job->NUMBERUP, '</td>', PHP_EOL;
        echo '<td>', $job->REMAINING, '</td><td>', $job->VSIZE, '</td><td>', $job->HSIZE, '</td>', PHP_EOL;
        echo '</tr>';
}
echo '</tbody></table>', PHP_EOL;
echo '</div>';

echo <<<END
<script>

$("#clickme").click(function () {
$("#ciccio").toggle();
});
</script>
END;
//$xml = file_get_contents('LAYOUT.xml');

/*
if (phpversion() >= 5) {
        echo '<table>', PHP_EOL;
        foreach (simplexml_load_string($xml) as $key => $value) {
                echo '<tr><td>', $key, '</td><td>', $value, '</td></tr>', PHP_EOL;
        }
        echo '</table>', PHP_EOL;
}
*/
// http://codingthis.com/programming/php/quick-xml-to-html-templating-in-php-using-simplexml/
?>




