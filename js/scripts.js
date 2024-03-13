let redirectLists = document.querySelectorAll("li");
redirectLists.forEach((listItem) => {
    listItem.addEventListener("click", ()=> {
        window.location.href = `/pages/${listItem.id}.php`;
    })

})


let menu = document.querySelector("#menu");
    let menuList = document.querySelector(".menu-list");
    let navText = document.querySelector(".navText");

    menu.addEventListener("click", () => {
        menuList.classList.toggle("translate-x-0");
        menuList.classList.toggle("translate-x-[-150%]");
        menu.classList.toggle("bg-slate-700");
        menu.classList.toggle("fixed");
        menu.classList.toggle("top-0");
        menu.classList.toggle("w-[5em]");
        menu.classList.toggle("pt-8");
        // menuList.classList.toggle("transition-all");
        // menuList.classList.toggle("duration-500");
        // navText.classList.toggle("transition-all");
        navText.classList.toggle("lg:text-7xl");
        menu.classList.toggle("text-gray-200");
        // menuList.toggle("rounded-lg")
        
        // navText.classList.toggle("duration-500")
    });

  


