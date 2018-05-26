<style>
body{
	background-color: #fff;
	position: relative; 
	font-family: verdana;
}
</style>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<!-- form header -->
<br>
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
			<img class="text-center" src="<?php echo base_url() ?>assets/images/background/neourng.jpg" style="width: 45%; margin-left: 27%;"/><br>
			<p class="text-center">Nuon neourng</p>
		</div>	
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
	</div>
	<br>
	<div class="form-group row">
		<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12"></div>
		<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
			<label for="mEdu" class="col-form-label">Global grade :</label>
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
						<h4>Student information
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
						<h5>General information</h5>
					</div><br>
					<form action="" method="POST">
						<div class="row">
							<div class="col-lg-5 col-md-5">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="gender" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Firstname :</label>
									<div class="col-lg-6 col-md-6 col-xs-12">
										<input type="text" class="form-control" placeholder="Firstname">
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-lg-2 col-md-2"></div>
									<label for="gender" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Lastname :</label>
									<div class="col-lg-5 col-md-5 col-xs-12">
										<input type="text" class="form-control" placeholder="Lastname">
									</div>
								</div>
							</div>	
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-5">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="gender" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Gender :</label>
									<div class="col-lg-6 col-md-6 col-xs-12">
										<select class="form-control" name="gender" id="gender">
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-lg-2 col-md-2"></div>
									<label for="age" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Age :</label>
									<div class="col-lg-5 col-md-5 col-xs-12">
										<input type="number" class="form-control" id="age" placeholder="Your Age " required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-5">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="province" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Province :</label>
									<div class="col-lg-6 col-md-6 col-xs-12">
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
								</div>
							</div>
							<div class="col-lg-7 col-md-7"></div>
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-5">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="ngo" class="col-lg-5 col-md-5 col-xs-12 col-form-label">NGO :</label>
									<div class="col-lg-6 col-md-6 col-xs-12">
										<select class="form-control" id="ngo" name="ngo">
											<option value="PSE">PSE</option>
											<option value="KBFC">KBFC</option>
											<option value="KBFC">EDM</option>
											<option value="Other">Other</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-1 col-md-1">
							<?php if($this->session->loggedIn === TRUE) { ?>
							<?php $role_user =$this->session->nameRole;?>
							<?php if ($role_user == 1): ?>
								<div class="mdi mdi-pencil text-secondary" title="Edit NGO" data-toggle="modal" data-target="#theModal"></div>
							<?php endif ?>
							</div>		
							<div class="col-lg-6 col-md-6">
								<div class="form-group row" id="other">
									<!-- <div class="col-md-2"></div>	 -->
									<label for="ngoOther" class="col-lg-3 col-md-3 col-xs-12 col-form-label" style="margin-left: 12px;">Other :</label>
									<div class="col-lg-10 col-md-10 col-xs-12">
										<input type="text" class="form-control" id="ngoOther" placeholder="If other, please specify " required style="margin: -33px 0px 0px 111px;width: 380px;">
									</div>
								</div>
							</div>
							<div class="col-lg-1 col-md-1"></div>
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-5">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="health" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Health status :</label>
									<div class="col-lg-6 col-md-6 col-xs-12">
										<select class="form-control" id="health">
											<option value="#">Healthy</option>
											<option value="#">Other</option>
											
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-md-2"></div>
									<label for="healthOther" class="col-lg-2 col-md-2 col-xs-12 col-form-label">Other :</label>
									<div class="col-lg-8 col-md-8 col-xs-12">
										<input type="text" class="form-control" id="healthOther" placeholder="If some health issuses, please specify" required style="margin-left: -4px;">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-5">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="rankClass" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Rank in class :</label>
									<div class="col-lg-6 col-md-6 col-xs-12">
										<input type="text" class="form-control" id="rankClass" placeholder="Ex: 10/33" required>
									</div>
								</div>
							</div>		
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-5">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="activityActivity" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Extracuricular activity 
									& achievement :</label>	
								</div>
							</div>
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-md-2"></div>
									<label for="healthOther" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
									<div class="col-lg-8 col-md-8 col-xs-12">
										<input type="text" class="form-control" id="healthOther" placeholder="Please comment" required style="margin-left: -4px;">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><h5>Motivation</h5></div>
						<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12"></div><br>
						<div class="row">
							<div class="col-lg-5 col-md-5">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="gender" class="col-lg-5 col-md-5 col-xs-12 col-form-label">PNC choice rank :</label>
									<div class="col-lg-6 col-md-6 col-xs-12">
										<select class="form-control" id="pncChoice">
											<option value="#">1</option>
											<option value="#">2</option>
											<option value="#">3</option>
											<option value="#">4</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-lg-2 col-md-2"></div>
									<label for="gender" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Responsibility & maturity :</label>
									<div class="col-lg-5 col-md-5 col-xs-12">
										<input type="text" class="form-control" id="responsibility" placeholder="Ex: 18/20" required style="">
									</div>
								</div>
							</div>	
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-5">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="gender" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Motivation for PNC</label>
									<div class="col-lg-6 col-md-6 col-xs-12">
										<input type="text" class="form-control" id="motivation" placeholder="Ex: 18/20" required>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-lg-2 col-md-2"></div>
									<label for="gender" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Communication :</label>
									<div class="col-lg-5 col-md-5 col-xs-12">
										<input type="text" class="form-control" id="motivation" placeholder="Ex: 18/20" required>
									</div>
								</div>
							</div>	
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-5">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="gender" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Other scholarship</label>
									<div class="col-lg-6 col-md-6 col-xs-12">
										<input type="text" class="form-control" id="scholarship" placeholder="Other" required>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-lg-2 col-md-2"></div>
									<label for="gender" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Choice rank :</label>
									<div class="col-lg-5 col-md-5 col-xs-12">
										<select class="form-control" name="rank" id="choiceRank">
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
							<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12"></div>
							<div class="col-lg-4 col-md-4 col-sm-9 col-xs-12">
								<a href="#" data-toggle="modal" data-target="#myModal">
									<h6>
										<i class="mdi mdi-plus" style="color:#000;font-size: 20px;">
										</i>Add other scholarship
									</h6>
								</a>
							</div>
						</div>
						<!-- pop up -->
						
						<!-- / close pop up -->
						<div class="row">
							<div class="col-lg-5 col-md-5">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="activityActivity" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Commitment of the student :</label>	
								</div>
							</div>
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-md-2"></div>
									<label for="healthOther" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
									<div class="col-lg-8 col-md-8 col-xs-12">
										<input type="text" class="form-control" id="studentCommit" placeholder="Please comment" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-5">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="activityActivity" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Commitment of the parents :</label>	
								</div>
							</div>
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-md-2"></div>
									<label for="healthOther" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
									<div class="col-lg-8 col-md-8 col-xs-12">
										<input type="text" class="form-control" id="parentsCommit" placeholder="Please comment" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"></div>
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<button type="button" class="btn btn-primary float-right">Save information</button><br><br>	
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
						<h4>Family information
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
								<button class="btn btn-default collapsed btn-block text-left subHeading" data-toggle="collapse" data-target="#collapseFamilyPro" aria-expanded="false" aria-controls="collapseFamilyPro" style="height: 60px;border-bottom: 2px solid #fff;background-color: #f8f9fa; ">
									<h5 class="subCollapse">Family profile
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
										<div class="col-lg-5 col-md-5 col-sm-4">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-5 col-md-4 col-sm-4">
													<label for="fAge" class="col-form-label">Age :</label>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-8">
													<input type="number" name="fAge" id="fAge" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-lg-7 col-md-7"></div>
										
								</div>
								<div class="row">
									<div class="col-lg-5 col-md-5 col-sm-8">
										<div class="form-group row">
											<div class="col-lg-1 col-md-1"></div>
											<div class="col-lg-5 col-md-5 col-sm-4">
												<label for="fOccupation" class="col-form-label">Occupation :</label>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-8">
													<select class="form-control" name="Occupation" 
													id="fOccupation">
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
									<div class="col-lg-1 col-md-1"></div>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="specify" id="" class="form-control" placeholder="If other, please specify">
									</div>
								</div>
								<div class="row">
									<div class="col-lg-5 col-md-5 col-sm-8">
										<div class="form-group row">
											<div class="col-lg-1 col-md-1"></div>
											<div class="col-lg-5 col-md-5 col-sm-4">
												<label for="fOccupation" class="col-form-label">Health status :</label>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-8">
												<select name="fHealth" id="fHealth" class="form-control">
													<option value="Healthy">Healthy</option>
													<option value="issues">Other</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-lg-1 col-md-1"></div>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="healthSpecify" id="" class="form-control" placeholder="If health issues, please specify" />
									</div>
								</div>
								<div class="row">
									<div class="col-md-5 col-sm-12">
										<div class="form-group row">
											<div class="col-lg-1 col-md-1"></div>
											<div class="col-md-5 col-sm-4">
												<label for="fEdu" class="col-form-label">Education :</label>
											</div>
											
											<div class="col-md-6 col-sm-4">
												<select class="form-control" name="Education" 
												id="fEdu">
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
										<div class="col-lg-5 col-md-5 col-sm-4">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-5 col-md-4 col-sm-4">
													<label for="fAge" class="col-form-label">Age :</label>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-8">
													<input type="number" name="fAge" id="fAge" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-lg-7 col-md-7"></div>
										
								</div>
								<div class="row">
									<div class="col-lg-5 col-md-5 col-sm-8">
										<div class="form-group row">
											<div class="col-lg-1 col-md-1"></div>
											<div class="col-lg-5 col-md-5 col-sm-4">
												<label for="fOccupation" class="col-form-label">Occupation :</label>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-8">
													<select class="form-control" name="Occupation" 
													id="fOccupation">
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
									<div class="col-lg-1 col-md-1"></div>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="specify" id="" class="form-control" placeholder="If other, please specify">
									</div>
								</div>
								<div class="row">
									<div class="col-lg-5 col-md-5 col-sm-8">
										<div class="form-group row">
											<div class="col-lg-1 col-md-1"></div>
											<div class="col-lg-5 col-md-5 col-sm-4">
												<label for="fOccupation" class="col-form-label">Health status :</label>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-8">
												<select name="fHealth" id="fHealth" class="form-control">
													<option value="Healthy">Healthy</option>
													<option value="issues">Other</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-lg-1 col-md-1"></div>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="healthSpecify" id="" class="form-control" placeholder="If health issues, please specify" />
									</div>
								</div>
								<div class="row">
									<div class="col-md-5 col-sm-12">
										<div class="form-group row">
											<div class="col-lg-1 col-md-1"></div>
											<div class="col-md-5 col-sm-4">
												<label for="fEdu" class="col-form-label">Education :</label>
											</div>
											
											<div class="col-md-6 col-sm-4">
												<select class="form-control" name="Education" 
												id="fEdu">
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
									<label for="numSiblings" class="col-form-label">Number of siblings :</label>
								</div>
								<div class="col-md-6">
									<select class="form-control" name="siblings" id="numSiblings">
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
									<label for="married" class="col-form-label">Married :</label>
								</div>
								<div class="col-md-6">
									<select class="form-control" name="Married" id="married">
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
									<label for="separated" class="col-form-label">Separated :</label>
								</div>
								<div class="col-md-6">
									<select class="form-control" name="Separated" 
									id="separated">
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
								<label for="liveInHouse" class="col-form-label">Living in the family's house (including parents) :</label>
							</div>
							<div class="col-md-3">
								<select class="form-control" name="liveInHouse" 
								id="liveInHouse">
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
							<label for="studentRank" class="col-form-label">Student rank :</label>
						</div>
						<div class="col-md-6">
							<select class="form-control" name="rank" 
							id="studentRank">
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
			<div class="col-md-9 col-sm-9"></div>
			<div class="col-md-3 col-sm-3">
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
			<button class="btn btn-default collapsed  btn-block text-left subHeading" data-toggle="collapse" data-target="#collapseFamilyIncome" aria-expanded="false" aria-controls="collapseFamilyIncome" style="height: 60px;border-bottom: 2px solid #fff; background-color: #f8f9fa;">
				<h5 class="subCollapse">Family's income sources
					<i class="mdi mdi-chevron-down float-right subDown" style="color:#000; font-size: 30px;">
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
						<h5>Parents's income</h5>
					</div>
					<div class="col-md-4"></div>
				</div>
				<div class="row">
					<div class="col-lg-5 col-md-5">
						<div class="form-group row">
							<div class="col-lg-1 col-md-1"></div>
							<label for="fMonthly" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Monthly income :</label>	
						</div>
					</div>	
					<div class="col-lg-6 col-md-6">
						<div class="form-group row">
							<div class="col-md-1"></div>
							<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
							<div class="col-lg-9 col-md-9 col-xs-12">
								<input type="number" class="form-control fincome" id="fMonthly" placeholder="$" style="direction: rtl;" required>
							</div>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-lg-5 col-md-5">
						<div class="form-group row">
							<div class="col-lg-1 col-md-1"></div>
							<label for="fDaily" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Daily income :</label>	
						</div>
					</div>	
					<div class="col-lg-6 col-md-6">
						<div class="form-group row">
							<div class="col-md-1"></div>
							<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
							<div class="col-lg-9 col-md-9 col-xs-12">
								<input type="number" class="form-control fincome" id="fDaily" placeholder="$" style="direction: rtl;" required>
							</div>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-lg-5 col-md-5">
						<div class="form-group row">
							<div class="col-lg-1 col-md-1"></div>
							<label for="fSeasonal" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Seasonal income :</label>	
						</div>
					</div>	
					<div class="col-lg-6 col-md-6">
						<div class="form-group row">
							<div class="col-md-1"></div>
							<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
							<div class="col-lg-9 col-md-9 col-xs-12">
								<input type="number" class="form-control fincome" id="fSeasonal" placeholder="$" style="direction: rtl;" required>
							</div>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-lg-5 col-md-5">
						<div class="form-group row">
							<div class="col-lg-1 col-md-1"></div>
							<label for="fYearly" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Yearly income :</label>	
						</div>
					</div>	
					<div class="col-lg-6 col-md-6">
						<div class="form-group row">
							<div class="col-md-1"></div>
							<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
							<div class="col-lg-9 col-md-9 col-xs-12">
								<input type="number" class="form-control fincome" id="fYearly" placeholder="$" style="direction: rtl;" required>
							</div>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-lg-5 col-md-5">
						<div class="form-group row">
							<div class="col-lg-1 col-md-1"></div>
							<label for="fTotal" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Total income (on a monthly basis) :</label>	
						</div>
					</div>	
					<div class="col-lg-6 col-md-6">
						<div class="form-group row">
							<div class="col-md-1"></div>
							<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
							<div class="col-lg-9 col-md-9 col-xs-12">
								<input type="number" class="form-control" id="fTotal" style="direction: rtl;" required>
							</div>
						</div>
					</div>	
				</div>	
				<!-- list all children assistance -->
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<h5>Children's assistance</h5>
					</div>
					<div class="col-md-6"></div>
				</div>
				<div class="row">
					<div class="col-lg-5 col-md-5">
						<div class="form-group row">
							<div class="col-lg-1 col-md-1"></div>
							<label for="cMonthly" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Monthly income :</label>	
						</div>
					</div>	
					<div class="col-lg-6 col-md-6">
						<div class="form-group row">
							<div class="col-md-1"></div>
							<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
							<div class="col-lg-9 col-md-9 col-xs-12">
								<input type="number" class="form-control cIncome" id="cMonthly" placeholder="$" style="direction: rtl;" required>
							</div>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-lg-5 col-md-5">
						<div class="form-group row">
							<div class="col-lg-1 col-md-1"></div>
							<label for="cDaily" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Daily income :</label>	
						</div>
					</div>	
					<div class="col-lg-6 col-md-6">
						<div class="form-group row">
							<div class="col-md-1"></div>
							<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
							<div class="col-lg-9 col-md-9 col-xs-12">
								<input type="number" class="form-control cIncome" id="cDaily" placeholder="$" style="direction: rtl;" required>
							</div>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-lg-5 col-md-5">
						<div class="form-group row">
							<div class="col-lg-1 col-md-1"></div>
							<label for="cSeasonal" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Seasonal income :</label>	
						</div>
					</div>	
					<div class="col-lg-6 col-md-6">
						<div class="form-group row">
							<div class="col-md-1"></div>
							<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
							<div class="col-lg-9 col-md-9 col-xs-12">
								<input type="number" class="form-control cIncome" id="cSeasonal" placeholder="$" style="direction: rtl;" required>
							</div>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-lg-5 col-md-5">
						<div class="form-group row">
							<div class="col-lg-1 col-md-1"></div>
							<label for="cYearly" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Yearly income :</label>	
						</div>
					</div>	
					<div class="col-lg-6 col-md-6">
						<div class="form-group row">
							<div class="col-md-1"></div>
							<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
							<div class="col-lg-9 col-md-9 col-xs-12">
								<input type="number" class="form-control cIncome" id="cYearly" placeholder="$" style="direction: rtl;" required>
							</div>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-lg-5 col-md-5">
						<div class="form-group row">
							<div class="col-lg-1 col-md-1"></div>
							<label for="cTotal" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Total income (on a monthly basis) :</label>	
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
						<h5>Global family's income (parents' income + childrend's assistance)</h5>
					</div>
					<div class="col-md-6"></div>
				</div>
				<div class="row">
					<div class="col-lg-5 col-md-5">
						<div class="form-group row">
							<div class="col-lg-1 col-md-1"></div>
							<label for="gTotal1" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Total monthly income :</label>	
						</div>
					</div>	
					<div class="col-lg-6 col-md-6">
						<div class="form-group row">
							<div class="col-md-1"></div>
							<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
							<div class="col-lg-9 col-md-9 col-xs-12">
								<input type="number" class="form-control gincome" id="gTotal1" placeholder="$" style="direction: rtl;" required>
							</div>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-lg-5 col-md-5">
						<div class="form-group row">
							<div class="col-lg-1 col-md-1"></div>
							<label for="gTotal2" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Total monthly income per individual living in the parent's house:</label>	
						</div>
					</div>	
					<div class="col-lg-6 col-md-6">
						<div class="form-group row">
							<div class="col-md-1"></div>
							<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
							<div class="col-lg-9 col-md-9 col-xs-12">
								<input type="number" class="form-control gincomein" id="gTotal2" placeholder="$" style="direction: rtl;" required>
							</div>
						</div>
					</div>	
				</div>	
				<div class="row">
					<div class="col-md-6"></div>
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
						<button type="button" class="btn btn-primary float-right">Save information</button>	
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
			<button class="btn btn-default collapsed btn-block text-left subHeading" data-toggle="collapse" data-target="#collapseFamilyExpense" aria-expanded="false" aria-controls="collapseFamilyExpense" style="height: 60px;border-bottom: 2px solid #fff;background-color: #f8f9fa; ">
				<h5 class="subCollapse">Family's expense sources
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
							<label for="rice" class="col-5 col-xs-12 col-form-label">Rice:</label>
							<div class="col-7 col-xs-12">
								<input type="number" class="form-control fExpense" id="rice" placeholder="$" style="direction:rtl;" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="food" class="col-5 col-form-label">Food:</label>
							<div class="col-7">
								<input type="number" class="form-control fExpense" id="food" placeholder="$" style="direction:rtl;" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="firewood" class="col-5 col-form-label">Firewood-Gas-Chacoal:</label>
							<div class="col-7">
								<input type="number" class="form-control fExpense" id="firewood" placeholder="$" style="direction:rtl;" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="loan" class="col-5 col-form-label">Loan:</label>
							<div class="col-7">
								<input type="number" class="form-control fExpense" id="loan" placeholder="$" style="direction:rtl;" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="study" class="col-5 col-form-label">Study:</label>
							<div class="col-7">
								<input type="number" class="form-control fExpense" id="study" placeholder="$" style="direction:rtl;" required>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">
							<label for="medical" class="col-5 col-form-label">Medical:</label>
							<div class="col-7">
								<input type="number" class="form-control fExpense" id="medical" placeholder="$" style="direction:rtl;" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="electricity" class="col-5 col-form-label">Electricity & Water:</label>
							<div class="col-7">
								<input type="number" class="form-control fExpense" id="electricity" placeholder="$" style="direction:rtl;" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="agriculture" class="col-5 col-form-label">Agriculture:</label>
							<div class="col-7">
								<input type="number" class="form-control fExpense" id="agriculture" placeholder="$" style="direction:rtl;" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="wedding" class="col-5 col-form-label">Wedding 
							& Ceremony:</label>
							<div class="col-7">
								<input type="number" class="form-control fExpense" id="wedding" placeholder="$" style="direction:rtl;" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="otherUtilities" class="col-5 col-form-label">Other utilities:</label>
							<div class="col-7">
								<input type="number" class="form-control fExpense" id="otherUtilities" placeholder="$" style="direction:rtl;" required>
							</div>
						</div>	
					</div>
				</div>
				<!-- total expence -->
				<div class="row">
					<div class="col-md-2 col-sm-1"></div>
					<div class="col-md-8 col-sm-8">
						<div class="form-group row">
							<label for="totalExpense" class="col-5 col-form-label">Total expense:</label>
							<div class="col-7">
								<input type="number" class="form-control" id="totalExpense" placeholder="$" style="direction:rtl;" required>
							</div>
						</div>
					</div>

				</div>
				<br>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<button type="button" class="btn btn-primary float-right">Save information</button>
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
			<button class="btn btn-default collapsed btn-block text-left subHeading" data-toggle="collapse" data-target="#collapseLoanDebt" aria-expanded="false" aria-controls="collapseLoanDebt" style="height: 60px;border-bottom: 2px solid #fff;background-color: #f8f9fa; ">
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
				<h5>General information</h5>
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
								<input type="text" id="reason" class="form-control" placeholder="Please comment"  required>
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
						<button type="button" class="btn btn-primary float-right">Save information</button>
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
			<button class="btn btn-default collapsed btn-block text-left subHeading" data-toggle="collapse" data-target="#collapseResidence" aria-expanded="false" aria-controls="collapseResidence" style="height: 60px;border-bottom: 2px solid #fff;background-color: #f8f9fa; ">
				<h5 class="subCollapse">Residence status
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
								<select name="" id="status" class="form-control">
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
							<label for="residenceAge" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Age :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<select name="age" id="residenceAge" class="form-control">
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
							<label for="rating" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Rating scale :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<select name="Rating_scal" id="rating" class="form-control">
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
						<button type="button" class="btn btn-primary float-right">Save information</button>
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
			<button class="btn btn-default collapsed btn-block text-left subHeading" data-toggle="collapse" data-target="#collapseHomeAsset" aria-expanded="false" aria-controls="collapseHomeAsset" style="height: 60px;border-bottom: 2px solid #fff;background-color: #f8f9fa; ">
				<h5 class="subCollapse">Home assets
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
			<h5>Appliances</h5>
			<form action="" method="POST">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<label for="">Coef x5</label>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<label for="">Coef x3</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="refrigerator" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Refrigerator :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="refrigerator" style="direction: rtl;" required>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="radio" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Radio :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control" placeholder="Quantity " name="refrigerator" id="radio" style="direction: rtl;" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="conditioner" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Air conditioner :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="conditioner" style="direction: rtl;" required>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="ricecooker" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Ricecooker :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="ricecooker" style="direction: rtl;" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="lcdTV" class="col-lg-5 col-md-5 col-xs-12 col-form-label">LCD TV :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="lcdTV" style="direction: rtl;" required>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="colorTV" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Color TV :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="colorTV" style="direction: rtl;" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="computer1" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Computer > 100$ :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="computer1" style="direction: rtl;" required>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="computer2" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Computer > 100$ :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="computer2" style="direction: rtl;" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="furnished" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Furnished cabinet > 300$ :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="furnished" style="direction: rtl;" required>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="dvdPlayer" class="col-lg-5 col-md-5 col-xs-12 col-form-label">DVD player :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="dvdPlayer" style="direction: rtl;" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="smartphone" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Smartphone > 100$ :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="smartphone" style="direction: rtl;" required>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="phone" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Phone < 100$ :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="phone" style="direction: rtl;" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="camara1" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Camera > 100$ :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="camara1" style="direction: rtl;" required>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="camara2" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Camera < 100$ :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="camara2" style="direction: rtl;" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="sofa1" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Sofa > 300$ :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="sofa1" style="direction: rtl;" required>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="sofa2" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Sofa < 300$ :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="sofa2" style="direction: rtl;" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="gascooker" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Gascooker :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="gascooker" style="direction: rtl;" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="fruit" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Fruit blender :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="fruit" style="direction: rtl;" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="electrical" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Electrical cooker :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="electrical" style="direction: rtl;" required>
							</div>
						</div>
					</div>
				</div>
				<!-- start vehicles -->
				<h3>Vehicles</h3>
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<p>Coef x5</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6"></div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-md-6">
						<div class="row">
							<!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div> -->
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group row">
									<label for="motobike" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Motobike > 500 :</label>
									<div class="col-lg-7 col-md-7 col-xs-12">
										<input type="number" class="form-control" placeholder="Quantity" name="motobike" id="motobike" style="direction: rtl;" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div> -->
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group row">
									<label for="farming" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Farming machine :</label>
									<div class="col-lg-7 col-md-7 col-xs-12">
										<input type="number" class="form-control" placeholder="Quantity" name="farming" id="farming" style="direction: rtl;" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div> -->
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group row">
									<label for="car" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Car / Truck :</label>
									<div class="col-lg-7 col-md-7 col-xs-12">
										<input type="number" class="form-control" placeholder="Quantity" name="car" id="car" style="direction: rtl;" required>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-md-6">
						<textarea name="" id="" cols="66" rows="6" class="form-control" placeholder="Please specify if you have any comment" style="line-height: 22px;"></textarea>
					</div>
				</div>
				<!-- end of vehicles -->
				<h3>Animal</h3>
				<!-- start animal -->
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<p>Coef x5</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6"></div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-md-6">
						<div class="row">
							<!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div> -->
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group row">
									<label for="cow" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Cow :</label>
									<div class="col-lg-7 col-md-7 col-xs-12">
										<input type="number" class="form-control" placeholder="Quantity" name="cow" id="cow" style="direction: rtl;" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div> -->
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group row">
									<label for="buffaloe" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Buffaloe :</label>
									<div class="col-lg-7 col-md-7 col-xs-12">
										<input type="number" class="form-control" placeholder="Quantity" name="buffaloe" id="buffaloe" style="direction: rtl;" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div> -->
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group row">
									<label for="pig" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Pig :</label>
									<div class="col-lg-7 col-md-7 col-xs-12">
										<input type="number" class="form-control" placeholder="Quantity" name="pig" id="pig" style="direction: rtl;" required>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-md-6">
						<textarea name="" id="" cols="66" rows="6" class="form-control" placeholder="Please specify if you have any comment" style="line-height: 22px;"></textarea>
					</div>
				</div>
				<!-- end of animal -->
				<h3>Farm</h3>
				<p>If farm size > 10 000 m <sup>2</sup> (= 1 hectare), it counts as coeff 5;3 otherwise</p>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="row">
							<!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div> -->
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group row">
									<label for="size" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Size :</label>
									<div class="col-lg-7 col-md-7 col-xs-12">
										<input type="number" class="form-control" placeholder="Quantity" name="pig" id="size" style="direction: rtl;" required>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<textarea name="" id="" cols="66" rows="1" class="form-control" placeholder="Please specify if you have any comment"></textarea>
					</div>
				</div>
				<!-- start of resutl -->
				<h3>Result</h3>
				<!-- <p>If farm size > 10 000 m <sup>2</sup> (= 1 hectare), it counts as coeff 5;3 otherwise</p> -->
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="row">
							<!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div> -->
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group row">
									<div  class="col-lg-5 col-md-5 col-xs-12">
										<div class="row">
											<div class="col-md-12">
												<label for="sumQuantity5"col-form-label" style="line-height: 2.5;">Total x5 coef :</label>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<p style="line-height: 0.5;">(Sum of quantities x 5)</p>
											</div>
										</div>
									</div>
									<div class="col-lg-7 col-md-7 col-xs-12">
										<input type="number" class="form-control" name="sumQuantity5" id="sumQuantity5" style="direction: rtl;" required style="direction: rtl;" required>
									</div>
									<!-- <div class="col-lg-2 col-md-1"></div> -->
								</div>
												<!-- 	<div class="row">
														
												</div> -->
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div> -->
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="form-group row">
													<div  class="col-lg-5 col-md-5 col-xs-12">
														<div class="row">
															<div class="col-md-12">
																<label for="sumQuantity3"col-form-label" style="line-height: 2.5;">Total x3 coef :</label>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12">
																<p style="line-height: 0.5;">(Sum of quantities x 3)</p>
															</div>
														</div>
													</div>
													<div class="col-lg-7 col-md-7 col-xs-12">
														<input type="number" class="form-control" name="sumQuantity3" id="sumQuantity3" style="direction: rtl;" required>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<br>
								<!-- asset global -->
								<div class="row">	
									<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
									<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
											
											<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
												<div class="row">
													<!-- <div class="form-group"> -->
														<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
															<label for="globalAsset" style="line-height: 2.5;"><b>Asset global total: </b></label>
														</div>
														<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
															<input class="form-control" type="number" placeholder="$" name="globalAsset" id="globalAsset" style="direction: rtl;">
														</div>
														<!-- </div> -->
													</div>
												</div>
											<!-- <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
												<label for="globalAsset"><b>Asset global total: </b></label>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
													<input class="form-control" type="number" placeholder="$" name="globalAsset" id="globalAsset">
												</div>-->
												<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div> 
											</div>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
									</div>
									<br>
									<!-- end of asset global -->
									<!-- start poverty -->
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="row">
												<div class="col-md-2 col-sm-12"></div>
												<div class="col-md-6 col-sm-12" style="line-height: 2.5;">
													<label for="certificate">Poverty certificate</label>
												</div>
												<div class="col-md-4 col-sm-12">
													<select class="form-control" name="certificate" id="certificate">
														<option value="Yes">Yes</option>
														<option value="No">Other</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="row">
												<div class="col-md-6 col-sm-12">
													<label for="specifyLevel" style="line-height: 2.5;">If yes, please specify the level:</label>
												</div>
												<div class="col-md-3 col-sm-12">
													<select class="form-control" name="specifyLevel" id="specifyLevel">
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
													</select>
												</div>
												<div class="col-md-2 col-sm-12"></div>
											</div>
										</div>
									</div>
									<!-- end of poverty -->
									<!-- button save information for home asset -->
									<br>
									<div class="row">
										<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"></div>
										<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
											<button class="btn btn-primary btn-block">Save information</button>
										</div>
									</div>
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
					<h4 style="color: #000;">Investigator's conclusion</h4>
					<textarea name="" id="" rows="5" class="form-control" placeholder="Please comment"></textarea>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-10 col-md-10"></div>
				<div class="col-lg-2 col-md-2">
					<button type="button" class="btn btn-primary float-right">Save information</button>
				</div>
			</div>
		</form>	
	</div>
</div>
<div class="container">

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add New Scholarship</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <input type="text" class="form-control" placeholder="new scholarship here">
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" data-dismiss="modal">
          	<i class="mdi mdi-plus"></i>&nbsp;Add</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<link href="<?php echo base_url();?>assets/DataTable/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
 <script type="text/javascript" src="<?php echo base_url();?>assets/DataTable//DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/DataTable//DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>

	$(document).ready(function(){
		$('#students').dataTable({
        stateSave: true,
    	});

		$( ".formHeading" ).click(function() {
			$(".down",this).toggle();
			$(".up",this).toggle();
		});
		$( ".subHeading" ).click(function() {
			$(".subDown",this).toggle();
			$(".subUp",this).toggle();

		});
		// function calculat family income 
		$('.form-group').on('input','.fincome',function(){
				var fTotalSum;
				var fMonthly = $('#fMonthly').val();
				var fDaily = $('#fDaily').val();
				var fSeasonal= $('#fSeasonal').val();
				var fYearly= $('#fYearly').val(); 
				fTotalSum =Number(fMonthly)+(Number(fDaily)*30)+(Number(fSeasonal)+Number(fYearly))/12;
				$('#fTotal').val(fTotalSum);
			});

		$('.form-group').on('input','.cIncome',function(){
				var cTotalSum;
				var cMonthly = $('#cMonthly').val();
				var cDaily = $('#cDaily').val();
				var cSeasonal= $('#cSeasonal').val();
				var cYearly= $('#cYearly').val();
				cTotalSum = Number(cMonthly)+(Number(cDaily)*30)+(Number(cSeasonal)+ Number(cYearly))/12;
				$('#cTotal').val(cTotalSum);
			});
		$('.form-group').on('input','.gincome',function(){
				var gTotal;
				var fTotalSum=$('#fTotal').val();
				var cTotalSum=$('#cTotal').val();
				gTotal=Number(fTotalSum)+Number(cTotalSum);
				$('#gTotal1').val(gTotal);
		});
		$('.form-group').on('input','.gincomein',function(){
				var gTotalIn;
				var fTotalSum = $('#fTotal').val();
				var cTotalSum = $('#cTotal').val();
				gTotalIn = Number(fTotalSum) / Number(cTotalSum);
				$('#gTotal2').val(gTotalIn);
		});

		// function calculat family expense
		$('.form-group').on('input','.fExpense',function(){
				var totalExepnseVal = 0;
				$('.form-group .fExpense').each(function(){
					var inputExVal = $(this).val();
					if($.isNumeric(inputExVal)){
						totalExepnseVal += parseFloat(inputExVal);
					}
				});
				$('#totalExpense').val(totalExepnseVal);
			});
	});
</script>
<!-- end form collapsed -->
	<?php } ?>