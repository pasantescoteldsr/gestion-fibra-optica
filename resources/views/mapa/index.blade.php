@extends('layouts.app')

@section('page_css')
    <link rel="stylesheet" href="{{ asset('assets/mapa/resources/ol.css')  }}">
    <link rel="stylesheet" href="{{ asset('assets/mapa/resources/fontawesome-all.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('assets/mapa/resources/ol-layerswitcher.css')  }}">
    <link rel="stylesheet" href="{{ asset('assets/mapa/resources/qgis2web.css')  }}">
    <style>
        .search-layer {
            top: 65px;
            left: .5em;
        }

        .ol-touch .search-layer {
            top: 80px;
        }
    </style>
    <style>
        html,
        body {
            background-color: #ffffff;
        }

        .ol-control button {
            background-color: #f8f8f8 !important;
            color: #000000 !important;
            border-radius: 0px !important;
        }

        .ol-zoom,
        .geolocate,
        .gcd-gl-control .ol-control {
            background-color: rgba(255, 255, 255, .4) !important;
            padding: 3px !important;
        }

        .ol-scale-line {
            background: none !important;
        }

        .ol-scale-line-inner {
            border: 2px solid #f8f8f8 !important;
            border-top: none !important;
            background: rgba(255, 255, 255, 0.5) !important;
            color: black !important;
        }
    </style>
    <style>
        #map {
            width: 100%;
            height: 500px;
        }
    </style>
@endsection


@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Mapa</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- Mostrar Mapa --}}
                            <div id="map">
                                <div id="popup" class="ol-popup">
                                    <a href="#" id="popup-closer" class="ol-popup-closer"></a>
                                    <div id="popup-content"></div>
                                </div>
                            </div>
                            {{-- Fin Mostrar Mapa --}}
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('assets/mapa/resources/qgis2web_expressions.js')  }}"></script>
    <script src="{{ asset('assets/mapa/resources/polyfills.js')  }}"></script>
    <script src="{{ asset('assets/mapa/resources/functions.js')  }}"></script>
    <script src="{{ asset('assets/mapa/resources/ol.js')  }}"></script>
    <script src="{{ asset('assets/mapa/resources/ol-layerswitcher.js')  }}"></script>
    <script src="{{ asset('assets/mapa/layers/trazados_0.js')  }}"></script>
    <script src="{{ asset('assets/mapa/layers/textocalles_1.js')  }}"></script>
    <script src="{{ asset('assets/mapa/layers/postes_2.js')  }}"></script>
    <script src="{{ asset('assets/mapa/styles/trazados_0_style.js')  }}"></script>
    <script src="{{ asset('assets/mapa/styles/textocalles_1_style.js')  }}"></script>
    <script src="{{ asset('assets/mapa/styles/postes_2_style.js')  }}"></script>
    <script src="{{ asset('assets/mapa/layers/layers.js')  }}" type="text/javascript"></script>
    <script src="{{ asset('assets/mapa/resources/Autolinker.min.js')  }}"></script>
    <script src="{{ asset('assets/mapa/resources/qgis2web.js')  }}"></script>
@endsection
