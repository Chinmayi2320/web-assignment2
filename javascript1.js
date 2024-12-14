$(document).ready(function () {
  $('#registrationForm').submit(function (event) {
    event.preventDefault();  // Prevent form from submitting

    // Get form data
    var formData = $(this).serializeArray();

    // Display confirmation message
    $('#confirmation').show();
    $('#userData').empty();  // Clear previous data

    formData.forEach(function (field) {
      $('#userData').append('<li><strong>' + field.name + ':</strong> ' + field.value + '</li>');
    });

    // Hide form after submission
    $('#registrationForm').hide();
  });
});
