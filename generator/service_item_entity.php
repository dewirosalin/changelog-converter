<?php
$xml->startElement('column');
$xml->writeAttribute('name', 'apply_to');
if($row[3] != 'ALL'){
  $xml->writeAttribute('valueNumeric', $row[3] == "SECTION" ? "0" : "1");
}
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'apply_to_all_service');
$xml->writeAttribute('valueBoolean', $row[3] == "ALL" ? "true" : "false");
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'classification');
$xml->writeAttribute('value', $row[2]);
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'service_item_code');
$xml->writeAttribute('value', $row[0]);
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'service_item_name');
$xml->writeAttribute('value', $row[1]);
$xml->endElement(); //end column