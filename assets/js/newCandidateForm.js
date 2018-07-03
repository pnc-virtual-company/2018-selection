/*!
 * newCandidateForm.js
 *
 * Script used for the new candidate form
 * 
 */

var base_url = document.currentScript.getAttribute("base_url");

/*
 * The set of functions below defines the display and automatic filling of fields
 * Actions include automatic scrolling, chevrons adjustments, automatic computation, add/ remove rows to datatable...
 */
$(document).ready(function(){
	// Manage chevrons of the collapsible div "Student information" & "Family information"
	$(".formHeading" ).click(function() {
		adaptHeadingChevrons(this);
	});

	// Scroll to the top when the user hide the form "Student information"
	$("#collapseOne" ).on('hide.bs.collapse', function () {
		$('#accordion')[0].scrollIntoView();
	});

	// Manage chevrons of the collapsible sub divs of the "Family information" form
	$(".subHeading" ).click(function() {
		adaptSubHeadingChevrons(this);
	});

	// Scroll to the subform that is opened by the user
	$(".subForm" ).on('shown.bs.collapse', function () {
		$(this).parent(".card")[0].scrollIntoView();
	});

	// Compute and fill the total parent's income on a monthly basis 
	$('.form-group').on('input','.fincome',function(){
		var fTotalSum = sumOfIncomes('family');
		$('#fTotal').val(fTotalSum);
	});

	// Compute and fill the children's contribution to the family's income on a monthly basis
	$('.form-group').on('input','.cincome',function(){
		var cTotalSum = sumOfIncomes('children');
		$('#cTotal').val(cTotalSum);
	});

	// Compute and fill the total family's income on a monthly basis
	$('.form-group').on('input','.gincome',function(){
		var gTotal;
		var fTotalSum=$('#fTotal').val();
		var cTotalSum=$('#cTotal').val();
		gTotal=Number(fTotalSum)+Number(cTotalSum);
		$('#gTotal1').val(gTotal);
	});

	// Compute and fill the total family's income per individual living in the family's house on a monthly basis
	$('.form-group').on('input','.gincomein',function(){
		fillIncomePerInd();
	});

	// Compute and fill the total family's income per individual living in the family's house on a monthly basis
	$('.form-group').on('input','#liveInHouse',function(){
		fillIncomePerInd();
	});

	// Compute and fill the family expense
	$('.form-group').on('input','.fExpense',function(){
		var totalExpenseVal = 0;
		$('.form-group .fExpense').each(function(){
			var inputExVal = $(this).val();
			if($.isNumeric(inputExVal)){
				totalExpenseVal += parseFloat(inputExVal);
			}
		});
		$('#totalExpense').val(totalExpenseVal);
	});

	// Compute and fill the sum of home assets coef x5
	$('.form-group').on('input','.coef_x5',function(){
		fillTotalCoef5();
	});

	// Compute and fill the sum of home assets coef x3
	$('.form-group').on('input','.coef_x3',function(){
		fillTotalCoef3();
	});

	// Compute and fill the sum of home assets coef x3
	$('.form-group').on('input','#farmSize',function(){
		fillTotalCoef3();
		fillTotalCoef5();
	});

	// Compute and fill the total score of Home Assets
	$('.form-group').on('input','.assetGlobal',function(){
		var sumQuantity5 = $('#sumQuantity5').val();
		var sumQuantity3 = $('#sumQuantity3').val();
		var totalGlobal=Number(sumQuantity5)+Number(sumQuantity3);
		$('#globalAsset').val(totalGlobal);

	});

	$('#candidateImage').on('change', function(){
		if (this.files && this.files[0]) {
    	    var reader = new FileReader();
    	    reader.onload = function (e) {
    	        $('#blah')
    	            .attr('src', e.target.result)
    	            .width(150)
    	            .height(200);
    	    };
    	    reader.readAsDataURL(this.files[0]);
   		}
	});

	// Disable ordering of datatable
	// So that new rows will appear at the bottom of the table (and not the top)
	$('#tab_logic').DataTable( {
        "ordering": false
    });

    // Add row to the table in the modal "List of NGO" 
	$("#add_row").on("click", function() {
		var table = $('#tab_logic').DataTable();
		var rowNb = $('#nbRows').val();
		var tr = $("<tr></tr>");
		var td_del = $("<td data-name='del'><a class='remove_row' id='' href='#'><i class='text-danger mdi mdi-delete' title='Delete' style='font-size: 25px;''></i></a></td>");
		var td_name = $("<td data-name='name'><input type='hidden' id='rowNb" + rowNb +"' name='rowNb" + rowNb +"' value='' class='form-control'/><input type='text' id='ngoName" + rowNb +"' value='' name='rowNameNb" + rowNb +"' class='form-control'/></td>");
		td_del.appendTo($(tr));
		td_name.appendTo($(tr));
		table.row.add(tr).draw();
	    $('#nbRows').val(parseInt(rowNb) + 1);
	});
	
	// Remove one NGO from the database and remove a row from the table
	$('#tab_logic').on('click', '.remove_row', function () {
		var result = confirm("Are you sure to delete this NGO?");
		if (result) {
			var table = $('#tab_logic').DataTable();
			var RowToRemove = $(this);
			var NGOid = RowToRemove.attr("id");
			// If the NGO exists in the database (i.e. NGOid != "")
			if (NGOid != "") {
				NGOid = NGOid.replace('NGO','');
				var data = 'NGOidToDelete=' + NGOid;
				$.ajax({
					type: 'POST',
					url: base_url + 'ngos/deleteNGO',
					data: data,
					success:function(msg){
						if (msg == false) {
							bootbox.alert('A problem has been encountered while trying to delete the NGO');
						} else {
							table.row(RowToRemove.parents('tr')).remove().draw(false);
							$('#nbRows').val(parseInt($('#nbRows').val()) - 1);
							resetRowsAttributes();
							updateNGOSelectOptions();
						}
					}
				});
			} else {
				table.row(RowToRemove.parents('tr')).remove().draw(false);
				$('#nbRows').val(parseInt($('#nbRows').val()) - 1);
				resetRowsAttributes();
			}
		}
	});
	
	// Save the changes of the list of NGO
	$('#saveNGO').click(function(){
		var rowNb = $('#nbRows').val();
		$.ajax({
			type: 'ajax',
			method: 'POST',
			url: base_url + 'ngos/updateListOfNGO',
			data: $('#editListNGO').serialize(),
			success: function(msg){
				var object = JSON.parse(msg);
				for (var i = 0; i < rowNb; i++) {
					if (object[i] != null) {
						ngoID = object[i][0]["MAX(ngo_id)"];
						$('#rowNb'+i).val(ngoID);
						$('#rowNb'+i).parents("tr").find("a").attr("id","NGO"+ngoID);
					}
				}
				updateNGOSelectOptions();
				bootbox.alert('List of NGO successfully updated');
			},
			error: function(){
				bootbox.alert('Could not update the list of NGO');
			}
		});	
	});
});


/*
 * This set of functions below defines the behavior for each button "Save information"
 * Actions include hiding/ showing subforms, add or update candidate information in the database through AJAX...
 */
$(document).ready(function(){
	// Store the id of the candidate when it has been created in the database
	var candidateID;

	// Check if first and last names are filled
	// If yes: save the candidate info, toggle the current form and open the next one
	$('#saveNewCan').click(function(){
		var fieldname = "";
  		if ($('#firstname').val() == '') fieldname = "firstname";
  		if ($('#lastname').val() == '') fieldname = "lastname";
  		if (fieldname != "") {
  			bootbox.alert('The field ' + fieldname + ' is mandatory.');
  			$('#accordion')[0].scrollIntoView();
  		}
  		else {
  			//
			$.ajax({
				type: 'POST',
				url: base_url + 'candidates/addCandidate',
				data: new FormData(document.getElementById('canForm')),
				contentType: false,
				processData: false,
				success:function(msg){
					// The candidate already existed in the database and the information has been updated
					if (msg == '') {
						bootbox.alert('The information has been successfully updated');
					}
					else {
						msg = JSON.parse(msg);
						// There has been an error while uploading the candidate picture
						if (isNaN(parseInt(msg))) {
							bootbox.alert(msg);
						}
						// The candidate did not exist in the database before and the information has been succesfully added
						else {
							candidateID = msg;
							$('#newCandidateTitle').text('Candidate #' + candidateID);
							$("input[name='candidateID']").val(candidateID);
							bootbox.alert('The new candidate (# ' + candidateID +') has been created');
							scrollToNextForm(['#headingOne','#headingTwo','#familyPro'], ['#collapseTwo','#collapseFamilyPro'],'#accordion');
						}
					}
				},
				error:function(){
					bootbox.alert('Error: the new candidate could not be created');
				}
			});
		}
	});

	// Check first if the new candidate has already been stored (i.e. has an ID)
	// If candidateID exists, then add the family profile in the database and go to the next form
	$('#SaveFamilyPro').click(function(){
		if (candidateID==undefined) {
			askForFirstAndLastNames('#collapseFamilyPro','#familyPro');
		} else {
			$.ajax({
			type: 'POST',
			url: base_url + 'candidates/addFamilyProfile',
			data: $('form#fProForm').serialize(),
			success:function(msg) {
				bootbox.alert('Family profile information has been successfully added');
				scrollToNextForm(['#familyPro','#familyIncome'], ['#collapseFamilyIncome'],'#headingTwo');
			},
			error:function(){
				bootbox.alert('Error: family profile information could not be added');
			}

		});
		}
	});

	// Check first if the new candidate has already been stored (i.e. has an ID)
	// If candidateID exists, then add the family income information in the database and go to the next form
	$('#btnSaveFamilyIncome').click(function(){
		if (candidateID==undefined) {
			askForFirstAndLastNames('#collapseFamilyIncome','#familyIncome');
		} else {
			$.ajax({
			type: 'POST',
			url: base_url + 'candidates/addFamilyIncome',
			data: $('form#formFamilyIncome').serialize(),
			success:function(msg) {
				bootbox.alert('Family income information has been successfully added');
				scrollToNextForm(['#familyIncome','#familyExpense'], ['#collapseFamilyExpense'],'#familyPro');
			},
			error:function(){
				bootbox.alert('Error: family profile information could not be added');
			}

		});
		}
	});

	// Check first if the new candidate has already been stored (i.e. has an ID)
	// If candidateID exists, then add the family expense information in the database and go to the next form
	$('#saveExpense').click(function(){
		if (candidateID==undefined) {
			askForFirstAndLastNames('#collapseFamilyExpense','#familyExpense');
		} else {
			$.ajax({
			type: 'POST',
			url: base_url + 'candidates/addExpense',
			data: $('form#formExpense').serialize(),
			success:function(msg) {
				bootbox.alert('Family expense information has been successfully added');
				scrollToNextForm(['#familyExpense','#loanDebt'], ['#collapseLoanDebt'],'#familyIncome');
			},
			error:function(){
				bootbox.alert('Error: family expense information could not be added');
			}

		});
		}
	});

	// Check first if the new candidate has already been stored (i.e. has an ID)
	// If candidateID exists, then add the loand & debt information in the database and go to the next form
	$('#saveLoan').click(function(){
		if (candidateID==undefined) {
			askForFirstAndLastNames('#collapseLoanDebt','#loanDebt');
		} else {
			$.ajax({
			type: 'POST',
			url: base_url + 'candidates/addLoansDebts',
			data: $('form#formLoan').serialize(),
			success:function(msg) {
				bootbox.alert('Family loans & debts information has been successfully added');
				scrollToNextForm(['#loanDebt','#residence'], ['#collapseResidence'],'#familyExpense');
			},
			error:function(){
				bootbox.alert('Error: family loans & debts information could not be added');
			}
		});
		}
	});

	// Check first if the new candidate has already been stored (i.e. has an ID)
	// If candidateID exists, then add the residence information in the database and go to the next form
	$('#saveResidence').click(function(){
		if (candidateID==undefined) {
			askForFirstAndLastNames('#collapseResidence','#residence');
		} else {
			$.ajax({
			type: 'POST',
			url: base_url + 'candidates/addResidence',
			data: $('form#residenceForm').serialize(),
			success:function(msg) {
				bootbox.alert('Family residence information has been successfully added');
				scrollToNextForm(['#homeAsset','#residence'], ['#collapseHomeAsset'],'#loanDebt');
			},
			error:function(){
				bootbox.alert('Error: family residence information could not be added');
			}
		});
		}
	});

	// Check first if the new candidate has already been stored (i.e. has an ID)
	// If candidateID exists, then add home assets information in the database and go to the next form
	$('#saveHomeAsset').click(function(){
		if (candidateID==undefined) {
			askForFirstAndLastNames('#collapseHomeAsset','#homeAsset');
		} else {
			$.ajax({
			type: 'POST', 
			url: base_url + 'candidates/addHomeAssets',
			data: $('form#formHomeAsset').serialize(),
			success:function(msg) {
				bootbox.alert('Home assets information has been successfully added');
				scrollToNextForm(['#homeAsset','#headingTwo'], [],'#accordion');
				$('#collapseHomeAsset').collapse("hide");
				$('#collapseTwo').collapse("hide");
			},
			error:function(){
				bootbox.alert('Error: home assets information could not be added');
			}
		});
		}
	});

	// Check first if the new candidate has already been stored (i.e. has an ID)
	// If candidateID exists, then add investigator's conclusion in the database and go to the next form
	$('#saveConclude').click(function(){
		if (candidateID==undefined) {
			bootbox.alert('Please enter first the first and last names of the candidate and click on button "Save information" in the form above "Student information"');
			$('#collapseOne').collapse("show");
			$('#headingOne').find("i").toggle();
			$('#accordion')[0].scrollIntoView();
		} else {
			$.ajax({
			type: 'POST',
			url: base_url + 'candidates/addConclude',
			data: $('form#formConclude').serialize(),
			success:function(msg) {
				bootbox.alert("Investigator's conclusion has been successfully added");
			},
			error:function(){
				bootbox.alert("Error: investigator's conclusion could not be added");
			}
		});
		}
	});
});


/*
 * Below are the functions called by the various events described above 
 */

/**
 * [adaptHeadingChevrons manages chevrons of the collapsible div "Student information" & "Family information"]
 * @param  {[object]} clickedHeading 
 */
function adaptHeadingChevrons(clickedHeading) {
	$(".down").show();
	$(".up").hide();
	if ($(clickedHeading).attr('aria-expanded') == "true") {
	}
	else {
		$(".down",clickedHeading).hide();
		$(".up", clickedHeading).show();
	}
}

/**
 * [adaptSubHeadingChevrons manages chevrons of the collapsible sub divs of the "Family information" form]
 * @param  {[object]} clickedSubHeading 
 */
function adaptSubHeadingChevrons(clickedSubHeading) {
	$(".subDown").show();
	$(".subUp").hide();
	if ($(clickedSubHeading).attr('aria-expanded') == "true") {
	}
	else {
		$(".subDown",clickedSubHeading).hide();
		$(".subUp", clickedSubHeading).show();
	}
}


/**
 * [sumOfIncomes computes the sum of incomes on a monthly basis]
 * @param  {[string]} origin ["family" or "children" depending on the origin of this incomes]
 * @return {[Number]}        [Sum of incomes on a monthly basis]
 */
function sumOfIncomes(origin) {
	var prefix = origin == "children" ? "c" : "f";
	var Monthly = $('#'+prefix+'Monthly').val();
	var Daily = $('#'+prefix+'Daily').val();
	var Seasonal= $('#'+prefix+'Seasonal').val();
	var Yearly= $('#'+prefix+'Yearly').val(); 
	return Math.round(Number(Monthly)+(Number(Daily)*30)+(Number(Seasonal)+Number(Yearly))/12);
}

/**
 * [fillIncomePerInd computes and fill the monthly income per individual living in the family]
 */
function fillIncomePerInd() {
	var liveInHouse = $('#liveInHouse').val();
	var gTotal = $('#gTotal1').val();
	// If the # of persons living in the family's house and the total monthly income are already informed
	if (liveInHouse!="" && gTotal!="") {
		var gTotalIn = Math.round(Number(gTotal) / Number(liveInHouse));
		$('#gTotal2').val(gTotalIn);
	}
}

/**
 * [fillTotalCoef5 computes and fills the total score of home assets counting as coef 5]
 */
function fillTotalCoef5() {
	var sumTotalCoefx5 = 0;
	$('.form-group .coef_x5').each(function(){
		var homeAssetVal = $(this).val();
		if($.isNumeric(homeAssetVal)){
			sumTotalCoefx5 += parseFloat(homeAssetVal);
		}
	});
	var farmSize = $('#farmSize').val();
	if (farmSize >= 10000) {
		sumTotalCoefx5 += 1;
	}
	$('#sumQuantity5').val(sumTotalCoefx5*5);
}

/**
 * [fillTotalCoef3 computes and fills the total score of home assets counting as coef 3]
 */
function fillTotalCoef3() {
	var sumTotalCoefx3 = 0;
	$('.form-group .coef_x3').each(function(){
		var homeAssetVal = $(this).val();
		if($.isNumeric(homeAssetVal)){
			sumTotalCoefx3 += parseFloat(homeAssetVal);
		}
	});
	var farmSize = $('#farmSize').val();
	if (farmSize > 0 && farmSize < 10000) {
		sumTotalCoefx3 += 1;
	}
	$('#sumQuantity3').val(sumTotalCoefx3*3);
}

/**
 * [askForFirstAndLastNames closes the current form and asks to enter first and last names first]
 * @param  {[string]} idOfCollapsibleElement
 * @param  {[string]} idOfChevron    
 */
function askForFirstAndLastNames(idOfCollapsibleElement, idOfChevron) {
	bootbox.alert('Please enter first the first and last names of the candidate and click on button "Save information" in the form above "Student information"');
	$(idOfCollapsibleElement).collapse("hide");
	$('#collapseOne').collapse("show");
	$('#headingOne').find("i").toggle();
	$('#headingTwo').find("i").toggle();
	$(idOfChevron).find("i").toggle();
	$('#accordion')[0].scrollIntoView();
}

/**
 * [scrollToNextForm opens and scroll to the next form, and adapt chevrons]
 * @param  {[array of string]} idToToggle
 * @param  {[array of string]} idToShow 
 * @param  {[string]} idToScrollTo
 */
function scrollToNextForm(idToToggle, idToShow, idToScrollTo) {
	for (var k = 0; k < idToToggle.length; k++) {
		$(idToToggle[k]).find("i").toggle();
	}
	for (var k = 0; k < idToShow.length; k++) {
		$(idToShow[k]).collapse("show");
	}
	$(idToScrollTo)[0].scrollIntoView();
}

/**
 * [updateNGOSelectOptions updates the list of NGO in the form]
 */
function updateNGOSelectOptions(){
	var select = $("#ngo");
	var rowNb = $('#nbRows').val();
	// Keep only the "Please select" option
	select.prop('options').length=1;
	// Populate the select options with the new values of NGO from the table #tab_logic
	for (var i = 0; i < rowNb; i++) {
		select.prop('options')[i+1] = new Option($("#ngoName"+i).val(), $("#rowNb"+i).val(), true);
	}
}

/**
 * [resetRowsAttributes changes the names and ids of the rows in the table #tab_logic after a row has been deleted]
 * Example: if we delete row number 2, we don't want to keep the integers 0,1,3,4 in names and ids but 0,1,2,3 instead
 */
function resetRowsAttributes(){
	var i=0;
	$('#tab_logic > tbody  > tr').each(function() {
		$(this).find("input").first().attr("id","rowNb"+i);
		$(this).find("input").first().attr("name","rowNb"+i);
		$(this).find("input").eq(1).attr("id","ngoName"+i);
		$(this).find("input").eq(1).attr("name","rowNameNb"+i);
		i=i+1;
	});
}