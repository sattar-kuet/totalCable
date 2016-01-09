<h1>Blog posts</h1>
<?php echo $this->Html->link(
    'Add Post',
    array('controller' => 'posts', 'action' => 'add')
); ?>

</br>
<?php foreach ($posts as $post): ?>
	<?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
<p><?php echo $post['Post']['title']; ?> | <?php echo $post['Post']['created']; ?>
	<?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?>

	<?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $post['Post']['id']),
                array('confirm' => 'Are you sure you want to delete this post?'));
?>
</br>
<?php endforeach; ?>
<?php unset($post); ?>