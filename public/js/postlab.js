$(document).ready(function () {

    var url = window.location;
    
    $('.nav a[href="' + url + '"]').parent().addClass('active');
    $('.nav a').filter(function () {
        return this.href == url;
    }).parent().addClass('active');

    $(document).on('click', '#contact_us', function () {

        $('html, body').animate({
            scrollTop: $("#ContactUs").offset().top
        }, 1800);
    });

    $(document).on('click', '.packageSize', function (e) {

        e.preventDefault();

        var package = parseInt($(this).attr('id'));

        $('.packageSize').each(function (index, object) {

            var kg = parseInt(($('.packageSize')[index].id));

            if (kg !== package)
            {
                $('.packageSize').removeClass('select-package img');
            }

        });

        $(this).addClass('select-package img');
        //set textbox value
        $('#package').val(package);
    });


    //Datepicker
    $('#embeddingDatePicker')
            .datepicker({
                format: 'mm/dd/yyyy'
            })
            .on('changeDate', function (e) {
                // Set the value for the date input
                $("#selectedDate").val($("#embeddingDatePicker").datepicker('getFormattedDate'));
            });

});