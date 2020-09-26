@push('js')

    <script>
        let scrollPos = window.scrollY;
        const header = document.getElementById("header");
        const navContent = document.getElementById("nav-content");
        const navAction = document.getElementById("nav-action");
        const brandName = document.getElementById("brand-name");
        const toToggle = document.querySelectorAll(".toggleColour");

        document.addEventListener('scroll', function () {

            /*Apply classes for slide in bar*/
            scrollPos = window.scrollY;

            if (scrollPos > 10) {
                header.classList.add("bg-white");
                navAction.classList.remove("bg-white");
                navAction.classList.add("gradient");
                navAction.classList.remove("text-gray-800");
                navAction.classList.add("text-white");
                //Use to switch toggleColour colours
                for (let i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-gray-800");
                    toToggle[i].classList.remove("text-white");
                }
                header.classList.add("shadow");
                navContent.classList.remove("bg-gray-100");
                navContent.classList.add("bg-white");
            } else {
                header.classList.remove("bg-white");
                navAction.classList.remove("gradient");
                navAction.classList.add("bg-white");
                navAction.classList.remove("text-white");
                navAction.classList.add("text-gray-800");
                //Use to switch toggleColour colours
                for (let i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-white");
                    toToggle[i].classList.remove("text-gray-800");
                }

                header.classList.remove("shadow");
                navContent.classList.remove("bg-white");
                navContent.classList.add("bg-gray-100");

            }

        });


    </script>

    <script>

        const navMenuDiv = document.getElementById("nav-content");
        const navMenu = document.getElementById("nav-toggle");

        document.onclick = check;

        function check(e) {
            const target = (e && e.target) || (Event && Event.target);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else {
                        navMenuDiv.classList.add("hidden");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv.classList.add("hidden");
                }
            }

        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t === elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }
    </script>

@endpush
