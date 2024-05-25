const header = document.getElementsByClassName("header")[0];

const bar = document.getElementById("bar");
const closeBar = document.getElementById("close-bar");
const ul = document.getElementsByClassName("list-header")[0];

// Navbar Scroll

function scrollFunction(){
    console.log("asdas");
    if(window.scrollY > 0){
        header.id = "scroll"
    }else{
        header.id = "";
    };
}

//Navbar Responsive

bar.addEventListener("click", () => {
    ul.classList.remove("none");
    header.id = "scroll";
    bar.classList.add("none");
    bar.parentElement.children[1].classList.remove("none");
})

closeBar.addEventListener("click", () => {
    ul.classList.add("none");
    closeBar.classList.add("none");
    closeBar.parentElement.children[0].classList.remove("none");
})

Array.from(ul.children).forEach(li => {
    li.addEventListener("click", () => {
        ul.classList.add("none");
        closeBar.classList.add("none");
        closeBar.parentElement.children[0].classList.remove("none");
    })
})