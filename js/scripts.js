/*this is for hot deal block form*/
function showSlides() {
					var i;
					var slides = document.getElementsByClassName("mySlides");
					var dots = document.getElementsByClassName("dot");
					for (i = 0; i < slides.length; i++) {
					   slides[i].style.display = "none";  
					}
					slideIndex++;
					if (slideIndex > slides.length) {slideIndex = 1}    
					for (i = 0; i < dots.length; i++) {
						dots[i].className = dots[i].className.replace(" active", "");
					}
					slides[slideIndex-1].style.display = "block";  
					dots[slideIndex-1].className += " active";
					setTimeout(showSlides, 7000); // Change image every 7 seconds
				}

/*this is for contactus form*/
function setFormFocus() {
     document.forms[0].first_name.focus();
}
function confirmSubmit() {
	if (document.forms[0].first_name.value == "" || document.forms[0].first_name.value == "Enter Your First Name") {
		window.alert("Please Enter Your First Name");
		return false;
	}
	else if (document.forms[0].last_name.value == "" || document.forms[0].last_name.value == "Enter Your Last Name") {
		window.alert("Please Enter Your Last Name");
		return false;
	}
	else if (document.forms[0].email.value == "" || document.forms[0].email.value == "Enter your E-mail Address") {
		window.alert("Please Enter Your E-mail Address.");
		return false;
	}
	else if (isNaN(document.forms[0].phone.value)) {
		window.alert("Please Enter Your Phone Number");
		return false;
	}
	
	else if (document.forms[0].subject_type.value == "unselected") {
		window.alert("Please Enter Subject Type");
		return false;
	}
	else if (document.forms[0].subject_type.value == "other") {
                document.getElementById('divother').style.display = 'block';
            
        if (document.forms[0].othertext.value == "" || document.forms[0].othertext.value == "Enter Other Subject Type") {
			window.alert("Please Enter Other Subject Type");
			return false;
		}
	}
	 var contactInfo = false;
	 for (var i=0; i<2; ++i) {
		   if (document.forms[0].contactHow[i].checked == true) {
				 contactInfo = true;
				 break;
		   }
	 }
	 if (contactInfo == false) {
		   window.alert("You must select a contact method.");
		   return false;
	 }
	else if(true) {
		window.alert("You have Submitted!!!");
		return false;
		}
	
	}
/*For seeing the filled form*/
function pr() {		
            document.getElementById("result").innerHTML = document.getElementById('firstname').value + " " 
            + document.getElementById('lastname').value + "<br />" 
            + document.getElementById('email').value + "<br />" 
            + document.getElementById('phone').value + "<br />"
            + document.getElementById('comment').value + "<br />" 
            + document.getElementById('subjecttype').value;
            
}
