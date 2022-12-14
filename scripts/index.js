let blogWrapperWrapper = document.querySelector("#blogWrapperWrapper");

/* Create an element based on the DOM
create(tagName, container, text, class_, id) -> element
    tagName : string := Type of the element's tag
    container : document object := container of the new element
    text : string (optional) := inner text of the new element
    class_ : string (optional) := class of the new element
    id : string (optional) := id of the new element

    element : document object := new element
*/
function create(tagName, container, text=null, class_=null, id=null) {
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

axios.get("/~XAMMM/lib/blog.php?blogAction=3").then(Response => {
    Response.data.forEach(post => {
        let div = create("div", blogWrapperWrapper, null, "blogWrapper");
        let title = create("h3", div, post.title, "blogTitle");
        let date = create("p", div, post.datePost, "blogDate")
        let content = create("p", div, post.content, "blogContent");
    });
});