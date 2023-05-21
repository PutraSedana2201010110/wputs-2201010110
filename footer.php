            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- Default to the left -->
                <strong>Copyright &copy; <b>UTS Pemrograman Web</b>.</strong> All rights reserved.
            </footer>
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
       
        <!-- Bootstrap 4 -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- InputMask -->
        <script src="assets/plugins/moment/moment.min.js"></script>
        <script src="assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- DataTables -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        
        <script src=assets/buttons.html5.min.js"></script>
        
        <script src="assets/dataTables.buttons.min.js"></script>
        <script src="assets/jszip.min.js"></script>
        <script src="assets/pdfmake.min.js"></script>
        <script src="assets/vfs_fonts.js"></script>
        <!-- Select2 -->
        <script src="assets/plugins/select2/js/select2.full.min.js"></script>
        <!-- AdminLTE App -->
        <script src="assets/js/adminlte.min.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->

        <script src="assets/js/switalert.js"></script>
       

        <script>
            $(function () {
                var pelanggan = $('#table-pelanggan').DataTable({
                    columnDefs: [
                        {
                            "searchable": false,
                            "targets": 0
                        },
                        {
                            "orderable": false,
                            "targets": [1,2,3,4,5]
                        },
                        {
                            "searchable": false,
                            "orderable": false,
                            "targets": 6
                        }
                    ],
                    order: [[ 0, 'asc' ]],
                    responsive: true,
                    autoWidth: false,
                    language: {
                        processing:     "Loading data...",
                        search:         "Cari :",
                        lengthMenu:     "Tampilkan _MENU_ entri",
                        info:           "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                        infoEmpty:      "Menampilkan 0 sampai 0 dari 0 entri",
                        infoFiltered:   "(disaring dari _MAX_ total entri)",
                        infoPostFix:    "",
                        loadingRecords: "Loading data...",
                        zeroRecords:    "Tidak ada item untuk ditampilkan",
                        emptyTable:     "Tidak ada data yang tersedia di tabel",
                        paginate: {
                            first:      "Pertama",
                            previous:   "Sebelumnya",
                            next:       "Selanjutnya",
                            last:       "Terakhir"
                        },
                        aria: {
                            sortAscending:  ": aktifkan untuk mengurutkan kolom dalam urutan menaik",
                            sortDescending: ": aktifkan untuk mengurutkan kolom dalam urutan menurun"
                        }
                    }
                });
             
                pelanggan.on( 'order.dt search.dt', function () {
                    pelanggan.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                        cell.innerHTML = i+1;
                    });
                }).draw();
            });
        </script>

       
        <script>
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
});
</script>

<script type="text/javascript">

var table;

    $(document).ready(function() {
        table = $('#tablereward').DataTable({

            processing: true, //Feature control the processing indicator.
            order: [], //Initial no order.
            //scrollY: 300,
            //scrollX: true,
            paging: true,
            ordering: false,
            info: false,
            searching: true,

            //Set column definition initialisation properties.
            columnDefs: [{
                targets: [0], //last column
                orderable: false, //set not orderable
            }, ],

            language: {
                zeroRecords: "Data Tidak Tersedia",
                lengthMenu: "Show _MENU_ Data Line",
                search: "Search:",
                paginate: {
                    "first": "<<",
                    "lasst": ">>",
                    "next": ">",
                    "previous": "<"
                },
                info: "", //"Menampilkan _START_ sampai _END_ dari _TOTAL_ baris data",
                infoEmpty: "",
                infoFiltered: ""
            },



            aLengthMenu: [
                [10, 25, 50, 100],
                [10, 25, 50, 100]
            ],

            iDisplayLength: 10,

        });


      });

    function reload_table() {
        table.ajax.reload(null, false); //reload datatable ajax
    }
 

function add_detail(){
    save_method = 'add';
    $('#add_detail_form')[0].reset(); 
    // reset form on modals
   
 
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
	$("#add_detail").modal({
				backdrop : "static",
				keyboard: false
			});
            $('#judul').text('Tambah Data Dosen');  
}

function save_detail(){
	$('#btnSave').text('Menyimpan...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
	
	var url_save;
	if($('#noid').val()  == '1'){
        url_save = '<?php echo ('function_user/save_edit');?>';
    } else {
        url_save = '<?php echo ('user/save');?>';
    } 
	
    // ajax adding data to database
    $.ajax({
        url : url_save,
        type: "POST",
        data: $('#add_detail_form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
            if(data.status) //if success close modal and reload ajax table
            {
				$("#add_detail").modal('hide');
            showStatus(data.status, data.info);
            }else {
                    for (var i = 0; i < data.inputerror.length; i++) {
                        $('[name="' + data.inputerror[i] + '"]').parent().parent().addClass('has-error');
                        $('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[i]);
                    }

                    
                }
           
            $('#btnSave').text('Simpan'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert(textStatus);
            $('#btnSave').text('Simpan'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

        }
    });
}

function editdata(id)
{
    save_method = 'update';
    $('#add_detail_form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : '<?php echo ('user/edit/');?>' + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="noid"]').val('1');    
            $('[name="id"]').val(data.id_user);
            $('[name="username"]').val(data.username);
            $('[name="password"]').val(data.password);
            $('[name="nama"]').val(data.nama_user);
            $('[name="hakakses"]').val(data.hak_akses);
            $('#judul').text('Edit Data User');
          
            $("#add_detail").modal({
				backdrop : "static",
				keyboard: false
			});

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}





function deletedata(id){
    Swal.fire({
        title: 'Peringatan',
        text: 'Yakin Hapus Data Ini',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonClass: 'btn-danger',
        confirmButtonText: 'OK',
        cancelButtonText: 'Batal',
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: '<?= ('user/delete/')?>'+id,
                type: 'POST',
                success: function(data){
                    var data = jQuery.parseJSON(data);
                    showStatus(data.status, 'Data Berhasil Di Hapus');
                },
                error: function(XMLHttpRequest){
                    alert(XMLHttpRequest.responseText);
                }
            });
        }
    })
}

function showStatus(status=null, text_show=null){
   if(status === 'success'){
        Swal.fire({
            title: 'Sukses',
            text: text_show,
            icon: 'success',
            confirmButtonText: 'OK',
            allowOutsideClick: false
        }).then((result) => {
            if (result.value) {
                window.location.reload(); 
            }
        })
    }
}


function changeLogo1(){
    $('#uploadLogo1').click();
    $('#uploadLogo1').change((e)=>{
        var reader = new FileReader();
        reader.onload = (ev)=>{
            $('#logoKategori1').attr('src', ev.target.result);
           

        };
        reader.readAsDataURL(e.target.files[0]);
        $('#btn-delete-cover').show();
    });
}



</script>
</body>
</html>
    </body>
</html>