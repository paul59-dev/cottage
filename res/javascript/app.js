// MATERIALIZE
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, {
        format: 'dd-mm-yyyy',
        months: [
            'Janvier',
            'Février',
            'Mars',
            'Avril',
            'Mai',
            'Juin',
            'Julliet',
            'Août',
            'Octobre',
            'Novembre',
            'Décembre'
        ]
    });

    var elems = document.querySelectorAll('.timepicker');
    var instances = M.Timepicker.init(elems);

    var elems = document.getElementById("select")
    var instances = M.FormSelect.init(elems);

    var elems = document.getElementById("hardware_material")
    var instances = M.FormSelect.init(elems);
});