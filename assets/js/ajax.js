//AJAX REGISTER
var url = $('#modalform').attr('action');
var handleRequest = function(input_name) {
var formData = $('input, textarea, select').serialize();
formData +=  '&ajax=true&input_name='+input_name;
console.log(formData);
console.log(url);
$.post(url, formData)
.done(function (response){
console.log(response);
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
