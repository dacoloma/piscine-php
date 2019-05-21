#!/usr/bin/php
<?PHP
while(1){
    echo "Entrez un nombre: ";
    if (($ans = trim(fgets(STDIN))) == NULL){
        exit(0);
    }
    if (is_numeric($ans)){
        echo "Le chiffre " . $ans . " est ";
        if ((int)$ans % 2 == 0){
            echo "Pair\n";
        }
        else{
            echo "Impair\n";
        }
    }
    else{
        echo "'" . $ans . "' n'est pas un chiffre\n";
    }
}
exit(0);
?>