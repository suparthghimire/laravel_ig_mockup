const likeBtn = document.querySelectorAll("button");
// const att = document.getAttribute("console");

console.log(likeBtn[0]);

// likeBtn.addEventListener("click", () => {
//     console.log(1);
// });
likeBtn.forEach(btn =>
    btn.addEventListener("click", function() {
        console.log(1);
    })
);
