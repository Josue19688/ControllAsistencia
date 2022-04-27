
jQuery(function(){
    jQuery('body').on('click','#validar',function(){
        let campos=['email','password'];
        let countErrors=0;

        for(let item in campos){
            if($('#'+campos[item]).val()===""){
                countErrors++;
                $("#"+campos[item]).css("border","1px solid #dc3545");
            }else{
                $("#"+campos[item]).css("border","1px solid #d2d6de");
            }
        }

        if(countErrors>0){
            Swal.fire({
                position:"top-end",
                icon:"error",
                title:"Los campos marcados en rojo son obligatorios..",
                showConfirmButton:false,
                timer:3000
            })
        }else{
            $("form#ingresar").submit();
        }
    })
})