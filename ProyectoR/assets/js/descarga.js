document.addEventListener("DOMContentLoaded", () =>{
    const $boton = document.querySelector("#crear");
    $boton.addEventListener("click", () =>{
        const $elementoParaConvertir = document.body;
        html2pdf()
            .set({
                margin: 1,
                filename
            })
    });
});