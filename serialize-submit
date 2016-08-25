$("#contactform").submit(function(event) { 
    event.preventDefault();
    var formdata = $("#contactform").serialize();
    $.ajax({
     type: "POST",
     data: formdata,
     url: $("#contactform").attr("action")
    })
    .done(function(response) {
     swal("Thanks!", "For trying out my still WIP contact form :)", "success");
     $("#user-name").val("");
     $("#user-email").val("");
     $("#user-message").val("");
    });
   });
