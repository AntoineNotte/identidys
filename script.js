let first = document.getElementById('section1');
let firstinfo = document.getElementById('infosection')
let second = document.getElementById('section2');
/*
let three = document.getElementsByClassName('threesection');
let for = document.getElementsByClassName('forsection');
let five = document.getElementsByClassName('fivesection');
*/

document.getElementById("btn1").addEventListener("click",() => {
    first.classList.add('animation');
    firstinfo.classList.add('animation');
});