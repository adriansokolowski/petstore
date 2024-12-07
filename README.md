### Opis projektu
Petstore Manager to aplikacja oparta na frameworku Laravel, która integruje się z API Swagger Petstore. Umożliwia zarządzanie zasobami zwierząt poprzez operacje CRUD (Create, Read, Update, Delete) z prostym interfejsem użytkownika. Kod został zaprojektowany w sposób modularny, czytelny i zgodny z najlepszymi praktykami, co zapewnia łatwość dalszego rozwoju i utrzymania.

### Struktura projektu
Plik config/petstore.php centralizuje konfigurację API, w tym adres URL oraz endpointy dla operacji na zwierzętach. Dzięki temu kod aplikacji jest elastyczny i łatwy w konfiguracji.

Aplikacja korzysta z interfejsu HttpRequestHandlerInterface, który oddziela logikę HTTP od reszty kodu. Implementacja HttpRequestHandler obsługuje żądania HTTP do API Petstore i zarządza błędami, zwracając czytelne komunikaty w przypadku problemów.

Serwis PetService odpowiada za logikę biznesową związaną z zasobami Pet.

Obsługuje operacje CRUD, takie jak pobieranie listy zwierząt, dodawanie nowych rekordów, edycję oraz usuwanie.
Konfiguracja endpointów jest ładowana w konstruktorze serwisu, co eliminuje redundancję i upraszcza zarządzanie adresami API.
Kontrolery
Kontroler PetController obsługuje żądania użytkowników i komunikuje się z serwisem PetService. Metody takie jak index, create, store, edit, update i destroy realizują odpowiednie funkcje CRUD.

Kod został podzielony na odpowiednie warstwy: kontrolery, serwisy, walidacje, widoki i konfigurację. Dzięki temu jest łatwy w utrzymaniu i rozbudowie.

Zgodność z najlepszymi praktykami
Projekt stosuje zasady SOLID, co gwarantuje modularność i łatwość testowania, oraz DRY, eliminując powtarzanie kodu.

Gotowość na rozwój
Architektura projektu umożliwia łatwe dodawanie nowych funkcji lub zasobów, np. dodatkowych typów danych lub nowych endpointów API.
