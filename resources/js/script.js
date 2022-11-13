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
 

// VIEW BY - FILTER VISIBILITY SECTION

let accordion=document.getElementById('filterGap');
let accordionContent=document.getElementById('accordionFilter');
let filterButton=document.getElementById('filterButton');


// --------------------------------------------------------------------------------------------------------------------------------
// FILTER FUNCTIONS
// ---------------------------------------------------------------------------------------------------------------------------------


function filterOpen(){
    // IF THE ACCORDION IS HIDDEN
    if(accordion.style.visibility=="hidden"){
        //SET ACCORDION VISIBLE
        accordion.style.visibility="visible";
        // INSERT CONTENT
        accordion.append(accordionContent);
        // RESET HEIGHT
        accordion.style.height="auto";
    }else{
        // THEN SET ACCORDION CONTENT TO EMPTY
        accordion.style.innerHTML="";
        // SET ACCORDION SIZE TO 0
        accordion.style.height=0;
        // HIDDEN ACCORDION
        accordion.style.visibility="hidden";
    }
}
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
        // SHOW PAGE
        if(c.href.includes("show")){
            document.getElementById("showPicture").src='https://picsum.photos/200';
            document.getElementById("sectionImg").classList.remove('text-end');
            document.getElementById("textShow").classList.remove("text-start");
            document.getElementById("textShow").classList.add("text-center");
            document.getElementById("btnAdd").style.width="200px"; 
            document.getElementById("btnAdd").style.marginLeft="50%";
            document.getElementById("btnAdd").style.marginRight="50%";
        }
        // cart 
        else if(c.href.includes("cart")){
        //  WORK IN PROGRESS    
        }
        else{
            
            filterButton.style.visibility="visible";;
            accordion.style.visibility="hidden";
            accordion.innerHTML="";
            filterButton.addEventListener("click", filterOpen);
            document.querySelector('.filter-count-text').style.marginTop="10px";
        }
        // 
        
    } else if (window.innerWidth>=widths[1] && window.innerWidth<widths[2]) {
        
        if((window.innerWidth>=window.innerWidth<widths[1] && window.innerWidth<1000)){
            document.getElementById("filterGap").style.fontSize="10px";    
        }else{
            document.getElementById("filterGap").style.fontSize="20px";
        }
        if(c.href.includes("show")){

        }else{

            filterButton.style.visibility="hidden";
            accordion.style.visibility="visible";
            accordion.append(accordionContent);
            filterButton.addEventListener("click", filterOpen);
            document.querySelector('.filter-count-text').style.marginTop="-20px";
        }
       
        
    }
    // else if(window.innerWidth<=991 && window.innerWidth>=425){
    //     filterButton.style.visibility="visible";
    //     accordion.style.visibility="hidden";
    //     accordion.innerHTML="";
    //     filterButton.addEventListener("click", filterOpen);
    //     document.querySelector('.filter-count-text').style.marginTop="10px";
    // }
    else {
        
        
        if(c.href.includes("show")){
            document.getElementById("showPicture").src='https://picsum.photos/400';
            document.getElementById("sectionImg").classList.add('text-end');
            document.getElementById("textShow").classList.add("text-start");
            document.getElementById("textShow").classList.remove("text-center");
            document.getElementById("btnAdd").style.width="400px";
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
