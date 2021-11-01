let submit = document.getElementById("venta-submit")
submit.onclick = (e) => {
    e.preventDefault()
    let total = document.getElementById("total")
    let descuento = document.getElementById("categoria")
    let cantidad = document.getElementById("cantidad")
    let total_descuento = 200 * cantidad.value
    if (descuento.value == "estudiante"){
        total_descuento -= total_descuento * .8
    } else if(descuento.value == "trainee"){
        total_descuento -= total_descuento * .5
    } else if(descuento.value == "junior"){
        total_descuento -= total_descuento * .15
    }
    if(total_descuento < 0 || isNaN(total_descuento)){
        total.innerText = "ingrese una cantidad válida"
    } else{
        total.innerText = "Total a pagar: $" + total_descuento
    }
    let requeridos = document.querySelectorAll("#venta input")
    requeridos.forEach(input =>{
        if (input.value == ""){
            console.log(input.value)
            total.innerText = "Complete todos los datos por favor"
        }
    })
}