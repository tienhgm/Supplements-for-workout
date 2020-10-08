<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=products&action=create" class="btn btn-primary">Add product</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List product</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width: 100px;">Photo</th>
                    <th>name</th>
                    <th style="width: 150px;">Category</th>
                    <th style="width: 150px;">Price</th>
                    <th style="width: 100px;">Discount</th>
                    <th style="width: 70px;">Hot</th>
                    <th style="width: 100px;">Parameters</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach($listRecord as $rows): ?>
                <tr>
                    <td>
                        <?php if($rows->photo != "" && file_exists('../Assets/Upload/Products/'.$rows->photo)): ?>
                        <img src="../Assets/Upload/Products/<?php echo $rows->photo; ?>" style="width:100px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $rows->name; ?></td>
                    <th><?php echo $this->modelGetCategoryName($rows->category_id); ?></th>
                    <th>
                        <?php echo number_format($rows->price); ?> VNĐ
                    </th>
                    <td style="text-align: center;">
                        <?php echo $rows->discount; ?> %
                    </td>
                    <th style="text-align: center;">
                        <?php if($rows->hot == 1): ?>
                            <span class="fa fa-check"></span>
                        <?php endif; ?>
                    </th>
                    <td style="text-align: center;">
                        <a href="index.php?controller=productParameters&action=read&product_id=<?php echo $rows->id; ?>" class="label label-primary">List parameters</a>
                    </td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=products&action=update&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;
                        <a href="index.php?controller=products&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item">
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <a href="index.php?controller=products&action=read&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                    <?php endfor; ?>
                </li>
            </ul>
        </div>
    </div>
</div>