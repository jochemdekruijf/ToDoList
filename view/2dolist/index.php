<div class="container">
	<table border="1">
		<tr>
			<th>lijsten</th>
			<th>lijst
              <a href="<?= URL ?>list/indexASC/">∆</a>
             <a href="<?= URL ?>list/index/">∇</a>
			</th>
			
		</tr>
		 <?

foreach ($lists as $list ) {
	echo "<tr>";


            echo "<td><a href=\"" . URL . "task/index2/" . $list['list_id'] . "\">" . $list['list_name'] . "</a></td>";
            echo "<td>". $list['list_id'] . "</td>";
            echo "<td class='center'>" . "<a href='". URL . "list/update/". $list['list_id'] ."'>bewerken</a></td>";
            echo "<td class='center'>" . "<a href='" . URL . "list/delete/". $list['list_id'] ."'>verwijder</a></td>"; 
           	echo "</tr>";  
    echo "</tr>";
}
?>

	</table>
</div>
<p><a  class="btn btn-primary" href = "<?=URL?>list/add">voeg lijst toe</a></p>
<a href=""></a>

