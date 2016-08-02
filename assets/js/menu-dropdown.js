    $(".has-mega-dropdown").hover(
            function() {
                var dropdownTarget = $(this).data("dropdown");
                $(dropdownTarget).toggleClass("is-active");
            }
            );
