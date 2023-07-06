
$(function() {

	// Setting datatable defaults
    $.extend( $.fn.dataTable.defaults, {
        stateSave: true,
        stateDuration:-1,
        autoWidth: false,
        // columnDefs: [{ 
        //     orderable: false,
        //     width: '100px',
        //     targets: [ 5 ]
        // }],
        dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
        language: {
            search: '<span>검색</span> _INPUT_',
            lengthMenu: '<span>Show:</span> _MENU_',
            paginate: { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
        },
        drawCallback: function () {
            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
        },
        preDrawCallback: function() {
            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
        }
    });

	$('.datatable-basic').DataTable({
        stateSave: true,
        stateDuration:-1
    });



	 // Add placeholder to the datatable filter option
    $('.dataTables_filter input[type=search]').attr('placeholder','Type to filter...');
     // Enable Select2 select for the length option
    $('.dataTables_length select').select2({
        minimumResultsForSearch: Infinity,
        width: 'auto'
    });
});

function excel_download(){
    $.post('/admin/excel_download', function(resp){});
}
