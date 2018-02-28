

	/* Set the width of the side navigation to 250px */
	function openNav() {
		document.getElementById("side").style.display = "inline";
		document.getElementById("side").style.width = "95%";
		document.getElementById("side").style.padding = "5%";
		document.getElementById("side").style.padding = "5%";
		document.getElementById("openbtn").style.display = "none";
		
	}

	/* Set the width of the side navigation to 0 */
	function closeNav() {
		document.getElementById("side").style.display = "none";
		document.getElementById("side").style.width = "0";
		document.getElementById("side").style.padding = "0";
		document.getElementById("openbtn").style.display = "inline";
	}
