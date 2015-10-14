SELECT fldCRN, fldFirstName, fldLastName FROM tblSections, tblStudents, tblEnrolls, tblCourses WHERE fldCourseNumber ="148" AND fldDepartment = "CS" AND pmkCourseId = tblSections.fnkCourseId AND fnkSectionId=fldCRN AND fnkStudentId=pmkStudentId;

