<?php
require __DIR__ . '/config.php';
$subjects = $pdo->query("SELECT id,name,code,department,semester FROM subjects ORDER BY name")->fetchAll();
$selectedId = filter_input(INPUT_GET, 'subject_id', FILTER_VALIDATE_INT);
if (!$selectedId && $subjects) $selectedId = (int)$subjects[0]['id'];
$stmt = $pdo->prepare("SELECT * FROM subjects WHERE id = ?");
$stmt->execute([$selectedId]);
$subject = $stmt->fetch();
$attendanceCount = 0; $markCount = 0; $average = null;
if ($subject) {
  $stmt = $pdo->prepare("SELECT COUNT(*) FROM attendance WHERE subject_id=?"); $stmt->execute([$selectedId]); $attendanceCount=(int)$stmt->fetchColumn();
  $stmt = $pdo->prepare("SELECT COUNT(*), AVG((obtained/NULLIF(maximum,0))*100) FROM marks WHERE subject_id=?"); $stmt->execute([$selectedId]); [$markCount,$average] = $stmt->fetch(PDO::FETCH_NUM);
}
function e($v) { return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }
$modules = [
 ['Part 1','Course Planning','planning.php'],['Part 2','Course Website','website.php'],['Part 3','Experiential Learning','module.php?part=3'],
 ['Part 4','Interactive Learning','module.php?part=4'],['Part 5','Assessment Design','module.php?part=5'],['Part 6','Attendance & Marks','records.php'],
 ['Part 7','OBE Analysis','module.php?part=7'],['Part 8','AI Course Agent','module.php?part=8'],['Part 9','Research Integration','research.php'],['Part 10','Responsible AI','policy.php']
];
?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>EduOutcome AI · PHP</title><link rel="stylesheet" href="style.css"></head><body>
<header><a href="index.php" class="brand">✦ EduOutcome AI <small>PHP + MySQL edition</small></a><form><label for="subject_id">Active subject</label><select id="subject_id" name="subject_id" onchange="this.form.submit()"><?php foreach($subjects as $sub): ?><option value="<?=e($sub['id'])?>" <?=$selectedId==$sub['id']?'selected':''?>><?=e($sub['name'])?> (<?=e($sub['code'])?>)</option><?php endforeach; ?></select></form></header>
<div class="layout"><nav><?php foreach($modules as $m): ?><a href="<?=e($m[2])?><?=str_contains($m[2],'?')?'&':'?'?>subject_id=<?=e($selectedId)?>"><?=e($m[0])?> · <?=e($m[1])?></a><?php endforeach; ?><a href="subject_new.php">＋ Add subject</a></nav><main>
<?php if($subject): ?><p class="eyebrow">COURSE WORKSPACE</p><h1><?=e($subject['name'])?> <span class="pill"><?=e($subject['code'])?></span></h1><p class="muted"><?=e($subject['department'])?> · <?=e($subject['semester'])?></p>
<div class="stats"><section><span>Subjects</span><strong><?=count($subjects)?></strong></section><section><span>Attendance records</span><strong><?=$attendanceCount?></strong></section><section><span>Marks records</span><strong><?=$markCount?></strong></section><section><span>Average score</span><strong><?=$average===null?'—':number_format((float)$average,1). '%'?></strong></section></div>
<h2>All 10 capstone parts</h2><div class="grid"><?php foreach($modules as $m): ?><a class="card module" href="<?=e($m[2])?><?=str_contains($m[2],'?')?'&':'?'?>subject_id=<?=e($selectedId)?>"><span class="pill"><?=e($m[0])?></span><h3><?=e($m[1])?></h3><p>Open the module to manage this course's data.</p></a><?php endforeach; ?></div>
<div class="notice">PHP version uses MySQL/PDO. Review the setup guide and use environment variables for database credentials.</div><?php else: ?><p>No subjects found. Create one using Add subject.</p><?php endif; ?></main></div></body></html>
