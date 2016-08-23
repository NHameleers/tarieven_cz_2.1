<h3>Er zijn meerdere zorgproducten gevonden. Specificeer uw keuze.</h3><br>

<table id="zorgkeuze-tabel" class="tablesorter table table-hover">
	<thead class="lead">	
		<tr>
			<th class="text-center">Declaratiecode</th>
			<th class="text-center">Omschrijving</th>
		</tr>
	</thead>
	<tbody>

		<?php foreach (array_combine($unieke_decl_codes, $unieke_omschrijvingen) as $unieke_decl_code=>$unieke_omschrijving): ?>
            
            <form method="post" action="../public/zoek.php">
			<tr>
                
				<td><button type="submit" class="btn btn-default btn-warning" name="zorgcode" value=<?= $unieke_decl_code ?> ><?= $unieke_decl_code ?></button></td>
				<td><?= $unieke_omschrijving?></td>            

			</tr>
            </form>
		<?php endforeach ?>
	</tbody>
</table>


