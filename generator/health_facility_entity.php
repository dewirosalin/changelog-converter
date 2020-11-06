<?php
$xml->startElement('column');
$xml->writeAttribute('name', 'address');
$xml->writeAttribute('value', $row[3]);
$xml->endElement(); //end column
$xml->startElement('column');
$xml->writeAttribute('name', 'health_facility_id');
$xml->writeAttribute('value', $row[0]);
$xml->endElement(); //end column
$xml->startElement('column');
$xml->writeAttribute('name', 'health_facility_name');
$xml->writeAttribute('value', $row[1]);
$xml->endElement(); //end column
$xml->startElement('column');
$xml->writeAttribute('name', 'health_facility_type');
$xml->writeAttribute('value', $row[2]);
$xml->endElement(); //end column
$xml->startElement('column');
$xml->writeAttribute('name', 'phone_number');
$xml->writeAttribute('value', $row[4]);
$xml->endElement(); //end column