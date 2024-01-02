function abrirDropdown(){
    setTimeout(dropdown, 500);
}

function dropdown(){
    let dropdown_menu = document.getElementById("dropdown_m");
    dropdown_menu.click();
}

function scrollToClass(){
    const SCROLL = document.querySelector(".area_titulo");
    if (SCROLL){
        SCROLL.scrollIntoView();
    }
    
}

function alterar(){

    if(aberto == false){
        img_menu.setAttribute("src", "public/imagens/fechar.svg");
        aberto = true;
    }

    else{
        img_menu.setAttribute("src", "public/imagens/menu.svg");
        aberto = false;
        
    }
}

function voltarAtras(event){
    event.preventDefault;
    window.history.back();
}

function verMais(elemento){
    let pequeno = document.getElementById("pequeno");
    let grande = document.getElementById("grande");

    pequeno.remove();
    grande.classList.replace("d-none", "d-block");

    elemento.remove();
}