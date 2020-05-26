<div class="container mb-5 pb-5" data-aos="fade-in" data-aos-duration="500" data-aos-delay="250">
	<h1><i class="fas fa-fw fa-car-crash mr-2"></i>Traffic Division: Patrol Report - Form</h1>
	<hr>
	<form action="/controllers/form-processor.php" method="POST">
		<input type="hidden" id="generatorType" name="generatorType" value="TrafficDivisionPatrolReport">

		<h4><i class="fas fa-fw fa-archive mr-2"></i>General Details</h4>
		<div class="form-row">
			<div class="form-group col-xl-6">
				<label>Date</label>
				<div class="input-group">
					<input
					class="form-control"
					type="text"
					id="inputDateFrom"
					name="inputDateFrom"
					placeholder="DD/MMM/YYYY"
					style="text-transform: uppercase;"
					value="<?= $g->getUNIX('date') ?>"
					required>
					<div class="input-group-midpend">
						<span class="input-group-text" id="basic-addon1">-</span>
					</div>
					<input
					class="form-control"
					type="text"
					id="inputDateTo"
					name="inputDateTo"
					placeholder="DD/MMM/YYYY"
					style="text-transform: uppercase;">
				</div>
				<small id="helpDate" class="form-text text-muted text-center">DD/MMM/YYYY Format</small>
			</div>
			<div class="form-group col-xl-3">
				<label>Time</label>
				<div class="input-group">
					<input
					class="form-control"
					type="text"
					id="inputTimeFrom"
					name="inputTimeFrom"
					placeholder="00:00"
					value="<?= $g->getUNIX('time') ?>"
					required>
					<div class="input-group-midpend">
						<span class="input-group-text" id="basic-addon1">-</span>
					</div>
					<input
					class="form-control"
					type="text"
					id="inputTimeTo"
					name="inputTimeTo"
					placeholder="24:00"
					required>
				</div>
				<small id="helpTime" class="form-text text-muted text-center">24-Hour Format</small>	
			</div>
		</div>

		<h4><i class="fas fa-fw fa-car mr-2"></i>Traffic Stops</h4>
		<div class="form-row groupSlotTS">
			<div class="form-group col-xl-2">
				<label>Additional Options</label>
				<div class="input-group-addon"> 
					<a href="javascript:void(0)" class="btn btn-success w-100 addSlotTS">
						<i class="fas fa-fw fa-plus-square mr-1"></i>Traffic Stop Slot
					</a>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-xl-4">
				<div class="form-group">
					<h5 class="text-center"><i class="fas fa-fw fa-truck-pickup mr-2"></i>Vehicle Impounds</h5>
					<input
					class="form-control"
					type="number"
					id="inputVehicleImpounds"
					name="inputVehicleImpounds"
					placeholder="#">
				</div>
			</div>
			<div class="col-xl-4">
				<div class="form-group">
					<h5 class="text-center"><i class="fas fa-fw fa-hands-helping mr-2"></i>Traffic Assists</h5>
					<input
					class="form-control"
					type="number"
					id="inputTrafficAssists"
					name="inputTrafficAssists"
					placeholder="#">
				</div>
			</div>
			<div class="col-xl-4">
				<div class="form-group">
					<h5 class="text-center"><i class="fas fa-fw fa-car-crash mr-2"></i>Traffic Investigations</h5>
					<input
					class="form-control"
					type="number"
					id="inputTrafficInvestigations"
					name="inputTrafficInvestigations"
					placeholder="#">
				</div>
			</div>
		</div>

		<h4><i class="fas fa-fw fa-clipboard mr-2"></i>Notes & Other Details</h4>
		<div class="form-row">
			<div class="form-group col-xl-12">
				<textarea
				class="form-control"
				id="inputNotes"
				name="inputNotes"
				rows="2"
				placeholder="Any optional and extra notes regarding the patrol."></textarea>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-xl-12">
				<input
				class="form-control"
				type="text"
				id="inputTDPatrolReportURL"
				name="inputTDPatrolReportURL"
				value="<?= $g->cookieTrafficPatrolURL() ?>"
				placeholder="Direct URL to your personal Patrol Report thread.">
			</div>
		</div>
		<div class="container my-5 text-center">
			<button id="submit" type="submit" name="submit" class="btn btn-primary px-5">
				<i class="fas fa-fw fa-plus-square mr-1"></i>Submit
			</button>
		</div>
	</form>

	<!-- COPY SLOTS -->

	<div class="container groupCopySlotTS" style="display: none;">
		<div class="form-group col-xl-3">
			<input
			class="form-control"
			type="text"
			id="inputNameTS[]"
			name="inputNameTS[]"
			placeholder="Firstname Lastname"
			required>
		</div>
		<div class="form-group col-xl-1">
			<input
			class="form-control"
			type="number"
			id="inputCitationsTS[]"
			name="inputCitationsTS[]"
			placeholder="#">
			<small id="helpDashcam" class="form-text text-muted text-center">Citations</small>
		</div>
		<div class="form-group col-xl-2">
			<div class="input-group-addon"> 
				<button class="btn btn-danger w-100 removeSlotTS" type="button" id="button-addon2">
					<i class="fas fa-fw fa-minus-square mr-1"></i>Slot
				</button>
			</div>
		</div>
	</div>
</div>

<?php
	require "form-footer.php";
?>