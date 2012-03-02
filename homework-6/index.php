<?php

require_once 'includes/filter-wrapper.php';
require_once 'includes/db.php';

// `->exec()` allows us to perform SQL and NOT expect results
// `->query()` allows us to perform SQL and expect results
$results = $db->query('
	SELECT id, movie_title, release_date, director
	FROM movies
	ORDER BY movie_title ASC
');

?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Movies!</title>
</head>
<body>
	
    
    <a href="add.php">Add a Movie!</a>
	
    <ul>
	
	<?php foreach ($results as $movies) : ?>
		<li>
			<a href="single.php?id=<?php echo $movies['id']; ?>"><?php echo $movies['movie_title']; ?></a>
			&bull;
			
            <a href="edit.php?id=<?php echo $movies['id']; ?>">Edit</a>
            
			<a href="delete.php?id=<?php echo $movies['id']; ?>">Delete</a>
		</li>
	<?php endforeach; ?>
	</ul>
	
</body>
</html>
