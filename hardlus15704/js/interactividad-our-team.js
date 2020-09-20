const seccion = document.getElementById("bios");
const arregloBios = seccion.getElementsByClassName("contenedor");
let temp = true;
for (const elemento of arregloBios) {
  if(temp){
    elemento.classList.remove("fondo-gris");
    elemento.classList.add("fondo-blanco");
  }
  temp = !temp;
}