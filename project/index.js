var key = 0;
function disp(str){

    if(str == "add") {
        key = 0;
        document.getElementById('form').style.display = "block";
        document.getElementById('mis1').style.display = "none";
        document.getElementById('formis1').style.display = "none";
        document.getElementById('mis').style.display = "inline-block";
        document.getElementById('formis').style.display = "inline-block";
        document.getElementById('name').style.display = "inline-block";
        document.getElementById('forname').style.display = "inline-block";
        document.getElementById('age').style.display = "inline-block";
        document.getElementById('forage').style.display = "inline-block";
        document.getElementById('btnx').value = "Add Student";
        document.getElementsByTagName('p')[0].style.display = "none";
        document.getElementsByTagName('p')[1].style.display = "block";
        document.getElementsByTagName('p')[1].innerHTML = "Enter the student info to be added";
        document.getElementsByTagName('li')[1].className = "active";
        document.getElementsByTagName('li')[2].className = "";
        document.getElementsByTagName('li')[3].className = "";
        document.getElementsByTagName('li')[0].className = "";
        document.getElementById('form').action = "insertion.php";

    }
        
   else if(str == "mod"){
        key = 1;
        document.getElementById('form').style.display = "block";
        document.getElementById('mis1').style.display = "inline-block";
        document.getElementById('formis1').style.display = "inline-block";
        document.getElementById('mis').style.display = "inline-block";
        document.getElementById('formis').style.display = "inline-block";
        document.getElementById('name').style.display = "inline-block";
        document.getElementById('forname').style.display = "inline-block";
        document.getElementById('age').style.display = "inline-block";
        document.getElementById('forage').style.display = "inline-block";
        document.getElementById('btnx').value = "Modify Student Info";
        document.getElementsByTagName('p')[0].style.display = "block";
        document.getElementsByTagName('p')[1].innerHTML = "Enter the Modified student info";
        document.getElementsByTagName('p')[1].style.display = "block";
        document.getElementsByTagName('li')[0].className = "";
        document.getElementsByTagName('li')[1].className = "";
        document.getElementsByTagName('li')[2].className = "active";
        document.getElementsByTagName('li')[3].className = "";
        document.getElementById('form').action = "update.php";



    }
    else if(str == "del"){
        key = 2;
        document.getElementById('form').style.display = "block";
        document.getElementById('mis1').style.display = "inline-block";
        document.getElementById('formis1').style.display = "inline-block";
        document.getElementById('mis').style.display = "none";
        document.getElementById('formis').style.display = "none";
        document.getElementById('name').style.display = "none";
        document.getElementById('forname').style.display = "none";
        document.getElementById('age').style.display = "none";
        document.getElementById('forage').style.display = "none";
        document.getElementById('btnx').value = "Delete Student";
        document.getElementsByTagName('p')[0].style.display = "block";
        document.getElementsByTagName('p')[1].style.display = "none";
        document.getElementsByTagName('p')[0].innerHTML = "Enter the Mis to be deleted";
        document.getElementsByTagName('li')[1].className = "";
        document.getElementsByTagName('li')[2].className = "";
        document.getElementsByTagName('li')[3].className = "active";
        document.getElementsByTagName('li')[0].className = "";
        document.getElementById('form').action = "deletion.php";

    }
    else if(str == "home"){
        document.getElementsByTagName('li')[0].className = "active";
        document.getElementById('form').style.display = "none";
        
    }
}

    function check(){
        var letters = "/^[A-Za-z\s]+$/";
        if(key == 0) {
            if(document.getElementById('name').matches(letters) && ((document.getElementById('age').value <= 30) && (document.getElementById('age').value >= 10)) && ((document.getElementById('mis').value <= 111900000 && document.getElementById('mis').value >= 111600000))) {
                alert("Response collected successefully.(Note: The response will not be saved if the mis already exists in the database");
            }
        }


        if(key == 1) {
            if(document.getElementById('name').matches(letters) && (document.getElementById('age').value <= 30 && document.getElementById('age').value >= 10) && ((document.getElementById('mis').value <= 111900000 && document.getElementById('mis').value >= 111600000))  &&  ((document.getElementById('mis1').value <= 111900000 && document.getElementById('mis1').value >= 111600000))) {
                alert("Response collected successefully.(Note: The data will not be modified if the mis does not  exist in the database");
            }
        }
       


        if(key == 2) {
            if((document.getElementById('mis1').value <= 111900000 && document.getElementById('mis1').value >= 111600000)) {
                alert("Response collected successefully.(Note: The data will not be deleted if the mis does not exist in the database");
            }
        }





    }

