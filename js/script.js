const $logo = document.querySelectorAll('.logo')[0];
const $navBar = document.querySelectorAll('.nav-bar')[0];
window.addEventListener('scroll',toggleNavBar,false);
function toggleNavBar() {
	if(window.pageYOffset >= $logo.offsetHeight && $navBar.classList.contains('abs-pos')){
		$navBar.classList.remove('abs-pos');
		$navBar.classList.add('fix-pos');
	} else if (window.pageYOffset < $logo.offsetHeight && $navBar.classList.contains('fix-pos')){
		$navBar.classList.add('abs-pos');
		$navBar.classList.remove('fix-pos');
	}
}

new SimpleSlide({ 
  slide: "principal", // nome do atributo data-slide="principal"  
  nav: true,
  time: 3000 // tempo de transição dos slides
});

// Identificar o clique no menu
// Verificar o item que foi clicado e fazer referência com o alvo
// Verificar a distância entre o alvo e o topo
// Animar o scroll até o alvo

const menuItems = document.querySelectorAll('.nav-bar a[href^="#"]');

function getScrollTopByHref(element) {
	const id = element.getAttribute('href');
	return document.querySelector(id).offsetTop;
}

function scrollToPosition(to) {
  // Caso queira o nativo apenas
	// window.scroll({
	// top: to,
	// behavior: "smooth",
	// })
  smoothScrollTo(0, to);
}

function scrollToIdOnClick(event) {
	event.preventDefault();
	const to = getScrollTopByHref(event.currentTarget)- 50;
	scrollToPosition(to);
}

menuItems.forEach(item => {
	item.addEventListener('click', scrollToIdOnClick);
});

const btnItems = document.querySelectorAll('.slider-text a[href^="#"]');

function getScrollTopByHref(element) {
	const id = element.getAttribute('href');
	return document.querySelector(id).offsetTop;
}

function scrollToPosition(to) {
  // Caso queira o nativo apenas
	// window.scroll({
	// top: to,
	// behavior: "smooth",
	// })
  smoothScrollTo(0, to);
}

function scrollToIdOnClick(event) {
	event.preventDefault();
	const to = getScrollTopByHref(event.currentTarget)- 50;
	scrollToPosition(to);
}

btnItems.forEach(item => {
	item.addEventListener('click', scrollToIdOnClick);
});

// Caso deseje suporte a browsers antigos / que não suportam scroll smooth nativo
/**
 * Smooth scroll animation
 * @param {int} endX: destination x coordinate
 * @param {int) endY: destination y coordinate
 * @param {int} duration: animation duration in ms
 */
function smoothScrollTo(endX, endY, duration) {
  const startX = window.scrollX || window.pageXOffset;
  const startY = window.scrollY || window.pageYOffset;
  const distanceX = endX - startX;
  const distanceY = endY - startY;
  const startTime = new Date().getTime();

  duration = typeof duration !== 'undefined' ? duration : 400;

  // Easing function
  const easeInOutQuart = (time, from, distance, duration) => {
    if ((time /= duration / 2) < 1) return distance / 2 * time * time * time * time + from;
    return -distance / 2 * ((time -= 2) * time * time * time - 2) + from;
  };

  const timer = setInterval(() => {
    const time = new Date().getTime() - startTime;
    const newX = easeInOutQuart(time, startX, distanceX, duration);
    const newY = easeInOutQuart(time, startY, distanceY, duration);
    if (time >= duration) {
      clearInterval(timer);
    }
    window.scroll(newX, newY);
  }, 1000 / 60); // 60 fps
};

$(document).ready(function(){    
	$("#tel").mask("(00) 0000-0000");
	$("#cel").mask("(00) 00000-0000");       
})

$('#slider-area').owlCarousel({
    loop:true,
    autoplay:true,
    nav: true,
    navText: ["<img src='img/setaLeft.png'>","<img src='img/setaRight.png'>"],
    responsive:{
        0:{
            items:1
        },
        1000:{
            items:1
        },
        2000:{
            items:1
        }
    }
})  

function iniciaModal(modalID){
							const modal = document.getElementById(modalID);
							if (modal){
								modal.classList.add('mostrar');
								modal.addEventListener('click', (e) =>{
								if(e.target.id == modalID || e.target.className == 'fechar'){
									modal.classList.remove('mostrar');
									}
								});
							}
						}
							
							const logo = document.querySelector('.mais-info');
							mais-info.addEventListener('click', () => iniciaModal('modal-cartao'));

