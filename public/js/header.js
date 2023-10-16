const menuBtn = document.querySelector(".menu-btn");
const nav = document.querySelector(".header-div1");
menuBtn.addEventListener("click",()=>{
    menuBtn.classList.toggle("active");
    nav.classList.toggle("active");
});
const btns = document.querySelectorAll(".nav-btn");
const slides = document.querySelectorAll(".video-slide");
var slider=function(manual){
    btns.forEach((btn)=>{
        btn.classList.remove("active")
    })
    slides.forEach((sli)=>{
        sli.classList.remove("active")
    })
    btns[manual].classList.add("active")
    slides[manual].classList.add("active")
}
btns.forEach((btn,i)=>{
    btn.addEventListener("click",()=>{
        slider(i);
    })
})

window.addEventListener('scroll', function() {
    var sticky = document.getElementById('sticky');
    if (window.pageYOffset > 0) {
        sticky.classList.add('fixed');
    } else {
        sticky.classList.remove('fixed');
    }
  });