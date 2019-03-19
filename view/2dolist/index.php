<div class="container">
	<table border="1">
		<tr>
			<th>lijsten</th>
			<th>lijst</th>
			
		</tr>
		 <?

foreach ($lists as $list ) {
	echo "<tr>";


            echo "<td><a href=\"" . URL . "task/index2/" . $list['list_id'] . "\">" . $list['list_name'] . "</a></td>";
            echo "<td>". $list['list_id'] . "</td>";
            echo "<td class='center'>" . "<a href='". URL . "student/update/". $list['list_id'] ."'>bewerken</a></td>";
            echo "<td class='center'>" . "<a href='" . URL . "student/delete/". $list['list_id'] ."'>verwijder</a></td>"; 
           	echo "</tr>";  
    echo "</tr>";
}
?>

	</table>
</div>
<p><a  class="btn btn-primary" href = "<?=URL?>student/add">voeg lijst toe</a></p>
<a href=""></a>


    <!--   <td><a href="<?= URL ?>task/index2/<?= $list['list_id'] ?>"><?= $list['list_name']; ?></a></td> -->