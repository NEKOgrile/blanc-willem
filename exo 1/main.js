function newrole() {
    var containeurnewrole = document.querySelectorAll(".containeurnewrole");
    containeurnewrole.forEach((elem) => elem.classList.add("active"));

}

function nonactionmodifierrole() {
    var containeurnewrole = document.querySelectorAll(".containeurnewrole");
    containeurnewrole.forEach((elem) => elem.classList.remove("active"));
}