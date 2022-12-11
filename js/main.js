
var body = document.querySelector('body');
var checkbox = document.querySelector('input[name=checkbox]');


checkbox.addEventListener('change', function() {
  if (this.checked) {
    body.classList.add('dark-mode');
  } else {
    body.classList.remove('dark-mode');
    body.classList.add('light-mode');
  }
});