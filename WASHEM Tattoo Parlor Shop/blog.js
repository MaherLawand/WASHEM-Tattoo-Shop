let c1=document.getElementById("circle1");
let c2=document.getElementById("circle2");
let c3=document.getElementById("circle3");
let c4=document.getElementById("circle4");
let c5=document.getElementById("circle5");
let desc1 = document.getElementsByClassName("firstt");
let desc2 = document.getElementsByClassName("secondd");
let desc3 = document.getElementsByClassName("third");
let desc4 = document.getElementsByClassName("fourth");
let lastleft = document.getElementsByClassName("last-left");
let lastright = document.getElementsByClassName("last-right");
let ts = document.getElementsByClassName("timeline-shown");
let te = document.getElementsByClassName("timeline-empty");
let img = document.getElementsByClassName("img");
let img1 = document.getElementById("img-open");

c1.addEventListener('mouseover',()=>{
  c1.style.transform="Scale(1.2)";
})
c1.addEventListener('mouseout',()=>{
  c1.style.transform="Scale(1)";
  c1.style.transition="transform 100ms ease-in-out";
})

c1.addEventListener('click',()=>{
  c1.style.animation="none";
  desc1[0].style.display="block";
  te[0].style.height="320px";
  te[0].style.animation="firstclick 300ms ease";
  /*setTimeout(()=>{
    c2.style.visibility="visible";
    },300
  );*/
  c2.style.opacity="1";
  img[0].classList.add('img-shown1');
})


c2.addEventListener('mouseover',()=>{
  c2.style.transform="Scale(1.2)";
})
c2.addEventListener('mouseout',()=>{
  c2.style.transform="Scale(1)";
  c2.style.transition="transform 100ms ease-in-out";
})
c2.addEventListener('click',()=>{
  desc3[0].style.display="block";
  desc1[0].style.display="block";
  ts[0].style.display="block";
  ts[0].style.height="320px";
  te[0].style.height="640px";
  te[0].style.animation="secondclick 300ms ease";
  ts[0].style.animation="firstclick 300ms ease";
  /*setTimeout(()=>{
    c3.style.visibility="visible";
    },300
  );*/
  c2.style.animation="none";
  c3.style.opacity="1";
  img[0].classList.remove('img-shown1');
  img[1].classList.add('img-shown2');
  /*c3.style.animation="circleshow 500ms ease 300ms ";*/

  /*ts[0].style.height="320px";
  ts[0].style.transition="all 300ms ease";*/
})
c3.addEventListener('mouseover',()=>{
  c3.style.transform="Scale(1.2)";
})
c3.addEventListener('mouseout',()=>{
  c3.style.transform="Scale(1)";
  c3.style.transition="transform 100ms ease-in-out";
})
c3.addEventListener('click',()=>{
  desc2[0].style.display="block";
  desc3[0].style.display="block";
  desc1[0].style.display="block";
  ts[0].style.display="block";
  ts[0].style.height="640px";
  te[0].style.height="960px";
  te[0].style.animation="thirdclick 300ms ease";
  ts[0].style.animation="secondclick 300ms ease";
  c3.style.animation="none";
  c4.style.opacity="1";
  img[1].classList.remove('img-shown2');
  img[2].classList.add('img-shown3');
  /*setTimeout(()=>{
    c4.style.visibility="visible";
    },300
  );
  c4.style.animation="circleshow 500ms ease 300ms ";
  ts[0].style.height="640px";
  ts[0].style.transition="all 300ms ease";*/
})
c4.addEventListener('mouseover',()=>{
  c4.style.transform="Scale(1.2)";
})
c4.addEventListener('mouseout',()=>{
  c4.style.transform="Scale(1)";
  c4.style.transition="transform 100ms ease-in-out";
})
c4.addEventListener('click',()=>{
  desc4[0].style.display="block";
  desc2[0].style.display="block";
  desc3[0].style.display="block";
  desc1[0].style.display="block";
  ts[0].style.display="block";
  ts[0].style.height="960px";
  te[0].style.height="1280px";
  te[0].style.animation="fourthlick 300ms ease";
  ts[0].style.animation="thirdclick 300ms ease";
  c4.style.animation="none";
  c5.style.opacity="1";
  img[2].classList.remove('img-shown3');
  img[3].classList.add('img-shown4');
  /*setTimeout(()=>{
    c5.style.visibility="visible";
    },300
  );
  c5.style.animation="circleshow 500ms ease 300ms";
  /*ts[0].style.height="960px";
  ts[0].style.transition="all 300ms ease";*/
})
c5.addEventListener('mouseover',()=>{
  c5.style.transform="Scale(1.2)";
})
c5.addEventListener('mouseout',()=>{
  c5.style.transform="Scale(1)";
  c5.style.transition="transform 100ms ease-in-out";
})
c5.addEventListener('click',()=>{
  desc4[0].style.display="block";
  desc2[0].style.display="block";
  desc3[0].style.display="block";
  ts[0].style.display="block";
  ts[0].style.height="1280px";
  ts[0].style.animation="fourthclick 300ms ease";
  c5.style.animation="none";
  img[3].classList.remove('img-shown4');
  img[4].classList.add('img-shown5');
  /*ts[0].style.height="1280px";
  ts[0].style.transition="all 300ms ease";*/
})
const navbar = document.querySelector('nav');
let barsdiv=document.getElementById('icon');
let bars = document.getElementById('bars');
let pages = document.getElementById('page-wrap');
let pagesshow = document.getElementsByClassName('showup now');
let xicon = document.getElementById('xicon');
let xicondiv =document.getElementById('x');


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
})
xicon.addEventListener('click',()=>{
    navbar.classList.remove("navcolor");
    barsdiv.classList.toggle("one");
    xicondiv.classList.toggle("one");
    pages.classList.toggle("now");

})
