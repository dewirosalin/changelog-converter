<?php
$desc = '[{"key":"en","value":"'.$row[3].'"},{"key":"id","value":"'.$row[4].'"}]';

$xml->startElement('column');
$xml->writeAttribute('name', 'description');
$xml->writeAttribute('value', htmlspecialchars_decode(htmlspecialchars($desc)));
$xml->endElement(); //end column
$xml->startElement('column');
$xml->writeAttribute('name', 'type');
$xml->writeAttribute('value', $row[0]);
$xml->endElement(); //end column