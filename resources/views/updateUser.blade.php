@extends('layout')


@section('contenu')
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-toggle d-inline">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <a class="navbar-brand" href="javascript:void(0)"></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav ml-auto">
                    <li class="separator d-lg-none"></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar -->
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Ajouter Etudiant</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/user">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-5 pr-md-1">
                                    <div class="form-group">
                                        <label>Prenom</label>
                                        <input type="text" class="form-control" name="prenom" placeholder="Adama"
                                            value="{{ old('prenom') }}">

                                        @if($errors->has('nom'))
                                        {{$errors->first('nom')}}
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3 px-md-1">
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input type="text" class="form-control" name="nom" placeholder="DIOP"
                                            value="{{ old('nom') }}">

                                        @if($errors->has('nom'))
                                        {{$errors->first('nom')}}
                                        @endif
                                    </div>
                                </div>
                                <div class=" col-md-4 pl-md-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Classe</label>
                                        <input type="text" class="form-control" name="classe"
                                            placeholder="pamboup@gmail.com" value="{{ old('classe') }}">
                                        @if($errors->has('classe'))
                                        {{$errors->first('classe')}}
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class=" row">
                                <div class="col-md-6 pr-md-1">
                                    <div class="form-group">
                                        <label>Date de Naissance</label>
                                        <input type="date" class="form-control" name="ddn" placeholder="12/12/2019"
                                            value="<?=date("Y-m-d")?>">
                                    </div>
                                </div>
                                <div class="col-md-6 pl-md-1">
                                    <div class="form-group">
                                        <label>Lieu de Naissance</label>
                                        <input type="text" class="form-control" name="ldn" placeholder="Dakar"
                                            value="{{ old('ldn') }}">
                                        @if($errors->has('ldn'))
                                        {{$errors->first('ldn')}}
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class=" card-footer">
                                <button type="submit" class="btn btn-fill btn-primary">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
</div>
@endsection