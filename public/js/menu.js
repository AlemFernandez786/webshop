window.onload = function(){
    let $boton_menu = document.querySelector(".boton-menu");
    let $bandera = 1;

    $boton_menu.onclick = function(){
        let $menu = document.querySelector(".menu");
        if ($bandera == 1) {
            $menu.style.left = 0;
            $bandera = 0;
        }else{
            $menu.style.left = "-100%";
            $bandera = 1;
        }
        console.log("hola");
        
    }
}