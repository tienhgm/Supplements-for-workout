<!DOCTYPE html>
<html>
<head>
	<title>mon hoc</title>
	<meta charset="utf-8">
</head>
<body>
<fieldset style="width: 400px; margin:auto;">
	<legend>Danh sách môn học</legend>
	<table cellpadding="5" border="1" style="width: 100%; border-collapse: collapse;">
		<tr>
			<th>Tên môn học</th>
		</tr>
		<?php foreach($monhoc as $rows): ?>
		<tr>
			<td><?php echo $rows->tenmonhoc; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</fieldset>
</body>
</html>