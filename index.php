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
				<form action="code.php" method="POST"  enctype="">
				<select id="taskType" name="catego">
					<option>+</option>
					<option>-</option>
				
				</select>

				<input type="text" name="descript" placeholder="Add description" id="taskDescription">

				<input type="number" name="amount" placeholder="value" id="num">

				<input type="submit" name="submit" value="✔" class="subButton">
			</div>
			</form>


	<div class="container-list">
		
		
			<div class="incomes">
				<table>
					<th>Incomes</th>

					<?php

					$query="SELECT * FROM budgettable where category='+'";
					$result=mysqli_query($con,$query);

					while($data=mysqli_fetch_array($result)) {
					?>
					<tr>
						<td><?php echo $data['Description']; ?></td><td></td><td><?php echo $data['Amount']; ?></td>
					</tr>
					<?php } ?>
				</table>
			</div>

			<div class="expenses">
				<table>
					<th>Expenses</th>
					<?php

					$query="SELECT * FROM budgettable where category='-'";
					$result=mysqli_query($con,$query);

					while($data=mysqli_fetch_array($result)) {
					?>
					<tr>
						<td><?php echo $data['Description']; ?></td><td></td><td><?php echo $data['Amount']; ?></td>
					</tr>
					<?php } ?>
				</table>
			</div>

		

	</div>

	<script src="main.js"></script>
	
	
</body>
</html>