@extends('layout')
@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="regulaminH1">Regulamin</h1>
    </div>
    <div class="col-sm-8">
        <h3>Przed wypożyczeniem gry należy zapoznać się z poniższym regulaminem:</h3>
        <ol>
            <li>Można wypożyczyć tylko jedną grę na raz.</li>
            <li>Grę można wypożyczyć maksymalnie na okres jednego tygodnia.</li>
            <li>Wypożyczoną grę należy oddać w terminie. Za każdy dzień po
                po przekroczeniu terminu będzie naliczana opłata w wysokości 5 zł/dzień.</li>
            <li>Grę wypożycza się podając swoje dane osobowe. Przy odbiorze gry należy okazać
                dokument potwierdzający tożsamość.</li>
            <li>Odbioru gry należy dokonać osobiście, lub po okazaniu dokumentu osoby wypożyczającej.</li>
            <li>Gra będzie wydana jedynie po dokonaniu opłaty. Dostępne formy zapłaty:
                <ul>
                    <li>przelew</li>
                    <li>przy odbiorze w lokalu wypożyczalni</li>
                </ul>
            </li>
            <li>Za ewentualne uszkodzenia wypożyczalnych gier, odpowiedzialność
                finansową ponosi osoba wypożyczająca.</li>
        </ol>
    </div>
    <div class="col-sm-4">
        <div class="thumbnail thumbRegulamin">
            <img src="img/obey.png" class="img-responsive" alt="obey">
        </div>
    </div>
</div>
@endsection