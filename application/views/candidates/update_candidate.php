<style>
body{
	background-color: #fff;
	position: relative; 
	font-family: verdana;
}
</style>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<br>
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
						<form method="POST" class="gInfo">
							<!-- <?php //foreach ($value as $values) { ?>	 --><!-- start loop all information -->
							<div class="row">
								<div class="col-lg-5 col-md-5">
									<div class="form-group row">
										<div class="col-lg-1 col-md-1"></div>
										<label for="gender" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Global grade :</label>
										<div class="col-lg-6 col-md-6 col-xs-12">
											<select class="form-control" name="grade" id="globalGrade">
												<?php foreach ($value as $values) { ?>
													<option value="A+" <?php if($values->can_global_grade == 'A+') echo 'selected="selected"'; ?>>A+</option>
													<option value="A" <?php if($values->can_global_grade == 'A') echo 'selected="selected"'; ?>>A</option>
													<option value="B+" <?php if($values->can_global_grade == 'B+') echo 'selected="selected"'; ?>>B+</option>
													<option value="B-" <?php if($values->can_global_grade == 'B-') echo 'selected="selected"'; ?>>B-</option>
													<option value="Failed" <?php if($values->can_global_grade == 'Failed') echo 'selected="selected"'; ?>>Failed</option>
												<?php } ?>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-5 col-md-5">
									<div class="form-group row">
										<div class="col-lg-1 col-md-1"></div>
										<label for="fname" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Firstname :</label>
										<div class="col-lg-6 col-md-6 col-xs-12">
											<?php foreach ($value as $values) { ?>
												<input type="text" name="fname" id="fname" class="form-control" value="<?php echo $values->can_firstname; ?>" placeholder="firstname">
											<?php } ?>
										</div>
									</div>
								</div>
								<div class="col-lg-7 col-md-7">
									<div class="form-group row">
										<div class="col-lg-2 col-md-2"></div>
										<label for="lname" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Lastname :</label>
										<div class="col-lg-5 col-md-5 col-xs-12">
											<?php foreach ($value as $values) { ?>
												<input type="text" name="lname" id="lname" class="form-control" value="<?php echo $values->can_lastname; ?>" placeholder="lastname">
											<?php } ?>
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
												<?php foreach ($value as $values) { ?>
													<option value="Male" <?php if ($values->can_gender == 'Male') echo 'selected="selected"'; ?>>Male</option>
													<option value="Female" <?php if ($values->can_gender == 'Female') echo 'selected="selected"'; ?>>Female</option>
												<?php } ?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-lg-7 col-md-7">
									<div class="form-group row">
										<div class="col-lg-2 col-md-2"></div>
										<label for="age" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Age :</label>
										<div class="col-lg-5 col-md-5 col-xs-12">
											<?php foreach ($value as $values) { ?>
												<input type="number" name="canAge" class="form-control" value="<?php echo $values->can_age ?>" id="age" placeholder="Your Age " required>
											<?php } ?>
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
												<?php foreach ($value as $values) { ?>
													<?php
													foreach ($provinces as $province) { ?>
														<option value="<?php echo $province->pro_id; ?>"
															<?php 
															if ($province->pro_id == $values->pro_id) {
																?>
																selected="selected"
																<?php
															}
															?>>
															<?php echo $province->pro_name; ?>
														</option>
														<?php 
													}
													?>
												<?php } ?>
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
												<?php foreach ($value as $values) { ?>
													<?php foreach ($ngo as $ngos) { ?>
														<option value="<?php echo $ngos->ngo_id; ?>" 
															<?php if($ngos->ngo_id == $values->ngo_id) { ?>
																selected="selected"
															<?php } ?>
															>
															<?php echo $ngos->ngo_name; ?>
														</option>
													<?php } ?>
												<?php } ?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-lg-1 col-md-1">
									<?php if($this->session->loggedIn === TRUE) { ?>
										<?php $role =$this->session->nameRole;?>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group row">
												<label for="ngoOther" class="col-lg-3 col-md-3 col-xs-12 col-form-label" style="margin-left: 3%;">Other :</label>
												<div class="col-lg-6 col-md-7 col-xs-12">
													<?php foreach ($value as $values) { ?>
														<input type="text" name="ngoComment" class="form-control" id="ngoOther" value="<?php echo $values->can_ngo_comment; ?>" placeholder="If other, please specify " required style="margin-left: -32px;width: 161%;">
													<?php } ?>
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
													<select class="form-control" id="health" name="can_health">
														<?php foreach ($value as $values) { ?>
															<?php if ($values->can_healthy == 'Healthy') { ?>
																<option value="Healthy" selected="selected">Healthy</option>
																<option value="Other">Other</option>
																<?php
															}else{
																?>
																<option value="Healthy">Healthy</option>
																<option value="Other" selected="selected">Other</option>
															<?php } ?>										
														<?php } ?>
													</select>
												</div>
											</div>
										</div>
										<div class="col-lg-7 col-md-7">
											<div class="form-group row">
												<div class="col-md-2"></div>
												<label for="healthOther" class="col-lg-2 col-md-2 col-xs-12 col-form-label">Other :</label>
												<div class="col-lg-8 col-md-8 col-xs-12">
													<?php foreach ($value as $values) { ?>
														<input type="text" class="form-control" name="healthIssues" value="<?php echo $values->can_health_comment; ?>" id="healthOther" placeholder="If some health issuses, please specify" required style="margin-left: -4px;">
													<?php } ?>
												<?php }else{ ?>
													<input type="text" class="form-control" name="healthIssues" id="healthOther" placeholder="If some health issuses, please specify" required style="margin-left: -4px;">
												<?php } ?>
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
												<?php foreach ($value as $values) { ?>
													<input type="text" class="form-control" name="canRankClass" value="<?php echo $values->can_rank_inclass; ?>" id="rankClass" placeholder="Ex: 10/33" required>
												<?php } ?>
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
												<?php foreach ($value as $values) { ?>
													<input type="text" class="form-control" name="canAchivement" value="<?php echo $values->can_activity_achivement; ?>" id="activityActivity" placeholder="please comment" style="margin-left: -4px;" required>
												<?php } ?>
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
											<label for="pncChoice" class="col-lg-6 col-md-6 col-xs-12 col-form-label">PNC choice rank :</label>
											<div class="col-lg-4 col-md-4 col-xs-12">
												<select class="form-control" id="pncChoice" name="canPncRank">
													<?php foreach ($value as $values) { ?>
														<option value="1" <?php if($values->can_pn_choic_rank == '1') echo 'selected="selected"'; ?>>1</option>
														<option value="2" <?php if($values->can_pn_choic_rank == '2') echo 'selected="selected"'; ?>>2</option>
														<option value="3" <?php if($values->can_pn_choic_rank == '3') echo 'selected="selected"'; ?>>3</option>
														<option value="4" <?php if($values->can_pn_choic_rank == '4') echo 'selected="selected"'; ?>>4</option>
													<?php } ?>
												</select>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="form-group row">
											<div class="col-lg-1 col-md-1"></div>
											<label for="responsibility" class="col-lg-6 col-md-6 col-xs-12 col-form-label">Responsibility & maturity :</label>
											<div class="col-lg-4 col-md-4 col-xs-12">
												<?php foreach ($value as $values) { ?>
													<input type="text" class="form-control" name="responsibilityMaturity" value="<?php echo $values->can_resposibility ?>" id="responsibility" placeholder="Ex: 18/20" required style="">
												<?php } ?>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-6">
										<div class="form-group row">
											<div class="col-lg-1 col-md-1"></div>
											<label for="motivation" class="col-lg-6 col-md-6 col-xs-12 col-form-label">Motivation for PNC :</label>
											<div class="col-lg-4 col-md-4 col-xs-12">
												<?php foreach ($value as $values) { ?>
													<input type="text" class="form-control" name="motivatForPnc" value="<?php echo $values->can_pnc_motivation ?>" id="motivation" placeholder="Ex: 18/20" required>
												<?php } ?>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="form-group row">
											<div class="col-lg-1 col-md-1"></div>
											<label for="communication" class="col-lg-6 col-md-6 col-xs-12 col-form-label">Communication :</label>
											<div class="col-lg-4 col-md-4 col-xs-12">
												<?php foreach ($value as $values) { ?>
													<input type="text" class="form-control" name="canCommunicate" value="<?php echo $values->can_communicate ?>" id="communication" placeholder="Ex: 10/10" required>
												<?php } ?>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">Other Scholarship:</div>
								<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12"></div><br>
								<div class="row">
									<div class="col-lg-5 col-md-5">
										<div class="form-group row">
											<div class="col-lg-1 col-md-1"></div>
											<label for="alter1" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Alternative 1:</label>
											<div class="col-lg-6 col-md-6 col-xs-12">
												<?php foreach ($value as $values) { ?>
												<input type="text" class="form-control" name="alternative1" id="alter1" value="<?php echo $values->can_alternative1; ?>" placeholder="Other" required>
											<?php } ?>
											</div>
										</div>
									</div>
									<div class="col-lg-7 col-md-7">
										<div class="form-group row">
											<div class="col-lg-2 col-md-2"></div>
											<label for="choiceRank1" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Choice rank :</label>
											<div class="col-lg-5 col-md-5 col-xs-12">
												<select class="form-control" name="choiceRank1" id="choiceRank1">
													<?php if($value != NULL) {
													 foreach ($value as $values) {
														for ($i=1; $i <=4 ; $i++) { 
														?>
														<option value="<?php echo $i; ?>" <?php if($i == $values->can_rank_1) echo 'selected="selected"' ?>>
															<?php echo $i; ?>
														</option>
														<?php		
														}
													}
												}else{
													for ($i=1; $i <=4 ; $i++) {
														?>
														<option value="<?php echo $i; ?>"><?php echo $i ?></option>
														<?php		
													}
												}
													?>
												</select>
											</div>
										</div>
									</div>	
								</div>
								<div class="row">
									<div class="col-lg-5 col-md-5">
										<div class="form-group row">
											<div class="col-lg-1 col-md-1"></div>
											<label for="alter2" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Alternative 2:</label>
											<div class="col-lg-6 col-md-6 col-xs-12">
												<?php foreach ($value as $values) { ?>
												<input type="text" class="form-control" name="alternative2" value="<?php echo $values->can_alternative2; ?>" id="alter2" placeholder="Other" required>
											<?php } ?>
											</div>
										</div>
									</div>
									<div class="col-lg-7 col-md-7">
										<div class="form-group row">
											<div class="col-lg-2 col-md-2"></div>
											<label for="choiceRank2" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Choice rank :</label>
											<div class="col-lg-5 col-md-5 col-xs-12">
												<select class="form-control" name="choiceRank2" id="choiceRank2">
													<?php if($value != NULL) {
													 foreach ($value as $values) {
														for ($i=1; $i <=4 ; $i++) { 
														?>
														<option value="<?php echo $i; ?>" <?php if($i == $values->can_rank_2) echo 'selected="selected"' ?>>
															<?php echo $i; ?>
														</option>
														<?php		
														}
													}
												}else{
													for ($i=1; $i <=4 ; $i++) { 
														?>
														<option value="<?php echo $i; ?>"><?php echo $i ?></option>
														<?php		
													}
												}
													?>
												</select>
											</div>
										</div>
									</div>	
								</div>
								<div class="row">
									<div class="col-lg-5 col-md-5">
										<div class="form-group row">
											<div class="col-lg-1 col-md-1"></div>
											<label for="alter3" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Alternative 3:</label>
											<div class="col-lg-6 col-md-6 col-xs-12">
												<?php foreach ($value as $values) { ?>
												<input type="text" class="form-control" name="alternative3" id="alter3" value="<?php echo $values->can_alternative3; ?>" placeholder="Other" required>
											<?php } ?>
											</div>
										</div>
									</div>
									<div class="col-lg-7 col-md-7">
										<div class="form-group row">
											<div class="col-lg-2 col-md-2"></div>
											<label for="choiceRank3" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Choice rank :</label>
											<div class="col-lg-5 col-md-5 col-xs-12">
												<select class="form-control" name="choiceRank3" id="choiceRank3">
													<?php if($value != NULL) {
													 foreach ($value as $values) {
														for ($i=1; $i <=4 ; $i++) {
														?>
														<option value="<?php echo $i; ?>" <?php if($i == $values->can_rank_3) echo 'selected="selected"' ?>>
															<?php echo $i; ?>
														</option>
														<?php		
														}
													}
												}else{
													for ($i=1; $i <=4 ; $i++) {
														?>
														<option value="<?php echo $i; ?>"><?php echo $i ?></option>
														<?php		
													}
												}
													?>
												</select>
											</div>
										</div>
									</div>	
								</div>
							<div class="row">
								<div class="col-lg-4 col-md-4">
									<div class="form-group row">
										<div class="col-lg-1 col-md-1"></div>
										<label for="studentCommit" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Commitment of the student :</label>
									</div>
								</div>	
								<div class="col-lg-7 col-md-7">
									<div class="form-group row">
										<div class="col-md-1"></div>
										<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
										<div class="col-lg-9 col-md-9 col-xs-12">
											<?php foreach ($value as $values) { ?>
												<input type="text" name="CanCommitment" class="form-control" value="<?php echo $values->can_student_commit ?>" id="studentCommit" placeholder="please comment" required>
											<?php } ?>
										</div>
									</div>
								</div>	
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-4">
									<div class="form-group row">
										<div class="col-lg-1 col-md-1"></div>
										<label for="parentsCommit" class="col-lg-10 col-md-10 col-xs-12 col-form-label">Commitment of the parents :</label>
									</div>
								</div>
								<div class="col-lg-7 col-md-7">
									<div class="form-group row">
										<div class="col-md-1"></div>
										<label for="" class="col-lg-2 col-md-2 col-xs-12 col-form-label"></label>
										<div class="col-lg-9 col-md-9 col-xs-12">
											<?php foreach ($value as $values) { ?>
												<input type="text" class="form-control" name="canParentCommitment" value="<?php echo $values->can_parents_commit ?>" id="parentsCommit" placeholder="please comment" required>
											<?php } ?>
										</div>
									</div>
								</div>	
							</div>
							<div class="row">
								<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"></div>
								<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
									<button type="button" class="btn btn-primary float-right" id="UpCanInfo">Update information</button><br><br>	
								</div>
							</div>
						</form>		<!-- for student information is work perfectly with update -->
						<!-- end form student information -->
					</div>
				</div>
			</div>
			<script>
				$(document).ready(function(){
					$('#UpCanInfo').click(function(){
						var id = <?php echo $this->uri->segment(3); ?>;	
						$.ajax({
							type: 'POST',
							url: '<?php echo base_url(); ?>C_candidates/uCandidateInfo/'+id,
							data: $('form.gInfo').serialize(),
							success:function(msg){
								alert("Candidate information was updated.");
							},
							error:function(){
								alert('Error update candidate information.');
							}
						}); 	
					});
				});
			</script>
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
									<form method="P0ST" class="familyProfile">
										<!-- <?php //foreach ($parent as $value) { ?> -->	<!-- start get old value from database to input -->
										<div class="row">
											<div class="col-lg-5 col-md-5 col-sm-4">
												<div class="form-group row">
													<div class="col-lg-1 col-md-1"></div>
													<div class="col-lg-5 col-md-4 col-sm-4">
														<label for="fatherAge" class="col-form-label">Age :</label>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-8">
														<?php if ($parent != NULL) {
															foreach ($parent as $value) { ?>
																<input type="number" value="<?php echo $value->f_age ?>" name="fAge" id="fAge" class="form-control">
															<?php } 
														}else{ ?>
															<input type="number" name="fAge" id="fAge" class="form-control">
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
														<label for="fatherOccupation" class="col-form-label">Occupation :</label>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-8">
														<select class="form-control" name="fOccupation" id="fOccupation">
															<?php if ($parent != NULL) { ?>
																<?php foreach ($parent as $value) { ?>
																	<option value="Farmer/Laborer" <?php if($value->f_occupation == 'Farmer/Laborer') echo 'selected="selected"'; ?>>Farmer/Laborer</option>
																	<option value="Teacher" <?php if ($value->f_occupation == 'Teacher') echo 'selected="selected"'; ?>>Teacher</option>
																	<option value="Soldier" <?php if($value->f_occupation == 'Soldier') echo 'selected="selected"'; ?>>Soldier</option>
																	<option value="Police Officer" <?php if($value->f_occupation == 'Police Officer') echo 'selected="selected"'; ?>>Police Officer</option>
																	<option value="Agriculture" <?php if($value->f_occupation == 'Agriculture') echo 'selected="selected"'; ?>>Agriculture</option>
																	<option value="Other" <?php if($value->f_occupation == 'Other') echo 'selected="selected"'; ?>>Other</option>
																<?php } ?>
															<?php }else{ ?>
																<option value="Farmer/Laborer">Farmer/Laborer</option>
																<option value="Teacher">Teacher</option>
																<option value="Soldier">Soldier</option>
																<option value="Police Officer">Police Officer</option>
																<option value="Agriculture">Agriculture</option>
																<option value="Other">Other</option>
															<?php } ?>
														</select>
													</div>
												</div>
											</div>
											<div class="col-lg-1 col-md-1"></div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<?php if ($parent != NULL) { ?>
													<?php foreach ($parent as $value) { ?>
														<input type="text" name="fotherOccupationSpecify" id="otherOccupation" value="<?php echo $value->f_occupation_comment; ?>" class="form-control" placeholder="If other, please specify">
													<?php } ?>
												<?php }else{ ?>
													<input type="text" name="fotherOccupationSpecify" id="otherOccupation" class="form-control" placeholder="If other, please specify">
												<?php } ?>
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
														<select name="fHealth" id="fHealth" class="form-control">
															<?php if ($parent != NULL) { ?>
																<?php foreach ($parent as $value) { ?>
																	<option value="Healthy" <?php if($value->f_health == 'Healthy') echo 'selected="selected"'; ?>>Healthy</option>
																	<option value="Health issues" <?php if($value->f_health == 'Health issues') echo 'selected="selected"'; ?>>Health issues</option>
																<?php } ?>
															<?php }else{ ?>
																<option value="Healthy">Healthy</option>
																<option value="Health issues">Health issues</option>
															<?php } ?>
														</select>
													</div>
												</div>
											</div>
											<div class="col-lg-1 col-md-1"></div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<?php if ($parent != NULL) { ?>
													<?php foreach ($parent as $value) { ?>
														<input type="text" id="fatherHealth" name="fatherhealthIssues" value="<?php echo $value->f_health_comment; ?>" class="form-control" placeholder="If health issues, please specify" />
													<?php } ?>
												<?php }else{ ?>
													<input type="text" id="fatherHealth" name="fatherhealthIssues" class="form-control" placeholder="If health issues, please specify" />
												<?php } ?>
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
														<select class="form-control" name="fEducation" id="fEdu">
															<?php if ($parent != NULL) { ?>
																<?php foreach ($parent as $value) { ?>
																	<option value="1" <?php if($value->f_edu == 1) echo 'selected="selected"'; ?>>1</option>
																	<option value="2" <?php if($value->f_edu == 2) echo 'selected="selected"'; ?>>2</option>
																	<option value="3" <?php if($value->f_edu == 3) echo 'selected="selected"'; ?>>3</option>
																	<option value="4" <?php if($value->f_edu == 4) echo 'selected="selected"'; ?>>4</option>
																	<option value="5" <?php if($value->f_edu == 5) echo 'selected="selected"'; ?>>5</option>
																	<option value="6" <?php if($value->f_edu == 6) echo 'selected="selected"'; ?>>6</option>
																	<option value="7" <?php if($value->f_edu == 7) echo 'selected="selected"'; ?>>7</option>
																	<option value="8" <?php if($value->f_edu == 8) echo 'selected="selected"'; ?>>8</option>
																	<option value="9" <?php if($value->f_edu == 9) echo 'selected="selected"'; ?>>9</option>
																	<option value="10" <?php if($value->f_edu == 10) echo 'selected="selected"'; ?>>10</option>
																	<option value="11" <?php if($value->f_edu == 11) echo 'selected="selected"'; ?>>11</option>
																	<option value="12" <?php if($value->f_edu == 12) echo 'selected="selected"'; ?>>12</option>
																	<option value="University" <?php if($value->f_edu == 'University') echo 'selected="selected"'; ?>>University</option>
																<?php } ?>
															<?php }else{ ?>
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
															<?php } ?>
														</select>
													</div>
												</div>
											</div>
											<div class="col-md-8"></div>
										</div>
										<h5>Mother</h5>
										<div class="row">
											<div class="col-lg-5 col-md-5 col-sm-4">
												<div class="form-group row">
													<div class="col-lg-1 col-md-1"></div>
													<div class="col-lg-5 col-md-4 col-sm-4">
														<label for="motherAge" class="col-form-label">Age :</label>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-8">
														<?php if ($parent != NULL) { ?>
															<?php foreach ($parent as $value) { ?>
																<input type="number" value="<?php echo $value->m_age; ?>" name="mAge" id="mAge" class="form-control">
															<?php } ?>
														<?php }else{ ?>
															<input type="number" name="mAge" id="mAge" class="form-control">
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
														<label for="motherOccupation" class="col-form-label">Occupation :</label>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-8">
														<select class="form-control" name="mOccupation" id="mOccupation">
															<?php if ($parent != NULL) { ?>
																<?php foreach ($parent as $value) { ?>
																	<option value="Farmer/Laborer" <?php if($value->m_occupation == 'Farmer/Laborer') echo 'selected="selected"'; ?>>Farmer/Laborer</option>
																	<option value="Teacher" <?php if($value->m_occupation == 'Teacher') echo 'selected="selected"'; ?>>Teacher</option>
																	<option value="Soldier" <?php if($value->m_occupation == 'Soldier') echo 'selected="selected"'; ?>>Soldier</option>
																	<option value="Police Officer" <?php if($value->m_occupation == 'Police Officer') echo 'selected="selected"'; ?>>Police Officer</option>
																	<option value="Agriculture" <?php if($value->m_occupation == 'Agriculture') echo 'selected="selected"'; ?>>Agriculture</option>
																	<option value="Other" <?php if($value->m_occupation == 'Other') echo 'selected="selected"'; ?>>Other</option>
																<?php } ?>
															<?php }else{ ?>
																<option value="Farmer/Laborer">Farmer/Laborer</option>
																<option value="Teacher">Teacher</option>
																<option value="Soldier">Soldier</option>
																<option value="Police Officer">Police Officer</option>
																<option value="Agriculture">Agriculture</option>
																<option value="Other">Other</option>
															<?php } ?>
														</select>
													</div>
												</div>
											</div>
											<div class="col-lg-1 col-md-1"></div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<?php if ($parent != NULL) { ?>
													<?php foreach ($parent as $value) { ?>
														<input type="text" name="mOccupationSpecify" id="mOccu" value="<?php echo $value->m_occupation_comment; ?>" class="form-control" placeholder="If other, please specify">
													<?php } ?>
												<?php }else{ ?>
													<input type="text" name="mOccupationSpecify" id="mOccu" class="form-control" placeholder="If other, please specify">
												<?php } ?>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-5 col-md-5 col-sm-8">
												<div class="form-group row">
													<div class="col-lg-1 col-md-1"></div>
													<div class="col-lg-5 col-md-5 col-sm-4">
														<label for="healthStatus" class="col-form-label">Health status :</label>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-8">
														<select name="mhealth" id="mHealth" class="form-control">
															<?php if ($parent != NULL) { ?>
																<?php foreach ($parent as $value) { ?>
																	<option value="Healthy" <?php if($value->m_health == "Healthy") echo 'selected="selected"'; ?>>Healthy</option>
																	<option value="Health issues" <?php if($value->m_health == "Health issues") echo 'selected="selected"'; ?>>Health issues</option>
																<?php } ?>
															<?php }else{ ?>
																<option value="Healthy">Healthy</option>
																<option value="Health issues">Health issues</option>
															<?php } ?>
														</select>
													</div>
												</div>
											</div>
											<div class="col-lg-1 col-md-1"></div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<?php if ($parent != NULL) { ?>
													<?php foreach ($parent as $value) { ?>
														<input type="text" value="<?php echo $value->m_health_comment; ?>" name="mhealthSpecify" id="motherHealth" class="form-control" placeholder="If health issues, please specify" />
													<?php } ?>
												<?php }else{ ?>
													<input type="text" name="mhealthSpecify" id="motherHealth" class="form-control" placeholder="If health issues, please specify" />
												<?php } ?>
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
														<select class="form-control" name="mEducation" id="mEdu">
															<?php if ($parent != NULL) { ?>
																<?php foreach ($parent as $value) { ?>
																	<option value="1" <?php if($value->m_edu == '1') echo 'selected="selected"'; ?>>1</option>
																	<option value="2" <?php if($value->m_edu == '2') echo 'selected="selected"'; ?>>2</option>
																	<option value="3" <?php if($value->m_edu == '3') echo 'selected="selected"'; ?>>3</option>
																	<option value="4" <?php if($value->m_edu == '4') echo 'selected="selected"'; ?>>4</option>
																	<option value="5" <?php if($value->m_edu == '5') echo 'selected="selected"'; ?>>5</option>
																	<option value="6" <?php if($value->m_edu == '6') echo 'selected="selected"'; ?>>6</option>
																	<option value="7" <?php if($value->m_edu == '7') echo 'selected="selected"'; ?>>7</option>
																	<option value="8" <?php if($value->m_edu == '8') echo 'selected="selected"'; ?>>8</option>
																	<option value="9" <?php if($value->m_edu == '9') echo 'selected="selected"'; ?>>9</option>
																	<option value="10" <?php if($value->m_edu == '10') echo 'selected="selected"'; ?>>10</option>
																	<option value="11" <?php if($value->m_edu == '11') echo 'selected="selected"'; ?>>11</option>
																	<option value="12" <?php if($value->m_edu == '12') echo 'selected="selected"'; ?>>12</option>
																	<option value="University" <?php if($value->m_edu == 'University') echo 'selected="selected"'; ?>>University</option>
																<?php } ?>
															<?php }else{ ?>
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
															<?php } ?>
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
															<?php if ($parent != NULL) { ?>
																<?php foreach ($parent as $value) { ?>
																	<option value="1" <?php if($value->number_sibbling == '1') echo 'selected="selected"'; ?>>1</option>
																	<option value="2" <?php if($value->number_sibbling == '2') echo 'selected="selected"'; ?>>2</option>
																	<option value="3" <?php if($value->number_sibbling == '3') echo 'selected="selected"'; ?>>3</option>
																	<option value="4" <?php if($value->number_sibbling == '4') echo 'selected="selected"'; ?>>4</option>
																	<option value="5" <?php if($value->number_sibbling == '5') echo 'selected="selected"'; ?>>5</option>
																	<option value="6" <?php if($value->number_sibbling == '6') echo 'selected="selected"'; ?>>6</option>
																	<option value="7" <?php if($value->number_sibbling == '7') echo 'selected="selected"'; ?>>7</option>
																	<option value="8" <?php if($value->number_sibbling == '8') echo 'selected="selected"'; ?>>8</option>
																	<option value="9" <?php if($value->number_sibbling == '9') echo 'selected="selected"'; ?>>9</option>
																	<option value="10" <?php if($value->number_sibbling == '10') echo 'selected="selected"'; ?>>10</option>
																	<option value="11" <?php if($value->number_sibbling == '11') echo 'selected="selected"'; ?>>11</option>
																	<option value="12" <?php if($value->number_sibbling == '12') echo 'selected="selected"'; ?>>12</option>
																<?php } ?>
															<?php }else{ ?>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4" >4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
																<option value="11">11</option>
																<option value="12">12</option>
															<?php } ?>
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
															<?php if ($parent != NULL) { ?>
																<?php foreach ($parent as $value) { ?>
																	<option value="1" <?php if($value->number_maried == '1') echo 'selected="selected"'; ?>>1</option>
																	<option value="2" <?php if($value->number_maried == '2') echo 'selected="selected"'; ?>>2</option>
																	<option value="3" <?php if($value->number_maried == '3') echo 'selected="selected"'; ?>>3</option>
																	<option value="4" <?php if($value->number_maried == '4') echo 'selected="selected"'; ?>>4</option>
																	<option value="5" <?php if($value->number_maried == '5') echo 'selected="selected"'; ?>>5</option>
																	<option value="6" <?php if($value->number_maried == '6') echo 'selected="selected"'; ?>>6</option>
																	<option value="7" <?php if($value->number_maried == '7') echo 'selected="selected"'; ?>>7</option>
																	<option value="8" <?php if($value->number_maried == '8') echo 'selected="selected"'; ?>>8</option>
																	<option value="9" <?php if($value->number_maried == '9') echo 'selected="selected"'; ?>>9</option>
																	<option value="10" <?php if($value->number_maried == '10') echo 'selected="selected"'; ?>>10</option>
																	<option value="11" <?php if($value->number_maried == '11') echo 'selected="selected"'; ?>>11</option>
																	<option value="12" <?php if($value->number_maried == '12') echo 'selected="selected"'; ?>>12</option>
																<?php } ?>
															<?php }else{ ?>
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
															<?php } ?>
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
														<select class="form-control" name="Separated" id="separated">
															<?php if ($parent != NULL) { ?>
																<?php foreach ($parent as $value) { ?>
																	<option value="1" <?php if($value->number_separated == '1') echo 'selected="selected"' ;?>>1</option>
																	<option value="2" <?php if($value->number_separated == '2') echo 'selected="selected"'; ?>>2</option>
																	<option value="3" <?php if($value->number_separated == '3') echo 'selected="selected"'; ?>>3</option>
																	<option value="4" <?php if($value->number_separated == '4') echo 'selected="selected"'; ?>>4</option>
																	<option value="5" <?php if($value->number_separated == '5') echo 'selected="selected"'; ?>>5</option>
																	<option value="6" <?php if($value->number_separated == '6') echo 'selected="selected"'; ?>>6</option>
																	<option value="7" <?php if($value->number_separated == '7') echo 'selected="selected"'; ?>>7</option>
																	<option value="8" <?php if($value->number_separated == '8') echo 'selected="selected"'; ?>>8</option>
																	<option value="9" <?php if($value->number_separated == '9') echo 'selected="selected"'; ?>>9</option>
																	<option value="10" <?php if($value->number_separated == '10') echo 'selected="selected"'; ?>>10</option>
																	<option value="11" <?php if($value->number_separated == '11') echo 'selected="selected"'; ?>>11</option>
																	<option value="12" <?php if($value->number_separated == '12') echo 'selected="selected"'; ?>>12</option>
																<?php } ?>
															<?php }else{ ?>
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
															<?php } ?>
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
														<select class="form-control" name="liveInHouse" id="liveInHouse">
															<?php if ($parent != NULL) { ?>
																<?php foreach ($parent as $value) { ?>
																	<option value="1" <?php if($value->number_family_living == '1') echo 'selected="selected"'; ?>>1</option>
																	<option value="2" <?php if($value->number_family_living == '2') echo 'selected="selected"'; ?>>2</option>
																	<option value="3" <?php if($value->number_family_living == '3') echo 'selected="selected"'; ?>>3</option>
																	<option value="4" <?php if($value->number_family_living == '4') echo 'selected="selected"'; ?>>4</option>
																	<option value="5" <?php if($value->number_family_living == '5') echo 'selected="selected"'; ?>>5</option>
																	<option value="6" <?php if($value->number_family_living == '6') echo 'selected="selected"'; ?>>6</option>
																	<option value="7" <?php if($value->number_family_living == '7') echo 'selected="selected"'; ?>>7</option>
																	<option value="8" <?php if($value->number_family_living == '8') echo 'selected="selected"'; ?>>8</option>
																	<option value="9" <?php if($value->number_family_living == '9') echo 'selected="selected"'; ?>>9</option>
																	<option value="10" <?php if($value->number_family_living == '10') echo 'selected="selected"'; ?>>10</option>
																	<option value="11" <?php if($value->number_family_living == '11') echo 'selected="selected"'; ?>>11</option>
																	<option value="12" <?php if($value->number_family_living == '12') echo 'selected="selected"'; ?>>12</option>
																	<option value="13" <?php if($value->number_family_living == '13') echo 'selected="selected"'; ?>>13</option>
																	<option value="14" <?php if($value->number_family_living == '14') echo 'selected="selected"'; ?>>14</option>
																	<option value="15" <?php if($value->number_family_living == '15') echo 'selected="selected"'; ?>>15</option>
																<?php } ?>
															<?php }else{ ?>
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
															<?php } ?>
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
														<select class="form-control" name="sRank"	id="studentRank">
															<?php if ($parent != NULL) { ?>
																<?php foreach ($parent as $value) { ?>
																	<option value="1" <?php if($value->stu_rank == '1') echo 'selected="selected"'; ?>>1</option>
																	<option value="2" <?php if($value->stu_rank == '2') echo 'selected="selected"'; ?>>2</option>
																	<option value="3" <?php if($value->stu_rank == '3') echo 'selected="selected"'; ?>>3</option>
																	<option value="4" <?php if($value->stu_rank == '4') echo 'selected="selected"'; ?>>4</option>
																	<option value="5" <?php if($value->stu_rank == '5') echo 'selected="selected"'; ?>>5</option>
																	<option value="6" <?php if($value->stu_rank == '6') echo 'selected="selected"'; ?>>6</option>
																	<option value="7" <?php if($value->stu_rank == '7') echo 'selected="selected"'; ?>>7</option>
																	<option value="8" <?php if($value->stu_rank == '8') echo 'selected="selected"' ;?>>8</option>
																	<option value="9" <?php if($value->stu_rank == '9') echo 'selected="selected"'; ?>>9</option>
																	<option value="10" <?php if($value->stu_rank == '10') echo 'selected="selected"'; ?>>10</option>
																	<option value="11" <?php if($value->stu_rank == '11') echo 'selected="selected"'; ?>>11</option>
																	<option value="12" <?php if($value->stu_rank == '12') echo 'selected="selected"'; ?>>12</option>
																<?php } ?>
															<?php }else{ ?>
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
															<?php } ?>
														</select>
													</div>
												</div>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-9 col-sm-9"></div>
											<div class="col-md-3 col-sm-3">
												<button class="btn btn-primary btn-block" id="familyProfile" type="button">Update information</button>
											</div>
										</div>
										<!-- <?php //} ?> end of old value to put in input form -->
									</form>
								</div>
							</div>
						</div>
		<script>				//script for update family profile
		$(document).ready(function(){
			$('#familyProfile').click(function(){
				var id = <?php echo $this->uri->segment(3); ?>;
				$.ajax({
					type: 'POST',
					url: '<?php echo base_url() ?>C_candidates/uFamilyProfile/'+id,
					data: $('form.familyProfile').serialize(),
					success:function(msg) {
						alert('family profile is updated!');
					},
					error:function() {
						alert('error update family profile');
					}
				});
			});
		});
	</script>
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
				<form method="POST" class="PaIncome">
					<!-- <?php //foreach ($income as $value) { ?> -->
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
									<?php if ($income != NULL) { ?>
										<?php foreach ($income as $value) { ?>
											<input type="number" name="famMonIncome" value="<?php echo $value->f_monthly; ?>" class="form-control fincome" id="fMonthly" placeholder="$" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="famMonIncome" class="form-control fincome" id="fMonthly" placeholder="$" style="direction: rtl;" required>
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
									<?php if ($income != NULL) { ?>
										<?php foreach ($income as $value) { ?>
											<input type="number" name="famDalIncome" value="<?php echo $value->f_daily; ?>" class="form-control fincome" id="fDaily" placeholder="$" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="famDalIncome" class="form-control fincome" id="fDaily" placeholder="$" style="direction: rtl;" required>
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
									<?php if ($income != NULL) { ?>
										<?php foreach ($income as $value) { ?>
											<input type="number" name="famSeaIncome" value="<?php echo $value->f_seasonal; ?>" class="form-control fincome" id="fSeasonal" placeholder="$" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="famSeaIncome" class="form-control fincome" id="fSeasonal" placeholder="$" style="direction: rtl;" required>
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
									<?php if ($income != NULL) { ?>
										<?php foreach ($income as $value) { ?>
											<input type="number" name="famYeaIncome" value="<?php echo $value->f_yearly; ?>" class="form-control fincome" id="fYearly" placeholder="$" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="famYeaIncome" class="form-control fincome" id="fYearly" placeholder="$" style="direction: rtl;" required>
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
									<?php if ($income != NULL) { ?>
										<?php foreach ($income as $value) { ?>
											<input type="number" name="famTotalIncome" value="<?php echo $value->f_total; ?>" class="form-control" id="fTotal" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="famTotalIncome" class="form-control" id="fTotal" style="direction: rtl;" required>
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
									<?php if ($income != NULL) { ?>
										<?php foreach ($income as $value) { ?>
											<input type="number" name="chMonIncome" value="<?php echo $value->c_monthly; ?>" class="form-control cIncome" id="cMonthly" placeholder="$" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="chMonIncome" class="form-control cIncome" id="cMonthly" placeholder="$" style="direction: rtl;" required>
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
									<?php if ($income != NULL) { ?>
										<?php foreach ($income as $value) { ?>
											<input type="number" name="chDaliIncome" value="<?php echo $value->c_daily; ?>" class="form-control cIncome" id="cDaily" placeholder="$" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="chDaliIncome" class="form-control cIncome" id="cDaily" placeholder="$" style="direction: rtl;" required>
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
									<?php if ($income != NULL) { ?>
										<?php foreach ($income as $value) { ?>
											<input type="number" name="chSeaIncome" value="<?php echo $value->c_seasonal; ?>" class="form-control cIncome" id="cSeasonal" placeholder="$" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="chSeaIncome" class="form-control cIncome" id="cSeasonal" placeholder="$" style="direction: rtl;" required>
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
									<?php if ($income != NULL) { ?>
										<?php foreach ($income as $value) { ?>
											<input type="number" name="chYeaIncome" value="<?php echo $value->c_yearly; ?>" class="form-control cIncome" id="cYearly" placeholder="$" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="chYeaIncome" class="form-control cIncome" id="cYearly" placeholder="$" style="direction: rtl;" required>
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
									<?php if ($income != NULL) { ?>
										<?php foreach ($income as $value) { ?>
											<input type="number" name="chTotalIncome" value="<?php echo $value->c_total ?>" class="form-control" id="cTotal" placeholder="$" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="chTotalIncome" class="form-control" id="cTotal" placeholder="$" style="direction: rtl;" required>
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
									<?php if ($income != NULL) { ?>
										<?php foreach ($income as $value) { ?>
											<input type="number" name="gloToMonIn" value="<?php echo $value->g_monthly; ?>" class="form-control" id="gTotal1" placeholder="$" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="gloToMonIn" class="form-control" id="gTotal1" placeholder="$" style="direction: rtl;" required>
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
									<?php if ($income != NULL) { ?>
										<?php foreach ($income as $value) { ?>
											<input type="number" name="g_monthly_individual" value="<?php echo $value->g_monthly_individual; ?>" class="form-control gincome" id="gTotal2" placeholder="$" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="g_monthly_individual" class="form-control gincome" id="gTotal2" placeholder="$" style="direction: rtl;" required>
									<?php } ?>
								</div>
							</div>
						</div>	
					</div>	
					<div class="row">
						<div class="col-md-6"></div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
							<button type="button" class="btn btn-primary float-right" id="uParentIncome">Update information</button>	
						</div>
					</div>
					<!-- <?php// } ?> -->
				</form>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$('#uParentIncome').click(function(){
				var id = <?php echo $this->uri->segment(3); ?>;
				$.ajax({
					type: 'POST',
					url: '<?php echo base_url() ?>C_candidates/uParentIncome/'+id,
					data: $('form.PaIncome').serialize(),
					success:function(msg) {
						alert('family income was updated!!');
					},
					error:function() {
						alert('error update family income!!');
					}
				});
			});
		});
	</script>
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
				<form method="POST" class="fExpenseSource">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<label for="rice" class="col-5 col-xs-12 col-form-label">Rice:</label>
								<div class="col-7 col-xs-12">
									<?php if ($expense != NULL) { ?>
										<?php foreach ($expense as $value) { ?>
											<input type="number" name="rice" value="<?php echo $value->ex_rice; ?>" class="form-control" id="rice" placeholder="$" style="direction:rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="rice" class="form-control" id="rice" placeholder="$" style="direction:rtl;" required>
									<?php } ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="food" class="col-5 col-form-label">Food:</label>
								<div class="col-7">
									<?php if ($expense != NULL) { ?>
										<?php foreach ($expense as $value) { ?>
											<input type="number" name="food" value="<?php echo $value->ex_food; ?>" class="form-control" id="food" placeholder="$" style="direction:rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="food" class="form-control" id="food" placeholder="$" style="direction:rtl;" required>
									<?php } ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="firewood" class="col-5 col-form-label">Firewood-Gas-Chacoal:</label>
								<div class="col-7">
									<?php if ($expense != NULL) { ?>
										<?php foreach ($expense as $value) { ?>
											<input type="number" name="firewoodGasChacoal" value="<?php echo $value->ex_firewood; ?>" class="form-control" id="firewood" placeholder="$" style="direction:rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="firewoodGasChacoal" class="form-control" id="firewood" placeholder="$" style="direction:rtl;" required>
									<?php } ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="loan" class="col-5 col-form-label">Loan:</label>
								<div class="col-7">
									<?php if ($expense != NULL) { ?>
										<?php foreach ($expense as $value) { ?>
											<input type="number" name="loan" value="<?php echo $value->ex_loan; ?>" class="form-control" id="loan" placeholder="$" style="direction:rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="loan" class="form-control" id="loan" placeholder="$" style="direction:rtl;" required>
									<?php } ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="study" class="col-5 col-form-label">Study:</label>
								<div class="col-7">
									<?php if ($expense != NULL) { ?>
										<?php foreach ($expense as $value) { ?>
											<input type="number" name="study" value="<?php echo $value->ex_study; ?>" class="form-control" id="study" placeholder="$" style="direction:rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="study" class="form-control" id="study" placeholder="$" style="direction:rtl;" required>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group row">
								<label for="medical" class="col-5 col-form-label">Medical:</label>
								<div class="col-7">
									<?php if ($expense != NULL) { ?>
										<?php foreach ($expense as $value) { ?>
											<input type="number" name="medical" value="<?php echo $value->ex_medical; ?>" class="form-control" id="medical" placeholder="$" style="direction:rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="medical" class="form-control" id="medical" placeholder="$" style="direction:rtl;" required>
									<?php } ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="electricity" class="col-5 col-form-label">Electricity & Water:</label>
								<div class="col-7">
									<?php if ($expense != NULL) { ?>
										<?php foreach ($expense as $value) { ?>
											<input type="number" name="electricityWater" value="<?php echo $value->ex_electricities_water; ?>" class="form-control" id="electricity" placeholder="$" style="direction:rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="electricityWater" class="form-control" id="electricity" placeholder="$" style="direction:rtl;" required>
									<?php } ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="agriculture" class="col-5 col-form-label">Agriculture:</label>
								<div class="col-7">
									<?php if ($expense != NULL) { ?>
										<?php foreach ($expense as $value) { ?>
											<input type="number" name="agirculture" value="<?php echo $value->ex_agriculture; ?>" class="form-control" id="agriculture" placeholder="$" style="direction:rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="agirculture" class="form-control" id="agriculture" placeholder="$" style="direction:rtl;" required>
									<?php } ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="wedding" class="col-5 col-form-label">Wedding & Ceremony:</label>
								<div class="col-7">
									<?php if ($expense != NULL) { ?>
										<?php foreach ($expense as $value) { ?>
											<input type="number" name="weddingCeremony" value="<?php echo $value->ex_weding; ?>" class="form-control" id="wedding" placeholder="$" style="direction:rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="weddingCeremony" class="form-control" id="wedding" placeholder="$" style="direction:rtl;" required>
									<?php } ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="otherUtilities" class="col-5 col-form-label">Other utilities:</label>
								<div class="col-7">
									<?php if ($expense != NULL) { ?>
										<?php foreach ($expense as $value) { ?>
											<input type="number" name="otherUtilities" value="<?php echo $value->ex_other_utilities; ?>" class="form-control" id="otherUtilities" placeholder="$" style="direction:rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="otherUtilities" class="form-control" id="otherUtilities" placeholder="$" style="direction:rtl;" required>
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
									<?php if ($expense != NULL) { ?>
										<?php foreach ($expense as $value) { ?>
											<input type="number" name="totalExpense" value="<?php echo $value->ex_total; ?>" class="form-control" id="totalExpense" placeholder="$" style="direction:rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="totalExpense" class="form-control" id="totalExpense" placeholder="$" style="direction:rtl;" required>
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
							<button type="button" class="btn btn-primary float-right" id="ufamilyExpese">Update information</button>
						</div>
					</div>
					<!-- <?php //} ?> -->
				</form>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$('#ufamilyExpese').click(function(){
				var id = <?php echo $this->uri->segment(3); ?>;
				$.ajax({
					type: 'POST',
					url: '<?php echo base_url() ?>C_candidates/ufamilyExpece/'+id,
					data: $('form.fExpenseSource').serialize(),
					success:function(msg) {
						alert('family expense source was updated!!');
					},
					error:function() {
						alert('Error update family expense source!!');
					}
				});
			});
		});
	</script>
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
				<form method="POST" class="loanDebt">
					<div class="row">
						<div class="col-lg-4 col-md-4">
							<div class="form-group row">
								<label for="amount" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Initial amount :</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<?php if($loadAndDebt != NULL) { ?>
										<?php foreach ($loadAndDebt as $value) { ?>
											<input id="amount" name="initialAmount" value="<?php echo $value->ld_initial_amount; ?>" type="number" class="form-control" placeholder="$" style="direction:rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number"  id="amount" name="initialAmount"class="form-control" placeholder="$" style="direction:rtl;" required>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="form-group row">
								<label for="institution" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Institution :
								</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<?php if($loadAndDebt != NULL) { ?>
										<?php foreach ($loadAndDebt as $value) { ?>
											<input id="institution" name="institution" value="<?php echo $value->ld_instritution; ?>" type="number" class="form-control" placeholder="$" style="direction:rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input id="institution" name="institution" type="number" class="form-control" placeholder="$" style="direction:rtl;" required>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="form-group row">
								<label for="interest" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Interest rates :
								</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<?php if($loadAndDebt != NULL) { ?>
										<?php foreach ($loadAndDebt as $value) { ?>
											<input type="number" name="interestRates" value="<?php echo $value->ld_interest_tates; ?>" id="interest" class="form-control" placeholder="$" style="direction:rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="interestRates" id="interest" class="form-control" placeholder="$" style="direction:rtl;" required>
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
									<?php if($loadAndDebt != NULL) { ?>
										<?php foreach ($loadAndDebt as $value) { ?>
											<input type="text" name="reason" value="<?php echo $value->ld_reason; ?>" id="reason" class="form-control" placeholder="Please comment"  required>
										<?php } ?>
									<?php }else{ ?>
										<input type="text" name="reason" id="reason" class="form-control" placeholder="Please comment"  required>
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
									<?php if($loadAndDebt != NULL) { ?>
										<?php foreach ($loadAndDebt as $value) { ?>
											<input type="number" name="monthly" value="<?php echo $value->ld_monthly; ?>" id="monthly" class="form-control" placeholder="$" style="direction:rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="monthly" id="monthly" class="form-control" placeholder="$" style="direction:rtl;" required>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="form-group row">
								<label for="trimester" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Trimester :</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<?php if($loadAndDebt != NULL) { ?>
										<?php foreach ($loadAndDebt as $value) { ?>
											<input type="number" name="trimester" value="<?php echo $value->ld_trimester; ?>" id="trimester" class="form-control" placeholder="$" style="direction:rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="trimester" id="trimester" class="form-control" placeholder="$" style="direction:rtl;" required>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="form-group row">
								<label for="semester" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Semester :</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<?php if($loadAndDebt != NULL) { ?>
										<?php foreach ($loadAndDebt as $value) { ?>
											<input type="number" name="semester" value="<?php echo $value->ld_semester; ?>" id="semester" class="form-control" placeholder="$" style="direction:rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="semester" id="semester" class="form-control" placeholder="$" style="direction:rtl;" required>
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
									<?php if($loadAndDebt != NULL) { ?>
										<?php foreach ($loadAndDebt as $value) { ?>
											<input type="number" name="capital" value="<?php echo $value->ld_capital; ?>" id="capital" class="form-control" placeholder="$" style="direction:rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" name="capital" id="capital" class="form-control" placeholder="$" style="direction:rtl;" required>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8"></div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
							<button type="button" class="btn btn-primary float-right" id="uloanDebt">Update information</button>
						</div>
					</div>
					<!-- <?php// } ?> -->
				</form>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$('#uloanDebt').click(function(){
				var id = <?php echo $this->uri->segment(3); ?>;
				$.ajax({
					type: 'POST',
					url: '<?php echo base_url() ?>C_candidates/uLoanDebt/'+id,
					data: $('form.loanDebt').serialize(),
					success:function(msg){
						alert('Load and debt was updated!!');
					},
					error:function(){
						alert('Error update load and debt!!');
					}
				});
			});
		});
	</script>
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
				<form method="POST" class="uResidence">
					<div class="row">
						<div class="col-lg-4 col-md-4">
							<div class="form-group row">
								<!-- <input type="hidden" name="residenceID" value="<?php echo $value->re_id; ?>"> -->
								<label for="status" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Status :</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<select name="status" id="status" class="form-control">
										<?php if ($residence != NULL ) { ?>
											<?php foreach ($residence as $value) { ?>
												<option value="Inherited" <?php if($value->re_status == 'Inherited') echo 'selected="selected"'; ?>>Inherited</option>
												<option value="Shared" <?php if($value->re_status == 'Shared') echo 'selected="selected"'; ?>>Shared</option>
												<option value="Purchased" <?php if($value->re_status == 'Purchased') echo 'selected="selected"'; ?>>Purchased</option>
												<option value="Rent" <?php if($value->re_status == 'Rent') echo 'selected="selected"'; ?>>Rent</option>
											<?php } ?>
										<?php } else{ ?>
											<option value="Inherited">Inherited</option>
											<option value="Shared" >Shared</option>
											<option value="Purchased">Purchased</option>
											<option value="Rent">Rent</option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="form-group row">
								<label for="residenceAge" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Age :</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<select name="age" id="residenceAge" class="form-control">
										<?php if ($residence != NULL ) { ?>
											<?php foreach ($residence as $value) { ?>
												<option value="1" <?php if($value->re_age == '1') echo 'selected="selected"'; ?>>1</option>
												<option value="2" <?php if($value->re_age == '2') echo 'selected="selected"';?>>2</option>
												<option value="3" <?php if($value->re_age == '3') echo 'selected="selected"'; ?>>3</option>
												<option value="4" <?php if($value->re_age == '4') echo 'selected="selected"';?>>4</option>
												<option value="5" <?php if($value->re_age == '5') echo 'selected="selected"';?>>5</option>
												<option value="6" <?php if($value->re_age == '6') echo 'selected="selected"'; ?>>6</option>
												<option value="7" <?php if($value->re_age == '7') echo 'selected="selected"'; ?>>7</option>
												<option value="8" <?php if($value->re_age == '8') echo 'selected="selected"'; ?>>8</option>
												<option value="9" <?php if($value->re_age == '9') echo 'selected="selected"'; ?>>9</option>
											<?php } ?>
										<?php } else{ ?>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="form-group row">
								<label for="rating" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Rating scale :</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<select name="Rating_scal" id="rating" class="form-control">
										<?php if ($residence != NULL ) { ?>
											<?php foreach ($residence as $value) { ?>
												<option value="1" <?php if($value->re_rating_scale == '1') echo 'selected="selected"'; ?>>1</option>
												<option value="2" <?php if($value->re_rating_scale == '2') echo 'selected="selected"'; ?>>2</option>
												<option value="3" <?php if($value->re_rating_scale == '3') echo 'selected="selected"'; ?>>3</option>
												<option value="4" <?php if($value->re_rating_scale == '4') echo 'selected="selected"'; ?>>4</option>
												<option value="5" <?php if($value->re_rating_scale == '5') echo 'selected="selected"'; ?>>5</option>
											<?php } ?>
										<?php } else{ ?>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										<?php } ?>
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
							<button type="button" class="btn btn-primary float-right" id="uResidence">Update information</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$('#uResidence').click(function(){
				var id = <?php echo $this->uri->segment(3); ?>;
				$.ajax({
					type: 'POST',
					url: '<?php echo base_url() ?>C_candidates/uResidence/'+id,
					data: $('form.uResidence').serialize(),
					success:function(msg){
						alert('Residence was updated!!');
					},
					error:function(){
						alert('Error update residence');
					}
				});
			});
		});
	</script>
	<!-- end form family residence -->
	<!-- form family home assets -->
	<div class="card">
		<div id="homeAsset">
			<h5 class="mb-0">
				<button class="btn btn-default collapsed btn-block text-left subHeading" data-toggle="collapse" data-target="#collapseHomeAsset" aria-expanded="false" aria-controls="collapseHomeAsset" style="height: 60px;border-bottom: 2px solid #fff;background-color: #f8f9fa; ">
					<h5 class="subCollapse">Home assets
						<i class="mdi mdi-chevron-down float-right subDown" style="color:#000; font-size: 30px;"></i>
						<i class="mdi mdi-chevron-up float-right subUp" style="color:#000; font-size: 30px;display: none;"></i>
					</h5>
				</button>
			</h5>
		</div>
		<div id="collapseHomeAsset" class="collapse" aria-labelledby="homeAsset" data-parent="#subAccordion">
			<div class="card-body contentBody">
				<h5>Appliances</h5>
				<form method="POST" class="uHomeAsset">
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
									<?php if($homeAsset != NULL) { ?>
										<?php foreach ($homeAsset as $homeAssets) { ?>
											<input type="number" class="form-control" value="<?php echo $homeAssets->h_refrigerator ?>" placeholder="Quantity" name="refrigerator" id="refrigerator" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" class="form-control" placeholder="Quantity" name="refrigerator" id="refrigerator" style="direction: rtl;" required>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form-group row">
								<label for="radio" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Radio :</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<?php if($homeAsset != NULL) { ?>
										<?php foreach ($homeAsset as $homeAssets) { ?>
											<input type="number" class="form-control" value="<?php echo $homeAssets->h_radio ?>" placeholder="Quantity " name="radio" id="radio" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" class="form-control" placeholder="Quantity " name="radio" id="radio" style="direction: rtl;" required>
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
									<?php if($homeAsset != NULL) { ?>
										<?php foreach ($homeAsset as $homeAssets) { ?>
											<input type="number" class="form-control" value="<?php echo $homeAssets->h_air_condictioner ?>" placeholder="Quantity" name="conditioner" id="conditioner" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" class="form-control" placeholder="Quantity" name="conditioner" id="conditioner" style="direction: rtl;" required>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form-group row">
								<label for="ricecooker" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Ricecooker :</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<?php if($homeAsset != NULL) { ?>
										<?php foreach ($homeAsset as $homeAssets) { ?>
											<input type="number" class="form-control" value="<?php echo $homeAssets->h_rice_cooker ?>" placeholder="Quantity" name="ricecooker" id="ricecooker" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" class="form-control" placeholder="Quantity" name="ricecooker" id="ricecooker" style="direction: rtl;" required>
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
									<?php if($homeAsset != NULL) { ?>
										<?php foreach ($homeAsset as $homeAssets) { ?>
											<input type="number" class="form-control" value="<?php echo $homeAssets->h_lcd_tv ?>" placeholder="Quantity" name="lcdTV" id="lcdTV" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" class="form-control" placeholder="Quantity" name="lcdTV" id="lcdTV" style="direction: rtl;" required>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form-group row">
								<label for="colorTV" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Color TV :</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<?php if($homeAsset != NULL) { ?>
										<?php foreach ($homeAsset as $homeAssets) { ?>
											<input type="number" class="form-control" value="<?php echo $homeAssets->h_color_tv ?>" placeholder="Quantity" name="colorTV" id="colorTV" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" class="form-control" placeholder="Quantity" name="colorTV" id="colorTV" style="direction: rtl;" required>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form-group row">
								<label for="computer1" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Computer > 100$ :</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<?php if($homeAsset != NULL) { ?>
										<?php foreach ($homeAsset as $homeAssets) { ?>
											<input type="number" class="form-control" value="<?php echo $homeAssets->h_computer_big_100 ?>" placeholder="Quantity" name="computer1" id="computer1" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" class="form-control" placeholder="Quantity" name="computer1" id="computer1" style="direction: rtl;" required>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form-group row">
								<label for="computer2" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Computer < 100$ :</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<?php if($homeAsset != NULL) { ?>
										<?php foreach ($homeAsset as $homeAssets) { ?>
											<input type="number" class="form-control" value="<?php echo $homeAssets->h_computer_smal_100 ?>" placeholder="Quantity" name="computer2" id="computer2" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" class="form-control" placeholder="Quantity" name="computer2" id="computer2" style="direction: rtl;" required>
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
									<?php if($homeAsset != NULL) { ?>
										<?php foreach ($homeAsset as $homeAssets) { ?>
											<input type="number" class="form-control" value="<?php echo $homeAssets->h_furnished_big_300 ?>" placeholder="Quantity" name="furnished" id="furnished" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" class="form-control" placeholder="Quantity" name="furnished" id="furnished" style="direction: rtl;" required>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form-group row">
								<label for="dvdPlayer" class="col-lg-5 col-md-5 col-xs-12 col-form-label">DVD player :</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<?php if($homeAsset != NULL) { ?>
										<?php foreach ($homeAsset as $homeAssets) { ?>
											<input type="number" class="form-control" value="<?php echo $homeAssets->h_dvd_player ?>" placeholder="Quantity" name="dvdPlayer" id="dvdPlayer" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" class="form-control" placeholder="Quantity" name="dvdPlayer" id="dvdPlayer" style="direction: rtl;" required>
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
									<?php if($homeAsset != NULL) { ?>
										<?php foreach ($homeAsset as $homeAssets) { ?>
											<input type="number" class="form-control" value="<?php echo $homeAssets->h_smartphone_big_100 ?>" placeholder="Quantity" name="smartphone" id="smartphone" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" class="form-control" placeholder="Quantity" name="smartphone" id="smartphone" style="direction: rtl;" required>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form-group row">
								<label for="phone" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Phone < 100$ :</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<?php if($homeAsset != NULL) { ?>
										<?php foreach ($homeAsset as $homeAssets) { ?>
											<input type="number" class="form-control" value="<?php echo $homeAssets->h_phone_smal_100 ?>" placeholder="Quantity" name="phone" id="phone" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" class="form-control" placeholder="Quantity" name="phone" id="phone" style="direction: rtl;" required>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form-group row">
								<label for="camera1" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Camera > 100$ :</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<?php if($homeAsset != NULL) { ?>
										<?php foreach ($homeAsset as $homeAssets) { ?>
											<input type="number" class="form-control" value="<?php echo $homeAssets->h_camera_big_100; ?>" placeholder="Quantity" name="camera1" id="camara1" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" class="form-control" placeholder="Quantity" name="camera1" id="camara1" style="direction: rtl;" required>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form-group row">
								<label for="camera2" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Camera < 100$ :</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<?php if($homeAsset != NULL) { ?>
										<?php foreach ($homeAsset as $homeAssets) { ?>
											<input type="number" class="form-control" value="<?php echo $homeAssets->h_camera_small_100; ?>" placeholder="Quantity" name="camera2" id="camara2" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" class="form-control" placeholder="Quantity" name="camera2" id="camara2" style="direction: rtl;" required>
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
									<?php if($homeAsset != NULL) { ?>
										<?php foreach ($homeAsset as $homeAssets) { ?>
											<input type="number" class="form-control" value="<?php echo $homeAssets->h_sofa_big_300 ?>" placeholder="Quantity" name="sofa1" id="sofa1" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" class="form-control" placeholder="Quantity" name="sofa1" id="sofa1" style="direction: rtl;" required>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form-group row">
								<label for="sofa2" class="col-lg-5 col-md-5 col-xs-12 col-form-label">Sofa < 300$ :</label>
								<div class="col-lg-7 col-md-7 col-xs-12">
									<?php if($homeAsset != NULL) { ?>
										<?php foreach ($homeAsset as $homeAssets) { ?>
											<input type="number" class="form-control" value="<?php echo $homeAssets->h_sofa_smal_300 ?>" placeholder="Quantity" name="sofa2" id="sofa2" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" class="form-control" placeholder="Quantity" name="sofa2" id="sofa2" style="direction: rtl;" required>
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
									<?php if($homeAsset != NULL) { ?>
										<?php foreach ($homeAsset as $homeAssets) { ?>
											<input type="number" class="form-control" value="<?php echo $homeAssets->h_gascooker; ?>" placeholder="Quantity" name="gascooker" id="gascooker" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" class="form-control" placeholder="Quantity" name="gascooker" id="gascooker" style="direction: rtl;" required>
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
									<?php if($homeAsset != NULL) { ?>
										<?php foreach ($homeAsset as $homeAssets) { ?>
											<input type="number" class="form-control" value="<?php echo $homeAssets->h_fruit_blender; ?>" placeholder="Quantity" name="fruit" id="fruit" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" class="form-control" placeholder="Quantity" name="fruit" id="fruit" style="direction: rtl;" required>
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
									<?php if($homeAsset != NULL) { ?>
										<?php foreach ($homeAsset as $homeAssets) { ?>
											<input type="number" class="form-control" value="<?php echo $homeAssets->h_electrical_cooker; ?>" placeholder="Quantity" name="electrical" id="electrical" style="direction: rtl;" required>
										<?php } ?>
									<?php }else{ ?>
										<input type="number" class="form-control" placeholder="Quantity" name="electrical" id="electrical" style="direction: rtl;" required>
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
											<?php if($homeAsset != NULL) { ?>
												<?php foreach ($homeAsset as $homeAssets) { ?>
													<input type="number" class="form-control" value="<?php echo $homeAssets->h_motobike_big_500 ?>" placeholder="Quantity" name="motobike" id="motobike" style="direction: rtl;" required>
												<?php } ?>
											<?php }else{ ?>
												<input type="number" class="form-control" placeholder="Quantity" name="motobike" id="motobike" style="direction: rtl;" required>
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
											<?php if($homeAsset != NULL) { ?>
												<?php foreach ($homeAsset as $homeAssets) { ?>
													<input type="number" class="form-control" value="<?php echo $homeAssets->h_farming_machine; ?>" placeholder="Quantity" name="farming" id="farming" style="direction: rtl;" required>
												<?php } ?>
											<?php }else{ ?>
												<input type="number" class="form-control" placeholder="Quantity" name="farming" id="farming" style="direction: rtl;" required>
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
											<?php if($homeAsset != NULL) { ?>
												<?php foreach ($homeAsset as $homeAssets) { ?>
													<input type="number" class="form-control" value="<?php echo $homeAssets->h_car_truck; ?>" placeholder="Quantity" name="car" id="car" style="direction: rtl;" required>
												<?php } ?>
											<?php }else{ ?>
												<input type="number" class="form-control" placeholder="Quantity" name="car" id="car" style="direction: rtl;" required>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-md-6">
							<?php if($homeAsset != NULL) { ?>
								<?php foreach ($homeAsset as $homeAssets) { ?>
									<textarea name="vehiclesComment" id="vehiclesId" cols="66" rows="6" class="form-control" placeholder="Please specify if you have any comment" style="line-height: 22px;"><?php echo $homeAssets->h_vehicles_comment ?></textarea>
								<?php } ?>
							<?php }else{ ?>
								<textarea name="vehiclesComment" id="vehiclesId" cols="66" rows="6" class="form-control" placeholder="Please specify if you have any comment" style="line-height: 22px;"></textarea>
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
											<?php if($homeAsset != NULL) { ?>
												<?php foreach ($homeAsset as $homeAssets) { ?>
													<input type="number" class="form-control" value="<?php echo $homeAssets->h_cow; ?>" placeholder="Quantity" name="cow" id="cow" style="direction: rtl;" required>
												<?php } ?>
											<?php }else{ ?>
												<input type="number" class="form-control" placeholder="Quantity" name="cow" id="cow" style="direction: rtl;" required>
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
											<?php if($homeAsset != NULL) { ?>
												<?php foreach ($homeAsset as $homeAssets) { ?>
													<input type="number" class="form-control" value="<?php echo $homeAssets->h_buffaloe; ?>" placeholder="Quantity" name="buffaloe" id="buffaloe" style="direction: rtl;" required>
												<?php } ?>
											<?php }else{ ?>
												<input type="number" class="form-control" placeholder="Quantity" name="buffaloe" id="buffaloe" style="direction: rtl;" required>
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
											<?php if($homeAsset != NULL) { ?>
												<?php foreach ($homeAsset as $homeAssets) { ?>
													<input type="number" class="form-control" value="<?php echo $homeAssets->h_pig ?>" placeholder="Quantity" name="pig" id="pig" style="direction: rtl;" required>
												<?php } ?>
											<?php }else{ ?>
												<input type="number" class="form-control" placeholder="Quantity" name="pig" id="pig" style="direction: rtl;" required>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-md-6">
							<?php if($homeAsset != NULL) { ?>
								<?php foreach ($homeAsset as $homeAssets) { ?>
									<textarea name="animalComment" id="" cols="66" rows="6" class="form-control" placeholder="Please specify if you have any comment" style="line-height: 22px;"><?php echo $homeAssets->h_animals_comment; ?></textarea>
								<?php } ?>
							<?php }else{ ?>
								<textarea name="animalComment" id="" cols="66" rows="6" class="form-control" placeholder="Please specify if you have any comment" style="line-height: 22px;"></textarea>
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
										<div class="col-lg-5 col-md-5 col-xs-12">
											<?php if($homeAsset != NULL) { ?>
												<?php foreach ($homeAsset as $homeAssets) { ?>
													<input type="number" class="form-control" value="<?php echo $homeAssets->h_farm_size; ?>" name="farmSize" id="size" style="direction: rtl;" required> 
												<?php } ?>
											<?php }else{ ?>
												<input type="number" class="form-control" name="farmSize" id="size" style="direction: rtl;" required>
											<?php } ?>
										</div>
										<div class="col-lg-2 col-md-2 col-xs-12">
											m <sup>2</sup>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<?php if($homeAsset != NULL) { ?>
								<?php foreach ($homeAsset as $homeAssets) { ?>
									<textarea name="farmComment" id="" cols="66" rows="1" class="form-control" placeholder="Please specify if you have any comment"><?php echo $homeAssets->h_farm_comment; ?></textarea>
								<?php } ?>
							<?php }else{ ?>
								<textarea name="farmComment" id="" cols="66" rows="1" class="form-control" placeholder="Please specify if you have any comment"></textarea>
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
											<?php if($homeAsset != NULL) { ?>
												<?php foreach ($homeAsset as $homeAssets) { ?>
													<input type="number" class="form-control" value="<?php echo $homeAssets->h_total_x5; ?>" name="sumQuantity5" id="sumQuantity5" style="direction: rtl;" required style="direction: rtl;" required>
												<?php } ?>
											<?php }else{ ?>
												<input type="number" class="form-control" name="sumQuantity5" id="sumQuantity5" style="direction: rtl;" required style="direction: rtl;" required>
											<?php } ?>
										</div>
										<!-- <div class="col-lg-2 col-md-1"></div> -->
									</div>
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
											<?php if($homeAsset != NULL) { ?>
												<?php foreach ($homeAsset as $homeAssets) { ?>
													<input type="number" class="form-control" value="<?php echo $homeAssets->h_total_x3; ?>" name="sumQuantity3" id="sumQuantity3" style="direction: rtl;" required>
												<?php } ?>
											<?php }else{ ?>
												<input type="number" class="form-control" name="sumQuantity3" id="sumQuantity3" style="direction: rtl;" required>
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
												<?php if($homeAsset != NULL) { ?>
													<?php foreach ($homeAsset as $homeAssets) { ?>
														<input class="form-control" type="number" value="<?php echo $homeAssets->h_glbal_total; ?>" placeholder="$" name="globalAsset" id="globalAsset" style="direction: rtl;">
													<?php } ?>
												<?php }else{ ?>
													<input class="form-control" type="number" placeholder="$" name="globalAsset" id="globalAsset" style="direction: rtl;">
												<?php } ?>
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
											<?php if($homeAsset != NULL) { ?>
												<?php foreach ($homeAsset as $homeAssets) { ?>
													<option value="Yes" <?php if($homeAssets->h_poverty_certificate == 'Yes') echo 'selected="selected"'; ?>>Yes</option>
													<option value="No" <?php if($homeAssets->h_poverty_certificate == 'No') echo 'selected="selected"'; ?>>Other</option>
												<?php } ?>
											<?php }else{ ?>
												<option value="Yes">Yes</option>
												<option value="No">Other</option>
											<?php } ?>
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
											<?php if($homeAsset != NULL) { ?>
												<?php foreach ($homeAsset as $homeAssets) { ?>
													<option value="1" <?php if($homeAssets->h_level == '1') echo 'selected="selected"'; ?>>1</option>
													<option value="2" <?php if($homeAssets->h_level == '2') echo 'selected="selected"'; ?>>2</option>
													<option value="3" <?php if($homeAssets->h_level == '3') echo 'selected="selected"'; ?>>3</option>
												<?php } ?>
											<?php }else{ ?>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
											<?php } ?>
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
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<button type="button" class="btn btn-primary btn-block" id="uHomeAsset">Update information</button>
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
<script>
	$(document).ready(function(){
		$('#uHomeAsset').click(function(){
			var id = <?php echo $this->uri->segment(3); ?>;
			$.ajax({
				type: 'POST',
				url: '<?php echo base_url() ?>C_candidates/uHomeAsset/'+id,
				data: $('form.uHomeAsset').serialize(),
				success:function(msg){
					alert('Home assets was updated.');	//alert to user when they are update successfully
				},
				error:function(){
					alert('Error update home asset');
				}
			});
		});
	});
</script>
<br>
<div class="conclustion">
	<form method="POST" class="investigationConclusion">
		<div class="row">
			<div class="col-md-12">
				<h4 style="color: #000;">Investigator's conclusion</h4>
				<?php foreach ($invesCon as $investiCon) { ?>
					<textarea name="invesCon" id="inVesConclus" rows="5" class="form-control" placeholder="Please comment"><?php echo $investiCon->can_investigator_conclusion; ?></textarea>
				<?php } ?>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-lg-10 col-md-10"></div>
			<div class="col-lg-2 col-md-2">
				<button type="button" class="btn btn-primary float-right" id="invesCon">Update information</button>
			</div>
		</div>
	</form>	
</div>
</div>
<script>
	$(document).ready(function(){
		$('#invesCon').click(function(){
			var id = <?php echo $this->uri->segment(3); ?>;		// to get id candidate from url
			$.ajax({
				type: 'POST',
				url: '<?php echo base_url() ?>C_candidates/uInvestiCon/'+id,
				data: $('form.investigationConclusion').serialize(),
				success:function(msg){
					alert('Investigation conclusion was updated.');
				},
				error:function(){
					alert('Error update investigation conclusion.');
				}
			});
		});
	});
</script>
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
	<!-- modal for alert when user click on update info on candidate -->
<!-- 	<div class="modal" id="alertCan">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">Candidate was updated</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>end of candidate
		<div class="modal" id="alertfamPro">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">family profile was updated</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div> -->

	<!-- end of modal alert update candidate -->
</body>

<script>

//	function btnUpload(){
//		var getImg = $('#inputImg').val();
	//	if (getImg == "") {
//			$('#btnUpImage').addClass("disabled");
//		}else{
//			$('#btnUpImage').addClass("enabled");
//		}
///	}
		// function readURL(input) {			//function for view image after insert
		// 	if (input.files && input.files[0]) {
		// 		btnUpload();
		// 		var reader = new FileReader();
		// 		reader.onload = function(e) {
		// 			$('#blah').attr('src', e.target.result);
		// 		}
		// 		reader.readAsDataURL(input.files[0]);
		// 	}
		// }
		$(document).ready(function(){
			//this action for call model when user update candidate
			$('#UpCanInfo').click(function(){
				$('.modal-body').load('/render/62805',function(result){
					$('#alertCan').modal({show:true});
				});
			});	//end of action alert update candidate


			$( ".formHeading" ).click(function() {
				$(".down",this).toggle();
				$(".up",this).toggle();
			});
			$( ".subHeading" ).click(function() {
				$(".subDown",this).toggle();
				$(".subUp",this).toggle();
		}); // end form collapsed
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
	// fuction add row
	$('#tab_logic').DataTable();
	$("#add_row").on("click", function() {
		        // Dynamic Rows Code
		        
		        // Get max row id and set new id
		        var newid = 0;
		        $.each($("#tab_logic tr"), function() {
		        	if (parseInt($(this).data("id")) > newid) {
		        		newid = parseInt($(this).data("id"));
		        	}
		        });
		        newid++;
		        var tr = $("<tr></tr>", {
		        	id: "addr"+newid,
		        	"data-id": newid
		        });
		        // loop through each td and create new elements with name of newid
		        $.each($("#tab_logic tbody tr:nth(0) td"), function() {
		        	var cur_td = $(this);

		        	var children = cur_td.children();

		            // add new td and element if it has a nane
		            if ($(this).data("name") != undefined) {
		            	var td = $("<td></td>", {
		            		"data-name": $(cur_td).data("name")
		            	});

		            	var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
		            	c.attr("name", $(cur_td).data("name") + newid);
		            	c.appendTo($(td));
		            	td.appendTo($(tr));
		            } else {
		            	var td = $("<td></td>", {
		            		'text': $('#tab_logic tr').length
		            	}).appendTo($(tr));
		            }
		        });
		        // add the new row
		        $(tr).appendTo($('#tab_logic'));
		        
		        $(tr).find("td button.row-remove").on("click", function() {
		        	$(this).closest("tr").remove();
		        });
		    });
		    // Sortable Code
		    var fixHelperModified = function(e, tr) {
		    	var $originals = tr.children();
		    	var $helper = tr.clone();

		    	$helper.children().each(function(index) {
		    		$(this).width($originals.eq(index).width())
		    	});

		    	return $helper;
		    };
		    $(".table-sortable tbody").sortable({
		    	helper: fixHelperModified      
		    }).disableSelection();
		    $(".table-sortable thead").disableSelection();
		    $("#add_row").trigger("click");

  // ===========================
  // end of function update ----
  // $('#btnUpImage').click(function(){
  // 	var id = <?php echo  $this->uri->segment(3); ?>;
  // 	$.ajax({
  // 		type: 'POST',
  // 		url: '<?php echo base_url() ?>C_candidates/uImage/'+id,
  // 		data: $('form.uImageCan').serialize(),
  // 		contentType: false,
  // 		cache: false,
  // 		processData:false,
  // 		async:false,
  // 		success:function(msg){
  // 			alert('Image was uploaded.');
  // 		},
  // 		error:function(){
  // 			alert('Error upload image.');
  // 		}
  // 	});
  // });
});
</script>
<!-- <?php //} ?> -->