<?php echo $this->Form->create('Product', array('type' => 'file', 'class' => 'admin-form writing'));?>
<?php
echo $this->Form->input('id');
echo $this->Form->input('name', array('class' => 'long-text'));
echo $this->Form->input('parent_product', array(
    'type' => 'text',
    'label' => __('Parent'),
    'class' => 'product-autocomplete long-text',
    'value' => isset($parent) ? $parent['Product']['name'] : ''
));
echo $this->Form->input('parent_id', array(
    'type' => 'hidden',
    'class' => 'product-autocomplete-value'
));
echo $this->Form->input('description');
echo $this->Form->input('Category', array(
    'class' => 'category-select'
));
echo $this->Form->input('logo', array('type' => 'file'));
echo $this->Form->input('website_url', array('class' => 'long-text'));
echo $this->Form->input('twitter');
?>
<fieldset>
    <p><em>Other options</em></p>
    <?php echo $this->Form->input('published'); ?>
</fieldset>
<?php echo $this->Form->end('Save'); ?>