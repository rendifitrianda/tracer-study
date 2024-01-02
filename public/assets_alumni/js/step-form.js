var currentStep = 1;

$(".next-step").click(function () {
    var $step = $(".step[data-step='" + currentStep + "']");
    var $nextStep = $(".step[data-step='" + (currentStep + 1) + "']");

    // Perform validation if needed
    if (currentStep === 1 && !validateStep1()) {
        // Return or show error message
        return;
    }

    $step.hide();
    $nextStep.show();
    currentStep++;
});

$(".prev-step").click(function () {
    var $step = $(".step[data-step='" + currentStep + "']");
    var $prevStep = $(".step[data-step='" + (currentStep - 1) + "']");

    $step.hide();
    $prevStep.show();
    currentStep--;
});

function validateStep1() {
    // Example validation for Step 1
    var inputStep1Value = $("#inputStep1").val();
    if (!inputStep1Value) {
        alert("Field 1 is required");
        return false;
    }
    return true;
}

// Handle form submission
$("#formStep").submit(function (e) {
    e.preventDefault();
    alert("Form submitted successfully!");
    // You can perform additional actions here, such as AJAX submission
});