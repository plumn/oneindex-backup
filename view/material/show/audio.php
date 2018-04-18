<?php view::layout('layout')?>

<?php view::begin('content');?>
<div class="mdui-container-fluid">
	<br>
	<center>
	<img src="<?php @e($item['thumbnails'][0]['medium']['url']);?>" onerror='javascript:this.remove();'/>
	<br>
	<audio src="<?php e($item['downloadUrl']);?>" controls autoplay style="width: 100%;">
	</audio>
	</center>
	<br>
	<!-- 固定标签 -->
	<div class="mdui-textfield">
	  <label class="mdui-textfield-label">引用地址</label>
	  <textarea class="mdui-textfield-input"><audio src="<?php e($url);?>"></audio></textarea>
	</div>
</div>
<a href="<?php e($url);?>" class="mdui-fab mdui-fab-fixed mdui-ripple mdui-color-theme-accent"><i class="mdui-icon material-icons">file_download</i></a>
<?php view::end('content');?>