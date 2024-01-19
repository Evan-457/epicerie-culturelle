var sidenav = document.querySelector(".sidenav");
var closeBtn = document.querySelector(".closeBtn");
var openBtn = document.querySelector(".openBtn");

openBtn.addEventListener("click", (event) => {
    event.stopPropagation();
    event.preventDefault();
    openNav();
});

closeBtn.addEventListener("click", (event) => {
    event.stopPropagation();
    event.preventDefault();
    closeNav();
});

/* Set the width of the side navigation to 250px */
function openNav() {
    console.log('opennav');
  sidenav.classList.add("active");
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  sidenav.classList.remove("active");
}
