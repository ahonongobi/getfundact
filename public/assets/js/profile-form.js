(function ($) {
    "use strict";
    $("#contactForm")
        .validator()
        .on("submit", function (event) {
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
        var tel = $("#tel").val();
        var email = $("#email").val();
        var pays = $("#pays").val();
        var nationanlite = $("#nationanlite").val();
        var date_naissance = $("#date_naissance").val();
        var nom_prenoms = $("#nom_prenoms").val();

        //change the submiting button text to sending
        $("#sendMessage").html("Le message est entrain d'être envoyé...");
        $.ajax({
            type: "POST",
            // add {{ url('addProfile') }} in the url
            url: "{{ url('addProfile') }}",
            data:
                "tel=" +
                tel +
                "&email=" +
                email +
                "&pays=" +
                pays +
                "&nationanlite=" +
                nationanlite +
                "&date_naissance=" +
                date_naissance+
                "&nom_prenoms=" +
                nom_prenoms,
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
        //$("#contactForm")[0].reset();
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
