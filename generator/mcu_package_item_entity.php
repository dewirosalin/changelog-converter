<?php
$xml->startElement('column');
$xml->writeAttribute('name', 'duration');
$xml->writeAttribute('valueNumeric', $row[2]);
$xml->endElement(); //end column
$xml->startElement('column');
$xml->writeAttribute('name', 'item_code');
$xml->writeAttribute('value', $row[1]);
$xml->endElement(); //end column
$xml->startElement('column');
$xml->writeAttribute('name', 'sequence');
$xml->writeAttribute('valueNumeric', $row[3]);
$xml->endElement(); //end column
$xml->startElement('column');
$xml->writeAttribute('name', 'mcu_package_id');
$xml->writeAttribute('value', $row[0]);
$xml->endElement(); //end column
$xml->startElement('column');
$xml->writeAttribute('name', 'service_id');
$xml->writeAttribute('value', $row[4]);
$xml->endElement(); //end column