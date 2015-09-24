SELECT SUM(fldNumStudents),fldBuilding  FROM tblSections WHERE fldDays LIKE "%F%" GROUP BY fldBuilding ORDER BY SUM(fldNumStudents) DESC;
