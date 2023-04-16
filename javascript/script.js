$(function () {
	$('input[type="number"]').niceNumber();
});

AOS.init({
	once: true,
	delay: 150,
});

// =============================== składniki
setTimeout(() => {
	let plus = document.getElementsByClassName("plus");
	if (plus != null) {
		let nr = document.getElementsByClassName("nr");
		let price = document.querySelector("#price");
		let ingredientButtons = document.querySelectorAll(".pizza-ingredient button");
		let defaultPrice = 20;
		let fullCost = defaultPrice;

		ingredientButtons.forEach((e) => {
			let buttonClass = e.classList[0];
			e.addEventListener("click", () => {
				for (let l = 0; l < nr.length; l++) {
					let cost = parseFloat(document.querySelectorAll(".product .mt-2")[l].textContent.split(":")[1].split("zł")[0]);
					let quantity = Number(document.querySelectorAll(".nr")[l].value);
					fullCost += cost * quantity;
				}
				setTimeout(() => {
					if (buttonClass == "plus") price.classList.add("text_green");
					if (buttonClass == "minus") price.classList.add("text_red");
					price.classList.remove("text_white");
					price.innerHTML = fullCost + "zł";
					fullCost = defaultPrice;
					setTimeout(() => {
						price.classList.add("text_white");
						if (buttonClass == "plus") price.classList.remove("text_green");
						if (buttonClass == "minus") price.classList.remove("text_red");
					}, "500");
				}, "100");
			});
		});

		let cardColors = ["#4f8f5b;", "#CE5E31"];
		document.querySelectorAll(".pizza-description").forEach((e, i) => {
			let c = i % 2 == 0 ? 1 : 0;
			e.style = `background-color: ${cardColors[c]}`;
			if (i == 3) cardColors = [cardColors[1], cardColors[0]];
		});

		document.querySelectorAll(".pizza-ingredient").forEach((e, i) => {
			let c = i % 2 == 0 ? 1 : 0;
			e.style = `background-color: ${cardColors[c]}`;
		});

		let basePrices = [];
		document.querySelectorAll(".pizza-description").forEach((e, i) => {
			let price = e.querySelector(".pizza-price");
			basePrices.push(Number(price.textContent.split(" ")[0]));
			let currentPrice = basePrices[i];
			e.querySelectorAll("input[type=radio]").forEach((b) => {
				b.addEventListener("click", () => {
					if (b.value == "30cm") price.textContent = `${(currentPrice * 0.8).toFixed(2)} zł`;
					if (b.value == "45cm") price.textContent = `${(currentPrice * 1.0).toFixed(2)} zł`;
					if (b.value == "60cm") price.textContent = `${(currentPrice * 1.2).toFixed(2)} zł`;
				});
			});
		});
	}
}, 200);

// =============================== składniki

// =============================== rejestracja
let register = document.querySelector("#res");
if (register != null) {
	let login = document.querySelector("#log");
	let form1 = document.querySelector("#form1");
	let form2 = document.querySelector("#form2");

	register.addEventListener("click", () => {
		form1.classList.add("d-none");
		form1.classList.remove("d-block");
		form2.classList.add("d-block");
		form2.classList.remove("d-none");
	});
	login.addEventListener("click", () => {
		form1.classList.add("d-block");
		form1.classList.remove("d-none");
		form2.classList.add("d-none");
		form2.classList.remove("d-block");
	});
	let loginbutton = document.getElementsByClassName("button-style2");
	for (let n = 0; loginbutton.length > n; n++) {
		loginbutton[n].addEventListener("click", () => {
			form1.classList.add("d-block");
			form1.classList.remove("d-none");
			form2.classList.add("d-none");
			form2.classList.remove("d-block");
		});
	}
}
// =============================== rejestracja

// =============================== kalendarz
const daysTag = document.querySelector(".days");
if (daysTag != null) {
	const currentDate = document.querySelector(".current-date");
	const prevNextIcon = document.querySelectorAll(".icons span");

	let currYear = new Date().getFullYear();
	let currMonth = new Date().getMonth();

	const months = [
		"January",
		"February",
		"March",
		"April",
		"May",
		"June",
		"July",
		"August",
		"September",
		"October",
		"November",
		"December",
	];

	const renderCalendar = () => {
		const date = new Date(currYear, currMonth, 1);
		let firstDayofMonth = date.getDay();
		let lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate();
		let lastDayofMonth = new Date(
			currYear,
			currMonth,
			lastDateofMonth
		).getDay();
		let lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate();

		let liTag = "";

		for (let i = firstDayofMonth; i > 0; i--) {
			liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
		}

		for (let i = 1; i <= lastDateofMonth; i++) {
			let isToday =
				i === new Date().getDate() &&
					currMonth === new Date().getMonth() &&
					currYear === new Date().getFullYear()
					? "active"
					: "";
			liTag += `<li class="${isToday}">${i}</li>`;
		}

		for (let i = lastDayofMonth; i < 6; i++) {
			liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`;
		}

		currentDate.innerText = `${months[currMonth]} ${currYear}`;
		daysTag.innerHTML = liTag;
	};

	renderCalendar();

	prevNextIcon.forEach((icon) => {
		icon.addEventListener("click", () => {
			currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

			if (currMonth < 0 || currMonth > 11) {
				currYear = icon.id === "prev" ? currYear - 1 : currYear + 1;
				currMonth = currMonth < 0 ? 11 : 0;
			}

			renderCalendar();
		});
	});
}
// =============================== kalendarz
