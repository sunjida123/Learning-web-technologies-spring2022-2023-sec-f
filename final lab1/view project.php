<html>
<head>
	<title>View Project</title>
</head>
    <body>
	<fieldset>
        <legend><h1>View Project</h1></legend>
        <form action="view project.php" method="post">
		<label for="project_id">Projhtect ID:</label>
		<input type="text" id="project_id" name="project_id"><br><br>
		<input type="submit" name="submit" value="View">
	</form>
	<?php
	if (isset($_POST['submit'])) {
		$feature_id = $_POST['project_id'];
        $features = file('project.txt');
	
        foreach ($projects as $project) {
            $project_parts = explode('|', $project);
            if ($project_parts[1] == $project_id) {
                echo "<h2>" . $project_parts[0] . "</h2>";
                echo "<p>" . $project_parts[2] . "</p>";
            }
        }
    }
    ?>
    <a href="projectmanagement.php">project Management</a>
    </fieldset>
    </body>
</html>    