function go(){
    
    if(document.form.psw.value=='contraseña' && document.form.uname.value=='usuario'){
        alert("Usuario y contraseña válidos");
        window.location='<?php echo base_url(); ?>Controller/Citas';
    }else{
        alert("Por favor, ingrese un usuario y contraseña");
        window.location='<?php echo base_url(); ?>Controller/Login';
    }
}
