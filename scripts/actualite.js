let main = document.querySelector("main");

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

axios.get("../lib/blog.php?blogAction=select_all").then(Response => {
    Response.data.forEach(post => {
        let div = create("div", main);
        let span = create("span", div);
        let title = create("h3", span, post.title);
        let date = create("h6", span, post.datePost)
        let content = create("p", div, post.content);
    });
});