

//AJAX REGISTER
var url = $('#Formula').attr('action');
var handleRequest = function(input_name) {
var formData = $('input, textarea, select').serialize();
formData +=  '&ajax=true&input_name='+input_name;
$.post(url, formData)
.done(function (response){
switch (response) {
    case 'ok':
               $('#' + input_name).removeClass('error-register').addClass('success-register').css('border', '1px solid green');
break;
    case 'notOk':
               $('#' + input_name).removeClass('success-register').addClass('error-register').css('border', '1px solid red');
break;
}
$('#submit-register').prop('disabled', $('.error-register').length);
})
.fail(function() {
alert('Quelque chose s\'est mal passé');
});
};

$('#firstname,#lastname,#street,#zipcode,#town,#phoneNumber,#email,#birthDate,#countryBirth,#nationality,#diploma,#poleEmploi,#badge,#linkCodecademy,#textHeros,#textHacks,#textExp').blur(function() {
handleRequest(this.name);
});





















































































//$(document).ready(function(){
    // var lastname = document.getElementById('lastname');
    // var firstname = document.getElementById('firstname');
    // var street = document.getElementById('street');
    // var zipcode = document.getElementById('zipcode');
    // var town = document.getElementById('town');
    // var phoneNumber = document.getElementById('phoneNumber');
    // var email = document.getElementById('email');
    // var birthDate = document.getElementById('birthDate');
    // var countryBirth = document.getElementById('countryBirth');
    // var nationality = document.getElementById('nationality');
    // var diploma = document.getElementById('diploma');
    // var poleEmploi = document.getElementById('poleEmploi');
    // var badge = document.getElementById('badge');
    // var linkCodecademy = document.getElementById('linkCodecademy');
    // var textHeros = document.getElementById('textHeros');
    // var textHacks = document.getElementById('textHacks');
    // var textExp = document.getElementById('textExp');
    
    
    // // lastname.onclick = function(){
    // //     alert(this);
    // // };
    // // lastname.onmouseover = function() {   
    // //     alert('Over' . this);
    // // };
    // lastname.onkeypress = function() {
    //     alert(this);
    // };
    // lastname.onkeyup = function() {
    //     alert(this.value);
    // };
    
    // firstname.onclick = function() {
    //     alert(this);
    // };
    // street.onclick = function() {
    //     alert(this);
    // };
    // poleEmploi.onkeyup = function() {
    //     if($(this).val().length != 8){ // si la chaîne de caractères est inférieure à 8
            
    //         $(this).css({ // on rend le champ rouge
    //             borderColor : 'red',
    //             color : 'red',
    //         //     border: 2px dashed red,
    //         });
    //      }
    //      else{
    //          $(this).css({ // si tout est bon, on le rend vert
	//          borderColor : 'green',
	//          color : 'green'
	//      });
    //      }
    //     //alert(poleEmploi);
    // };
