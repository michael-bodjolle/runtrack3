var button = document.getElementById("button");
var compteur = document.getElementById("compteur");
function addone() {
  var nbclick = compteur.innerHTML;
  nbclick++;
  compteur.innerHTML=nbclick;
  
  
}
button.addEventListener("click",addone);

    // technique2
  
    //   button.addEventListener("click", () => {
  //     var nbclick = compteur.innerHTML;
  //       nbclick++;
  //       compteur.innerHTML=nbclick;
  // })