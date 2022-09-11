// -----------
// SEARCH BAR
// -----------

const { filter } = require("lodash");


// let inputSearch=document.querySelector('.input-search');
// let buttonSearch=document.querySelector('.button-search');


// inputSearch.addEventListener("focus",function(){
//     inputSearch.style.width='50%';
// });
// inputSearch.addEventListener("focusout",function(){
//     inputSearch.style.width="10%";
// })


// ----------------------------
// ACCOUNT
// --------------------


// let accountContent=document.getElementById("accountContent");
// let infoButton=document.getElementById("infoButton");
// let infoContent=document.getElementById("infoContent");
// let workButton=document.getElementById("workButton");
// let workContent=document.getElementById("workContent");

// function changeContent(infoButton,content){
//    infoButton.addEventListener("click",function(){
//         accountContent.remove(content);
//         accountContent.append=content;
//         content.removeAttribute('hidden');
//     })
// }

// changeContent(infoButton,infoContent);
// changeContent(workButton,workContent);
 

// VIEW BY - FILTER VISIBILITY SECTION

let accordion=document.querySelector('.filter-gap');
let accordionContent=document.querySelector('.accordion');
let filterButton=document.querySelector('#filterButton');



function filterOpen(){
    if(accordion.style.visibility="hidden"){
            accordion.style.visibility="visible";
           accordion.append(accordionContent); 
    }else{
        accordion.style.innerHTML="";  
        accordion.style.visibility="hidden";
    }
};

// let width=window.innerWidth;
// let height=window.innerHeight;
var widths = [0, 768, 850];
function resizeFn() {
    if (window.innerWidth>=widths[0] && window.innerWidth<widths[1]) {
        filterButton.style.visibility="visible";
        accordion.style.visibility="hidden";
        accordion.innerHTML="";
        filterButton.addEventListener("click", filterOpen);
    } else if (window.innerWidth>=widths[1] && window.innerWidth<widths[2]) {
        filterButton.style.visibility="hidden";
        accordion.style.visibility="visible";
        accordion.append(accordionContent);
    } else {
        filterButton.style.visibility="hidden";
        accordion.style.visibility="visible";
        accordion.append(accordionContent);
    }
    }
    window.onresize = resizeFn;
    resizeFn();

   // var PARAMS = @json($params)
