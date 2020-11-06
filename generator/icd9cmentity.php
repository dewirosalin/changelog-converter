<?php
$xml_sub->startElement('column');
$xml_sub->writeAttribute('name', 'top_procedure');
$xml_sub->writeAttribute('valueBoolean', "false");
$xml_sub->endElement(); //end column

$xml_sub->startElement('column');
$xml_sub->writeAttribute('name', 'diagnoses_and_procedures_id');
$xml_sub->writeAttribute('value', $uuid);
$xml_sub->endElement(); //end column