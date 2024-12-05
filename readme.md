Documento de Requisitos do Sistema (Sistema de Tarefas) Versão 1.0 

Projeto aplicado da disciplina Programação Web 

Cronograma do Projeto 

 
aaaaaaaaaaaaaaaaaaaaaaaaaa
Data 

Descrição 

14/11/2024 

Definição da equipe e tema do projeto 

15/11/2024 

Divisão de tarefas entre membros do projeto 

18/11/2024 

Daily com equipe do projeto/Desenvolvimento 

21/11/2024 

Reunião/Encontro com o cliente 

22/11/2024 

Daily com equipe do projeto/Desenvolvimento 

25/11/2024 

Daily com equipe do projeto/Desenvolvimento 

27/11/2024 

Daily com equipe do projeto/Desenvolvimento 

28/11/2024 

Reunião/Encontro com o cliente 

29/11/2024 

Daily com equipe do projeto/Desenvolvimento 

02/12/2024 

Daily com equipe do projeto/Desenvolvimento 

03/12/2024 

Testes finais do projeto 

03/12/2024 

Daily final com equipe do projeto/Desenvolvimento 

04/12/2024 

Teste final do projeto 

04/12/2024 

Última Daily sobre o projeto 

04/12/2024 

Projeto finalizado 

05/12/2024 

Entrega final do projeto ao cliente 

Equipe de desenvolvimento 

 

Nome 

Função 

Geovanni Silvestre 

Gestor/Design/Front-end 

Geovanna Silva 

Desenvolvedor(a) Back-end 

Walber Nascimento 

Desenvolvedor Back-end 

Israel Ferreira 

Desenvolvedor Full-stack 

Letícia Raquel 

Desenvolvedor(a) Full-stack 

 

 

 

Link do Repositório Github 

https://github.com/geovannisilvestre/projeto_final_PHP.git 

 



Introdução 

Este documento especifica os requisitos de um projeto desenvolvido sobre sistema de Tarefas, tendo como base a linguagem de programação PHP, para o desenvolvimento do projeto. Fornecendo aos desenvolvedores e stakeholders,  as informações necessárias para o projeto e implementação, assim como para a realização dos testes e homologação do sistema. 

 

O Projeto consiste na criação de um sistema web voltado à parte de acadêmica/Escolar/Produtos etc. O Mesmo deverá dar acessos aos alunos às suas notas e ao professor a oportunidade de lançar notas e faltas, além de criar turmas e administrá-las. 

 

Descrição geral do sistema 

 

O Projeto Sistema de Tarefas é uma aplicação web simples e intuitiva desenvolvida para facilitar o gerenciamento e organização de tarefas do dia a dia. O sistema permite que o usuário registre suas atividades, acompanhe o progresso e faça ajustes conforme necessário, promovendo maior controle e produtividade. 

 

O Sistema de Tarefas terá algumas funções em seu sistema, que permitirá; Cadastro de tarefas, Marcação de Tarefas como concluídas, Edição e remoção de tarefas e por fim, Organização por prioridade ou data de vencimento. Para o desenvolvimento do projeto, utilizaremos a linguagem de programação em PHP, para o Banco de Dados será utilizado o MySQL e para parte visual do projeto utilizaremos a linguagem de marcação HTML e estilização será usado o CSS.  

 

O Sistema de Tarefas  tem como objetivo proporcionar aos usuários uma maneira fácil e eficiente de gerenciar suas atividades diárias, garantindo maior organização e produtividade. Com uma interface simples e funcionalidades diretas, o sistema atende tanto usuários iniciantes quanto aqueles que buscam uma solução prática para o gerenciamento de suas tarefas. Este projeto visa ainda oferecer um bom aprendizado em PHP, MySQL, e técnicas de desenvolvimento web, ao mesmo tempo em que proporciona um produto útil e funcional. 

 

Requisitos funcionais 

 

 [UC001] Login de usuário 

Descrição: Permite aos usuários logarem no sistema. 

Atores: Administrador e Usuário. 

Entradas e pré-condições: Estar devidamente cadastrado no sistema. 

Saídas e pós-condição: não possui. 

 

 

Mensagens 

M1 

Login ou senha inválida. 

M2 

Bem vindo “nome do usuário” 

 

Especificação dos Atributos:  

 

EA1 – Fazer autenticação de usuário  

 

Dados 

Atributo 

Tipo 

Tam. 

Máscara 

Obrig. 

Login 

Texto 

16 

 

X 

Senha 

Password 

15 

 

X 

 

 

 

 

 

 

 [UC002] Registra-se no Sistema 

Descrição: Permite que o usuário se registre no sistema. 

Atores: Usuário. 

Entradas e pré-condições: não possui. 

Saídas e pós-condição: não ter nenhum cadastro no sistema. 

 

 

Mensagens 

M1 

Campos obrigatórios não preenchidos 

M2 

Dados inválidos. 

 

 

Especificação dos Atributos:  

 

EA1 – Registrar-se no sistema (Aluno) 

 

Dados 

Atributo 

Tipo 

Tam. 

Máscara 

Obrig. 

Login 

Texto 

16 

 

X 

Senha 

Password 

15 

 

X 

Nome  

Texto 

15 

 

X 

  E-mail 

Texto 

30 

 

X 

 

 

[UC003] Lançar Tarefas, Metas 

Descrição: Permite ao usuário cadastrar tarefas e metas. 

Atores: Usuário. 

Entradas e pré-condições: O usuário estar cadastrado no sistema. 

Saídas e pós-condição: não possui. 

 

Mensagens 

M1 

Tarefas, Metas Definidas 

 

Especificação dos Atributos:  

 

EA1 – Solicitação de Demanda 

 

Dados 

Atributo 

Tipo 

Tam. 

Máscara 

Obrig. 

Tarefas 

Texto 

30 

 

X 

Metas 

Texto 

30 

 

X 

Título 

  Texto 

30 

 

X 

   Descrição 

  Texto  

  30 

 

  X 

   Botão 

   Input 

1 

 

 X 

   Data 

  Number/Número 

8 

 

 X 

 

[UC004] Visualizar Minhas Tarefas e Metas 

Descrição: Permite ao usuário visualizar suas tarefas e metas em uma interface organizada 

Atores: Usuário. 

Entradas e pré-condições: o usuário estar autenticado no sistema. 

Saídas e pós-condição: não possui. 

 

Mensagens 

M1 

Minhas Notas 

 

Esboço de interfaces gráficas:  

 

EI1 

(Imagem) 

 

[UC005] Visualizar Tarefas a expirar 

*Essa funcionalidade só estará disponível mediante a sobra de tempo 

 

Descrição: Permite ao aluno verificar seu total em faltas e a porcentagem em cada disciplina. 

Atores: Aluno. 

Entradas e pré-condições: o usuário estar autenticado no sistema. 

Saídas e pós-condição: não possui. 

 

Mensagens 

M1 

Usuário ou senha inválida. 

 

Especificação dos Atributos: