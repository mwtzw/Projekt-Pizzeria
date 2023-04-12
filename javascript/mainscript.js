


setTimeout(() => {
    let register = document.querySelector("#res")
    let login = document.querySelector("#log")
    let form1 = document.querySelector("#form1")
    let form2 = document.querySelector("#form2")
    
    register.addEventListener('click', ()=>{
        form1.classList.add("d-none")
        form1.classList.remove("d-block")
        form2.classList.add("d-block")
        form2.classList.remove("d-none")
    })
    login.addEventListener('click', ()=>{
        form1.classList.add("d-block")
        form1.classList.remove("d-none")
        form2.classList.add("d-none")
        form2.classList.remove("d-block")
    })
    let loginbutton = document.getElementsByClassName("button-style2")
    for(let n = 0; loginbutton.length > n; n++){
        loginbutton[n].addEventListener('click',()=>{
            form1.classList.add("d-block")
            form1.classList.remove("d-none")
            form2.classList.add("d-none")
            form2.classList.remove("d-block")
        }) 
    }
  
}, "500");