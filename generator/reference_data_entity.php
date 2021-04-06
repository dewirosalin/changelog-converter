<?php
$assoc = '';
if($row[6] != '' && $row[7] != ''){
  $assoc = '[{"key":"'.$row[6].'","value":"'.$row[7].'"}]';
}
$desc = '[{"key":"en","value":"'.$row[3].'"},{"key":"id","value":"'.$row[4].'"}]';
if($type != $row[0]){
  $type = $row[0];
  $sequence = 1;
} else{
  $sequence+=1;
}

$xml->startElement('column');
$xml->writeAttribute('name', 'associated_values');
if($assoc != ''){
  $xml->writeAttribute('value', htmlspecialchars_decode(htmlspecialchars($assoc)));
}
$xml->endElement(); //end column
$xml->startElement('column');
$xml->writeAttribute('name', 'code');
$xml->writeAttribute('value', $row[2]);
$xml->endElement(); //end column
$xml->startElement('column');
$xml->writeAttribute('name', 'description');
$xml->writeAttribute('value', htmlspecialchars_decode(htmlspecialchars($desc)));
$xml->endElement(); //end column
$xml->startElement('column');
$xml->writeAttribute('name', 'sequence');
$xml->writeAttribute('valueNumeric', $sequence);
$xml->endElement(); //end column
$xml->startElement('column');
$xml->writeAttribute('name', 'reference_type');
$xml->writeAttribute('value', $row[0]);
$xml->endElement(); //end column
$xml->startElement('column');
$xml->writeAttribute('name', 'filter');
$xml->writeAttribute('value', $row[5]);
$xml->endElement(); //end column