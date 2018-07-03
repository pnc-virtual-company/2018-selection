
<link href="<?php echo base_url();?>assets/DataTable/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<br>
<!-- FORM COLLAPSED -->
<div class="container">
	<div id="accordion">
    	<h1 class="text-center" style="color: #007bff;" id="newCandidateTitle">Create a candidate</h1>
    	<br><br>

		<!-- STUDENT INFORMATION SECTION -->
		<div class="card">
			<div id="headingOne">
				<h5 class="mb-0">
					<button class="btn btn-primary collapsed btn-block text-left formHeading" id="FirstSection" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="height: 60px;">
						<h4>Student information
							<i class="mdi mdi-chevron-down float-right down" style="color:#fff; font-size: 35px;"></i>
							<i class="mdi mdi-chevron-up float-right up" style="color:#fff; font-size: 35px;display: none;"></i>
						</h4>
					</button>
				</h5>
			</div>
			<!-- STUDENT INFORMATION FORM -->
			<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
				<div class="card-body contentBody">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h5>General information</h5>
					</div>
					<form id="canForm" method="post" enctype="multipart/form-data">
						<input type="hidden" name="candidateID"/>
						<br>
						<div class="row">
							<div class="col-lg-5 col-md-6">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<div class="image-upload">
									    <label for="candidateImage">
									        <img id="blah" src="../assets/images/system_img/uploadPicture.png"/>
									    </label>
									    <input type="file" id="candidateImage" name="candidateImage"/>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-6">
								<div class="form-group row">
									<div class="col-lg-2 col-md-2"></div>
									<label for="firstname" class="col-lg-4 col-md-12 col-xs-12 col-form-label">*First Name:</label>
									<div class="col-lg-5 col-md-10 col-xs-12">
										<input type="text" class="form-control" name="firstname" placeholder="First name" id="firstname" required style="border-color: red;"/>
									</div>
								</div>			
								<div class="form-group row">
									<div class="col-lg-2 col-md-2"></div>
									<label for="lastname" class="col-lg-4 col-md-12 col-xs-12 col-form-label">*Last Name:</label>
									<div class="col-lg-5 col-md-10 col-xs-12">
										<input type="text" class="form-control" name="lastname" placeholder="Last name" id="lastname" required style="border-color: red;"/>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-2 col-md-2"></div>
									<label for="globalGrade" class="col-lg-4 col-md-12 col-xs-12 col-form-label">Global grade:</label>
									<div class="col-lg-5 col-md-10 col-xs-12">
										<select class="form-control" name="globalGrade" id="globalGrade" placeholder="Please select">
										<option value="">Please select</option>
										<option value="A+">A+</option>
										<option value="A">A</option>
										<option value="A-">A-</option>
										<option value="B+">B+</option>
										<option value="B">B</option>
										<option value="Failed">Failed</option>
									</select>
									</div>
								</div>
							</div>	
						</div>
						<br>
						<div class="row">
							<div class="col-lg-5 col-md-6">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="gender" class="col-lg-5 col-md-12 col-xs-12 col-form-label">Gender:</label>
									<div class="col-lg-6 col-md-10 col-xs-12">
										<select class="form-control" name="gender" id="gender">
											<option value="">Please select</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-6">
								<div class="form-group row">
									<div class="col-lg-2 col-md-2"></div>
									<label for="age" class="col-lg-4 col-md-12 col-xs-12 col-form-label">Age:</label>
									<div class="col-lg-5 col-md-10 col-xs-12">
										<input type="number" class="form-control" name="age" id="age" placeholder="Age">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-6">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="province" class="col-lg-5 col-md-12 col-xs-12 col-form-label">Province:</label>
									<div class="col-lg-6 col-md-10 col-xs-12">
										<select class="form-control" name="province" id="province">
											<option value="">Please select</option>
											<?php foreach ($provinces as $province): ?>
												<option value="<?php echo $province ?>"><?php echo $province?></option>
											<?php endforeach ?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-6"></div>
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-6">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="ngo" class="col-lg-5 col-md-12 col-xs-12 col-form-label">NGO:</label>
									<div class="col-lg-6 col-md-10 col-xs-12" style="white-space: nowrap;">
										<select class="form-control" id="ngo" name="ngo" style="display: inline-block;">
											<option value="">Please select</option>
											<?php foreach ($ngos as $ngo): ?>
												<option value="<?php echo $ngo->ngo_id ?>"><?php echo $ngo->ngo_name?></option>
											<?php endforeach ?>
										</select>
										<?php $role =$this->session->nameRole;?>
										<?php if ($role == 1) { ?>
											<a data-toggle="modal" data-target="#theModal" style="display: inline-block;cursor: pointer;">
											<i class="mdi mdi-pencil" title="Edit the list of NGO"></i>
											</a>	
										<?php }  ?>
									</div>
								</div>
							</div>		
							<div class="col-lg-7 col-md-6">
								<div class="form-group row">
									<div class="col-lg-2 col-md-2"></div>
									<label for="ngoOther" class="col-lg-4 col-md-12 col-xs-12 col-form-label">Other:</label>
									<div class="col-lg-5 col-md-10 col-xs-12">
										<input type="text" class="form-control" id="ngoOther" placeholder="Please specify">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-6">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="healths" class="col-lg-5 col-md-12 col-xs-12 col-form-label">Health status:</label>
									<div class="col-lg-6 col-md-10 col-xs-12">
										<select class="form-control" name="health" id="healths">
											<option value="">Please select</option>
											<option value="Healthy">Healthy</option>
											<option value="Other">Other</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-6">
								<div class="form-group row">
									<div class="col-lg-2 col-md-2"></div>
									<label for="healthOther" class="col-lg-4 col-md-12 col-xs-12 col-form-label">Other:</label>
									<div class="col-lg-5 col-md-10 col-xs-12">
										<input type="text" class="form-control" id="healthOther" name="healthComment" placeholder="Please specify">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-6">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="rankClass" class="col-lg-5 col-md-12 col-xs-12 col-form-label">Rank in class:</label>
									<div class="col-lg-6 col-md-10 col-xs-12">
										<input type="text" class="form-control" id="rankClass" name="rankClass" placeholder="Ex: 10/33">
									</div>
								</div>
							</div>		
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1" style="margin-right: -3.6vw;"></div>
									<label for="extraActivity" class="col-lg-2 col-md-12 col-xs-12 col-form-label" style="padding-right: 0px;">Extra activity & achievement:</label>	
									<div class="col-lg-9 col-md-11 col-xs-12">
										<textarea class="form-control" name="extraActivity" id="extraActivity" placeholder="Please comment" rows="2"></textarea> 
									</div>
								</div>
							</div>
						</div>
						<br>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h5>Motivation</h5></div>
						<br>
						<div class="row">
							<div class="col-lg-5 col-md-6">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="pncChoice" class="col-lg-5 col-md-12 col-xs-12 col-form-label">PNC choice rank:</label>
									<div class="col-lg-6 col-md-10 col-xs-12">
										<select class="form-control" name="pncChoice" id="pncChoice">
											<option value="">Please select</option>
											<?php 
											for ($i=1; $i <=4 ; $i++) { 
												?>
												<option value="<?php echo $i; ?>"><?php echo $i ?></option>
												<?php	
											}
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-6">
								<div class="form-group row">
									<div class="col-lg-2 col-md-2"></div>
									<label for="responsibility" class="col-lg-4 col-md-12 col-xs-12 col-form-label">Responsibility & maturity:</label>
									<div class="col-lg-5 col-md-10 col-xs-12">
										<input type="text" class="form-control" name="responsibility" id="responsibility" placeholder="Ex: 18/20">
									</div>
								</div>
							</div>	
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-6">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="motivation" class="col-lg-5 col-md-12 col-xs-12 col-form-label" style="padding-right: 0px;">Motivation for PNC:</label>
									<div class="col-lg-6 col-md-10 col-xs-12">
										<input type="text" class="form-control" name="motivate" id="motivation" placeholder="Ex: 18/20">
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-6">
								<div class="form-group row">
									<div class="col-lg-2 col-md-2"></div>
									<label for="communications" class="col-lg-4 col-md-12 col-xs-12 col-form-label">Communication:</label>
									<div class="col-lg-5 col-md-10 col-xs-12">
										<input type="text" class="form-control" name="communication" id="communications" placeholder="Ex: 18/20">
									</div>
								</div>
							</div>	
						</div>
						<br>
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1" style="margin-right: -3.6vw;"></div>
									<label for="studentCommit" class="col-lg-2 col-md-12 col-xs-12 col-form-label" style="padding-right: 0px;">Commitment of the student:</label>
									<div class="col-lg-9 col-md-11 col-xs-12">
										<textarea class="form-control" name="studentCommit" id="studentCommit" placeholder="Please comment" rows="2"></textarea> 
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1" style="margin-right: -3.6vw;"></div>
									<label for="parentsCommit" class="col-lg-2 col-md-12 col-xs-12 col-form-label" style="padding-right: 0px;">Commitment of the parents:</label>
									<div class="col-lg-9 col-md-11 col-xs-12">
										<textarea class="form-control" name="parentsCommit" id="parentsCommit" placeholder="Please comment" rows="2"></textarea> 
									</div>
								</div>
							</div>
						</div>
						<br>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h5>Other Scholarship</h5></div>
						<br>
						<div class="row">
							<div class="col-lg-5 col-md-6">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="alter1" class="col-lg-5 col-md-12 col-xs-12 col-form-label">Alternative 1:</label>
									<div class="col-lg-6 col-md-10 col-xs-12">
										<input type="text" class="form-control" name="alternative1" id="alter1" placeholder="Major">
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-6">
								<div class="form-group row">
									<div class="col-lg-2 col-md-2"></div>
									<label for="choiceRank1" class="col-lg-4 col-md-12 col-xs-12 col-form-label">Choice rank:</label>
									<div class="col-lg-5 col-md-10 col-xs-12">
										<select class="form-control" name="choiceRank1" id="choiceRank1">
											<option value="">Please select</option>
											<?php 
											for ($i=1; $i <=4 ; $i++) { 
												?>
												<option value="<?php echo $i; ?>"><?php echo $i ?></option>
												<?php		
											}
											?>
										</select>
									</div>
								</div>
							</div>	
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-6">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="alter2" class="col-lg-5 col-md-12 col-xs-12 col-form-label">Alternative 2:</label>
									<div class="col-lg-6 col-md-10 col-xs-12">
										<input type="text" class="form-control" name="alternative2" id="alter2" placeholder="Major">
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-6">
								<div class="form-group row">
									<div class="col-lg-2 col-md-2"></div>
									<label for="choiceRank2" class="col-lg-4 col-md-12 col-xs-12 col-form-label">Choice rank:</label>
									<div class="col-lg-5 col-md-10 col-xs-12">
										<select class="form-control" name="choiceRank2" id="choiceRank2">
											<option value="">Please select</option>
											<?php 
											for ($i=1; $i <=4 ; $i++) { 
												?>
												<option value="<?php echo $i; ?>"><?php echo $i ?></option>
												<?php		
											}
											?>
										</select>
									</div>
								</div>
							</div>	
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-6">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="alter3" class="col-lg-5 col-md-12 col-xs-12 col-form-label">Alternative 3:</label>
									<div class="col-lg-6 col-md-10 col-xs-12">
										<input type="text" class="form-control" name="alternative3" id="alter3" placeholder="Major">
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-6">
								<div class="form-group row">
									<div class="col-lg-2 col-md-2"></div>
									<label for="choiceRank3" class="col-lg-4 col-md-12 col-xs-12 col-form-label">Choice rank:</label>
									<div class="col-lg-5 col-md-10 col-xs-12">
										<select class="form-control" name="choiceRank3" id="choiceRank3">
											<option value="">Please select</option>
											<?php 
											for ($i=1; $i <=4 ; $i++) { 
												?>
												<option value="<?php echo $i; ?>"><?php echo $i ?></option>
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
							<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8"></div>
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
								<button type="button" id="saveNewCan" class="btn btn-primary float-right">Save information</button>
							</div>
						</div>	
					</form>
				</div>
			</div>		
		</div>
		<!-- END STUDENT INFORMATION SECTION -->


		<!-- FAMILY INFORMATION SECTION -->
		<div class="card">
			<div id="headingTwo">
				<h5 class="mb-0">
					<button class="btn btn-primary collapsed  btn-block text-left formHeading" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="height: 60px;">
						<h4>Family information
							<i class="mdi mdi-chevron-down float-right down" style="color:#fff; font-size: 35px;"></i>
							<i class="mdi mdi-chevron-up float-right up" style="color:#fff; font-size: 35px;display: none;"></i>
						</h4>
					</button>
				</h5>
			</div>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
				<div id="subAccordion">
					<!-- FAMILY PROFILE SUBSECTION -->
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
						<div id="collapseFamilyPro" class="collapse subForm" aria-labelledby="familyPro" data-parent="#subAccordion">
							<div class="card-body contentBody">
								<form id="fProForm" method="post">
									<input type="hidden" name="candidateID"/>
									<h5>Father</h5>
									<br>
									<div class="row">
										<div class="col-lg-5 col-md-6 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-5 col-md-12 col-sm-12">
													<label for="fatherAge" class="col-form-label">Age:</label>
												</div>
												<div class="col-lg-6 col-md-10 col-sm-12">
													<input type="number" name="faAge" id="fatherAge" class="form-control" placeholder="Father's age">
												</div>
											</div>
										</div>
										<div class="col-lg-7 col-md-6"></div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-md-6 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-5 col-md-12 col-sm-12">
													<label for="fatherOccupation" class="col-form-label">Occupation:</label>
												</div>
												<div class="col-lg-6 col-md-10 col-sm-12">
													<select class="form-control" name="faOccu" id="fatherOccupation">
														<option value="">Please select</option>
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
										<div class="col-lg-7 col-md-6">
											<div class="form-group row">
												<div class="col-lg-2 col-md-2"></div>
												<label for="fOccuSpec" class="col-lg-4 col-md-12 col-xs-12 col-form-label">Other:</label>
												<div class="col-lg-5 col-md-10 col-xs-12">
													<input type="text" name="faSpec" id="fOccuSpec" class="form-control" placeholder="Please specify">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-md-6 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-5 col-md-12 col-sm-12">
													<label for="fatherHealth" class="col-form-label">Health status:</label>
												</div>
												<div class="col-lg-6 col-md-10 col-sm-12">
													<select name="faHealth" id="fatherHealth" class="form-control">
														<option value="">Please select</option>
														<option value="Healthy">Healthy</option>
														<option value="issues">Other</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-lg-7 col-md-6 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-2 col-md-2"></div>
												<label for="faHealthSpec" class="col-lg-4 col-md-12 col-xs-12 col-form-label">Other:</label>
												<div class="col-lg-5 col-md-10 col-xs-12">
													<input type="text" name="faHealthSpec" id="fHealthCmt" class="form-control" placeholder="Please specify" />
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-md-6 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-5 col-md-12 col-sm-12">
													<label for="fatherEdu" class="col-form-label">Education:</label>
												</div>
												<div class="col-lg-6 col-md-10 col-sm-12">
													<select class="form-control" name="fatherEdu" id="fatherEdu">
														<option value="">Please select</option>
														<?php for ($i=0; $i <=12 ; $i++) { ?>
															<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
														<?php } ?>
														<option value="University">University</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									
									<!-- end of father information -->
									
									<br>
									<h5>Mother</h5>
									<br>
									<div class="row">
										<div class="col-lg-5 col-md-6 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-5 col-md-12 col-sm-12">
													<label for="motherAge" class="col-form-label">Age:</label>
												</div>
												<div class="col-lg-6 col-md-10 col-sm-12">
													<input type="number" name="moAge" id="motherAge" class="form-control" placeholder="Mother's age">
												</div>
											</div>
										</div>
										<div class="col-lg-7 col-md-6"></div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-md-6 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-5 col-md-12 col-sm-12">
													<label for="motherOccupation" class="col-form-label">Occupation:</label>
												</div>
												<div class="col-lg-6 col-md-10 col-sm-12">
													<select class="form-control" name="faOccu" id="motherOcc">
														<option value="">Please select</option>
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
										<div class="col-lg-7 col-md-6">
											<div class="form-group row">
												<div class="col-lg-2 col-md-2"></div>
												<label for="mSpecify" class="col-lg-4 col-md-12 col-xs-12 col-form-label">Other:</label>
												<div class="col-lg-5 col-md-10 col-xs-12">
													<input type="text" name="mSpecify" class="form-control" placeholder="Please specify">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-md-6 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-5 col-md-12 col-sm-12">
													<label for="MHealth" class="col-form-label">Health status:</label>
												</div>
												<div class="col-lg-6 col-md-10 col-sm-12">
													<select name="mhealthStat" id="MHealth" class="form-control">
														<option value="">Please select</option>
														<option value="Healthy">Healthy</option>
														<option value="issues">Other</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-lg-7 col-md-6 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-2 col-md-2"></div>
												<label for="mHealthSpec" class="col-lg-4 col-md-12 col-xs-12 col-form-label">Other:</label>
												<div class="col-lg-5 col-md-10 col-xs-12">
													<input type="text" name="mHealthSpec" class="form-control" placeholder="Please specify" />
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-md-6 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-5 col-md-12 col-sm-12">
													<label for="mEdu" class="col-form-label">Education:</label>
												</div>
												<div class="col-lg-6 col-md-10 col-sm-12">
													<select class="form-control" name="mEdu" id="mEdu">
														<option value="">Please select</option>
														<?php for ($i=0; $i <=12 ; $i++) { ?>
															<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
														<?php } ?>
														<option value="University">University</option>
													</select>
												</div>
											</div>
										</div>
									</div>

									<!-- end of mother information -->
									
									<!-- siblings -->
									<br>
									<h5>Siblings</h5>
									<br>
									<div class="row">
										<div class="col-lg-5 col-md-6 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-8 col-md-12 col-sm-12">
													<label for="numberSiblings" class="col-form-label">Number of siblings:</label>
												</div>
												<div class="col-lg-3 col-md-10 col-sm-12">
													<select class="form-control" name="numSiblings" id="numberSiblings">
														<option value=""></option>
														<?php for ($i=1; $i <=12 ; $i++) { ?>
															<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
														<?php } ?>
													</select>
												</div>
											</div>
										</div>
										<div class="col-lg-7 col-md-6"></div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-md-6 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-8 col-md-12 col-sm-12">
													<label for="married" class="col-form-label">O/W married:</label>
												</div>
												<div class="col-lg-3 col-md-10 col-sm-12">
													<select class="form-control" name="marriedStat" id="married">
														<option value=""></option>
														<?php for ($i=1; $i <=12 ; $i++) { ?>
															<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
														<?php } ?>
													</select>
												</div>
											</div>
										</div>
										<div class="col-lg-7 col-md-6"></div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-md-6 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-8 col-md-12 col-sm-12">
													<label for="separated" class="col-form-label">O/W separated:</label>
												</div>
												<div class="col-lg-3 col-md-10 col-sm-12">
													<select class="form-control" name="separated" id="separated">
														<option value=""></option>
														<?php for ($i=1; $i <=12 ; $i++) { ?>
															<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
														<?php } ?>
													</select>
												</div>
											</div>
										</div>
										<div class="col-lg-7 col-md-6"></div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-md-6 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-8 col-md-12 col-sm-12">
													<label for="liveInHouse" class="col-form-label"># living in the family's house (incl. parents):</label>
												</div>
												<div class="col-lg-3 col-md-10 col-sm-12">
													<select class="form-control gincomein" name="member" id="liveInHouse">
														<option value=""></option>
														<?php for ($i=1; $i <=15 ; $i++) { ?>
															<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
														<?php } ?>
													</select>
												</div>
											</div>
										</div>
										<div class="col-lg-7 col-md-6"></div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-md-6 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-8 col-md-12 col-sm-12">
													<label for="studentRanks" class="col-form-label">Student rank:</label>
												</div>
												<div class="col-lg-3 col-md-10 col-sm-12">
													<select class="form-control" name="studentRank" id="studentRanks">
														<option value=""></option>
														<?php for ($i=1; $i <=12 ; $i++) { ?>
															<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
														<?php } ?>
													</select>
												</div>
											</div>
										</div>
										<div class="col-lg-7 col-md-6"></div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8"></div>
										<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
											<button type="button" id="SaveFamilyPro" class="btn btn-primary float-right">Save information</button>
										</div>
									</div>	
								</form>
							</div>
						</div>
					</div>
					<!-- END FORM FAMILY PROFILE SUBSECTION -->

					<!-- FAMILY INCOME SUBSECTION -->
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
						<div id="collapseFamilyIncome" class="collapse subForm" aria-labelledby="familyIncome" data-parent="#subAccordion">
							<div class="card-body contentBody">
								<form id="formFamilyIncome" method="post">
									<input type="hidden" name="candidateID"/>
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<h5>Parents' income</h5>
											<br>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-10 col-md-10 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-5 col-md-6 col-sm-12">
													<label for="fMonthly" class="col-form-label">Monthly income:</label>
												</div>
												<div class="col-lg-5 col-md-5 col-sm-12">
													<input type="number" class="form-control fincome gincome gincomein" name="monthlyIncome" id="fMonthly" placeholder="$" style="text-align:right;">
												</div>
											</div>
										</div>
										<div class="col-lg-2 col-md-2"></div>
									</div>
									<div class="row">
										<div class="col-lg-10 col-md-10 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-5 col-md-6 col-sm-12">
													<label for="fDaily" class="col-form-label">Daily income:</label>
												</div>
												<div class="col-lg-5 col-md-5 col-sm-12">
													<input type="number" class="form-control fincome gincome gincomein" id="fDaily" name="paDailyIncome" placeholder="$" style="text-align:right;" required>
												</div>
											</div>
										</div>	
										<div class="col-lg-2 col-md-2"></div>
									</div>
									<div class="row">
										<div class="col-lg-10 col-md-10 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-5 col-md-6 col-sm-12">
													<label for="fSeasonal" class="col-form-label">Seasonal income:</label>
												</div>
												<div class="col-lg-5 col-md-5 col-sm-12">
													<input type="number" class="form-control fincome gincome gincomein" id="fSeasonal" name="seasonalIncome" placeholder="$" style="text-align:right;" required>
												</div>
											</div>
										</div>	
										<div class="col-lg-2 col-md-2"></div>
									</div>
									<div class="row">
										<div class="col-lg-10 col-md-10 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-5 col-md-6 col-sm-12">
													<label for="fYearly" class="col-form-label">Yearly income:</label>
												</div>
												<div class="col-lg-5 col-md-5 col-sm-12">
													<input type="number" class="form-control fincome gincome gincomein" id="fYearly" name="yearIncome" placeholder="$" style="text-align:right;" required>
												</div>
											</div>
										</div>	
										<div class="col-lg-2 col-md-2"></div>
									</div>
									<div class="row">
										<div class="col-lg-10 col-md-10 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-5 col-md-6 col-sm-12">
													<label for="fTotal" class="col-form-label">Total income (on a monthly basis):</label>
												</div>
												<div class="col-lg-5 col-md-5 col-sm-12">
													<input type="number" class="form-control fincome gincome gincomein" id="fTotal" name="parentTotalIncome" placeholder="$" style="text-align:right;" required>
												</div>
											</div>
										</div>	
										<div class="col-lg-2 col-md-2"></div>
									</div>
									<br>
									<!-- list all children assistance -->
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<h5>Children's assistance</h5>
											<br>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-10 col-md-10 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-5 col-md-6 col-sm-12">
													<label for="cMonthly" class="col-form-label">Monthly income:</label>
												</div>
												<div class="col-lg-5 col-md-5 col-sm-12">
													<input type="number" class="form-control cincome gincome gincomein" id="cMonthly" name="montlyChildAssiss" placeholder="$" style="text-align:right;" required>
												</div>
											</div>
										</div>	
										<div class="col-lg-2 col-md-2"></div>
									</div>
									<div class="row">
										<div class="col-lg-10 col-md-10 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-5 col-md-6 col-sm-12">
													<label for="cDaily" class="col-form-label">Daily income:</label>
												</div>
												<div class="col-lg-5 col-md-5 col-sm-12">
													<input type="number" class="form-control cincome gincome gincomein" id="cDaily" name="ChildDailyIncome" placeholder="$" style="text-align:right;" required>
												</div>
											</div>
										</div>	
										<div class="col-lg-2 col-md-2"></div>
									</div>
									<div class="row">
										<div class="col-lg-10 col-md-10 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-5 col-md-6 col-sm-12">
													<label for="cSeasonal" class="col-form-label">Seasonal income:</label>
												</div>
												<div class="col-lg-5 col-md-5 col-sm-12">
													<input type="number" class="form-control cincome gincome gincomein" id="cSeasonal" name="ChildSeasonalIncome" placeholder="$" style="text-align:right;" required>
												</div>
											</div>
										</div>	
										<div class="col-lg-2 col-md-2"></div>
									</div>
									<div class="row">
										<div class="col-lg-10 col-md-10 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-5 col-md-6 col-sm-12">
													<label for="cYearly" class="col-form-label">Yearly income:</label>
												</div>
												<div class="col-lg-5 col-md-5 col-sm-12">
													<input type="number" class="form-control cincome gincome gincomein" id="cYearly" name="ChildYearIncome" placeholder="$" style="text-align:right;" required>
												</div>
											</div>
										</div>	
										<div class="col-lg-2 col-md-2"></div>
									</div>
									<div class="row">
										<div class="col-lg-10 col-md-10 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-5 col-md-6 col-sm-12">
													<label for="cTotal" class="col-form-label">Total income (on a monthly basis):</label>
												</div>
												<div class="col-lg-5 col-md-5 col-sm-12">
													<input type="number" class="form-control cincome gincome gincomein" id="cTotal" name="childTotalIncome" placeholder="$" style="text-align:right;" required>
												</div>
											</div>
										</div>	
										<div class="col-lg-2 col-md-2"></div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<h5>Global family's income (parents' income + children's assistance)</h5>
											<br>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-10 col-md-10 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-5 col-md-6 col-sm-12">
													<label for="gTotal1" class="col-form-label"><b>Total monthly income ($):</b></label>
												</div>
												<div class="col-lg-5 col-md-5 col-sm-12">
													<input type="number" class="form-control fincome gincome gincomein" id="gTotal1" name="totalMonthIncome" placeholder="$" style="text-align:right;" readonly>
												</div>
											</div>
										</div>	
										<div class="col-lg-2 col-md-2"></div>
									</div>
									<div class="row">
										<div class="col-lg-10 col-md-10 col-sm-12">
											<div class="form-group row">
												<div class="col-lg-1 col-md-1"></div>
												<div class="col-lg-5 col-md-6 col-sm-12">
													<label for="gTotal2" class="col-form-label"><b>Total monthly income per individual living in the parent's house ($):</b></label>
												</div>
												<div class="col-lg-5 col-md-5 col-sm-12">
													<input type="number" class="form-control fincome gincome gincomein" id="gTotal2" name="incomeIndividual" placeholder="$" style="text-align:right;" readonly>
												</div>
											</div>
										</div>	
										<div class="col-lg-2 col-md-2"></div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8"></div>
										<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
											<button type="button" id="btnSaveFamilyIncome" class="btn btn-primary float-right">Save information</button>
										</div>
									</div>		
								</form>
							</div>
						</div>
					</div>
					<!-- END FORM FAMILY INCOME SUBSECTION -->
					
					<!-- SUBSECTION FAMILY EXPENSE -->
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
						<div id="collapseFamilyExpense" class="collapse subForm" aria-labelledby="familyExpense" data-parent="#subAccordion">
							<div class="card-body contentBody">
								<form id="formExpense" method="post">
									<input type="hidden" name="candidateID"/>
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
										<br>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label for="totalExpense" class="col-5 col-form-label"><b>Total expense:</b></label>
												<div class="col-7">
													<input type="number" class="form-control" id="totalExpense" placeholder="$" name="totalExpense" style="text-align:right;" readonly>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8"></div>
										<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
											<button type="button" id="saveExpense" class="btn btn-primary float-right">Save information</button>
										</div>
									</div>												
								</form>
							</div>
						</div>
					</div>
					<!-- END SUBSECTION FAMILY EXPENSE -->
					<!-- SUBSECTION FAMILY LOANS & DEBTS -->
					<div class="card">
						<div id="loanDebt">
							<h5 class="mb-0">
								<button class="btn btn-default collapsed btn-block text-left subHeading" data-toggle="collapse" data-target="#collapseLoanDebt" aria-expanded="false" aria-controls="collapseLoanDebt" style="height: 60px;border-bottom: 2px solid #fff;background-color: #f8f9fa; ">
									<h5 class="subCollapse">Loans & debts
										<i class="mdi mdi-chevron-down float-right subDown" style="color:#000; font-size: 30px;">
										</i>
										<i class="mdi mdi-chevron-up float-right subUp" style="color:#000; font-size: 30px;display: none;">
										</i>
									</h5>
								</button>
							</h5>
						</div>
						<div id="collapseLoanDebt" class="collapse subForm" aria-labelledby="loanDebt" data-parent="#subAccordion">
							<div class="card-body contentBody">
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<h5>General information</h5>
									</div>
								</div>
								<br>
								<form id="formLoan" method="post">
									<input type="hidden" name="candidateID"/>
									<div class="row">
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="amount" class="col-lg-6 col-md-6 col-xs-12 col-form-label">Initial amount:</label>
												<div class="col-lg-6 col-md-6 col-xs-12">
													<input id="amount" type="number" class="form-control" name="initAmount" placeholder="$" style="text-align:right;" required="">
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="institution" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Institution:
												</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input id="institution" class="form-control" name="instit" placeholder="Name">
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="interest" class="col-lg-6 col-md-6 col-xs-12 col-form-label">Interest rates:
												</label>
												<div class="col-lg-6 col-md-6	 col-xs-12">
													<input type="number" step="0.1" id="interest" class="form-control" name="interRates" placeholder="%" style="text-align:right;">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="form-group row">
												<label for="reason" class="col-lg-2 col-md-2 col-xs-12 col-form-label">Reason:</label>
												<div class="col-lg-10 col-md-10 col-xs-12">
													<input type="text" id="reason" class="form-control" name="reason" placeholder="Please comment">
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<h5>Amount to payback</h5>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="monthly" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Monthly:</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" id="monthly" class="form-control" name="monthly" placeholder="$" style="text-align:right;">
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="trimester" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Trimester:</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" id="trimester" class="form-control" name="trimester" placeholder="$" style="text-align:right;">
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="semester" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Semester:</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" id="semester" class="form-control" name="semester" placeholder="$" style="text-align:right;" >
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="capital" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Capital:</label>
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
											<button type="button" id="saveLoan" class="btn btn-primary float-right">Save information</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END SUBSECTION FAMILY LOANS & DEBTS -->
					<!-- FORM FAMILY RESIDENCE -->
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
						<div id="collapseResidence" class="collapse subForm" aria-labelledby="residence" data-parent="#subAccordion">
							<div class="card-body contentBody">
								<form id="residenceForm" method="POST">
									<input type="hidden" name="candidateID"/>
									<div class="row">
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="status" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Status:</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<select name="status" id="status" class="form-control">
														<option value="">Please select</option>
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
													<label for="residenceAge" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Age:</label>
													<div class="col-lg-7 col-md-7 col-xs-12">
														<select class="form-control" name="age" id="residenceAge">
															<option value="">Please select</option>
															<?php 
																for($i=1; $i<10; $i++){
															 ?>
																<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
															<?php 
															}
														 ?>
														</select>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-4">
												<div class="form-group row">
													<label for="ratingScale" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Rating Scale:</label>
													<div class="col-lg-7 col-md-7 col-xs-12">
														<select class="form-control" name="rating" id="rating">
															<option value="">Please select</option>
															<?php 
																for($i=1; $i<6; $i++){
															 ?>
															 	<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
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
										<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8"></div>
										<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
											<button type="button" id="saveResidence" class="btn btn-primary float-right">Save information</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END SUBSECTION FAMILY RESIDENCE -->

					<!-- SUBSECTION FAMILY HOME ASSETS -->
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
						<div id="collapseHomeAsset" class="collapse subForm" aria-labelledby="homeAsset" data-parent="#subAccordion">
							<div class="card-body contentBody">	
								<form id="formHomeAsset" method="POST">
									<input type="hidden" name="candidateID"/>
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<h5>Appliances</h5>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="row">
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<label for=""><b>Coef 5</b></label>
													<br>
												</div>
											</div>
											<br>
											<div class="form-group row">
												<label for="refrigerator" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Refrigerator:</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="refrigerator" id="refrigerator" style="text-align:right;" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="conditioner" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Air conditioner:</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="airCondi" id="conditioner" style="text-align:right;" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="lcdTV" class="col-lg-5 col-md-5 col-xs-12 col-form-label">LCD TV:</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="lcdTv" id="lcdTV" style="text-align:right;" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="computer1" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Computer > 100$:</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="chComputer" id="computer1" style="text-align:right;" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="furnished" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Furnished cabinet > 300$:</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="fCabinet" id="furnished" style="text-align:right;" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="smartphone" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Smartphone > 100$:</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="smartphone" id="smartphone" style="text-align:right;" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="camera1" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Camera > 100$:</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="cCamera" id="camera1" style="text-align:right;" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="sofa1" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Sofa > 300$:</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="chSofa" id="sofa1" style="text-align:right;" required>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="row">
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<label for=""><b>Coef 3</b></label>
												</div>
											</div>
											<br>					
											<div class="form-group row">
												<label for="radio" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Radio:</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control coef_x3 assetGlobal" placeholder="Quantity " name="radio" id="radio" style="text-align:right;" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="ricecooker" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Ricecooker:</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control coef_x3 assetGlobal" placeholder="Quantity" name="ricecooker" id="ricecooker" style="text-align:right;" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="colorTV" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Color TV:</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control coef_x3 assetGlobal" placeholder="Quantity" name="colorTv" id="colorTV" style="text-align:right;" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="computer2" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Computer < 100$:</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control coef_x3 assetGlobal" placeholder="Quantity" name="exComputer" id="computer2" style="text-align:right;" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="dvdPlayer" class="col-lg-5 col-md-5 col-xs-12 col-form-label">DVD player:</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control coef_x3 assetGlobal" placeholder="Quantity" name="dvd" id="dvdPlayer" style="text-align:right;" required>
												</div>
											</div>		
											<div class="form-group row">
												<label for="phone" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Phone < 100$:</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control coef_x3 assetGlobal" placeholder="Quantity" name="phone" id="phone" style="text-align:right;" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="camera2" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Camera < 100$:</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control coef_x3 assetGlobal" placeholder="Quantity" name="exCamera" id="camera2" style="text-align:right;" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="sofa2" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Sofa < 300$:</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control coef_x3 assetGlobal" placeholder="Quantity" name="exSofa" id="sofa2" style="text-align:right;" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="gascooker" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Gascooker:</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control coef_x3 assetGlobal" placeholder="Quantity" name="gasCooker" id="gascooker" style="text-align:right;" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="fruit" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Fruit blender:</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control coef_x3 assetGlobal" placeholder="Quantity" name="fblender" id="fruit" style="text-align:right;" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="electrical" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Electrical cooker:</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control coef_x3 assetGlobal" placeholder="Quantity" name="eCooker" id="electrical" style="text-align:right;" required>
												</div>
											</div>
										</div>
									</div>
									<!-- VEHICLES -->
									<br>
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<h5>Vehicles (Coef 5)</h5>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-6 col-md-6">
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="form-group row">
														<label for="motobike" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Motobike > 500$:</label>
														<div class="col-lg-7 col-md-7 col-xs-12">
															<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="motobike" id="motobike" style="text-align:right;" required>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="form-group row">
														<label for="farming" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Farming machine:</label>
														<div class="col-lg-7 col-md-7 col-xs-12">
															<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="farming" id="farming" style="text-align:right;" required>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="form-group row">
														<label for="car" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Car / Truck:</label>
														<div class="col-lg-7 col-md-7 col-xs-12">
															<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="car" id="car" style="text-align:right;" required>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-6 col-md-6">
											<textarea name="vComment" cols="66" rows="6" class="form-control" placeholder="Comment" style="line-height: 22px;"></textarea>
										</div>
									</div>
									<!-- END VEHICLES -->
									<br>
									<!-- ANIMALS -->
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<h5>Animals (Coef 5)</h5>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-6 col-md-6">
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="form-group row">
														<label for="cow" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Cow:</label>
														<div class="col-lg-7 col-md-7 col-xs-12">
															<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="cow" id="cow" style="text-align:right;" required>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="form-group row">
														<label for="buffaloe" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Buffalo:</label>
														<div class="col-lg-7 col-md-7 col-xs-12">
															<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="buffalo" id="buffaloe" style="text-align:right;" required>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="form-group row">
														<label for="pig" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Pig:</label>
														<div class="col-lg-7 col-md-7 col-xs-12">
															<input type="number" class="form-control coef_x5 assetGlobal" placeholder="Quantity" name="pig" id="pig" style="text-align:right;" required>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-6 col-md-6">
											<textarea name="aComment" cols="66" rows="6" class="form-control assetGlobal" placeholder="Comment" style="line-height: 22px;"></textarea>					
										</div>
									</div>
									<!-- END OF ANIMALS -->
									<br>
									<!-- FARM -->
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<h5>Farm (If farm size > 10 000 m <sup>2</sup> (= 1 hectare), count as coef 5; 3 otherwise)</h5>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="form-group row">
														<label for="size" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Size:</label>
														<div class="col-lg-7 col-md-7 col-xs-12">
															<input type="number" class="form-control assetGlobal" placeholder="m&sup2;" name="farmSize" id="farmSize" style="text-align:right;" required>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<textarea name="fComment" cols="66" rows="1" class="form-control assetGlobal" placeholder="Comment"></textarea>
										</div>
									</div>
									<!-- END FARM -->
									<br>
									<!-- RESULT -->
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<h5>Result</h5>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<div  class="col-lg-5 col-md-5 col-xs-12">
													<label for="sumQuantity5" class="col-form-label"><b>Total score coef 5:</b></label>
													<p>(Sum of quantities x 5)</p>
												</div>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control assetGlobal" placeholder="Score" name="sumQuantity5" id="sumQuantity5" style="text-align:right;" readonly >
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<div  class="col-lg-5 col-md-5 col-xs-12">
													<label for="sumQuantity3" class="col-form-label"><b>Total score coef 3:</b></label>
													<p>(Sum of quantities x 3)</p>
												</div>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input type="number" class="form-control assetGlobal" placeholder="Score" name="sumQuantity3" id="sumQuantity3" style="text-align:right;" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<div  class="col-lg-5 col-md-5 col-xs-12">
													<label for="globalAsset" class="col-form-label"><b>Total home assets score:</b></label>		
												</div>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<input class="form-control assetGlobal" type="number" placeholder="Score" name="globalAsset" id="globalAsset" style="text-align:right;" readonly> 
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<div  class="col-lg-5 col-md-5 col-xs-12">
													<label for="certificate" class="col-form-label">Poverty certificate:</label>
												</div>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<select class="form-control" name="certificate" id="certificate">
														<option value="">Please select</option>
														<option value="Yes">Yes</option>
														<option value="No">Other</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group row">
												<div  class="col-lg-5 col-md-5 col-xs-12">
													<label for="specifyLevel" class="col-form-label">If yes, please specify the level:</label>
												</div>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<select class="form-control" name="specifyLevel" id="specifyLevel">
														<option value="">Please select</option>
														<?php 
															for($i=1; $i<4; $i++){
														 ?>
														 <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
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
										<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8"></div>
										<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
											<button type="button" id="saveHomeAsset" class="btn btn-primary float-right">Save information</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END SUBSECTION FAMILY HOME ASSETS -->
				</div>
			</div>
		</div>
		<!-- END OF FAMILY INFORMATION FORM -->

		<br>
		<div class="conclustion">
			<form id="formConclude" action="" method="post">
				<input type="hidden" name="candidateID"/>
				<div class="row">
					<div class="col-md-12">
						<h4 style="color: #000;">Investigator's conclusion</h4>
						<textarea name="investigatorConclude" rows="5" class="form-control" placeholder="Please comment"></textarea>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-lg-8 col-md-5 col-sm-0 col-xs-0"></div>
					<div class="col-lg-2 col-md-4 col-sm-7 col-xs-8">
							<a href="<?php echo base_url() ?>candidates" class="btn btn-primary float-right" role="button" style="margin-right: 10px;"><i class="mdi mdi-arrow-left-bold"></i>Back to the list of candidates</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-5 col-xs-6">
						<button type="button" id="saveConclude" class="btn btn-primary float-right">Save information</button>
					</div>
				</div>
			</form>	
		</div>
	</div>	
</div>

<!-- POPUP MANAGE THE LIST OF NGOs -->
<div class="container">
  <!-- The Modal -->
  <div class="modal" id="theModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">List of NGO</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        	<form method="post" id="editListNGO">
        	<table class="table table-bordered table-hover table-sortable" id="tab_logic">
        		<thead>
        			<tr >
        				<th class="text-center">
        					Action
        				</th>
        				<th class="text-center">
        					Name
        				</th>
        			</tr>
        		</thead>
        		<tbody>
        			<?php $i=0; ?>
        			<?php foreach ($ngos as $ngo) { ?> 
        			<tr class="hidden">
        				<td data-name="del">
        					<a class="remove_row" id="NGO<?php echo $ngo->ngo_id; ?>" href="#">
                  			<i class="text-danger mdi mdi-delete" title="Delete" style="font-size: 25px;"></i>
                			</a>
        				</td>
        				<td data-name="name">
        					<input type="hidden" id="rowNb<?php echo $i; ?>" name="rowNb<?php echo $i; ?>" value="<?php echo $ngo->ngo_id; ?>" class="form-control"/>
        					<input type="text" id="ngoName<?php echo $i; ?>" value="<?php echo $ngo->ngo_name; ?>" name='rowNameNb<?php echo $i; ?>' class="form-control"/>
        				</td>
        			</tr>
			 			<?php $i++; } ?>
        		</tbody>
        	</table>
        	<input type="hidden" id="nbRows" name="nbRows" value="<?php echo $i; ?>" />
        	<a id="add_row" class="btn btn-primary pull-right text-white"><i class="mdi mdi-plus-circle"></i>&nbsp;Add NGO</a>
          	<button type="submit" class="btn btn-primary" data-dismiss="modal" id="saveNGO">Save list</button>
        	</form>
        </div>
      </div>
    </div>
  </div>
</div>	
<!-- END OF THE MODAL -->

<script src="<?php echo base_url();?>assets/js/newCandidateForm.js" base_url="<?php echo base_url();?>"></script>
