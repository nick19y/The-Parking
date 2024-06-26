CREATE DATABASE estacionamento_mariah;
USE estacionamento_mariah;
CREATE TABLE estacionamento(
    idEstacionamento INT PRIMARY KEY AUTO_INCREMENT,
    horario_atual_entrada TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
    horario_atual_saida TIMESTAMP,
    placa_veiculo CHAR(8) NOT NULL,
    valor_hora DECIMAL(10,2),
    total DECIMAL(10,2),
    veiculo VARCHAR (25) NOT NULL
) engine InnoDB;
CREATE TABLE preco(
    idPreco INT PRIMARY KEY AUTO_INCREMENT,
    veiculo VARCHAR(50),
    preco DECIMAL(5,2)
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
CREATE TABLE preco_estacionamento(
    fkEstacionamento INT,
    fkPreco INT,
    FOREIGN KEY (fkEstacionamento) REFERENCES estacionamento(idEstacionamento),
    FOREIGN KEY (fkPreco) REFERENCES preco(idPreco),
    PRIMARY KEY (fkEstacionamento, fkPreco)
) engine InnoDB;


INSERT INTO preco VALUES(1,"carro", 5);
INSERT INTO preco VALUES(2,"moto", 2.5);
-- exemplo de um insert into com datetime
-- INSERT INTO estacionamento(parametro, horario_entrada, horario_saida)
-- VALUES('', '2023-10-22 14:45:30');


-- quantidade de serviços do dia
-- select max(idEstacionamento) from estacionamento;

-- retorno  do dia
-- SELECT LEFT(horario_atual_entrada, 10) FROM estacionamento;

-- retorno do horário
-- SELECT RIGHT(horario_atual_entrada, 8) FROM estacionamento;

-- retorno do dia da semana
-- SELECT dayofweek(LEFT(horario_atual_entrada, 10))  FROM estacionamento;
-- 1 é domingo, 7 é sábado


-- INSERT dentro da tabela, não vai funcionar pelo id, pois esse se atualiza e não guarda a quantidade
-- a solução pode ser um sum na consulta ou um novo campo no sql que guarde a quantidade de veículos
-- INSERT INTO estacionamento values(6, '2023-05-01 08:45:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'AKD0398', 'carro');

-- horario_entrada DATETIME NOT NULL,
-- horario_saida DATETIME NOT NULL,


-- preco_carro DECIMAL(5,2) DEFAULT 5,
-- preco_moto DECIMAL(5,2) DEFAULT 2.5


-- insert com horario de saida que deixa de ser null e por isso não é exibido na tela
-- insert into estacionamento(horario_atual_saida, placa_veiculo, veiculo) values('2022-07-01 00:00:00', 'KFP4095', 'carro');



-- preco DECIMAL(5,2)

--     preco_carro DECIMAL(5,2) DEFAULT 5,
-- preco_moto DECIMAL(5,2) DEFAULT 2.5


-- perguntas

-- consulta para pegar o inner join de duas tabelas
-- select * from preco p inner join preco_estacionamento pe inner join estacionamento e
-- on p.idPreco = pe.fkPreco
-- and e.idEstacionamento = pe.fkEstacionamento;
-- SELECT * FROM preco p INNER JOIN preco_estacionamento pe INNER JOIN estacionamento e ON p.idPreco = pe.fkPreco AND e.idEstacionamento = pe.fkEstacionamento
-- ver pq a consulta acima não retorna nenhum valor
-- não funciona pq não há valores semelhantes entre as tabelas, não sei como salvar em duas tabelas em uma model


-- insert para o preco
-- insert into preco (preco_carro, preco_moto) values(5.00, 2.00); 


-- pegar uma consulta que mostra a soma de registros diária


-- normalmente o hash de senha tem 72 caracteres