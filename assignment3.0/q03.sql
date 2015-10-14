SELECT DISTINCT fldCourseName, fldDays, fldStart, fldStop  
From (tblCourses INNER JOIN  tblSections ON pmkCourseID=fnkCourseId)  INNER JOIN tblTeachers ON fldFirstName like"%Jackie%" 
AND fldLastName = "Horton" AND pmkNetId = fnkTeacherNetId ORDER BY fldStart;