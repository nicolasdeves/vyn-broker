@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <!-- Coluna da esquerda (Carrossel de imagens) -->
            <div class="col-md-6">
                <div id="propertyCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($property->imagePaths as $index => $image)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <img src="{{ asset($image->path) }}" class="d-block w-100 rounded" alt="Imagem do imóvel">
                            </div>
                        @endforeach
                    </div>
                    <!-- Botões de navegação -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#propertyCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#propertyCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </div>

            <!-- Coluna da direita (Detalhes do imóvel) -->
            <div class="col-md-6">
                <div class="card shadow-sm p-4">
                    <h2 class="text-primary">{{ $property->name }}</h2>
                    <h4 class="text-success">R$ {{ number_format($property->price, 2, ',', '.') }}</h4>
                    <p><i class="fas fa-map-marker-alt"></i> {{ $property->city->name }} - {{ $property->neighborhood->name }}</p>

                    <ul class="list-unstyled">
                        <li class="mt-1" class="mt-1"><i class="fas fa-ruler"></i> {{ $property->size }} m²</li>

                        @if ($property->rooms > 0)
                        <li class="mt-1"><i class="fas fa-bed"></i> {{ $property->rooms }}
                        @if ($property->rooms > 1)
                        Quartos
                        @else
                        Quarto
                        @endif
                        </li>
                        @endif

                        @if ($property->bathrooms > 0)
                        <li class="mt-1"><i class="fas fa-bath"></i> {{ $property->bathrooms }}
                        @if ($property->bathrooms > 1)
                        Banheiros
                        @else
                        Banheiro
                        @endif
                        </li>
                        @endif

                        @if ($property->garage > 0)
                        <li class="mt-1"><i class="fas fa-car"></i> {{ $property->garage }}
                        @if ($property->garage > 1)
                        Vagas na garagem
                        @else
                        Vaga na garagem
                        @endif
                        </li>
                        @endif

                        <li class="mt-1"><i class="fa-solid fa-circle-info"></i> {{ $property->complement }}</li>

                    </ul>

                    <p class="text-muted">{{ $property->description }}</p>

                    <a href="#" class="btn btn-primary w-100">Entrar em Contato</a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .carousel-item img {
            width: 100%;
            height: 30rem;
            /* Define um tamanho fixo */
            object-fit: cover;
            /* Mantém a proporção e corta se necessário */
            border-radius: 10px;
        }
    </style>
@endsection
