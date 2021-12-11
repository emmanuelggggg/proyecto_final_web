const email=document.getElementById("email");
const pass=document.getElementById("password");
const form=document.getElementById("form");
const parrafo=document.getElementById("alerta");

form.addEventListener("submit",e=>{
    e.preventDefault();
    let adv="";
    let mail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    let ent = true;

    const data=new FormData();
    data.append("email",email.value);
    data.append("password",pass.value);

    if(!mail.test(email.value)){
        adv+="El formarto del correo es incorrecto <br>";
        ent = false;
    }
    if(ent){
        axios({
            method: "POST",
            url: "/api/v1/user/login.php",
            data,
            headers: {
                "Content-Type": "multipart/form-data",
            },
        }).then((response)=>{
            if (response.status === 200) {
                if(response.data.roll==1){
                    location.href = "/views/vistaAdmin.php";
                }
                if(response.data.roll==2){
                    location.href = "/views/vistaUsuario.php";
                }
            }else {
                alert(response.data.message);
            }
        }).catch((error)=>{
            if(error.response){
                alert(error.response.data.message);
            }
        });
    }else{
        alert("El formato del correo es incorrecto");
    }
})