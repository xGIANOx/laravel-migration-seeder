@extends('layouts.app')
@section('content')
    <div class="p-5 mb-4 bg-black text-white rounded-0">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">TODAY'S TRAINS</h1>
        </div>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3 g-4">

                @forelse ($trains as $train)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title">{{$train->departure_station}}</h4>   
                            - <h4 class="card-title">{{$train->arriva_station}}</h4>
                            <p class="card-text">{{$train->train_no}}</p>
                        </div>
                        <div class="card-footer">
                            <strong>Arrival Time:</strong>
                            {{$train->arrival_time}}
                        </div>
                    </div>
                </div>

                @empty
                <div class="col">
                    <p>No trains today...</p>
                </div>
                @endforelse

            </div>
        </div>
    </section>
@endsection