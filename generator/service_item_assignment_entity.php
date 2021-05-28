<?php
$xml_sub->startElement('column');
$xml_sub->writeAttribute('name', 'assign_code');
$xml_sub->writeAttribute('value', $row[4]);
$xml_sub->endElement(); //end column

$xml_sub->startElement('column');
$xml_sub->writeAttribute('name', 'service_item_id');
$xml_sub->writeAttribute('value', $uuid);
$xml_sub->endElement(); //end column