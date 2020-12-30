<?php
	require('layouts/header.php');

	if (isset($_GET['controller'])) {
		$controller = $_GET['controller'];
	} else {
		$controller = '';
	}

	switch ($controller) {
		
        default:
            printf($controller);
			require('pages/home.php');
			break;
	}

    require('layouts/footer.php');
?>