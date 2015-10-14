SELECT DISTINCT fldDays, fldStart, fldStop 
From tblSections  INNER JOIN tblTeachers  
ON fldFirstName like"%Robert%" AND fldLastName = "Snapp"  
AND pmkNetId = fnkTeacherNetId ORDER BY fldStart ;