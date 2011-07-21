<?php $this->set('pageClass', 'welcome'); ?>
<div class="frontpage">
	<div class="left-col">
		<h2>We love stuff</h2>
		<p>Get the most out of the products you own and the services you use everyday, or discover new products that suit you.</p>
		<?php echo $this->element('search');?>
	</div>
	<div class="right-col">
		<?php echo $this->Form->create('User', array(
			'controller' => 'users',
			'action' => 'signup',
			'id' => 'signup',
			'inputDefaults' => array(
				'label' => false,
				'autocomplete' => 'off'
			)
		)); ?>
		<h3>Not part of Consumer Love? <em>Join Today!</em></h3>
		<p>Loads of people already have!</p>
		<?php echo $this->Form->input('username', array('placeholder' => 'Username') );?>
		<?php echo $this->Form->input('password', array('placeholder' => 'Password'));?>
		<?php echo $this->Form->input('email', array('placeholder' => 'Email'));?>
		<?php echo $this->Form->submit('Sign up', array('class' => 'cta signup-submit'));?>
		<?php echo $this->Form->end(); ?>
	</div>
	<div class="showcase">
		<p>Showcase goes here</p>
	</div>
</div>