const likeBtn = document.querySelectorAll(".button");

console.log(likeBtn);

// likeBtn.addEventListener("click", () => {
//     console.log(1);
// });
likeBtn.forEach(btn =>
    btn.addEventListener("click", function() {
        console.log(1);
    })
);
