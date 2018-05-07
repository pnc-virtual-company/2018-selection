<style>
body{
	background-image: url("<?php echo base_url();?>assets/images/background/rice.jpg");
	background-attachment: fixed;    
	background-position: center;   
	 background-repeat: no-repeat; 

	background-size: cover;
}
</style>
<!-- form header -->
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-3 col-xs-12"></div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<h2 class="text-center" style="color:#fff;">Student Name</h2>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-3 col-xs-12"></div>	
	</div>
	<br>
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12"></div>
		<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
			<p style="color:#fff;">Global grade:</p>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
			<select class="form-control" name="grade">
				<option value="A+">A+</option>
				<option value="A">A</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="Failed">Failed</option>
			</select>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			<button type="button" class="btn btn-primary float-right">SAVE</button>
		</div>
		
		<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12"></div>
	</div>
</div>
<!-- end form header -->
<br>
<!-- form collapsed -->
<div class="container">
	<div id="accordion">
		<!-- form collapsed One -->
		<div class="card">
			<div id="headingOne">
				<h5 class="mb-0">
					<button class="btn btn-primary collapsed btn-block text-left formHeading" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="height: 60px;">
						<h4>Student Informations
							<i class="mdi mdi-chevron-down float-right down" style="color:#fff; font-size: 35px;">
							</i>
							<i class="mdi mdi-chevron-up float-right up" style="color:#fff; font-size: 35px;display: none;">
							</i>
						</h4>
					</button>
				</h5>
			</div>
			<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
				<div class="card-body contentBody">
					<!-- form student information -->
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<h5>General Information</h5>
					</div><br>
					<form action="" method="POST">
						<div class="row">
							<div class="col-lg-4 col-md-4">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="status" class="col-lg-4 col-md-4 col-xs-12 col-form-label">Province :</label>
									<div class="col-lg-6 col-md-6 col-xs-12">
										<select class="form-control" name="Province">
											<option value="Battambong">Battambong</option>
											<option value="BanteayMeanChey">BanteayMeanChey</option>
											<option value="SiemReap">SiemReap</option>
											<option value="SteungTreng">SteungTreng</option>
											<option value="SvayReang">SvayReang</option>
											<option value="Sihanoukville">Sihanoukville</option>
											<option value="Pursat">Pursat</option>
											<option value="Pailen">Pailen</option>
											<option value="PhnomPenh">PhnomPenh</option>
											<option value="PreyVeang">PreyVeang</option>
											<option value="PreahVihear">PreahVihear</option>
											<option value="Kompot">Kompot</option>
											<option value="Keb">Keb</option>
											<option value="KompongCham">KompongCham</option>
											<option value="KompongChhnang">KompongChhnang</option>
											<option value="KompongThom">KompongThom</option>
											<option value="KompongSpeu">KompongSpeu</option>
											<option value="Kratie">Kratie</option>
											<option value="KohKong">KohKong</option>
											<option value="Kondal">Kondal</option>
											<option value="Ratanakiry">Ratanakiry</option>
											<option value="Mondolkiry">Mondolkiry</option>
											<option value="OdorMeanChey">OdorMeanChey</option>
											<option value="Takeo">Takeo</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="status" class="col-lg-4 col-md-4 col-xs-12 col-form-label">Gender :</label>
									<div class="col-lg-6 col-md-6 col-xs-12">
										<select class="form-control" name="gender">
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="status" class="col-lg-4 col-md-4 col-xs-12 col-form-label">Age :</label>
									<div class="col-lg-6 col-md-6 col-xs-12">
										<input type="number" class="form-control" placeholder="Your Age " required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-4">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="ngo" class="col-lg-4 col-md-4 col-xs-12 col-form-label">NGO :</label>
									<div class="col-lg-6 col-md-6 col-xs-12">
										<select class="form-control" id="ngo" name="ngo">
											<option value="PSE">PSE</option>
											<option value="KBFC">KBFC</option>
											<option value="Other">Other</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-md-1"></div>
									<label for="other" class="col-lg-2 col-md-2 col-xs-12 col-form-label">Other :</label>
									<div class="col-lg-9 col-md-9 col-xs-12">
										<input type="text" class="form-control" id="other" placeholder="If other please specify " required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-4">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="ngo" class="col-lg-4 col-md-4 col-xs-12 col-form-label">Health Status :</label>
									<div class="col-lg-6 col-md-6 col-xs-12">
										<select class="form-control" id="ngo">
											<option value="#">Healthy</option>
											<option value="#">some health issuses</option>
											
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-md-1"></div>
									<label for="other" class="col-lg-2 col-md-2 col-xs-12 col-form-label">Other :</label>
									<div class="col-lg-9 col-md-9 col-xs-12">
										<input type="text" class="form-control" id="other" placeholder="If some health issuses, please specify" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-4">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="ngo" class="col-lg-4 col-md-4 col-xs-12 col-form-label">Rank in class :</label>
									<div class="col-lg-6 col-md-6 col-xs-12">
										<input type="text" class="form-control" placeholder="Ex: 10/33" required>
									</div>
								</div>
							</div>		
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-4">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="ngo" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Extracuricular activity 
									& activement :</label>	
								</div>
							</div>	
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-md-1"></div>
									<label for="other" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
									<div class="col-lg-9 col-md-9 col-xs-12">
										<input type="text" class="form-control" id="other" placeholder="please comment" required>
									</div>
								</div>
							</div>	
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><h5>Motivation</h5></div>
						<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12"></div><br>
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="status" class="col-lg-6 col-md-6 col-xs-12 col-form-label">PNC choice rank :</label>
									<div class="col-lg-4 col-md-4 col-xs-12">
										<select class="form-control">
											<option value="#">1</option>
											<option value="#">2</option>
											<option value="#">3</option>
											<option value="#">4</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="status" class="col-lg-6 col-md-6 col-xs-12 col-form-label">Responsibility & maturity :</label>
									<div class="col-lg-4 col-md-4 col-xs-12">
										<input type="text" class="form-control" id="other" placeholder="Ex: 18/20" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="status" class="col-lg-6 col-md-6 col-xs-12 col-form-label">Motivation for PNC :</label>
									<div class="col-lg-4 col-md-4 col-xs-12">
										<input type="text" class="form-control" id="other" placeholder="Ex: 18/20" required>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="status" class="col-lg-6 col-md-6 col-xs-12 col-form-label">Communication :</label>
									<div class="col-lg-4 col-md-4 col-xs-12">
										<input type="text" class="form-control" id="other" placeholder="Ex: 10/10" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="status" class="col-lg-6 col-md-6 col-xs-12 col-form-label">Other Scholaship :</label>
									<div class="col-lg-4 col-md-4 col-xs-12">
										<input type="text" class="form-control" id="other" placeholder="" required>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="status" class="col-lg-6 col-md-6 col-xs-12 col-form-label">Choice Rank :</label>
									<div class="col-lg-4 col-md-4 col-xs-12">
										<select class="form-control" name="rank">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
							<div class="col-lg-4 col-md-4 col-sm-9 col-xs-12">
								<a href="#">
									<h6>
										<i class="mdi mdi-plus" style="color:#000;font-size: 20px;">
										</i>Add other Scholashiop
									</h6>
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-4">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="ngo" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Commitment of the student :</label>	
								</div>
							</div>	
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-md-1"></div>
									<label for="other" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
									<div class="col-lg-9 col-md-9 col-xs-12">
										<input type="text" class="form-control" id="other" placeholder="please comment" required>
									</div>
								</div>
							</div>	
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-4">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="ngo" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Commitment of the parents :</label>	
								</div>
							</div>	
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-md-1"></div>
									<label for="other" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
									<div class="col-lg-9 col-md-9 col-xs-12">
										<input type="text" class="form-control" id="other" placeholder="please comment" required>
									</div>
								</div>
							</div>	
						</div>
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"></div>
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<button type="button" class="btn btn-primary float-right">Save Information</button><br><br>	
							</div>
						</div>
					</form>
					<!-- end form student information -->
				</div>
			</div>
		</div>
		<!-- end form collapsed One -->
		<div class="card">
			<div id="headingTwo">
				<h5 class="mb-0">
					<button class="btn btn-primary collapsed  btn-block text-left formHeading" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="height: 60px;">
						<h4>Family Informations
							<i class="mdi mdi-chevron-down float-right down" style="color:#fff; font-size: 35px;">
							</i>
							<i class="mdi mdi-chevron-up float-right up" style="color:#fff; font-size: 35px;display: none;">
							</i>
						</h4>
					</button>
				</h5>
			</div>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
				<div id="subAccordion">
					<!-- form family profile -->
					<div class="card">
						<div id="familyPro">
							<h5 class="mb-0">
								<button class="btn btn-default collapsed btn-block text-left subHeading" data-toggle="collapse" data-target="#collapseFamilyPro" aria-expanded="false" aria-controls="collapseFamilyPro" style="height: 60px;border-bottom: 2px solid #fff; ">
									<h5 class="subCollapse">Family Profile
										<i class="mdi mdi-chevron-down float-right subDown" style="color:#000; font-size: 30px;">
										</i>
										<i class="mdi mdi-chevron-up float-right subUp" style="color:#000; font-size: 30px;display: none;">
										</i>
									</h5>
								</button>
							</h5>
						</div>
						<div id="collapseFamilyPro" class="collapse" aria-labelledby="familyPro" data-parent="#subAccordion">
							<div class="card-body contentBody">
								<h5>Father</h5>
								<form action="" method="POST">
									<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-4">
											<div class="form-group row">
												<div class="col-lg-5 col-md-4 col-sm-4">
													<label for="amount" class="col-form-label">Age :</label>
												</div>
												<div class="col-lg-7 col-md-8 col-sm-8">
													<input type="number" name="age" id="" class="form-control">
												</div>
											</div>
										</div>

										<div class="col-lg-5 col-md-5 col-sm-8">
											<div class="form-group row">
												<div class="col-lg-5 col-md-5 col-sm-4">
													<label for="amount" class="col-form-label">Occupation :</label>
												</div>
												<div class="col-lg-7 col-md-7 col-sm-8">
													<select class="form-control" name="Occupation">
														<option value="Farmer/Laborer">Farmer/Laborer</option>
														<option value="Teacher">Teacher</option>
														<option value="Soldier">Soldier</option>
														<option value="Police Officer">Police Officer</option>
														<option value="Agriculture">Agriculture</option>
														<option value="Other">Other</option>
													</select>
												</div>
											</div>
										</div>
										<br>
										<div class="col-lg-5 col-md-5 col-sm-12">
											<input type="text" name="specify" id="" class="form-control" placeholder="If other, please specify">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group row">
												<div class="col-md-6">
													<label for="amount" class="col-form-label">Health status :</label>
												</div>
												<div class="col-md-6">
													<select name="health" id="" class="form-control">
														<option value="Healthy">Healthy</option>
														<option value="issues">Health issues</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-8">
											<input type="text" name="healthSpecify" id="" class="form-control" placeholder="If health issues, please specify" />
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-4 col-sm-12">
											<div class="form-group row">
												<div class="col-md-4 col-sm-4">
													<label for="amount" class="col-form-label">Education :</label>
												</div>
												<div class="col-md-2 col-sm-1"></div>
												<div class="col-md-6 col-sm-4">
													<select class="form-control" name="Education">
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
														<option value="University">University</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-8"></div>
									</div>
									<!-- end of father information -->
									<br>
									<h5>Mother</h5>
									<div class="row">
										<div class="col-md-2">
											<div class="form-group row">
												<div class="col-lg-5 col-md-4 col-sm-4">
													<label for="amount" class="col-form-label">Age :</label>
												</div>
												<div class="col-lg-7 col-md-8 col-sm-8">
													<input type="number" name="age" id="" class="form-control">
												</div>
											</div>
										</div>
										<!-- <div class="col-md-"></div> -->
										<div class="col-md-5">
											<div class="form-group row">
												<div class="col-md-5">
													<label for="amount" class="col-form-label">Occupation :</label>
												</div>
												<div class="col-md-7">
													<select class="form-control" name="Occupation">
														<option value="Farmer/Laborer">Farmer/Laborer</option>
														<option value="Teacher">Teacher</option>
														<option value="Soldier">Soldier</option>
														<option value="Police Officer">Police Officer</option>
														<option value="Agriculture">Agriculture</option>
														<option value="Other">Other</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-5">
											<input type="text" name="specify" id="" class="form-control" placeholder="If other, please specify">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group row">
												<div class="col-md-6">
													<label for="amount" class="col-form-label">Health status :</label>
												</div>
												<div class="col-md-6">
													<select name="health" id="" class="form-control">
														<option value="Healthy">Healthy</option>
														<option value="issues">Health issues</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-8">
											<input type="text" name="healthSpecify" id="" class="form-control" placeholder="If health issues, please specify" />
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group row">
												<div class="col-md-4">
													<label for="amount" class="col-form-label">Education :</label>
												</div>
												<div class="col-md-2"></div>
												<div class="col-md-6">
													<select class="form-control" name="Education">
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
														<option value="University">University</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-8"></div>
									</div>
									<!-- end of mother information -->
									<!-- siblings -->
									<br>
									<h4>Siblings</h4>
									<br>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group row">
												<div class="col-md-6">
													<label for="amount" class="col-form-label">Number of siblings :</label>
												</div>
												<div class="col-md-6">
													<select class="form-control" name="siblings">
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group row">
												<div class="col-md-6">
													<label for="amount" class="col-form-label">Married :</label>
												</div>
												<div class="col-md-6">
													<select class="form-control" name="Married">
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group row">
												<div class="col-md-6">
													<label for="amount" class="col-form-label">Separated :</label>
												</div>
												<div class="col-md-6">
													<select class="form-control" name="Separated">
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<!-- end of sibling information -->
									<br>
									<div class="row">
										<div class="col-md-8">
											<div class="form-group row">
												<div class="col-md-9">
													<label for="amount" class="col-form-label">Living in the family's house (including parents) :</label>
												</div>
												<div class="col-md-3">
													<select class="form-control" name="liveInHouse">
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
														<option value="13">13</option>
														<option value="14">14</option>
														<option value="15">15</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group row">
												<div class="col-md-6">
													<label for="amount" class="col-form-label">Student rank :</label>
												</div>
												<div class="col-md-6">
													<select class="form-control" name="rank">
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-10 col-sm-10"></div>
										<div class="col-md-2 col-sm-2">
											<button class="btn btn-primary btn-block" type="button">Save information</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- end form family profile -->
					<!-- form family income -->
					<div class="card">
						<div id="familyIncome">
							<h5 class="mb-0">
								<button class="btn btn-default collapsed  btn-block text-left subHeading" data-toggle="collapse" data-target="#collapseFamilyIncome" aria-expanded="false" aria-controls="collapseFamilyIncome" style="height: 60px;border-bottom: 2px solid #fff;">
									<h5 class="subCollapse" style="color: #fff;">Family's Income
										<i class="mdi mdi-chevron-down float-right subDown" style="color:#fff; font-size: 30px;">
										</i>
										<i class="mdi mdi-chevron-up float-right subUp" style="font-size: 30px;display: none;">
										</i>
									</h5>
								</button>
							</h5>
						</div>
						<div id="collapseFamilyIncome" class="collapse" aria-labelledby="familyIncome" data-parent="#subAccordion">
							<div class="card-body contentBody">
								<form action="" method="POST">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<h5>Family Income</h5>
										</div>
										<div class="col-md-4"></div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-md-5">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<label for="fMonthly" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Monthly Income :</label>	
											</div>
										</div>	
										<div class="col-lg-6 col-md-6">
											<div class="form-group row">
												<div class="col-md-1"></div>
												<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
												<div class="col-lg-9 col-md-9 col-xs-12">
													<input type="number" class="form-control" id="fMonthly" placeholder="$" style="direction: rtl;" required>
												</div>
											</div>
										</div>	
									</div>
									<div class="row">
										<div class="col-lg-5 col-md-5">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<label for="fDaily" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Daily Income :</label>	
											</div>
										</div>	
										<div class="col-lg-6 col-md-6">
											<div class="form-group row">
												<div class="col-md-1"></div>
												<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
												<div class="col-lg-9 col-md-9 col-xs-12">
													<input type="number" class="form-control" id="fDaily" placeholder="$" style="direction: rtl;" required>
												</div>
											</div>
										</div>	
									</div>
									<div class="row">
										<div class="col-lg-5 col-md-5">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<label for="fSeasonal" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Seasonal Income :</label>	
											</div>
										</div>	
										<div class="col-lg-6 col-md-6">
											<div class="form-group row">
												<div class="col-md-1"></div>
												<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
												<div class="col-lg-9 col-md-9 col-xs-12">
													<input type="number" class="form-control" id="fSeasonal" placeholder="$" style="direction: rtl;" required>
												</div>
											</div>
										</div>	
									</div>
									<div class="row">
										<div class="col-lg-5 col-md-5">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<label for="fYearly" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Yearly Income :</label>	
											</div>
										</div>	
										<div class="col-lg-6 col-md-6">
											<div class="form-group row">
												<div class="col-md-1"></div>
												<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
												<div class="col-lg-9 col-md-9 col-xs-12">
													<input type="number" class="form-control" id="fYearly" placeholder="$" style="direction: rtl;" required>
												</div>
											</div>
										</div>	
									</div>
									<div class="row">
										<div class="col-lg-5 col-md-5">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<label for="fTotal" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Total Income (on a monthly basis) :</label>	
											</div>
										</div>	
										<div class="col-lg-6 col-md-6">
											<div class="form-group row">
												<div class="col-md-1"></div>
												<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
												<div class="col-lg-9 col-md-9 col-xs-12">
													<input type="number" class="form-control" id="fTotal" placeholder="$" style="direction: rtl;" required>
												</div>
											</div>
										</div>	
									</div>	
									<!-- list all children assistance -->
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<h5>Children's Assistance</h5>
										</div>
										<div class="col-md-6"></div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-md-5">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<label for="cMonthly" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Monthly Income :</label>	
											</div>
										</div>	
										<div class="col-lg-6 col-md-6">
											<div class="form-group row">
												<div class="col-md-1"></div>
												<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
												<div class="col-lg-9 col-md-9 col-xs-12">
													<input type="number" class="form-control" id="cMonthly" placeholder="$" style="direction: rtl;" required>
												</div>
											</div>
										</div>	
									</div>
									<div class="row">
										<div class="col-lg-5 col-md-5">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<label for="cDaily" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Daily Income :</label>	
											</div>
										</div>	
										<div class="col-lg-6 col-md-6">
											<div class="form-group row">
												<div class="col-md-1"></div>
												<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
												<div class="col-lg-9 col-md-9 col-xs-12">
													<input type="number" class="form-control" id="cDaily" placeholder="$" style="direction: rtl;" required>
												</div>
											</div>
										</div>	
									</div>
									<div class="row">
										<div class="col-lg-5 col-md-5">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<label for="cSeasonal" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Seasonal Income :</label>	
											</div>
										</div>	
										<div class="col-lg-6 col-md-6">
											<div class="form-group row">
												<div class="col-md-1"></div>
												<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
												<div class="col-lg-9 col-md-9 col-xs-12">
													<input type="number" class="form-control" id="cSeasonal" placeholder="$" style="direction: rtl;" required>
												</div>
											</div>
										</div>	
									</div>
									<div class="row">
										<div class="col-lg-5 col-md-5">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<label for="cYearly" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Yearly Income :</label>	
											</div>
										</div>	
										<div class="col-lg-6 col-md-6">
											<div class="form-group row">
												<div class="col-md-1"></div>
												<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
												<div class="col-lg-9 col-md-9 col-xs-12">
													<input type="number" class="form-control" id="cYearly" placeholder="$" style="direction: rtl;" required>
												</div>
											</div>
										</div>	
									</div>
									<div class="row">
										<div class="col-lg-5 col-md-5">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<label for="cTotal" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Total Income (on a monthly basis) :</label>	
											</div>
										</div>	
										<div class="col-lg-6 col-md-6">
											<div class="form-group row">
												<div class="col-md-1"></div>
												<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
												<div class="col-lg-9 col-md-9 col-xs-12">
													<input type="number" class="form-control" id="cTotal" placeholder="$" style="direction: rtl;" required>
												</div>
											</div>
										</div>	
									</div>	
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<h5>Globale Family's Income</h5>
										</div>
										<div class="col-md-6"></div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-md-5">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<label for="gTotal1" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Total Monthly Income :</label>	
											</div>
										</div>	
										<div class="col-lg-6 col-md-6">
											<div class="form-group row">
												<div class="col-md-1"></div>
												<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
												<div class="col-lg-9 col-md-9 col-xs-12">
													<input type="number" class="form-control" id="gTotal1" placeholder="$" style="direction: rtl;" required>
												</div>
											</div>
										</div>	
									</div>
									<div class="row">
										<div class="col-lg-5 col-md-5">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<label for="gTotal2" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Total Monthly Income per individual living in the parent's house:</label>	
											</div>
										</div>	
										<div class="col-lg-6 col-md-6">
											<div class="form-group row">
												<div class="col-md-1"></div>
												<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
												<div class="col-lg-9 col-md-9 col-xs-12">
													<input type="number" class="form-control" id="gTotal2" placeholder="$" style="direction: rtl;" required>
												</div>
											</div>
										</div>	
									</div>	
									<div class="row">
										<div class="col-md-6"></div>
										<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
											<button type="button" class="btn btn-primary float-right">Save Information</button>	
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- end form family income -->
					<!-- form family expense -->
					<div class="card">
						<div id="familyExpense">
							<h5 class="mb-0">
								<button class="btn btn-default collapsed btn-block text-left subHeading" data-toggle="collapse" data-target="#collapseFamilyExpense" aria-expanded="false" aria-controls="collapseFamilyExpense" style="height: 60px;border-bottom: 2px solid #fff; ">
									<h5 class="subCollapse">Family's Expense
										<i class="mdi mdi-chevron-down float-right subDown" style="color:#000; font-size: 30px;">
										</i>
										<i class="mdi mdi-chevron-up float-right subUp" style="color:#000; font-size: 30px;display: none;">
										</i>
									</h5>
								</button>
							</h5>
						</div>
						<div id="collapseFamilyExpense" class="collapse" aria-labelledby="familyExpense" data-parent="#subAccordion">
							<div class="card-body contentBody">
								<form action="" method="POST">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label for="" class="col-5 col-xs-12 col-form-label">Rice:</label>
												<div class="col-7 col-xs-12">
													<input type="number" class="form-control" placeholder="$" style="direction:rtl;" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="" class="col-5 col-form-label">Food:</label>
												<div class="col-7">
													<input type="number" class="form-control" placeholder="$" style="direction:rtl;" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="" class="col-5 col-form-label">Firewood-Gas-Chacoal:</label>
												<div class="col-7">
													<input type="number" class="form-control" placeholder="$" style="direction:rtl;" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="" class="col-5 col-form-label">Loan:</label>
												<div class="col-7">
													<input type="number" class="form-control" placeholder="$" style="direction:rtl;" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="" class="col-5 col-form-label">Study:</label>
												<div class="col-7">
													<input type="number" class="form-control" placeholder="$" style="direction:rtl;" required>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group row">
												<label for="" class="col-5 col-form-label">Medical:</label>
												<div class="col-7">
													<input type="number" class="form-control" placeholder="$" style="direction:rtl;" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="" class="col-5 col-form-label">Eletricities and Water:</label>
												<div class="col-7">
													<input type="number" class="form-control" placeholder="$" style="direction:rtl;" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="" class="col-5 col-form-label">Agriculture:</label>
												<div class="col-7">
													<input type="number" class="form-control" placeholder="$" style="direction:rtl;" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="" class="col-5 col-form-label">Wedding, Ceremony:</label>
												<div class="col-7">
													<input type="number" class="form-control" placeholder="$" style="direction:rtl;" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="" class="col-5 col-form-label">Other Utilities:</label>
												<div class="col-7">
													<input type="number" class="form-control" placeholder="$" style="direction:rtl;" required>
												</div>
											</div>	
										</div>
									</div>
									<!-- total expence -->
									<div class="row">
										<div class="col-md-2 col-sm-1"></div>
										<div class="col-md-8 col-sm-8">
										<div class="form-group row">
											<label for="" class="col-5 col-form-label">Total Expense:</label>
											<div class="col-7">
												<input type="number" class="form-control" placeholder="$" style="direction:rtl;" required>
											</div>
										</div>
										</div>
										
									</div>
									<br>
									<div class="row">
										<div class="col-md-4"></div>
										<div class="col-md-4"></div>
										<div class="col-md-4">
											<button type="button" class="btn btn-primary float-right">Save Information</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- end form family expense -->
					<!-- form family loans $ debt -->
					<div class="card">
						<div id="loanDebt">
							<h5 class="mb-0">
								<button class="btn btn-default collapsed btn-block text-left subHeading" data-toggle="collapse" data-target="#collapseLoanDebt" aria-expanded="false" aria-controls="collapseLoanDebt" style="height: 60px;border-bottom: 2px solid #fff; ">
									<h5 class="subCollapse">Loans & Debts
										<i class="mdi mdi-chevron-down float-right subDown" style="color:#000; font-size: 30px;">
										</i>
										<i class="mdi mdi-chevron-up float-right subUp" style="color:#000; font-size: 30px;display: none;">
										</i>
									</h5>
								</button>
							</h5>
						</div>
						<div id="collapseLoanDebt" class="collapse" aria-labelledby="loanDebt" data-parent="#subAccordion">
							<div class="card-body contentBody">
								<div class="row">
									<h5>General Information</h5>
								</div>
								<br>
								<form action="" method="POST">
									<div class="row">
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="amount" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Initial amount :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input id="amount" type="number" class="form-control" placeholder="$" style="direction:rtl;" required>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="institution" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Institution :
												</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input id="institution" type="number" class="form-control" placeholder="$" style="direction:rtl;" required>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="interest" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Interest rates :
												</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" id="interest" class="form-control" placeholder="$" style="direction:rtl;" required>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="form-group row">
												<label for="reason" class="col-lg-2 col-md-2 col-xs-12 col-form-label">Reason :</label>
												<div class="col-lg-10 col-md-10 col-xs-12">
													<input type="number" id="reason" class="form-control" placeholder="Please comment"  required>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<h5>Amount to payback</h5>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="monthly" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Monthly :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" id="monthly" class="form-control" placeholder="$" style="direction:rtl;" required>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="trimester" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Trimester :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" id="trimester" class="form-control" placeholder="$" style="direction:rtl;" required>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="semester" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Semester :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" id="semester" class="form-control" placeholder="$" style="direction:rtl;" required>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="capital" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Capital :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" id="capital" class="form-control" placeholder="$" style="direction:rtl;" required>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8"></div>
										<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
											<button type="button" class="btn btn-primary float-right">Save Information</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- end form family loan $ debt -->
					<!-- form family residence -->
					<div class="card">
						<div id="residence">
							<h5 class="mb-0">
								<button class="btn btn-default collapsed btn-block text-left subHeading" data-toggle="collapse" data-target="#collapseResidence" aria-expanded="false" aria-controls="collapseResidence" style="height: 60px;border-bottom: 2px solid #fff; ">
									<h5 class="subCollapse">Residence Status
										<i class="mdi mdi-chevron-down float-right subDown" style="color:#000; font-size: 30px;">
										</i>
										<i class="mdi mdi-chevron-up float-right subUp" style="color:#000; font-size: 30px;display: none;">
										</i>
									</h5>
								</button>
							</h5>
						</div>
						<div id="collapseResidence" class="collapse" aria-labelledby="residence" data-parent="#subAccordion">
							<div class="card-body contentBody">
								<form action="" method="POST">
									<div class="row">
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="status" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Status :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<select name="" id="" class="form-control">
														<option value="">Inherited</option>
														<option value="">Shared</option>
														<option value="">Purchased</option>
														<option value="">Rent</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="age" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Age :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<select name="age" id="" class="form-control">
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="rating" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Rating scal :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<select name="Rating_scal" id="" class="form-control">
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-4 col-md-4 col-sm-4 col-xs-12"></div>
										<div class="col-md-4 col-md-4 col-sm-4 col-xs-12"></div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<button type="button" class="btn btn-primary float-right">Save Information</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- end form family residence -->
					<!-- form family home assets -->
					<div class="card">
						<div id="homeAsset">
							<h5 class="mb-0">
								<button class="btn btn-default collapsed btn-block text-left subHeading" data-toggle="collapse" data-target="#collapseHomeAsset" aria-expanded="false" aria-controls="collapseHomeAsset" style="height: 60px;border-bottom: 2px solid #fff; ">
									<h5 class="subCollapse">Home Assets
										<i class="mdi mdi-chevron-down float-right subDown" style="color:#000; font-size: 30px;">
										</i>
										<i class="mdi mdi-chevron-up float-right subUp" style="color:#000; font-size: 30px;display: none;">
										</i>
									</h5>
								</button>
							</h5>
						</div>
						<div id="collapseHomeAsset" class="collapse" aria-labelledby="homeAsset" data-parent="#subAccordion">
							<div class="card-body contentBody">
								<h5>Applicanse</h5>
								<form action="" method="POST">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="refrigerator" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Refrigerator :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="refrigerator">
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="radio" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Radio :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control" placeholder="Quantity " name="refrigerator" id="radio">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="conditioner" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Air conditioner :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="conditioner">
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="ricecooker" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Ricecooker :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="ricecooker">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="lcdTV" class="col-lg-5 col-md-5 col-xs-12 col-form-label">LCD TV :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="lcdTV">
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="colorTV" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Color TV :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="colorTV">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="computer1" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Computer > 100$ :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="computer1">
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="computer2" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Computer > 100$ :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="computer2">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="furnished" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Furnished cabinet > 300$ :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="furnished">
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="dvdPlayer" class="col-lg-5 col-md-5 col-xs-12 col-form-label">DVD player :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="dvdPlayer">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="smartphone" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Smartphone > 100$ :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="smartphone">
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="phone" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Phone < 100$ :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="phone">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="camara1" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Camera > 100$ :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="camara1">
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="camara2" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Camera < 100$ :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="camara2">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="sofa1" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Sofa > 300$ :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="sofa1">
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="sofa2" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Sofa < 300$ :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="sofa2">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="gascooker" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Gascooker :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="gascooker">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="fruit" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Fruit blender :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="fruit">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="electrical" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Electrical cooker :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="electrical">
												</div>
											</div>
										</div>
									</div>
									<h5>Applicanse</h5>
								</form>
							</div>
						</div>
					</div>
					<!-- end form family assets -->
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="conclustion">
		<form action="" method="POST">
			<div class="row">
				<div class="col-md-12">
					<h4 style="color: #fff;">Investigator's Conclusion</h4>
					<textarea name="" id="" rows="5" class="form-control" placeholder="Please comment"></textarea>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-10 col-md-10"></div>
				<div class="col-lg-2 col-md-2">
					<button type="button" class="btn btn-primary float-right">Save Information</button>
				</div>
			</div>
		</form>	
	</div>
</div>
<script>
	$(document).ready(function(){
		$( ".formHeading" ).click(function() {
			$(".down",this).toggle();
			$(".up",this).toggle();

		});
		$( ".subHeading" ).click(function() {
			$(".subDown",this).toggle();
			$(".subUp",this).toggle();

		});
	});
</script>
<!-- end form collapsed -->
