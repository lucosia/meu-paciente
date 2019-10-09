@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                    <input type="text" class="form-control" placeholder="Pesquisar..." name="" value="">
                </div>
                <div class="card-body">
                    <div class="row" id="pacientList">
                        <div class="col-12">
                            <div v-for="i in [1,2,3,4]">
                                <a  href="#" role="button" class="btn btn-outline-primary pacient-list-button ativo" >
                                    <span class="pacient-span-list">
                                        joaozinho @{{i}}
                                    </span>
                                    <span>
                                        <i class="fas fa-chevron-right"></i>
                                    </span>
                                </a>
                            </div>
                            <a  href="#" role="button" class="btn btn-outline-danger pacient-list-button desativado" >
                                <span class="pacient-span-list">
                                    joaozinho @{{i}}
                                </span>
                                <span>
                                    <i class="fas fa-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
