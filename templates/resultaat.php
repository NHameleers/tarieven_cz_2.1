<table id="tarieven-tabel" class="tablesorter table table-hover">
	<thead class="lead">	
		<tr>
			<th class="text-center">Zorgverlener</th>
			<th class="text-center">Plaats</th>
			<th class="text-center">Declaratiecode</th>
			<th class="text-center">Zorgproduct</th>
			<th class="text-center">Omschrijving</th>
            <th class="text-center">Tarief</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($procedures as $procedure): ?>

			<tr>
				<td><?= $procedure["zorgverlener"] ?></td>		    
				<td><?= $procedure["plaats_titlecase"] ?></td>
				<td><?= $procedure["declaratiecode"] ?></td>
				<td><?= $procedure["zorgproductcode"] ?></td>
				<td><?= $procedure["omschrijving"] ?></td>            
				<td><?= $procedure["tarief"] ?></td>
			</tr>

		<?php endforeach ?>
	</tbody>
</table>