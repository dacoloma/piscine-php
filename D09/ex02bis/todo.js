function ft_addtolist(item) {
    $("#ft_list").prepend("<div id='item'>" + item + "</div>");


}
window.onload = function() {
    var list = document.cookie;
    if (list) {
        list = JSON.parse(list);
        list.forEach(item => {
            ft_addtolist(item);
        });
    }
};

$(document).ready(function() {


    $("#new").click(function() {
        var item = prompt("Enter a to do");

        if (item && item != "") {
            ft_addtolist(item);
            var children = $("#ft_list").children();
        }
    });

    $("#item").click(function() {
        if (window.confirm("Are you sure ?")) {
            item.remove();
        }
    });


    window.onunload = function() {
        var list = [];

        var children = $("#ft_list").children();
        children.each(function() {
            list.unshift($(this).text());
        });
        document.cookie = JSON.stringify(list);
    };

});