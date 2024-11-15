import '../css/index.css';

const header = () => {
    const header = document.getElementById('header');
    const wrapper = document.querySelector('.wrapper');
    const burger = header.querySelector('.btn-nav');

    if (!document.body.classList.contains('home')) {
        wrapper.style.paddingTop = `${header.offsetHeight - 2}px`;
        wrapper.style.minHeight = `calc(100vh - ${header.offsetHeight - 2}px)`;

        window.addEventListener('resize', e => {
            wrapper.style.paddingTop = `${header.offsetHeight - 2}px`;
            wrapper.style.minHeight = `calc(100vh - ${header.offsetHeight - 2}px)`;
        });
    }

    burger.addEventListener('click', e => {
        document.body.classList.toggle('nav-active');
    });
}

header();
