<!-- Edit Modal -->
<div wire:ignore.self class="modal fade" id="EditDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="EditDataModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel"> Editar Producto:</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-body">
                <form id="FormEdit">
                
                    <div class="row">
                        <div class="col-xl-6">
                        
                            <input type="hidden" name="id" id="id">
                            <h6 class="modal-title mb-3  mt-2">SKU del producto:</h6>
                            <input id="sku" name="sku" class="form-control mb-3" type="text">
                            <span id="error_sku"  class="mb-5 text-red"></span>
                            <h6 class="modal-title mb-3 mt-2 ">Titulo del producto:</h6>
                            <input id="titulo" name="titulo" class="form-control  mb-3" type="text">
                            <span id="error_titulo"  class="mb-3 text-red"></span>
                            <h6 class="modal-title mb-3 mt-2 ">Productos en Stock</h6>
                                <input id="stock" name="stock" class="form-control  mb-3" type="text" value="">
                                <span id="error_titulo"  class="mb-3 text-red"></span>
                            <h6 class="modal-title mb-3 mt-2 ">Añade la foto principal del producto:</h6>
                            <div id="FileInputEdit" class="dropzone mb-3">
                            </div>
                            <span id="error_fp" class="mb-3 text-red"></span>


                        </div>
                        <div class="col-xl-6">
                            <h6 class="modal-title mb-3 mt-2" >Precio:</h6>
                        <input type=" text" id="precio" name="precio" class="form-control mb-3">
                                <span id="error_precio" class="mb-5 text-red"></span>
                               
                                <h6 class="modal-title mb-3 mt-2" >Categoria del producto:</h6>

                                <select name="id_categoria" id="id_categoria" class="form-control mb-3">
                                    <option value=""> Ninguno</option>
                                    @foreach($categorias as $categoria)
                                    <option value="{{$categoria->id}}"> {{$categoria->titulo}}</option>
                                    @endforeach
                                </select>
                                <span id="error_categoria" class="mb-3 text-red"></span>

                               
                        </div>
                    </div>
                 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="UpdatedProduct()">Guardar Cambios </button>
            </div>
            </form>
        </div>
    </div>
</div>