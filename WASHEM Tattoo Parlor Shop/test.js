const navbar = document.querySelector('nav');
let barsdiv=document.getElementById('icon');
let bars = document.getElementById('bars');
let pages = document.getElementById('page-wrap');
let pagesshow = document.getElementsByClassName('showup now');
let xicon = document.getElementById('xicon');
let xicondiv =document.getElementById('x');
let wrap=document.getElementById('wrap');


window.addEventListener('scroll',()=>{
    if(window.scrollY>=20){
        navbar.classList.add('navcolor');
    }else{
        navbar.classList.remove('navcolor');
    }
    
})

/*bars.addEventListener('click',()=>{
    navbar.classList.add('navcolor');
    barsdiv.style.display="none";
    xicondiv.style.display="flex";
    xicondiv.style.alignItems="center";
    xicon.style.fontSize="2rem";
    pages.style.transform="translateX(0%)";
    pages.style.transition="transform 500ms ease-in-out";
})
xicon.addEventListener('click',()=>{
    navbar.classList.remove('navcolor');
    xicondiv.style.display="none";
    pages.style.transform="translateX(1000px)";
    pages.style.transition="transform 500ms ease-in-out";
    barsdiv.style.display="flex";
    barsdiv.style.alignItems="center";
    }
);*/  
bars.addEventListener('click',()=>{
    navbar.classList.add("navcolor");
    barsdiv.classList.toggle("one");
    xicondiv.classList.toggle("one");
    pages.classList.toggle("now");
    pagesshow[0].style.transition="transform 300ms ease-in-out";
;})
xicon.addEventListener('click',()=>{
    navbar.classList.remove("navcolor");
    barsdiv.classList.toggle("one");
    xicondiv.classList.toggle("one");
    pages.classList.toggle("now");

})

let btn1 = document.getElementById('button1');
let btn2 = document.getElementById('button2');
let descr1 = document.getElementById('desc1');
let descr2 = document.getElementById('desc2');


btn1.addEventListener('click',()=>{
    descr1.style.opacity="1";
    btn1.style.backgroundColor="white";
    btn2.style.backgroundColor="transparent";
    descr2.style.opacity="0";
})
btn2.addEventListener('click',()=>{
    descr1.style.opacity="0";
    descr2.style.opacity="1";
    btn2.style.backgroundColor="white";
    btn1.style.backgroundColor="transparent";
})
function firstevent(){
    descr1.style.opacity="1";
    btn1.style.backgroundColor="white";
    btn2.style.backgroundColor="transparent";
    descr2.style.opacity="0";
}
function secondevent(){
    descr1.style.opacity="0";
    descr2.style.opacity="1";
    btn2.style.backgroundColor="white";
    btn1.style.backgroundColor="transparent";
}

setInterval(firstevent,7000);
setInterval(secondevent,14000);
