<?php

$my_customer_javascript = "
	."<script type=\"text/javascript\">
		function set_defaults(){
			var x = document.getElementsByName(\"Accountsname_c\");
			alert(x.length + \" and name is \"+ x.value);
			document.getElementsByName(\"Accountsname\").value = x.value;
		}
		alert('Here2!');
		set_defaults();
	</script>"
";

?>