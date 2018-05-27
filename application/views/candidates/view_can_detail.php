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
			<?php foreach ($username as $value) {?>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
				<!-- <img class="text-center" src="<?php //echo base_url() ?>assets/images/background/neourng.jpg" style="width: 45%; margin-left: 27%;"/><br> -->
				<!-- <p class="text-center">Nuon neourng</p> -->
				<p class="text-center"><?php echo $value->can_name; ?></p>
			</div>	
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">	
			</div>
		</div>
		<?php } ?>
		<br>
	</div>
	<div class="form-group row">
		<?php foreach ($grade as  $value) {?>
		<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12"></div>
		<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
			<label for="mEdu" class="col-form-label">Global grade :</label>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
			<p class="form-control"><?php echo $value->can_global_grade; ?></p>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			
		</div>
		<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12"></div>
	</div>
	<?php } ?>
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
						<?php foreach ($list as $value) {?>
						<div class="row">
							<div class="col-lg-5 col-md-5">
								<div class="form-group row">
									<div class="col-lg-1 col-md-1"></div>
									<label for="gender" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Gender :</label>
									<div class="col-lg-6 col-md-6 col-xs-12">
										<p class="form-control"><?php echo $value->can_gender; ?></p>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-lg-2 col-md-2"></div>
									<label for="age" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Age :</label>
									<div class="col-lg-5 col-md-5 col-xs-12">
										<p class="form-control"><?php  echo $value->can_age;?></p>
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
										<p class="form-control"><?php echo $value->pro_name; ?></p>
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
										<p class="form-control"><?php echo $value->ngo_name; ?></p>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-md-2"></div>
									<!-- <label for="ngoOther" class="col-lg-2 col-md-2 col-xs-12 col-form-label">Other :</label> -->
									
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
										<p class="form-control" id="Health"><?php echo $value->can_healthy; ?></p>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-md-2"></div>
									<label for="healthOther" class="col-lg-2 col-md-2 col-xs-12 col-form-label"> </label>
									<div class="col-lg-8 col-md-8 col-xs-12">
										
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
										<p class="form-control"><?php  echo $value->can_rank_inclass;?></p>
									</div>
								</div>
							</div>		
						</div>
						<?php } ?>
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
									<!-- <div class="col-md-2"></div> -->
									<label for="healthOther" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
									<div class="col-lg-8 col-md-8 col-xs-12">
										<p class="form-control"><?php echo $value->can_activity_achivement; ?></p>
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
										<p class="form-control"><?php echo $value->can_pn_choic_rank; ?></p>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-lg-2 col-md-2"></div>
									<label for="gender" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Responsibility & maturity :</label>
									<div class="col-lg-5 col-md-5 col-xs-12">
										<p class="form-control"><?php echo $value->can_resposibility; ?></p>
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
										<p class="form-control"><?php echo $value->can_pnc_motivation; ?></p>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-lg-2 col-md-2"></div>
									<label for="gender" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Communication :</label>
									<div class="col-lg-5 col-md-5 col-xs-12">
										<p class="form-control"><?php echo $value->can_student_commit; ?></p>
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
										<p class="form-control"><?php echo $value->can_other_scholaship ?></p>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-7">
								<div class="form-group row">
									<div class="col-lg-2 col-md-2"></div>
									<label for="gender" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Choice rank :</label>
									<div class="col-lg-5 col-md-5 col-xs-12">
										<p class="form-control"><?php echo $value->can_other_choice_rank; ?></p>
									</div>
								</div>
							</div>	
						</div>
						
						
						<div class="row">
							<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12"></div>
							<div class="col-lg-4 col-md-4 col-sm-9 col-xs-12">
								
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
										<p class="form-control"><?php echo $value->can_student_commit; ?></p>
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
										<p class="form-control"><?php echo $value->can_parents_commit; ?></p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"></div>
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
								
							</div>
						</div>
					</form>
					<!-- <?php //} ?> -->
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
													<?php if($family != NULL){ ?>
													<?php foreach ($family as  $value){?>
													<p class="form-control"><?php echo $value->f_age; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
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
													
													<?php if($family != NULL){ ?>
													<?php foreach ($family as  $value){?>
													<p class="form-control"><?php echo $value->f_age; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="col-lg-1 col-md-1"></div>
										<div class="col-lg-6 col-md-6 col-sm-8">
											<?php if($family != NULL){ ?>
											<?php foreach ($family as  $value){?>
											<p class="form-control"><?php echo $value->f_occupation; ?></p>
											<?php } ?>
											<?php }else{ ?>
											<p class="form-control">No information</p>
											<?php } ?>
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
													<?php if($family != NULL){ ?>
													<?php foreach ($family as  $value){?>
													<p class="form-control"><?php echo $value->f_health; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="col-lg-1 col-md-1"></div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<?php if($family != NULL){ ?>
											<?php foreach ($family as  $value){?>
											<p class="form-control"><?php echo $value->f_health_comment; ?></p>
											<?php } ?>
											<?php }else{ ?>
											<p class="form-control">No information</p>
											<?php } ?>
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
													<?php if($family != NULL){ ?>
													<?php foreach ($family as  $value){?>
													<p class="form-control"><?php echo $value->f_edu; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
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
													<?php if($family != NULL){ ?>
													<?php foreach ($family as  $value){?>
													<p class="form-control"><?php echo $value->m_age; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
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
													<?php if($family != NULL){ ?>
													<?php foreach ($family as  $value){?>
													<p class="form-control"><?php echo $value->m_occupation ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="col-lg-1 col-md-1"></div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<?php if($family != NULL){ ?>
											<?php foreach ($family as  $value){?>
											<p class="form-control"><?php echo $value->m_occupation_comment; ?></p>
											<?php } ?>
											<?php }else{ ?>
											<p class="form-control">No information</p>
											<?php } ?>
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
													<?php if($family != NULL){ ?>
													<?php foreach ($family as  $value){?>
													<p class="form-control"><?php echo $value->m_health; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="col-lg-1 col-md-1"></div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<?php if($family != NULL){ ?>
											<?php foreach ($family as  $value){?>
											<p class="form-control"><?php echo $value->m_health_comment; ?></p>
											<?php } ?>
											<?php }else{ ?>
											<p class="form-control">No information</p>
											<?php } ?>
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
													<?php if($family != NULL){ ?>
													<?php foreach ($family as  $value){?>
													<p class="form-control"><?php echo $value->m_edu; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
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
													<?php if($family != NULL){ ?>
													<?php foreach ($family as  $value){?>
													<p class="form-control"><?php echo $value->number_sibbling; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group row">
												<div class="col-md-6">
													<label for="married" class="col-form-label">Married :</label>
												</div>
												<div class="col-md-6">
													<?php if($family != NULL){ ?>
													<?php foreach ($family as  $value){?>
													<p class="form-control"><?php echo $value->number_maried; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group row">
												<div class="col-md-6">
													<label for="separated" class="col-form-label">Separated :</label>
												</div>
												<div class="col-md-6">
													<?php if($family != NULL){ ?>
													<?php foreach ($family as  $value){?>
													<p class="form-control"><?php echo $value->number_separated; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
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
													<?php if($family != NULL){ ?>
													<?php foreach ($family as  $value){?>
													<p class="form-control"><?php echo $value->number_family_living; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group row">
												<div class="col-md-6">
													<label for="studentRank" class="col-form-label">Student rank :</label>
												</div>
												<div class="col-md-6">
													<?php if($family != NULL){ ?>
													<?php foreach ($family as  $value){?>
													<p class="form-control"><?php echo $value->stu_rank; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-9 col-sm-9"></div>
										<div class="col-md-3 col-sm-3">
											
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
													<?php if($income != NULL){ ?>
													<?php foreach ($income as  $value){?>
													<p class="form-control"><?php echo $value->f_monthly; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
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
													<?php if($income != NULL){ ?>
													<?php foreach ($income as  $value){?>
													<p class="form-control"><?php echo $value->f_daily; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
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
													<?php if($income != NULL){ ?>
													<?php foreach ($income as  $value){?>
													<p class="form-control"><?php echo $value->f_seasonal; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
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
													<?php if($income != NULL){ ?>
													<?php foreach ($income as  $value){?>
													<p class="form-control"><?php echo $value->f_yearly; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
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
													<?php if($income != NULL){ ?>
													<?php foreach ($income as  $value){?>
													<p class="form-control"><?php echo $value->f_total; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
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
													<?php if($income != NULL){ ?>
													<?php foreach ($income as  $value){?>
													<p class="form-control"><?php echo $value->c_monthly; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
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
													<?php if($income != NULL){ ?>
													<?php foreach ($income as  $value){?>
													<p class="form-control"><?php echo $value->c_daily; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
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
													<?php if($income != NULL){ ?>
													<?php foreach ($income as  $value){?>
													<p class="form-control"><?php echo $value->c_seasonal; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
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
													<?php if($income != NULL){ ?>
													<?php foreach ($income as  $value){?>
													<p class="form-control"><?php echo $value->c_yearly; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
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
													<?php if($income != NULL){ ?>
													<?php foreach ($income as  $value){?>
													<p class="form-control"><?php echo $value->c_total; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
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
													<?php if($income != NULL){ ?>
													<?php foreach ($income as  $value){?>
													<p class="form-control"><?php echo $value->g_monthly; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
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
													<?php if($income != NULL){ ?>
													<?php foreach ($income as  $value){?>
													<p class="form-control"><?php echo $value->g_monthly_individual; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>	
									</div>	
									<div class="row">
										<div class="col-md-6"></div>
										<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
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
													<?php if($expense != NULL){ ?>
													<?php foreach ($expense as  $value){?>
													<p class="form-control"><?php echo $value->ex_rice; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
											<div class="form-group row">
												<label for="food" class="col-5 col-form-label">Food:</label>
												<div class="col-7">
													<?php if($expense != NULL){ ?>
													<?php foreach ($expense as  $value){?>
													<p class="form-control"><?php echo $value->ex_food; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
											<div class="form-group row">
												<label for="firewood" class="col-5 col-form-label">Firewood-Gas-Chacoal:</label>
												<div class="col-7">
													<?php if($expense != NULL){ ?>
													<?php foreach ($expense as  $value){?>
													<p class="form-control"><?php echo $value->ex_firewood; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
											<div class="form-group row">
												<label for="loan" class="col-5 col-form-label">Loan:</label>
												<div class="col-7">
													<?php if($expense != NULL){ ?>
													<?php foreach ($expense as  $value){?>
													<p class="form-control"><?php echo $value->ex_loan; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
											<div class="form-group row">
												<label for="study" class="col-5 col-form-label">Study:</label>
												<div class="col-7">
													<?php if($expense != NULL){ ?>
													<?php foreach ($expense as  $value){?>
													<p class="form-control"><?php echo $value->ex_study; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group row">
												<label for="medical" class="col-5 col-form-label">Medical:</label>
												<div class="col-7">
													<?php if($expense != NULL){ ?>
													<?php foreach ($expense as  $value){?>
													<p class="form-control"><?php echo $value->ex_medical; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
											<div class="form-group row">
												<label for="electricity" class="col-5 col-form-label">Electricity & Water:</label>
												<div class="col-7">
													<?php if($expense != NULL){ ?>
													<?php foreach ($expense as  $value){?>
													<p class="form-control"><?php echo $value->ex_electricities_water; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
											<div class="form-group row">
												<label for="agriculture" class="col-5 col-form-label">Agriculture:</label>
												<div class="col-7">
													<?php if($expense != NULL){ ?>
													<?php foreach ($expense as  $value){?>
													<p class="form-control"><?php echo $value->ex_agriculture; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
											<div class="form-group row">
												<label for="wedding" class="col-5 col-form-label">Wedding 
												& Ceremony:</label>
												<div class="col-7">
													<?php if($expense != NULL){ ?>
													<?php foreach ($expense as  $value){?>
													<p class="form-control"><?php echo $value->ex_weding; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
											<div class="form-group row">
												<label for="otherUtilities" class="col-5 col-form-label">Other utilities:</label>
												<div class="col-7">
													<?php if($expense != NULL){ ?>
													<?php foreach ($expense as  $value){?>
													<p class="form-control"><?php echo $value->ex_other_utilities; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
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
													<?php if($expense != NULL){ ?>
													<?php foreach ($expense as  $value){?>
													<p class="form-control"><?php echo $value->ex_total; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>

									</div>
									<br>
									<div class="row">
										<div class="col-md-4"></div>
										<div class="col-md-4"></div>
										<div class="col-md-4">
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
												<label for="amount" class="col-lg-6 col-md-6 col-xs-12 col-form-label">Original amount :</label>
												<div class="col-lg-6 col-md-6 col-xs-12">
													<?php if($loan != NULL){ ?>
													<?php foreach ($loan as  $value){?>
													<p class="form-control"><?php echo $value->ld_initial_amount; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="institution" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Institution :
												</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<?php if($loan != NULL){ ?>
													<?php foreach ($loan as  $value){?>
													<p class="form-control"><?php echo $value->ld_instritution; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="interest" class="col-lg-6 col-md-6 col-xs-12 col-form-label">Interest rates :
												</label>
												<div class="col-lg-6 col-md-6 col-xs-12">
													<?php if($loan != NULL){ ?>
													<?php foreach ($loan as  $value){?>
													<p class="form-control"><?php echo $value->ld_interest_tates; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="form-group row">
												<label for="reason" class="col-lg-2 col-md-2 col-xs-12 col-form-label">Reason :</label>
												<div class="col-lg-10 col-md-10 col-xs-12">
													<?php if($loan != NULL){ ?>
													<?php foreach ($loan as  $value){?>
													<p class="form-control"><?php echo $value->ld_reason; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
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
													<?php if($loan != NULL){ ?>
													<?php foreach ($loan as  $value){?>
													<p class="form-control"><?php echo $value->ld_monthly; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="trimester" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Trimester :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<?php if($loan != NULL){ ?>
													<?php foreach ($loan as  $value){?>
													<p class="form-control"><?php echo $value->ld_trimester; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="semester" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Semester :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<?php if($loan != NULL){ ?>
													<?php foreach ($loan as  $value){?>
													<p class="form-control"><?php echo $value->ld_semester; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="capital" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Capital :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<?php if($loan != NULL){ ?>
													<?php foreach ($loan as  $value){?>
													<p class="form-control"><?php echo $value->ld_capital; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8"></div>
										<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
											
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
													<?php if($residenc != NULL){ ?>
													<?php foreach ($residenc as  $value){?>
													<p class="form-control"><?php echo $value->re_status; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="residenceAge" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Age :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<?php if($residenc != NULL){ ?>
													<?php foreach ($residenc as  $value){?>
													<p class="form-control"><?php echo $value->re_age; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4">
											<div class="form-group row">
												<label for="rating" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Rating scale :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<?php if($residenc != NULL){ ?>
													<?php foreach ($residenc as  $value){?>
													<p class="form-control"><?php echo $value->re_rating_scale; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-4 col-md-4 col-sm-4 col-xs-12"></div>
										<div class="col-md-4 col-md-4 col-sm-4 col-xs-12"></div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
													<?php if($home_assets != NULL){ ?>
													<?php foreach ($home_assets as  $value){?>
													<p class="form-control"><?php echo $value->h_refrigerator; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="radio" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Radio :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<?php if($home_assets != NULL){ ?>
													<?php foreach ($home_assets as  $value){?>
													<p class="form-control"><?php echo $value->h_radio; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="conditioner" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Air conditioner :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<?php if($home_assets != NULL){ ?>
													<?php foreach ($home_assets as  $value){?>
													<p class="form-control"><?php echo $value->h_air_condictioner; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="ricecooker" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Ricecooker :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<?php if($home_assets != NULL){ ?>
													<?php foreach ($home_assets as  $value){?>
													<p class="form-control"><?php echo $value->h_electrical_cooker; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="lcdTV" class="col-lg-5 col-md-5 col-xs-12 col-form-label">LCD TV :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<?php if($home_assets != NULL){ ?>
													<?php foreach ($home_assets as  $value){?>
													<p class="form-control"><?php echo $value->h_lcd_tv; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="colorTV" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Color TV :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<?php if($home_assets != NULL){ ?>
													<?php foreach ($home_assets as  $value){?>
													<p class="form-control"><?php echo $value->h_color_tv; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="computer1" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Computer < 100$ :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<?php if($home_assets != NULL){ ?>
													<?php foreach ($home_assets as  $value){?>
													<p class="form-control"><?php echo $value->h_computer_smal_100; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="computer2" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Computer > 100$ :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<?php if($home_assets != NULL){ ?>
													<?php foreach ($home_assets as  $value){?>
													<p class="form-control"><?php echo $value->h_computer_big_100; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="furnished" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Furnished cabinet > 300$ :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<?php if($home_assets != NULL){ ?>
													<?php foreach ($home_assets as  $value){?>
													<p class="form-control"><?php echo $value->h_furnished_big_300; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="dvdPlayer" class="col-lg-5 col-md-5 col-xs-12 col-form-label">DVD player :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<?php if($home_assets != NULL){ ?>
													<?php foreach ($home_assets as  $value){?>
													<p class="form-control"><?php echo $value->h_dvd_player; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="smartphone" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Smartphone > 100$ :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<?php if($home_assets != NULL){ ?>
													<?php foreach ($home_assets as  $value){?>
													<p class="form-control"><?php echo $value->h_smartphone_big_100; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="phone" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Phone < 100$ :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<?php if($home_assets != NULL){ ?>
													<?php foreach ($home_assets as  $value){?>
													<p class="form-control"><?php echo $value->h_phone_smal_100; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="camara1" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Camera > 100$ :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<?php if($home_assets != NULL){ ?>
													<?php foreach ($home_assets as  $value){?>
													<p class="form-control"><?php echo $value->h_camera_big_100; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="camara2" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Camera < 100$ :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<?php if($home_assets != NULL){ ?>
													<?php foreach ($home_assets as  $value){?>
													<p class="form-control"><?php echo $value->h_computer_smal_100; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="sofa1" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Sofa > 300$ :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<?php if($home_assets != NULL){ ?>
													<?php foreach ($home_assets as  $value){?>
													<p class="form-control"><?php echo $value->h_sofa_big_300; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form-group row">
												<label for="sofa2" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Sofa < 300$ :</label>
												<div class="col-lg-7 col-md-7 col-xs-12">
													<?php if($home_assets != NULL){ ?>
													<?php foreach ($home_assets as  $value){?>
													<p class="form-control"><?php echo $value->h_sofa_smal_300; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
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
													<?php if($home_assets != NULL){ ?>
													<?php foreach ($home_assets as  $value){?>
													<p class="form-control"><?php echo $value->h_gascooker; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
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
													<?php if($home_assets != NULL){ ?>
													<?php foreach ($home_assets as  $value){?>
													<p class="form-control"><?php echo $value->h_fruit_blender; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
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
													<?php if($home_assets != NULL){ ?>
													<?php foreach ($home_assets as  $value){?>
													<p class="form-control"><?php echo $value->h_electrical_cooker; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
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
															<?php if($home_assets != NULL){ ?>
															<?php foreach ($home_assets as  $value){?>
															<p class="form-control"><?php echo $value->h_motobike_big_500; ?></p>
															<?php } ?>
															<?php }else{ ?>
															<p class="form-control">No information</p>
															<?php } ?>
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
															<?php if($home_assets != NULL){ ?>
															<?php foreach ($home_assets as  $value){?>
															<p class="form-control"><?php echo $value->h_farming_machine; ?></p>
															<?php } ?>
															<?php }else{ ?>
															<p class="form-control">No information</p>
															<?php } ?>
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
															<?php if($home_assets != NULL){ ?>
															<?php foreach ($home_assets as  $value){?>
															<p class="form-control"><?php echo $value->h_car_truck; ?></p>
															<?php } ?>
															<?php }else{ ?>
															<p class="form-control">No information</p>
															<?php } ?>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-6 col-md-6">
											<?php if($home_assets != NULL){ ?>
											<?php foreach ($home_assets as  $value){?>
											<p class="form-control"><?php echo $value->h_vehicles_comment; ?></p>
											<?php } ?>
											<?php }else{ ?>
											<p class="form-control">No information</p>
											<?php } ?>
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
															<?php if($home_assets != NULL){ ?>
															<?php foreach ($home_assets as  $value){?>
															<p class="form-control"><?php echo $value->h_cow; ?></p>
															<?php } ?>
															<?php }else{ ?>
															<p class="form-control">No information</p>
															<?php } ?>
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
															<?php if($home_assets != NULL){ ?>
															<?php foreach ($home_assets as  $value){?>
															<p class="form-control"><?php echo $value->h_buffaloe; ?></p>
															<?php } ?>
															<?php }else{ ?>
															<p class="form-control">No information</p>
															<?php } ?>
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
															<?php if($home_assets != NULL){ ?>
															<?php foreach ($home_assets as  $value){?>
															<p class="form-control"><?php echo $value->h_pig; ?></p>
															<?php } ?>
															<?php }else{ ?>
															<p class="form-control">No information</p>
															<?php } ?>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-6 col-md-6">
											<?php if($home_assets != NULL){ ?>
											<?php foreach ($home_assets as  $value){?>
											<p class="form-control"><?php echo $value->h_animals_comment; ?></p>
											<?php } ?>
											<?php }else{ ?>
											<p class="form-control">No information</p>
											<?php } ?>
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
															<?php if($home_assets != NULL){ ?>
															<?php foreach ($home_assets as  $value){?>
															<p class="form-control"><?php echo $value->h_farm_size; ?></p>
															<?php } ?>
															<?php }else{ ?>
															<p class="form-control">No information</p>
															<?php } ?>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<?php if($home_assets != NULL){ ?>
											<?php foreach ($home_assets as  $value){?>
											<p class="form-control"><?php echo $value->h_farm_comment; ?></p>
											<?php } ?>
											<?php }else{ ?>
											<p class="form-control">No information</p>
											<?php } ?>
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
															<?php if($home_assets != NULL){ ?>
															<?php foreach ($home_assets as  $value){?>
															<p class="form-control"><?php echo $value->h_total_x5; ?></p>
															<?php } ?>
															<?php }else{ ?>
															<p class="form-control">No information</p>
															<?php } ?>
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
														<?php if($home_assets != NULL){ ?>
														<?php foreach ($home_assets as  $value){?>
														<p class="form-control"><?php echo $value->h_total_x3; ?></p>
														<?php } ?>
														<?php }else{ ?>
														<p class="form-control">No information</p>
														<?php } ?>
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
															<?php if($home_assets != NULL){ ?>
															<?php foreach ($home_assets as  $value){?>
															<p class="form-control"><?php echo $value->h_glbal_total; ?></p>
															<?php } ?>
															<?php }else{ ?>
															<p class="form-control">No information</p>
															<?php } ?>
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
													<?php if($home_assets != NULL){ ?>
													<?php foreach ($home_assets as  $value){?>
													<p class="form-control"><?php echo $value->h_poverty_certificate; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="row">
												<div class="col-md-6 col-sm-12">
													<label for="specifyLevel" style="line-height: 2.5;">If yes, please specify the level:</label>
												</div>
												<div class="col-md-3 col-sm-12">
													<?php if($home_assets != NULL){ ?>
													<?php foreach ($home_assets as  $value){?>
													<p class="form-control"><?php echo $value->h_level; ?></p>
													<?php } ?>
													<?php }else{ ?>
													<p class="form-control">No information</p>
													<?php } ?>
												</div>
												<div class="col-md-2 col-sm-12"></div>
											</div>
										</div>
									</div>
									<!-- end of poverty -->
									<br>
									<div class="row">
										<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"></div>
										<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
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
					<?php if($list != NULL){ ?>
					<?php foreach ($list as  $value){?>
					<p class="form-control"><?php echo $value->can_investigator_conclusion; ?></p>
					<?php } ?>
					<?php }else{ ?>
					<p class="form-control">No information</p>
					<?php } ?>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-10 col-md-10"></div>
				<div class="col-lg-2 col-md-2">
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
</body>
</html>
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