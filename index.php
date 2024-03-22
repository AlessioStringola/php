<?php 

// <!-- Php è un linguaggio interpretato, lato server e si basa sul OOP(Object Oriented Programming), lato server vuol dire che PhP non viene eseguito dal browser, ma dal server(locale nel nostro caso) -->

// Per scrivere php creiamo un file con estensione .php e apriamo un tag di apertura(<?php), per stampare il codice scriviamo sul terminale php  nomefile.php, in questo modo si esegue il file, come il console.log() in js. In PhP non possiamo farlo perchè la pagina php non può essere collegata al file Html, infatti php è in grado di manipolare l' Html creando egli stesso una pagina Html lato server qualora ci fosse una richiesta lato client.

// Le variabili PhP
// Le variabili sono locazioni di memoria che contengonon dati

// Dichiarazione di una variabile
// $x; 

// Assegnazione di una variabile, echo() ci permette di stampare codice sul terminale
// $x='x';
// echo $x;

// Tipi di dato:

// Primitivi

// -Interi(Integer);
// -Decimali(float);
// -Boolean;
// -string;

// Composti

// -Array
// -Array associativi
// -Oggetti

// $array=[1,'ciao',false,];
// Per accedere agli elementi degli array si deve indicare la posizione con l' indice. Per esempio $array[2] rappresenta il valore booleano false che in console stampa uno spazio vuoto perchè false non ha valore.L'echo() converte tutto in stringa.
// echo $array[2];
// Per stampare tutto l' array si usa il var_dump().
// var_dump($array).Il var-dump non converte tutto in string, ma ci stampa il valore dell' elemento selezionato.

// Array associativi

// $array2=['username1','email1','password1'];
// A questo array, che verrà usato in futuro per salvare dati degli utenti, associamo un Array in modo che l' indice corrisponda alla definizione, per esempio username=username1, e-mail= email1, è un Array con all' interno coppie chiave=>valore
// $arrayassociativo=[
// "username"=>'username1',
// "e-mail"=>'email1',
// "password"=>'password1'
// ];
// In questo modo gli indici vengono rimpiazzati da indici che decidiamo noi.
// var_dump($arrayassociativo);

// Gli array associativi ci servono quando vogliamo cercare un valore specifico in un array molto grande, come ad esempio un database in un gestionale, ma con gli array associativi riusciamo a cercare in modo veloce quello che vogliamo. Per esempio
// var_dump($arrayassociativo["password"]);

// Condizioni e cicli

// Condizione switch
// $number=9;
// switch($number){
//     case 1:echo "$number è 1\n";break;
//     case 2:echo "$number è 2\n";break;
//     case 3:echo "$number è 3\n";break;
//     case 4:echo "$number è 4\n";break;
//     default:echo "$number è $number\n";break;
// };

// Condizione if else if

// if($number==="9"){
//     echo "$number è 19\n";
// } else if($number=="9"){
//     echo "$number è 9\n";
// } else{
//     echo "$number è $number\n";
// }

// Ciclo for
// $array3=[2,4,6,8,10];
// for($i=0; $i<count($array3);$i++){
//     echo "$array3[$i]";
// };

// Ciclo while
// $i=0;
// while($i<count($array3)){
//     echo "$array3[$i]";
//     $i++;
// };

// Ciclo foreach
// foreach($array3 as $el){
//     echo $el;
// };

// Funzioni
// -Funzioni built-in
// -Funzioni User-function

// function nomefunzione($formali){
    // return $soluzionefunzione;
// };
// nomefunzione($reali);

// In PhP le funzioni riconoscono solo le variabili all'interno dello scoop locale.
// Immaginiamo la funzione come un bunker dove i parametri formali sono l' entrata e il return l' uscita. Se assegnassimo un valore ad una variabile all' esterno della funzione, cioè nello scoop globale, la funzione non riconoscerebbe la variabile, perchè la funzione non vede all' infuori di se stessa.

// Esempio

// $x=41;
// function leggi($y){
//    echo $y; 
// }
// leggi($x);
// In questo caso la funzione non può accedere a $x perchè $x è all' esterno della funzione, ma inserendola nel parametro reale, il valore di quest' ultima passa all' interno di $y che verrà stampata sul terminale, infatti $y è all' interno della funzione, quindi nello scoop locale.

// function returnn($y){
// return $y+$y;
// }
// $y=returnn($x);
// echo $y;
// In questo caso invece sempre a causa del fatto che la funzione returnn non può vedere all' esterno, inseriamo $x nel parametro reale, $y che è il parametro formale viene salvato all' interno della funzione. Una volta che la funzione ha eseguito l' algoritmo $y viene salvata attraverso il return. Ma all' esterno della funzione, il risultato non è ancora stato salvato, formalmente è all' interno dell' invocazione. Basterà solo salvare l' invocazione con appunto la variabile che abbiamo inserito nel parametro formale. Quindi avremo l' output della funzione.

// $somma=$y+10;
// echo $somma;
// Qui sfruttiamo il risultato della funzione returnn() per aggiungere un numero e assegnare un valore alla variabile $somma.Questo procedimento è definito passaggio per valore.

// Esempio con un parametro reale mancante

// $n1=5;
// $n2=100;
// function somma($x,$y=2){
//     $somma=$x+$y;
//     echo $somma;
// }
// somma($n1);
// In questo caso manca il secondo parametro reale che in teoria doveva essere $n2, quindi scatta il fatal error sul terminale, ma se assegnassimo un valore di default nel parametro formale, la funzione verrebbe eseguita.

// Esempio spread element

// $n3=16;
// $n4=16;
// $n5=16;
// $n6=16;
// $n7=16;

// function somma2(...$n){
//     $somma=0;
// foreach($n as $el){
//     $somma=$somma+$el;
// }
// $somma=array_reduce($n, function($somma,$el){
//     return $somma+$el;
// });
// echo $somma;
// }
// somma2($n3,$n4,$n5,$n6,$n7);
// Qua utilizziamo una callback con una funzione built-in, cioè la array_reduce().
// Oppure utilizziamo il foreach().

// Esercizio per validare la password

// -La password deve evere una lunghezza di almeno 8 caratteri
// -La passwrod deve contenere almeno un numero
// -La password deve contenere almeno un carattere speciale

// Utilizziamo il paradigma procedurale, cioè usando solo le built-in function.

// $password=readline("Inserisci la password: ");

// -La password deve evere una lunghezza di almeno 8 caratteri
// $checklength=false;
// if(strlen($password)>=8){
// $checklength=true;
// }
// var_dump($checklength);

// -La passwrod deve contenere almeno un numero
// $checknumber=false;
// for($i=0;$i<strlen($password);$i++){
// if(is_numeric($password[$i])){
//     $checknumber=true;
// }
// }
// var_dump($checknumber);

// -La password deve contenere almeno un carattere speciale

// function checkspecial($password){
//     $specials=['@','_','?','!','"','£','$','%','&','/','(',')','=','-','#','*','ç','|'];
//     foreach($specials as $special){
//         for($i=0;$i<strlen($password);$i++){
//             if($password[$i]==$special){
//                 return true;
//             }
//         }
//     }
//     return false;
// }

// Utilizziamo ora il paradigma funzionale, cioè utilizzando le nostre funzioni
// IL paradigma funzionale si divide in tre fasi:
// -Estrapolamento
// -Incapsulamento
// -Astrazione

// L' estrapolamento consiste nel copiare la funzione built-in e renderla personale
// L' incapsulamento significa togliere le variabili specifiche e renderle generiche affinchè si possano passare con i parametri reali 
// L' astrazione significa che dobbiamo racchiudere le singole funzioni in una funzione che racchiuda tutte le altre, affinchè si possa raggiungere la soluzione finale del problema

// function checklength($string,$length){
//     if(strlen($string)>=$length){
//     return true;
// }
// return false;
// }

// function checknumber($string){
// for($i=0;$i<strlen($string);$i++){
// if(is_numeric($string[$i])){
//     return true;
// }
    
// }
//     return false;
// }

// function checkspecial($string){
//     $specials=['@','_','?','!','"','£','$','%','&','/','(',')','=','-','#','*','ç','|'];
//         foreach($specials as $special){
//             for($i=0;$i<strlen($string);$i++){
//                 if($string[$i]==$special){
//                     return true;
//                 }
//             }
//         }
//         return false;
// }

// function checkpassword(){
//     $password=readline("Inserisci la password: ");
//     if(checklength($password,8)&&checknumber($password)&&checkspecial($password)){
//         echo "La password è valida";
//     } else{
//         echo "La password non è valida";
//     }
// }
// checkpassword();

// OOP è la suddivisione del codice in blocchi dette classi. Questi blocchi servono ad instanziare un oggetto.

// Esercizio di un gestionale scolastico

// utente:username,password,email
// $user=[
//     "username"=>'username1',
//     "password"=>'password1',
//     "email"=>"mail@.com"
// ];
// $user2=[
//     "username"=>'username2',
//     "password"=>'password2',
//     "email"=>"mail2@.com"
// ];
// Per rappresentare tutti gli utenti dovremmo creare n array, quindi utilizzeremo delle classi. Il nome di una classe deve essere inglese, singolare e prima lettera maiuscola

// class User{
//     //Ora dobbiamo dichiarare gli attributi
//     public $username;
//     public $password;
//     public $email;
// };
// Ora dobbiamo instanziare un oggetto tramite la classe.
// $user=new User;
// var_dump($user);

// Ora abbiamo bisogno di un costruttore per costruire l' oggetto che verrà instanziato, in questo caso va a popolare i public attributi dichiarati nella classe.

// class User{
//     //Ora dobbiamo dichiarare gli attributi
//     public $username;
//     public $password;
//     public $email;
//     public function __construct($_username,$_password,$_email){
//         $this->username=$_username;
//         $this->password=$_password;
//         $this->email=$_email;
//     }
// };
// $user=new User("username1","password1","email@.com");
// La keyword new instanzia l' oggetto e automaticamente invoca anche la funzione __construct()
// var_dump($user);
// Da ora in poi si potranno creare tutti i $user mettendo nel parametro reale le credenziali dei vari user.
// $user2=new User("username2","password2","email2@.com");
// $user3=new User("username3","password3","email3@.com");
// $user_N=new User("usernameN","passwordN","emailN@.com");
// var_dump($user,$user2,$user3,$user_N,);

// Metodi all' interno di una classe

// class User{
//     public $username;
//     public $password;
//     public $email;
//     public function __construct($_username,$_password,$_email){
//         $this->username=$_username;
//         $this->password=$_password;
//         $this->email=$_email;
//     }
//     public function printName(){
//         echo $this->username;
//     }
// };
// $user=new User("username1","password1","email@.com");
// $user2=new User("username2","password2","email2@.com");
// $user3=new User("username3","password3","email3@.com");
// $user_N=new User("usernameN","passwordN","emailN@.com");

// $user->printName();
// $user3->printName();

// Per richiamare la funzione all' interno della classe bisogna scrivere il nome dell' oggetto instanziato->metodo().

// ATTRIBUTI E METODI STATICI
// Sono attributi e metodi che possono essere invocati senza l' instanza di un oggetto

// class User{
//     public $username;
//     public $password;
//     public $email;
//     public function __construct($_username,$_password,$_email){
//         $this->username=$_username;
//         $this->password=$_password;
//         $this->email=$_email;
//     }
//     public function printName(){
//         echo $this->username;
//     }
//     static public function saluta(){
//         echo "Ciao";
//     }
// };
// User::saluta();
// In questo caso non abbiamo instanziato $user, quindi non possiamo fare $user->saluta(), ma dobbiamo aggiungere la keyword static, poi all' esterno della classe scriviamo il nome della classe::ciao(). Vale anche per i public attributi, per esempio aggiungiamo static public attributo, e per richiamarlo all' esterno della classe nomeclasse::$attributo.All' interno del __construct(){} l' attributo si dichiara con la keyword self::.

// EREDITARIETA
// Per esempio studenti e insegnanti

// class studenti extends User{
//     public $subject;
// };
// class Teacher extends User{
//     public $salary;
// };
// Extends vuol dire che le due classi Student e Teacher sono accomunate dalle caratteristiche della classe User, quindi ereditano entrambi le caratteristiche di User. Quando instanzieremo i nuovi oggetti dovremo passare i parametri reali di User più quelli di Student o di Teacher.

// class Student extends User{
//     public $subject;
//     public function __construct($name,$password,$email,$subject){
//     parent::__construct($name,$password,$email);
//     $this->subject=$subject;
// }
// }
// class Teacher extends User{
//     public $salary;
//     public function __construct($name, $password, $email,$salary){
//         parent::__construct($name,$password,$email);
//         $this->salary=$salary;
//     }
// }
// $student=new Student("student","student","student","student");
// $teacher=new Teacher("teacher","teacher","teacher","teacher");
// var_dump($student);
// var_dump($teacher);
// Qui abbiamo creato due nuovi oggetti $student e $teacher, entrambi ereditano i public attributi di User, ma differiscono per l' ultimo attributo dichiarato nelle classi rispettive. Nelle loro classi abbiamo richiamato gli attributi di User all' interno del __construct(){}con la keyword parent::__construct(), poi abbiamo aggiunto il $this->attributo che abbiamo dichiarato nella classe Student o Teacher. Si ereditano anche i metodi e i metodi statici.

// Access modifiers
// -public
// -protected
// -private

// Stabiliscono la visibilità di un attributo o un metodo

// Le funzioni o gli attributi public sono visibili in ogni parte dello scoop del codice.
// User::saluta();

// Le funzioni o gli attributi protected sono visibili solo all' interno delle classi figlie che ereditano quel metodo specifico.

// Le funzioni o gli attributi private sono visibili solo ed esclusivamente all' interno della classe stessa.

// Le classi astratte sono quel tipo di classe che dettano le regole, ma che non sono utilizzate per instanziare oggetti. Tipo la classe User che detta regole per gli Student e i Teacher. Per creare la classe astratta dobbiamo inserire la keyword abstract prima di class.

// I metodi astratti ci dicono che tutti i figli della classe abstract devono possedere quelle funzioni.

// DEPENDENCY INJECTION E OBJECT COMPOSITION

// class Manichino{
//     public $arti_inferiori;
//     public $arti_superiori;
//     public function __construct(Arti_Inferiori $artiinferiori, Arti_Superiori $artisuperiori){//dependency injection//
//         $this->arti_inferiori=$artiinferiori;
//         $this->arti_superiori=$artisuperiori;
//     }
// }

// class Arti_Inferiori{
//     public function muoviti(){
//         echo "Mi sto per muovere";
//     }
// }
// class Arti_Superiori{
//     public function attacca(){
//         echo "Ti sto per attaccare";
//     }
// }
// $gambe=new Arti_Inferiori;
// $braccia=new Arti_Superiori;
// $manichino =new Manichino($gambe,$braccia);//object composition//
// var_dump($manichino);

// World wide web
// é formato da
// -Http: protocollo di rete appartenente al modello di applicazione del ISO/OSI su cui è basato il web.
// -Html: il linguaggio di mark up con cui è scritta una pagina web.
// -Url: lo schema di identificazione e di rintracciabilità dei contenuti e dei servizi web

// Http

// Il protocollo alla base del modello o l' architettura client/server.
// Client=Browser, Server=Sito web. 
// Il protocollo è connectionless, il browser effettua una richiesta al server, non appena il server manda la risposta al browser la connessione viene immediatamente chiusa, questo per mantenere le performance del server, che deve gestire milioni di richieste client. Nella sezione network dell' ispeziona elemento, vediamo tutte le richieste effettuate dal browser. Cliccando sulla prima richiesta vediamo una serie di informazioni inerenti la richiesta, tra cui i cookies che sono un modo per salvare i dati del richiedente, che contengono un codice identificativo di un client, quando ci si sposta tra le varie pagine correlate, per esempio per salvare le credenziali di un log in.
// Il messaggio di richiesta è formato da 3 parti:
    // -1 La riga di richiesta
    // -2 La sezione header
    // -3 Il body
// 
    //  La riga di richiesta ha 4 metodi,l' URI e la versione del protocollo. I quattro metodi sono:get,post,put,delete. L' Uri è l' identificativo della risorsa, la versione del protocollo è gestita in automatico.
    // Nel metodo get il browser vuole visualizzare una risorsa.
    // Il metodo post serve per creare delle risorse, per esempio per registrarsi ad un sito.
    // Il metodo put serve per modificare una risorsa.
    // Il metodo delete elimina la risorsa.
    // L' Uri fa parte dell' Url e rappresenta una risorsa ben precisa

    // La sezione header contiene informazioni del client

    // Il body contiene dei dati, per esempio nella registrazione ad un sito il body contiene name,email e password contenuti appunto nel body.

    // I messaggi di risposta

    // Si suddividono in 5 tipi:
    // -1xx sono messaggi informativi.
    // -2xx sono messaggi di successo(richiesta inviata).
    // -3xx sono redirect(non c'è risposta immediata ma ci viene detto dove trovarla).
    // -4xx sono messaggi di errore del client(richiesta non soddisfatta).
    // -5xx sono messaggi di errore del server per problemi interni al server(richiesta non soddisfatta).
    
    // Nei messaggi di risposta sono contenuti anche la sezione header e body

    // Laravel

    // Laravel è un framework php, che lavora con il pattern mvc(Model,view,controller).
    // Per avviare un progetto Laravel bisogna installare Laravel e Node.js, poi scriviamo larevel new nomeprogetto dul terminale, utilizziamo mysql e creiamo la cartella.
    // Nella cartella di Laravel troveremo alcune cartelle preimpostate.
    // La cartella routes in web.php troveremo le uri.
    // La cartella resources contiene css, js, view(che conterrà il blade,cioè l' html).
    // La cartella public è l' unica cartella visibile al browser.
    // La cartella vendor contiene tutte le librerie usate dal framework.
    //  La cartella .env contiene le informazioni del nostro progetto, per esempio informazioni su database, email o code asincrone.
    // Il composer è il package manager di php, serve per utilizzare Laravel
    // I due file che riguardano il composer sono composer.json e composer.lock.
    // Composer.json() è un file scritto in json che indica tutte le librerie che servono al progetto per funzionare.
    // Composer.lock() sono tutte le librerie effettivamente installate sul computer
    // Blade è un template engine che ci permette di scrivere pagine html usando php e manipolando dunque la pagina html.
    // php artisan serve, per aprire un server in locale.(127.0.0.1:8000).
    
    // Messa online

    // Per poter mettere online un sito dobbiamo usare un server che sia in grado di ricevere richieste da tutto il mondo.Il nostro computer potrebbe fare da server, ma se le richieste diventano troppe, dovremmo buttare giù il sito, ampliare la memoria del pc, rimettere su il sito. Si potrebbero utilizzare quindi le server farm, che sono delle aziende contenenti all' interno centinaia di server tutti operativi. Per poter mettere online il nostro sito dovremo affitare uno di quei server, ma anche in questo caso non potremo comunque modificare la ram del computer qualora il nostro sito ricevesse troppe richieste, però potremmo cambiare server da uno meno performante ad uno più performante, cambiando l' importo dell' affitto del server.
    // Attraverso linee di comando sul terminale dovremmo installare tutti i software che vengono utilizzati dal server per poter far girare il nostro sito. Questi software si dividono in due gruppi detti stack e sono principalmente Lemp e Lamp. I due si differenziano per i software utilizzati E(sta per enginxt), mentre la a(sta per apache).
    // Forge è un gestore di server,indicandogli il progetto ed il server, ci penserà lui a metterlo online, forge è un servizio laravel.
    // Digital Ocean è un esempio di server farm.

 