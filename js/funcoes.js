function exibir_categoria(categoria) {
    let produtos = document.getElementsByClassName('box_produto')

    for(var i = 0; i < produtos.length; i++){

        if(produtos[i].classList.contains(categoria)){
            produtos[i].style = "display:block";
        }else{
            produtos[i].style = "display:none";
        }
    }
}

let imagensProdutos = document.querySelectorAll(".box_produto img")
imagensProdutos.forEach((img)=>{
    img.addEventListener("mousemove", ()=>{
        img.style.transform = "scale(1.5)";
        img.style.zIndex = "1000";
    })
    img.addEventListener("mouseleave", ()=>{
        img.style.transform = "scale(1)";
        img.style.zIndex = "unset";
    })
})

let itensMenu = document.querySelector(".menu").querySelectorAll("a");
itensMenu.forEach(function(item){
    item.addEventListener("mousemove", function(){
        item.style.color = "#fceb71";
    })
    item.addEventListener("mouseleave", function(){
        item.style.color = "#fff";
    })

})