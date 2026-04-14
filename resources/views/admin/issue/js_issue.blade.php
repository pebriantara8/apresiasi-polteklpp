<script>
    document.addEventListener("DOMContentLoaded", function () {
        const selectElement = document.getElementById("selectElementLuaran");

        const jenisBuku = document.getElementById("jenisBuku");
        const isbnBuku = document.getElementById("isbnBuku");
        const levelPublikasi = document.getElementById("levelPublikasi");
        const linkPublikasi = document.getElementById("linkPublikasi");
        const jenisPublikasi = document.getElementById("jenisPublikasi");
        const jenisHakCipta = document.getElementById("jenisHakCipta");
        selectElement.addEventListener("change", (event) => {
            const selectedValue = event.target.value;

            jenisBuku.disabled = false;
            isbnBuku.disabled = false;
            levelPublikasi.disabled = false;
            linkPublikasi.disabled = false;
            jenisHakCipta.disabled = false;
            jenisPublikasi.disabled = false;

            if (selectedValue === "1") {
                // Buku
                levelPublikasi.disabled = true;
                linkPublikasi.disabled = true;
                jenisHakCipta.disabled = true;
                jenisPublikasi.disabled = true;
            } else if (selectedValue === "2") {
                // Publikasi
                jenisBuku.disabled = true;
                isbnBuku.disabled = true;
                jenisHakCipta.disabled = true;
            } else if (selectedValue === "3") {
                // Prosiding
                jenisBuku.disabled = true;
                isbnBuku.disabled = true;
                jenisHakCipta.disabled = true;
            } else if (selectedValue === "4") {
                // HKI
                levelPublikasi.disabled = true;
                linkPublikasi.disabled = true;
                jenisBuku.disabled = true;
                isbnBuku.disabled = true;
                jenisPublikasi.disabled = true;
            } else {
            }
        });

        const btn_plus_penulis = document.getElementById("btn_tambah_penulis");
        btn_plus_penulis.addEventListener("click", function () {
            // document.getElementById("penulis11").disabled = true;
            let parent = document.getElementById('formPenulisParent');
            let elem = parent.querySelector('.input_penulis_element');
            let clone = elem.cloneNode(true);
            parent.appendChild(clone);

            let radios3 = document.getElementsByName('penulis_utama');
            let formPenulis = document.getElementsByClassName('form_input_penulis');
            for (let i = 0; i < radios3.length; i++) {
                if (i = radios3.length - 1) {
                    // document.querySelector(".form_input_penulis").value = "";
                    // console.log(document.querySelector(".form_input_penulis").value);
                }
            }

        });

        document.addEventListener('click', (event) => {
            if (event.target.classList.contains('btnDeleteElementPenulis')) {
                // check apakah elemen tinggal satu
                const elements = document.getElementsByClassName('btnDeleteElementPenulis');
                if (elements.length === 1) {
                    // tidak lakukan apa-apa
                } else {
                    const elementPenulisHapus = event.target.parentElement;
                    elementPenulisHapus.remove();
                }

            }
            if (event.target.classList.contains('btnDeleteElementPenulisX')) {
                // check apakah elemen tinggal satu
                const elements = document.getElementsByClassName('btnDeleteElementPenulis');
                if (elements.length === 1) {
                    // tidak lakukan apa-apa
                } else {
                    const elementPenulisHapus = event.target.parentElement.parentElement;
                    elementPenulisHapus.remove();
                }

            }
        });
    });

    // document.getElementById("myInput").disabled = true;
    // t = {};
    // function n(r) {
    //     var i = t[r];
    //     if (void 0 !== i) return i.exports;
    //     var o = (t[r] = { exports: {} });
    //     return (e[r](o, o.exports, n), o.exports);
    // }
    // ((n.d = (e, t) => {
    //     for (var r in t)
    //         n.o(t, r) &&
    //             !n.o(e, r) &&
    //             Object.defineProperty(e, r, { enumerable: !0, get: t[r] });
    // }),
    //     (n.o = (e, t) => Object.prototype.hasOwnProperty.call(e, t)));
    // var r = n(842).default;
    // r(document).ready(() => {
    //     (r(".btn-open-options").click(function () {
    //         r(".ui-theme-settings").toggleClass("settings-open");
    //     }),
    //         // r(".close-sidebar-btn").click(function () {
    //         //     var e = r(this).attr("data-class");
    //         //     r(".app-container").toggleClass(e);
    //         //     var t = r(this);
    //         //     t.hasClass("is-active")
    //         //         ? t.removeClass("is-active")
    //         //         : t.addClass("is-active");
    //         // }),
    //         // r(".switch-container-class").on("click", function () {
    //         //     var e = r(this).attr("data-class");
    //         //     (r(".app-container").toggleClass(e),
    //         //         r(this)
    //         //             .parent()
    //         //             .find(".switch-container-class")
    //         //             .removeClass("active"),
    //         //         r(this).addClass("active"));
    //         // }),
    //         // r(".switch-theme-class").on("click", function () {
    //         //     var e = r(this).attr("data-class"),
    //         //         t = ".app-container";
    //         //     ("body-tabs-line" == e &&
    //         //         (r(t).removeClass("body-tabs-shadow"), r(t).addClass(e)),
    //         //         "body-tabs-shadow" == e &&
    //         //             (r(t).removeClass("body-tabs-line"), r(t).addClass(e)),
    //         //         r(this)
    //         //             .parent()
    //         //             .find(".switch-theme-class")
    //         //             .removeClass("active"),
    //         //         r(this).addClass("active"));
    //         // }),
    //         // r(".switch-header-cs-class").on("click", function () {
    //         //     var e = r(this).attr("data-class"),
    //         //         t = ".app-header";
    //         //     (r(".switch-header-cs-class").removeClass("active"),
    //         //         r(this).addClass("active"),
    //         //         r(t).attr("class", "app-header"),
    //         //         r(t).addClass("header-shadow " + e));
    //         // }),
    //         r(".btn_tambah_penulis").on("click", function () {
    //             alert("asdasdasd");
    //             // var e = r(this).attr("data-class"),
    //             //     t = ".app-sidebar";
    //             // (r(".switch-sidebar-cs-class").removeClass("active"),
    //             //     r(this).addClass("active"),
    //             //     r(t).attr("class", "app-sidebar"),
    //             //     r(t).addClass("sidebar-shadow " + e));
    //         }));
    // });

</script>