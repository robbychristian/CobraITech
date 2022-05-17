//  JOIN US PAGE
import swal from "sweetalert";

// FOR JOIN US
let validEmail = false;
let validName = false;
let validJob = false;
let validFile = false;
let validMessage = false;

$("#email").on("change", function () {
    if (
        $("#email").val().indexOf("@gmail.com") === -1 &&
        $("#email").val().indexOf("@yahoo.com") === -1 &&
        $("#email").val().indexOf("@ymail.com") === -1
    ) {
        validEmail = false;
        $("#email").addClass("is-invalid");
        $("#email").removeClass("is-valid");
    } else {
        validEmail = true;
        $("#email").removeClass("is-invalid");
        $("#email").addClass("is-valid");
    }
});

$("#name").on("change", function () {
    if ($("#name").val() == "") {
        validName = false;
        $("#name").addClass("is-invalid");
        $("#name").removeClass("is-valid");
    } else {
        validName = true;
        $("#name").removeClass("is-invalid");
        $("#name").addClass("is-valid");
    }
});
$("#job").on("change", function () {
    if ($("#job").val() == "") {
        validJob = false;
        $("#job").addClass("is-invalid");
        $("#job").removeClass("is-valid");
    } else {
        validJob = true;
        $("#job").removeClass("is-invalid");
        $("#job").addClass("is-valid");
    }
});
$("#message").on("change", function () {
    if ($("#message").val() == "") {
        validMessage = false;
        $("#message").addClass("is-invalid");
        $("#message").removeClass("is-valid");
    } else {
        validMessage = true;
        $("#message").removeClass("is-invalid");
        $("#message").addClass("is-valid");
    }
});
$("#curriculumVitae").on("change", function () {
    if ($("#curriculumVitae").val() == "") {
        validFile = false;
    } else {
        validFile = true;
    }
});

$("#submitApplication").on("click", function () {
    if (
        validEmail === true &&
        validName === true &&
        validJob === true &&
        validFile === true &&
        validMessage === true
    ) {
        swal({
            icon: "warning",
            title: "Are you sure you want to submit the form?",
            text: "Once you submit your form, it will be reviewed by the company",
            buttons: {
                cancel: "Cancel",
                true: "OK",
            },
        }).then((response) => {
            if (response === "true") {
                swal({
                    icon: "success",
                    title: "Application Submitted!",
                    text: "Your application will be reviewed by the company!",
                    buttons: false,
                }).then((response) => {
                    $("#applicationForm").submit();
                });
            }
        });
    } else {
        swal({
            icon: "error",
            title: "Field Errors!",
            text: "Some field(s) are not filled properly! Please check your form!",
        });
    }
});

//FOR SUPPORT
