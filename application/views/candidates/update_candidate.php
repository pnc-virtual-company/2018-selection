<div class="container">
	<div class="row">
		<div class="card">
			<div class="card-header">Edit candidate # <?php echo $viewAll['can_id']; ?></div>
			<div class="card-body">
				<form action="">
					<div class="form-group">
						<label for="fullName">Full name</label>
						<input type="text" class="form-control" name="fullName" id="fullName" value="<?php echo $viewAll['can_name'] ?>">
					</div>
					<div class="form-group">
						<label for="">Province</label>
						<select class="form-control" name="Province" id="province">
							<option value="Banteay MeanChey">Banteay MeanChey</option>
							<option value="Battambang">Battambang</option>
							<option value="Kompot">Kompot</option>
							<option value="Keb">Keb</option>
							<option value="Kompong Cham">Kompong Cham</option>
							<option value="Kompong Chhnang">Kompong Chhnang</option>
							<option value="Kompong Thom">Kompong Thom</option>
							<option value="Kompong Speu">Kompong Speu</option>
							<option value="Kratie">Kratie</option>
							<option value="KohKong">KohKong</option>
							<option value="Kondal">Kandal</option>
							<option value="Mondolkiry">Mondolkiry</option>
							<option value="OdorMeanChey">OdorMeanChey</option>
							<option value="Phnom Penh">Phnom Penh</option>
							<option value="Pursat">Pursat</option>
							<option value="Pailen">Pailen</option>
							<option value="Prey Veng">Prey Veng</option>
							<option value="Preah Vihear">Preah Vihear</option>
							<option value="Ratanakiry">Ratanakiry</option>
							<option value="Siem Reap">Siem Reap</option>
							<option value="Steung Treng">Steung Treng</option>
							<option value="SvayReang">SvayReang</option>
							<option value="Sihanoukville">Sihanoukville</option>
							<option value="Takeo">Takeo</option>
						</select>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
 <!-- <?php// echo $viewAll['can_id']; ?> -->