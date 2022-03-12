let navLis = document.querySelectorAll(".nav-item a")
navLis.forEach(function(item){
    let link = item.getAttribute("href")
    link = link.split("/")
    link = link[link.length-1]
    let location = window.location.pathname;
    location = location.split("/")
    location = location[location.length-1]
    if (location == link) {
        item.classList.add("active")
    }
    if (location == "") {
        navLis[0].classList.add("active")
    }
})

let signupPasswordField = document.getElementById("signupPw");
let signupPasswordCheckField = document.getElementById("signupPwCheck");

if (signupPasswordField){
    signupPasswordCheckField.addEventListener("keyup",function(){
        if (this.value != "") {
            if (this.value == signupPasswordField.value) {
                signupPasswordField.style.border = "1px solid green"
            } else {
                signupPasswordField.style.border = "1px solid red"
            }
        } else {
            signupPasswordField.style.border = "1px solid #ced4da"
        }
    
    })
}
