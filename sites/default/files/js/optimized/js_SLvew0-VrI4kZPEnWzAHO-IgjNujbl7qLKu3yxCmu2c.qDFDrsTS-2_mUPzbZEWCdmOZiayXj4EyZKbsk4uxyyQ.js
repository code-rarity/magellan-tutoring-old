/* Source and licensing information for the line(s) below can be found at http://www.magellantutoring.com/core/themes/seven/js/mobile.install.js. */
(function(){function e(e){for(var n=0;n<e.length;n++){if(e[n].className==='is-active'){return n+1}};if(e[e.length-1].className==='done'){return e.length};return 0};function n(){var n=document.querySelectorAll('.task-list li');if(n.length){var r=document.querySelector('header[role="banner"]'),t=document.createElement('div');t.className='step-indicator';t.innerHTML=e(n)+'/'+n.length;r.appendChild(t)}};if(document.addEventListener){document.addEventListener('DOMContentLoaded',n)}})();
/* Source and licensing information for the above line(s) can be found at http://www.magellantutoring.com/core/themes/seven/js/mobile.install.js. */