javascript
document.addEventListener(
"DOMContentLoaded",
()=>{


const header =
document.querySelector(
"#itenter-header"
);



window.addEventListener(
"scroll",
()=>{


if(window.scrollY>50){

header.classList.add(
"scrolled"
);

}

else{

header.classList.remove(
"scrolled"
);

}


});
  const toggle =
document.querySelector(
".mobile-menu-toggle"
);



const menu =
document.querySelector(
".main-navigation"
);



if(toggle){


toggle.addEventListener(
"click",
()=>{


menu.classList.toggle(
"active"
);


});


}



});


---
