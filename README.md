wapi
====
Ebauche de gestionnaire de route pour API


L'objectif est le suivant
- utiliser au maximum les outils existant sans devoir recoder des fonctionnalités basiques
- se rapprocher au plus bas possible de la machine

Le mode de fonctionnement est le suivant :
- Le système d'exploitation et le serveur gèrent les routes
- Le plus possible de code est réutilisé en cas de mise à jour
- Chaque nouvelle version d'un objet va hériter du précédent
- Chaque controlleur est un fichier plat incluant le moins possible d'autres fichiers pour économiser les ressources
- A la fin de chaque déploiement, le script scripts/postdeploy/postdeployscript.php doit être executé
- Les routes sont définies dans routes.ini

Les paramètres passés aux controlleurs sont récupérés par l'objet soumission, le contenu est disponible dans l'objet $request
Le rendereur est automatiquement crée, pour effectuer le rendu, il suffit d'appeller la methode souhaitée, par exemple $render->json();


La version "live" est accessible ici :

http://ec2.willou.com/wapi/

exemples :

je veux appeler la dernière version stable de membre :
http://ec2.willou.com/wapi/latest/membre/

je veux appeler la version instable de membre :
http://ec2.willou.com/wapi/beta/membre/

je veux appeler une vieille version de membre :
http://ec2.willou.com/wapi/version/1/membre/
