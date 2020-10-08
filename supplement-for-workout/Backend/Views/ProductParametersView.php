<div class="col-md-12">
        <div style="margin-bottom:5px;">
            <a href="index.php?controller=productParameters&action=update&product_id=<?php echo $product_id; ?>" class="btn btn-primary">Update parameter</a>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">List parameter</div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Name</th>
                    </tr>
                    <?php foreach($listRecord as $rows): ?>
                    <tr>
                        <td><?php echo $this->modelGetParameterName($rows->parameter_id); ?></td>
                    </tr>                    
                    <?php endforeach; ?>
                </table>
                <style type="text/css">
                    .pagination{padding:0px; margin:0px;}
                </style>
                <ul class="pagination">
                    <li class="page-item">
                        <?php for($i = 1; $i <= $numPage; $i++): ?>
                        <a href="index.php?controller=productParameters&action=read&product_id=<?php echo $product_id; ?>&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                        <?php endfor; ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end content -->
</div>