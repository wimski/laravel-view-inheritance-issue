up:
	@docker-compose up -d app

down:
	@docker-compose down --remove-orphans

fresh:
	@make destroy
	@docker-compose build
	@docker-compose pull
	@make setup

destroy:
	@docker-compose down --remove-orphans --volumes

.PHONY: app
app:
	@docker-compose exec app sh

setup:
	@make up
	@docker-compose exec app composer install
