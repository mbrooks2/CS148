SELECT SUM(fldNumStudents),fldBuilding  FROM tblSections WHERE fldDays LIKE "%W%" GROUP BY fldBuilding ORDER BY SUM(fldNumStudents) DESC;