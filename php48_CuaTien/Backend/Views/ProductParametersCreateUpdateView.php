<form method="post" action="<?php echo $action; ?>">
<div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">update parameter</div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th style="width: 20px;"></th>
                        <th>Name</th>
                    </tr>
                    <?php foreach($listRecord as $rows): ?>
                    <tr>
                        <td><input type="checkbox" <?php if($this->modelCheckProductParameters($product_id,$rows->id)): ?> checked <?php endif; ?> name="parameters[]" value="<?php echo $rows->id; ?>"></td>
                        <td><?php echo $rows->name; ?></td>
                    </tr>                    
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="panel-footer">
                <input type="submit" class="btn btn-primary">
            </div>
        </div>
    </div>
    <!-- end content -->
</div>
</form>