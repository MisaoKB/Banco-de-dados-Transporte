# Controle de Motoristas Escolares - Projeto 3° Semestre

Projeto de terceiro semestre da faculdade destinado a ajudar **escolas de bairro**, com núcleo do projeto sendo o gerenciamento dos **motoristas escolares** usando um sistema de banco de dados *MySQL*.

## Lista de Funções

- Tabelas para Motoristas, Veiculos, Alunos, Responsáveis e Escolas  :pencil: 
- Front-End via HTML e CSS :computer:
- Integração com Back-End via PHP com MySQL :package:
- Hospedagem local na máquina :file_folder:

## Documentação
Documentação disponível no arquivo "*Projeto Banco de Dados*"

## Instalação

1. Baixe os arquivos do programa
![Primeira etapa Tutorial](/tutorial/imagem_tutorial_1.png)
2. Instale o programa [XAMPP](https://www.apachefriends.org/pt_br/index.html) marcando para instalar o MySQL e o Apache
3. Inicie o MySQL e em seguida vá até *Admin*
![Terceira etapa Tutorial](/tutorial/imagem_tutorial_3-1.png)
![Terceira etapa Tutorial](/tutorial/imagem_tutorial_3-2.png)
4. Vá até *Import/Importar* e faça upload do arquivo  **transporte_escolar.sql**  presente nos arquivos baixados na Etapa 1
![Quarta etapa Tutorial](/tutorial/imagem_tutorial_4.png)
5. Desça a página até o final e clique em OK
![Quinta etapa Tutorial](/tutorial/imagem_tutorial_5.png)
6. Vá até *SQL* e insira o seguinte código 
> `INSERT INTO Escola (Nome, Endereco, Telefone) VALUES ('[Insira o Nome da Escola], '[Endereço da Escola]', '[Telefone da Escola]');`
7. Entre no site
> http://localhost/transporte_escolar/index.php
