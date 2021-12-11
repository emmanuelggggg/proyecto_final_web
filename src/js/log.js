const btn=document.getElementById('out');

btn.addEventListener("click",e=>{
    axios({
    method: "POST",
    url: "/api/v1/user/logoutt.php",
    }).then((response) => {
        if (response.status === 200) {
            location.href = "/index.php";
        } else {
            alert(response.data.message);
        }
    }).catch((error) => {
        if (error.response) {
            alert(error.response.message);
        }
    });
})
