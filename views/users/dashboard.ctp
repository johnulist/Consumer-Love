<?php
$pageWidgets = array('top5','facebook');
$this->set(compact('pageWidgets'));
?>

<?php echo $this->element('search');?>
<h2>Your Activity Feed</h2>
<p>What's going on with the products and services you own.</p>
<?php if(!empty($feeds)): ?>
<ul class="feed">
	<?php foreach($feeds as $feed): ?>
	<li class="product-row">
		<?php echo $this->Love->productImage($feed['Product']); ?>
		<?php echo str_replace(
			array('{user}', '{product}'),
			array($this->Love->userLink($feed['User']), $this->Love->productLink($feed['Product']) ),
			$feed['Feed']['content']
		); ?>
		<span class="time"><?php echo $this->Time->timeAgoInWords($feed['Feed']['created']); ?></span>
	</li>
	<?php endforeach; ?>
</ul>
<?php else: ?>
<p>Here be a message encouraging you to fill ya inventory!</p>
<?php endif; ?>
