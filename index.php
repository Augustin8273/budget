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
				<h3 id="time"></h3>

				<div class="display-typed">
					<?php

					$query="SELECT amount FROM budgettable where category='+'";
					$result=mysqli_query($con,$query);
					$totalIncome=0;

					while($data=mysqli_fetch_array($result)) {
						$totalIncome+=$data['amount'];
					}
					$query="SELECT amount FROM budgettable where category='-'";
					$result=mysqli_query($con,$query);

					$totalExpense=0;

					while($data=mysqli_fetch_array($result)) {
						$totalExpense+=$data['amount'];
					}
					
					$availableBudget=$totalIncome-$totalExpense;
						?>

					<span>
							<?php if($availableBudget>0){
								echo "+".$availableBudget;
							}else{
								echo $availableBudget;
							}  ?>
					</span>
					
				</div>

				<div class="display-income">
					Income : 
						<?php

					$query="SELECT amount FROM budgettable where category='+'";
					$result=mysqli_query($con,$query);

					$totalIncome=0;

					while($data=mysqli_fetch_array($result)) {
						$totalIncome+=$data['amount'];
					}
						?>
						<span>
							<?php echo " + ".$totalIncome ?>
						</span>
					
				</div>
				<div class="display-expense">
					Expenses :
					<?php

					$query="SELECT amount FROM budgettable where category='-'";
					$result=mysqli_query($con,$query);

					$totalExpense=0;

					while($data=mysqli_fetch_array($result)) {
						$totalExpense+=$data['amount'];
					}
						?>
						<span>
							<?php echo " - ".$totalExpense ?>
						</span>&nbsp&nbsp&nbsp

						<span>
							<?php if($totalIncome==0 && $totalExpense==0){
								echo "0 %";
							}
							else if($totalIncome==0 && $totalExpense>0){
								echo "100 %";
							}else{
								echo $totalExpense*100/$totalIncome."%";
							}
							 ?>
						</span>
					
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

				<input type="text" name="descript" placeholder="Add description" id="taskDescription" required>

				<input type="number" name="amount" placeholder="value" id="num" required>

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
						<td><?php echo $data['Description']; ?></td><td></td><td><?php echo $data['Amount']; ?></td><td></td><td></td>
						<td id="cancel"><a href="code.php?delete=<?php echo $data['id']; ?>">❌</a></td>	
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
						<td><?php echo $data['Description']; ?></td><td></td><td><?php echo $data['Amount']; ?></td></td><td></td><td></td>
						<td id="cancel"><a href="code.php?delete=<?php echo $data['id']; ?>">❌</a></td>
					</tr>
					<?php } ?>
				</table>
			</div>

		

	</div>

	<script src="main.js"></script>
	
	
</body>
</html>