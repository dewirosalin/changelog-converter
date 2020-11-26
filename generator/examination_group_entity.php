<?php
$desc = '[{"key":"en","value":"'.$row[1].'"},{"key":"id","value":"'.$row[2].'"}]';

$xml->startElement('column');
$xml->writeAttribute('name', 'description');
$xml->writeAttribute('value', htmlspecialchars_decode(htmlspecialchars($desc)));
$xml->endElement(); //end column
$xml->startElement('column');
$xml->writeAttribute('name', 'diagnostic_group_code');
$xml->writeAttribute('value', $row[0]);
$xml->endElement(); //end column
$xml->startElement('column');
$xml->writeAttribute('name', 'sequence');
$xml->writeAttribute('valueNumeric', $row[4]);
$xml->endElement(); //end column
$xml->startElement('column');
$xml->writeAttribute('name', 'service_id');
$xml->writeAttribute('value', $row[5]);
$xml->endElement(); //end column