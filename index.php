<?php
	include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Budget</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container-monitor">
		
		
			<div class="monitor">
				<h3>Available budget in November 2022</h3>

				<div class="display-typed">

					+800,00000,0000
					
				</div>

				<div class="display-income">
					Income
				</div>
				<div class="display-expense">
					Expenses
					
				</div>
				
			</div>

		

	</div>

	<div class="container-type">
		
		
			<div class="monitor">
				<select id="taskType">
					<option>+</option>
					<option>-</option>
				
				</select>

				<input type="text" name="" placeholder="Add description" id="taskDescription">

				<input type="number" name="" placeholder="value" id="num">
				<button id="taskSubmit">✔</button>
			</div>


	<div class="container-list">
		
		
			<div class="incomes">
				<table>
					<th>Incomes</th>
					<tr>
						<td>dddddddd</td><td></td><td>5667</td>
					</tr>
				</table>
			</div>

			<div class="expenses">
				<table>
					<th>Expenses</th>
					<tr>
						<td>dddddddd</td><td></td><td>5667</td>
					</tr>
				</table>
			</div>

		

	</div>

	<script src="main.js"></script>
	
	
</body>
</html>