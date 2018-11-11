<?php
/*
 *	Made by Samerton
 *  Translation by Locus
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr5
 *
 *  License: MIT
 *
 *  Lithuanian Language - Admin
 */

$language = array(
	// Login
	're-authenticate' => 'Prašome patvirtinkite dar kartą',

	// Sidebar
	'dashboard' => 'Prietaisų Skydelis',
	'configuration' => 'Konfigūracija',
	'layout' => 'Išdėstymas',
	'user_management' => 'Vartotojo Valdymas',
	'admin_cp' => 'AdminCP',
	'administration' => 'Administracija',
	'overview' => 'Apžvalga',
	'core' => 'Branduolys',
	'integrations' => 'Integracijos',
	'minecraft' => 'Minecraft',
	'modules' => 'Moduliai',
	'security' => 'Apsauga',
	'sitemap' => 'Svetainės Schema',
	'styles' => 'Stiliai',
	'users_and_groups' => 'Vartotojai ir Grupės',

	// Overview
	'running_nameless_version' => 'Veikia NamelessMC versija <strong>{x}</strong>', // Don't replace "{x}"
	'running_php_version' => 'Veikia PHP versija <strong>{x}</strong>', // Don't replace "{x}"
	'statistics' => 'Statistikos',
	'registrations' => 'Registracijos',
	'topics' => 'Temos',
	'posts' => 'Pranešimai',
  'notices' => 'Pranešimai',
  'no_notices' => 'Nėra pranešimų',
  'email_errors_logged' => 'El. Pašto klaidos buvo užregistruotos.',

	// Core
	'settings' => 'Nustatymai',
	'general_settings' => 'Bendrieji nustatymai',
	'sitename' => 'Svetainės pavadinimas',
	'default_language' => 'Numatytoji Kalba',
	'default_language_help' => 'Vartotojai galės pasirinkti iš bet kurios įdiegtos kalbos.',
	'install_language' => 'Įdiekite Kalbą',
	'update_user_languages' => 'Atnaujinti Naudotojų Kalbas',
	'update_user_languages_warning' => 'Tai atnaujins kalbą visiems jūsų svetainės naudotojams, net jei jie jau pasirinko vieną!',
	'updated_user_languages' => 'Naudotojų kalbos buvo atnaujintos.',
	'installed_languages' => 'Bet kokios naujos kalbos buvo sėkmingai įdiegtos.',
	'default_timezone' => 'Numatytoji Laiko Zona',
	'registration' => 'Registracija',
	'enable_registration' => 'Leisti registracija?',
	'verify_with_mcassoc' => 'Patvirtinkite naudotojų paskyras naudodami mcassoc?',
	'email_verification' => 'Leisti el. Pašto patvirtinimą?',
	'registration_settings_updated' => 'Registracijos nustatymai sėkmingai atnaujinti.',
	'homepage_type' => 'Pagrindinis Puslapio Tipas',
	'post_formatting_type' => 'Pranešimų Formatavimo Tipas',
	'portal' => 'Portalas',
	'private_profiles' => 'Privatūs Profiliai',
	'missing_sitename' => 'Prašome įterpti svetainės pavadinimą nuo 2 iki 64 simbolių.',
	'missing_contact_address' => 'Prašome įterpti kontaktinį el. Pašto adresą nuo 3 iki 255 simbolių.',
	'use_friendly_urls' => 'Draugiškos URLs',
	'use_friendly_urls_help' => 'SVARBU: Jūsų serveris turi būti sukonfigūruotas, kad būtų galima naudoti mod_rewrite ir .htaccess failus, kad tai veiktų.',
	'config_not_writable' => 'Jūsų <strong>core/config.php</strong> failas nėra įrašomas. Patikrinkite failų leidimus.',
	'settings_updated_successfully' => 'Bendrieji nustatymai sėkmingai atnaujinti.',
	'social_media' => 'Socialiniai Tinklai',
	'youtube_url' => 'Youtube URL',
	'twitter_url' => 'Twitter URL',
	'twitter_dark_theme' => 'Naudokite Twitter tamsią temą?',
	'discord_id' => 'Discord Serverio ID',
	'discord_widget_theme' => 'Discord Valdiklio Tema',
	'dark' => 'Tamsi',
	'light' => 'Šviesi',
	'google_plus_url' => 'Google Plus URL',
	'facebook_url' => 'Facebook URL',
	'social_media_settings_updated' => 'Socialinių tinklų nustatymai sėkmingai atnaujinti.',
	'successfully_updated' => 'Sėkmingai atnaujinta',
  'debugging_and_maintenance' => 'Derinimas ir Priežiūra',
  'debugging_settings_updated_successfully' => 'Derinimo nustatymai sėkmingai atnaujinti.',
  'enable_debug_mode' => 'Įjungti derinimo režimą?',
  'force_https' => 'Priversti https?',
  'force_https_help' => 'Jei įjungta, visos jūsų svetainės užklausos bus nukreipiamos į https. Kad galėtumėte tinkamai veikti, turite turėti galiojantį SSL sertifikatą.',
  'force_www' => 'Priversti www?',
  'contact_email_address' => 'Kontaktinis el. Pašto adresas',
  'emails' => 'El. Laiškai',
  'email_errors' => 'El. Pašto klaidos',
	'registration_email' => 'Registracijos el. Pašto adresas',
  'contact_email' => 'Kontaktinis El. Paštas',
  'forgot_password_email' => 'Slaptažodžio Pamiršimo El. Paštas',
  'unknown' => 'Nežinoma',
  'delete_email_error' => 'Ištrinti klaidą',
  'confirm_email_error_deletion' => 'Ar tikrai norite ištrinti šią klaidą?',
  'viewing_email_error' => 'Klaidos peržiūra',
  'unable_to_write_email_config' => 'Nepavyko įrašyti į failą <strong>core/email.php</core>. Patikrinkite failų leidimus.',
  'enable_mailer' => 'Įjungti PHPMailer?',
  'enable_mailer_help' => 'Įjunkite tai, jei el. Laiškai nebus siunčiami pagal numatytuosius nustatymus. Naudojant PHPMailer reikia turėti paslaugą, galinčią siųsti el. Laiškus, pvz., "Gmail" ar SMTP teikėją.',
  'outgoing_email' => 'Išeinamas el. Pašto adresas',
  'outgoing_email_info' => 'Tai el. Pašto adresas, kurį NamelessMC naudos siųsti el. Laiškams.',
  'mailer_settings_info' => 'Šie laukai reikalingi, jei įjungėte PHPMailer. Norėdami gauti daugiau informacijos, kaip užpildyti šiuos laukus, patikrinkite <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-Gmail-or-SMTP-with-Nameless" target="_blank">wiki</a>.',
  'host' => 'Host',
  'email_port' => 'Port',
  'email_password_hidden' => 'Saugos sumetimais slaptažodis nerodomas.',
  'send_test_email' => 'Siųsti bandomajį el. Laišką',
  'send_test_email_info' => 'Sekantis mygtukas bandys išsiųsti el. Laišką į jūsų el. Pašto adresą, <strong>{x}</strong>. Bus rodomos klaidos siunčiant el. Laišką.', // Don't replace {x}
  'send' => 'Siųsti',
  'test_email_error' => 'Bandomojo el. Pašto klaida:',
  'test_email_success' => 'Bandomasis el. Pašto adresas išsiųstas sėkmingai.',
  'terms_error' => 'Prašome užtikrinti, kad jūsų terminai ir sąlygos būtų ne ilgesnės kaip 100000 simboliai.',
  'privacy_policy_error' => 'Įveskite privatumo politiką ne ilgesnę kaip 100000 simbolių.',
  'terms_updated' => 'Privatumo Politiką ir Terminai & Sąlygos atnaujinti sėkmingai.'
  'avatars' => 'Avatarai',
  'allow_custom_avatars' => 'Leisti individualius naudotojo avatarus?',
  'default_avatar' => 'Numatytasis avataras',
  'custom_avatar' => 'Vartotojo avataras',
  'minecraft_avatar' => 'Minecraft avataras',
  'minecraft_avatar_source' => 'Minecraft avataro šaltinis',
  'built_in_avatars' => 'Įmontuotos avataro paslaugos',
  'minecraft_avatar_perspective' => 'Minecraft avataro perspektyva',
  'face' => 'Veidas',
  'head' => 'Galva',
	'bust' => 'Biustas',
  'select_default_avatar' => 'Pasirinkite naują numatytąjį avatarą:',
  'no_avatars_available' => 'Nėra jokių avatarų. Pirmiausia prašome įkelti naują nuotraką.',
  'avatar_settings_updated_successfully' => 'Avataro nustatymai sėkmingai atnaujinti.',
  'navigation' => 'Navigacija',
  'navbar_order' => 'Naršymo Juostos Tvarka',
  'navbar_order_instructions' => 'Jūs galite nurodyti kiekvienam elementui didesnį skaičių nei 0, kad būtų galima užsisakyti elementus juostoje pirmasis elementas yra 1 ir didesni skaičiai po jo.',
  'navbar_icon' => 'Naršymo Juostos Piktograma',
  'navbar_icon_instructions' => 'Čia galite pridėti piktogramą kiekvienam juostos elementui, pavyzdžiui, naudojant <a href="https://fontawesome.com/v4.7.0/" target="_blank" rel="noopener nofollow">Font Awesome</a>.',
  'navigation_settings_updated_successfully' => 'Navigacijos nustatymai buvo sėkmingai atnaujinti.',
	'dropdown_items' => 'Išskleidžiamieji Elementai',
  'enable_page_load_timer' => 'Įjungti puslapio įkėlimo laikmatį?',
  'google_recaptcha' => 'Įjungti Google reCAPTCHA?',
  'recaptcha_site_key' => 'reCAPTCHA Site Key',
  'recaptcha_secret_key' => 'reCAPTCHA Secret Key',
  'registration_disabled_message' => 'Išjungtos registracijos žinutė',
  'enable_nicknames_on_registration' => 'Įjungti slapyvardžius besiregistruojantiems vartotojams?',
  'validation_promote_group' => 'Grupė po patvirtinimo',
  'validation_promote_group_info' => 'Tai grupė, kurioje naudotojas bus paaukštintas, kai tik patvirtins savo paskyrą.',
  'login_method' => 'Prisijungimo metodas',
  'privacy_and_terms' => 'Privatumo Politika, Terminai ir Sąlygos',

	// Reactions
	'icon' => 'Piktograma',
	'type' => 'Tipas',
	'positive' => 'Teigiamas',
	'neutral' => 'Neutralus',
	'negative' => 'Neigiamas',
	'editing_reaction' => 'Reagavimo redagavimas',
	'html' => 'HTML',
	'new_reaction' => '<i class="fa fa-plus-circle"></i> Nauja Reakcija',
	'creating_reaction' => 'Reakcijos kūrimas',
	'no_reactions' => 'Dar nėra jokių reakcijų.',
	'reaction_created_successfully' => 'Reakcija sėkmingai sukurta.',
	'reaction_edited_successfully' => 'Reakcija sėkmingai redaguota.',
	'reaction_deleted_successfully' => 'Reakcija sėkmingai pašalinta.',
	'name_required' => 'Vardas yra privalomas',
	'html_required' => 'HTML yra privaloma',
	'type_required' => 'Tipas yra privalomas',
	'name_maximum_16' => 'Pavadinimas turi būti ne daugiau kaip 16 simbolių',
	'html_maximum_255' => 'HTML turi būti ne daugiau kaip 255 simbolių',
	'confirm_delete_reaction' => 'Ar tikrai norite ištrinti šią reakciją?',

	// Custom profile fields
	'custom_fields' => 'Individualūs Profilio Laukai',
	'new_field' => '<i class="fa fa-plus-circle"></i> Naujas Laukas',
	'required' => 'Būtinas',
	'editable' => 'Redaguojamas',
	'public' => 'Viešas',
	'text' => 'Tekstas',
	'textarea' => 'Teksto plotas',
	'date' => 'Data',
	'creating_profile_field' => 'Profilio Lauko Kūrimas',
	'editing_profile_field' => 'Profilio Lauko Redagavimas',
	'field_name' => 'Lauko pavadinimas',
	'profile_field_required_help' => 'Vartotojas privalo užpildyti privalomus laukus, jie bus rodomi registracijos metu.',
	'profile_field_public_help' => 'Vieši laukai bus rodomi visiems vartotojams. Jei tai bus išjungta, tik moderatoriai gali peržiūrėti vertes.',
	'profile_field_error' => 'Prašome įvesti lauko pavadinimą nuo 2 iki 16 simbolių.',
	'description' => 'Apibūdinimas',
	'display_field_on_forum' => 'Rodyti lauką forume?',
	'profile_field_forum_help' => 'Jei įjungta, laukas bus rodomas naudotojui šalia forumo pranešimų.',
	'profile_field_editable_help' => 'Jei įjungta, naudotojai galės redaguoti lauką savo profilio nustatymuose.',
	'no_custom_fields' => 'Dar nėra Individualių laukų.',
	'profile_field_updated_successfully' => 'Profilio laukas sėkmingai atnaujintas.',
	'profile_field_created_successfully' => 'Profilio laukas sėkmingai sukurtas.',
	'profile_field_deleted_successfully' => 'Profilio laukas buvo sėkmingai ištrintas.',

  // Minecraft
  'enable_minecraft_integration' => 'Įjungti Minecraft integraciją?',
  'mc_service_status' => 'Minecraft Paslaugos Statusas',
  'service_query_error' => 'Nepavyko gauti paslaugos statuso.',
  'authme_integration' => 'AuthMe Integracija',
  'authme_integration_info' => 'Kai AuthMe integracija yra įjungta, vartotojai gali užsiregistruoti tik žaidime.',
  'enable_authme' => 'Įjungti AuthMe integraciją?',
  'authme_db_address' => 'AuthMe Duomenų Bazės Adresas',
  'authme_db_port' => 'AuthMe Duomenų Bazės "Port"',
  'authme_db_name' => 'AuthMe Duomenų Bazės Vardas',
  'authme_db_user' => 'AuthMe Duomenų Bazės Vartotojo Vardas',
  'authme_db_password' => 'AuthMe Duomenų Bazės Slaptažodis',
  'authme_db_password_hidden' => 'AuthMe duomenų bazės slaptažodis yra paslėptas dėl saugumo priežasčių.',
  'authme_hash_algorithm' => 'AuthMe Hashing Algoritmas',
  'authme_db_table' => 'AuthMe Vartotojo Lentelė',
  'enter_authme_db_details' => 'Įveskite teisingus duomenų bazės duomenis.',
  'authme_password_sync' => 'Sinchronizuoti AuthMe slaptažodį?',
  'authme_password_sync_help' => 'Jei įjungta, kai atnaujinamas vartotojo slaptažodis žaidime, slaptažodis taip pat bus atnaujintas svetainėje.',
  'minecraft_servers' => 'Minecraft Serveriai',
  'account_verification' => 'Minecraft Paskyros Patvirtinimas',
  'server_banners' => 'Serverio Baneriai',
  'query_errors' => 'Užklausos Klaidos',
  'add_server' => '<i class="fa fa-plus-circle"></i> Pridėti Serverį',
  'no_servers_defined' => 'Kol kas nėra nustatytų serverių',
  'query_settings' => 'Užklausos Nustatymai',
  'default_server' => 'Numatytasis Serveris',
  'no_default_server' => 'Nėra Numatytojo Serverio',
  'external_query' => 'Naudoti išorinę užklausą?',
  'external_query_help' => 'Jei numatytoji serverio užklausa neveikia, įjunkite šią parinktį.',
  'adding_server' => 'Serverio Pridėjimas',
  'server_name' => 'Serverio Pavadinimas',
  'server_address' => 'Serverio Adresas',
  'server_address_help' => 'Tai IP adresas arba domenas, naudojamas prisijungti prie savo serverio be "port".',
  'server_port' => 'Serverio "Port"',
  'parent_server' => 'Pagrindinis Serveris',
  'parent_server_help' => 'Pagrindinis serveris paprastai yra Bungee instancija, prie kurios yra prisijungęs serveris, jei toks yra.',
  'no_parent_server' => 'Nėra pagrindinio serverio',
  'bungee_instance' => 'BungeeCord Instancija?',
  'bungee_instance_help' => 'Pasirinkite šią parinktį, jei serveris yra BungeeCord instancija.',
  'server_query_information' => 'Norėdami rodyti prisijungusių žaidėjų sąrašą savo svetainėje, jūsų serveris <strong>privalo</strong> turėti \'enable-query\' pasirinkimą įjungta jūsų serverio <strong>server.properties</strong> faile',
  'enable_status_query' => 'Įjungti būsenos užklausą?',
  'status_query_help' => 'Jei ši funkcija įjungta, būsenos puslapyje šis serveris bus rodomas kaip įjungtas arba išjungtas.',
  'enable_player_list' => 'Įjungti žaidėjų sąrašą?',
  'pre_1.7' => 'Minecraft versija senesnė nei 1.7?',
  'player_list_help' => 'Jei tai yra įjungta, būsenos puslapyje bus rodomas prisijungusiu žaidėjų sąrašas.',
  'server_query_port' => 'Serverio Užklausos "Port"',
  'server_query_port_help' => 'Tai yra query.port pasirinkimas jūsų serverio server.properties faile, su sąlyga, kad enable-query pasirnkimas tame pačiame faile yra parinktas kaip "true".',
  'server_name_required' => 'Įveskite serverio vardą',
  'server_name_minimum' => 'Prašome įsitikinti, kad jūsų serverio vardas yra ne mažiau kaip 1 simbolis',
  'server_name_maximum' => 'Prašome įsitikinti, kad jūsų serverio vardas yra ne daugiau kaip 20 simbolių',
  'server_address_required' => 'Įveskite serverio adresą',
  'server_address_minimum' => 'Patikrinkite, ar jūsų serverio adresas yra mažiausiai 1 simbolis',
  'server_address_maximum' => 'Įsitikinkite, kad jūsų serverio adresas yra ne daugiau kaip 64 simboliai',
  'server_port_required' => 'Įveskite serverio "port"',
  'server_port_minimum' => 'Patikrinkite, ar jūsų serverio "port" yra mažiausiai 2 ženklai',
  'server_port_maximum' => 'Įsitikinkite, kad jūsų serverio "port" yra ne daugiau kaip 5 ženklai',
  'server_parent_required' => 'Pasirinkite pagrindinį serverį',
  'query_port_maximum' => 'Patikrinkite, ar jūsų užklausos "port" yra ne daugiau kaip 5 ženklai',
  'server_created' => 'Serveris sukurtas sėkmingai.',
  'confirm_delete_server' => 'Ar tikrai norite ištrinti šį serverį?',
  'server_updated' => 'Serveris sėkmingai atnaujintas.',
  'editing_server' => 'Serverio Redagavimas',
  'server_deleted' => 'Serveris sėkmingai ištrintas.',
  'unable_to_delete_server' => 'Nepavyko ištrinti serverio.',
  'leave_port_empty_for_srv' => 'Jūs galite palikti "port" tuščią, jei jis yra 25565, arba jei jūsų domenas naudoja SRV įrašą',
  'viewing_query_error' => 'Peržiūros užklausos klaida',
  'confirm_query_error_deletion' => 'Ar tikrai norite ištrinti šią užklausos klaidą?',
  'no_query_errors' => 'Jokios užklausų klaidos nebuvo užregistruotos.',
  'new_banner' => '<i class="fa fa-plus-circle"></i> Naujas Baneris',
  'purge_errors' => 'Išvalyti Klaidas',
  'confirm_purge_errors' => 'Ar tikrai norite išvalyti visas klaidas?',
	'email_errors_purged_successfully' => 'El. Pašto klaidos sėkmingai išvalytos.',
	'error_deleted_successfully' => 'Klaida sėkmingai ištrinta.',
	'no_email_errors' => 'Nėra užregistruotų el. Pašto klaidų.',
	'email_settings_updated_successfully' => 'El. Pašto nustatymai buvo sėkmingai atnaujinti.',
	'content' => 'Turinys',
  'mcassoc_help' => 'mcassoc yra išorinė paslauga, kuri gali būti naudojama norint patvirtinti, kad vartotojui priklauso Minecraft paskyrą, į kurią jie yra užsiregistravę. Jei norite naudoti šią funkciją, turėsite prisiregistruoti prie "shared key" <a href="https://mcassoc.lukegb.com/" target="_blank">čia</a>.',
  'mcassoc_key' => 'mcassoc Shared Key',
  'mcassoc_instance' => 'mcassoc Instance Key',
  'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">Spauskite čia, kad generuotumėte "Instance Key"</a>',
  'mcassoc_error' => 'Įsitikinkite, kad teisingai įvedėte savo "Shared Key" ir teisingai sukūrėte "Instance Key".',
  'updated_mcassoc_successfully' => 'mcassoc nustatymai sėkmingai atnaujinti.',
  'force_premium_accounts' => 'Priversti nenaudoti piratines Minecraft paskyras?',
  'banner_background' => 'Banerio fonas',
  'query_interval' => 'Užklausų intervalas (minutėmis turi būti nuo 5 iki 60)',
  'player_graphs' => 'Žaidėjų Diagramos',
  'player_count_cronjob_info' => 'Galite nustatyti "cron job" užklausą savo serveriams kas {x} minutes, naudodami šią komandą:', // Don't replace {x}
  'status_page' => 'Įjungti būsenos puslapį?',
  'minecraft_settings_updated_successfully' => 'Nustatymai atnaujinti sėkmingai.',
  'server_id_x' => 'Serverio ID: {x}', // Don't replace {x}
  'server_information' => 'Serverio Informacija',
  'query_information' => 'Užklausos Informacija',
  'query_errors_purged_successfully' => 'Užklausų klaidos sėkmingai išvalytos.',
  'query_error_deleted_successfully' => 'Užklausos klaida sėkmingai ištrinta.',
  'banner_updated_successfully' => 'Baneris atnaujintas sėkmingai. Jūsų pakeitimai gali įsigalioti po šiek tiek laiko.',

	// Modules
	'modules_installed_successfully' => 'Visi nauji moduliai sėkmingai įdiegti.',
	'enabled' => 'Įjungtas',
	'disabled' => 'Išjungtas',
	'enable' => 'įjungti',
	'disable' => 'išjungti',
	'module_enabled' => 'Modulis įjungtas.',
	'module_disabled' => 'Modulis išjungtas.',
	'author' => 'Autorius:',
	'author_x' => 'Autorius: {x}', // Don't replace {x}
	'module_outdated' => 'Aptikome, kad šis modulis skirtas "Nameless" versijai {x}, bet jūs naudojate "Nameless" versija {y}', // Don't replace "{x}" or "{y}"
	'find_modules' => 'Rasti Modulius',
	'view_all_modules' => 'Peržiūrėti visus modulius',
	'unable_to_retrieve_modules' => 'Neįmanoma nuskaityti modulių',
	'module' => 'Modulis',
	'unable_to_enable_module' => 'Neįmanoma įjungti nesuderinamo modulio.',

	// Styles
	'templates' => 'Šablonai',
	'template_outdated' => 'Mes aptikome, kad jūsų šablonas skirtas NamelessMC versijai {x}, bet jūs naudojate NamelessMC versija {y}', // Don't replace "{x}" or "{y}"
	'active' => 'Aktyvus',
	'deactivate' => 'Deaktyvuoti',
	'activate' => 'Aktyvuoti',
	'warning_editing_default_template' => 'Įspėjimas! Rekomenduojama nekeisti numatytojo šablono.',
	'images' => 'Vaizdai',
	'upload_new_image' => 'Įkelkite naują vaizdą',
	'reset_background' => 'Iš naujo nustatyti foną',
	'install' => '<i class="fa fa-plus-circle"></i> Diegti',
	'template_updated' => 'Šablonas sėkmingai atnaujintas.',
	'default' => 'Numatytas',
	'make_default' => 'Padaryti numatytąjį',
	'default_template_set' => 'Numatytasis šablonas {x} sėkmingai nustatytas.', // Don't replace {x}
	'template_deactivated' => 'Šablonas išjungtas.',
	'template_activated' => 'Šablonas įjungtas.',
	'permissions' => 'Leidimai',
	'setting_perms_for_x' => 'Šablono {x} leidimų nustatymas.', // Don't replace {x}
	'templates_installed_successfully' => 'Visi nauji šablonai sėkmingai įdiegti.',
	'confirm_delete_template' => 'Ar tikrai norite ištrinti šį šabloną?',
	'delete' => 'Ištrinti',
	'template_deleted_successfully' => 'Šablonas sėkmingai ištrintas.',
	'background_image_x' => 'Fono vaizdas: <strong>{x}</strong>', // Don't replace {x}
	'find_templates' => 'Rasti šablonus',
	'view_all_templates' => 'Peržiūrėti visus šablonus',
	'unable_to_retrieve_templates' => 'Nepavyko gauti šablonų',
	'template' => 'Šablonas',
	'stats' => 'Statistika',
	'downloads_x' => 'Atsisiuntimai: {x}',
	'views_x' => 'Peržiūros: {x}',
	'rating_x' => 'Įvertinimas: {x}',
	'editing_template_x' => 'Šablono {x} redagavimas', // Don't replace {x}
	'editing_template_file_in_template' => 'Redaguoti failą {x} šablone {y}', // Don't replace {x} or {y}
	'cant_write_to_template' => 'Negalima rašyti į šablono failą! Patikrinkite failų leidimus.',
	'unable_to_delete_template' => 'Nepavyko visiškai ištrinti šablono. Patikrinkite failų leidimus.',
	'background_reset_successfully' => 'Fono sėkmingai nustatytas iš naujo.',
	'background_updated_successfully' => 'Fonas sėkmingai atnaujintas.',
	'unable_to_enable_template' => 'Neįmanoma įjungti nesuderinamojo šablono.',

	// Users & groups
	'users' => 'Vartotojai',
	'groups' => 'Grupės',
	'group' => 'Grupė',
	'new_user' => '<i class="fa fa-plus-circle"></i> Naujas vartotojas',
	'creating_new_user' => 'Naujo vartotojo sukūrimas',
	'registered' => 'Registruota',
	'user_created' => 'Vartotojas sukurtas sėkmingai.',
	'cant_delete_root_user' => 'Negalima ištrinti "root" vartotojo!',
	'cant_modify_root_user' => 'Neįmanoma pakeisti "root" vartotojo grupės!',
	'user_deleted' => 'Vartotojas sėkmingai ištrintas.',
	'confirm_user_deletion' => 'Ar tikrai norite ištrinti vartotoją <strong>{x}</strong>?', // Don't replace {x}
	'validate_user' => 'Patvirtinti vartotoją',
	'update_uuid' => 'Atnaujinti UUID',
	'update_mc_name' => 'Atnaujinti Minecraft Vartotojo Vardą',
	'reset_password' => 'Nustatyti slaptažodį iš naujo.',
	'punish_user' => 'Bausti vartotoją',
	'delete_user' => 'Ištrinti vartotoją',
	'minecraft_uuid' => 'Minecraft UUID',
	'other_actions' => 'Kiti Veiksmai',
	'disable_avatar' => 'Išjungti Avatarą',
	'select_user_group' => 'Turite pasirinkti vartotojo grupę.',
	'uuid_max_32' => 'UUID turi būti ne daugiau kaip 32 simboliai.',
	'title_max_64' => 'Vartotojo antraštė turi būti ne ilgesnė nei 64 simboliai.',
	'group_id' => 'Grupės ID',
	'name' => 'Vardas',
	'title' => 'Vartotojo Antraštė',
	'new_group' => '<i class="fa fa-plus-circle"></i> Nauja Grupė',
	'group_name_required' => 'Įveskite grupės pavadinimą.',
	'group_name_minimum' => 'Prašome įsitikinti, kad jūsų grupės vardas yra ne mažiau kaip 2 simboliai.',
	'group_name_maximum' => 'Prašome įsitikinti, kad jūsų grupės vardas yra ne daugiau kaip 20 simbolių.',
	'creating_group' => 'Sukurti naują grupę',
	'group_html_maximum' => 'Įsitikinkite, kad jūsų grupės HTML yra ne ilgesnis kaip 1024 simboliai.',
	'group_html' => 'Grupės HTML',
	'group_html_lg' => 'Grupės HTML Didelis',
	'group_username_colour' => 'Grupės Vartotojo Vardo Spalva',
	'group_staff' => 'Ar grupė yra personalo grupė?',
	'delete_group' => 'Ištrinti Grupę',
	'confirm_group_deletion' => 'Ar tikrai norite ištrinti grupę {x}?', // Don't replace {x}
	'group_not_exist' => 'Tokia grupė neegzistuoja.',
	'secondary_groups' => 'Antrinės Grupės',
	'secondary_groups_info' => 'Vartotojas gaus papildomų leidimų iš šių grupių. Ctrl + spauskite, norėdami pasirinkti/atšaukti keletą grupių.',
	'unable_to_update_uuid' => 'Nepavyko atnaujinti UUID.',
	'default_group' => 'Ar grupė yra numatytoji grupė (naujiems vartotojams)?',
	'user_id' => 'Vartotojo ID',
	'uuid' => 'UUID',
	'group_order' => 'Grupių Tvarka',
	'group_created_successfully' => 'Grupė sėkmingai sukurta.',
	'group_updated_successfully' => 'Grupė sėkmingai atnaujinta.',
	'group_deleted_successfully' => 'Grupė sėkmingai ištrinta.',
	'unable_to_delete_group' => 'Nepavyko ištrinti numatytos grupės arba grupės, kuri gali peržiūrėti StaffCP. Pirmiausia atnaujinkite grupės nustatymus!',
	'can_view_staffcp' => 'Ar grupė gali matyti StaffCP?',
	'user' => 'Vartotojas',
	'user_validated_successfully' => 'Vartotojas sėkmingai patvirtintas.',
	'user_updated_successfully' => 'Vartotojas sėkmingai atnaujintas.',
	'editing_user_x' => 'Redaguoti naudotoją {x}', // Don't replace {x}
	'details' => 'Detalės',

	// Permissions
	'select_all' => 'Pažymėti Viską',
	'deselect_all' => 'Atžymėti Viską',
	'background_image' => 'Fono vaizdas',
	'can_edit_own_group' => 'Galite redaguoti savo grupės leidimus',
	'permissions_updated_successfully' => 'Leidimai atnaujinti sėkmingai.',
	'cant_edit_this_group' => 'Jūs negalite redaguoti šios grupės leidimų!',

	// General Admin language
	'task_successful' => 'Užduotis sėkminga.',
	'invalid_action' => 'Netinkamas veiksmas.',
	'enable_night_mode' => 'Įjungti Naktinį Režimą',
	'disable_night_mode' => 'Išjungti Naktinį Režimą',
	'view_site' => 'Žiūrėti Svetainę',
	'signed_in_as_x' => 'Prisijungęs kaip {x}', // Don't replace {x}
  'warning' => 'Įspėjimas',

  // Maintenance
  'maintenance_mode' => 'Priežiūros Režimas',
  'maintenance_enabled' => 'Priežiūros režimas šiuo metu yra įjungtas.',
  'enable_maintenance_mode' => 'Įjungti priežiūros režimą?',
  'maintenance_mode_message' => 'Priežiūros režimo žinutė',
  'maintenance_message_max_1024' => 'Prašome įsitikinti, kad jūsų priežiūros žinutė yra ne ilgesne kaip 1024 simboliai.',

	// Security
	'acp_logins' => 'StaffCP prisijungimai',
	'please_select_logs' => 'Pasirinkite žurnalus, kuriuos norite peržiūrėti',
	'ip_address' => 'IP Adresas',
	'template_changes' => 'Šablono Pakeitimai',
	'file_changed' => 'Failas Pakeistas',
	'all_logs' => 'Visi Žurnalai',
	'action' => 'Veiksmas',
	'action_info' => 'Veiksmų Informacija',

	// Updates
	'update' => 'Atnaujinti',
	'current_version_x' => 'Dabartinė versija: <strong>{x}</strong>', // Don't replace {x}
	'new_version_x' => 'Nauja versija: <strong>{x}</strong>', // Don't replace {x}
	'new_update_available' => 'Yra naujas atnaujinimas',
	'new_urgent_update_available' => 'Yra naujas skubus atnaujinimas. Prašome atnaujinti kuo greičiau!',
	'up_to_date' => 'Jūsų turima NamelessMC instaliacija yra naujausia!',
	'urgent' => 'Šis atnaujinimas yra skubus atnaujinimas.',
	'changelog' => 'Pakeitimų istorija',
	'update_check_error' => 'Tikrinant ar yra naujų atnaujinimų, įvyko klaida:',
	'instructions' => 'Instrukcijos',
	'download' => 'Parsisiųsti',
	'install_confirm' => 'Įsitikinkite, kad atsisiuntėte paketą ir pirmiausia įkėlėte esančius failus!',
	'check_again' => 'Patikrink dar kartą',

	// Widgets
	'widgets' => 'Valdikliai',
	'widget_enabled' => 'Valdiklis įjungtas',
	'widget_disabled' => 'Valdiklis išjungtas',
	'widget_updated' => 'Valdiklis Atnaujintas',
	'editing_widget_x' => 'Valdiklio redagavimas {x}', // Don't replace {x}
	'module_x' => 'Modulis: {x}', // Don't replace {x}
	'widget_order' => 'Valdiklių Tvarka',

  // Online users widget
  'include_staff_in_user_widget' => 'Įtraukti darbuotojus į naudotojo valdiklį?',

  // Custom Pages
  'pages' => 'Puslapiai',
  'custom_pages' => 'Individualus Puslapis',
  'new_page' => '<i class="fa fa-plus-circle"></i> Naujas Puslapis',
  'no_custom_pages' => 'Kol kas nėra sukurta jokių puslapių.',
  'creating_new_page' => 'Kurti puslapį',
  'page_title' => 'Puslapio Pavadinimas',
  'page_path' => 'Puslapio kelias (prieš / pavyzdžiui, /pavyzdys)',
  'page_icon' => 'Puslapio Piktograma',
  'page_link_location' => 'Puslapio Nuorodos Vieta',
  'page_link_navbar' => 'Naršymo Juosta',
  'page_link_footer' => 'Poraštė',
  'page_link_more' => '"Daugiau" Išskleidžiamajame Meniu',
  'page_link_none' => 'Nėra nuorodos',
  'page_content' => 'Puslapio Turinys',
  'page_redirect' => 'Puslapio Peradresavimas?',
  'page_redirect_to' => 'Nukreipti nuorodą (su ankstesniu http://)',
  'unsafe_html' => 'Leisti nesaugius HTML?',
  'unsafe_html_warning' => 'Įjungus šią parinktį, šiame puslapyje gali būti naudojamas bet koks HTML, įskaitant potencialiai pavojingą JavaScript. Įjunkite tik tai, jei esate tikri, kad jūsų HTML yra saugus.',
  'include_in_sitemap' => 'Įtraukti į svetainės schemą?',
  'sitemap_link' => 'Svetainės schemos nuoroda:',
  'page_permissions' => 'Puslapio Leidimai',
  'view_page' => 'Peržiūrėti Puslapį?',
  'editing_page_x' => 'Redaguoti puslapį {x}', // Don't replace {x}
  'unable_to_create_page' => 'Neįmanoma sukurti puslapio:',
  'page_title_required' => 'Puslapio pavadinimas yra būtinas.',
  'page_url_required' => 'Puslapio kelias yra būtinas.',
  'link_location_required' => 'Nuorodos vieta yra būtina.',
  'page_title_minimum_2' => 'Puslapio pavadinime turi būti ne mažiau kaip 2 simboliai.',
  'page_url_minimum_2' => 'Puslapio kelias turi būti ne mažiau kaip 2 simboliai.',
  'page_title_maximum_30' => 'Puslapio pavadinime turi būti ne daugiau kaip 30 simbolių.',
  'page_icon_maximum_64' => 'Puslapio piktograma turi būti ne ilgesnė kaip 64 simboliai.',
  'page_url_maximum_20' => 'Puslapio kelias turi būti ne daugiau kaip 20 simbolių.',
  'page_content_maximum_100000' => 'Puslapio turinys turi būti ne daugiau kaip 100000 simbolių.',
  'page_redirect_link_maximum_512' => 'Puslapio peradresavimo nuoroda turi būti ne daugiau kaip 512 simbolių.',
  'confirm_delete_page' => 'Ar tikrai norite ištrinti šį puslapį?',
  'page_created_successfully' => 'Puslapis sėkmingai sukurtas.',
  'page_updated_successfully' => 'Puslapis atnaujintas sėkmingai.',
  'page_deleted_successfully' => 'Puslapis ištrintas sėkmingai.',

  // API
  'api' => 'API',
  'enable_api' => 'Įjungti API?',
  'api_info' => 'API leidžia papildintuvams ir kitoms paslaugoms bendrauti su jūsų svetaine, pvz., <a href="https://namelessmc.com/resources/resource/5-namelessplugin/" target="_blank" >oficialus NamelessMC plugin</a>.',
  'enable_legacy_api' => 'Įjungti senajį API?',
  'legacy_api_info' => 'Senasis API leidžia papildintuvus, kurie naudoja seną NamelessMC 1 versijos API, dirbti su jūsų 2 versijos svetaine.',
  'confirm_api_regen' => 'Ar tikrai norite atkurti savo API raktą?',
	'api_key' => 'API Raktas',
	'api_url' => 'API URL',
	'copy' => 'Kopijuoti',
	'api_key_regenerated' => 'API raktas sėkmingai atkurtas.',
  'api_registration_email' => 'API Registracijos el. Paštas',
	'show_registration_link' => 'Rodyti registracijos nuorodą',
	'registration_link' => 'Registracijos Nuoroda',
  'link_to_complete_registration' => 'Nuoroda užbaigti registracijai: {x}', // Don't replace {x}
  'api_verification' => 'Įjungti API patvirtinimą?',
  'api_verification_info' => 'Jei įjungta, paskyros gali būti tikrinamos tik naudojant API, pavyzdžiui, žaidimą naudojant oficialų NamelessMC plugin. <strong>Ši parinktis pakeis el. pašto patvirtinimą, o paskyros bus automatiškai įjungtos!</strong><br /> Turėtumėte nustatyti savo numatytąją grupę, kuri turi ribotus įgaliojimus, ir tada atnaujinti paskyros patvirtinimo grupę StaffCP -> Konfigūracija -> registracijos skirtuke į pilną nario grupę su įprastais leidimais.',
  'enable_username_sync' => 'Įjungti vartotojo vardo sinchronizaciją?',
  'enable_username_sync_info' => 'Jei įjungta, svetainės vatotojų vardai bus atnaujinti, kad atitiktų žaidimo vatotojų vardus.',
	'api_settings_updated_successfully' => 'API nustatymai sėkmingai atnaujinti.',
	'group_sync' => 'Grupės Sinchronizavimas',
	'group_sync_info' => 'Galite sukonfigūruoti API, kad automatiškai atnaujintų naudotojo svetainės grupę, kai pakeista jų žaidimų grupė. Tiesiog įveskite žaidimo grupės pavadinimą ir svetainės grupę, kurią reikia sinchronizuoti su žemiau.',
	'ingame_group' => 'Žaidimo Grupės Pavadinimas',
	'website_group' => 'Svetainės Grupė',
	'set_as_primary_group' => 'Nustatyti kaip pirminę grupę?',
	'set_as_primary_group_info' => 'Jei įjungta, bus atnaujinta vartotojo pagrindinės svetainės grupė. Jei išjungtas, žaidimo grupė bus įtraukta į vartotojo svetainės antrines grupes.',
	'ingame_group_maximum' => 'Prašome įsitikinti, kad jūsų grupės vardas yra ne ilgesnis nei 64 simboliai.',
	'select_website_group' => 'Pasirinkite svetainės grupę.',
	'ingame_group_already_exists' => 'Rango sinchronizavimo taisyklė jau buvo sukurta tai grupei žaidime.',
	'group_sync_rule_created_successfully' => 'Grupės sinchronizavimo taisyklė sėkmingai sukurta.',
	'group_sync_rules_updated_successfully' => 'Grupės sinchronizavimo taisyklės buvo sėkmingai atnaujintos.',
	'group_sync_rule_deleted_successfully' => 'Grupės sinchronizavimo taisyklė buvo sėkmingai ištrinta.',
	'existing_rules' => 'Esamos Taisyklės',
	'new_rule' => 'Nauja Taisyklė',

	// File uploads
	'drag_files_here' => 'Vilkite failus čia, kad įkelti.',
	'invalid_file_type' => 'Neteisingas failo tipas!',
	'file_too_big' => 'Failas per didelis! Jūsų failas buvo {{filesize}} ir riba yra {{maxFilesize}}', // Don't replace {{filesize}} or {{maxFilesize}}
	'allowed_proxies' => 'Leidžiami Įgaliojimai',
	'allowed_proxies_info' => 'Linija atskirtas leidžiamų įgaliojimų IP adresų sąrašas.',

	// Error logs
	'error_logs' => 'Klaidų Žurnalai',
	'notice_log' => 'Pranešimų Žurnalas',
	'warning_log' => 'Įspėjimų Žurnalas',
	'custom_log' => 'Individualus Žurnalas',
	'other_log' => 'Kitas Žurnalas',
	'fatal_log' => 'Mirtinas Žurnalas',
	'log_file_not_found' => 'Žurnalo failas nerastas.',
	'log_purged_successfully' => 'Žurnalas buvo sėkmingai ištrintas.',

	// Hooks
	'discord_hooks' => 'Discord Kabliukai',
	'discord_hooks_info' => 'Siųskite pranešimą į Discord kanalą, kai kažkas atsitinka jūsų svetainėje. Sukurkite Discord kabliuką Discord serverio nustatymuose -> webhooks skirtuke.',
	'discord_hook_url' => 'Discord webhook URL',
	'discord_hook_events' => 'Suaktyvinti Discord hook events (Ctrl + spustelėkite, norėdami pasirinkti kelis įvykius).',
	'register_hook_info' => 'Vartotojo registracija',
	'validate_hook_info' => 'Vartotojo patvirtinimas',
	'delete_hook_info' => 'vartotojo ištrynimas',

	// Sitemap
	'unable_to_load_sitemap_file_x' => 'Nepavyko įkelti svetainės schemos failo {x}', // Don't replace {x}
	'sitemap_generated' => 'Svetainės žemėlapis sėkmingai sukurtas',
	'sitemap_not_writable' => '<strong>cache/sitemaps</strong> folderis yra neįrašomas.',
	'cache_not_writable' => '<strong>cache</strong> folderis yra neįrašomas.',
	'generate_sitemap' => 'Sukurkite Svetainės Schemą',
	'download_sitemap' => 'Atsisiųsti Svetainės Schemą',
	'sitemap_not_generated_yet' => 'Svetainės schema dar nebuvo sukurta!',
	'sitemap_last_generated_x' => 'Svetainės schema paskutinį kartą buvo sukurta {x}', // Don't replace {x}

	// Page metadata
	'page_metadata' => 'Puslapio Metaduomenys',
	'metadata_page_x' => 'Puslapio {x} metaduomenų peržiūra.', // Don't replace {x}
	'keywords' => 'Raktiniai Žodžiai',
	'description_max_500' => 'Aprašymas turi būti ne daugiau kaip 500 simbolių',
	'page' => 'Puslapis',
	'metadata_updated_successfully' => 'Metaduomenys sėkmingai atnaujinti.',

	// Dashboard
	'total_users' => 'Visi Vartotojai',
	'total_users_statistic_icon' => '<i class="fas fa-users"></i>',
	'recent_users' => 'Nauji Vartotojai',
	'recent_users_statistic_icon' => '<i class="fas fa-users"></i>',
	'average_players' => 'Vidutiniai žaidėjai',
	'nameless_news' => 'NamelessMC Naujienos',
	'unable_to_retrieve_nameless_news' => 'Nepavyko gauti naujausių naujienų.',
	'confirm_leave_site' => 'Jūs ketinate palikti šią svetainę! Ar tikrai norite aplankyti <strong id="leaveSiteURL">{x}</strong>?', // don't replace {x} and make sure it has the id leaveSiteURL
	'server_compatibility' => 'Serverio Suderinamumas',
	'issues' => 'Problemos',

	// Other
	'source' => 'Šaltinis',
	'support' => 'Pagalba',
	'admin_dir_still_exists' => 'Įspėjimas! <strong>modules/Core/pages/admin</strong> folderis dar egzistuoja. Prašuome pašalinti ši folderi.',
	'mod_dir_still_exists' => 'Įspėjimas! <strong>modules/Core/pages/mod</strong> folderis dar egzistuoja. Prašuome pašalinti ši folderi.'
);
