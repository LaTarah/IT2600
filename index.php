<?php

require('courses.php');

$queryAllcourses = 'SELECT * FROM courses';
                   
$statement = $db->prepare($queryAllcourses);
$statement ->execute();
$courses = $statement->fetchAll();
$statement->closeCursor();

?>

<!DOCTYPE html>
<html>
     <head>
         <title>it1150</title>
    </head>
    <body>
  
<table>
    <tr> 
        <th>course_id</th>
        <th>title</th>
         <th>credit_hrs</th>
    </tr>
    <?php foreach ($courses as $course): ?>
    <tr>
        <td><?php echo $course['course_id']; ?></td>
        <td><?php echo $course['title']; ?></td>
        <td><?php echo $course['credit_hrs']; ?></td>
        
    </tr>
    <?php endforeach; ?>
</table>
    </body>
</html>