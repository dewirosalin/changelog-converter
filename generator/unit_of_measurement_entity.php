<?php
$xml->startElement('column');
$xml->writeAttribute('name', 'consumption_unit');
$xml->writeAttribute('valueBoolean', $row[4] == "Yes" ? "true" : "false");
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'description');
$xml->writeAttribute('value', $row[2]);
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'symbol');
$xml->writeAttribute('value', $row[1]);
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'unit_category');
$xml->writeAttribute('value', $row[3]);
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'unit_name');
$xml->writeAttribute('value', $row[0]);
$xml->endElement(); //end column