
      $('#password, #confirm_password').on('keyup', function () {
        if ($('#password').val() == $('#confirm_password').val()) {
          $('#message').html('Passwords Matching').css('color', 'green');
        } else 
          $('#message').html('Passwords Not Matching').css('color', 'red');
      });

      // display image in a div
      var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };

