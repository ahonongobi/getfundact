(function ($) {
    "use strict";
    $("#contactForm")
        .validator()
        .on("submit", function (event) {
            // stop form from submitting if noroot value is not 12
            var norobot = $("#norobot").val();

            if (norobot != 17) {
                event.preventDefault();
                alert("Veuillez vérifier que vous n'êtes pas un robot en entrant de bon nombre.");
                return false;
            }
            var objectvalue = $('#object').val();
            if(objectvalue != ""){
                event.preventDefault();
                //alert("Veuillez entrer un objet.");
                return false;
            }
            //stop form from submitting if object is filled
            // stop form from submitting if the captcha checkbox is not checked


            if (event.isDefaultPrevented()) {
                formError();
                submitMSG(false, "Avez-vous remplir tout les champs?");
            } else {
                event.preventDefault();
                submitForm();
            }
        });
        //get the csrf token in meta tag
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });


    function submitForm() {
        var name = $("#name").val();
        var email = $("#email").val();
        var msg_subject = $("#msg_subject").val();
        var phone_number = $("#phone_number").val();
        var message = $("#message").val();
        var norobot = $("#norobot").val();
        var object = $("#object").val();
        
        //change the submiting button text to sending
        $("#sendMessage").html("Le message est entrain d'être envoyé...");
        $.ajax({
            type: "POST",
            url: "/contact-nous",
            data:
                "name=" +
                name +
                "&email=" +
                email +
                "&msg_subject=" +
                msg_subject +
                "&phone_number=" +
                phone_number +
                "object=" + object +
                "&message=" +
                message,
            success: function (data) {
                if (data.status == true) {
                    console.log("send successfull");
                    $("#sendMessage").html("Message envoyé");
                    formSuccess(data.message);
                } else {
                    formError();
                    //change the submiting button text to the initial text
                    $("#sendMessage").html("Envoyer un message");
                    submitMSG(false, text);

                    console.log("text.success");
                }
            },
        });
    }
    function formSuccess(message) {
        $("#contactForm")[0].reset();
        submitMSG(true, message);
    }
    function formError() {
        $("#contactForm")
            .removeClass()
            .addClass("shake animated")
            .one(
                "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
                function () {
                    $(this).removeClass();
                }
            );
    }
    function submitMSG(valid, msg) {
        if (valid) {
            var msgClasses = "h4 tada animated text-success";
        } else {
            var msgClasses = "h4 text-danger";
        }
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }
})(jQuery);
