let sliders = document.querySelectorAll('.review-slider-element');
let btnR = document.querySelector('.button-right');
let btnL = document.querySelector('.button-left');

let count = 0;
function slider() {
  for (let i = 0; i < sliders.length; i++){
    sliders[i].classList.add('element-disactive');
  }
  sliders[count].classList.remove('element-disactive');
  sliders[count].classList.add('element-active');  
}
slider();

btnR.addEventListener('click', function (elem) {
  elem.preventDefault();
  if (count + 1 == sliders.length) {
    count = 0;
  }
  else {
    count++;
  }
  slider();
});
btnL .addEventListener('click', function (elem) { 
  elem.preventDefault();
  if (count - 1 == -1) {
    count = sliders.length - 1;
  }
  else {
    count--;
  }
  slider();
})
