<body>

    <div class="container d-flex flex-row justify-content-between mt-5">
        @foreach ($properties as $property)
            <div class="property-card ">

                @if ($brokerArea)
                <div class="card-header m-2 d-flex justify-content-between">
                    <button class="btn btn-details">Editar</button>
                    <button onclick="deleteProperty({{ $property->id }})" class="btn btn-details" >Excluir</button>
                </div>
                @endif

                <div class="image-container">
                    <img src="{{ asset($property->imagePaths[0]->path) }}" alt="Imóvel" class="property-image ">
                    <span class="status-badge btn-information">{{ $property->message }}</span>
                </div>

                <div class="card-content">
                    <div class="price">R${{ number_format($property->price, 2, ',', '.') }}</div>

                    <h3 class="title">{{ $property->name }}</h3>

                    <div class="location">
                        <i class="fas fa-map-marker-alt icon"></i>
                        Centro {{ $property->city->name }}
                    </div>

                    <div class="features">
                        <div class="feature">
                            <i class="fas fa-ruler icon"></i>
                            120 m²
                        </div>
                        <div class="feature">
                            <i class="fas fa-bed icon"></i>
                            {{ $property->rooms }}
                            @if ($property->rooms > 1)
                                Quartos
                            @else
                                Quarto
                            @endif
                        </div>
                        <div class="feature">
                            <i class="fas fa-bath icon"></i>
                            2 Banhos
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="feature">
                        <i class="fas fa-car icon"></i>
                        2 Vagas
                    </div>
                    <button class=" btn-information btn-details ">Ver Detalhes</button>
                </div>
            </div>
        @endforeach
    </div>


</body>


<style>
    .property-card {
        max-width: 20rem;
        background: white;
        border-radius: 0.5rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        overflow: hidden;
        transition: box-shadow 0.3s ease;
    }

    .property-card:hover {
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .image-container {
        position: relative;
        width: 100%;
        padding-bottom: 100%;
    }

    .property-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .status-badge {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background-color: #3B82F6;
        color: white;
        padding: 0.25rem 0.75rem;
        border-radius: 0.375rem;
        font-size: 0.875rem;
    }

    .card-content {
        padding: 1rem;
    }

    .price {
        color: #2563EB;
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .title {
        color: #1F2937;
        font-size: 1.125rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .location {
        display: flex;
        align-items: center;
        color: #4B5563;
        font-size: 0.875rem;
        margin-bottom: 1rem;
    }

    .features {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        margin-bottom: 1rem;
    }

    .feature {
        display: flex;
        align-items: center;
        color: #4B5563;
        font-size: 0.875rem;
    }

    .feature i {
        margin-right: 0.25rem;
    }

    .card-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.75rem 1rem;
        background-color: #F9FAFB;
        border-top: 1px solid #E5E7EB;
    }

    .btn-details {
        background-color: #2563EB;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 0.375rem;
        border: none;
        cursor: pointer;
        transition: background-color 0.2s ease;
    }

    .btn-details:hover {
        background-color: #1D4ED8;
    }

    .icon {
        width: 1rem;
        height: 1rem;
        margin-right: 0.25rem;
    }

    .btn {
        font-size: 0.7rem;
        font-weight: bold;
        color: var(--text-color);
        padding: 0.7rem;
        background: var(--primary-color);

    }

    .btn:hover {
        background: var(--primary-color);
        opacity: 0.8;
    }

    .btn-information {
        font-size: 1rem;
        font-weight: bold;
        color: var(--text-color);
        padding: 0.7rem;
        background: var(--primary-color);
    }
</style>


<script>
    function deleteProperty(id) {
        if (confirm("Tem certeza que deseja excluir este imóvel?")) {
            fetch(`/property/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => {
                if (response.ok) {
                    alert("Imóvel excluído com sucesso!");
                    location.reload(); // Atualiza a página
                } else {
                    alert("Erro ao excluir imóvel!");
                }
            })
            .catch(error => console.error("Erro:", error));
        }
    }
</script>
