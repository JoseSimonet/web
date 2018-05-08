<?php if (count($success) > 0): ?>
  <div class="success">
  	<?php foreach ($success as $ok): ?>
  	  <p><?php echo $ok ?></p>
  	<?php endforeach?>
  </div>
<?php endif?>