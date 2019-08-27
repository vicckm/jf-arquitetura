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
const $intLink = document.querySelectorAll('.int-link')[4];
const $orcamentoSect = document.querySelector('#orcamento');
$intLink.addEventListener('click',scrollToSect,false);
function scrollToSect() {
	window.scrollTo({
		top: $orcamentoSect.offsetTop - $navBar.offsetHeight,
		left: 0,
		behavior: 'smooth'
	});
} 

// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });