<?php
require __DIR__.'/vendor/autoload.php';
use Ramsey\Uuid\Uuid;

if(isset($_FILES)){
  $results = [];
  $table = $_POST['table'];
  $tmpName = $_FILES['file-0']['tmp_name'];
  $csvAsArray = array_map('str_getcsv', file($tmpName));
  $changelog_name = 'changelogs/'.date('YmdHis').'-'.$_POST['prefix'].'.'.str_replace('_', '.', $table).'.changelog.xml';

  $xml = new XMLWriter();
  $xml->openURI($changelog_name);
  $xml->setIndent(true);
  $xml->startDocument('1.1', 'UTF-8', 'no');

  $xml->startElement('databaseChangeLog');
  $xml->writeAttribute('xmlns', 'http://www.liquibase.org/xml/ns/dbchangelog');
  $xml->writeAttribute('xmlns:ext', 'http://www.liquibase.org/xml/ns/dbchangelog-ext');
  $xml->writeAttribute('xmlns:pro', 'http://www.liquibase.org/xml/ns/pro');
  $xml->writeAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
  $xml->writeAttribute('xsi:schemaLocation', 'http://www.liquibase.org/xml/ns/dbchangelog-ext http://www.liquibase.org/xml/ns/dbchangelog/dbchangelog-ext.xsd http://www.liquibase.org/xml/ns/pro http://www.liquibase.org/xml/ns/pro/liquibase-pro-3.9.xsd http://www.liquibase.org/xml/ns/dbchangelog http://www.liquibase.org/xml/ns/dbchangelog/dbchangelog-3.9.xsd');

  $xml->startElement('changeSet');
  $xml->writeAttribute('author', 'kms');
  $xml->writeAttribute('id', date('Ymdhis').'-01');

  if(isset($_POST['sub_table']) && !empty($_POST['sub_table'])){ //kalo ada table tambahan
    $sub_table = $_POST['sub_table'];
    $sub_prefix = $_POST['sub_prefix'];
    $sub_changelog_name = 'changelogs/'.date('YmdHis').'-'.$sub_prefix.'.'.str_replace('_', '.', $sub_table).'.changelog.xml';

    $xml_sub = new XMLWriter();
    $xml_sub->openURI($sub_changelog_name);
    $xml_sub->setIndent(true);
    $xml_sub->startDocument('1.1', 'UTF-8', 'no');
    $xml_sub->startElement('databaseChangeLog');
    $xml_sub->writeAttribute('xmlns', 'http://www.liquibase.org/xml/ns/dbchangelog');
    $xml_sub->writeAttribute('xmlns:ext', 'http://www.liquibase.org/xml/ns/dbchangelog-ext');
    $xml_sub->writeAttribute('xmlns:pro', 'http://www.liquibase.org/xml/ns/pro');
    $xml_sub->writeAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
    $xml_sub->writeAttribute('xsi:schemaLocation', 'http://www.liquibase.org/xml/ns/dbchangelog-ext http://www.liquibase.org/xml/ns/dbchangelog/dbchangelog-ext.xsd http://www.liquibase.org/xml/ns/pro http://www.liquibase.org/xml/ns/pro/liquibase-pro-3.9.xsd http://www.liquibase.org/xml/ns/dbchangelog http://www.liquibase.org/xml/ns/dbchangelog/dbchangelog-3.9.xsd');

    $xml_sub->startElement('changeSet');
    $xml_sub->writeAttribute('author', 'kms');
    $xml_sub->writeAttribute('id', date('Ymdhis').'-02');
  }

  $type = '';
  foreach($csvAsArray as $row){
    $uuid = Uuid::uuid4();

    $xml->startElement('insert');
    $xml->writeAttribute('tableName', $table);
    $xml->startElement('column');
    $xml->writeAttribute('name', 'id');
    $xml->writeAttribute('value', $uuid);
    $xml->endElement(); //end column
    $xml->startElement('column');
    $xml->writeAttribute('name', 'active');
    $xml->writeAttribute('valueBoolean', 'true');
    $xml->endElement(); //end column
    $xml->startElement('column');
    $xml->writeAttribute('name', 'branch_id');
    $xml->endElement(); //end column
    $xml->startElement('column');
    $xml->writeAttribute('name', 'created');
    $xml->writeAttribute('valueDate', date("Y-m-d\TH:i:s.000000"));
    $xml->endElement(); //end column
    $xml->startElement('column');
    $xml->writeAttribute('name', 'modified');
    $xml->writeAttribute('valueDate', date("Y-m-d\TH:i:s.000000"));
    $xml->endElement(); //end column
    $xml->startElement('column');
    $xml->writeAttribute('name', 'tenant_id');
    $xml->writeAttribute('value', 'd7de5c95-b0b4-4200-8c9e-2834026d9dc0');
    $xml->endElement(); //end column
    include 'generator/'.$table.'.php';
    $xml->endElement(); //end insert

    if(isset($xml_sub)){
      $xml_sub->startElement('insert');
      $xml_sub->writeAttribute('tableName', $sub_table);
      $xml_sub->startElement('column');
      $xml_sub->writeAttribute('name', 'id');
      $xml_sub->writeAttribute('value', Uuid::uuid4());
      $xml_sub->endElement(); //end column
      $xml_sub->startElement('column');
      $xml_sub->writeAttribute('name', 'active');
      $xml_sub->writeAttribute('valueBoolean', 'true');
      $xml_sub->endElement(); //end column
      $xml_sub->startElement('column');
      $xml_sub->writeAttribute('name', 'branch_id');
      $xml_sub->endElement(); //end column
      $xml_sub->startElement('column');
      $xml_sub->writeAttribute('name', 'created');
      $xml_sub->writeAttribute('valueDate', date("Y-m-d\TH:i:s.000000"));
      $xml_sub->endElement(); //end column
      $xml_sub->startElement('column');
      $xml_sub->writeAttribute('name', 'modified');
      $xml_sub->writeAttribute('valueDate', date("Y-m-d\TH:i:s.000000"));
      $xml_sub->endElement(); //end column
      $xml_sub->startElement('column');
      $xml_sub->writeAttribute('name', 'tenant_id');
      $xml_sub->writeAttribute('value', 'd7de5c95-b0b4-4200-8c9e-2834026d9dc0');
      $xml_sub->endElement(); //end column
      include 'generator/'.$sub_table.'.php';
      $xml_sub->endElement(); //end insert
    }
  }

  $xml->endElement(); //end changeSet

  $xml->endElement(); //end databaseChangeLog
  $xml->endDocument();

  $xml->flush();

  array_push($results, $changelog_name);

  if(isset($xml_sub)){
    $xml_sub->endElement(); //end changeSet

    $xml_sub->endElement(); //end databaseChangeLog
    $xml_sub->endDocument();

    $xml_sub->flush();
    array_push($results, $sub_changelog_name);
  }

  echo json_encode($results);
}