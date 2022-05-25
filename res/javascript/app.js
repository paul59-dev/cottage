// VARIABLE
const object = document.getElementById("object")
const nom = document.getElementById("name")
const lasname = document.getElementById("lastname")
const email = document.getElementById("email")

document.addEventListener('DOMContentLoaded', function() {
    // MATERIALIZE
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, {
        format: 'dd-mmm-yyyy',
        i18n: {
            months: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Novembre", "Décembre"],
            monthsShort: ["Jan", "Fév", "Mar", "Avr", "Mai", "Juin", "Juil", "Août", "Sep", "Nov", "Déc"],
            weekdaysShort: ["Lun", "Mar", "Mer", "Jeu", "Ven", "Sam", "Dim"]
        }
    });

    var elems = document.querySelectorAll('.timepicker');
    var instances = M.Timepicker.init(elems);

    var elems = document.getElementById("select")
    var instances = M.FormSelect.init(elems);

    var elems = document.getElementById("hardware_material")
    var instances = M.FormSelect.init(elems);

    // ScrollReveal
    const sr = ScrollReveal()

    sr.reveal(".title", {
        origin: 'top',
        distance: '50px',
        duration: 2000
    })

    sr.reveal('.reveal-interval', { interval: 200 })
    sr.reveal('.room-interval', { 
        interval: 500,
        origin: 'top',
        distance: '50px' 
    })

});

function hour() {
    // DATE
    const start_time = document.getElementById("time1")
    const end_time = document.getElementById("time2")
    const date = document.getElementById("date")
    const today = new Date()

    console.log(start_time.value)
    console.log(today.getDate())

    if (start_time.value === end_time.value || start_time.value > end_time.value) {
        swal({
            icon: 'warning',
            title: 'Oops...',
            text: "L' heure n'est pas valide !",
        })
        return false
    }

    return true
}

