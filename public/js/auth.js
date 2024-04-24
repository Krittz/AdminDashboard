const inputs = document.querySelectorAll("input");

function addcl(element) {
    let parent = element.parentNode.parentNode;
    parent.classList.add("focus");
}

function remcl(element) {
    let parent = element.parentNode.parentNode;
    if (element.value == "") {
        parent.classList.remove("focus");
    }
}

inputs.forEach((input) => {
    input.addEventListener("focus", () => addcl(input));
    input.addEventListener("blur", () => remcl(input));
});
