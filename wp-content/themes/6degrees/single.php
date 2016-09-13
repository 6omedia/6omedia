<?php

	if ( is_singular( 'portfolio' ) ) {
		include(TEMPLATEPATH . '/work-single.php');
	}else{
		include(TEMPLATEPATH . '/blog-single.php');
	}

?>
