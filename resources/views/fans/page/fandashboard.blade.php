<!DOCTYPE html>
<html>
<head>
	<title>Fans dashboard</title>
	<link rel="stylesheet"  href="{{asset('css/app.css')}}">
</head>
<body>

	<h1>Welcome </h1> {{session('return_val')}}

	
	<h2>Below are the celebs </h2>
	<table>
		<tr>
			<td>Name</td>
			<td>Phone</td>
		</tr>
	</table>	
			<?php

				foreach ($fan_details as $fan) {
				?>
				<ul class="list-group" font-style="italics">
				<li class="list-group-item">
					<?php
					echo $fan['name'];?>
				</li>
				<li class="list-group-item">
					<?php
					echo $fan['phone'];
					?>

				</li>
			</ul>
			<?php
				}
			?>
	
			

		
	

	<h2>All page info at mockup : fandashboard</h2>

</body>
</html>