CREATE DATABASE estacionamento_mariah;
USE estacionamento_mariah;
CREATE TABLE estacionamento(
    idEstacionamento INT PRIMARY KEY AUTO_INCREMENT,
    horario_atual TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
    horario_entrada DATETIME NOT NULL,
    horario_saida DATETIME NOT NULL,
    placa_veiculo CHAR(8) NOT NULL,
    veiculo VARCHAR (25) NOT NULL
) engine InnoDB;
-- veiculo é o tipo, carro ou moto
CREATE TABLE funcionario(
    idFuncionario INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(80) NOT NULL,
    senha VARCHAR(80) NOT NULL,
    nome VARCHAR(60) NOT NULL,
    nivel BIT(1) NOT NULL
) engine InnoDB;
CREATE TABLE cliente(
    idCliente INT PRIMARY KEY AUTO_INCREMENT,
    placa_veiculo CHAR(8) NOT NULL
) engine InnoDB;
CREATE TABLE veiculo(
    idVeiculo INT PRIMARY KEY AUTO_INCREMENT,
    tipo_veiculo VARCHAR (25) NOT NULL,
    placa_veiculo CHAR(8) NOT NULL
) engine InnoDB;
CREATE TABLE funcionario_estacionamento(
    fkEstacionamento INT,
    fkFuncionario INT,
    FOREIGN KEY (fkEstacionamento) REFERENCES estacionamento (idEstacionamento),
    FOREIGN KEY (fkFuncionario) REFERENCES funcionario (idFuncionario),
    PRIMARY KEY(fkEstacionamento, fkFuncionario)
) engine InnoDB;
CREATE TABLE cliente_funcionario(
    fkFuncionario INT,
    fkCliente INT,
    FOREIGN KEY (fkFuncionario) REFERENCES funcionario (idFuncionario),
    FOREIGN KEY (fkCliente) REFERENCES cliente(idCliente),
    PRIMARY KEY(fkFuncionario, fkCliente)
) engine InnoDB;
CREATE TABLE cliente_veiculo(
    fKVeiculo INT,
    fkCliente INT,
    FOREIGN KEY (fKVeiculo) REFERENCES veiculo (idVeiculo), 
    FOREIGN KEY (fkCliente) REFERENCES cliente (idCliente),
    PRIMARY KEY(fkVeiculo, fkCliente)
) engine InnoDB;
CREATE TABLE veiculo_estacionamento(
    fKVeiculo INT,
    fkEstacionamento INT,
    FOREIGN KEY (fKVeiculo) REFERENCES veiculo(idVeiculo),
    FOREIGN KEY (fkEstacionamento) REFERENCES estacionamento(idEstacionamento),
    PRIMARY KEY (fkVeiculo, fkEstacionamento)
) engine InnoDB;


-- exemplo de um insert into com datetime
-- INSERT INTO estacionamento(parametro, horario_entrada, horario_saida)
-- VALUES('', '2023-10-22 14:45:30');