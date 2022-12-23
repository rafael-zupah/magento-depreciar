.PHONY: *

help:
	@printf "\033[33mComo usar:\033[0m\n  make [comando] [arg=\"valor\"...]\n\n\033[33mComandos:\033[0m\n"
	@grep -E '^[-a-zA-Z0-9_\.\/]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "  \033[32m%-30s\033[0m %s\n", $$1, $$2}'

up: ## Inicia os containers do PHP e MYSQL
	sudo service docker start || true
	docker-compose up -d --force-recreate
	printf "\n\n\e[42m\e[30m meece \e[0m \e[32mpronto para uso! \e[0m-> \e[94m\e[4mhttps://dev.meece.com.br\e[0m\n\n"

down: ## Para os containers do PHP e MYSQL
	sudo service docker start || true
	docker-compose down

restart: ## Reinicia os containers do PHP e MYSQL
	make down || true
	make up

bash: ## Bash dentro do container PHP
	docker exec -ti meece-php bash

bash-mysql: ## Bash dentro do container PHP
	docker exec -ti meece-mysql bash

mysql: ## Entra direto no mysql do container
	docker exec -ti meece-mysql mysql -proot

rebuild: ## Deleta todas as imagens e containers e faz o build
	make down || true
	docker-compose build --no-cache
	make up
