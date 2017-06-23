<!DOCTYPE html>
<html
	lang="<?php
	if (isset ( $_SESSION ['lang'] )) {
		echo test_input ( $_SESSION ['lang'], FILTER_SANITIZE_STRING );
	} else {
		echo "en";
	}
	?>">
				<?php
				global $DEVELOPMENT_MODE, $RELEASE;
				if ($DEVELOPMENT_MODE === $RELEASE) {
					include_once (dirname ( __FILE__ ) . '\memento_head_release.php');
				} else {
					include_once (dirname ( __FILE__ ) . '\memento_head_dev.php');
				}
				?>
    <body>
	<div class="container">
		<h1>C++ Memento</h1>
	</div>
		<?php
		global $DEVELOPMENT_MODE, $RELEASE;
		if ($DEVELOPMENT_MODE === $RELEASE) {
			include_once (dirname ( __FILE__ ) . '\memento_scripts_release.php');
		} else {
			include_once (dirname ( __FILE__ ) . '\memento_scripts_dev.php');
		}
		?>
	</body>
</html>