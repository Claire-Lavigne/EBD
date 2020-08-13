# Utilisation du pattern

## Liste des étapes

- Mise en place du projet
    - `composer install`
    - `npm install`
    - `npm run build:prod`
- Création de la BDD
    - PHPMyAdmin --> créer 'wp_EBD' --> importer 'wp_EBD.sql'
- Création du fichier `wp-config.php` à partir du fichier `wp-config-sample.php`
    - Renseigner les informations de connexion à la BDD
    - Renseigner les clés de salage [URL pratique](https://api.wordpress.org/secret-key/1.1/salt/)
- Changer les droits des fichiers/dossier de mon projet à la racine du projet
    ```bash
    sudo chown -R <user>:www-data . (linux)
    # sudo chown -R <user>:_www . (mac)
    sudo find . -type f -exec chmod 664 {} +
    sudo find . -type d -exec chmod 775 {} +
    sudo chmod 644 .htaccess
    ```
- Se rendre sur [notre projet](http://localhost/EBD/) pour terminer l'installation de WordPress
- [Se connecter](http://localhost/EBD/login) au back-office
