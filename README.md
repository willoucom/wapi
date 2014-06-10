wapi
====
Ebauche de gestionnaire de route pour API


L'objectif est le suivant
- utiliser au maximum les outils existant sans devoir recoder des fonctionnalit�s basiques
- se rapprocher au plus bas possible de la machine

Le mode de fonctionnement est le suivant :
- Le syst�me d'exploitation et le serveur g�rent les routes
- Le plus possible de code est r�utilis� en cas de mise � jour
- Chaque nouvelle version d'un objet va h�riter du pr�c�dent
- Chaque controlleur est un fichier plat incluant le moins possible d'autres fichiers pour �conomiser les ressources
- A la fin de chaque d�ploiement, le script scripts/postdeploy/postdeployscript.php doit �tre execut�
- Les routes sont d�finies dans routes.ini

Les param�tres pass�s aux controlleurs sont r�cup�r�s par l'objet soumission, le contenu est disponible dans l'objet $request
Le rendereur est automatiquement cr�e, pour effectuer le rendu, il suffit d'appeller la methode souhait�e, par exemple $render->json();


La version "live" est accessible ici :

http://ec2.willou.com/wapi/

exemples :

je veux appeler la derni�re version stable de membre :
http://ec2.willou.com/wapi/latest/membre/

je veux appeler la version instable de membre :
http://ec2.willou.com/wapi/beta/membre/

je veux appeler une vieille version de membre :
http://ec2.willou.com/wapi/version/1/membre/
