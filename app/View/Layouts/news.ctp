<?php echo $this->element('news-header'); ?> 

<?php 
if($isSadmin){
echo $this->element($admin_sidebar.'-sidebar');	
}
 ?> 

<?php echo $this->fetch('content'); ?>
<?php echo $this->element('news-footer'); ?> 