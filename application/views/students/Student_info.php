<div id="container">
	<div class="row-fluid">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-3 col-xs-12"></div>
				<div class="col-lg-4 col-md-4 col-sm-7 col-xs-12">
					<h2 class="text-center">Student Name</h2>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-2 col-xs-12"></div>
			</div><br>	
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-3 col-xs-12"></div>
				<div class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
					<p>Global grade:</p>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-2 col-xs-8">
					<select class="form-control">
						<option value="A++">A+</option>
						<option value="A">A</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="Failed">Failed</option>
					</select>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-2 col-xs-12">	
					<button type="button" class="btn btn-primary ">SAVE</button>  	
				</div>			
			</div>
			<br>
			<div id="accordion">
				<!-- buttonCollapsed Student information -->
				<div id="stuInfo">
					<div class="col-md-12">
						<button class="btn btn-primary btn-block collapsed headerForm" data-toggle="collapse" data-target="#collapseStuInfo" aria-expanded="false" aria-controls="collapseStuInfo" style="border-bottom: 1px solid #fff;">
							<h6  class="text-left">Student Informations
								<i class="mdi mdi-chevron-down float-right more" style="color:#fff; font-size: 25px;"></i>
								<i class="mdi mdi-chevron-up float-right less" style="color:#fff; font-size: 25px;display: none;"></i></h6>

							</button>
						</div>
					</div>
					<!-- end buttonCollapsed student information -->

					<!-- collapsed student information -->
					<div id="collapseStuInfo" class="collapse" aria-labelledby="stuInfo" data-parent="#accordion">
						<!--  student information -->
						<div class="card-body contentBody">
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<h5>General Information</h5>
							</div><br>
							<div class="col-md-8"></div>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">Province:</div>
								<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
									<select name="province" class="form-control">
										<option value="Pursat">Pursat</option>
										<option value="Battambong">Battambong</option>
										<option value="Banteaymean chey">Banteaymean chey</option>
										<option value="Siem Reap">Siem Reap</option>
									</select>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">Gender:</div>
								<div class="col-md-2 col-sm-3">
									<select name="gender" class="form-control">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>

								<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">Age:</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<input name="age" type="number" class="form-control" placeholder="Your Age " required>
								</div>
							</div><br>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">NGO:</div>
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
									<select name="ngo" class="form-control">
										<option value="PSE">PSE</option>
										<option value="KBFC">KBFC</option>
										<option value="Other">Other</option>
									</select>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">Other:</div>
								<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
									<input name="otherNGO" type="text" class="form-control" placeholder="If other please specify " required>
								</div>
							</div><br>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">Health Status:</div>
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
									<select class="form-control">
										<option value="#">Healthy</option>
										<option value="#">Some health issuses</option>
									</select>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">Other:</div>
								<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
									<input type="text" class="form-control" placeholder="If some health issuses, please specify " required>
								</div>
							</div><br>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">Rank in class:</div>
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
									<input type="text" class="form-control" placeholder="Ex: 10/33" required>
								</div>		
							</div><br>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">Extracuricular activity and activement:</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<input type="text" class="form-control" placeholder="Please comment" required>
								</div>		
							</div><br>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><h5>Motivation</h5></div>
							<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12"></div><br>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">PNC choice rank:</div>
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<select class="form-control">
										<option value="#">1</option>
										<option value="#">2</option>
										<option value="#">3</option>
										<option value="#">4</option>
									</select>
								</div><br>
								<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">Responsibility & maturity:</div>
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<input type="text" class="form-control" placeholder="Ex: 18/20" required>
								</div>
							</div><br>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">Motivation for PNC:</div>
								<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
									<input type="text" class="form-control" placeholder="Ex: 23/30" required>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">Communication:</div>
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<input type="text" class="form-control" placeholder="Ex: 10/10" required>
								</div>
							</div><br>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">Other Scholaship:</div>
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
									<input type="text" class="form-control" placeholder="" required>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">Choice Rank:</div>
								<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12">
									<select name="rank" class="form-control">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
								<div class="col-lg-4 col-md-4 col-sm-9 col-xs-12">
									<a href="#">
										<h6>
											<i class="mdi mdi-plus" style="color:#000;font-size: 20px;">
											</i>Add other Scholaship
										</h6>
									</a>
								</div>
							</div>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">Commitment of the student:
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<input type="text" class="form-control" placeholder="Please comment" required>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12"></div>
							</div><br>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">Commitment of the parents:</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<input type="text" class="form-control" placeholder="Please comment" required>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12"></div>
							</div><br>
							<div class="row">
								<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"></div>
								<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
									<button type="button" class="btn btn-primary float-right">Save Information</button><br><br>	
								</div>
							</div>
						</div>
						<!-- end student information -->
					</div>
					<!--  end collapsed student information -->

					<!-- collapsed family information -->
					<!-- button collapsed family information -->
					<div id="familyInfo">
						<div class="col-md-12">
							<button class="btn btn-primary btn-block collapsed headerForm" data-toggle="collapse" data-target="#collapseFamilyInfo" aria-expanded="false" aria-controls="collapseFamilyInfo">
								<h6 class="text-left">Family Informations
									<i class="mdi mdi-chevron-down float-right more" style="color:#fff; font-size: 25px;"></i>
									<i class="mdi mdi-chevron-up float-right less" style="color:#fff; font-size: 25px;display: none;"></i>
								</h6>
							</button>
						</div>
					</div>
					<!-- end button collapsed family information -->
					<div id="collapseFamilyInfo" class="collapse" aria-labelledby="familyInfo" data-parent="#accordion">
						<!-- sub collapse -->
						<div id="subAccordion">
							<!-- subCollapsed family profile -->
							<div id="familyPro">
								<div class="col-md-12">
									<button class="btn btn-default btn-block collapsed subForm" data-toggle="collapse" data-target="#collapsefamilyPro" aria-expanded="false" aria-controls="collapsefamilyPro" style="border-bottom: 1px solid #fff;">
										<h6 class="text-left subCollapse">Family Profile
											<i class="mdi mdi-chevron-down float-right down " style="color:#fff; font-size: 25px;">	
											</i>
											<i class="mdi mdi-chevron-up float-right up" style="color:#fff; font-size: 25px;display: none;">
											</i>
										</h6>	
									</button>
								</div>
							</div>
							<div id="collapsefamilyPro" class="collapse" aria-labelledby="familyPro" data-parent="#subAccordion">
								<div class="card-body contentBody">
									<br>
									<h4>Father</h4>
									<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-4">
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-4">
													<b>Age:</b>
												</div>
												<div class="col-lg-8 col-md-8 col-sm-8">
													<input type="number" name="age" id="" class="form-control">
												</div>
											</div>
										</div>
										
										<div class="col-lg-5 col-md-5 col-sm-8">
											<div class="row">
												<div class="col-lg-5 col-md-5 col-sm-4">
													<b>Occupation:</b>
												</div>
												<div class="col-lg-7 col-md-7 col-sm-8">
													<select name="occupation" class="form-control">
														<option value="Farmer / Laborer">Farmer/Laborer</option>
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
											<div class="row">
												<div class="col-md-6">
													<b>Health status</b>
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
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<b>Education:</b>
												</div>
												<div class="col-md-2 col-sm-1"></div>
												<div class="col-md-6 col-sm-4">
													<select name="education" class="form-control">
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
									<h4>Mother</h4>
									<div class="row">
										<div class="col-md-2">
											<div class="row">
												<div class="col-md-4">
													<b>Age:</b>
												</div>
												<div class="col-md-8">
													<input type="number" name="age" id="" class="form-control">
												</div>
											</div>
										</div>
										<!-- <div class="col-md-"></div> -->
										<div class="col-md-5">
											<div class="row">
												<div class="col-md-5">
													<b>Occupation:</b>
												</div>
												<div class="col-md-7">
													<select class="form-control">
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
											<div class="row">
												<div class="col-md-6">
													<b>Health status</b>
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
											<div class="row">
												<div class="col-md-4">
													<b>Education:</b>
												</div>
												<div class="col-md-2"></div>
												<div class="col-md-6">
													<select class="form-control">
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
											<div class="row">
												<div class="col-md-6">
													<b>Number of siblings</b>
												</div>
												<div class="col-md-6">
													<select name="siblings" class="form-control">
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
											<div class="row">
												<div class="col-md-6">
													<b>Married:</b>
												</div>
												<div class="col-md-6">
													<select name="married" class="form-control">
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
											<div class="row">
												<div class="col-md-6">
													<b>Separated:</b>
												</div>
												<div class="col-md-6">
													<select name="separated" class="form-control">
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
											<div class="row">
												<div class="col-md-9">
													<b>Living in the family's house (including parents):</b>
												</div>
												<div class="col-md-3">
													<select name="living" class="form-control">
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
											<div class="row">
												<div class="col-md-6">
													<b>Student rank:</b>
												</div>
												<div class="col-md-6">
													<select name="stuRank" class="form-control">
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
									<br>
								</div>
							</div>
							<!-- end subCollapsed family profile -->

							<!-- susCollapsed family income -->
							<div id="familyIncome">
								<div class="col-md-12">
									<button class="btn btn-default btn-block collapsed subForm" data-toggle="collapse" data-target="#collapseFamilyIncome" aria-expanded="false" aria-controls="collapseFamilyIncome" style="border-bottom: 1px solid #fff;">
										<h6 class="text-left subCollapse">Family's Income
											<i class="mdi mdi-chevron-down float-right down " style="color:#fff; font-size: 25px;">	
											</i>
											<i class="mdi mdi-chevron-up float-right up" style="color:#fff; font-size: 25px;display: none;">
											</i>
										</h6>
									</button>
								</div>
							</div>
							<div id="collapseFamilyIncome" class="collapse" aria-labelledby="familyIncome" data-parent="#subAccordion">
								<!-- form family income -->
								<div class="card-body contentBody">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><h5>Family Income</h5></div>
										<div class="col-md-4"></div>
									</div>
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">Monthly Income:</div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<input type="number" class="form-control" style="direction:rtl;" placeholder="$" required>
										</div>
									</div><br>
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">Daily Income:</div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<input type="number" class="form-control" style="direction:rtl;" placeholder="$" required>
										</div>

									</div><br>
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">Seasonal Income:</div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<input type="number" class="form-control" style="direction:rtl;" placeholder="$" required>
										</div>

									</div><br>
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">Yearly Income:</div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<input type="number" class="form-control" style="direction:rtl;" placeholder="$" required>
										</div>
									</div><br>
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">Total Income (on a monthly basis):</div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<input type="number" class="form-control" style="direction:rtl;" placeholder="$" required>
										</div>
									</div><br>	
									<!-- list all children assistance -->
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><h5>Children's Assistance</h5></div>
										<div class="col-md-6"></div>
									</div>
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">Monthly Income:</div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<input type="number" class="form-control" style="direction:rtl;" placeholder="$" required>
										</div>

									</div><br>
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">Daily Income:</div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<input type="number" class="form-control" style="direction:rtl;" placeholder="$" required>
										</div>

									</div><br>
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">Seasonal Income:</div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<input type="number" class="form-control" style="direction:rtl;" placeholder="$" required>
										</div>

									</div><br>
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">Yearly Income:</div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<input type="number" class="form-control" style="direction:rtl;" placeholder="$" required>
										</div>

									</div><br>
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">Total Income (on a monthly basis):
										</div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<input type="number" class="form-control" style="direction:rtl;" placeholder="$" required>
										</div>

									</div><br>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><h5>Globale Family's Income</h5></div>
										<div class="col-md-6"></div>
									</div>
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">Total Monthly Income:</div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<input type="number" class="form-control" style="direction:rtl;" placeholder="$" required>
										</div>

									</div><br>
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">Total Monthly Income per individual living in parent's house:</div>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<input type="number" class="form-control" style="direction:rtl;" placeholder="$" required>
										</div>
									</div><br>
									<div class="row">
										<div class="col-md-6"></div>
										<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
											<button type="button" class="btn btn-primary float-right">Save Information</button>	
										</div>
									</div>
								</div>
								<!-- end family income -->
							</div>
							<!-- end subCollapsed family income -->

							<!-- subCollapsed family expense -->
							<div id="familyExpense">
								<div class="col-md-12">
									<button class="btn btn-default btn-block collapsed subForm" data-toggle="collapse" data-target="#collapseFamilyExpense" aria-expanded="false" aria-controls="collapseFamilyExpense" style="border-bottom: 1px solid #fff;">
										<h6 class="text-left subCollapse">Family's Expense<i class="mdi mdi-chevron-down float-right down " style="color:#fff; font-size: 25px;">	
										</i>
										<i class="mdi mdi-chevron-up float-right up" style="color:#fff; font-size: 25px;display: none;">
										</i>
									</h6>
								</button>
							</div>
						</div>
						<div id="collapseFamilyExpense" class="collapse" aria-labelledby="familyExpense" data-parent="#subAccordion">
							<!-- form family expense -->
							<div class="card-body contentBody">
								<div class="row">
									<div class="col-md-5">
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
									<div class="col-md-2"></div>
									<div class="col-md-5">
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
									<div class="col-md-3 col-sm-4">
										<label>Total Expenses:</label>
									</div>
									<div class="col-md-4 col-sm-7">
										<input type="text" class="form-control" style="direction: rtl;" required placeholder="$">
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

							</div>
							<!-- end form family expense -->
						</div>
						<!-- end subCollapsed family expense -->

						<!-- subCollapsed family loan & debt -->
						<div id="familyLoanDebt">
							<div class="col-md-12">
								<button class="btn btn-default btn-block collapsed subForm" data-toggle="collapse" data-target="#collapseFamilyLoanDebt" aria-expanded="false" aria-controls="collapseFamilyLoanDebt" style="border-bottom: 1px solid #fff;">
									<h6 class="text-left subCollapse">Loans& Debts
										<i class="mdi mdi-chevron-down float-right down " style="color:#fff; font-size: 25px;">	
										</i>
										<i class="mdi mdi-chevron-up float-right up" style="color:#fff; font-size: 25px;display: none;">
										</i>
									</h6>
								</button>
							</div>
						</div>
						<div id="collapseFamilyLoanDebt" class="collapse" aria-labelledby="familyLoanDebt" data-parent="#subAccordion">
							<!-- form family loan & debt -->
							<div class="card-body contentBody">
								<div class="row">
									<h5>General Information</h5>
								</div>
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
										<label for="">Initial amount:</label>	
									</div>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
										<input name="initAmount" type="number" class="form-control" placeholder="$" style="direction:rtl" required>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
										<label for="">Institution:</label>	
									</div>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
										<input name="institution" type="number" class="form-control" placeholder="$" style="direction:rtl" required>
									</div>
									<br>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
										<label for="">Interest rates:</label>	
									</div>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
										<input name="interestRates" type="number" class="form-control" placeholder="$" style="direction:rtl" required>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
										<label for="">Reason:</label>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-10 col-xs-6">
										<input name="reason" type="text" class="form-control" placeholder="Please comment" required="">
									</div>
								</div>
								<div class="row">
									<h5>Amount to payback</h5>
								</div>
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
										<label for="">Monthly:</label>	
									</div>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
										<input name="monthly" type="number" class="form-control" placeholder="$" style="direction:rtl" required>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
										<label for="">Trimester:</label>	
									</div>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
										<input name="trimester" type="number" class="form-control" placeholder="$" style="direction:rtl" required>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
										<label for="">Semester:</label>	
									</div>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
										<input name="semester" type="number" class="form-control" placeholder="$" style="direction:rtl" required>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
										<label for="">Capital:</label>	
									</div>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
										<input name="capital" type="number" class="form-control" placeholder="$" style="direction:rtl" required>
									</div>
									
								</div>
								<br>
								<div class="row">
									<div class="col-lg-10 col-md-10 col-sm-8 col-xs-8"></div>
									<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
										<button type="button" class="btn btn-primary float-right">Save Information</button>
									</div>
								</div>
							</div>
							<!-- end form family loan & debt -->
						</div>
						<!-- end subCollapsed family loan & debt -->

						<!-- subCollapsed family residence -->
						<div id="residence">
							<div class="col-md-12">
								<button class="btn btn-default btn-block collapsed subForm" data-toggle="collapse" data-target="#collapseresidence" aria-expanded="false" aria-controls="collapseresidence" style="border-bottom: 1px solid #fff;">
									<h6 class="text-left subCollapse">Residence Status
										<i class="mdi mdi-chevron-down float-right down " style="color:#fff; font-size: 25px;">	
										</i>
										<i class="mdi mdi-chevron-up float-right up" style="color:#fff; font-size: 25px;display: none;">
										</i>
									</h6>
								</button>
							</div>
						</div>
						<div id="collapseresidence" class="collapse" aria-labelledby="residence" data-parent="#subAccordion">
							<!-- form family residence -->
							<div class="card-body contentBody">
								<br>
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
										<label for="">Status:</label>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
										<select name="status" id="" class="form-control">
											<option value="Inherited">Inherited</option>
											<option value="Shared">Shared</option>
											<option value="Purchased">Purchased</option>
											<option value="Rent">Rent</option>
										</select>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-1 col-xs-12">
										<label for="">Age:</label>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
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
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
										<label for="">Rating Scale:</label>
									</div>
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
										<select name="ratingScale" id="" class="form-control">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
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
							</div>
							<!-- end	form family residence -->
						</div>
						<!-- end subCollapsed family residence -->

						<!-- subCollapsed family home assets -->
						<div id="homeAssets">
							<div class="col-md-12">
								<button class="btn btn-default btn-block collapsed subForm" data-toggle="collapse" data-target="#collapseHomeAssets" aria-expanded="false" aria-controls="collapseHomeAssets" style="border-bottom: 1px solid #fff;">
									<h6 class="text-left subCollapse">Home Assets
										<i class="mdi mdi-chevron-down float-right down " style="color:#fff; font-size: 25px;">	</i>
										<i class="mdi mdi-chevron-up float-right up" style="color:#fff; font-size: 25px;display: none;"></i>
									</h6>
								</button>
							</div>
						</div>
						<div id="collapseHomeAssets" class="collapse" aria-labelledby="homeAssets" data-parent="#subAccordion">
							<!-- form family home assets -->
							<div class="card-body contentBody">
								<h3>Appliances</h3>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"></div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<h4>Coef x5</h4>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Refrigerator:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control"" placeholder="Quantity" name="refrigerator" id="refrigerator">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Air conditioner:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control"" placeholder="Quantity" name="airConditioner" id="airConditioner">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>LCD TV:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control"" placeholder="Quantity" name="lcdTV" id="lcdTV">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Computer > 100$:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control"" placeholder="Quantity" name="computerBig" id="computerBig">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Furnished cabinet > 300$:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control"" placeholder="Quantity" name="furnishedCabinet" id="furnishedCabinet">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Smartphone > 100$:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control"" placeholder="Quantity" name="smartphoneBig" id="smartphoneBig">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Camera > 100$:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control"" placeholder="Quantity" name="cameraBig" id="cameraBig">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Sofa:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control"" placeholder="Quantity" name="sofa" id="sofa">
											</div>
										</div>
									</div>
									<!-- end of column coef x5 -->
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"></div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<h4>Coef x3</h4>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Radio:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control" placeholder="Quantity" name="radio" id="radio">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Ricecooker:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control" placeholder="Quantity" name="ricecooker" id="ricecooker">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Color TV:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control" placeholder="Quantity" name="colorTV" id="colorTV">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Computer < 100$:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control" placeholder="Quantity" name="computerSmall" id="computerSmall">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>DVD player:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control" placeholder="Quantity" name="dvd" id="dvd">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Phone < 100$:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control" placeholder="Quantity" name="phone" id="phone">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Camera < 100$:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control" placeholder="Quantity" name="cameraSmall" id=cameraSmall"">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Sofa:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control" placeholder="Quantity" name="sofaSmall" id="sofaSmall">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Gascooker:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control" placeholder="Quantity" name="gascooker" id="gascooker">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Fruit blender:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control" placeholder="Quantity" name="fruitBlender" id="fruitBlender">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Electrical cooker:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control" placeholder="Quantity" name="electricalCooker" id="electricalCooker">
											</div>
										</div>
									</div>
								</div>
								<h3>Vehicles</h3>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"></div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<h4>Coef x5</h4>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Motobike > 500:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control" placeholder="Quantity" name="moto" id="moto">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Farming Machine:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control" placeholder="Quantity" name="farming" id="farming">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Car / Truck:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control" placeholder="Quantity" name="car" id="car">
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
												<span></span>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
												<h4>&nbsp;</h4>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<textarea name="" id="textarea" cols="65" rows="4" style="height: 107%" class="form-control" placeholder="Please specify if you have any comment"></textarea>
											</div>
										</div>
									</div>
								</div>
								<h3>Animal</h3>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"></div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<h4>Coef x5</h4>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Cow:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control" placeholder="Quantity" name="cow" id="cow">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Buffaloe:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control" placeholder="Quantity" name="buffaloe" id="buffaloe">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Pig:</b></p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control" placeholder="Quantity" name="pig" id="pig">
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
												<span></span>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
												<h4>&nbsp</h4>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<textarea name="" id="textarea" cols="65" rows="4" style="height: 107%" class="form-control" placeholder="Please specify if you have any comment"></textarea>
											</div>
										</div>
									</div>
								</div>
								<h3>Farm</h3>
								<p>If farm size > 10 000 m<sup>2</sup> (= 1 hectare), it counts as coeff 5; 3 otherwise</p>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"></div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<h4>Coef x5</h4>
											</div>
										</div>

										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Size:</b></p>
											</div>
											<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
												<input type="number" class="form-control" placeholder="Quantity" name="size" id="size">

											</div>
											<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
												m<sup>2</sup>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
												<span></span>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
												<h4>&nbsp</h4>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<textarea name="" id="area" cols="65" rows="1" class="form-control" placeholder="Please specify if you have any comment"></textarea>
											</div>
										</div>
									</div>
								</div>
								<h3>Result</h3>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Total x5 Coef:</b></p>
												<span>(Sum of quantities x5)</span>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control" name="totalxFive" id="totalxFive">
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<p><b>Total x3 Coef:</b></p>
												<span>(Sum of quantities x3)</span>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="number" class="form-control" name="totalxThree" id="totalxThree">
											</div>
										</div>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
										<b>Assets Global Total:</b>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
										<input type="number" class="form-control" name="AssetGlobal" id="AssetGlobal">
									</div>
									<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
								</div>
								<br>
								<div class="row">
									<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
												<b>Poverty certificate:</b>
											</div>	
											<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
												<select name="poverty" id="poverty " class="form-control">
													<option  value="Yes">Yes</option>
													<option  value="No">No</option>
												</select>
											</div>
										</div>
									</div>

									<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
										<div class="row">
											<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
												<b>If yes, please specify the level:</b>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
												<select name="specifyYes" id="specifyYes" class="form-control">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12"></div>
								</div>
								<br>
								<div class="row">
									<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12"></div>
									<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
										<button class="btn btn-primary float-right">Save information</button>
									</div>
								</div>
							</div>
							<!-- end family home assets -->
						</div>
						<!-- end subCollapsed family home assets -->
					</div>
					<!-- end sub collapse -->
				</div>
			</div>
			<!-- end collapsed family information -->
			<div class="conclustion">
				<div class="row">
					<div class="col-md-12" style="padding-left: 2%;padding-right: 2%;">
						<h4>Investigator's Conclusion</h4>
						<textarea name="" id="" rows="7" class="form-control" placeholder="Please comment"></textarea>
					</div>
				</div>	
			</div>
			<br>
		</div>

	</div>    	
</div>
<script>
	$(document).ready(function(){
		$( ".headerForm" ).click(function() {
			$(".more",this).toggle();
			$(".less",this).toggle();

		});
		$( ".subForm" ).click(function() {
			$(".down",this).toggle();
			$(".up",this).toggle();

		});
	});
</script>