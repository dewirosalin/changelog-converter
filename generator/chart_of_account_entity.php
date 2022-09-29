<?php
$xml->startElement('column');
$xml->writeAttribute('name', 'account_code');
$xml->writeAttribute('value', $row[0]);
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'account_name');
$xml->writeAttribute('value', $row[1]);
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'account_type');
$xml->writeAttribute('value', $row[2]);
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'dashboard');
$xml->writeAttribute('valueBoolean', $row[5] == 'Yes' ? "true" : "false");
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'description');
$xml->writeAttribute('value', $row[4]);
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'enable_payment');
$xml->writeAttribute('valueBoolean', $row[7] == 'Yes' ? "true" : "false");
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'expense_claim');
$xml->writeAttribute('valueBoolean', $row[6] == 'Yes' ? "true" : "false");
$xml->endElement(); //end column

$xml->startElement('column');
$xml->writeAttribute('name', 'tax_code');
$xml->writeAttribute('value', $row[3]);
$xml->endElement(); //end column