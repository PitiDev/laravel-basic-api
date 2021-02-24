//Function show and hide input radio 3
$(function () {
    $('#customRadioInline7').click(function () {
        $('.sip').attr('hidden', true);
    });
    $('#customRadioInline8').click(function () {
        $('.sip').attr('hidden', true);
    });
    $('#customRadioInline9').click(function () {
        $('.sip').attr('hidden', true);
    });
    $('#customRadioInline10').click(function () {
        $('.sip').attr('hidden', false);
    });

});


//Function show and hide input radio 6 //19
$(function () {
    $('#customRadioInline15').click(function () {
        $('.sip2').attr('hidden', true);
    });
    $('#customRadioInline16').click(function () {
        $('.sip2').attr('hidden', true);
    });
    $('#customRadioInline17').click(function () {
        $('.sip2').attr('hidden', false);
    });
});


//Function show and hide input radio 10
$(function () {
    $('#customRadioInline25').click(function () {
        $('.sip12').attr('hidden', false);
    });
    $('#customRadioInline26').click(function () {
        $('.sip12').attr('hidden', true);
    });
});




//Function show and hide input radio 11
function customRadioInline27() {
    // Get the checkbox
    var checkBox = document.getElementById("customRadioInline27");
    // Get the output text
    var text = document.getElementById("customRadioInline27-1");

    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
        text.style.display = "block";
    } else {
        text.style.display = "none";
    }
}

//Function show and hide input radio 12
function customRadioInline28() {
    // Get the checkbox
    var checkBox = document.getElementById("customRadioInline28");
    // Get the output text
    var text = document.getElementById("customRadioInline28-1");

    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
        text.style.display = "block";
    } else {
        text.style.display = "none";
    }
}

//Function show and hide input radio 13
function customRadioInline29() {
    // Get the checkbox
    var checkBox = document.getElementById("customRadioInline29");
    // Get the output text
    var text = document.getElementById("customRadioInline29-1");

    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
        text.style.display = "block";
    } else {
        text.style.display = "none";
    }
}

//Function show and hide input radio 14
function customRadioInline30() {
    // Get the checkbox
    var checkBox = document.getElementById("customRadioInline30");
    // Get the output text
    var text = document.getElementById("customRadioInline30-1");

    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
        text.style.display = "block";
    } else {
        text.style.display = "none";
    }
}

//Function show and hide input radio 15
function customRadioInline31() {
    // Get the checkbox
    var checkBox = document.getElementById("customRadioInline31");
    // Get the output text
    var text = document.getElementById("customRadioInline31-1");

    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
        text.style.display = "block";
    } else {
        text.style.display = "none";
    }
}

//Function show and hide input radio 16
function customRadioInline32() {
    // Get the checkbox
    var checkBox = document.getElementById("customRadioInline32");
    // Get the output text
    var text = document.getElementById("customRadioInline32-1");

    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
        text.style.display = "block";
    } else {
        text.style.display = "none";
    }
}


//Function show and hide input radio 17
$(function () {
    $('#customRadioInline33').click(function () {
        $('.sip9').attr('hidden', true);
    });
    $('#customRadioInline34').click(function () {
        $('.sip9').attr('hidden', true);
    });
    $('#customRadioInline35').click(function () {
        $('.sip9').attr('hidden', true);
    });
    $('#customRadioInline36').click(function () {
        $('.sip9').attr('hidden', false);
    });

});


//Function show and hide input radio 18
$(function () {
    $('#customRadioInline37').click(function () {
        $('.sip10').attr('hidden', true);
    });
    $('#customRadioInline38').click(function () {
        $('.sip10').attr('hidden', true);
    });
    $('#customRadioInline39').click(function () {
        $('.sip10').attr('hidden', true);
    });
    $('#customRadioInline40').click(function () {
        $('.sip10').attr('hidden', false);
    });

});


//Function show and hide input radio 19
$(function () {
    $('#customRadioInline41').click(function () {
        $('.sip11').attr('hidden', true);
    });
    $('#customRadioInline42').click(function () {
        $('.sip11').attr('hidden', true);
    });
    $('#customRadioInline43').click(function () {
        $('.sip11').attr('hidden', true);
    });
    $('#customRadioInline44').click(function () {
        $('.sip11').attr('hidden', false);
    });

});

function Check() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
    } 
    else {
        document.getElementById('ifYes').style.display = 'none';

   }
}