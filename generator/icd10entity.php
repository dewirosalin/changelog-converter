<?php
$xml_sub->startElement('column');
$xml_sub->writeAttribute('name', 'classification_acute');
$xml_sub->writeAttribute('valueBoolean', "false");
$xml_sub->endElement(); //end column

$xml_sub->startElement('column');
$xml_sub->writeAttribute('name', 'classification_chronic');
$xml_sub->writeAttribute('valueBoolean', "false");
$xml_sub->endElement(); //end column

$xml_sub->startElement('column');
$xml_sub->writeAttribute('name', 'classification_disease');
$xml_sub->writeAttribute('valueBoolean', "false");
$xml_sub->endElement(); //end column

$xml_sub->startElement('column');
$xml_sub->writeAttribute('name', 'classification_infectious');
$xml_sub->writeAttribute('valueBoolean', "false");
$xml_sub->endElement(); //end column

$xml_sub->startElement('column');
$xml_sub->writeAttribute('name', 'classification_reportable_case');
$xml_sub->writeAttribute('valueBoolean', "false");
$xml_sub->endElement(); //end column

$xml_sub->startElement('column');
$xml_sub->writeAttribute('name', 'classification_restricted_case');
$xml_sub->writeAttribute('valueBoolean', "false");
$xml_sub->endElement(); //end column

$xml_sub->startElement('column');
$xml_sub->writeAttribute('name', 'classification_top_disease');
$xml_sub->writeAttribute('valueBoolean', "false");
$xml_sub->endElement(); //end column

$xml_sub->startElement('column');
$xml_sub->writeAttribute('name', 'diagnoses_and_procedures_id');
$xml_sub->writeAttribute('value', $uuid);
$xml_sub->endElement(); //end column