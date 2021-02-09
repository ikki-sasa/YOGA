// BUTTON SCROLL START
const scrollBtn = document.querySelector('.scroll-btn');

window.addEventListener('scroll', () => {
    if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
       scrollBtn.style.display = 'block'; 
    }
    else {
        scrollBtn.style.display = 'none'; 

    }
})
scrollBtn.addEventListener('click', () => {
    window.scroll({
        top: 0 ,
        behavior: "smooth"
    })
})
// BUTTON SCROLL END

// JS FOR TOGGLE MENU START
    let MenuItems = document.getElementById("MenuItems");
      MenuItems.style.maxHeight = "0px";
      function menutoggle() {
if(MenuItems.style.maxHeight === "0px") 
  {
      MenuItems.style.maxHeight = "200px";
  }
  else 
  {
      MenuItems.style.maxHeight = "0px";

  }
}
// JS FOR TOGGLE MENU END

// JS FOR TOGGLE FORM START

  
  let LoginForm = document.getElementById("LoginForm");
  let RegForm = document.getElementById("RegForm");
  let Indicator = document.getElementById("Indicator");

  function register() {
      RegForm.style.transform = "translateX(0px)";
      LoginForm.style.transform = "translateX(0px)";
      Indicator.style.transform = "translateX(100px)";
  }

  function login() {
      RegForm.style.transform = "translateX(300px)";
      LoginForm.style.transform = "translateX(300px)";
      Indicator.style.transform = "translateX(0px)";
  }
// JS FOR TOGGLE FORM ENDS 


  
