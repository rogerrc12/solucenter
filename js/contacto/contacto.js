$('#contactForm').validate({
    rules: {
      nombre: {lettersonly: true},
      email: {email: true},
      direccion: {maxlength: 50},
      asunto: {maxlength: 30},
      mensaje: {minWords: 5, maxWords: 25}
    },
    messages: {
      nombre: {required: 'Campo requerido', lettersonly: 'Solo se permiten letras'},
      email: {required: 'Campo requerido', email: 'Ingresa un email válido'},
      direccion: {required: 'Campo requerido', maxlength: 'Máximo de 50 caracteres'},
      asunto: {required: 'Campo requerido', maxlength: 'Máximo de 30 caracteres'},
      mensaje: {required: 'Campo requerido'}
    },
    submitHandler: function (form) {
        $('.loader-ajax').css({'display': 'flex'})
      $.ajax({
          type: $(form).attr('method'),
          url: $(form).attr('action'),
          data: $(form).serialize(),
          dataType : 'json'
      })
      .done(function (response) {
        $('.loader-ajax').hide()
        if (response.success === true) {
            $(form).trigger("reset");
            Swal({
                type: 'success',
                title: 'enviado',
                text: 'Gracias por tu mensaje, pronto estaremos en contacto',
                showConfirmButton: false,
                timer: 2500
              })
        }
        else {
            Swal({
                type: 'error',
                title: 'Error',
                text: 'Ha ocurrido un error al enviar el mensaje. Intenta más tarde',
                showConfirmButton: false,
                timer: 2500
              })
        }
      });
      return false;
   }
  })