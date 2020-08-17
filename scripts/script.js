//initial age check - precision issues for some birthdays
function GetAge(DoB) {
    var today = new Date();
    var age = today.getFullYear() - DoB.getFullYear();
    var months = today.getMonth() - DoB.getMonth();
    if (months < 0 || (months === 0 && today.getDate() < DoB.getDate())) {
        age--;
    }
    return age;
}

function Validate_Days() {
    if ($("#day").val() < 1) {
        $("#dob-selector").html("Date of Birth - Please enter valid Day");
        $("#register").addClass("disabled");
        $("#dob-selector").addClass("age-restrict");
    } else if ($("#day").val() > 31) {
        $("#dob-selector").html("Date of Birth - Please enter valid Day");
        $("#register").addClass("disabled");
        $("#dob-selector").addClass("age-restrict");
    } else {
        $("#age-restrict").removeClass("message-banner-show");
        $("#age-restrict").addClass("message-banner-hide");
        $("#dob-selector").removeClass("age-restrict");
        $("#dob-selector").html("Date of Birth");
        $("#register").removeClass("disabled");
    }
}

function Validate_Dob() {
    var userYear = $("#year").val();
    var userDay = $("#day").val();
    var userMonth = $("#month").val() - 1;

    if (userYear.length !== 4) {
        $("#dob-selector").html(
            " Date of Birth - Please input year in YYYY format"
        );
        $("#register").addClass("disabled");
        $("#dob-selector").addClass("age-restrict");
    } else if (userYear < 1930) {
        $("#dob-selector").html(
            "Date of Birth - Please enter actual birth year as YYYY"
        );
        $("#register").addClass("disabled");
        $("#dob-selector").addClass("age-restrict");
    } else {
        var dob = new Date(userYear, userMonth, userDay);
        var age = GetAge(dob);
        console.log(dob);
        console.log(age);
        if (age <= 18) {
            console.log("under");
            $("#age-restrict").removeClass("message-banner-hide");
            $("#age-restrict").addClass("message-banner-show");
            $("#register").addClass("disabled");
        } else {
            $("#age-restrict").removeClass("message-banner-show");
            $("#age-restrict").addClass("message-banner-hide");
            $("#dob-selector").removeClass("age-restrict");
            $("#dob-selector").html("Date of Birth");
            $("#register").removeClass("disabled");
        }
    }
}

$(document).ready(function() {
    $(".sidenav").sidenav();

    //formSelector
    $("select").formSelect();

    $("#day").keyup(function() {
        Validate_Days();
    });

    $("#year").keyup(function() {
        Validate_Dob();
    });

    //initialises modal for signup page
    $(".modal").modal();

    //delays the showing of the modal, if registration is successful shows modal, if not it doesnt get a chance to show
    $("#register").click(function() {
        // $(".modal").modal("open").fadeIn(2000);
        setTimeout(function() {
            $(".modal").modal("open");
        }, 1000);
    });

    //carousel initialise settings for account shop
    $(".carousel").carousel({
        numVisible: 8,
        noWrap: false,
        duration: 150,
        padding: 10,
        fullWidth: true,
    });

    $(".show-shop").click(function() {
        $("#shop-section").hide();
        $("#shop-section").slideToggle("slow");
        //toggle shop
    });

    //shop selectors
    $(".morrison").click(function() {
        $("#shop-heading").html("What would you like from Morrisons?");
        $("#shop-id").attr("src", "images/Logos/Morrisons-Logo-final.png");
    });

    $(".tesco").click(function() {
        $("#shop-heading").html("What would you like from Tesco?");
        $("#shop-id").attr("src", "images/Logos/Tesco_logo_logotype-final.png");
    });

    $(".wilko").click(function() {
        $("#shop-heading").html("What would you like from Wilko?");
        $("#shop-id").attr("src", "images/Logos/wilko-vector-logo-final.png");
    });

    $(".asda").click(function() {
        $("#shop-heading").html("What would you like from ASDA?");
        $("#shop-id").attr("src", "images/Logos/ASDA-Log-final.png");
    });

    $(".boots").click(function() {
        $("#shop-heading").html("What would you like from Boots?");
        $("#shop-id").attr("src", "images/Logos/Boots_logo-final.png");
    });

    $(".co-op").click(function() {
        $("#shop-heading").html("What would you like from Co-Op?");
        $("#shop-id").attr("src", "images/Logos/Co_op-final.png");
    });

    $(".game").click(function() {
        $("#shop-heading").html("What would you like from GAME?");
        $("#shop-id").attr("src", "images/Logos/game_logo-final.png");
    });

    $(".mands").click(function() {
        $("#shop-heading").html("What would you like from M&S?");
        $("#shop-id").attr("src", "images/Logos/mands_logo-final.png");
    });
});