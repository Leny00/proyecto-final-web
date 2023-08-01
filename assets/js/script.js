const menu=document.getElementById('menu');
const lista=document.getElementById('navbar-list');

menu.addEventListener('click', () =>{
    lista.classList.toggle("abierto");
})
function clickcheck(clickedCheckbox){
    const checkboxes=document.querySelectorAll('.f-check');
    checkboxes.forEach(checkbox =>{
        if(checkbox !== clickedCheckbox){
            checkbox.checked=false;
        }
    
    });
}
function filtrado() {
    const filtro = document.getElementById('filtro');
    filtro.classList.toggle('mostrar');
}