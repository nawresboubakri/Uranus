
 <?PHP
 include "../../entities/personels.php";
 include "../../core/reclam.php";


if (isset($_POST['modifier'])){
    $personel=new PersonelsC();
    $personel1=new Personels($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['mail'],$_POST['tel']);
    $personel->modifierPers($personel1,$_POST['cin_1']);
    echo $_POST['cin_1'];
    header('Location: table-service.php');
}
?>