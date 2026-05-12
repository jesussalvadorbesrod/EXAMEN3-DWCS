
function convertir() {
    let cantidad = document.getElementById('cantidad').value;
    let moneda = document.getElementById('moneda').value;
    jaxon_convertir(cantidad, 'EUR', moneda);
}
