//nav bar
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }

var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("profile prof-text");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2500);    
}



//Movement Animation to happen
const frameOne = document.querySelector(".frame-one");
const frameTwo = document.querySelector(".frame-two");
const show = document.querySelector(".show-photos");


//Moving Animation Event 1
show.addEventListener("mousemove", (e) => {
    let xAxis = (window.innerWidth / 2 - e.pageX) / 15;
    let yAxis = (window.innerHeight / 2 - e.pageY) / 15;
    frameOne.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
    frameTwo.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
});

//Animate In 1
show.addEventListener("mouseenter", (e) => {
    frameOne.style.transition = "none";
    frameTwo.style.transition = "none";
    
    
});

//Animate Out
show.addEventListener("mouseleave", (e) => {
    frameOne.style.transition = "all 0.5s ease";
    frameOne.style.transform = `rotateY(0deg) rotateX(0deg)`;
    frameTwo.style.transition = "all 0.5s ease";
    frameTwo.style.transform = `rotateY(0deg) rotateX(0deg)`;
    
});