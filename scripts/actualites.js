let main = document.querySelector("main");

/* Create an element based on the DOM
createDO(tagName, container, text, class_, id) -> element
    tagName : string := Type of the element's tag
    container : document object := container of the new element
    text : string (optional) := inner text of the new element
    class_ : string (optional) := class of the new element
    id : string (optional) := id of the new element

    element : document object := new element
*/
function createDO(tagName, container, text=null, class_=null, id=null) {
    let element = document.createElement(tagName);
    container.appendChild(element);
    if (text){
        element.appendChild(document.createTextNode(text));
    }
    if (class_){
        element.classList.add(class_);
    }
    if (id){
        element.id = id;
    }
    return element
}

axios.get("../lib/blog.php?blogAction=select_all").then(Response => {
    Response.data.forEach(post => {
        let div = createDO("div", main, null, "blogWrapper");
        let title = createDO("h3", div, post.title, "blogTitle");
        let date = createDO("p", div, post.datePost, "blogDate")
        let content = createDO("p", div, post.content, "blogContent");
    });
});