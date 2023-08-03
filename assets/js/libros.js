const input=document.getElementById("buscar");
input.addEventListener("keyup", (event) =>{
    console.log(event);
});
function ob() {
    const checkboxesname = document.querySelectorAll(".f-check");
    checkboxesname.forEach(checkbox => {
        console.log(checkbox.name);
    });
}
function clickcheckandob(element) {
    clickcheck (element);
    ob();
}
