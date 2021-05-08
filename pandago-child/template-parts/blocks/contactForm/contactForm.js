function submitInfo(){
	var submitButton = document.getElementById('formButton'); 
	var submittedTitle = document.getElementById('titleInfoSubmitted'); 
	var submittedText = document.getElementById('textInfoSubmitted');   
	var checkbox = document.getElementById('formCheckboxGrid');
	var requiredText = document.getElementById('formRequiredText');


	if(document.forms['contact'].userName.value ==="" || document.forms['contact'].email.value ==="" || document.forms['contact'].phone.value ==="" || document.forms['contact'].cb.checked == 0){
        alert("Nepieciešamie lauki nav aizpildīti!")}else{
	        submitButton.style.display = 'none';
			submittedTitle.style.display = 'block';  
			submittedText.style.display = 'block';
			checkbox.style.display = 'none';
			requiredText.style.display = 'none';
	        }


}