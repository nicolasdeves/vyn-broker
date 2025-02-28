<form action="/imoveis" method="POST">
    @csrf
    <div class="form d-flex justify-content-center align-items-center w-100 p-5">
        <div class="d-flex flex-column filter w-100">
            <!-- Botões Alugar/Comprar -->
            <div class="buttons mb-4">
                <div class="d-flex justify-content-center">
                    <div class="btn-group gap-3" role="group">
                        <button type="button" class="btn rent-buy-buttons" id="rent-button"
                            onclick="selectOption('Aluguel')">Alugar</button>
                        <button type="button" class="btn rent-buy-buttons" id="buy-button"
                            onclick="selectOption('Venda')">Comprar</button>
                    </div>
                </div>
            </div>

            <input type="hidden" name="rent_or_buy" id="action-input">

            <div class="container-fluid mb-4">
                <div class="row gap-3">
                    <div class="col">
                        <label for="property_type" class="form-label">Tipo do imóvel</label>
                        <select class="form-control" name="property_type" placeholder="">
                            <option value="">Selecione o tipo do imóvel</option>
                            @foreach ($propertyTypes as $propertyType)
                                <option value="{{ $propertyType->id }}"> {{ $propertyType->type }} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col">
                        <label for="city" class="form-label">Cidade</label>
                        <select class="form-control" name="city" placeholder="">
                            <option value="">Selecione uma cidade</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col">
                        <label for="neighborhood" class="form-label">Bairro</label>
                        <select class="form-control" name="neighborhood" placeholder="">
                            <option value="">Selecione o bairro</option>
                            @foreach ($neighborhoods as $neighborhood)
                                <option value="{{ $neighborhood->id }}">{{ $neighborhood->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="container-fluid mb-4">
                <div class="row gap-3">
                    <div class="col">
                        <label for="bedrooms" class="form-label">Dormitórios</label>
                        <select class="form-control" name="bedrooms" placeholder="">
                            <option value="">Selecione a quantidade de dormitórios</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3+</option>

                        </select>
                    </div>

                    <div class="col">
                        <label for="property_code" class="form-label">Código do imóvel</label>
                        <input type="text" class="form-control" name="property_code" placeholder="">
                    </div>

                    <div class="col">
                        <label for="furniture" class="form-label">Mobília</label>
                        <select class="form-control" name="furniture" placeholder="">
                            <option value="">Selecione se o imóvel deve estar mobiliado</option>
                            <option value='n' >Não</option>
                            <option value='y'>Sim</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Botão Buscar -->
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn search-button">Buscar</button>
            </div>
        </div>
    </div>
</form>


<style>
    .form {
        background-image: url("{{ asset('images/site/homes.jpg') }}");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>


<style>
    label {
        font-size: 20px;
        font-weight: bold;
        color: var(--text-color)
    }

    .rent-buy-buttons {
        font-size: 2rem !important;
        font-weight: bold;
        color: var(--text-color);
        padding: 0.3em;

        background: var(--primary-color);

        width: 7em
    }

    .search-button {
        font-size: 2rem !important;
        font-weight: bold;
        color: var(--text-color);
        padding: 0.3em;

        background: var(--primary-color);

        width: 7em
    }


    .btn:hover {
        background: var(--primary-color);
        opacity: 0.8;
    }

    .active {
        opacity: 0.8;
    }
</style>

<script>
    function selectOption(option) {
        document.getElementById('action-input').value = option;

        const rentButton = document.getElementById('rent-button');
        const buyButton = document.getElementById('buy-button');

        if (option === 'Aluguel') {
            rentButton.classList.add('active');
            buyButton.classList.remove('active');
        } else if (option === 'Venda') {
            buyButton.classList.add('active');
            rentButton.classList.remove('active');
        }
    }
</script>
