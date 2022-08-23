// -----------
// SEARCH BAR
// -----------


let inputSearch=document.querySelector('.input-search');
let buttonSearch=document.querySelector('.button-search');


inputSearch.addEventListener("focus",function(){
    inputSearch.style.width='50%';
});
inputSearch.addEventListener("focusout",function(){
    inputSearch.style.width="10%";
})


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
    
let height=screen.height;
let width=screen.width;

window.onresize=function(){
    if(width<=768){
        
        document.getElementById("welcomeTest").innerHTML="Altezza"+width;
    }
    else{
        
        document.getElementById("welcomeTest").innerHTML="Larghezza"+height;
    }
};


// document.getElementById("welcomeTest").innerHTML="Altezza"+height;
