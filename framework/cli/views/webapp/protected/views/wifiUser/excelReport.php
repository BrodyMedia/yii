<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      username		</th>
 		<th width="80px">
		      password		</th>
 		<th width="80px">
		      sec		</th>
 		<th width="80px">
		      st_date		</th>
 		<th width="80px">
		      exp_date		</th>
 		<th width="80px">
		      owner		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->username; ?>
		</td>
       		<td>
			<?php echo $row->password; ?>
		</td>
       		<td>
			<?php echo $row->sec; ?>
		</td>
       		<td>
			<?php echo $row->st_date; ?>
		</td>
       		<td>
			<?php echo $row->exp_date; ?>
		</td>
       		<td>
			<?php echo $row->owner; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
