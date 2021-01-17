    window.addEventListener("load",function(){
        document.querySelector(".preloader").classList.add("opacity-0");
        setTimeout(function(){
            document.querySelector(".preloader").style.display="none";
        },1000)
    })

// aside navbar
const nav = document.querySelector(".nav"),
      navList= nav.querySelectorAll("li"),
      totalNavList=navList.length,
      allSection=document.querySelectorAll(".section"),
      totalSection=allSection.length;
    
for(let i=0; i<totalNavList; i++){
    const a=navList[i].querySelector("a");
    a.addEventListener("click",function(){
        removeBackSectionClass();
        for(let j=0; j<totalNavList; j++){
            if(navList[j].querySelector("a").classList.contains("active")){
                //
                addBackSectionClass(j);
            }
            navList[j].querySelector("a").classList.remove("active");
        }
        this.classList.add("active");
        showSection(this);
        if(window.innerWidth < 1200){
            asideSectionTogglerBtn();
        }
        }
)}
function removeBackSectionClass(){
    for(let i=0; i<totalSection; i++){
        allSection[i].classList.remove("back-section");
    }
}
function addBackSectionClass(num){
    allSection[num].classList.add("back-section");
}
function showSection(element){
    for(let i=0; i<totalSection; i++){
        allSection[i].classList.remove("active");
    }
    const target=element.getAttribute("href").split("#")[1];
    document.querySelector("#"+target).classList.add("active")
}

const navTogglerBtn=document.querySelector(".nav-toggler"),
        aside=document.querySelector(".aside");
navTogglerBtn.addEventListener("click",asideSectionTogglerBtn)

function asideSectionTogglerBtn(){
    aside.classList.toggler("open");
    navTogglerBtn.classList.toggler("open");
    for(let i=0; i<totalSection; i++){
        allSection[i].classList.toggle("open");
    }
}

// Sign in
$('.error-page').hide(0);

$('.login-button , .no-access').click(function(){
  $('.login').slideUp(500);
  $('.error-page').slideDown(1000);
});

$('.try-again').click(function(){
  $('.error-page').hide(0);
  $('.login').slideDown(1000);
});

// SignUp