# Simple E-Commerce Shopping Cart

## Boot Section
To get started with the development environment:
1. Clone the repository.
2. Run `docker-compose up -d`.
3. Follow further instructions in the `docs` folder.

## Frontend Development
To run the Vite development server:
1. Start the containers: `docker-compose up -d`
2. Run Vite: `docker exec trisnna-node npm run dev`
The development server will be available at `http://localhost:5173`.

To build assets for production:
`docker exec trisnna-node npm run build`