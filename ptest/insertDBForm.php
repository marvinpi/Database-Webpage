<html>
<head>

<script type="text/javascript">

function displayRecord() {

 var sid = document.dataentryform.studentid.value;
 var c1 =  document.dataentryform.course1.value;
 var c2 =  document.dataentryform.course2.value;
 var c3 =  document.dataentryform.course3.value;
 var c4 =  document.dataentryform.course4.value;
 var c5 =  document.dataentryform.course5.value;
 
 var msg;

 msg = "Student ID: " + sid + "\n";
 msg = msg + "Course1: "  + c1;
 msg = msg + "\n";

 msg = msg + "Course2: " + c2;
 msg = msg + "\n";
 
 msg = msg + "Course3: " + c3;
 msg = msg + "\n";

 msg = msg + "Course4: " + c4;
 msg = msg + "\n";

 msg = msg + "Course5: " + c5;
 msg = msg + "\n";

 alert(msg);
}

</script>

</head>

<body>
<form name="dataentryform" action="insert.php" method="post">
Studentid: <input type="text" name="studentid" size="10" /> <br> <br>
Course1: <input type="text" name="course1" size="7" /> <br> <br>
Course2: <input type="text" name="course2"  size="7" /> <br> <br>
Course3: <input type="text" name="course3" size="7" /> <br> <br>
Course4: <input type="text" name="course4" size="7" /> <br> <br>
Course5: <input type="text" name="course5" size="7"  /> <br> <br>
<input type="reset" onclick="return confirm('Do you realy want to reset')" /> 
<input type="submit" onclick="displayRecord()" />
</form>

</body>
</html>