// MATERIALIZE
document.addEventListener('DOMContentLoaded', function() {
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

    // DATE
    document.getElementById("btn_send").addEventListener("submit", (event) => {
        const start_time = document.getElementById("time1")
        const end_time = document.getElementById("time2")
        event.preventDefault()

        console.log(start_time.value)

        if (start_time.value <= end_time.value || start_time.value === end_time.value) {
            alert("coucou")
        }
    })
});
