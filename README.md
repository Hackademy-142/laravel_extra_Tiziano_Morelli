Crea Chirper, un clone di Twitter  
Traccia:
Creare un nuovo progetto Laravel
Utilizzare tutte le best practice usate finora
Named Routes
Controller
Components
Scaffolding con Laravel Vite
Autenticazione con Laravel Fortify
login
register
logout
(Vorrei che quello qui sotto lo proviate a fare con Livewire, se non ve la sentite con CRUD normale va benissimo)
Modello Chirp
campo content
operazioni CRUD [leggi bene]
in homepage in alto, form per scrivere un chirp
in homepage, si vedono tutti i chirps degli utenti sotto forma di cards dal piu' recente
su ogni chirp, bottone di modifica e cancellazione

Relazione One-to-Many tra User e Chirp

Modello Tag
campo content
operazioni CRUD [leggi bene]
sotto al chirp, inserire un input dove scrivere i tag - es. Sport, Serie B, Bari
nella store dei chirps, creare un tag per ogni inserimento
i tag saranno a prescindere tutti in minuscolo
se il tag gia' esiste, non creare uno nuovo (cerca sulla documentazione!)

Relazione Many-to-Many tra Tag e Chirp

Creare una pagina profilo dove vedere i propri chirps

Pushare su GitHub con nome laravel_extra_nome_cognome