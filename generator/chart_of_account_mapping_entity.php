<?php
$desc = '[{"key":"en","value":"'.$row[1].'"},{"key":"id","value":"'.$row[2].'"}]';

$xml->startElement('column');
$xml->writeAttribute('name', 'account_type');
$xml->writeAttribute('value', $row[0]);
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'account_type_description');
$xml->writeAttribute('value', htmlspecialchars_decode(htmlspecialchars($desc)));
$xml->endElement(); //end column