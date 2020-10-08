<ul>
	<?php $categories= $this->modelListCategories(); ?>
	<?php foreach($categories as $rows): ?>
		<li><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="products/categories/<?php echo $rows->name;?>/<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
		
	<?php endforeach; ?>
</ul>