function ft_create() {
    var item = prompt("Enter a to do");

    if (item && item != "") {
        ft_addtolist(item);
    }
}

function ft_addtolist(item) {
    var div_element = document.createElement("div");
    var list = document.getElementById("ft_list");

    div_element.setAttribute("id", "item");
    div_element.setAttribute("onclick", "ft_delete(this)");
    div_element.appendChild(document.createTextNode(item));
    list.insertBefore(div_element, list.childNodes[0]);
}

function ft_delete(item) {
    if (window.confirm("Are you sure ?")) {
        item.remove();
    }
}

window.onunload = function() {
    var list = [];
    var ft_list = document.getElementById("ft_list");
    var item = ft_list.children;
    for (var i = 0; i < item.length; i++)
        list.unshift(item[i].innerHTML);
    document.cookie = JSON.stringify(list);
};

window.onload = function() {
    var list = document.cookie;
    if (list) {
        list = JSON.parse(list);
        list.forEach(item => {
            ft_addtolist(item);
        });
    }
};