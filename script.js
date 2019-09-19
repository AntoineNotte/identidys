let first = document.getElementById('section1');
let firstinfo = document.getElementById('infosection');

let second = document.getElementById('section2');
let secondinfo = document.getElementById('infosection2');

let three = document.getElementsByClassName('section3');
let threeinfo = document.getElementById('infosection3');

let for = document.getElementsByClassName('section4');
let forsection = document.getElementById('infosection4');

let five = document.getElementsByClassName('section5');
let fivesection = document.getElementById('infosection5');

document.getElementById("btn1next").addEventListener("click",() => {
first.classList.add('animation');
firstinfo.classList.add('animation');
});

// Sphere 2

// Faire venir Sphere 3
document.getElementById("btn2after").addEventListener("click",() => {
first.classList.add('animation2');
firstinfo.classList.add('animation2');
});
// Faire revenir Sphere 1
document.getElementById("btn2next").addEventListener("click",() => {
first.classList.add('animation');
firstinfo.classList.add('animation');
});

// Sphere 3

// Faire venir Sphere 4
document.getElementById("btn3after").addEventListener("click",() => {
first.classList.add('animation2');
firstinfo.classList.add('animation2');
});
// Faire revenir Sphere 2
document.getElementById("btn3next").addEventListener("click",() => {
first.classList.add('animation');
firstinfo.classList.add('animation');
});

// Sphere 4

// Faire venir Sphere 5
document.getElementById("btn4after").addEventListener("click",() => {
first.classList.add('animation2');
firstinfo.classList.add('animation2');
});
// Faire revenir Sphere 3
document.getElementById("btn4next").addEventListener("click",() => {
first.classList.add('animation');
firstinfo.classList.add('animation');
});

// Sphere 5

// Valider et finaliser
document.getElementById("btn5after").addEventListener("click",() => {
first.classList.add('animation2');
firstinfo.classList.add('animation2');
});

// Faire revenir Sphere 3
document.getElementById("btn5next").addEventListener("click",() => {
first.classList.add('animation');
firstinfo.classList.add('animation');
});