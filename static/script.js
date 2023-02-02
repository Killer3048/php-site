const btn = document.querySelector(".form__btn");
// const modal = document.getElementById("modal");
// const yesBtn = document.querySelector(".yes-btn");
// const noBtn = document.querySelector(".no-btn");
// const gay = document.querySelector(".gay");


btn.addEventListener("click", function () {
  btn.style.width = "40%";
  btn.style.padding = "5px 10px";
  btn.style.backgroundColor = "#6F6F6F";
});


// yesBtn.addEventListener("click", () => {
//   gay.style.display = "block";
//   modal.style.display = "none";
// });

// noBtn.addEventListener("mouseover", () => {
//   const randomX = Math.floor(
//     Math.random() * (window.innerWidth - modal.offsetWidth)
//   );
//   const randomY = Math.floor(
//     Math.random() * (window.innerHeight - modal.offsetHeight)
//   );
//   modal.style.top = `${randomY}px`;
//   modal.style.left = `${randomX}px`;
// });

// noBtn.addEventListener("click", () => {
//     const randomX = Math.floor(
//       Math.random() * (window.innerWidth - modal.offsetWidth)
//     );
//     const randomY = Math.floor(
//       Math.random() * (window.innerHeight - modal.offsetHeight)
//     );
//     modal.style.top = `${randomY}px`;
//     modal.style.left = `${randomX}px`;

// });
