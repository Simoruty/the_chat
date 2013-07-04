<?php

	  $italian = array(

	  // Admin settings

		'bbar:admin:basicopts' 		=> 'Opzioni di base',
		'bbar:admin:refreshrate'	=> 'Frequenza di aggiornamento <br>(Tempi lunghi = Meno sovraccarichi del server)',
		'bbar:admin:idlethreshold'	=> 'Soglia di inattività dell\'utente',
		'bbar:admin:offlinethreshold'	=> 'User offline threshold',
		'bbar:admin:allowchat'		=> 'Abilita chat?',
		'bbar:admin:forceloginpage'	=> 'Force users to the login page if logged out?',
		'bbar:admin:allowmenu'		=> 'Enable ELGG menu on clicking logo?',
		'bbar:admin:allowradio'		=> 'Enable Radio button?',
		'bbar:admin:allowsounds'	=> 'Enable Chat notification sounds?',
		'bbar:admin:radiourl'		=> 'Stream URL for radio<br>(must be an MP3, or an icecast server)',
		'bbar:admin:logolocation'	=> 'Logo image to be used bottom left:<br>(Leave blank to use the default. Can be jpg,gif or png. File to be stored in /mod/bottom_bar/graphics/icons/)',

		'bbar:admin:dbopts'		=> 'Opzioni del Database',
		'bbar:admin:dboptsdesc'		=> 'Questo plugin può essere usato o dal nostro SQLite database oppure usando MySQL tramite oggetti ELGG. Se non sei sicuro dei settaggi da usare, utilizza SQLite',
		'bbar:admin:dboptstype'		=> 'Tipo di Database',
		'bbar:admin:dbmysqlopts'	=> '<b>Mysql Options</b> (ignore if you selected SQLite above)',
		'bbar:admin:dboptsuseelgg'	=> 'Usa i settaggi/Database di ELGG',
		'bbar:admin:dbmysqlsettings'	=> '<b>Mysql custom settings</b><br>(ignore if you are using SQLite or ELGG objects)',
		'bbar:admin:dbmysqlhost'	=> 'Host<br>(FQDNS or IP)',
		'bbar:admin:dbmysqluser'	=> 'Username<br>(Must have create privs)',
		'bbar:admin:dbmysqlpass'	=> 'Password',
		'bbar:admin:dbmysqldbase'	=> 'Database',
		'bbar:admin:dbmysqlprefix'	=> 'Table prefix',

		'bbar:admin:nosqlite'		=> 'Estensione SQLite non installata',

		'bbar:admin:second'		    => 'secondo',
		'bbar:admin:seconds'		=> 'secondi',
		'bbar:admin:minute'		    => 'minuto',
		'bbar:admin:minutes'		=> 'minuti',

	  // User settings

		'bbar:user:enablechat'		=> 'Abilita chat?',
		'bbar:user:enablesounds'	=> 'Abilita suono?',
		'bbar:user:enableicons'		=> 'Mostrare le icone degli utenti nella chat?',
        'option:yes'                => 'Si',
        'option:no'                => 'No',

	  // Bar language

		'bbar:bar:notifications'	=> 'Notifiche',
		'bbar:bar:notify.all'		=> 'Tutte',
		'bbar:bar:notify.mine'		=> 'Mie',
		'bbar:bar:friends'		    => 'Amici',
		'bbar:bar:online'		    => 'online',
		'bbar:bar:offline'		    => 'offline',
		'bbar:bar:istyping'		    => 'Sta scrivendo',
		'bbar:bar:noneonline'		=> 'Nessun amico online',
        'bbar:bar:nofriends'	    => 'Chi trova un amico trova un tesoro',
        'bbar:bar:chatEnabledOff'   => 'Chat disabilitata',
        'bbar:bar:chatBar'          => 'Chat'
          );

          add_translation("it",$italian);


?>
