
const nombre=document.getElementById("nombre");
const p_apellido=document.getElementById("p_apellido");
const s_apellido=document.getElementById("s_apellido");
const nacimiento=document.getElementById("nacimiento");
const email=document.getElementById("email");
const password1=document.getElementById("password1");
const password2=document.getElementById("password2");
const roll=2;
const form=document.getElementById("form");
const parrafo=document.getElementById("alerta");

form.addEventListener("submit",e=>{
    e.preventDefault();
    let adv="";
    let mail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    let ent = true;

    const data=new FormData();
    data.append("nombre",nombre.value);
    data.append("p_apellido",p_apellido.value);
    data.append("s_apellido",s_apellido.value);
    data.append("nacimiento",nacimiento.value);
    data.append("email",email.value);
    data.append("password1",password1.value);
    data.append("roll",roll);
    axios({
        method: "POST",
        url: "/api/v1/user/register.php",
        data,
        headers: {
            "Content-Type": "multipart/form-data",
        },
    }).then((response)=>{
        if (response.status === 200) {
            if(roll==1){
                location.href = "/views/vistaAdmin.php";
            }
            if(roll==2){
                location.href = "/views/vistaUsuario.php";
            }
        }else {
            alert(response.data.message);
        }
    }).catch((error)=>{
        console.log(error.response);
        if(error.response){
            alert(error.response.data.message);
        }
    });
})