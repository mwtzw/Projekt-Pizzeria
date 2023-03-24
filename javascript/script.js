$(function(){
    $('input[type="number"]').niceNumber();
});
 // do ogarniecia JS aby cena się zmieniała zgodnei z cennikiem tyle ile produktów się doda to taka cena 
let plus = document.getElementsByClassName("plus")
let minus = document.getElementsByClassName("minus")
let nr = document.getElementsByName("nr")
let price = document.querySelector("#price")
let wynik = 20
let product_price = 0
setTimeout(() => {

        for(let i=0; i<4;i++){
            plus[i].addEventListener("click",()=>{
                if(i==0){
                    product_price = parseInt(nr[i].value) * 2
                    wynik += product_price
                }
                if(i==1){
                    product_price = parseInt(nr[i].value) * 5
                    wynik += product_price
                }
                if(i==2){
                    product_price = parseInt(nr[i].value) * 1
                    wynik += product_price
                }
                if(i==3){
                    product_price = parseInt(nr[i].value) * 4
                    wynik += product_price
                }
                if(i==4){
                    product_price = parseInt(nr[i].value) * 3
                    wynik += product_price
                }
                price.innerHTML = product_price +"zł"  
            })
            minus[i].addEventListener("click",()=>{
                if(i==0){
                    wynik -= 2
                    price.innerHTML = wynik +"zł"  
                }
                if(i==1){
                    product_price = parseInt(nr[i].value) * 5
                    wynik -= 5
                    price.innerHTML = wynik +"zł"  
                }
                if(i==2){
                    product_price = parseInt(nr[i].value) * 1
                    wynik -= 1
                    price.innerHTML = wynik +"zł"  
                }
                if(i==3){
                    product_price = parseInt(nr[i].value) * 4
                    wynik -= 4
                    price.innerHTML = wynik +"zł"  
                }
                if(i==4){
                    product_price = parseInt(nr[i].value) * 3
                    wynik -= 3
                    price.innerHTML = wynik +"zł"  
                }
            }) 
        }

  }, "500");

