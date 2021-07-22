$('#Tahun').on('change', function () {
    var Tahun = document.getElementById("Tahun").value;
    getData(Tahun);
});


$('#Prodi').on('change', function () {
    var Prodi = document.getElementById("Prodi").value;
    getData(Prodi);
});

$(document).on('click', '#export-excel', function () {
    var htmltable = document.getElementById('table-export');
    var html = htmltable.outerHTML;
    window.open('data:application/vnd.ms-excel,' + encodeURIComponent(html));
});


$(document).on('click', '#export-excel1', function () {
    var htmltable1 = document.getElementById('table-export1');
    var html1 = htmltable.outerHTML;
    window.open('data:application/vnd.ms-excel,' + encodeURIComponent(html));
});




$(document).ready(function () {
    $('.tabel-1').DataTable();

    var Tahun = document.getElementById("Tahun").value;
    getData(Tahun);
});




$(document).ready(function () {
    $('.tabel-2').DataTable();

    var Prodi = document.getElementById("Prodi").value;
    getData(Prodi);
});



function getData($tahun) {
    $('#body-tabel-1').html('<tr class="animated fadeIn"><td colspan="14" class="text-center"><img src="../file/app/loading-2.gif" alt=""></td></tr>');

    $.ajax({
        url: 'getData/' + $tahun,
        type: 'POST',
        // dataType: 'JSON',
        success: function (result) {
            $('.tabel-1').DataTable().destroy(); //Id Tabel
            $('#body-tabel-1').html(''); //Id Tabel Body

            $('#body-tabel-1').html(result);
            $('.tabel-1').DataTable();
        }
    });
}





function getFile($prodi) {
    $('#body-tabel-2').html('<tr class="animated fadeIn"><td colspan="14" class="text-center"><img src="../file/app/loading-2.gif" alt=""></td></tr>');

    $.ajax({
        url: 'getFile/' + $prodi,
        type: 'POST',
        // dataType: 'JSON',
        success: function (result) {
            $('.tabel-2').DataTable().destroy(); //Id Tabel
            $('#body-tabel-2').html(''); //Id Tabel Body

            $('#body-tabel-2').html(result);
            $('.tabel-2').DataTable();
        }
    });
}

