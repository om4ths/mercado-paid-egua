var imported = document.createElement('script');
imported.src = 'js/imagem-perfil.js';
document.head.appendChild(imported); 

$(document).ready(function(){
    $('label[data-confirm]').click(function(ev){
        var href = $(this).attr('href')
        if(!$('#confirm-delete').length){
            $('body').append('<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Selecionar Foto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="php/img_cliente.php" enctype="multipart/form-data"> 
                            
                            <input type="file" name="c_img" id="file">
                                <label for="file" data-toggle="modal" data-target="#foto-perfil"><i class="uil uil-camera-plus"></i>
                                </label><input type="submit" value="Enviar arquivo" />
                                </div>
                                </form > 
                                <img id="photo-preview">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                        </div></div></div> </div>     
                                        <script src="js/imagem-perfil.js"></script>)');
        }
        $('#dataConfirmOK').attr('href',href);
        $ ('#confirm-delete').modal({shown:true});
        return false;
    });

    
});