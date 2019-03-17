<div class="container">
	<table border="1">
		<tr>
			<th>task</th>
			
		</tr>
		 <?

foreach ($tasks as $task ) {
	echo "<tr>";
            echo "<td>" . $task['task_name']  . "</td>";
            // echo "<td>" . $list['book_author']  . "</td>";
            echo "<td class='center'>" . "<a href='". URL . "task/update/". $task['task_id'] ."'>bewerken</a></td>";
            echo "<td class='center'>" . "<a href='" . URL . "task/delete/". $task['task_id'] ."'>verwijder</a></td>"; 
           	echo "</tr>";  
    echo "</tr>";
}
?>

	</table>
</div>
<p><a  class="btn btn-primary" href = "<?=URL?>task/add">voeg task toe</a></p>