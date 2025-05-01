
CREATE DATABASE IF NOT EXISTS transporteescolar;
USE transporteescolar;

-- Tabela de Motoristas
CREATE TABLE Motorista (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(100) NOT NULL,
    Email VARCHAR(100) UNIQUE NOT NULL,
    CNH VARCHAR(20) NOT NULL,
    Telefone VARCHAR(20)
);

-- Tabela de Onibus
CREATE TABLE Onibus (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Modelo VARCHAR(50) NOT NULL,
    Placa VARCHAR(20) UNIQUE NOT NULL
);

-- Relacionamento entre Motorista e Onibus
CREATE TABLE Motorista_Onibus (
    ID_Motorista INT,
    ID_Onibus INT,
    PRIMARY KEY (ID_Motorista, ID_Onibus),
    FOREIGN KEY (ID_Motorista) REFERENCES Motorista(ID),
    FOREIGN KEY (ID_Onibus) REFERENCES Onibus(ID)
);

-- Tabela de Escolas
CREATE TABLE Escola (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(100) NOT NULL,
    Endereco VARCHAR(255),
    Telefone VARCHAR(20)
);

-- Tabela de Responsaveis
CREATE TABLE Responsavel (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(100) NOT NULL,
    Telefone VARCHAR(20)
);

-- Tabela de Alunos
CREATE TABLE Aluno (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(100) NOT NULL,
    Idade INT,
    Endereco VARCHAR(255),
    Horario_Aula TIME,
    Cuidados_Especiais BOOLEAN DEFAULT 0,
    Contato_Responsavel VARCHAR(20),
    ID_Escola INT,
    FOREIGN KEY (ID_Escola) REFERENCES Escola(ID)
);

-- Relacionamento entre Alunos e Responsaveis
CREATE TABLE Aluno_Responsavel (
    ID_Aluno INT,
    ID_Responsavel INT,
    PRIMARY KEY (ID_Aluno, ID_Responsavel),
    FOREIGN KEY (ID_Aluno) REFERENCES Aluno(ID),
    FOREIGN KEY (ID_Responsavel) REFERENCES Responsavel(ID)
);

-- Tabela de Mensalidades
CREATE TABLE Mensalidade (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    ID_Aluno INT,
    Valor DECIMAL(10,2) NOT NULL,
    Data_Vencimento DATE NOT NULL,
    Data_Pagamento DATE,
    Status ENUM('Pendente', 'Pago') DEFAULT 'Pendente',
    FOREIGN KEY (ID_Aluno) REFERENCES Aluno(ID)
);
