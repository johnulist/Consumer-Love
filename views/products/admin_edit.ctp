<?php echo $this->Form->create('Product',array('type' => 'file', 'action' => 'edit', 'class' => 'admin-form'));?>
	<fieldset>
 		<legend><?php echo ucfirst($pageAction);?> <?php echo $this->data['Product']['name'] ?: 'Product'; ?></legend>
	<?php
		echo $this->Form->input('Category');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('logo', array('type' => 'file'));
		echo $this->Form->input('website_url');
		echo $this->Form->input('twitter');
		echo $this->Form->input('feed');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Save', true));?>
<div class="admin-help">
<?php if($pageAction == 'edit' && !empty($this->data['Product']['logo'])) {
	echo '<p>The current image is displayed below:<br/><br/>';
	echo $love->productImage($this->data, 128);
	echo '<input type="checkbox" name="data[Product][image][remove]" value="yes"/>Check this to remove image.';
} else {
	echo '<p>Be sure to upload an image for this product!</p>';
}
?>
</div>