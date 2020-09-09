let textarea;
document.addEventListener('keypress',function(e){
console.log(e.key)
textarea = document.querySelector("#keylogger").value += e.key
})

 