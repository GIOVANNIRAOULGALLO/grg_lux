let inputSearch=document.querySelector('.input-search');
let buttonSearch=document.querySelector('.button-search');


inputSearch.addEventListener("keydown",function(){
    inputSearch.style.width='50%';
});
inputSearch.addEventListener("focusout",function(){
    inputSearch.style.width="10%";
})
   
