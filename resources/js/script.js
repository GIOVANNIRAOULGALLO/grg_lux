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

let accordion=document.getElementById('filterGap');
let accordionContent=document.getElementById('accordionFilter');
let filterButton=document.getElementById('filterButton');



function filterOpen(){
    if(accordion.style.visibility=="hidden"){
            accordion.style.visibility="visible";
           accordion.append(accordionContent);
           accordion.style.height="auto";

    }else{
        accordion.style.innerHTML="";
        accordion.style.height=0;
        accordion.style.visibility="hidden";
    }
};

// let width=window.innerWidth;
// let height=window.innerHeight;
var widths = [0, 768, 850];
let c=window.location;
// let showPicture=;
function resizeFn() {
    if (window.innerWidth>=widths[0] && window.innerWidth<widths[1]) {
        if(c.href.includes("show")){
            document.getElementById("showPicture").src='https://picsum.photos/200';
            document.getElementById("sectionImg").classList.remove('text-end');
            document.getElementById("textShow").classList.remove("text-start");
            document.getElementById("textShow").classList.add("text-center");
            document.getElementById("btnAdd").style.width="200px";
            document.getElementById("btnAdd").classList.remove("ms-0");   
            document.getElementById("btnAdd").classList.add("mx-auto");   
                 
        }else{
            filterButton.setAttribute('style', 'visibility: visible');
            // filterButton.style.visibility="visible";
            accordion.style.visibility="hidden";
            accordion.innerHTML="";
            filterButton.addEventListener("click", filterOpen);
        }
        
        
    } else if (window.innerWidth>=widths[1] && window.innerWidth<widths[2]) {
        if(c.href.includes("show")){

        }else{
            filterButton.style.visibility="hidden";
            accordion.style.visibility="visible";
            accordion.append(accordionContent);
            filterButton.addEventListener("click", filterOpen);
        }
       
        
    } else {
        
        if(c.href.includes("show")){
            document.getElementById("showPicture").src='https://picsum.photos/400';
            document.getElementById("sectionImg").classList.add('text-end');
            document.getElementById("textShow").classList.add("text-start");
            document.getElementById("textShow").classList.remove("text-center");
            document.getElementById("btnAdd").style.width="400px";
            // document.getElementById("btnAdd").classList.add("ms-0");   
            // document.getElementById("btnAdd").classList.add("mx-auto");   
                 
        }
        else{
            filterButton.style.visibility="hidden";
            accordion.style.visibility="visible";
            accordion.append(accordionContent);
            filterButton.addEventListener("click", filterOpen);
        }
    }
    }
    window.onresize = resizeFn;
    resizeFn();

   // var PARAMS = @json($params)
