# abilita apache e htaccess
    composer require symfony/apache-pack
# FIX @see: https://stackoverflow.com/questions/50747664/symfony4-annotation-routing-does-not-work
# trucchetto: https://stackoverflow.com/questions/4879025/creating-files-with-some-content-with-shell-script

cat <<EOF > ./public/.htaccess
    <IfModule mod_rewrite.c>
        Options -MultiViews
        RewriteEngine On
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteRule ^(.*)$ index.php [QSA,L]
    </IfModule>

    <IfModule !mod_rewrite.c>
        <IfModule mod_alias.c>
            RedirectMatch 302 ^/$ /index.php/
        </IfModule>
    </IfModule>
EOF

    # installa twig (ma forse cè già)
    composer require twig
    # abilita le annotations
    composer require annotations
    # per usare i vari maker e il CRUD: php bin/console make:crud 
    composer require symfony/maker-bundle --dev
    # debugger dump
    composer require --dev symfony/var-dumper

    # test forse manca qualcosa
    composer require --dev symfony/phpunit-bridge
    composer require --dev symfony/browser-kit symfony/css-selector
    
    composer require --dev dama/doctrine-test-bundle
    composer require --dev doctrine/doctrine-fixtures-bundle
    
    composer req --dev tests
    # nota panther ha fallito
    composer require symfony/panther.
     ./vendor/bin/simple-phpunit