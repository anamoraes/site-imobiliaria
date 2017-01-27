<?php
	unset($_SESSION["carrinho"]);
	echo "<script language= \"JavaScript\">
			location.href=\"javascript: window.history.go(-1)\"
		   </script>";
?>