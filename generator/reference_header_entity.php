<?php
$desc = '[{"key":"en","value":"'.$row[1].'"},{"key":"id","value":"'.$row[2].'"}]';

$xml->startElement('column');
$xml->writeAttribute('name', 'description');
$xml->writeAttribute('value', htmlspecialchars_decode(htmlspecialchars($desc)));
$xml->endElement(); //end column
$xml->startElement('column');
$xml->writeAttribute('name', 'reference_type');
$xml->writeAttribute('value', $row[0]);
$xml->endElement(); //end column