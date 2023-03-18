var tabla = $('#tablatelevisores').dataTable({
    "aProcessing" : true,
    "aServerSide" : true,
    "ajax":{
        url:"controller/TelevisoresController.php?op=listar",
        type: "get",
        dataTYpe: "json",
        error: function(e){
            console.log(e.responseText);
        }
    }
});

$(document).on('click','#btnnuevotelevisor',function(){
    $('#televisormodal').modal('show');
    $('#titulomodal').html('Nuevo Registro');
})

function eliminar(id){
    swal.fire({
        title: 'eliminar',
        text: "Desea eliminar el registro?",
        icon: 'error',
        showCancelButton: true,
        confirmButtonText: 'Si',
        cancelButtonText: 'No'
    }).then((result)=>{
        if(result.isConfirmed){
            $.post('controller/TelevisoresController.php?op=eliminar',{idtelevisor:id},function(data){

            })
            $('#tablatelevisores').DataTable().ajax.reload();

            swal.fire(
                'Eliminado',
                'El registro se elimino correctamente',
                'success'
            )
        }
    })
}

/*
$(document).ready(function () {
    $('#tablatelevisores').DataTable();
});*/