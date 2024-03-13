let redirectLists = document.querySelectorAll("li");
redirectLists.forEach((listItem) => {
    listItem.addEventListener("click", ()=> {
        console.log(listItem.id);
    })

})