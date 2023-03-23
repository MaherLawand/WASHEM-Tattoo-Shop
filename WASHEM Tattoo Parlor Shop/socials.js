let insta=document.getElementById('insta');
let twitter=document.getElementById('twitter');
let facebook=document.getElementById('facebook');
let tiktok=document.getElementById('tiktok');
let background=document.getElementById('bg');
let logo=document.getElementsByClassName('logo');

insta.addEventListener('mouseover',()=>{
    background.style.backgroundImage="linear-gradient(to bottom right, rgb(255, 96, 202),blue)";
    background.style.opacity="1";
    background.style.backgroundSize="300% 300%";
    background.style.animation="gradient 10s ease infinite";
    insta.style.cursor="pointer";
    logo[0].style.fontSize="21rem";

});
insta.addEventListener('mouseout',()=>{
    background.style.opacity="0";
    logo[0].style.fontSize="20rem";
});
twitter.addEventListener('mouseover',()=>{
    background.style.backgroundImage="linear-gradient(to bottom right, #54affa,rgb(125, 123, 243))";
    background.style.opacity="1";
    background.style.backgroundSize="300% 300%";
    background.style.animation="gradient 10s ease infinite";
    twitter.style.cursor="pointer";
    logo[1].style.fontSize="21rem";
});
twitter.addEventListener('mouseout',()=>{
    background.style.opacity="0";
    logo[1].style.fontSize="20rem";
});
facebook.addEventListener('mouseover',()=>{
    background.style.backgroundImage="linear-gradient(to bottom right, #262af7,rgb(125, 123, 243))";
    background.style.opacity="1";
    background.style.backgroundSize="200% 200%";
    background.style.animation="gradient 10s ease infinite";
    facebook.style.cursor="pointer";
    logo[2].style.fontSize="21rem";

});
facebook.addEventListener('mouseout',()=>{
    background.style.opacity="0";
    logo[2].style.fontSize="20rem";
});
tiktok.addEventListener('mouseover',()=>{
    background.style.backgroundImage="linear-gradient(to bottom right, #54affa, red)";
    background.style.opacity="1";
    background.style.backgroundSize="200% 200%";
    background.style.animation="gradient 10s ease infinite";
    facebook.style.cursor="pointer";
    logo[3].style.fontSize="21rem";

});
tiktok.addEventListener('mouseout',()=>{
    background.style.opacity="0";
    logo[3].style.fontSize="20rem";
});
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

