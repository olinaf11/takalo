var xhr;
try {  xhr = new ActiveXObject('Msxml2.XMLHTTP');   }
catch (e)
{
    try {   xhr = new ActiveXObject('Microsoft.XMLHTTP'); }
    catch (e2)
    {
        try {  xhr = new XMLHttpRequest();  }
        catch (e3) {  xhr = false;   }
    }
}

function signUp(){
    var form = document.getElementById("form-sign");
    var formData = new FormData(form);

    form.addEventListener("submit", function (event){
        event.preventDefault();
    });

    xhr.onreadystatechange = function (){
        if (xhr.readyState == 4){
            if (xhr.status == 200){
                var isSign = JSON.parse(xhr.responseText);
                if (!isSign){
                    alert("Erreur lors du sign in");
                }else {
                    window.location.href="/takalo/login";
                }
            }else {

            }
        }
    };
    xhr.open("POST", "/takalo/signUp/sign", true);
    xhr.send(formData);
}