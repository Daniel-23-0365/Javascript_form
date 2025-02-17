<html>
	<head>
		<title>Javascript Form</title>
	</head>
	
	<body style="background-color: black; color:#FFF;">
		<h1> Student Record</h1>
		<table id="student_table" border="1"></table>
		<script> 
			const studentTable = document.getElementById("student_table");
		
		
			const row1 = studentTable.insertRow();
		
			const row1co11 = row1.insertCell();
			const row1co12 = row1.insertCell();
			
			row1co11.innerHTML = "LAST NAME";
			row1co12.innerHTML = "FIRST NAME";
			
			const row2 = studentTable.insertRow();
			const row2co11 = row2.insertCell();
			const row2co12 = row2.insertCell();
			
			const inputLastName = document.createElement("input");
			inputLastName.type="text";
			inputLastName.placeholder="Insert Last Name";
			inputLastName.name="last_name";
			
			row2co11.append(inputLastName);
			
			const inputFirstName = document.createElement("input");
			inputFirstName.type="text";
			inputFirstName.placeholder="Insert First Name";
			inputFirstName.name="first_name";
			
			row2co12.append(inputFirstName);
			
			const row3 = studentTable.insertRow();
			const row3co11 = row3.insertCell();
			row3co11.colSpan="2";
			
			const inputSubmit = document.createElement("input");
			inputSubmit.type="submit";
			inputSubmit.value="Create Record";
			
			row3co11.append(inputSubmit);	

			const studentForm = document.createElement("form");
			studentForm.append(studentTable);
			studentForm.action="create.php";
			studentForm.method="POST";
			
			body = document.getElementsByTagName("body") [0];
			body.append(studentForm);	
		</script>
	</body>
</html>