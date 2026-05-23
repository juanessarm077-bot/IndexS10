echo "# S10" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/juanessarm077-bot/S10.git
git push -u origin main













<?php

class BD {
    public static $instancia = null;

    public static function crearinstancia() {
        if (self::$instancia === null) {
            $opciones = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];
            self::$instancia = new PDO(
                'mysql:host=localhost;dbname=aplicacions11',
                'root',
                '',
                $opciones
            );
           ///echo "Conexion exitosa";
        }
        return self::$instancia;











    }
}

?>