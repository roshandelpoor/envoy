@servers([ 'web' => '127.0.0.1' ])

@macro('envoyTaskMacroToLocalHost')
	
	git
	artisan
	
@endmacro

@task( 'git' , [ 'on' => 'web' ] )
	
	git stash
	
@endtask

@task( 'artisan' , [ 'on' => 'web' ] )

	php artisan --version

@endtask
@after
	@slack( 'https://hooks.slack.com/services/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', '@mohammad.roshandelpoo', 'sending from envoy' );
@endafter