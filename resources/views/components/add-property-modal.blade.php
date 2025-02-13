<div class="modal fade" id="add-property-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionar Imóvel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="property-form" enctype="multipart/form-data" action="/add-property" method="POST">
                    @csrf
                    <div class="d-flex flex-row">
                        <div class="col-4">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="col-4">
                            <label for="city_id" class="form-label">Cidade</label>
                            <select class="form-select" id="city" name="city_id" required>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-4">
                            <label for="neighborhood_id" class="form-label">Bairro</label>
                            <select class="form-select" id="neighborhood_id" name="neighborhood_id" required>
                                @foreach ($neighborhoods as $neighborhood)
                                    <option value="{{ $neighborhood->id }}">{{ $neighborhood->name }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="d-flex flex-row">
                        <div class="col-4">
                            <label for="property_type_id" class="form-label">Tipo do Imóvel</label>
                            <select class="form-select" id="property_type_id" name="property_type_id" required>
                                @foreach ($propertyTypes as $propertyType)
                                    <option value="{{ $propertyType->id }}">{{ $propertyType->type }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-4">
                            <label for="street" class="form-label">Rua</label>
                            <input type="text" class="form-control" id="street" name="street" required>

                        </div>

                        <div class="col-4">
                            <label for="number" class="form-label">Número</label>
                            <input type="text" class="form-control" id="number" name="number" required>

                        </div>

                    </div>

                    <div class="d-flex flex-row">

                        <div class="col-4">
                            <label for="property_code" class="form-label">Código</label>
                            <input type="text" class="form-control" id="property_code" name="property_code" required>
                        </div>

                        <div class="col-2">
                            <label for="rooms" class="form-label">Dormitórios</label>
                            <input type="number" class="form-control" id="rooms" name="rooms" min="1"
                                required>
                        </div>

                        <div class="col-2">
                            <label for="property_deal_id" class="form-label">Negócio</label>
                            <select class="form-select" id="property_deal_id-deal" name="property_deal_id" required>
                                @foreach ($propertyDeals as $propertyDeal)
                                    <option value="{{ $propertyDeal->id }}">{{ $propertyDeal->deal }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-2">
                            <label class="form-label">Mobiliado?</label>
                            <select class="form-select" id="furnished" name="furnished" required>
                                <option value="yes">Sim</option>
                                <option value="no">Não</option>
                            </select>
                        </div>
                    </div>

                    <div class="d-flex flex-row">

                        <div class="col-8">
                            <label for="complement" class="form-label">Complemento/Observação</label>
                            <input type="text" class="form-control" id="complement" name="complement" required>
                        </div>

                        <div class="col-4">
                            <label for="price" class="form-label">Valor</label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="property-images" class="form-label">Fotos do Imóvel</label>
                        <input type="file" class="form-control" id="property-images" name="property_images[]"
                            multiple accept="image/*">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary" form="property-form">Salvar</button>
            </div>
        </div>
    </div>
</div>
