<!DOCTYPE html>
<html lang="en">
<head>
<title>CS 148 Tables</title>
<meta charset="utf-8">
<meta name="author" content="Mitch Brooks"/>
<meta name="description" content="index page for assignment two">


<!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
<![endif]-->
    
</head>


<?php



?>

            <p>q01. <a href="q01.php?z=q01.sql">SQL:</a> SELECT pmkNetId FROM tblTeachers;</p>
            <p>q02. <a href="q01.php?z=q02.sql">SQL:</a> SELECT fldDepartment, fldCourseName  FROM  tblCourses WHERE fldCourseName LIKE "Introduction&#37";</p>
            <p>q03. <a href="q01.php?z=q03.sql">SQL</a> SELECT * FROM tblSections WHERE fldBuilding = "Kalkin" AND fldStart = "13:10:00";</p>
            <p>q04. <a href="q01.php?=q04.sql">SQL</a> SELECT * from tblSections WHERE fldCRN = "91954";</p>
            <p>q05. <a href="q01.php?=q05.sql">SQL</a> SELECT fldFirstName, fldLastName FROM tblTeachers WHERE pmkNetId LIKE "r%" AND pmkNetId LIKE "%o";</p>
            <p>q06. <a href="q01.php?=q06.sql">SQL</a> SELECT fldCourseName, fldDepartment FROM tblCourses WHERE fldCourseName LIKE "%data%" AND fldDepartment <> "CS";</p>
            <p>q07. <a href="q01.php?=q07.sql">SQL</a> SELECT DISTINCT fldDepartment FROM tblCourses;</p>
            <p>q08. <a href="q01.php?=q08.sql">SQL</a> SELECT fldBuilding, fldSection  FROM tblSections GROUP BY fldBuilding;</p>
            <p>q09. <a href="q01.php?=q09.sql">SQL</a> SELECT SUM(fldNumStudents),fldBuilding  FROM tblSections WHERE fldDays LIKE "&#37W&#37" GROUP BY fldBuilding ORDER BY SUM(fldNumStudents) DESC;</p>
            <p>q10. <a href="q01.php?=q10.sql">SQL</a> SELECT SUM(fldNumStudents),fldBuilding  FROM tblSections WHERE fldDays LIKE "&#37F&#37" GROUP BY fldBuilding ORDER BY SUM(fldNumStudents) DESC;</p>
            <p>q11. <a href="q01.php?=q11.sql">SQL</a> SELECT fnkCourseId, COUNT(fldSection) FROM tblSections GROUP BY fnkCourseId HAVING COUNT(fldSection)>=50;</p>
            <p>q12. <a href="q01.php?=q12.sql">SQL</a> SELECT fldNumStudents,fldMaxStudents FROM tblSections WHERE fldNumStudents>fldMaxStudents;</p>

</body>
</html>
