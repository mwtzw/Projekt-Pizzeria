$(function(){
    $('input[type="number"]').niceNumber();
});

AOS.init({
    once: true,
    delay:100
});

 // do ogarniecia JS aby cena się zmieniała zgodnei z cennikiem tyle ile produktów się doda to taka cena 
let plus = document.getElementsByClassName("plus")
let minus = document.getElementsByClassName("minus")
let nr = document.getElementsByClassName("nr")
let price = document.querySelector("#price")
let wynik = 20
let product_price = 0
let product_price1 = 0
let product_price2 = 0
let product_price3 = 0
let product_price4 = 0
setTimeout(() => {

        for(let i=0; i<5;i++){
            plus[i].addEventListener("click",()=>{
                if(i==0){
                    product_price = parseInt(nr[i].value) * 2
                }
                if(i==1){
                    product_price1 = parseInt(nr[i].value) * 5
                }
                if(i==2){
                    product_price2 = parseInt(nr[i].value) * 1
                }
                if(i==3){
                    product_price3 = parseInt(nr[i].value) * 4
                }
                if(i==4){
                    product_price4 = parseInt(nr[i].value) * 3
                }
                setTimeout(()=>{
                    price.classList.add("text_green")
                    price.classList.remove("text_white")
                    price.innerHTML = 20 + product_price + product_price1 + product_price2 + product_price3 + product_price4 +"zł" 
                    setTimeout(()=>{
                        price.classList.add("text_white")
                        price.classList.remove("text_green")
                
                    },"500")
                }, "100")
        
            })
            minus[i].addEventListener("click",()=>{
                if(i==0){
                    if(parseInt(nr[i].value) <= 0){
                        product_price = 0 
                    }
                    else{
                        product_price -= 2   
                    }
                }
                if(i==1){
                    if(parseInt(nr[i].value ) <= 0){
                        product_price1 = 0 
                    }
                    else{
                        product_price1 -= 5  
                    }
                }
                if(i==2){
                    if(parseInt(nr[i].value) <= 0){
                        product_price2 = 0 
                    }
                    else{
                        product_price2 -= 1  
                    }
                }
                if(i==3){
                    if(parseInt(nr[i].value) <= 0){
                        product_price3 = 0 
                    }
                    else{
                        product_price3 -= 4   
                    }
                }
                if(i==4){
                    if(parseInt(nr[i].value) <= 0){
                        product_price4 = 0 
                    }
                    else{
                        product_price4 -= 3   
                    }
                }
                setTimeout(()=>{
                    price.classList.add("text_red")
                    price.classList.remove("text_white")
                    price.innerHTML = 20 + product_price + product_price1 + product_price2 + product_price3 + product_price4 +"zł" 
                    setTimeout(()=>{
                        price.classList.add("text_white")
                        price.classList.remove("text_red")
                
                    },"500")
                }, "100")
            }) 
        }

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

        let pizzadescription = document.getElementsByClassName("pizza-description")
        for(let n = 1; pizzadescription.length > n; n+=2){
            pizzadescription[n].style = "background-color: #4f8f5b;"
        }
        


  }, "500");


