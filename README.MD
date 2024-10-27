<aside>
📚 esercizio di oggi: PHP Blog
nome repo: **php-blog**

Per il kata di oggi andremo a realizzare un Blog in PHP plain. L'idea è di avere un accesso tramite login, la possibilità di effettuare la CRUD dei post per l'utente autenticato, mentre sarà presente un'area di lettura accessibile agli utenti non autenticati per consultare gli articoli presenti.
Gli articoli avranno un titolo, un contenuto, l'autore (dato dalla relazione con l'utente che lo andrà a scrivere), una categoria selezionabile tra quelle inserite nel db ed un'immagine.

- **Milestone**
    
    1️⃣ **Milestone**
    
    Come prima cosa, andiamo a importare il db fornito all’interno del nostro PhpMyAdmin in modo da avere struttura ed alcuni dati già pronti.
    
    Ora, per iniziare col codice creiamo il form di login. Come potrete vedere, all’interno del database è già presente un utente utilizzabile per accedere con le credenziali.
    
    > **User:** Admin
    **Password**: 123456
    > 
    
    Andiamo quindi a preparare un piccolo form che salverà in sessione il nostro utente in caso i dati inseriti siano corretti o che restituirà un errore in caso contrario.
    
    2️⃣ **Milestone 2**
    Creiamo la CRUD dei nostri post coi campi base. Partiamo dal salvare `Titolo`, `Contenuto` e `Autore` per verificare il funzionamento delle nostre query e verifichiamo che solo un utente loggato possa accedere alla sezione delle CRUD, mentre un utente non loggato potrà solo vedere la lista dei post e consultarli in sola lettura.
    
    **3️⃣ Milestone 3**
    Aggiungiamo la creazione delle categorie. Una volta verificato il corretto funzionamento, aggiungiamo al nostro form dei post una select con la lista delle categorie inserite nel db, per collegare i post a una categoria.
    
    **4️⃣ Milestone 4**
    Aggiungiamo al form il campo per l'inserimento di un'immagine in evidenza! In questo caso possiamo utilizzare un url esterno come immagine. Ricordiamo che nel form di update dobbiamo verificare che sia presente un'immagine, in caso contrario al submit elimineremo l’immagine precedentemente inserita. 
    
    ✨**Bonus**
    Gestiamo l’immagine come upload di un file. Attenzione alla validazione del formato da caricare!
    
</aside>


## esecuzione 

milestone 1: -creazione del database php_my_blog e importazione file db.sql fatto
            -creazione template html standby 
            -creazione form login con email e psw fatto
            -impostare form con action e salvataggio in sessione di email 


Il database è composto da tre tabelle:
-user
-posts
-categories

categories ha una relazione one to many rispetto a posts(una categoria può avere molti posts)


da approfondire
-$get,post,file,session
-capire come fare query al database con php plain 
-come impostare form per autenticazione 
-ripassare attributo action


come faccio il template? ha senso fare ora il template o è meglio partire con del layout base e poi vedo come fare?
se devo fare il login al momento non ragiono sul template ma ragiono su come fare il login, sciocchino 

