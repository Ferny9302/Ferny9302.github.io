document.getElementById("btnSave").onclick =(evt)=>{
    //evt.preventDefault()//evita recargar el form
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
    var nombre = btn.getAttribute("data-nombre")
    var telefono = btn.getAttribute("data-telefono")
    var producto = btn.getAttribute("data-producto")
    var fecha = btn.getAttribute("data-fecha")
    var pago = btn.getAttribute("data-pago")
    var id = btn.getAttribute("data-id")
    document.getElementById("txtProvEdit").value = nombre
    document.getElementById("txtTelefonoEdit").value = telefono
    document.getElementById("txtProductEdit").value = producto
    document.getElementById("txtDateEdit").value = fecha
    document.getElementById("txtPagoEdit").value = pago
    document.getElementById("txtIdEdit").value = id
  }
}