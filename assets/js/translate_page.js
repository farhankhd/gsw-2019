$(function() {

    var t = {
        "Registration applications for MIT GSW 2019 are now open!": {
            sp: "La inscripción para MIT GSW 2019 ya está abierta!",
            en: "Registration applications for MIT GSW 2019 are now open!",
        },
        "Selected applications will receive free tickets to attend. For more information, see the ": {
            sp: "Las solicitudes seleccionadas recibirán entradas gratis para asistir. Para más información, consulte ",
            en: "Selected applications will receive free tickets to attend. For more information, see the "
        },
        "Registration page.": {
            sp: "la página de Inscripción.",
            en: "Registration page."
        },
        "WHY ATTEND?": {
            sp: "¿POR QUÉ ASISTIR?",
            en: "WHY ATTEND?",
        },
        "Transform your ideas into successful ": {
            sp: "Transforme sus ideas en nuevas empresas ",
            en: "Transform your ideas into successful "
        },
        "startups": {
            sp: "startupess",
            en: "startups"
        }
    }

    var _t = $('body').translate({ lang: "en", t: t });
    var str = _t.g("translate");
    console.log(str);

    // _t.lang("sp");

    // $(".lang_selector").click(function(ev) {
    //     var lang = $(this).attr("data-value");
    //     _t.lang(lang);

    //     console.log(lang);
    //     ev.preventDefault();
    // });



});