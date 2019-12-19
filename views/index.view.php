<?php require('partials/head.php'); ?>


<h1>Tests</h1>
<?php foreach ($tests as $test) :?>
	<li><?= $test->id; ?></li>
<?php endforeach; ?>


<?php require('partials/footer.php'); ?>