$(document).ready(function() {
    $('#myForm').submit(function(e) {
      e.preventDefault(); // prevent default form submission
      
      // get form data
      var formData = $(this).serialize();
      
      // send AJAX request
      $.ajax({
        type: 'POST',
        url: 'register.php', // replace with your backend script URL
        data: formData,
        success: function(response) {
          // handle successful response
          console.log(response);
        },
        error: function(xhr, status, error) {
          // handle error
          console.error(error);
        }
      });
    });
  });
  