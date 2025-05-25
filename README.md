# Controle de Motoristas Escolares - Projeto 3° Semestre

Projeto de terceiro semestre da faculdade destinado a ajudar **escolas de bairro**, com núcleo do projeto sendo o gerenciamento dos **motoristas escolares** usando um sistema de banco de dados *MySQL*.

## Membros do projeto e RAs

- Danilo Batista Pereira: 3022106926
- Erick Fernando Priore Michelan: 3023104368
- Guilherme Fonseca Oliva: 3025104317
- Guilherme Messias de França: 3024105228
- Kauan Faria Nascimento: 3024103486
- Matheus Osmédio Araujo: 3024102070
- Matheus Paulucci Ferreira: 3024104172
- Sílvio Bernardo Sapuile: 3023203839

## Lista de Funções

- Tabelas para Motoristas, Veiculos, Alunos, Responsáveis e Escolas  :pencil: 
- Front-End via HTML e CSS :computer:
- Integração com Back-End via PHP com MySQL :package:
- Hospedagem local na máquina :file_folder:

## Documentação
Documentação disponível no arquivo "*Documentação banco de dados*"

## Instalação

1. Baixe os arquivos do programa <br><br>
![Primeira etapa Tutorial](/tutorial/imagem_tutorial_1.png)
2. Instale o programa [XAMPP](https://www.apachefriends.org/pt_br/index.html) marcando para instalar o MySQL e o Apache
3. Inicie o MySQL e em seguida vá até *Admin* <br><br>
![Terceira etapa Tutorial](/tutorial/imagem_tutorial_3-1.png) <br><br>
![Terceira etapa Tutorial](/tutorial/imagem_tutorial_3-2.png)
4. Vá até *Import/Importar* e faça upload do arquivo  **transporte_escolar.sql**  presente nos arquivos baixados <br><br>
![Quarta etapa Tutorial](/tutorial/imagem_tutorial_4.png)
5. Desça a página até o final e clique em OK <br><br>
![Quinta etapa Tutorial](/tutorial/imagem_tutorial_5.png)
6.  Volte no XAMPP e clique no botão *Explorar*, em seguida vá até a pasta *htdocs* e coloque dentro a pasta com os arquivos baixados <br><br>
![Sexta etapa Tutorial](/tutorial/imagem_tutorial_6-1.png) <br><br>
![Sexta etapa Tutorial](/tutorial/imagem_tutorial_6-2.png)
7.  Vá até *SQL* e insira o seguinte código <br><br>
![Sétima etapa Tutorial](/tutorial/imagem_tutorial_7.png) 
> `INSERT INTO Escola (Nome, Endereco, Telefone) VALUES ('[Insira o Nome da Escola], '[Endereço da Escola]', '[Telefone da Escola]');`
8. Entre no site
> http://localhost/transporte_escolar/index.php
