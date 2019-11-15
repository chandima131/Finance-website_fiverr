$(function() {
  $("#inqueryForm input,#inqueryForm textarea").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function($form, event, errors) {
      // additional error messages or events
    },
    submitSuccess: function($form, event) {
      event.preventDefault(); // prevent default submit behaviour
      // get values from FORM
      var Nombre = $("input#Nombre").val();
          var emailaddress = $("input#emailaddress").val();
      
       
      $this = $("#sendInqueryButton");
      $this.prop("disabled", true); // Disable submit button until AJAX call is complete to prevent duplicate messages
      $.ajax({
        url: "inquery.php",
        type: "POST",
        data: {
          Nombre: Nombre,
          
          emailaddress: emailaddress,
          

        },
        cache: false,
        success: function() {
          // Success message
          $("#successInquery").html("<div class='alert alert-success'>");
          $("#successInquery > .alert-success")
            .html(
              "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;"
            )
            .append("</button>");
          $("#successInquery > .alert-success").append(
            "<strong>Your message has been sent. </strong>"
          );
          $("#successInquery > .alert-success").append("</div>");
          //clear all fields
          $("#inqueryForm").trigger("reset");
        },
        error: function() {
          // Fail message
          $("#successInquery").html("<div class='alert alert-danger'>");
          $("#successInquery > .alert-danger")
            .html(
              "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;"
            )
            .append("</button>");
          $("#sucsuccessInquerycess > .alert-danger").append(
            $("<strong>").text(
              "Sorry " +
                firstName +
                ", it seems that my mail server is not responding. Please try again later!"
            )
          );
          $("#successInquery > .alert-danger").append("</div>");
          //clear all fields
          $("#inqueryForm").trigger("reset");
        },
        complete: function() {
          setTimeout(function() {
            $this.prop("disabled", false); // Re-enable submit button when AJAX call is complete
          }, 1000);
        }
      });
    },
    filter: function() {
      return $(this).is(":visible");
    }
  });

  $('a[data-toggle="tab"]').click(function(e) {
    e.preventDefault();
    $(this).tab("show");
  });
});

/*When clicking on Full hide fail/success boxes */
$("#name").focus(function() {
  $("#successInquery").html("");
});
