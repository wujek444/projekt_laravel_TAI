@extends('layout')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1 class="regulaminH1">Formularz do wypożyczenia gier:</h1>
        </div>
        <div class="col-sm-8">
            <form id="formularz" name="formularzWypozyczenia" action="mailto:wujek444@gmail.com" method="post">
                <div class="form-group">
                    <label for="wybierzGre">Wypożycz grę:</label>
                    <select class="form-control" id="wybierzGre" required>
                        <option value disabled >-----------Za 3 zł/dzień:----------</option>
                        <option value="3" selected="selected">Jenga</option>
                        <option value="3">Jungle Speed</option>
                        <option value disabled >-----------Za 5 zł/dzień:----------</option>
                        <option value="5">Carcassonne</option>
                        <option value="5">Zakazana Wyspa</option>
                        <option value="5">Neuroshima Hex</option>
                        <option value="5">Splendor</option>
                        <option value="5">King of Tokyo</option>
                        <option value="5">Munchkin (różne rodzaje)</option>
                        <option value disabled >-----------Za 7 zł/dzień:----------</option>
                        <option value="7">Talisman</option>
                        <option value="7">Relic</option>
                        <option value="7">Descent</option>
                        <option value="7">Kingdom Builder</option>
                        <option value disabled >-----------Za 10 zł/dzień:----------</option>
                        <option value="10">Eldritch Horror</option>
                        <option value="10">Arkham Horror</option>
                        <option value="10">Betrayal in the House on the Hill</option>
                        <option value="10">Warhammer: Inwazja</option>
                        <option value="10">Warhammer Quest</option>
                        <option value="10">Robinson Crusoe: Przygoda na przeklętej wyspie</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ileDni">Na ile dni: </label>
                    <input type="number" class="form-control" id="ileDni" name="ileDni" max="7" min="1" value="1" required>
                </div>
                <div class="form-group">
                    <label for="koszt">Koszt(w zł):</label>
                    <input type="number" class="form-control" name="koszt" id="koszt" disabled="disabled" placeholder="Koszt">
                    <br/>
                    <button type="button" class="btn btn-danger" onclick="oblicz()">Oblicz koszt</button>
                </div>
                <div class="form-group">
                    <div class="page-header">Podaj swoje dane osobowe:</div>
                    <div class="form-group">
                        <label for="imie">Imię:</label>
                        <input type="text" class="form-control" id="imie" name="imie"
                               placeholder="Imię" required pattern="[A-Za-ząęśćżźóńł]{2,10}" title="Można używać jedynie liter!">
                    </div>
                    <div class="form-group">
                        <label for="nazwisko">Nazwisko:</label>
                        <input type="text" class="form-control" id="nazwisko" name="nazwisko" placeholder="Nazwisko" required
                               pattern="[A-Za-ząęśćżźóńł]{2,20}" title="Można używać jedynie liter!">
                    </div>
                    <div class="form-group">
                        <label for="dataUrodzenia">Data urodzenia:</label>
                        <input type="date" class="form-control" id="dataUrodzenia" name="dataUrodzenia" required>
                    </div>
                    <div class="form-group">
                        <label for="kobieta">Płeć:</label>
                        <div class="radio-inline">
                            <label><input type="radio" name="plec" value="k" id="kobieta">Kobieta</label>
                        </div>
                        <div class="radio-inline">
                            <label><input type="radio" name="plec" value="m">Mężczyzna</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="adresEmail">E-mail:</label>
                        <input type="email" class="form-control" name="email" id="adresEmail" placeholder="adres@domena.com" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="page-header">Wybierz sposób zapłaty:</div>
                    <div class="form-group">
                        <select class="form-control" id="sposobZaplaty" name="sposobZaplaty" required>
                            <option value="" disabled>--------------</option>
                            <option value="przelew">Przelew</option>
                            <option>Przy odbiorze</option>
                        </select>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="zapoznanoSie" required>
                            Czy zapoznałeś się z regulaminiem? (wymagane do wypożyczenia)</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Wypożycz!</button>
                        <button type="reset" class="btn btn-danger">Wyczyść formularz</button>
                        <button type="button" class="btn btn-primary" onclick="store()">Zapisz do localStorage</button>
                        <script  type="text/javascript">
                            function store(){
                                var inputWybierzGre= document.getElementById("wybierzGre");
                                var inputIleDni= document.getElementById("ileDni");
                                var inputImie= document.getElementById("imie");
                                var inputNazwisko= document.getElementById("nazwisko");
                                var inputDataUrodzenia= document.getElementById("dataUrodzenia");
                                var inputEmail= document.getElementById("email");

                                localStorage.setItem("wybierzGre", inputWybierzGre.options[inputWybierzGre.selectedIndex].value);
                                localStorage.setItem("ileDni", inputIleDni.value);
                                localStorage.setItem("imie", inputImie.value);
                                localStorage.setItem("nazwisko", inputNazwisko.value);
                                localStorage.setItem("dataUrodzenia", inputDataUrodzenia.value);
                                localStorage.setItem("email", inputEmail.value);
                            }
                        </script>
                        <button type="button" class="btn btn-default" onclick="load()">Wczytaj z localStorage</button>
                        <script type="text/javascript">
                            function load() {
                                var outputWybierzGre= document.getElementById("wybierzGre");
                                var outputIleDni= document.getElementById("ileDni");
                                var outputImie= document.getElementById("imie");
                                var outputNazwisko= document.getElementById("nazwisko");
                                var outputDataUrodzenia= document.getElementById("dataUrodzenia");
                                var outputEmail= document.getElementById("email");

                                outputWybierzGre.value = localStorage.getItem("wybierzGre");
                                outputIleDni.value = localStorage.getItem("ileDni");
                                outputImie.value = localStorage.getItem("imie");
                                outputNazwisko.value = localStorage.getItem("nazwisko");
                                outputDataUrodzenia.value = localStorage.getItem("dataUrodzenia");
                                outputEmail.value = localStorage.getItem("email");
                            }
                        </script>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-4">
            <img src="img/business.png" class="img-responsive" alt="business">
        </div>
    </div>
@endsection