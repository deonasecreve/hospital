<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
	<h1>Species</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Breed</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($species as $race):
?>
			<tr>
				<td><?=$race['name']?></td>
				<td><?=$race['species']?></td>
				<td><?=$race['breed']?></td>
				<td class="center"><a href="edit.php?id=<?=$race['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$race['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>