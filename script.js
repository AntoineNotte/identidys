
let logo = document.getElementById('logo');
let first = document.getElementById('section1');
let firstinfo = document.getElementById('infosection');
let second = document.getElementById('section2');
let secondinfo = document.getElementById('infosection2');
let three = document.getElementById('section3');
let threeinfo = document.getElementById('infosection3');
let four = document.getElementById('section4');
let fourinfo = document.getElementById('infosection4');
let five = document.getElementById('section5');
let fiveinfo = document.getElementById('infosection5');


// Faire venir Sphere 2
document.getElementById("btn1next").addEventListener("click",(e) => {
    e.preventDefault()
    for (let i = 0 ; i < first.classList.length ; i++) {
        if (first.classList[i] == 'animationleave') {
            first.classList.remove('animationleave');
            firstinfo.classList.remove('animationleave');
        }
        if (first.classList[i] == 'animationcomefromleft') {
            first.classList.remove('animationcomefromleft');
            firstinfo.classList.remove('animationcomefromleft');
        }
        if (second.classList[i] == 'animationcome') {
            second.classList.remove('animationcome');
            secondinfo.classList.remove('animationcome');
        }
        if (second.classList[i] == 'animationbackfromright') {
            second.classList.remove('animationbackfromright');
            secondinfo.classList.remove('animationbackfromright');
        }
    }
    first.classList.add('animationleave');
    firstinfo.classList.add('animationleave');
    second.classList.add('animationcome');
    secondinfo.classList.add('animationcome');
    logo.innerHTML= "<img class='logoheader' src='assets/logo2.png' height='400'>"
});

// Faire revenir Sphere 1
document.getElementById("btn2after").addEventListener("click",(e) => {
    e.preventDefault()
    for (let i = 0 ; i < first.classList.length ; i++) {
        second.classList.remove('animationcome');
        secondinfo.classList.remove('animationcome');

        first.classList.remove('animationleave');
        firstinfo.classList.remove('animationleave');

        first.classList.add('animationcomefromleft')
        firstinfo.classList.add('animationcomefromleft');

        second.classList.add('animationbackfromright')
        secondinfo.classList.add('animationbackfromright')

        if ( second.classList[i] == 'animationcomefromleft') {
            second.classList.remove('animationcomefromleft');
            secondinfo.classList.remove('animationcomefromleft');
        }
    }
    logo.innerHTML= "<img class='logoheader' src='assets/logo1.png' height='400'>"
});

// Faire venir Sphere 3
document.getElementById("btn2next").addEventListener("click",(e) => {
    e.preventDefault()
    for (let i = 0 ; i < first.classList.length ; i++) {
        if (second.classList[i] == 'animationleave') {
            second.classList.remove('animationleave');
            secondinfo.classList.remove('animationleave');
        }
        if (second.classList[i] == 'animationcomefromleft') {
            second.classList.remove('animationcomefromleft');
            secondinfo.classList.remove('animationcomefromleft');
        }
        if (second.classList[i] == 'animationcome') {
            second.classList.remove('animationcome');
            secondinfo.classList.remove('animationcome');
        }
        if (three.classList[i] == 'animationbackfromright') {
            three.classList.remove('animationbackfromright');
            threeinfo.classList.remove('animationbackfromright');
        }
    }
    second.classList.add('animationleave');
    secondinfo.classList.add('animationleave');
    three.classList.add('animationcome');
    threeinfo.classList.add('animationcome');
    logo.innerHTML= "<img class='logoheader' src='assets/logo3.png' height='400'>"
});


// Faire revenir Sphere 2
document.getElementById("btn3after").addEventListener("click",(e) => {
    e.preventDefault()
    for (let i = 0 ; i < first.classList.length ; i++) {
        three.classList.remove('animationcome');
        threeinfo.classList.remove('animationcome');

        second.classList.remove('animationleave');
        secondinfo.classList.remove('animationleave');

        second.classList.add('animationcomefromleft')
        secondinfo.classList.add('animationcomefromleft');

        three.classList.add('animationbackfromright')
        threeinfo.classList.add('animationbackfromright')
                if ( three.classList[i] == 'animationcomefromleft') {
            three.classList.remove('animationcomefromleft');
            threeinfo.classList.remove('animationcomefromleft');
        }
        if ( three.classList[i] == 'animationcomefromleft') {
            three.classList.remove('animationcomefromleft');
            threeinfo.classList.remove('animationcomefromleft');
        }
    }
    logo.innerHTML= "<img class='logoheader' src='assets/logo2.png' height='400'>"
});


// Faire venir Sphere 4
document.getElementById("btn3next").addEventListener("click",(e) => {
    e.preventDefault()
    for (let i = 0 ; i < first.classList.length ; i++) {
        if (three.classList[i] == 'animationleave') {
            three.classList.remove('animationleave');
            threeinfo.classList.remove('animationleave');
        }
        if (three.classList[i] == 'animationcomefromleft') {
            three.classList.remove('animationcomefromleft');
            threeinfo.classList.remove('animationcomefromleft');
        }
        if (three.classList[i] == 'animationcome') {
            three.classList.remove('animationcome');
            threeinfo.classList.remove('animationcome');
        }
        if (four.classList[i] == 'animationbackfromright') {
            four.classList.remove('animationbackfromright');
            fourinfo.classList.remove('animationbackfromright');
        }
    }
    three.classList.add('animationleave');
    threeinfo.classList.add('animationleave');
    four.classList.add('animationcome');
    fourinfo.classList.add('animationcome');
    logo.innerHTML= "<img class='logoheader' src='assets/logo4.png' height='400'>"
});


// Faire revenir Sphere 3
document.getElementById("btn4after").addEventListener("click",(e) => {
    e.preventDefault()
    for (let i = 0 ; i < first.classList.length ; i++) {
        four.classList.remove('animationcome');
        fourinfo.classList.remove('animationcome');

        three.classList.remove('animationleave');
        threeinfo.classList.remove('animationleave');

        three.classList.add('animationcomefromleft')
        threeinfo.classList.add('animationcomefromleft');

        four.classList.add('animationbackfromright')
        fourinfo.classList.add('animationbackfromright')
        if ( four.classList[i] == 'animationcomefromleft') {
            four.classList.remove('animationcomefromleft');
            fourinfo.classList.remove('animationcomefromleft');
        }
    }
    logo.innerHTML= "<img class='logoheader' src='assets/logo3.png' height='400'>"
});

// Faire venir Sphere 5
document.getElementById("btn4next").addEventListener("click",() => {
    for (let i = 0 ; i < first.classList.length ; i++) {
        if (four.classList[i] == 'animationleave') {
            four.classList.remove('animationleave');
            fourinfo.classList.remove('animationleave');
        }
        if (four.classList[i] == 'animationcomefromleft') {
            four.classList.remove('animationcomefromleft');
            fourinfo.classList.remove('animationcomefromleft');
        }
        if (four.classList[i] == 'animationcome') {
            four.classList.remove('animationcome');
            fourinfo.classList.remove('animationcome');
        }
        if (five.classList[i] == 'animationbackfromright') {
            five.classList.remove('animationbackfromright');
            fiveinfo.classList.remove('animationbackfromright');
        }
    }
    four.classList.add('animationleave');
    fourinfo.classList.add('animationleave');
    five.classList.add('animationcome');
    fiveinfo.classList.add('animationcome');
    logo.innerHTML= "<img class='logoheader' src='assets/logo5.png' height='400'>"
});


// Faire revenir Sphere 4
document.getElementById("btn5after").addEventListener("click",(e) => {
    e.preventDefault()
    for (let i = 0 ; i < first.classList.length ; i++) {
        five.classList.remove('animationcome');
        fiveinfo.classList.remove('animationcome');

        four.classList.remove('animationleave');
        fourinfo.classList.remove('animationleave');

        four.classList.add('animationcomefromleft')
        fourinfo.classList.add('animationcomefromleft');

        five.classList.add('animationbackfromright')
        fiveinfo.classList.add('animationbackfromright')
        if ( five.classList[i] == 'animationcomefromleft') {
            five.classList.remove('animationcomefromleft');
            fiveinfo.classList.remove('animationcomefromleft');
        }
    }
    logo.innerHTML= "<img class='logoheader' src='assets/logo4.png' height='400'>"
});


