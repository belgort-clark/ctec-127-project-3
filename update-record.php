<?php // Filename: update-record.php
$pageTitle = "Update Record";
require 'inc/layout/header.inc.php'; 
?>

<div class="container">
	<div class="row mt-5">
		<div class="col-lg-12">
			<h1>Update Record</h1>
			<?php require __DIR__ .'/inc/update/content.inc.php'; ?>
			<?php require __DIR__ .'/inc/create/form.inc.php' ?>
		</div>
    </div>
</div>

<?php require 'inc/layout/footer.inc.php'; ?>