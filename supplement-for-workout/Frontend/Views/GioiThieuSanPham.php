
 <!-- Gioi thieu san pham tieu bieu -->
  <div class="container">
    <!-- 1 -->
    <div class="row justify-content-center" style="margin: 150px 0;">
        <?php foreach($dulieu as $rows):?>
            <?php if($rows->id %2!=0): ?>
              <div class="col-lg-6"><img src="../Assets/Frontend/images/<?php echo $rows->photo; ?>" style="width: 500px; height: 500px;"></div>
              <div class="col-lg-6" style="margin-top: 80px;">
                <div class="title-tieubieu"><?php echo $rows->title; ?></div>
                <div class="title-content"><?php echo $rows->content; ?></div>
              </div>
            <?php else: ?>
              <div class="col-lg-6" style="margin-top: 80px;">
                <div class="title-tieubieu"><?php echo $rows->title; ?> </div>
                <div class="title-content"><?php echo $rows->content; ?></div>
              </div>
              <div class="col-lg-6"><img src="../Assets/Frontend/images/<?php echo $rows->photo; ?>" style="width: 500px; height:500px;">
              </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
  </div>
  <!-- /Gioi thieu san pham tieu bieu -->