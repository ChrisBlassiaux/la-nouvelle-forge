let dropdown = document.querySelector('#dropdown');
let dropdown_open = document.querySelector('#dropdown-open');

let burger = document.querySelector('#burger');
let nav = document.querySelector('#nav');

dropdown.addEventListener('click', function() {
  if (dropdown_open.style.display == 'none') {
    dropdown_open.style.display = 'block';
  } else {
    dropdown_open.style.display = 'none';
  }
})

burger.addEventListener('click', function() {
  if (nav.style.display == 'none') {
    nav.style.display = 'block';
  } else {
    nav.style.display = 'none';
  }
})

