SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE DATABASE IF NOT EXISTS petshop;
USE petshop;

CREATE TABLE IF NOT EXISTS cliente (
    id_cliente INT NOT NULL AUTO_INCREMENT,
    nome_cliente VARCHAR(100) NOT NULL,
    email_cliente VARCHAR(100),
    telefone_cliente VARCHAR(20),
    endereco_cliente VARCHAR(200),
    cpf_cliente VARCHAR(20),
    PRIMARY KEY (id_cliente)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS pet (
    id_pet INT NOT NULL AUTO_INCREMENT,
    nome_pet VARCHAR(100) NOT NULL,
    especie_pet VARCHAR(50),
    raca_pet VARCHAR(50),
    idade_pet INT,
    sexo_pet VARCHAR(10),
    cliente_id_cliente INT NOT NULL,
    PRIMARY KEY (id_pet),
    FOREIGN KEY (cliente_id_cliente) REFERENCES cliente(id_cliente)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS servico (
    id_servico INT NOT NULL AUTO_INCREMENT,
    nome_servico VARCHAR(100) NOT NULL,
    descricao_servico VARCHAR(200),
    valor_servico DECIMAL(10,2),
    duracao_servico INT,
    PRIMARY KEY (id_servico)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS agendamento (
    id_agendamento INT NOT NULL AUTO_INCREMENT,
    data_agendamento DATE NOT NULL,
    hora_agendamento TIME NOT NULL,
    cliente_id_cliente INT NOT NULL,
    pet_id_pet INT NOT NULL,
    servico_id_servico INT NOT NULL,
    status ENUM('pendente','concluido','cancelado') NOT NULL DEFAULT 'pendente',
    PRIMARY KEY (id_agendamento),
    FOREIGN KEY (cliente_id_cliente) REFERENCES cliente(id_cliente)
        ON DELETE CASCADE,
    FOREIGN KEY (pet_id_pet) REFERENCES pet(id_pet)
        ON DELETE CASCADE,
    FOREIGN KEY (servico_id_servico) REFERENCES servico(id_servico)
        ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS categoria (
    id_categoria INT NOT NULL AUTO_INCREMENT,
    nome_categoria VARCHAR(100) NOT NULL,
    descricao_categoria VARCHAR(255),
    PRIMARY KEY (id_categoria)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS produto (
    id_produto INT NOT NULL AUTO_INCREMENT,
    nome_produto VARCHAR(100) NOT NULL,
    descricao_produto VARCHAR(255),
    preco_produto DECIMAL(10,2),
    estoque_produto INT,
    categoria_id INT DEFAULT NULL,
    PRIMARY KEY (id_produto),
    FOREIGN KEY (categoria_id) REFERENCES categoria(id_categoria)
        ON DELETE SET NULL
) ENGINE=InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
