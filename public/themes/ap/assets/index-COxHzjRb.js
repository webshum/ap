const d=()=>{const e=document.getElementById("header"),t=document.querySelector(".wrapper"),n=e.querySelector(".btn-nav");document.body.classList.contains("home")||(t.style.paddingTop=`${e.offsetHeight-2}px`,window.addEventListener("resize",o=>{t.style.paddingTop=`${e.offsetHeight-2}px`})),n.addEventListener("click",o=>{document.body.classList.toggle("nav-active")})};d();