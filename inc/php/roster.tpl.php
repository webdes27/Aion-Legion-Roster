<?php echo '<?xml version="1.0" encoding="utf-8"?>' . PHP_EOL; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title><?php echo $legionname; ?> Legion Roster</title>
<link rel="stylesheet" type="text/css" href="inc/css/style.css" />
<script type="text/javascript" src="inc/js/sorttable.js"></script>

</head>

<body>

<?php

// Generate Pagination pages from the members
$memberPages = $pagination->generate($members, $charnum);
$gradePages = $pagination->generate($grade, $charnum);
$levelPages = $pagination->generate($level, $charnum);
$classPages = $pagination->generate($class, $charnum);

if ($display !== "all")
{
echo "<div class='left' style='text-align=left;'><span class='header'>Classes: </span><br/><span class='subheader'>Scout Classes</span><br/> $assassins Assassins <br/> $rangers Rangers <br/> <span class='subheader'>Priest Classes</span><br/> $chanters Chanters <br/> $clerics Clerics <br/> <span class='subheader'>Warrior Classes</span><br/> $gladiators Gladiators <br/> $templars Templars <br/> <span class='subheader'>Mage Classes</span><br/> $sorcerers Sorcerers <br/> $spiritmasters Spiritmasters</div>";
echo "<div class='right' style='text-align=right;'><span class='header'>Grades: </span><br/> $brigadegeneral Brigade General <br/> $centurions Centurions <br/> $legionaries Legionaries <br/>";
echo "<span class='header'>Levels: </span><br/>";
foreach ($levels as $levelskey => $levelsvalue) {
echo "Level $levelskey: $levelsvalue<br/>";
}
echo "</div>";
echo "<div class='center' style='text-align:center;'><span class='header'>Legion: </span>$legionname<br/> <span class='header'>Created: </span>$legioncreated<br/> <span class='header'>Members: </span>$legionmember</div>";

echo "<table class='sortable'>";
echo "<thead>";
echo "<tr>";
echo "<td class='centeralign'>";
echo "<b>Legion Members</b>";
echo "</td>";
echo "<td class='centeralign'>";
echo "<b>Grade</b>";
echo "</td>";
echo "<td class='centeralign'>";
echo "<b>Level</b>";
echo "</td>";
echo "<td class='centeralign'>";
echo "<b>Class</b>";
echo "</td>";
echo "</tr>";
echo "</thead>";

echo "<tbody>";
echo "<tr>";


for ( $i = 0; $i < count($memberPages); $i++)
{
echo $memberPages[$i];
echo $gradePages[$i];
echo $levelPages[$i];
echo $classPages[$i];
echo "</tr>";
}

echo "</tbody>";
echo "</table>";

echo "<div align='center'>";
echo $pagination->links();
echo "<br/>";
echo "<a href='?display=all'>All</a>";
echo "<br/>";
include('inc/php/timer-footer.tpl.php');
echo "</div>";
}

if ($display == "all")
{
echo "<div class='left' style='text-align=left;'><span class='header'>Classes: </span><br/><span class='subheader'>Scout Classes</span><br/> $assassins Assassins <br/> $rangers Rangers <br/> <span class='subheader'>Priest Classes</span><br/> $chanters Chanters <br/> $clerics Clerics <br/> <span class='subheader'>Warrior Classes</span><br/> $gladiators Gladiators <br/> $templars Templars <br/> <span class='subheader'>Mage Classes</span><br/> $sorcerers Sorcerers <br/> $spiritmasters Spiritmasters</div>";
echo "<div class='right' style='text-align=right;'><span class='header'>Grades: </span><br/> $brigadegeneral Brigade General <br/> $centurions Centurions <br/> $legionaries Legionaries <br/>";
echo "<span class='header'>Levels: </span><br/>";
foreach ($levels as $levelskey => $levelsvalue) {
echo "Level $levelskey: $levelsvalue<br/>";
}
echo "</div>";
echo "<div class='center' style=' text-align:center;'><span class='header'>Legion: </span>$legionname <br/> <span class='header'>Created: </span>$legioncreated <br/> <span class='header'>Members: </span>$legionmember</div>";

echo "<table class='sortable'>";
echo "<thead>";
echo "<tr>";
echo "<td class='centeralign'>";
echo "<b>Legion Members</b>";
echo "</td>";
echo "<td class='centeralign'>";
echo "<b>Grade</b>";
echo "</td>";
echo "<td class='centeralign'>";
echo "<b>Level</b>";
echo "</td>";
echo "<td class='centeralign'>";
echo "<b>Class</b>";
echo "</td>";
echo "</tr>";
echo "</thead>";

echo "<tbody>";
echo "<tr>";
for ( $i = 0; $i < count($members); $i++)
{
echo $members[$i];
echo $grade[$i];
echo $level[$i];
echo $class[$i];
echo "</td>";

echo "</tr>";
}
echo "</table>";

echo "<div align='center'>";
include('inc/php/timer-footer.tpl.php');
echo "</div>";
}

?>
</body>
</html>