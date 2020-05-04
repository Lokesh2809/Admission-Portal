function validate_form() {
    if (document.std.std_name.value == "") {
        alert("Please fill in the column 'Student Name' box.");
        return false;
    }
if (document.std.stdf_name.value == "") {
        alert("Please fill in the column 'Father Name' box.");
        return false;
    }
if (document.std.stdm_name.value == "") {
        alert("Please fill in the column 'Mother Name' box.");
        return false;
    }
if (document.std.std_email_id.value == "") {
        alert("Please fill in the column 'Student Email' box.");
        return false;
    }
if (document.std.father_email_id.value == "") {
        alert("Please fill in the column 'Father Email' box.");
        return false;
    }

if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test(document.std.std_email_id.value)) {
        alert("You have entered an invalid email address!");
        return (false);
    }

if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test(document.std.father_email_id.value)) {
        alert("You have entered an invalid email address!");
        return (false);
    }


var radios = document.getElementsByName("malefemale");
    var formValid = false;

    var i = 0;
    while (!formValid && i < radios.length) {
    if (radios[i].checked) formValid = true;
    i++;
    }
    if (!formValid) {
alert("Must check gender option!");
    return formValid;
}
alert("sucessfully Submitted");

}



function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode != 46 && charCode > 31 &&
        (charCode < 48 || charCode > 57)) {
        alert("Enter Number");
        return false;
    }
    return true;
}

var choices10th = ['Blossom Minds School','Triveni School','VVC School','Nava Bharath School','Oakridge School','Delhi Public School','Ocimum International School','Goutham Model School','Kendri Vidyalaya Medak','Sreenidhi International','Little Flower','ST Mark\'s Girl School'];
var choicesplusone = ['Narayana','Srichaithanya','Krishnachaithanya','KKR Gowtham'];
var choicesplustwo = ['Narayana','Srichaithanya','Krishnachaithanya','KKR Gowtham'];
var choicesdegree = ['RAO\'s','Jagans','Sathyam'];
var choicesuniversity = ['KL university','Vignan university','VITCC','IIT-M','IIT-D','IIT-B','NITW','NIT-Tirichi'];

function setOptions(matchWith){
var choices = [];
var sel = document.getElementById('list1');
var tmp = '';
sel.options.length = 0;
switch (matchWith) {
case '10th' : choices = choices10th.slice(0); break;
case '+1' : choices = choicesplusone.slice(0); break;
case '+2' : choices = choicesplustwo.slice(0); break;
case 'degree' : choices = choicesdegree.slice(0); break;
case 'university' : choices = choicesuniversity.slice(0); break;
case 'ALL' : choices = [].concat(choices10th,choicesplusone,choicesplustwo,choicesdegree,choicesuniversity); break;
}

for (i=0; i<choices.length; i++) {

tmp = choices[i];
sel.options[sel.options.length] = new Option(tmp,tmp,false,false);
}
if (document.getElementById('9thCheck').checked) {
document.getElementById('9th').style.visibility = 'visible';
document.getElementById('10th').style.visibility = 'hidden';
document.getElementById('+1').style.visibility = 'hidden';
document.getElementById('+2').style.visibility = 'hidden';
document.getElementById('degree').style.visibility = 'hidden';
}
if (document.getElementById('10Check').checked) {
document.getElementById('9th').style.visibility = 'hidden';
document.getElementById('10th').style.visibility = 'visible';
document.getElementById('+1').style.visibility = 'hidden';
document.getElementById('+2').style.visibility = 'hidden';
document.getElementById('degree').style.visibility = 'hidden';
}
if (document.getElementById('+1Check').checked) {
document.getElementById('9th').style.visibility = 'hidden';
document.getElementById('10th').style.visibility = 'hidden';
document.getElementById('+1').style.visibility = 'visible';
document.getElementById('+2').style.visibility = 'hidden';
document.getElementById('degree').style.visibility = 'hidden';
}
if (document.getElementById('+2Check').checked) {
    document.getElementById('9th').style.visibility = 'hidden';
    document.getElementById('10th').style.visibility = 'hidden';
    document.getElementById('+1').style.visibility = 'hidden';
    document.getElementById('+2').style.visibility = 'visible';
    document.getElementById('degree').style.visibility = 'hidden';
}
if (document.getElementById('degreeCheck').checked) {
document.getElementById('9th').style.visibility = 'hidden';
document.getElementById('10th').style.visibility = 'visible';
document.getElementById('+1').style.visibility = 'hidden';
document.getElementById('+2').style.visibility = 'visible';
document.getElementById('degree').style.visibility = 'hidden';
}

}

window.onload = function () { setOptions('ALL'); };



//-->
