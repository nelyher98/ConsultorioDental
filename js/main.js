function go(){
    
    if(document.form.psw.value=='contraseña' && document.form.uname.value=='usuario'){
        alert("Usuario y contraseña válidos");
        window.location='Citas.html';
    }else{
        alert("Por favor, ingrese un usuario y contraseña");
    }
}
