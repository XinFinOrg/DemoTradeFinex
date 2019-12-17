
function showLoader() {
	document.getElementById("loader").style.display = "block";
}						

function hideLoader() {
	document.getElementById("loader").style.display = "none";
}
$(function () {
	var jQueryScript = document.createElement('script');  
	// jQueryScript.setAttribute('src','http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.10.5/jquery.dataTables.min.js');
	document.head.appendChild(jQueryScript);

	jQuery.validator.addMethod("LetterOnly", function (value, element) {
		// allow any non-whitespace characters as the host part
		return this.optional(element) || /^(?!(\s))([a-zA-Z\s])*$/.test(value);
	}, 'The text must start with a letter and should not contain special characters.');

	jQuery.validator.addMethod("LettersWithDotHiphen", function (value, element) {
		// allow any non-whitespace characters as the host part
		return this.optional(element) || /^([a-zA-Z]?)([a-zA-Z-.\s])*$/.test(value);
	}, 'The text must start with a letter and not only special characters except[.-]');

	jQuery.validator.addMethod("LettersWithspecialChars", function (value, element) {
		// allow any non-whitespace characters as the host part
		return this.optional(element) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@$#!&*%])[0-9a-zA-Z@$#!&*%]{8,}$/.test(value);
	}, 'The text must start with a letter and should contain 1 uppercase,1 number and 1 special character');


	jQuery.validator.addMethod("EmailGeneral", function (value, element) {
		var re = /^([a-zA-Z])(.*[a-z])(.*[a-z0-9_\+-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.([a-z]{2,})$/;
		return re.test(String(value).toLowerCase());
	}, 'You have entered an Invalid email address');

	jQuery.validator.addMethod("startsLetterOnly", function (value, element) {
		// allow any non-whitespace characters as the host part
		return this.optional(element) || /^([a-zA-Z]?)([a-z0-9\-]{2,})*$/.test(value);
	}, 'The text must start with a letter');

	jQuery.validator.addMethod("messageFormat1", function (value, element) {
		// allow any non-whitespace characters as the host part
		return this.optional(element) || /^([a-zA-Z]{1,})([a-zA-Z0-9.,:-\s$%])*$/.test(value);
	}, 'The text should start with letters and not contain any special characters except[.,:-$%]');

	jQuery.validator.addMethod("messageFormat2", function (value, element) {
		// allow any non-whitespace characters as the host part
		return this.optional(element) || /^([a-zA-Z]?)([a-zA-Z0-9.,\s():=>])*$/.test(value);
	}, 'The text should start with letters and not contain any special characters except[.,():=>]');

	/* (?!(\d|\`|\~|\!|\@|\#|\$|\%|\^|\&|\*|\(|\)|\+|\=|\[|\{|\]|\}|\||\\|\'|\<|\,|\.|\>|\?|\/|\""|\;|\:|\s)) */

	jQuery.validator.addMethod("alphanumericOnly", function (value, element) {
		// allow any non-whitespace characters as the host part
		return this.optional(element) || /^([a-zA-Z])([a-zA-Z0-9\s])+$/i.test(value);
	}, 'The text must combination of letter and numbers; Not started with number; should not contain special characters');

	jQuery.validator.addMethod("signedDecNumberOnly", function (value, element) {
		console.log('valueand', this.optional(element), /^[+]?[0-15]+\.[0-9]+$/.test(value));
		// allow any non-whitespace characters as the host part
		return this.optional(element) || /^[+]?[0-15]+\.[0-9]+$/.test(value);
	}, 'This field allows decimal number only');

	jQuery.validator.addMethod("DecNumberOnly", function (value, element) {
		console.log('valueand', this.optional(element), /^[+]?[0-15]+\.[0-9]+$/.test(value));
		// allow any non-whitespace characters as the host part
		return this.optional(element) || /^[0-9]+(\.[0-9]{1,2})?$/.test(value);
	}, 'This field allows decimal number only');

	jQuery.validator.addMethod("CalphanumericOnly", function (value, element) {
		// allow any non-whitespace characters as the host part
		return this.optional(element) || /^([a-zA-Z]{1,})([a-zA-Z0-9\.\,\s])+$/.test(value);
	}, 'The text must combination of letter and numbers; Not started with number; should not contain special characters except[.]');

	jQuery.validator.addMethod("webUrl", function (value, element) {
		// allow any non-whitespace characters as the host part
		return this.optional(element) || /^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i.test(value);
	}, 'The input value is not a correct URL');

	jQuery.validator.addMethod("LinkedinUrl", function (value, element) {
		// allow any non-whitespace characters as the host part
		return this.optional(element) || /(http|https):\/\/?(?:(www|\w\w)\.)?linkedin.com(\w+:{0,1}\w*@)?(\S+)(:([0-9])+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/.test(value);
	}, 'The input value is not a correct Linkedin URL');

	jQuery.validator.addMethod("numberOnly", function (value, element) {
		// allow any non-whitespace characters as the host part
		return this.optional(element) || /^[0-9]+$/.test(value);
	}, 'This field allowing number only');

	jQuery.validator.addMethod("mobilenumberOnly", function (value, element) { // International Mobile Number
		// allow any non-whitespace characters as the host part
		return this.optional(element) || /^\+\d{1,4}\s\d{6,14}$/.test(value);
	}, 'Please enter a valid mobile number');

	jQuery.validator.addMethod("decnumberOnly", function(value, element) {
		// allow any non-whitespace characters as the host part
		return this.optional( element ) || /^[0-9]+\.?[0-9]*$/.test( value );
	  }, 'This field allows only positive decimal numbers');


	//Buyer-Supplier Form
	$("#suppliers_form").validate({
		rules: {
			pcountry: {
				required: true
			},
			amount: {
				required: true,
				decnumberOnly : true
			},
			currency_supported: {
				required: true
			},
			name: {
				required: true,
				LetterOnly:true
			},
			maturity_date: {
				required: true
			},
			uploaded_file: {
				required: true
			},
			private_key: "required",
		},
		messages: {
			pcountry: {
				required: "Please select country"
			},
			amount: {
				required: "Please enter company name ",
				decnumberOnly : "Enter Numbers only"
			},
			currency_supported: "Please choose currency supported",
			name: "Please enter name",
			maturity_date: "Please choose date",
			uploaded_file: "Please upload doucment",
			private_key: {
				required: "Please enter a privateKey"
			},
		},
		success: function (elem) {


		},
		error: function (elem) {

		},
		submitHandler: function (form, e) {
			$('#suppliers').prop('disabled', true);
			showLoader();
			var formData = $(form).serialize();
			const formObj = formData.trim().split('&');
			var formDataObj = {};
			var formDataObj1 = {};
			var files = document.getElementById('uploaded_file').files;
			var dataFile;
			var hash;
			if (files.length > 0) {
				getBase64(files[0]);
			}
			function getBase64(file) {
				var reader = new FileReader();
				reader.readAsDataURL(file);
				reader.onload = function () {
					dataFile = reader.result;
					dataFile = dataFile.split("base64,");
					
					
					// after getting value of datafile name make the ajax call
					$.each(formObj, function (k, v) {
						v = v.split('=');
						if(v[0] === "fsdate" || v[0] === "maturitydate" || v[0] === "firstdate") {
							var date = v[1].split('-');
							date = date[2] + `/` + date[1] + '/' + date[0];
							formDataObj[v[0]] = date;
						} else {
							formDataObj[v[0]] = v[1];
						}
					})
					
					$.ajax({
						type:"POST",
						dataType:"json",
						url:"http://62.233.65.6:3110/api/uploadDoc",
						data:{"data":dataFile[1]},
						success: resp => {
							// console.log("response success: ",resp)
						},
						error: err =>{
							console.log("response error: ",err)
						}
					}).done(resp => {
					// .then(resp => {
						// console.log("response : ",resp);
					// console.log('formDataObj>>>>>>>', JSON.stringify(coinData));
						if(resp.status == true){
							hash = resp.hash;
							$.post("http://62.233.65.6:3110/api/generateContract",{
							"ipfsHash":hash,
							"instrumentType":formDataObj.instrument,
							"amount":formDataObj.amount,
							"currencySupported":formDataObj.currency_supported,
							"maturityDate":formDataObj.maturity_date,
							"name":formDataObj.name,
							"country":formDataObj.pcountry
							}).then(resp => {
								// console.log("response : ",resp);
								if(resp.status == true){
									// console.log(">>>>",document.getElementById("createinstrument"))
									hideLoader();
									document.getElementById("createinstrument").style.display = "none";
									document.getElementById("deploy").style.display = "block";
									$('#contractData').html('<p>'+resp.contract+'</p>');
									$("#deploy_contract").on('click', function (e) {
										showLoader();
										$('#deploy_contract').prop('disabled', true);
										$.post("http://62.233.65.6:3110/api/deployContract",{
										"ipfsHash":hash,
										"instrumentType":formDataObj.instrument,
										"amount":formDataObj.amount,
										"currencySupported":formDataObj.currency_supported,
										"maturityDate":formDataObj.maturity_date,
										"name":formDataObj.name,
										"country":formDataObj.pcountry,
										"privKey":formDataObj.private_key.toString().startsWith("0x") ? formDataObj.private_key : "0x"+formDataObj.private_key
										}).then(resp => {
											console.log("response : ",resp);
											
											
											if(resp.status == true){
												const hashUrl = `http://explorer.apothem.network/tx/${resp.receipt.transactionHash}`;
												const tHtml = `
																<p>
																	<span>Contact Address: </span>${resp.receipt.contractAddress.toLowerCase()}</p>
																	<span><p>Transaction Hash: </span><a href="${hashUrl}"target="_blank">${resp.receipt.transactionHash}</a>
																</p>
																`
												hideLoader();
												$("#thankyou").modal("show");
												$('#thankyou').css('opacity', '1');
												$('#deployedData').html(tHtml);
												$('#DeployBtn').click(function() {
													$("#thankyou").modal("hide");
													location.reload();
												});
											}
											
											
										})
									})
								}
								
								
							})
						}
					
					})
				};
				reader.onerror = function (error) {
				  console.log('Error: ', error);
				}
			}

		}
	});

	$('#maturity_date').datepicker({
			format: "dd-mm-yyyy",
			minDate:0,
			autoclose: true,
			// todayHighlight: true,
			startDate: '-0m'
        //endDate: '+2d'
		}).on('changeDate', function(ev){
			$('#sDate1').text($('#datepicker').data('date'));
			$('#datepicker').datepicker('hide');
		});
		
	

	$('#uploaded_file').change(function(){ 
        
        const fi = document.getElementById('uploaded_file');
        var txt = "";
        if ('files' in fi) {
            if (fi.files.length == 0) {
            txt = "Select one or more files.";
            } else {
            for (var i = 0; i < fi.files.length; i++) {
                var file = fi.files[i];
                if ('name' in file) {
                var filename = file.name;
                document.getElementById('uploaded_file').innerHTML = filename;
                filextension=filename.split(".");
			    filext="."+filextension.slice(-1)[0];
                // /console.log(">>>>>>",file.name,filextension,filext);
                valid=[".jpg",".png",".jpeg",".doc",".docx",".pdf"];
                    if (valid.indexOf(filext.toLowerCase())==-1){
                        document.getElementById("error").style.display = "block";
                        if ('size' in file) {
                            const fsize = file.size; 
                            if(parseFloat(fsize) > 5097152) {
                                document.getElementById("error1").style.display = "block";
                            }
                            else{
                                document.getElementById("error1").style.display = "none";
                            }
                        }
                    } 
                    else{
                        document.getElementById("error").style.display = "none";
                    }
                }
                
            }
            }
        }         
        
	});
	
	
	
});