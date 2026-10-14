<?php
$part=filter_input(INPUT_GET,'part',FILTER_VALIDATE_INT)?:3;
$titles=[3=>'Part 3 · Experiential Learning',4=>'Part 4 · Interactive Learning',5=>'Part 5 · Assessment Design',7=>'Part 7 · OBE Analysis',8=>'Part 8 · AI Course Agent'];
$body=[
3=>'Use the Flask version for the editable case-study and sample quiz database workflow. This PHP starter page documents the matching module.',
4=>'Build a subject-specific reflective activity. Include clear instructions, a student response area, and a reflection checklist.',
5=>'The Flask version includes an assessment question editor and basic question count. Extend this PHP page with assessment and question tables for full CRUD.',
7=>'The Flask version calculates a simple marks average and stores an improvement plan. Official CO attainment needs institution-approved formulas and CO mapping.',
8=>'The Flask version includes a rule-based assistant using the selected course profile. A live AI model requires a secured server-side API integration.'
];
function e($v){return htmlspecialchars((string)$v,ENT_QUOTES,'UTF-8');}
?><!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title><?=e($titles[$part]??'Course module')?></title><link rel="stylesheet" href="style.css"></head><body><header><a class="brand" href="index.php">EduOutcome AI <small>PHP + MySQL</small></a></header><main class="standalone"><h1><?=e($titles[$part]??'Course module')?></h1><section class="card"><p><?=e($body[$part]??'See README for the full module implementation path.')?></p><a class="button primary" href="../flask_app/">Open the Flask implementation instructions</a><a class="button" href="index.php">Dashboard</a></section><div class="notice">This PHP page is a module placeholder, not a fully implemented workflow. The Flask application is the primary ten-part implementation in this package.</div></main></body></html>
