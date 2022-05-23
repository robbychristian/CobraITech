import swal from "sweetalert";

let hasPublisher = false;
let hasTitle = false;
let hasBody = false;
let hasImg = false;

$("#publisher").on("change", function () {
    if ($("#publisher").val() == "") {
        hasPublisher = false;
    } else {
        hasPublisher = true;
    }
});
$("#title").on("change", function () {
    if ($("#title").val() == "") {
        hasTitle = false;
    } else {
        hasTitle = true;
    }
});
$("#body").on("change", function () {
    if ($("#body").val() == "") {
        hasBody = false;
    } else {
        hasBody = true;
    }
});

$("#img_heading").on("change", function () {
    if ($("#img_heading").val() == "") {
        hasImg = false;
        console.log("false");
    } else {
        hasImg = true;
        console.log(true);
    }
});
$("#addUpdateButton").on("click", function () {
    if (!hasBody || !hasPublisher || !hasTitle || !hasImg) {
        swal({
            icon: "error",
            title: "Error!",
            text: "Some fields are empty! Please fill in the form correctly.",
            buttons: false,
        });
    } else {
        swal({
            icon: "warning",
            title: "Are you sure you want to publish this?",
            text: "This blog will be posted in the website for users to view.",
            buttons: {
                cancel: "Cancel",
                true: "OK",
            },
        }).then((response) => {
            if (response === "true") {
                swal({
                    icon: "success",
                    title: "Posted!",
                    text: "The blog has been posted in the website!",
                    buttons: false,
                }).then((response) => {
                    $("#addUpdateForm").submit();
                });
            }
        });
    }
});
