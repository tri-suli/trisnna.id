# Simple E-Commerce Shopping Cart

## Boot Section
To get started with the development environment:
1. Clone the repository.
2. Run `docker-compose up -d`.
3. Follow further instructions in the `docs` folder.

## Frontend Development
The project uses Docker for Node/NPM. To manage frontend assets:
- **Install dependencies**: `docker exec trisnna-node npm install`
- **Build assets**: `docker exec trisnna-node npm run build`
- **Development (Vite)**: `docker exec trisnna-node npm run dev`