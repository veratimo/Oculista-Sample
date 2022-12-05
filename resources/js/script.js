const navbarWrapper = document.querySelector('#navbarWrapper');


window.addEventListener('scroll' , () => {
    if (window.scrollY > 30) {
        navbarWrapper.classList.add('scrolled');
    } else {
        navbarWrapper.classList.remove('scrolled');
    }
});