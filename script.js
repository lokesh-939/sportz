// const header=document.querySelector("header");
// window.addEventListener('scroll',()=>{
//     if(window.scrollY > 50){
//         header.style.background-color="red";
//     }
//     else{
//         header.style.background-color='transporant';
//     }
// });



const myNav = document.querySelector("header");
window.onscroll = function () {
    if (document.body.scrollTop >= 200 || document.documentElement.scrollTop >= 200) {
        myNav.classList.add("red");
        myNav.classList.remove("transparent");
    } else {
        myNav.classList.add("transparent");
        myNav.classList.remove("red");
    }
};