$(document).ready(function () {
    var alquileres_str = $(".alquilar-form-wrapper").data("alquileres");
    var parts = alquileres_str.split(";");
    var check_in = [];


    for (var i = 0; i < parts.length - 2; i=i+2) {
        check_in.push([parts[i],parts[i+1]]);
    }

    //var check_in = [["2018-05-25 00:00:00", "2018-05-31 00:00:00"], ["2018-06-15 00:00:00", "2018-06-21 00:00:00"]];

    $('#submit-alquilar').click(function() {
        {
            if ($('#fecha_recogida').val() != null && $('#fecha_recogida').val() != '')
                if ($('#fecha_devolucion').val() != null && $('#fecha_devolucion').val() != '')
                    return true;
                else return false;
            else return false;
        }
    });

    $('#limpiar-fechas').click(function() {
        $(".datepicker_fecha_recogida").datepicker('option','minDate', 0);
        $(".datepicker_fecha_devolucion").datepicker('option','minDate', 0);
        $(".datepicker_fecha_recogida").datepicker('option','maxDate', null);
        $(".datepicker_fecha_devolucion").datepicker('option','maxDate', null);
        $(".datepicker_fecha_recogida").datepicker('setDate', null);
        $(".datepicker_fecha_devolucion").datepicker('setDate', null);

        $('#fecha_recogida').val('');
        $('#fecha_devolucion').val('');
    });

    $(".datepicker_fecha_recogida").datepicker({
        minDate: 0,
        numberOfMonths: 2,
        //dateFormat: "dd-mm-yy",
        onSelect: function (selected) {
            var dt = new Date(selected);
            var dtFormatted = dt.getFullYear() + '/'+ (dt.getMonth() + 1) + '/'+ dt.getDate() + ' 00:00:00';

            var maxDate = null;

            for (var i = 0; i < check_in.length; i++) {
                if (Array.isArray(check_in[i])) {
                    var from = new Date(check_in[i][0]);
                    if (dt < from && (maxDate == null || from < maxDate))
                        maxDate = from;
                }
            }

            $(".datepicker_fecha_devolucion").datepicker("option", "maxDate", maxDate);

            $('#fecha_recogida').val(dtFormatted);
            $(".datepicker_fecha_devolucion").datepicker("option", "minDate", dt);
        },
        beforeShowDay: function(date) {
            var current = new Date(date);
            var fecha_devolucion = $(".datepicker_fecha_devolucion").datepicker('getDate');
            var fecha_recogida = $(".datepicker_fecha_recogida").datepicker('getDate');

            if(fecha_devolucion != null && fecha_recogida != null)
                if(new Date(fecha_recogida) < current  && current < new Date(fecha_devolucion))
                    return [true, 'fecha-rango-seleccion'];
                else if(new Date(fecha_recogida) < current  && current <= new Date(fecha_devolucion))
                    return [true, 'fecha-seleccionada'];


            for (var i = 0; i < check_in.length; i++) {
                if (Array.isArray(check_in[i])) {
                    var from = new Date(check_in[i][0]);
                    var to = new Date(check_in[i][1]);
                    if (current >= from && current <= to) return [false, 'fecha-ocupada'];
                }
            }
            return [check_in.indexOf(date) == -1];
        }
    }).find('a.ui-state-highlight')
    .removeClass('ui-state-highlight');
    
    $(".datepicker_fecha_devolucion").datepicker({
        minDate: 0,
        numberOfMonths: 2,
        //dateFormat: "dd-mm-yy",
        onSelect: function (selected) {
            var dt = new Date(selected);
            var dtFormatted = dt.getFullYear() + '/'+ (dt.getMonth() + 1) + '/'+ dt.getDate() + ' 00:00:00';
            var minDate = null;

            for (var i = 0; i < check_in.length; i++) {
                if (Array.isArray(check_in[i])) {
                    var to = new Date(check_in[i][1]);
                    if (dt > to && (minDate == null || to > minDate))
                        minDate = to;
                }
            }

            $(".datepicker_fecha_recogida").datepicker("option", "minDate", minDate);

            $('#fecha_devolucion').val(dtFormatted);
            $(".datepicker_fecha_recogida").datepicker("option", "maxDate", dt)
        },
        beforeShowDay: function(date) {
            var current = new Date(date);
            var fecha_devolucion = $(".datepicker_fecha_devolucion").datepicker('getDate');
            var fecha_recogida = $(".datepicker_fecha_recogida").datepicker('getDate');

            if(fecha_devolucion != null && fecha_recogida != null)
                if(new Date(fecha_recogida) < current  && current < new Date(fecha_devolucion))
                    return [true, 'fecha-rango-seleccion'];
                else if(new Date(fecha_recogida) <= current  && current < new Date(fecha_devolucion))
                    return [true, 'fecha-seleccionada'];

            for (var i = 0; i < check_in.length; i++) {
                if (Array.isArray(check_in[i])) {
                    var from = new Date(check_in[i][0]);
                    var to = new Date(check_in[i][1]);
                    if (current >= from && current <= to) return [false, 'fecha-ocupada'];
                }
            }
            return [check_in.indexOf(date) == -1];
        }
    }).find('a.ui-state-highlight')
    .removeClass('ui-state-highlight');
});