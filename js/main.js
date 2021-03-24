var modal = document.getElementById("my_modal");
var btn = document.getElementById("btn_modal_window");
var footerBtn = document.getElementById("footer_modal_window");
var span = document.getElementsByClassName("close_modal_window")[0];
var sent = document.getElementsByClassName("modal__button")[0];
// var modal_content = document.getElementsByClassName("modal_content")[0];
// var modal__thanks = document.getElementsByClassName("modal_content")[0];


btn.onclick = function () {
   modal.style.display = "block";
}

span.onclick = function () {
   modal.style.display = "none";
}

window.onclick = function (event) {
   if (event.target == modal) {
      modal.style.display = "none";
   }
}

footerBtn.onclick = function () {
   modal.style.display = "block";
}

// Скрипт slick (слайдер)
$(".slider-block").slick({
   dots: true,
   autoplay: false,
   infinite: false,
   arrows: true,
   slidesToShow: 1,
   slidesToScroll: 1,

});

// sent.onclick = function () {
//    modal_content.style.display = "none";
//    modal__thanks.style.display = "block";
// }