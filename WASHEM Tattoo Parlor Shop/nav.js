let home = document.getElementById('home');
let about = document.getElementById('about');
let blog = document.getElementById('blog');
let contact = document.getElementById('contact');
let socials = document.getElementById('socials');
let faq = document.getElementById('faq');
let reviews = document.getElementById('reviews-btn');
let booking = document.getElementById('book-btn');



home.addEventListener('click',()=>{
    location.href="test.php";
})
about.addEventListener('click',()=>{
    location.href="aboutpart.php";
})
blog.addEventListener('click',()=>{
    location.href="blog.php";
})
contact.addEventListener('click',()=>{
    location.href="contacttest.php";
})
socials.addEventListener('click',()=>{
    location.href="socials.php";
})
faq.addEventListener('click',()=>{
    location.href="faq.php";
})
reviews.addEventListener('click',()=>{
    location.href="reviews.php";
})
booking.addEventListener('click' , ()=>{
    location.href="Booking.php";
})