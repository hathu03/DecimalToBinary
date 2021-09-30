<?php
include_once 'LinkedList.php';
include_once 'Patient.php';
$List = new LinkedList();
$Patient = new Patient('Tom', 1);
$List->addPatient($Patient);
$Patient = new Patient('Ha beo xinh dep', 2);
$List->addPatient($Patient);
$Patient = new Patient('Ha Thu xinh dep', 3);
$List->addPatient($Patient);

echo $List->dequeue();
