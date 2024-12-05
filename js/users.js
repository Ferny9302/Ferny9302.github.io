document.getElementById("btnSave").onclick =(evt)=>{
    evt.preventDefault()//evita recargar el form
    document.getElementById("form").classList.add('was-validated')

    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 2500,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.onmouseenter = Swal.stopTimer;
          toast.onmouseleave = Swal.resumeTimer;
        }
      });
      Toast.fire({
        icon: "success",
        title: "Datos guardados"
      });

}
var botones=document.getElementsByClassName("btnEdit")
for(var i=0;i<botones.length;i++){
botones[i].onclick=(evt)=>{
    var btn = evt.target
    var email = btn.getAttribute("data-email")
    var nombre = btn.getAttribute("data-nombre")
    var apellido = btn.getAttribute("data-apellido")
    var id = btn.getAttribute("data-id")
    document.getElementById("txtEmailEdit").value = email
    document.getElementById("txtNombreEdit").value = nombre
    document.getElementById("txtApEdit").value = apellido
    document.getElementById("txtIdEdit").value = id
  }
}