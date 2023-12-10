<?php
if ($value < 0) $value = 0;
$A = 0;
$B = 0;
$Q = !$A;
$E = $A || $B;
$F = $A && $B;
$R = $A xor $B;

$Ab = 0;
$Ba = 1;
$T = !$Ab;
$G = $Ab || $Ba;
$H = $Ab && $Ba;
$Y = $Ab xor $Ba;

$At = 1;
$Bt = 0;
$U = !$At;
$I = $At || $Bt;
$J = $At && $Bt;
$L = $At xor $Bt;

$Ay = 1;
$By = 1;
$M= !$Ay;
$N = $Ay || $By;
$V = $Ay && $By;
$C = $Ay xor $By;

?>






<table class="table">
	<head>
		<link rel="stylesheet" href="nel.css">
	<thead>
		<tr>
			<th>A</th>
			<th>B</th>
			<th>!A</th>
			<th>A || B</th>
			<th>A && B</th>
			<th>A xor B</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>0</td>
			<td>0</td>
			<td><?php var_dump($Q); ?></td>
			<td><?php var_dump($E); ?></td>
			<td><?php var_dump($F); ?></td>
			<td><?php var_dump($R); ?></td>
		</tr>		
		<tr>
			<td>0</td>
			<td>1</td>
			<td><?php var_dump($T); ?></td>
			<td><?php var_dump($G); ?></td>
			<td><?php var_dump($H); ?></td>
			<td><?php var_dump($Y); ?></td>
		</tr>
		<tr>
			<td>1</td>
			<td>0</td>
			<td><?php var_dump($U); ?></td>
			<td><?php var_dump($I); ?></td>
			<td><?php var_dump($J); ?></td>
			<td><?php var_dump($L); ?></td>
		</tr>
		<tr>
			<td>1</td>
			<td>1</td>
			<td><?php var_dump($M); ?></td>
			<td><?php var_dump($N); ?></td>
			<td><?php var_dump($V); ?></td>
			<td><?php var_dump($C); ?></td>
		</tr>
		</tr>
	</tbody>
</table>
<style  type="text/css"> </style>
</head>