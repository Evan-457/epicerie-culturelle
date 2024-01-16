var sidenav = document.querySelector(".sidenav");
var closeBtn = document.querySelector(".closeBtn");
var openBtn = document.querySelector(".openBtn");

openBtn.addEventListener("click", (event) => {
    openNav();
});

closeBtn.addEventListener("click", (event) => {
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
