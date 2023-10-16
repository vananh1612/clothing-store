document.getElementById('next').onclick = function(){
    const widthItem = document.querySelector('.item').offsetWidth;
    document.getElementById('formList').scrollLeft += widthItem;
}
document.getElementById('prev').onclick = function(){
    const widthItem = document.querySelector('.item').offsetWidth;
    document.getElementById('formList').scrollLeft -= widthItem;
}


window.addEventListener('scroll', function() {
    var sticky = document.getElementById('sticky');
    if (window.pageYOffset > 0) {
        sticky.classList.add('fixed');
    } else {
        sticky.classList.remove('fixed');
    }
  });