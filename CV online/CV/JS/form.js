
const nomForm = RegExp(/^[A-Za-z]+$/);
const emailForm = RegExp(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/);
const sujetForm = RegExp(/^[0-9A-Za-z\s]+$/);
const messageForm = RegExp(/^[0-9A-Za-z\s]+$/);


const button = document.getElementById("button");
button.addEventListener("click",validateForm);

function validateForm() {
    const nomFa = document.getElementById("nom").value;
    const emailFa = document.getElementById("mail").value;
    const sujetFa = document.getElementById("sujet").value;
    const messageFa = document.getElementById("message").value;
    let bool = true;


if(nomFa == ""){
    document.getElementById("nomError").innerHTML = "ce champ est vide!";
    document.getElementById("nomError").style.color = "red";
    bool = false;
}
else if(!nomForm.test(nomFa)){
    document.getElementById("nomError").innerHTML = "ce champ est incorrect!";
    document.getElementById("nomError").style.color = "red";
    bool = false;
}
else{
    document.getElementById("nomError").innerHTML = "";
}

if(emailFa == ""){
    document.getElementById("emailError").innerHTML = "ce champ est vide!";
    document.getElementById("emailError").style.color ="red";
    bool = false;
}
else if(!emailForm.test(emailFa)){
    document.getElementById("emailError").innerHTML =  "ce champ est incorrect!";
    document.getElementById("emailError").style.color = "red";
    bool = false;
}
else{
    document.getElementById("emailError").innerHTML = "";
}

if(sujetFa == ""){
    document.getElementById("sujetError").innerHTML = "ce champ est vide!";
    document.getElementById("sujetError").style.color = "red";
    bool = false; 
}
else if(!sujetForm.test(sujetFa)){
    document.getElementById("sujetError").innerHTML = "ce champ est incorrect!";
    document.getElementById("sujetError").style.color = "red";
    bool = false;
}
else{
    document.getElementById("sujetError").innerHTML = "";
}

if(messageFa == ""){
    document.getElementById("messagError").innerHTML = "ce champ est vide!";
    document.getElementById("messagError").style.color = "red";
    bool = false;
}
else if(!messageForm.test(messageFa)){
    document.getElementById("messagError").innerHTML = "ce champ est incorrect!";
    document.getElementById("messagError").style.color ="red";
    bool = false;
}
else{
    document.getElementById("messagError").innerHTML = "";
}

return bool;

};


