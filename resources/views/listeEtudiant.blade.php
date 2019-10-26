@extends('layout')

@section('contenu')

<div class=" content">
    <div class="row">
        <div class="col-md-12">
            <div class="card  card-plain">
                <div class="card-header">
                    <h4 class="card-title">Liste des Etudiants qui ont fait cours le <span
                            style="color:darkmagenta;"><?=date('d-m-Y')?></span>
                    </h4>
                    <!-- <p class="category"> Here is a subtitle for this table</p> -->
                </div>
                <form method="post" action="/imprimer">
                    @csrf
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table tablesorter " id="">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>
                                            Nom
                                        </th>
                                        <th>
                                            Prenom
                                        </th>
                                        <th>
                                            Classe
                                        </th>
                                        <th class="text-center">
                                            Date de Naissance
                                        </th>
                                        <th class="text-center">
                                            Lieu de Naissance
                                        </th>
                                        <th class="text-center">
                                            Present(e) ou Absent(e)
                                        </th>
                                        <th class="text-center">
                                            supprimer
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <p>
                                        @foreach($all_etudiants ?? '' as $etudiant)
                                        <tr>
                                            <td>
                                                {{$etudiant->nom}}
                                            </td>
                                            <td>
                                                {{$etudiant->prenom}}
                                            </td>
                                            <td>
                                                {{$etudiant->classe}}
                                            </td>
                                            <td class="text-center">
                                                {{$etudiant->date_naiss}}
                                            </td>
                                            <td class="text-center">
                                                {{$etudiant->lieu_naiss}}
                                            </td>
                                            <td class="text-center">

                                                <input type="checkbox" name="imprimer[]"
                                                    value="{{$etudiant->nom}}{{$etudiant->prenom}}{{$etudiant->classe}}">
                                            </td>
                                            <td class="text-center">
                                                <!-- <a href="{{URL::to('supprEtudiant/'.$etudiant->id)}}"
                                                    class="tim-icons icon-trash-simple"></a> -->
                                                <a href="/userUpdate" class="tim-icons icon-trash-simple"></a>
                                            </td>
                                        </tr> @endforeach
                                </tbody>
                            </table>

                        </div>
                        <input type="submit" class="btn btn-primary btn-round" value="Imprimer">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> @endsection