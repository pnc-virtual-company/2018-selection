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
	  	<div class="alert alert-success" style="display: none;"></div>
	<div class="row">
	  <div class="col-lg-5 col-md-5 col-sm-3 col-xs-3">
	  </div>
	  <div class="col-lg-7 col-md-7 col-sm-9 col-xs-9">
	   	<img id="blah" src="http://placehold.it/180" alt="your image" class="img-responsive" style="width: 25%;">
	   	<br>
	   	<br>
	   	<div class="row">
	    	<input type='file' onchange="readURL(this);" />
	  	</div>
	  </div> 
	 </div>
	<br>
	
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
					<button class="btn btn-primary collapsed btn-block text-left formHeading" id="FirstSection" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="height: 60px;">
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
					<form id="canForm" action="" method="post">
						<div class="row">
							<div class="col-lg-5 col-md-5">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="gender" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Global grade :</label>
									<div class="col-lg-6 col-md-6 col-xs-12">
										<select class="form-control" name="globalGrade">
											<option value="A+">A+</option>
											<option value="A">A</option>
											<option value="A">A-</option>
											<option value="B+">B+</option>
											<option value="B-">B</option>
											<option value="Failed">Failed</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-5">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="firstname" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Firstname :</label>
									<div class="col-lg-6 col-md-6 col-xs-12">
										<input type="text" class="form-control" name="firstname" placeholder="First name">
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-lg-2 col-md-2"></div>
									<label for="lastname" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Lastname :</label>
									<div class="col-lg-5 col-md-5 col-xs-12">
										<input type="text" class="form-control" name="lastname" placeholder="Last name">
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
										<input type="number" class="form-control" name="age" id="age" placeholder="Age" required>
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
										<select class="form-control" name="province" id="province">
										<?php foreach ($provinces as $province): ?>
										    <option value="<?php echo $province->pro_id ?>"><?php echo $province->pro_name?></option>
										<?php endforeach ?>
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
											<?php foreach ($ngoes as $ngo): ?>
											    <option value="<?php echo $ngo->ngo_id ?>"><?php echo $ngo->ngo_name?></option>
											<?php endforeach ?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-1 col-md-1">
							<?php if($this->session->loggedIn === TRUE) { ?>
								<?php $role =$this->session->nameRole;?>
								<?php if ($role == 1): ?>
									<a data-toggle="modal" data-target="#theModal">
										<i class="mdi mdi-pencil" title="Edit NGO"></i>
									</a>	
								<?php endif ?>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group row">
									<label for="ngoOther" class="col-lg-3 col-md-3 col-xs-12 col-form-label" style="margin-left: 3%;">Other :</label>
									<div class="col-lg-6 col-md-7 col-xs-12">
										<input type="text" class="form-control" id="ngoOther" placeholder="If other, please specify " style="margin-left: -32px;width: 161%;">
									</div>
								</div>
							</div>
							<div class="col-lg-1 col-md-1"></div>
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-5">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="healths" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Health status :</label>
									<div class="col-lg-6 col-md-6 col-xs-12">
										<select class="form-control" name="health" id="healths">
											<option value="Healthy">Healthy</option>
											<option value="Other">Other</option>
											
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-md-2"></div>
									<label for="healthOther" class="col-lg-2 col-md-2 col-xs-12 col-form-label">Other :</label>
									<div class="col-lg-8 col-md-8 col-xs-12">
										<input type="text" class="form-control" id="healthOther" name="healthComment" placeholder="If some health issuses, please specify" style="margin-left: -4px;">
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
										<input type="number" class="form-control" id="rankClass" name="rankClass" placeholder="Ex: 10/33" required>
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
									<label for="achivement" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
									<div class="col-lg-8 col-md-8 col-xs-12">
										<input type="text" class="form-control" name="achivement" id="achivement" placeholder="Please comment" required style="margin-left: -4px;">
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
									<label for="pncChoice" class="col-lg-5 col-md-5 col-xs-12 col-form-label">PNC choice rank :</label>
									<div class="col-lg-6 col-md-6 col-xs-12">
										<select class="form-control" name="pncChoice" id="pncChoice">
											<?php 
												for ($i=1; $i <=4 ; $i++) { 
												?>
												<option value="1"><?php echo $i ?></option>
												<?php	
												}
											 ?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-lg-2 col-md-2"></div>
									<label for="responsibility" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Responsibility & maturity :</label>
									<div class="col-lg-5 col-md-5 col-xs-12">
										<input type="number" class="form-control" name="responsibility" id="responsibility" placeholder="Ex: 18/20" required>
									</div>
								</div>
							</div>	
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-5">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="motivation" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Motivation for PNC</label>
									<div class="col-lg-6 col-md-6 col-xs-12">
										<input type="number" class="form-control" name="motivate" id="motivation" placeholder="Ex: 18/20" required>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-lg-2 col-md-2"></div>
									<label for="communications" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Communication :</label>
									<div class="col-lg-5 col-md-5 col-xs-12">
										<input type="number" class="form-control" name="communication" id="communications" placeholder="Ex: 18/20" required>
									</div>
								</div>
							</div>	
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-5">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="scholarship" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Other scholarship</label>
									<div class="col-lg-6 col-md-6 col-xs-12">
										<input type="text" class="form-control" name="otherScholarship" id="scholarship" placeholder="Other" required>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-lg-2 col-md-2"></div>
									<label for="choiceRank" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Choice rank :</label>
									<div class="col-lg-5 col-md-5 col-xs-12">
										<select class="form-control" name="otherChoiceRank" id="choiceRank">
											<?php 
												for ($i=1; $i <=4 ; $i++) { 
												?>
												<option value="1"><?php echo $i ?></option>
											<?php		
												}
											 ?>
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
									<label for="studentCommit" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Commitment of the student :</label>	
								</div>
							</div>
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-md-2"></div>
									<label for="healthOther" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
									<div class="col-lg-8 col-md-8 col-xs-12">
										<input type="text" class="form-control" name="studentCommit" id="studentCommit" placeholder="Please comment" required>
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
									<label for="parentsCommit" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
									<div class="col-lg-8 col-md-8 col-xs-12">
										<input type="text" class="form-control" name="parentsCommit" id="parentsCommit" placeholder="Please comment" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"></div>
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<button type="submit" id="btnSaveFirstSection" class="btn btn-primary float-right">Save information</button><br><br>	
							</div>
						</div>
					</form>
					<!-- end form student information -->
				</div>
			</div>		
	</div>
		<!-- end form collapsed One -->
	<div class="card">
		<div>
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
								<form id="fProForm" action="" method="post">
								<h5>Father</h5>
								<div class="row">
										<div class="col-lg-5 col-md-5 col-sm-4">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-5 col-md-4 col-sm-4">
													<label for="fatherAge" class="col-form-label">Age :</label>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-8">
													<input type="number" name="faAge" id="fatherAge" class="form-control" placeholder="Father's age">
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
												<label for="fatherOccupation" class="col-form-label">Occupation :</label>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-8">
													<select class="form-control" name="faOccu" 
													id="fatherOccupation">
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
										<input type="text" name="faSpec" id="fOccuSpec" class="form-control" placeholder="If other, please specify">
									</div>
								</div>
								<div class="row">
									<div class="col-lg-5 col-md-5 col-sm-8">
										<div class="form-group row">
											<div class="col-lg-1 col-md-1"></div>
											<div class="col-lg-5 col-md-5 col-sm-4">
												<label for="fatherHealth" class="col-form-label">Health status :</label>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-8">
												<select name="faHealth" id="fatherHealth" class="form-control">
													<option value="Healthy">Healthy</option>
													<option value="issues">Other</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-lg-1 col-md-1"></div>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="faHealthSpec" id="fHealthCmt" class="form-control" placeholder="If health issues, please specify" />
									</div>
								</div>
								<div class="row">
									<div class="col-md-5 col-sm-12">
										<div class="form-group row">
											<div class="col-lg-1 col-md-1"></div>
											<div class="col-md-5 col-sm-4">
												<label for="fatherEdu" class="col-form-label">Education :</label>
											</div>
											
											<div class="col-md-6 col-sm-4">
												<select class="form-control" name="fatherEdu" 
												id="fEdu">
												<?php 
													for ($i=0; $i <=12 ; $i++) { 
												?>
													<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
												<?php		
													}
												 ?>
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
													<label for="motherAge" class="col-form-label">Age :</label>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-8">
													<input type="number" name="moAge" id="motherAge" class="form-control" placeholder="Mother's age">
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
												<label for="motherOccupation" class="col-form-label">Occupation :</label>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-8">
													<select class="form-control" name="motherOcc" 
													id="motherOccupation">
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
										<input type="text" name="mSpecify" class="form-control" placeholder="If other, please specify">
									</div>
								</div>
								<div class="row">
									<div class="col-lg-5 col-md-5 col-sm-8">
										<div class="form-group row">
											<div class="col-lg-1 col-md-1"></div>
											<div class="col-lg-5 col-md-5 col-sm-4">
												<label for="MHealth" class="col-form-label">Health status :</label>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-8">
												<select name="mhealthStat" id="MHealth" class="form-control">
													<option value="Healthy">Healthy</option>
													<option value="issues">Other</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-lg-1 col-md-1"></div>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="mHealthSpec" class="form-control" placeholder="If health issues, please specify" />
									</div>
								</div>
								<div class="row">
									<div class="col-md-5 col-sm-12">
										<div class="form-group row">
											<div class="col-lg-1 col-md-1"></div>
											<div class="col-md-5 col-sm-4">
												<label for="mEdu" class="col-form-label">Education :</label>
											</div>
											
											<div class="col-md-6 col-sm-4">
												<select class="form-control" name="mEdu" 
												id="mEdu">
												<?php 
													for ($i=0; $i <=12 ; $i++) { 
												?>
												<option value="<?php echo $i; ?>"><?php echo $i; ?></option>		
												<?php 		
													}
												 ?>

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
									<label for="numberSiblings" class="col-form-label">Number of siblings :</label>
								</div>
								<div class="col-md-6">
									<select class="form-control" name="numSiblings" id="numberSiblings">
										<?php 
											for ($i=1; $i <=12 ; $i++) { 
										?>
											<option value="1"><?php echo $i; ?></option>
										<?php	
											}
										 ?>
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
									<select class="form-control" name="marriedStat" id="married">
										<?php 
											for ($i=0; $i <10 ; $i++) { 
											?>
											<option value="1"><?php echo $i; ?></option>
											<?php 
											}
										?>
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
									<select class="form-control" name="separated" 
									id="separated">
									<?php 
										for ($i=0; $i <10 ; $i++) { 
									?>
									<option value="1"><?php echo $i; ?></option>
									<?php 
										}
									?>
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
								<select class="form-control gincomein" name="member" 
								id="liveInHouse">
								<?php 
									for ($i=1; $i <=15 ; $i++) { 		
								?>
								<option value="1"><?php echo $i ?></option>
								<?php
									}
								 ?>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group row">
						<div class="col-md-6">
							<label for="studentRanks" class="col-form-label">Student rank :</label>
						</div>
						<div class="col-md-6">
							<select class="form-control" name="studentRank" id="studentRanks">
							<?php 
								for ($i=1; $i <12 ; $i++) { 
								?>
								<option value="1"><?php echo $i; ?></option>
								<?php 
								}
							?>
						</select>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-9 col-sm-9"></div>
			<div class="col-md-3 col-sm-3">
				<button type="submit" class="btn btn-primary btn-block" id="SaveFamilyPro" >Save information</button>
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
			<form id="formFamilyIncome" action="" method="post">
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
								<input type="number" class="form-control fincome gincome gincomein" id="fMonthly" name="monthlyIncome" placeholder="$" style="text-align:right;" required>
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
								<input type="number" class="form-control fincome gincome gincomein" id="fDaily" name="paDailyIncome" placeholder="$" style="text-align:right;" required>
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
								<input type="number" class="form-control fincome gincome gincomein" id="fSeasonal" name="seasonalIncome" placeholder="$" style="text-align:right;" required>
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
								<input type="number" class="form-control fincome gincome gincomein" id="fYearly" name="yearIncome" placeholder="$" style="text-align:right;" required>
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
								<input type="number" class="form-control gincome gincomein" id="fTotal" name="parentTotalIncome" style="text-align:right;" placeholder="$">
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
								<input type="number" class="form-control cIncome gincome gincomein" id="cMonthly" name="montlyChildAssiss" placeholder="$" style="text-align:right;" required>
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
								<input type="number" class="form-control cIncome gincome gincomein" id="cDaily" name="ChildDailyIncome" placeholder="$" style="text-align:right;" required>
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
								<input type="number" class="form-control cIncome gincome gincomein" id="cSeasonal" placeholder="$" name ="ChildSeasonalIncome" style="text-align:right;" required>
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
								<input type="number" class="form-control cIncome gincome gincomein " id="cYearly" name="ChildYearIncome" placeholder="$" style="text-align:right;" required>
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
								<input type="number" class="form-control gincome gincomein" id="cTotal" name="childTotalIncome" placeholder="$" style="text-align:right;">
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
								<input type="number" class="form-control gincome gincomein" id="gTotal1" name="totalMonthIncome" placeholder="$" style="text-align:right;">
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
								<input type="number" class="form-control gincomein" name="incomeIndividual" id="gTotal2" placeholder="$" style="text-align:right;">
							</div>
						</div>
					</div>	
				</div>	
				<div class="row">
					<div class="col-md-6"></div>
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
						<button type="submit" class="btn btn-primary float-right" id="btnSaveFamilyIncome">Save information</button>	
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
			<form id="formExpense" action="" method="post">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label for="rice" class="col-5 col-xs-12 col-form-label">Rice:</label>
							<div class="col-7 col-xs-12">
								<input type="number" class="form-control fExpense" id="rice" placeholder="$" name="rice" style="text-align:right;" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="food" class="col-5 col-form-label">Food:</label>
							<div class="col-7">
								<input type="number" class="form-control fExpense" id="food" placeholder="$" name="food" style="text-align:right;" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="firewood" class="col-5 col-form-label">Firewood-Gas-Chacoal:</label>
							<div class="col-7">
								<input type="number" class="form-control fExpense" id="firewood" placeholder="$" name="firewood" style="text-align:right;" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="loan" class="col-5 col-form-label">Loan:</label>
							<div class="col-7">
								<input type="number" class="form-control fExpense" id="loan" placeholder="$" name="loan" style="text-align:right;" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="study" class="col-5 col-form-label">Study:</label>
							<div class="col-7">
								<input type="number" class="form-control fExpense" id="study" placeholder="$" name="study" style="text-align:right;" required>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">
							<label for="medical" class="col-5 col-form-label">Medical:</label>
							<div class="col-7">
								<input type="number" class="form-control fExpense" id="medical" placeholder="$" name="medical" style="text-align:right;" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="electricity" class="col-5 col-form-label">Electricity & Water:</label>
							<div class="col-7">
								<input type="number" class="form-control fExpense" id="electricity" placeholder="$" name="electric" style="text-align:right;" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="agriculture" class="col-5 col-form-label">Agriculture:</label>
							<div class="col-7">
								<input type="number" class="form-control fExpense" id="agriculture" placeholder="$" name="agriculture" style="text-align:right;" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="wedding" class="col-5 col-form-label">Wedding 
							& Ceremony:</label>
							<div class="col-7">
								<input type="number" class="form-control fExpense" id="wedding" placeholder="$" name="wedding" style="text-align:right;" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="otherUtilities" class="col-5 col-form-label">Other utilities:</label>
							<div class="col-7">
								<input type="number" class="form-control fExpense" id="otherUtilities" placeholder="$" name="other" style="text-align:right;" required>
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
								<input type="number" class="form-control" id="totalExpense" placeholder="$" name="totalExpense" style="text-align:right;" required>
							</div>
						</div>
					</div>

				</div>
				<br>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<button type="submit" id="saveExpense" class="btn btn-primary float-right">Save information</button>
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
				<form id="formLoan" action="" method="post">
					<div class="row">
						<div class="col-lg-4 col-md-4">
							<div class="form-group row">
								<label for="amount" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Initial amount :</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<input id="amount" type="number" class="form-control" name="initAmount" placeholder="$" style="text-align:right;" required="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="form-group row">
								<label for="institution" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Institution :
								</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<input id="institution" type="number" class="form-control" name="instit" placeholder="$" style="text-align:right;" required>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="form-group row">
								<label for="interest" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Interest rates :
								</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<input type="number" id="interest" class="form-control" name="interRates" placeholder="$" style="text-align:right;">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="form-group row">
								<label for="reason" class="col-lg-2 col-md-2 col-xs-12 col-form-label">Reason :</label>
								<div class="col-lg-10 col-md-10 col-xs-12">
									<input type="text" id="reason" class="form-control" name="reason" placeholder="Please comment">
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
									<input type="number" id="monthly" class="form-control" name="monthly" placeholder="$" style="text-align:right;">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="form-group row">
								<label for="trimester" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Trimester :</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<input type="number" id="trimester" class="form-control" name="trimester" placeholder="$" style="text-align:right;">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="form-group row">
								<label for="semester" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Semester :</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<input type="number" id="semester" class="form-control" name="semester" placeholder="$" style="text-align:right;" >
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4">
							<div class="form-group row">
								<label for="capital" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Capital :</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<input type="number" id="capital" class="form-control" name="capital" placeholder="$" style="text-align:right;">
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8"></div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
							<button type="submit" id="saveLoan" class="btn btn-primary float-right">Save information</button>
						</div>
					</div>
				</form>
			</div>
		</div>
</div>
<!-- end form family loan $ debt -->
<!-- form family residence -->
<div class="card">
	<div id="residenceStatus">
		<h5 class="mb-0">
			<button class="btn btn-default collapsed btn-block text-left subHeading" data-toggle="collapse" data-target="#collapseResidenceStatus" aria-expanded="false" aria-controls="collapseResidenceStatus" style="height: 60px;border-bottom: 2px solid #fff;background-color: #f8f9fa; ">
				<h5 class="subCollapse">Residence status
					<i class="mdi mdi-chevron-down float-right subDown" style="color:#000; font-size: 30px;">
					</i>
					<i class="mdi mdi-chevron-up float-right subUp" style="color:#000; font-size: 30px;display: none;">
					</i>
				</h5>
			</button>
		</h5>
	</div>
	<div id="collapseResidenceStatus" class="collapse" aria-labelledby="residenceStatus" data-parent="#subAccordion">
			<div class="card-body contentBody">
				<form id="formRes" action="" method="post">
					<div class="row">
						<div class="col-lg-4 col-md-4">
							<div class="form-group row">
								<label for="statusResi" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Status :</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<select class="form-control" name="status" id="status">
										<option value="Inherited">Inherited</option>
										<option value="Shared">Shared</option>
										<option value="Purchased">Purchased</option>
										<option value="Rent">Rent</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="form-group row">
								<label for="residenceAge" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Age :</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<select class="form-control" name="age" id="age">
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
								<label for="ratingScale" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Rating Scale :</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<select class="form-control" name="rating" id="rating">
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
					<div class="row">
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8"></div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
							<button type="submit" id="saveResi" class="btn btn-primary float-right">Save information</button>
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
			<form id="formAppli" action="" method="post">
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
								<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="refrigerator" id="refrigerator" style="text-align:right;" required>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="radio" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Radio :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control coef_x3 assetGlobal" placeholder="Quantity " name="radio" id="radio" style="text-align:right;" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="conditioner" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Air conditioner :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="airCondi" id="conditioner" style="text-align:right;" required>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="ricecooker" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Ricecooker :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control coef_x3 assetGlobal" placeholder="Quantity" name="ricecooker" id="ricecooker" style="text-align:right;" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="lcdTV" class="col-lg-5 col-md-5 col-xs-12 col-form-label">LCD TV :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="lcdTv" id="lcdTV" style="text-align:right;" required>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="colorTV" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Color TV :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control coef_x3 assetGlobal" placeholder="Quantity" name="colorTv" id="colorTV" style="text-align:right;" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="computer1" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Computer < 100$ :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="chComputer" id="computer1" style="text-align:right;" required>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="computer2" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Computer > 100$ :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control coef_x3 assetGlobal" placeholder="Quantity" name="exComputer" id="computer2" style="text-align:right;" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="furnished" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Furnished cabinet > 300$ :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="fCabinet" id="furnished" style="text-align:right;" required>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="dvdPlayer" class="col-lg-5 col-md-5 col-xs-12 col-form-label">DVD player :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control coef_x3 assetGlobal" placeholder="Quantity" name="dvd" id="dvdPlayer" style="text-align:right;" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="smartphone" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Smartphone > 100$ :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="smartphone" id="smartphone" style="text-align:right;" required>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="phone" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Phone < 100$ :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control coef_x3 assetGlobal" placeholder="Quantity" name="phone" id="phone" style="text-align:right;" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="camera1" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Camera > 100$ :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="cCamera" id="camera1" style="text-align:right;" required>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="camera2" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Camera < 100$ :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control coef_x3 assetGlobal" placeholder="Quantity" name="exCamera" id="camera2" style="text-align:right;" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="sofa1" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Sofa > 300$ :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="chSofa" id="sofa1" style="text-align:right;" required>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="form-group row">
							<label for="sofa2" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Sofa < 300$ :</label>
							<div class="col-lg-7 col-md-7 col-xs-12">
								<input type="number" class="form-control coef_x3 assetGlobal" placeholder="Quantity" name="exSofa" id="sofa2" style="text-align:right;" required>
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
								<input type="number" class="form-control coef_x3 assetGlobal" placeholder="Quantity" name="gasCooker" id="gascooker" style="text-align:right;" required>
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
								<input type="number" class="form-control coef_x3 assetGlobal" placeholder="Quantity" name="fblender" id="fruit" style="text-align:right;" required>
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
								<input type="number" class="form-control coef_x3 assetGlobal" placeholder="Quantity" name="eCooker" id="electrical" style="text-align:right;" required>
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
										<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="motobike" id="motobike" style="text-align:right;" required>
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
										<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="farming" id="farming" style="text-align:right;" required>
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
										<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="car" id="car" style="text-align:right;" required>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-md-6">
						<textarea name="vComment" cols="66" rows="6" class="form-control" placeholder="Please specify if you have any comment" style="line-height: 22px;"></textarea>
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
										<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="cow" id="cow" style="text-align:right;" required>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div> -->
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group row">
									<label for="buffaloe" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Buffalo :</label>
									<div class="col-lg-7 col-md-7 col-xs-12">
										<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="buffalo" id="buffaloe" style="text-align:right;" required>
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
										<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="pig" id="pig" style="text-align:right;" required>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-md-6">
						<textarea name="aComment" cols="66" rows="6" class="form-control assetGlobal" placeholder="Please specify if you have any comment" style="line-height: 22px;"></textarea>

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
										<input type="number" class="form-control assetGlobal" placeholder="Quantity" name="farmSize" id="farmSize" style="text-align:right;" required>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<textarea name="fComment" cols="66" rows="1" class="form-control assetGlobal" placeholder="Please specify if you have any comment"></textarea>
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
										<input type="number" class="form-control assetGlobal" name="sumQuantity5" id="sumQuantity5" style="text-align:right;" required >
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
														<input type="number" class="form-control assetGlobal" name="sumQuantity3" id="sumQuantity3" style="text-align:right;" required>
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
															<input class="form-control assetGlobal" type="number" placeholder="$" name="globalAsset" id="globalAsset" style="text-align:right;">
														</div>
														<!-- </div> -->
													</div>
												</div>
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
												<div class="col-md-7 col-sm-12">
													<label for="specifyLevel" style="line-height: 2.5;">If yes, please specify the level:</label>
												</div>
												<div class="col-md-3 col-sm-12">
													<select class="form-control" name="specifyLevel" id="specifyLevel">
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
													</select>
												</div>
												<div class="col-md-1 col-sm-12"></div>
											</div>
										</div>
									</div>
									<!-- end of poverty -->
									<!-- button save information for home asset -->
									<br>
									<div class="row">
										<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"></div>
										<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
											<button id="saveAsset" type="submit" class="btn btn-primary btn-block">Save information</button>
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
		<form id="formConclude" action="" method="POST">
			<div class="row">
				<div class="col-md-12">
					<h4 style="color: #000;">Investigator's conclusion</h4>
					<textarea name="investigatorConclude" rows="5" class="form-control" placeholder="Please comment"></textarea>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-10 col-md-10"></div>
				<div class="col-lg-2 col-md-2">
					<button type="submit" id="saveConclude" class="btn btn-primary float-right">Save information</button>
				</div>
			</div>
		</form>	
	</div>
</div>
<!-- pop up scholaship -->
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
</div><!-- pop up scholaship -->
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
<!-- pop up scholaship -->
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
<!-- pop up scholaship -->
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
<!-- pop up ngo -->
<div class="container">
  <!-- The Modal -->
  <div class="modal" id="theModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit NGO</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        	<table id="students" cellpadding="0" cellspacing="0" class="table table table-striped table-bordered table-hover">
        		<thead>
        			<tr>
        				<th>Name</th>
        			</tr>
        		</thead>
        		<tbody id="showdata">
					<tr>
						<td>
							<div class="row">
								<div class="col-md-1">
									<a href="" class="mdi mdi-delete text-danger" title="Delete NGO" style="font-size: 25px;"></a>
								</div>
								<div class="col-md-7">
									<input type="text" class="form-control" id="ngoModel" name="ngo" value="">
								</div>
								<div class="col-md-4"></div>
							</div>
						</td>
					</tr>
        		</tbody>
        	</table>
        	<button type="submit" class="btn btn-primary" data-dismiss="modal">
          	<i class="mdi mdi-plus"></i>&nbsp;Add NGO</button>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" data-dismiss="modal">Save list
        </div>
        
      </div>
    </div>
  </div>
</div>
</body>
</html>
<link href="<?php echo base_url();?>assets/DataTable/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
 <script type="text/javascript" src="<?php echo base_url();?>assets/DataTable//DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/DataTable//DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
	$('#students').dataTable({
        stateSave: true,
    });
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#blah')
				.attr('src', e.target.result);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}

	$(document).ready(function(){
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
				var gTotal = $('#gTotal1').val();
				var liveInHouse = $('#liveInHouse').val();
				gTotalIn = Number(gTotal) / Number(liveInHouse);
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
// Start function add new candidate
	$('#btnSaveFirstSection').click(function(){
		$('#canForm').attr('action', '<?php echo base_url() ?>c_candidates/addCandidate/');
	});
	// start to save
	$('#btnSaveFirstSection').click(function(){
		var url = $('#canForm').attr('action');
		var data = $('#canForm').serialize();
		//validate form
			$.ajax({
				type: 'ajax',
				method: 'post',
				url: url,
				data: data,
				async: false,
				dataType: 'json',
				success: function(response){
					if(response.success){
						$('#canForm')[0].reset();
						if(response.type=='add'){
							var type = 'added'
						}else if(response.type=='update'){
							var type ="updated"
						}
						$('.alert-success').html('Candidate '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
					}else{
						alert('Error');
					}
				},
				error: function(){
					alert('Could not add data');
				}
			});
		
	});
// End function add 
// Function to add Family Profile
	
	$('#SaveFamilyPro').click(function(){
		$('#fProForm').attr('action', '<?php echo base_url() ?>c_candidates/addFamilyProfile/');
	});
	// start to save	
	$('#SaveFamilyPro').click(function(){
		var url = $('#fProForm').attr('action');
		var data = $('#fProForm').serialize();
		//validate form
			$.ajax({
				type: 'ajax',
				method: 'post',
				url: url,
				data: data,
				async: false,
				dataType: 'json',
				success: function(response){
					if(response.success){
						$('#fProForm')[0].reset();
						if(response.type=='add'){
							var type = 'added'
						}else if(response.type=='update'){
							var type ="updated"
						}
						$('.alert-success').html('Data '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
					}else{
						alert('Error');
					}
				},
				error: function(){
					alert('Could not add data');
				}
			});
		
	});
// End Family Profile
// Start function add new family income source
	$('#btnSaveFamilyIncome').click(function(){
		$('#formFamilyIncome').attr('action', '<?php echo base_url() ?>c_candidates/addFamilyIncome/');
	});
	// start to save	
	$('#btnSaveFamilyIncome').click(function(){
		var url = $('#formFamilyIncome').attr('action');
		var data = $('#formFamilyIncome').serialize();
		//validate form
			$.ajax({
				type: 'ajax',
				method: 'post',
				url: url,
				data: data,
				async: false,
				dataType: 'json',
				success: function(response){
					if(response.success){
						$('#formFamilyIncome')[0].reset();
						if(response.type=='add'){
							var type = 'added'
						}else if(response.type=='update'){
							var type ="updated"
						}
						$('.alert-success').html('Data '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
					}else{
						alert('Error');
					}
				},
				error: function(){
					alert('Could not add data');
				}
			});
		
	});
// End function add 
// function add family expense

$('#saveExpense').click(function(){
	$('#formExpense').attr('action', '<?php echo base_url() ?>c_candidates/addExpense/');
});
// start to save	
$('#saveExpense').click(function(){
	var url = $('#formExpense').attr('action');
	var data = $('#formExpense').serialize();
	//validate form
		$.ajax({
			type: 'ajax',
			method: 'post',
			url: url,
			data: data,
			async: false,
			dataType: 'json',
			success: function(response){
				if(response.success){
					$('#formExpense')[0].reset();
					if(response.type=='add'){
						var type = 'added'
					}else if(response.type=='update'){
						var type ="updated"
					}
					$('.alert-success').html('Data '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
				}else{	
					alert('Error');
				}
			},
			error: function(){
				alert('Could not add data');
			}
		});
	
});
// end function add expense
// Function start to add loan and debts
$('#saveLoan').click(function(){
	$('#formLoan').attr('action', '<?php echo base_url() ?>c_candidates/addLoan/');
});
// start to save	
$('#saveLoan').click(function(){
	var url = $('#formLoan').attr('action');
	var data = $('#formLoan').serialize();
	//validate form
		$.ajax({
			type: 'ajax',
			method: 'post',
			url: url,
			data: data,
			async: false,
			dataType: 'json',
			success: function(response){
				if(response.success){
					$('#formLoan')[0].reset();
					if(response.type=='add'){
						var type = 'added'
					}else if(response.type=='update'){
						var type ="updated"
					}
					$('.alert-success').html('Data '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
				}else{
					alert('Error');
				}
			},
			error: function(){
				alert('Could not add data');
			}
		});
	
});
// End function add loan and debts
// function add call residence status
	
	$('#saveResi').click(function(){
		$('#formRes').attr('action', '<?php echo base_url() ?>c_candidates/addResidence/');
});
// start to save	
$('#saveLoan').click(function(){
	var url = $('#formRes').attr('action');
	var data = $('#formRes').serialize();
	//validate form
		$.ajax({
			type: 'ajax',
			method: 'post',
			url: url,
			data: data,
			async: false,
			dataType: 'json',
			success: function(response){
				if(response.success){
					$('#formRes')[0].reset();
					if(response.type=='add'){
						var type = 'added'
					}else if(response.type=='update'){
						var type ="updated"
					}
					$('.alert-success').html('Data '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
				}else{
					alert('Error');
				}
			},
			error: function(){
				alert('Could not add data');
			}
		});
	
});
// end function call residence status
// function add home assets
$('#saveAsset').click(function(){
	$('#formAppli').attr('action', '<?php echo base_url() ?>c_candidates/addAssets/');
});
// start to save	
$('#saveAsset').click(function(){
	var url = $('#formAppli').attr('action');
	var data = $('#formAppli').serialize();
	//validate form
		$.ajax({
			type: 'ajax',
			method: 'post',
			url: url,
			data: data,
			async: false,
			dataType: 'json',
			success: function(response){
				if(response.success){
					$('#formAppli')[0].reset();
					if(response.type=='add'){
						var type = 'added'
					}else if(response.type=='update'){
						var type ="updated"
					}
					$('.alert-success').html('Data '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
				}else{
					alert('Error');
				}
			},
			error: function(){
				alert('Could not add data');
			}
		});
	
});
// end function add home asset
// function add conclusion
$('#saveConclude').click(function(){
	$('#formConclude').attr('action', '<?php echo base_url() ?>c_candidates/addConclude/');
});
// start to save	
$('#saveConclude').click(function(){
	var url = $('#formConclude').attr('action');
	var data = $('#formConclude').serialize();
	//validate form
		$.ajax({
			type: 'ajax',
			method: 'post',
			url: url,
			data: data,
			async: false,
			dataType: 'json',
			success: function(response){
				if(response.success){
					$('#formConclude')[0].reset();
					if(response.type=='add'){
						var type = 'added'
					}else if(response.type=='update'){
						var type ="updated"
					}
					$('.alert-success').html('Data '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
				}else{
					alert('Error');
				}
			},
			error: function(){
				alert('Could not add data');
			}
		});
	
});
// end function conclusion
// function to get data

		// function calculate home asset coef x5
		$('.form-group').on('input','.coef_x5',function(){
				var sumTotalCoefx5 = 0;
				var refrigerator = $('#refrigerator').val();
				var conditioner = $('#conditioner').val();
				var lcdTV = $('#lcdTV').val();
				var computer1 = $('#computer1').val();
				var furnished = $('#furnished').val();
				var smartphone = $('#smartphone').val();
				var camera1 = $('#camera1').val();
				var sofa1 = $('#sofa1').val();
				var motobike = $('#motobike').val();
				var farming = $('#farming').val();
				var car = $('#car').val();
				var cow = $('#cow').val();
				var buffaloe = $('#buffaloe').val();
				var pig = $('#pig').val();
				var farmSize = $('#farmSize').val();
				$farmSize = $('#farmSize').val();

				if ($farmSize > 10000) {
					sumTotalCoefx5=Number(refrigerator)+Number(conditioner)+Number(lcdTV)+Number(computer1)+Number(furnished)+Number(smartphone)+Number(camera1)+Number(sofa1)+Number(motobike)+Number(farming)+Number(car)+Number(cow)+Number(buffaloe)+Number(pig)+5;
				}
				else{
					sumTotalCoefx5=Number(refrigerator)+Number(conditioner)+Number(lcdTV)+Number(computer1)+Number(furnished)+Number(smartphone)+Number(camera1)+Number(sofa1)+Number(motobike)+Number(farming)+Number(car)+Number(cow)+Number(buffaloe)+Number(pig)+0;
				}

				$('#sumQuantity5').val(sumTotalCoefx5);
			});
		// function calculate home asset coef x3
		$('.form-group').on('input','.coef_x3',function(){
				
				$farmSize = $('#farmSize').val();
				var farmSize = $('#farmSize').val();
				var sumTotalCoefx3 = 0;
				var radio = $('#radio').val();
				var ricecooker = $('#ricecooker').val();
				var colorTV = $('#colorTV').val();
				var computer2 = $('#computer2').val();
				var dvdPlayer = $('#dvdPlayer').val();
				var phone = $('#phone').val();
				var camera2 = $('#camera2').val();
				var sofa2 = $('#sofa2').val();
				var gascooker = $('#gascooker').val();
				var fruit = $('#fruit').val();
				var electrical = $('#electrical').val();
				if (0 < $farmSize < 10000 ) {
					sumTotalCoefx3=Number(radio)+Number(ricecooker)+Number(colorTV)+Number(computer2)+Number(dvdPlayer)+Number(phone)+Number(camera2)+Number(sofa2)+Number(gascooker)+Number(fruit)+Number(electrical)+3;
				}
				else{
					sumTotalCoefx3=Number(radio)+Number(ricecooker)+Number(colorTV)+Number(computer2)+Number(dvdPlayer)+Number(phone)+Number(camera2)+Number(sofa2)+Number(gascooker)+Number(fruit)+Number(electrical)+0;
				}
				$('#sumQuantity3').val(sumTotalCoefx3);
			});
		// function in total global home asset
		$('.form-group').on('input','.assetGlobal',function(){
				var totalGlobal;
				var sumQuantity5 = $('#sumQuantity5').val();
				var sumQuantity3 = $('#sumQuantity3').val();
				totalGlobal=Number(sumQuantity5)+Number(sumQuantity3);
				$('#globalAsset').val(totalGlobal);

		});
	});
</script>
<?php } ?>
<!-- end form collapsed -->