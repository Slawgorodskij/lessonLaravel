const burger=()=>{const e=document.querySelectorAll(".button-menu"),r=document.querySelector(".wrapper");e.forEach(e=>{e.addEventListener("click",()=>{r.classList.toggle("wrapper__inactive")})})};burger();
