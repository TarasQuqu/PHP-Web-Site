<!--header-->
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
		<h5 class="my-0 mr-md-auto font-weight-normal">itProger</h5>
		<nav class="my-2 my-md-0 mr-md-3">
			<a class="p-2 text-dark" href="#">Main</a>
			<a class="p-2 text-dark" href="#">Contacts</a>
		</nav>
		<?php
		if((isset($_COOKIE['user1'])) && ($_COOKIE['user1'] == 'Да')):
		?>
		<a class="btn btn-outline-primary" href="/auth.php">User account</a>
		<?php else: ?>
		<a class="btn btn-outline-primary" href="/auth.php">Sign in</a>
		<?php endif; ?>
	</div>
