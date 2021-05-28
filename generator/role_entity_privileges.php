<?php
$xml_sub->startElement('column');
$xml_sub->writeAttribute('name', 'roles_id');
$xml_sub->writeAttribute('value', $row[6]);
$xml_sub->endElement(); //end column

$xml_sub->startElement('column');
$xml_sub->writeAttribute('name', 'privileges_id');
$xml_sub->writeAttribute('value', $uuid);
$xml_sub->endElement(); //end column