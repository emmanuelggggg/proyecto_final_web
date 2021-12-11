const tabla=document.getElementById("reportes");
const btn=document.getElementById('actualizar');

btn.addEventListener('click',()=>{
    ejecutar();
})


const ejecutar = e=>{
    axios({
        method: "GET",
        url: "/api/v1/user/ver.php",
        headers: {
            "Content-Type": "multipart/form-data",
        },
    }).then((response)=>{
        if (response.status === 200) {
            alert('response.fecha');
        }else {
            alert('response.data.message');
        }
    }).catch((error)=>{
        if(error.response){
            alert('error.response.data.message');
        }
    });
}