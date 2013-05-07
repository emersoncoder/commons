<!DOCTYPE HTML>

<html lang="pt-br">

<head>

	<meta charset="UTF-8">


		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js"></script>

		<link rel='stylesheet' href='styles.css' type='text/css' media='all' />
		<link rel="stylesheet" href="http://jqueryui.com/jquery-wp-content/themes/jquery/css/base.css?v=1">
		<link rel="stylesheet" href="http://jqueryui.com/jquery-wp-content/themes/jqueryui.com/style.css">
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">

		<style>
			#sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
			#sortable li { margin: 0 5px 5px 5px; padding: 5px; font-size: 1.2em; height: 1.5em; }
		html>body #sortable li { height: 1.5em; line-height: 1.2em; }
		.ui-state-highlight { height: 1.5em; line-height: 1.2em; }
		</style>


<script type="text/javascript">

	// When the document is ready set up our sortable with it's inherant function(s)

	$(document).ready(function() {

		$("#test-list").sortable({
			handle : '.handle',
			update : function () {
				var order = $('#test-list').sortable('serialize');
				alert(order);
				$("#info").load("process-sortable.php?" + order);
			},
			placeholder: "ui-state-highlight"
		});

		$( "#sortable" ).sortable({

			placeholder: "ui-state-highlight"

		});

		$( "#sortable" ).disableSelection();

	});


</script>
</head>

<body>



<pre>

	<div id="info">Waiting for update</div>

</pre>



<ul id="sortable">
<li class="ui-state-default">Item 1</li>
<li class="ui-state-default">Item 2</li>
<li class="ui-state-default">Item 3</li>
<li class="ui-state-default">Item 4</li>
<li class="ui-state-default">Item 5</li>
<li class="ui-state-default">Item 6</li>
<li class="ui-state-default">Item 7</li>
</ul>
 
<ul id="test-list">

	<li id="listItem_1">

		<img src="arrow.png" alt="move" width="16" height="16" class="handle" />
		<strong>Item 1 </strong>with a link to <a href="http://www.google.co.uk/" rel="nofollow">Google</a>

	</li>

	<li id="listItem_2">

		<img src="arrow.png" alt="move" width="16" height="16" class="handle" />
		<strong>Item 2</strong>

	</li>

	<li id="listItem_3">

		<img src="arrow.png" alt="move" width="16" height="16" class="handle" />
		<strong>Item 3</strong>

	</li>

	<li id="listItem_4">

		<img src="arrow.png" alt="move" width="16" height="16" class="handle" />
		<strong>Item 4</strong>

	</li>

</ul>
 
<form action="process-sortable.php" method="post" name="sortables">
	<input type="hidden" name="test-log" id="test-log" />
</form>


</body>

</html>

