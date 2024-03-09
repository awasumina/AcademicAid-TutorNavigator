about.addEventListener("click", function(e){
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
