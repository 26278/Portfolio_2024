var navOpen = false;
var navButton = document.getElementById('nav');
var menu = document.getElementById('menu');

var navAni = gsap.timeline({ paused: true });
navAni.set('body', { overflow: 'hidden' });
navAni.set('.nav-menu', { visibility: 'visible' });
navAni.to('.nav-menu', .3, { opacity: 1 });
navAni.to('.ham', .3, { top: '1em', right: '2.85em', left: 'unset' }, '-=.3');

function openNav() {
    navOpen = true;
    window.scrollTo(0, 0);
    navAni.play();
}

function closeNav() {
    navOpen = false;
    navAni.reverse();
}

navButton.addEventListener('click', () => {
    if (!navOpen) {
        openNav();
    } else {
        closeNav();
    }
});

menu.addEventListener('click', () => {
    closeNav();
    document.getElementById('navIcon').classList.toggle('active');
});
