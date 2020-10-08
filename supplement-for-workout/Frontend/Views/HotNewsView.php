<br>
<div class="card">
	<div class="card-header bg-secondary" style="color: white; font-size: 20px;">Tin nổi bật</div>
	<div class="card-body">
		<?php foreach($data as $rows): ?>
		<div class="tin">
			<a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a>
		</div>
		<div style="margin-bottom: 10px;"></div>
		<?php endforeach; ?>
	</div>
</div>
