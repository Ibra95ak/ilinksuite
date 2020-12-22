<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="assets/css/master.css">
    <link rel="stylesheet" href="assets/css/component.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  </head>
  <body>
    <section class="section section--menu" id="shylock">
		<span class="link-copy"></span>
		<nav class="menu menu--shylock">
			<ul class="menu__list">
				<li class="menu__item menu__item--current"><a class="menu__link">Home</a></li>
				<li class="menu__item"><a class="menu__link">Portfolio</a></li>
				<li class="menu__item"><a class="menu__link">Blog</a></li>
				<li class="menu__item"><a class="menu__link">Shop</a></li>
				<li class="menu__item"><a class="menu__link">Contact</a></li>
			</ul>
		</nav>
	</section>
  <div class="container">
    <section class="section section--menu section-one">
      <div class="row">
        <div class="col-md-8">
          A new way to connect
        </div>
        <div class="col-md-4">
          <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_xd0wyalp.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player>
        </div>
      </div>
    </section>
  </div>
  </body>
  <script src="assets/js/classie.js"></script>
		<script src="assets/js/clipboard.min.js"></script>
		<script src="assets/js/modernizr.custom.js"></script>
    <script>
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
		</script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.10.2/p5.min.js'></script>
    <script type="text/javascript">
//     colored = true
// var order = 7
// var N = Math.pow(2,order)
// var total = N*N
// var path = []
// function setup(){
//   colorMode(HSB,360,255,255)
//   createCanvas(800,800)
//     for(var i = 0;i < total;i++){
//     path[i] = hilbert(i)
//     len = width/N
//     path[i].mult(len)
//     path[i].add(len/2,len/2)
//   }
// }
// var counter = 0;
// function draw(){
//   background(51)
//   //beginShape()
//   noFill()
//   for(var i = 1;i<counter;i++){
//     if(colored){
//    h = map(i,0,path.length,0,360)
//     stroke(h,255,255)
//     }else{
//       stroke(255)
//     }
// line(path[i].x,path[i].y,path[i-1].x,path[i-1].y)
//   }
//   //endShape()
//   counter+=5;
//   if(counter >= path.length){
//     counter = 1
//   }
// }
// function hilbert(i){
//   points = [createVector(0,0),createVector(0,1),createVector(1,1),createVector(1,0)]
//   index = i&3
//   v = points[index]
//   for(var j = 1;j< order;j++){
//   i = i >>> 2
//   index=i&3
//   var leng = Math.pow(2,j)
//   if(index == 0){
//     var temp = v.x
//     v.x = v.y
//     v.y = temp
//   }else if(index == 1){
//     v.y+=leng;
//   }else if(index == 2){
//     v.x+=leng;
//     v.y+=leng;
//   }else if(index == 3){
//     var temp = leng-1-v.x
//     v.x = leng-1-v.y
//     v.y = temp
//     v.x+=leng;
//   }
//   }
//   return v
// }
// setup();
    </script>
</html>
