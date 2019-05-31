function ft_create() {
    var item = prompt("Enter a to do");

    if (item != "") {
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
    // document.getElementById('ft_list').appendChild(div_element);
}

function ft_delete(item) {
    if (window.confirm("Are you sure ?")) {
        item.remove();
    }
}

window.onunload = function() {
    var todo = ft_list.children;
    var newCookie = [];
    for (var i = 0; i < todo.length; i++)
        newCookie.unshift(todo[i].innerHTML);
    document.cookie = JSON.stringify(newCookie);
};

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var cookie = getCookie("HelloWorld");
    console.log(cookie);
    if (cookie == "") {
        console.log("Checking cookie");
        setCookie();
    }
}



window.onunload = function() {
    var todo = ft_list.children;
    var newCookie = [];
    for (var i = 0; i < todo.length; i++)
        newCookie.unshift(todo[i].innerHTML);
    document.cookie = JSON.stringify(newCookie);
};