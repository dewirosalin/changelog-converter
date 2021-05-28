<?php
$xml->startElement('column');
$xml->writeAttribute('name', 'allow_create');
$xml->writeAttribute('valueBoolean', $row[2]);
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'allow_delete');
$xml->writeAttribute('valueBoolean', $row[5]);
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'allow_read');
$xml->writeAttribute('valueBoolean', $row[3]);
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'allow_update');
$xml->writeAttribute('valueBoolean', $row[4]);
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'name');
$xml->writeAttribute('value', $row[1]);
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'target_entity');
$xml->writeAttribute('value', $row[0]);
$xml->endElement(); //end column