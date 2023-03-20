<html>
<head>
	<title>Project Management</title>
</head>
<body>
	<fieldset>
        <legend><b>Project Management</b></legend>
        
            <h2>Update Project</h2>
            <form method="POST" action="update project.php">
                <label for="project_id">Project ID:</label>
                <input type="text" name="project_id" id="project_id">
                <label for="project_name">New Project Name:</label>
                <input type="text" name="project_name" id="project_name">
                <input type="submit" value="Update">
            </form>

            <h3><a href="logout.php">Logout</a></h3>
    </fieldset>
</body>
</html>
