
$(document).ready(function() {
 $('#contactform').validate({
	rules:{
	email:{
		required:true,
		email:true	
		},
	
	},//конец rules
	messages:{
	email:{
	required: "Введіть адресу електронної пошти",
	email: "Ви ввели некоректний e-mail"	
	}
	},//конец messages
	
 });//конец validate    
});//конец ready