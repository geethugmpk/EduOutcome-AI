<?php
require __DIR__ . '/config.php';
function e($v){return htmlspecialchars((string)$v,ENT_QUOTES,'UTF-8');}
$error='';
if($_SERVER['REQUEST_METHOD']==='POST'){
 $name=trim($_POST['name']??''); $code=strtoupper(trim($_POST['code']??''));
 if(!$name||!$code){$error='Subject name and course code are required.';}
 else {
  try {
   $stmt=$pdo->prepare("INSERT INTO subjects(name,code,department,semester,outcomes,units,course_calendar,resources,website_overview) VALUES(?,?,?,?,?,?,?,?,?)");
   $stmt->execute([$name,$code,trim($_POST['department']??'General'),trim($_POST['semester']??'Semester 1'),$_POST['outcomes']??'',$_POST['units']??'',$_POST['course_calendar']??'',$_POST['resources']??'',$_POST['website_overview']??'']);
   header('Location: index.php?subject_id='.$pdo->lastInsertId()); exit;
  } catch(PDOException $e){$error='Could not create subject. Check that the course code is unique.';}
 }
}
?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Add subject</title><link rel="stylesheet" href="style.css"></head><body><header><a class="brand" href="index.php">EduOutcome AI <small>PHP + MySQL</small></a></header><main class="standalone"><h1>Add subject</h1><?php if($error): ?><div class="notice"><?=e($error)?></div><?php endif; ?><form method="post" class="card"><div class="fields"><div><label>Subject name *</label><input name="name" required></div><div><label>Course code *</label><input name="code" required></div><div><label>Department</label><input name="department" value="General"></div><div><label>Semester</label><input name="semester" value="Semester 1"></div><div class="full"><label>Course Outcomes</label><textarea name="outcomes"></textarea></div><div class="full"><label>Units</label><textarea name="units"></textarea></div><div class="full"><label>Course calendar</label><textarea name="course_calendar"></textarea></div><div class="full"><label>Resources</label><textarea name="resources"></textarea></div><div class="full"><label>Website overview</label><textarea name="website_overview"></textarea></div></div><button class="primary">Create subject</button></form></main></body></html>
