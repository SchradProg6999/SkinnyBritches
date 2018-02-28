<?php
	function load_content( $html ){
		echo $html;
	}

	function sidenav_from_array( $clicked, $array ) {
		echo "<nav id='side' class='clearfix'>
						<div class='side-nav-body'>
							<ul><li><a href='javascript:void(0)' id='closebtn' onclick='closeNav()'>&times;</a></li>";

		foreach ( $array as $title => $content ) {

			echo "<li class='nav-link'>
							<form method='post' action='index.php'>
								<input type='hidden' name='variable_name' value='$title'/>
								<button type='submit' name='variable' value='$title' class='hyperlink-style-button";

			if ( $title == $clicked ) {
				echo "-active";
			}

			echo			"'>$title</button>
							</form>
						</li>";
		}

		echo "		</ul>
						</div>
					</nav>";
	}

	function load_from_array( $title, $array ) {
		echo "<div id='content-container'>
					<span id='openbtn' onclick='openNav()'>&raquo;</span>
						<div class='innertube'>
							<div class='innertube'>
								<h2>$title</h2>
								<hr>";
		echo $array[$title];
		echo "			<hr>
							</div>
						</div>
					</div>";
	}
?>
