// var button = document.getElementById("button");
// var showhide = document.getElementById("showhide");
// button.addEventListener("click", () => {
//     if(getComputedStyle(showhide).display != "none"){
//         showhide.style.display = "none";
//     } else {
//       showhide.style.display = "block";
//     }
//   })

    

var button = document.getElementById("button");
var showhide = document.getElementById("showhide");
function showhide() {
    if(getComputedStyle(showhide).display != "none"){
                showhide.style.display = "none";
            } else {
              showhide.style.display = "block";
            }
  
  
}
button.addEventListener("click",showhide);