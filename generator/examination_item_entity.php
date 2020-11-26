<?php
$xml->startElement('column');
$xml->writeAttribute('name', 'description');
$xml->writeAttribute('value', $row[2]);
$xml->endElement(); //end column
$xml->startElement('column');
$xml->writeAttribute('name', 'examination_level');
$xml->writeAttribute('value', $row[3]);
$xml->endElement(); //end column
$xml->startElement('column');
$xml->writeAttribute('name', 'examination_type');
$xml->writeAttribute('value', $row[4]);
$xml->endElement(); //end column
$xml->startElement('column');
$xml->writeAttribute('name', 'item_code');
$xml->writeAttribute('value', $row[1]);
$xml->endElement(); //end column
$xml->startElement('column');
$xml->writeAttribute('name', 'sample');
$xml->writeAttribute('value', $row[5]);
$xml->endElement(); //end column
$xml->startElement('column');
$xml->writeAttribute('name', 'examination_group_id');
$xml->writeAttribute('value', $row[0]);
$xml->endElement(); //end column