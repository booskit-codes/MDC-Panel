<hr>
<table class="table table-striped table-light table-hover table-sm table-borderless">
	<thead>
		<th scope="col">Title</th>
		<th scope="col" class="text-center">Sentencing</th>
		<th scope="col" class="text-center">Offence</th>
		<th scope="col">Type</th>
		<th scope="col">Time</th>
		<th scope="col" class="text-center">Points</th>
		<th scope="col">Fine</th>
		<th scope="col" class="text-center">Impound</th>
		<th scope="col" class="text-center">Suspension</th>
		<th scope="col" class="text-center">Court</th>
	</thead>
	<tbody style="font-size: 75%!important">
		<?= $chargeTable ?>
	</tbody>
</table>
<hr>
<table class="table table-striped table-light table-hover table-sm table-borderless">
	<thead>
		<th>Total Time</th>
		<th>Total Points</th>
		<th>Total Fines</th>
		<th>Total Impound Time</th>
		<th>Total Suspension Time</th>
	</thead>
	<tbody>
		<?= $chargeTableTotals ?>
	</tbody>
</table>
<hr>