
<div class="container">
	<style>
		.text-news a h5{color: black;}
		.text-news a h5:hover{color: #00afe8; transition: 0.4s;}
	</style>
	<div class="tabs-content row">
		<?php foreach ($listRecord as $rows): ?>
		<div class="col-xs-6 col-md-6" style="margin: 20px 0;">
			<div>
				<div><a href="news/detail/<?php echo Unicode::removeUnicode($rows->name); ?>/<?php echo $rows->id; ?>"><img  src="../Assets/Upload/News/<?php echo $rows->photo; ?>" alt="" style="width: 100%; height: 200px;"></a></div>
				<br>
				<div class="text-news"><a href="news/detail/<?php echo Unicode::removeUnicode($rows->name); ?>/<?php echo $rows->id; ?>"><h5><?php echo $rows->name; ?></h5></a></div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
   <div class="sotrang">
		<ul class="pagination" style="margin-left: -225px;">
            <?php for($i = 1; $i <= $numPage; $i++): ?>
            <li class="page-item"><a class="page-link" href="news/page/<?php echo $i;?>/<?php echo $i; ?>" style="color: black;"><?php echo $i;?></a></li>
            <?php endfor; ?>
		</ul>
	</div>
</div>

