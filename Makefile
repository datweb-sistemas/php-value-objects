# Makefile

# Definição de variáveis
IMAGE_NAME = php-xdebug82:local
CONTAINER_NAME = php-xdebug82-container
APP_DIR = $(shell pwd)
WORKDIR = /app

# Comando Docker
DOCKER = docker

# Alvo genérico para construir a imagem Docker local
.PHONY: build
build:
	$(DOCKER) build -t $(IMAGE_NAME) .

# Comando para executar dentro do Docker
DOCKER_RUN = $(DOCKER) run --rm \
	-v $(APP_DIR):$(WORKDIR) \
	-w $(WORKDIR) \
	$(IMAGE_NAME)

# Definição do PHPUnit dentro do Docker
PHPUNIT = $(DOCKER_RUN) ./vendor/bin/phpunit -c phpunit.xml
TEST_DIR = tests
COVERAGE_DIR = coverage

# Opções de cobertura
COVERAGE_HTML = --coverage-html $(COVERAGE_DIR)
COVERAGE_TEXT = --coverage-text
COVERAGE_XML = --coverage-clover coverage.xml.dist

# Alvos que não correspondem a arquivos
.PHONY: all test coverage coverage-html coverage-text coverage-xml clean build

# Alvo padrão
all: build test

# Executa os testes
test: build
	$(PHPUNIT) $(TEST_DIR)

# Gera relatório de cobertura em HTML
coverage-html: build
	$(PHPUNIT) $(COVERAGE_HTML) $(TEST_DIR)

# Gera relatório de cobertura no terminal
coverage-text: build
	$(PHPUNIT) $(COVERAGE_TEXT) $(TEST_DIR)

# Gera relatório de cobertura em XML
coverage-xml: build
	$(PHPUNIT) $(COVERAGE_XML) $(TEST_DIR)

# Alvo genérico para cobertura (executa todos os relatórios de cobertura)
coverage: coverage-html coverage-text coverage-xml

# Limpa os relatórios de cobertura
clean:
	rm -rf $(COVERAGE_DIR) coverage.xml
