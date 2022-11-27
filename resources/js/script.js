// window.onload = function (){
//     var background = document.querySelector('.container');
//     var hf=background.scrollHeight;
//     console.log();
//     console.log(hf*100);
//     console.log(window.innerHeight);
//     if(hf>=window.innerHeight){
//         document.querySelector('#grgFooter').className.remove('fixed-bottom');
//         document.querySelector('#grgFooter').className.add('sticky-bottom');

//     }
// }






// let priceRange=document.getElementById('priceRange').value;
//     console.log(priceRange);
//     let filterPriceRange=document.getElementById('filterPriceRange');
//     filterPriceRange.innerHTML=priceRange;

function rangeChange(){
   
    let priceRange=document.getElementById('priceRange').value;
    console.log(priceRange);
    let filterPriceRange=document.getElementById('filterPriceRange');
    filterPriceRange.innerHTML=priceRange;
}

// -------------------------------------------------------------------------------------------------------------------------------------
// RESIZE FUNCTION
// -----------------------------------------------------------------------------------------------------------------------------------


var widths = [0, 768, 900];
// OUTPUT THE URI OF THER PAGE
let c=window.location;
// FUNCTION WHEN WINDOW RESIZE
function resizeFn() {
    if (window.innerWidth>=widths[0] && window.innerWidth<widths[1]) {   
    }
}
    window.onresize = resizeFn;
    resizeFn();

   // var PARAMS = @json($params)
// ------------------------------------------------------------------------------------------------------------------------------






















// PORCATE


   // -----------
// SEARCH BAR
// -----------

// const { filter } = require("lodash");


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
 

// ------------------------------------------------------
