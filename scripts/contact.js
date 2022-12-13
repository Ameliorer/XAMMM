$(function() {

    'use strict';

    // Form

    var contactForm = function() {

        if ($('#contactForm').length > 0 ) {
            $( "#contactForm" ).validate( {
                rules: {
                    name: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true,
                        minlength: 5
                    },
                    subject: {
                        required: true,
                        minlength: 2
                    }
                },
                messages: {
                    name: "Entrez votre nom",
                    email: "Entrez une adresse mail valide",
                    subject: "Entrez un objet de mail",
                    message: "Entrez un message"
                },
                /* submit via ajax */
                submitHandler: function(form) {
                    var $submit = $('.submitting'),
                        waitText = 'envoi...';

                    $.ajax({
                        type: "POST",
                        url: "/~XAMMM/lib/send-email.php",
                        data: $(form).serialize(),

                        beforeSend: function() {
                            $submit.css('display', 'block').text(waitText);
                        },
                        success: function(msg) {
                            if (msg == 'OK') {
                                $('#form-message-warning').hide();
                                setTimeout(function(){
                                    $('#contactForm').fadeOut();
                                }, 1000);
                                setTimeout(function(){
                                    $('#form-message-success').fadeIn();
                                }, 1400);

                            } else {
                                $('#form-message-warning').html(msg);
                                $('#form-message-warning').fadeIn();
                                $submit.css('display', 'none');
                            }
                        },
                        error: function() {
                            $('#form-message-warning').html("Something went wrong. Please try again.");
                            $('#form-message-warning').fadeIn();
                            $submit.css('display', 'none');
                        }
                    });
                }

            } );
        }
    };
    contactForm();

});