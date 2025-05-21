# Usando principio open/close "aberto/fechado" do conceito Solid
Case para um projeto ETL(extract transform load) com leitura de arquivos de variadas extensões que podem alimentar um DB ou uma aplicação final. Utilizando metodologia SOLID com PHP puro via autoloader do Composer.
Somente para fins de estudos e amostragem de boas práticas começanddo com uma abstração basica no decorrer aplicando o principio SOLID de open/close.

## Conceitos SOLID
1. ~Reposnsabilidade única~ Link repositório: https://github.com/DianaDias/solid-responsabilidade-unica.git
2. ~Funcionalides abertas para extensões e fechadas para modificação~ 
3. Principio de Linskov da SUBSTITUIÇÃO (onde uma classe filha deve ser capaz de substituir a classe pai perfeitamente)
4. Segregação de interface (não deve forçar a implementar metodos que não vai usar)
5. Inversão de dependencia (classe de alto nivel não deve depender de uma classe de baixo nivel)
