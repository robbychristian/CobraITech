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

let validEmailSupport = false;
let validNameSupport = false;
let validMessageSupport = false;

$("#emailSupport").on("change", function () {
    if (
        $("#emailSupport").val().indexOf("@gmail.com") === -1 &&
        $("#emailSupport").val().indexOf("@yahoo.com") === -1 &&
        $("#emailSupport").val().indexOf("@ymail.com") === -1
    ) {
        validEmailSupport = false;
        $("#emailSupport").addClass("is-invalid");
        $("#emailSupport").removeClass("is-valid");
    } else {
        validEmailSupport = true;
        $("#emailSupport").removeClass("is-invalid");
        $("#emailSupport").addClass("is-valid");
    }
});

$("#nameSupport").on("change", function () {
    if ($("#nameSupport").val() == "") {
        validNameSupport = false;
        $("#nameSupport").addClass("is-invalid");
        $("#nameSupport").removeClass("is-valid");
    } else {
        validNameSupport = true;
        $("#nameSupport").removeClass("is-invalid");
        $("#nameSupport").addClass("is-valid");
    }
});
$("#messageSupport").on("change", function () {
    if ($("#messageSupport").val() == "") {
        validMessageSupport = false;
        $("#messageSupport").addClass("is-invalid");
        $("#messageSupport").removeClass("is-valid");
    } else {
        validMessageSupport = true;
        $("#messageSupport").removeClass("is-invalid");
        $("#messageSupport").addClass("is-valid");
    }
});

$("#submitQuery").on("click", function () {
    if (!validNameSupport || !validEmailSupport || !validMessageSupport) {
        swal({
            icon: "error",
            title: "Field Errors!",
            text: "Some field(s) are not filled properly! Please check your form!",
        });
    } else {
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
    }
});

//
let validMessageReply = false;

// $("#messageReply").on("change", function () {
//     if ("#messageReply".val() == "") {
//         validMessageReply = false;
//         $("#messageReply").addClass("is-invalid");
//         $("#messageReply").removeClass("is-valid");
//     } else {
//         validMessageReply = true;
//         $("#messageReply").removeClass("is-invalid");
//         $("#messageReply").addClass("is-valid");
//     }
// });
$("#submitreply").on("click", function () {
    // if (!validMessageReply) {
    //     swal({
    //         icon: "error",
    //         title: "Field Errors!",
    //         text: "Some field(s) are not filled properly! Please check your form!",
    //     });
    // } else {
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
                $("#replytoform").submit();
            });
        }
    });
    // }
});

$("#addAdminButton").on("click", function () {
    swal({
        icon: "warning",
        title: "Warning!",
        text: "Are you sure you want to add another admin?",
        buttons: {
            cancel: "Cancel",
            true: "OK",
        },
    }).then((response) => {
        if (response === "true") {
            swal({
                icon: "success",
                title: "Admin Added!",
                text: "The user has now been added as an admin!",
                buttons: false,
            }).then((response) => {
                $("#addAdminForm").submit();
            });
        }
    });
});
