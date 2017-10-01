// DATE PICKER

function objDatePicker(obj1) {
    $(document).ready(function() {
        var date_input = $('input[name=' + obj1 + ']');
        var container = $('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        var options = { format: 'dd.mm.yyyy', container: container, todayHighlight: true, autoclose: true };
        date_input.datepicker(options);
    })
}
