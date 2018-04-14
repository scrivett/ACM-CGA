<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="functions.js"></script>
<head>
	<title> Course List Pg 2 </title>
</head>

<body>
	<center>
	<div id="test1">
	</div>
	<script>
	var url = $(location).attr('href');
	var p = new URL(url);
	n = 1;
	
    while((courseName = p.searchParams.get('course' + n)) != null){
        listCourses.push(courseName);
		<?php
		$con = mysqli_connect("127.0.0.1","root","password","acm");
		$insertCourses = "INSERT INTO Course_Curriculum (Name)" + 
		 "VALUES (" + courseName + ")";
		mysqli_query($con, $insertCourses); 
		?>
        n++;
	}
    
	console.log(listCourses);
	start = 0;
	while(start < n - 1 ){
	$('#test1').append("<p><a href='KnowledgeAreaPage.html?knowledge="+ listCourses[start]  +"'>" + listCourses[start] + "</a></p>");
	start++;
	}
	</script>
	<input type="submit" name="Submit" value="Generate Report" onClick="location.href='Report.php'";>
	</center>
</body>
