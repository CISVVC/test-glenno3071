<?php
$tasklist = fopen("test.csv", "w") or die("Unable to open file!");
$task = "description   completed   date created date completed\n";
fwrite($tasklist, $task);
$task = "feed the dog,     did,     1/11/1111,     1/22/1111\n";
fwrite($tasklist, $task);
$task = "put dog outside,  yup,     2/11/1112,     2/33/1112\n";
fwrite($tasklist, $task);
$task = "dog clean up,     yes,     3/02/2017,     3/22/2107\n";
fwrite($tasklist, $task);
$task = "hug the dog,      yes,     4/20/2017,     4/22/2107\n";
fwrite($tasklist, $task);
fclose($tasklist);

$tasklist = fopen("test.csv", "r") or die("Unable to open file!");
echo fread($tasklist,filesize("test.csv"));
fclose($tasklist);

$row=1;
$header = ["description","completed","date created","date completed"];
// the $header array is how we can identify what the field index is describing
echo "\t";
if (($handle = fopen("test.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $header[$c].": ".$data[$c]."\t";
        }
        echo "\n";
    }
    fclose($handle);
}
?>
