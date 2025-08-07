# Jenkins Agent personnalisé avec Composer

Cette image Docker sert d'agent Jenkins personnalisé, incluant Composer pour gérer le backend PHP.

## Utilisation

- Construire l'image : `docker build -t jenkins-agent-composer .`
- Pousser vers un registre : `docker push ton-utilisateur/jenkins-agent-composer:latest`
- Configurer Jenkins pour utiliser cette image comme agent.

## Repository

[Voir le code source ici](https://github.com/Jswati4/MyBank_.git)

# Jenkins Agent personnalisé avec NodeJS et Jest

Cette image Docker est un agent Jenkins personnalisé incluant **NodeJS** et **Jest**, utile pour les projets frontend.

## Construction de l’image

```bash
docker build -t jenkins-agent-nodejs-jest .


