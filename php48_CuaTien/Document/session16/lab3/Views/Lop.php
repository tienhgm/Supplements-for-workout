<fieldset style="width: 400px; margin:auto;">
	<legend>Danh sách lớp</legend>
	<table cellpadding="5" border="1" style="width: 100%; border-collapse: collapse;">
		<tr>
			<th>Tên lớp</th>
		</tr>
		<?php foreach($lop as $rows): ?>
		<tr>
			<td><?php echo $rows->tenlop; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</fieldset>