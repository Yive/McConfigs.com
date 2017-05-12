<?php include '../../includes/head.php'; 
if($_POST['plugin-name'] == 'EssentialsX') {
    include '../../includes/plugins/EssentialsX.php';
}
if(!$_POST['plugin-name']) {
    header('Location: https://mcconfigs.com');
}
?>
<title>McConfig - EssentialsX Output</title>
<div class="container">
  <h1 class="page-header">Config Output ID: <?php echo "<a href=\"https://mcconfigs.com/plugins/EssentialsX/Saved/".$hash.".txt\">".$hash."</a>"; ?><small><span class="pull-right label label-primary">Click the config box to select</span></small></h1>
<pre><?php 

    echo $output;
?></pre>
<?php include '../../includes/footer.php'; ?>
<script type="text/javascript">
$(document).on('click', 'pre', function () {
 
	if (this.select) {
		this.select();
	}
	else if (document.selection) {
		var range = document.body.createTextRange();
		range.moveToElementText(this);
		range.select();
	} else if (window.getSelection) {
		var range = document.createRange();
		range.selectNode(this);
		window.getSelection().addRange(range);
	}
});
</script>
<?php
$myfile = fopen("Saved/".$hash.".txt", "w");
fwrite($myfile, $output);
fclose($myfile);
?>