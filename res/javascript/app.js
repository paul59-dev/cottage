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
});

// DATE
const select_date = document.getElementById("date")
let date = new Date()

let day = date.getDay()
let month = date.getMonth()
let year = date.getFullYear()

const select_hour1 = document.getElementById("time1")
const select_hour2= document.getElementById("time2")

document.getElementById("btn_send").addEventListener("click", () => {
    if (select_date.getDay() === date.getDay() && select_date.getMonth() === date.getMonth() && select_date.getFullYear() === date.getFullYear()) 
    {
        if (select_hour1.getHours() < date.getHours() && select_hour1.getMinutes() < date.getMinutes()) 
        {
            if (select_hour2.getHours() < date.getHours() && select_hour2.getMinutes() < date.getMinutes())
            {
                alert("Date incorrect !")
            }
        }
    }
})

