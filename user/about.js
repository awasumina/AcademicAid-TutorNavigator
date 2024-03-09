const btns = document.querySelectorAll(".btn");
const about =  document.querySelector(".about");
const articles = document.querySelectorAll(".content");

// about.addEventListener("click", function(e){
//     // console.log(e.target); // about ko sabai clicked child lai return garxa.

//     const id = e.target.dataset.id;

//     if(id) {
//         //remove active from other buttons

//         btns.forEach(function (btn) {
//             btn.classList.remove("active");
//         });
        
//         e.target.classList.add("active");
        

//         //hide other articles
//         articles.forEach( function (article){
//             article.classList.remove("active");
        
//         });

//        const element = document.getElementById(id);
//         element.classList.add("active");
//         // console.log(element);
        
//     }

// });


about.addEventListener("click", function (e) {
    const id = e.target.dataset.id;
    console.log("Clicked button ID:", id);

    if (id) {
        // remove active from other buttons
        btns.forEach(function (btn) {
            btn.classList.remove("active");
        });

        // add active to the clicked button
        e.target.classList.add("active");

        // hide other articles
        articles.forEach(function (article) {
            article.classList.remove("active");
        });

        const element = document.getElementById(id);
        element.classList.add("active");
    }
});