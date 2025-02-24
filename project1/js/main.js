

document.getElementById("cat1").addEventListener("click",  function(){

        document.getElementById("cat1").style.visibility="hidden";
        document.getElementById("cat2").style.visibility="hidden";

        setTimeout(()=> {
        document.body.style.backgroundColor = "gray"
        }, 3000)


})