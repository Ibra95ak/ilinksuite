/*navigation menu animation*/
(function() {
  [].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
    var menuItems = menu.querySelectorAll('.menu__link'),
      setCurrent = function(ev) {
        ev.preventDefault();

        var item = ev.target.parentNode; // li

        // return if already current
        if( classie.has(item, 'menu__item--current') ) {
          return false;
        }
        // remove current
        classie.remove(menu.querySelector('.menu__item--current'), 'menu__item--current');
        // set current
        classie.add(item, 'menu__item--current');
      };

    [].slice.call(menuItems).forEach(function(el) {
      el.addEventListener('click', setCurrent);
    });
  });

  [].slice.call(document.querySelectorAll('.link-copy')).forEach(function(link) {
    link.setAttribute('data-clipboard-text', location.protocol + '//' + location.host + location.pathname + '#' + link.parentNode.id);
    new Clipboard(link);
    link.addEventListener('click', function() {
      classie.add(link, 'link-copy--animate');
      setTimeout(function() {
        classie.remove(link, 'link-copy--animate');
      }, 300);
    });
  });
})(window);
/* counter */
function counttil(ele,numb){
  let number = ele;
  let start = 20;
  let end = numb;
  let ticks = 20;
  let speed = 50;
  let randomNumbers = [end]

  for (let i = 0; i < ticks - 1; i++) {
    randomNumbers.unshift(
      Math.floor(Math.random() * (end - start + 1) + start)
    );
  }
  randomNumbers.sort((a, b) => {return a - b});
  let x = 0;
  let interval = setInterval(function () {

     number.innerHTML = randomNumbers.shift();

     if (++x === ticks) {
        window.clearInterval(interval);
     }

  }, speed);
}
$(document).ready(function(){
  counttil(document.getElementById('number1'),150);
  counttil(document.getElementById('number2'),300);
  counttil(document.getElementById('number3'),60);
});
