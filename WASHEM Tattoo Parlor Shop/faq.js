let q1 = document.getElementById("question1-wrap");
let a1= document.getElementById("answer1");
let q2 = document.getElementById("question2-wrap");
let a2= document.getElementById("answer2");
let q3 = document.getElementById("question3-wrap");
let a3 = document.getElementById("answer3");
let q4 = document.getElementById("question4-wrap");
let a4 = document.getElementById("answer4");
let p1 = document.getElementsByClassName("fa-solid fa-plus plus");
let m1 = document.getElementsByClassName("fa-solid fa-minus minus");

q1.addEventListener("click", () => {


            a1.style.display="block";
            p1[0].style.display="none";
            m1[0].style.display="block";
            p1[1].style.display="block";
            m1[1].style.display="none";
            p1[2].style.display="block";
            m1[2].style.display="none";
            p1[3].style.display="block";
            m1[3].style.display="none";
            a2.style.display="none";
            a3.style.display="none";
            a4.style.display="none";
            
            
        
    
})
q2.addEventListener("click",()=>{
   
            a2.style.display="block";
            p1[0].style.display="block";
            m1[0].style.display="none";
            p1[1].style.display="none";
            m1[1].style.display="block";
            p1[2].style.display="block";
            m1[2].style.display="none";
            p1[3].style.display="block";
            m1[3].style.display="none";
            a1.style.display="none";
            a3.style.display="none";
            a4.style.display="none";
        
})
q3.addEventListener("click",()=>{
   
    a2.style.display="none";
    a1.style.display="none";
    a3.style.display="block";
    p1[0].style.display="block";
    m1[0].style.display="none";
    p1[1].style.display="block";
    m1[1].style.display="none";
    p1[2].style.display="none";
    m1[2].style.display="block";
    p1[3].style.display="block";
    m1[3].style.display="none";
    a4.style.display="none";

})
q4.addEventListener("click",()=>{
   
    a2.style.display="none";
    a1.style.display="none";
    a3.style.display="none";
    a4.style.display="block";
    p1[0].style.display="block";
    m1[0].style.display="none";
    p1[1].style.display="block";
    m1[1].style.display="none";
    p1[2].style.display="block";
    m1[2].style.display="none";
    p1[3].style.display="none";
    m1[3].style.display="block";

})
const navbar = document.querySelector('nav');
let barsdiv=document.getElementById('icon');
let bars = document.getElementById('bars');
let pages = document.getElementById('page-wrap');
let pagesshow = document.getElementsByClassName('showup now');
let xicon = document.getElementById('xicon');
let xicondiv =document.getElementById('x');


window.addEventListener('scroll',()=>{
    console.log(window.scrollY);
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
})
xicon.addEventListener('click',()=>{
    navbar.classList.remove("navcolor");
    barsdiv.classList.toggle("one");
    xicondiv.classList.toggle("one");
    pages.classList.toggle("now");

    pagesshow[0].style.transition="transform 300ms ease-in-out";

})



