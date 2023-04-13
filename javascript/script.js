$(function(){
    $('input[type="number"]').niceNumber();
});

AOS.init({
    once: true,
    delay:150
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
        let pizzadescription = document.getElementsByClassName("pizza-description")
        for(let n = 1; pizzadescription.length > n; n+=2){
            pizzadescription[n].style = "background-color: #4f8f5b;"
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

 
        


  }, 500);

// =============================== kalendarz
  const daysTag = document.querySelector(".days");
const currentDate = document.querySelector(".current-date");
const prevNextIcon = document.querySelectorAll(".icons span");

let currYear = new Date().getFullYear();
let currMonth = new Date().getMonth();

const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

const renderCalendar = () => {
    const date = new Date(currYear, currMonth, 1);
    let firstDayofMonth = date.getDay();
    let lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate();
    let lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay();
    let lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate();

    let liTag = "";

    for (let i = firstDayofMonth; i > 0; i--) {
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
    }

    for (let i = 1; i <= lastDateofMonth; i++) {
        let isToday = i === new Date().getDate() && currMonth === new Date().getMonth() && currYear === new Date().getFullYear() ? "active" : "";
        liTag += `<li class="${isToday}">${i}</li>`;
    }

    for (let i = lastDayofMonth; i < 6; i++) {
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`
    }

    currentDate.innerText = `${months[currMonth]} ${currYear}`;
    daysTag.innerHTML = liTag;
};

renderCalendar();

prevNextIcon.forEach(icon => {
    icon.addEventListener("click", () => {
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

        if (currMonth < 0 || currMonth > 11) {
            currYear = icon.id === "prev" ? currYear - 1 : currYear + 1;
            currMonth = currMonth < 0 ? 11 : 0;
        }

        renderCalendar();
    });
});

// =============================== kalendarz