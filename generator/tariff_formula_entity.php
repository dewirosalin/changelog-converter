<?php
$xml->startElement('column');
$xml->writeAttribute('name', 'classification');
$xml->writeAttribute('value', $row[2]);
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'multiplier');
$xml->writeAttribute('valueNumeric', $row[4]);
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'rounding');
$xml->writeAttribute('valueNumeric', $row[6]);
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'rounding_method');
$xml->writeAttribute('valueNumeric', $row[5]);
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'tariff_type');
$xml->writeAttribute('valueNumeric', $row[1]);
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'base_schema_id');
$xml->writeAttribute('value', $row[3]);
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'tariff_schema_id');
$xml->writeAttribute('value', $row[0]);
$xml->endElement(); //end column