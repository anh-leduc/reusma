var table = $('#data_table').DataTable({
    //responsive: true,
    select: true,
});

var advanced_table = $("#advanced_table").DataTable({
    //responsive: true,
    //select: true,
    sDom: 'lrtip',
    ordering: false

});

function filterGlobal() {
    $('#advanced_table').DataTable().search(
        $('#global_filter').val()
    ).draw();
}

function filterColumn(i) {
    $('#advanced_table').DataTable().column(i).search(
        $('#col' + i + '_filter').val()
    ).draw();
}

$(document).ready(function() {
    $('#data_table tbody').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        } else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });

    $('input.global_filter').on('keyup click', function() {
        filterGlobal();
    });
    $('input.column_filter').on('keyup click', function() {
        filterColumn($(this).attr('data-column'));
    });

    $('#advanced_table').on('click', '.clickable-row', function(event) {
        if ($(this).hasClass('bg-secondary')) {
            $(this).removeClass('bg-secondary');
        } else {
            $(this).addClass('bg-secondary').siblings().removeClass('bg-secondary');
        }
    });
});