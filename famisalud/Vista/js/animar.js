let animado = document.querrySelectorAll (".animado");

function mostrarScroll() {
    let scrollTop =document.documentElement.scrollTop;
    for (var i=0; i < animado.length;  i++) {
        let alturaAnimado = animado [i].offsetTop;
        if (alturaAnimado -200 < scrollTop) {
            animado [i] .style.opacity = 1;
            animado [i] .classList.add (mostrararriba);
         }
    }
}

window.addEventListener ('scroll', mostrararriba);