<?php
$xml->startElement('column');
$xml->writeAttribute('name', 'by_pass_doctor_assignment');
$xml->writeAttribute('valueBoolean', $row[4] == "Yes" ? "true" : "false");
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'has_examination_item');
$xml->writeAttribute('valueBoolean', $row[5] == "Yes" ? "true" : "false");
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'section_code');
$xml->writeAttribute('value', $row[3]);
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'service_name');
$xml->writeAttribute('value', $row[1]);
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'service_number');
$xml->writeAttribute('value', $row[0]);
$xml->endElement(); //end column