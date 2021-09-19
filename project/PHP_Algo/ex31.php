<?php
    function positivite($nb1, $nb2){
        if( $nb1*$nb2 > 0 ){
            return 'positif';
        } elseif( $nb1*$nb2 < 0 ){
            return 'négatif';
        } elseif( $nb1*$nb2 == 0 ){
            return 'positif et négatif (0)';
        } else{
            return 'ERROR';
        }
    }

    if (!empty($_POST['nb1']) && !empty($_POST['nb2']) ){
        $nb1 = $_POST['nb1'];
        $nb2 = $_POST['nb2'];

        echo 'Le produit de ' . $nb1 . ' et ' . $nb2 . ' est ' . positivite($nb1, $nb2) . '. <br>';
    } else{
        echo "Entrez deux nombres svp :<br>";
        ?>
        <form method="post" action="" class="input-group form-inline m-2">
            <input type="number" name="nb1" placeholder="Nombre n1">
            <input type="number" name="nb2" placeholder="Nombre n2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <?php
    }
?>