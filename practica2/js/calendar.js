$(document).ready(function () {
    $('.submit-buscar').click(function() {
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
        numberOfMonths: 1,
        //dateFormat: "dd-mm-yy",
        onSelect: function (selected) {
            var dt = new Date(selected);
            var dtFormatted = dt.getFullYear() + '/'+ (dt.getMonth() + 1) + '/'+ dt.getDate() + ' 00:00:00';

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

            return [true];
        }
    }).find('a.ui-state-highlight')
    .removeClass('ui-state-highlight');
    
    $(".datepicker_fecha_devolucion").datepicker({
        minDate: 0,
         numberOfMonths: 1,
        //dateFormat: "dd-mm-yy",
        onSelect: function (selected) {
            var dt = new Date(selected);
            var dtFormatted = dt.getFullYear() + '/'+ (dt.getMonth() + 1) + '/'+ dt.getDate() + ' 00:00:00';

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

            return [true];
        }
    }).find('a.ui-state-highlight')
    .removeClass('ui-state-highlight');
});