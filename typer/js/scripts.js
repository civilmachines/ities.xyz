(function(e) {
    "use strict";
    jQuery(document).ready(function() {

        if (e("#typer").length > 0) {
            e("[data-typer-targets]").typer()
        }
    });
})(jQuery)