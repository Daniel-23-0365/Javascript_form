<html>
	<head>
		<title>Javascript Form</title>
	</head>
	
	<body style="background-color: black; color:#FFF;">
		<h1> Student Record</h1>
		<table id="student_table"></table>
		<script> 
			const studentTable = document.getElementById("student_table");
		
		
			const row1 = studentTable.insertRow();
		
			const row1co11 = row1.insertCell();
			const row1co12 = row1.insertCell();
			
			row1co11.innerHTML = "LAST NAME";
			row1co12.innerHTML = "FIRST NAME";
		</script>
	</body>
</html>