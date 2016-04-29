/**
Used for Form Validation
Makes sure certain Fields are filled in before form is submitted
**/
$(document).ready(function () {
  $('#myForm').validate({
        rules: {
          inputFirstName: {
            required: true
          },
          inputEmail: {
            required: true,
            email: true
          },
          inputMake: {
            required: true
          },
          inputModel: {
            required: true
          },
          inputColor: {
            required: true
          }
        },
        messages: {
          inputFirstName: {
            required: 'Please Enter Your Name'
          },
          inputEmail: {
            required: 'Please Enter Your Email Address'
          },
          inputModel: {
            required: 'Please Enter Model of Your Car'
          },
          inputMake: {
            required: 'Please Enter Make of Your Car'
          },
          inputColor: {
            required: 'Please Specify Colore Desired'
          }
        },
        errorClass: "my-error-class"
    });
});
