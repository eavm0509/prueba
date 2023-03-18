<div class="modal fade" id="televisormodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" id="formtelevisores">
                <div class="modal-header">
                    <h5 class="modal-title" id="titulomodal"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-layout form-layout-1">

                        <div class="row mg-b-25">
                            <div class="col-lg-4">
                                <input type="hidden" id="idtelevisor" name="idtelevisor">
                                <div class="form-group">
                                    <label class="form-control-label">Marcas: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="txtmarca" id="txtmarca"
                                        placeholder="Ingrese la Marca">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Modelos: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="txtmodelo" id="txtmodelo"
                                        placeholder="Ingrese el modelo">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Serie: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="txtserie" id="txserie"
                                        placeholder="Ingrese la serie">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Tamaño: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="txttamaño" id="txttamaño"
                                        placeholder="Ingrese el tamaño">
                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Año:</label>
                                    <input class="form-control" type="text" name="txttamaño" id="txttamaño"
                                        placeholder="Ingrese el tamaño">
                                </div>
                            </div>

                        </div>


                        <!-- form-layout-footer -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>