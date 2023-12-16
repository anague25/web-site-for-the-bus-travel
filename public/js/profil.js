const profil = document.querySelector('.profil');

const imageprofil = document.querySelector('.imageprofil');
imageprofil.addEventListener("click",e=>{
   
    e.preventDefault();
    if(profil.style.display == "block"){
        profil.style.display="none";
    }else{
        profil.style.display="block";
    }
});
  



// const userInfo = document.querySelector(".information");
// const imgUser = document.querySelector(".image-profil-navbar");
// imgUser.addEventListener("click",()=>{
//     if(userInfo.style.display == "block"){
//         userInfo.style.display = "none";
//     }else{
//         userInfo.style.display ="block";
//     }
// })