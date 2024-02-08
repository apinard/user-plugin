<?php return [
  'plugin' => [
    'tab' => 'Utenti',
    'access_users' => 'Gestisci Utenti',
    'access_groups' => 'Gestisci Gruppi di Utenti',
    'access_settings' => 'Gestisci Impostazioni Utenti',
  ],
  'users' => [
    'menu_label' => 'Utenti',
    'all_users' => 'Tutti gli utenti',
    'new_user' => 'Nuovo Utente',
    'list_title' => 'Gestisci Utenti',
    'trashed_hint_title' => 'L\'utente ha disabilitato il suo account',
    'trashed_hint_desc' => 'Questo utente ha disattivato il suo account and e non vuole più apparire sul sito. Possono riattivarsi in qualsiasi momento effettuando l\'accesso.',
    'banned_hint_title' => 'Questo utente è stato bannato',
    'banned_hint_desc' => 'Questo utente è stato bannato da un amministratore e non potrà piú effettuare l\'accesso',
    'guest_hint_title' => 'Questo è un utente anonimo',
    'guest_hint_desc' => 'Questo utente è salvato solo per riferimento e deve registrarsi prima di poter effettuare l\'accesso',
    'activate_warning_title' => 'Utente non attivo!',
    'activate_warning_desc' => 'Questo utente non è stato attivato e potrebbe non essere in grado di effettuare l\'accesso',
    'activate_confirm' => 'Vuoi veramente attivare questo utente?',
    'activated_success' => 'Utente Attivato',
    'activate_manually' => 'Attiva questo utente manualmente',
    'convert_guest_confirm' => 'Convertire questo utente anonimo a un utente registrato?',
    'convert_guest_manually' => 'Converti a un utente registrato',
    'convert_guest_success' => 'Utente convertito a un account registrato',
    'delete_confirm' => 'Vuoi veramente cancellare questo utente?',
    'unban_user' => 'Sblocca questo utente',
    'unban_confirm' => 'Vuoi veramente sbloccare questo utente?',
    'unbanned_success' => 'L\'utente è stato sbloccato',
    'return_to_list' => 'Ritorna alla lista utenti',
    'update_details' => 'Aggiorna dettagli',
    'bulk_actions' => 'Azioni multiple',
    'delete_selected' => 'Elimina selezionati',
    'delete_selected_confirm' => 'Eliminare gli utenti selezionati?',
    'delete_selected_empty' => 'Non ci sono utenti selezionati da cancellare.',
    'delete_selected_success' => 'Gli utenti selezionati sono stati cancellati con successo.',
    'deactivate_selected' => 'Disabilita selezionati',
    'deactivate_selected_confirm' => 'Disattivare gli utenti selezionati?',
    'deactivate_selected_empty' => 'Non ci sono utenti selezionati da disattivare.',
    'deactivate_selected_success' => 'Utenti selezionati disattivati con successo.',
    'restore_selected' => 'Ripristina selezionati',
    'restore_selected_confirm' => 'Ripristinare gli utenti selezionati?',
    'restore_selected_empty' => 'Non ci sono utenti selezionati da ripristinare.',
    'restore_selected_success' => 'Utenti selezionati ripristinati con successo.',
    'ban_selected' => 'Blocca selezionati',
    'ban_selected_confirm' => 'Bloccare l\'utente selezionato?',
    'ban_selected_empty' => 'Non ci sono utenti selezionati da bloccare.',
    'ban_selected_success' => 'Utenti selezionati bloccati con successo.',
    'unban_selected' => 'Sblocca selezionati',
    'unban_selected_confirm' => 'Sbloccare gli utenti selezionati?',
    'unban_selected_empty' => 'Non ci sono utenti selezionati da sbloccare.',
    'unban_selected_success' => 'Utenti selezionati sbloccati con successo.',
  ],
  'settings' => [
    'users' => 'Utenti',
    'menu_label' => 'Impostazioni Utenti',
    'menu_description' => 'Gestisci impostazioni degli utenti',
    'activation_tab' => 'Attivazione',
    'signin_tab' => 'Accesso',
    'registration_tab' => 'Registrazione',
    'notifications_tab' => 'Notifiche',
    'allow_registration' => 'Consenti registrazione utenti',
    'allow_registration_comment' => 'Se questo è disabilitato gli utenti possono essere creati solo da un amministratore.',
    'activate_mode' => 'Modalità di attivazione',
    'activate_mode_comment' => 'Scegli come un utente dovrebbe essere attivato',
    'activate_mode_auto' => 'Automaticamente',
    'activate_mode_auto_comment' => 'Attivato automaticamente alla registrazione',
    'activate_mode_user' => 'Utente',
    'activate_mode_user_comment' => 'L\'utente si attiva da solo confermando la sua email',
    'activate_mode_admin' => 'Amministratore',
    'activate_mode_admin_comment' => 'Solo un amminstratore può attivare un utente.',
    'require_activation' => 'Effettuare l\'accesso richiede l\'attivazione.',
    'require_activation_comment' => 'Gli utenti devono avere un account attivato per effettuare l\'accesso.',
    'block_persistence' => 'Previeni sessioni concorrenti',
    'block_persistence_comment' => 'Quando abilitato gli utenti non possono effettuare il log-in da diversi dispositivi contemporaneamente',
    'use_throttle' => 'Limita tentativi',
    'use_throttle_comment' => 'Ripetuti tentativi errati di accesso porteranno alla sospensione temporanea dell\'utente.',
    'login_attribute' => 'Metodo di login',
    'login_attribute_comment' => 'Seleziona che attributo gli utenti useranno per effettuare il login.',
  ],
  'user' => [
    'label' => 'Utente',
    'id' => 'ID',
    'username' => 'Username',
    'name' => 'Nome',
    'name_empty' => 'Anonimo',
    'surname' => 'Cognome',
    'email' => 'Email',
    'created_at' => 'Registrato',
    'last_seen' => 'Ultimo accesso',
    'is_guest' => 'Anonimo',
    'joined' => 'Joined',
    'is_online' => 'Online adesso',
    'is_offline' => 'Al momento non collegato',
    'send_invite' => 'Invia invito via mail',
    'send_invite_comment' => 'Invia un messaggio di benvenuto contenente le informazioni per l\'accesso',
    'create_password' => 'Crea Password',
    'create_password_comment' => 'Inserisci una nuova password per l\'accesso.',
    'reset_password' => 'Cambia la Password',
    'reset_password_comment' => 'Per cambiare la password di questo utente, inserisci una nuova password quí',
    'confirm_password' => 'Conferma Password',
    'confirm_password_comment' => 'Inserisci nuovamente la password per confermare.',
    'groups' => 'Gruppi',
    'empty_groups' => 'Non ci sono gruppi di utenti disponibili.',
    'avatar' => 'Avatar',
    'details' => 'Dettagli',
    'account' => 'Account',
    'block_mail' => 'Blocca tutte le mail verso questo utente.',
    'status_guest' => 'Anonimo',
    'status_activated' => 'Attivato',
    'status_registered' => 'Registrato',
  ],
  'group' => [
    'label' => 'Gruppo',
    'id' => 'ID',
    'name' => 'Nome',
    'description_field' => 'Descrizione',
    'code' => 'Codice',
    'code_comment' => 'Inserisci un codice univoco per identificare il gruppo.',
    'created_at' => 'Creato',
    'users_count' => 'Utenti',
  ],
  'groups' => [
    'menu_label' => 'Gruppi',
    'all_groups' => 'Gruppi di Utenti',
    'new_group' => 'Nuovo gruppo',
    'delete_selected_confirm' => 'Vuoi veramente cancellare i gruppi selezionati?',
    'list_title' => 'Gestisci Gruppi',
    'delete_confirm' => 'Vuoi veramente cancellare questo gruppo?',
    'delete_selected_success' => 'Gruppi selezionati cancellati con successo.',
    'delete_selected_empty' => 'Non ci sono gruppi selezionati da cancellare.',
    'return_to_list' => 'Torna all\'elenco dei gruppi',
    'return_to_users' => 'Torna alla lista utenti',
    'create_title' => 'Crea Gruppo di Utenti',
    'update_title' => 'Modifica Gruppo di Utenti',
    'preview_title' => 'Anteprima Gruppo',
  ],
  'login' => [
    'attribute_email' => 'Email',
    'attribute_username' => 'Username',
  ],
  'account' => [
    'account' => 'Account',
    'account_desc' => 'Form di gestione account.',
    'redirect_to' => 'Reindirizza A',
    'redirect_to_desc' => 'Pagina verso cui essere reindirizzati dopo modifica, accesso o registrazione.',
    'code_param' => 'Parametro codice di attivazione',
    'code_param_desc' => 'Parametro dell\'URL usato per il codice di attivazione',
    'invalid_user' => 'Impossibile effettuare il login con le credenziali fornite.',
    'invalid_activation_code' => 'Codice di attivazione fornito non valido.',
    'invalid_deactivation_pass' => 'La password inserita non è valida.',
    'success_activation' => 'Account attivato con successo.',
    'success_deactivation' => 'Account disattivato con successo. Ci dispiace vederti andare via!',
    'success_saved' => 'Impostazioni salvate con successo!',
    'login_first' => 'Devi prima effettuare l\'accesso!',
    'already_active' => 'Il tuo account è già stato attivato!',
    'activation_email_sent' => 'Una mail di attivazione è stata inviata al tuo indirizzo mail.',
    'activation_by_admin' => 'Registrazione effettuata con successo. Il tuo account non è ancora attivo e deve essere approvato da un amministratore.',
    'registration_disabled' => 'La registrazione è al momento disattivata.',
    'sign_in' => 'Accedi',
    'register' => 'Registra',
    'full_name' => 'Nome Completo',
    'email' => 'Email',
    'password' => 'Password',
    'login' => 'Login',
    'new_password' => 'Nuova Password',
    'new_password_confirm' => 'Conferma Nuova Password',
  ],
  'reset_password' => [
    'reset_password' => 'Ripristina Password',
    'reset_password_desc' => 'Form password dimenticata.',
    'code_param' => 'Parametro codice di ripristino',
    'code_param_desc' => 'Parametro dell\'URL usato per il codice di ripristino',
  ],
  'session' => [
    'session' => 'Sessione',
    'session_desc' => 'Aggiungi la sessione utente a una pagina per limitare l\'accesso.',
    'security_title' => 'Autorizza solo',
    'security_desc' => 'Chi è autorizzato ad accedere alla pagina.',
    'all' => 'Tutti',
    'users' => 'Utenti',
    'guests' => 'Anonimi',
    'redirect_title' => 'Reindirizza a',
    'redirect_desc' => 'Nome della pagina a cui reindirizzare se l\'accesso è negato.',
    'logout' => 'Sei stato scollegato con successo!',
  ],
];
