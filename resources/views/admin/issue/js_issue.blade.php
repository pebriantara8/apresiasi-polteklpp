<script>
    document.addEventListener("DOMContentLoaded", function () {
        const selectElement = document.getElementById("selectElementLuaran");

        // DISABLE FORM INPUT
        const jenisBuku = document.getElementById("jenisBuku");
        const isbnBuku = document.getElementById("isbnBuku");
        const levelPublikasi = document.getElementById("levelPublikasi");
        const linkPublikasi = document.getElementById("linkPublikasi");
        const jenisPublikasi = document.getElementById("jenisPublikasi");
        const jenisHakCipta = document.getElementById("jenisHakCipta");
        const noHakCipta = document.getElementById("noHakCipta");
        selectElement.addEventListener("change", (event) => {
            const selectedValue = event.target.value;

            jenisBuku.disabled = false;
            isbnBuku.disabled = false;
            levelPublikasi.disabled = false;
            linkPublikasi.disabled = false;
            jenisHakCipta.disabled = false;
            jenisPublikasi.disabled = false;
            noHakCipta.disabled = false;

            if (selectedValue === "1") {
                // Buku
                levelPublikasi.disabled = true;
                linkPublikasi.disabled = true;
                jenisHakCipta.disabled = true;
                noHakCipta.disabled = false;
                jenisPublikasi.disabled = true;
            } else if (selectedValue === "2") {
                // Publikasi
                jenisBuku.disabled = true;
                isbnBuku.disabled = true;
                jenisHakCipta.disabled = true;
                noHakCipta.disabled = true;
            } else if (selectedValue === "3") {
                // Prosiding
                jenisBuku.disabled = true;
                isbnBuku.disabled = true;
                jenisHakCipta.disabled = true;
                noHakCipta.disabled = true;
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

        // DISABLE OPTION SELECT LEVEL PUBLIKASI
        const jp = document.getElementById("jenisPublikasi");

        jp.addEventListener('change', (event) => {
            const lp1 = document.getElementById("levelPublikasi").options[1]
            const lp2 = document.getElementById("levelPublikasi").options[2]
            const lp3 = document.getElementById("levelPublikasi").options[3]
            const lp4 = document.getElementById("levelPublikasi").options[4]
            const lp5 = document.getElementById("levelPublikasi").options[5]
            const lp6 = document.getElementById("levelPublikasi").options[6]
            const lp7 = document.getElementById("levelPublikasi").options[7]
            const lp8 = document.getElementById("levelPublikasi").options[8]
            const lp9 = document.getElementById("levelPublikasi").options[9]
            const lp10 = document.getElementById("levelPublikasi").options[10]
            const lp11 = document.getElementById("levelPublikasi").options[11]
            const lp12 = document.getElementById("levelPublikasi").options[12]
            const lp13 = document.getElementById("levelPublikasi").options[13]
            const lp14 = document.getElementById("levelPublikasi").options[14]
            const lp15 = document.getElementById("levelPublikasi").options[15]
            const lp16 = document.getElementById("levelPublikasi").options[16]
            const lp17 = document.getElementById("levelPublikasi").options[17]

            lp1.disabled = true;
            lp2.disabled = true;
            lp3.disabled = true;
            lp4.disabled = true;
            lp5.disabled = true;
            lp6.disabled = true;
            lp7.disabled = true;
            lp8.disabled = true;
            lp9.disabled = true;
            lp10.disabled = true;
            lp11.disabled = true;
            lp12.disabled = true;
            lp13.disabled = true;
            lp14.disabled = true;
            lp15.disabled = true;
            lp16.disabled = true;
            lp17.disabled = true;

            const jpSelected = event.target.value;
            console.log('Selected value:', jpSelected);
            if (jpSelected == 1) {
                lp1.disabled = false;
                lp2.disabled = false;
                lp3.disabled = false;
                lp4.disabled = false;
            } if (jpSelected == 2) {
                lp5.disabled = false;
                lp6.disabled = false;
                lp7.disabled = false;
                lp8.disabled = false;
            } if (jpSelected == 3) {
                lp9.disabled = false;
                lp10.disabled = false;
                lp11.disabled = false;
                lp12.disabled = false;
                lp13.disabled = false;
                lp14.disabled = false;
            } if (jpSelected == 4) {
                lp9.disabled = false;
                lp10.disabled = false;
                lp11.disabled = false;
                lp12.disabled = false;
                lp13.disabled = false;
                lp14.disabled = false;
                lp15.disabled = false;
                lp16.disabled = false;
                lp17.disabled = false;
            } if (jpSelected == 5) {
                lp15.disabled = false;
            } if (jpSelected == 6) {
                lp16.disabled = false;
            } if (jpSelected == 7) {
                lp17.disabled = false;
            }
        });



        // TAMBAH FORM INPUT PENULIS
        const btn_plus_penulis = document.getElementById("btn_tambah_penulis");
        btn_plus_penulis.addEventListener("click", function () {
            let radioButtonCh = document.getElementsByName('penulis_utama')[0];

            let parent = document.getElementById('formPenulisParent');
            let elem = parent.querySelector('.input_penulis_element');
            let clone = elem.cloneNode(true);
            parent.appendChild(clone);

            let radios3 = document.getElementsByName('penulis_utama');
            let formPenulis = document.getElementsByClassName('form_input_penulis');
            let nop = 0;
            for (let i = 0; i < radios3.length; i++) {
                if (i == 0) {
                    if (radioButtonCh.checked = true) {
                        document.getElementsByName('penulis_utama')[0].checked = "checked";
                    }
                }
                if (i == (radios3.length - 1)) {
                    document.getElementsByName('penulis_bank[]')[i].value = "";
                    document.getElementsByName('penulis_norek[]')[i].value = "";
                    document.getElementsByName('penulis[]')[i].value = "";
                }
                document.getElementsByName('penulis_utama')[i].value = i;
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