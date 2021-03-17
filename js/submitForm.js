const form = document.getElementsByTagName("form");

const actualForm = form[0];

actualForm.addEventListener("submit", handleSubmit);

function handleSubmit(event) {
  event.preventDefault();

  const isValid = validateForm();
  if (!isValid) {
    $("#result").css("color", "red");
    return;
  }

  const { target } = event;

  var formData = {
    name: target.name.value,
    subject: target.subject.value,
    email: target.email.value,
    country: target.country.value,
    message: target.message.value,
  };

  $("#submit").css("opacity", "0.2");
  $("#result").css("color", "white");
  $("#result").text("Please Wait...");

  $.ajax({
    type: "POST",
    url: "/base.php",
    data: formData,
    encode: true,
  })
    .done(function (data) {
      console.log(data);
      $("#subject").val(" ");
      $("#message").val(" ");
      $("#result").css("color", "green");
      $("#result").text("Email Sent Successfully");
      // Get A Quote Submit Form Event
      try {
        const fbGetAQuote = fbPixelEventsData.getAQuoteSubmit;
        const gtmGetAQuote = gtmEventsData.getAQuoteSubmit;
        fbq(fbGetAQuote.trackEvent, fbGetAQuote.eventName, fbGetAQuote.params);
        gtmDataLayer.push(gtmGetAQuote);
      } catch (error) {
        console.log("Tracking Failed", error);
      }
    })
    .fail(function (error) {
      console.log("fail email", error);

      $("#result").css("color", "red");
      $("#result").text("Something Went Wrong");
    })
    .always(function () {
      $("#submit").css("opacity", "1");
    });
}

function validateEmail(email) {
  var re = /[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/;
  return re.test(email);
}

function validateForm() {
  $("#result").text("");
  $("#result").css("font-size", "13px");
  $("#result").css("font-style", "italic  ");
  $("#result").css("font-weight", "600");
  $("#result").css("color", "white");

  var country = $("#country").val();
  if (country == "default") {
    $("#result").text("NO COUNTRY SELECTED");
    return false;
  }
  var textbox = document.getElementById("message");
  if (textbox.value.length <= 15) {
    $("#result").text("MESSAGE IS TOO SHORT");
    return false;
  }
  var email = $("#email").val();
  if (validateEmail(email) == false) {
    $("#result").text(" THE " + email + " IS NOT VALID ");
    return false;
  }

  return true;
}
