


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
  
    let guziki = document.getElementsByClassName("guziki")
    let local = document.getElementsByClassName("local-info")

    // -----------------------------------------------
    guziki[0].addEventListener("click",()=>{
        guziki[0].classList.add("active2")
        guziki[0].classList.remove("fw-lighter")
        guziki[1].classList.remove("active2")
        guziki[1].classList.add("fw-lighter")
        guziki[2].classList.remove("active2")
        guziki[2].classList.add("fw-lighter")
        guziki[3].classList.remove("active2")
        guziki[3].classList.add("fw-lighter")
        // =======================
        local[0].classList.add('d-flex')
        local[1].classList.add('d-none')
        local[2].classList.add('d-none')
        local[3].classList.add('d-none')
        // +++++++
        local[0].classList.remove('d-none')
        local[1].classList.remove('d-flex')
        local[2].classList.remove('d-flex')
        local[3].classList.remove('d-flex')
    })
    guziki[1].addEventListener("click",()=>{
        guziki[1].classList.add("active2")
        guziki[1].classList.remove("fw-lighter")
        guziki[0].classList.remove("active2")
        guziki[0].classList.add("fw-lighter")
        guziki[2].classList.remove("active2")
        guziki[2].classList.add("fw-lighter")
        guziki[3].classList.remove("active2")
        guziki[3].classList.add("fw-lighter")
        // =======================
        local[0].classList.add('d-none')
        local[1].classList.add('d-flex')
        local[2].classList.add('d-none')
        local[3].classList.add('d-none')
        //++++++
        local[0].classList.remove('d-flex')
        local[1].classList.remove('d-none')
        local[2].classList.remove('d-flex')
        local[3].classList.remove('d-flex')
    })
    guziki[2].addEventListener("click",()=>{
        guziki[2].classList.add("active2")
        guziki[2].classList.remove("fw-lighter")
        guziki[0].classList.remove("active2")
        guziki[0].classList.add("fw-lighter")
        guziki[1].classList.remove("active2")
        guziki[1].classList.add("fw-lighter")
        guziki[3].classList.remove("active2")
        guziki[3].classList.add("fw-lighter")
        // =======================
        local[0].classList.add('d-none')
        local[1].classList.add('d-none')
        local[2].classList.add('d-flex')
        local[3].classList.add('d-none')
        //++
        local[0].classList.remove('d-flex')
        local[1].classList.remove('d-flex')
        local[2].classList.remove('d-none')
        local[3].classList.remove('d-flex')
    })
    guziki[3].addEventListener("click",()=>{
        guziki[3].classList.add("active2")
        guziki[3].classList.remove("fw-lighter")
        guziki[0].classList.remove("active2")
        guziki[0].classList.add("fw-lighter")
        guziki[2].classList.remove("active2")
        guziki[2].classList.add("fw-lighter")
        guziki[1].classList.remove("active2")
        guziki[1].classList.add("fw-lighter")
        // =======================
        local[0].classList.add('d-none')
        local[1].classList.add('d-none')
        local[2].classList.add('d-none')
        local[3].classList.add('d-flex')
        //++++
        local[0].classList.remove('d-flex')
        local[1].classList.remove('d-flex')
        local[2].classList.remove('d-flex')
        local[3].classList.remove('d-none')
    })



    
}, "500");