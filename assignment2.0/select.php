<?php


include "../assignment1.0/top.php";

$tableName = "";

if (isset($_GET['getRecordsFor'])) {
    $tableName = $_GET['getRecordsFor'];
	
	
print '<h2>Database: ' . DATABASE_NAME . '</h2>';
print "<article>";
}
$query = 'SHOW TABLES';

	print '<p>q01. <a href="q01.sql">SQL:</a> SELECT pmkNetId FROM tblTeachers;</p>';
	print '<p>q02. <a href="q02.sql">SQL:</a> SELECT fldDepartment, fldCourseName  FROM  tblCourses WHERE fldCourseName LIKE "Introduction&#37";</p>';
	print '<p>q03. <a href="q03.sql">SQL</a> SELECT * FROM tblSections WHERE fldBuilding = "Kalkin" AND fldStart = "13:10:00";</p>';
	print '<p>q04. <a href="q04.sql">SQL</a> SELECT * from tblSections WHERE fldCRN = "91954";</p>';
	print '<p>q05. <a href="q05.sql">SQL</a> SELECT fldFirstName, fldLastName FROM tblTeachers WHERE pmkNetId LIKE "r%" AND pmkNetId LIKE "%o";</p>';
	print '<p>q06. <a href="q06.sql">SQL</a> SELECT fldCourseName, fldDepartment FROM tblCourses WHERE fldCourseName LIKE "%data%" AND fldDepartment <> "CS";</p>';
	print '<p>q07. <a href="q07.sql">SQL</a> SELECT DISTINCT fldDepartment FROM tblCourses;</p>';
	print '<p>q08. <a href="q08.sql">SQL</a> SELECT fldBuilding, fldSection  FROM tblSections GROUP BY fldBuilding;';
	print '<p>q09. <a href="q09.sql">SQL</a> SELECT SUM(fldNumStudents),fldBuilding  FROM tblSections WHERE fldDays LIKE "&#37W&#37" GROUP BY fldBuilding ORDER BY SUM(fldNumStudents) DESC;</p>';
	print '<p>q10. <a href="q10.sql">SQL</a> SELECT SUM(fldNumStudents),fldBuilding  FROM tblSections WHERE fldDays LIKE "&#37F&#37" GROUP BY fldBuilding ORDER BY SUM(fldNumStudents) DESC;</p>';
	print '<p>q11. <a href="q11.sql">SQL</a> SELECT fnkCourseId, COUNT(fldSection) FROM tblSections GROUP BY fnkCourseId HAVING COUNT(fldSection)>=50;</p>';
	print '<p>q12. <a href="q12.sql">SQL</a> SELECT fldNumStudents,fldMaxStudents FROM tblSections WHERE fldNumStudents>fldMaxStudents;</p>';



	$columns = 1;
 //now print out each record
    $query = 'SELECT pmkNetId FROM tblTeachers';
    $info2 = $thisDatabaseAdmin->select($query, "", 0, 0, 0, 0, false, false);
  
    
  print "<table>"; 

   
    foreach ($info2 as $rec) {
        if ($tableName != "") {
    		print '$tableName';}
        print '<tr>';
        for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }


	
print "</table>";
print "</article>";
include "../assignment1.0/footer.php";
?>