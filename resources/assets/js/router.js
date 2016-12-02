// See: http://www.paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/

THREEJECT = {
    common: {
        init: function() {

        }
    }
};

ROUTER = {
    exec: function(controller, action) {
        var ns = THREEJECT,
            action = (action === undefined) ? "init" : action;
        if (controller !== "" && ns[controller] && typeof ns[controller][action] == "function") {
            ns[controller][action]();
        }
    },

    init: function() {
        var body = document.body,
            controller = body.getAttribute("data-controller"),
            action = body.getAttribute("data-action");
        ROUTER.exec("common");
        ROUTER.exec(controller);
        ROUTER.exec(controller, action);
    }
};
$(document).ready(ROUTER.init);