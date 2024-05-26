# Generic Ecommerce #

- ## Instalação 

    Todo o desenvolvimento foi feito em servidor local, com auxílio da ferramenta XAMPP, e a instalação vai ser baseada nela.

    - ### Clonando o repositório

        No primeiro momento, o clone do respositório deve ser feito pelo [link](https://github.com/allanros/generic-wordpress-ecommerce).

        Em seguida, mova os arquivos que estão dentro do diretório (wp-admin, wp-content, etc.) para um novo diretório com o nome de "wordpress" dentro do diretório do XAMPP > htdocs > wordpress (que foi criado).

    - ### Banco de dados

        Será necessário importar o backup que forneci. Através do PhpMyAdmin fornecido pelo XAMPP, acessando a URL 'localhost/phpmyadmin/', crie um novo banco com o nome de **"wordpress"**. Caso seja criado com outro nome, será necessário mudar no arquivo **"wp-config.php"** na linha em que ele se refere ao banco. Acesse a aba de importação do banco e faça a importação com o arquivo fornecido.

        ```php
            // ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
            /** O nome do banco de dados do WordPress */
            define( 'DB_NAME', 'wordpress' );

            /** Usuário do banco de dados MySQL */
            define( 'DB_USER', 'root' );

            /** Senha do banco de dados MySQL */
            define( 'DB_PASSWORD', '' );

            /** Nome do host do MySQL */
            define( 'DB_HOST', 'localhost' );

        ```
        Nota-se que aí também está presente o nome do usuário e a senha, que posteriormente podem ser alterados também.

    - ### Login
        O usuário que cadastrei como administrador foi:
            
            Nome: allan
            senha: 123456

- ## Processo de construção

    1. Instalação
        
        Inicialmente, fiz a instalação do WordPress, passando todos os dados para o banco e nome do site, bem como o usuário administrador.

        Em seguida, continuei com a instalação de plugins que julguei serem necessários no início, como o WooCommerce e o plugin de gateway do PayPal. Também fiz as configurações do WooCommerce para que ele pudesse atuar corretamente.

    2. Tema

        Primeiramente, optei por utilizar o tema que já veio por padrão na instalação. Porém, percebi que teria que modificar bastante para que ele pudesse atender bem o processo de um e-commerce. Então, optei por instalar outro tema que já suportasse melhor essa função.

        Instalei o "Envo Ecommerce" e criei, também, o tema filho, para prevenir que minhas alterações não afetariam o tema pai no futuro.

        Criei um shortcode que funcionaria para mostrar na Home do site alguns produtos por categoria, servindo como um catálogo inicial. Nesse shortcode, existem 2 atributos: quantas categorias serão exibidas e o ID da categoria pai a que elas pertencem.

    3. Loja

        Na loja, refiz parte do CSS para que o filtro por categoria e de preços de produtos ficasse em um local mais agradável e ocupasse menos espaço na tela. Também tentei fazer alguns ajustes nos produtos para que as imagens não ficassem muito fora do padrão.

        Para o filtro, instalei o plugin Yith, que possibilitava a criação de um filtro personalizado, e também fiz a instalação de um plugin para que o widget lateral ficasse somente na página de loja.

    4. Configuração do Gateway de pagamentos

        Existem alguns plugins que o WooCommerce já recomenda para essa questão. Optei por usar o do PayPal, que de cara já proporcionava o ambiente de sandbox para testes. Depois de alguns testes, consegui efetuar a compra teste.

    5. Carrinho e checkout

        Houveram alguns problemas com o carrinho e com o checkout em relação ao front-end. Não estava conseguindo alterar de forma satisfatória. Depois de algum tempo investigando, percebi que o tema estava influenciando essa parte. Então, desativei essa função do tema que não possibilitava uma fácil personalização e optei por personalizar via CSS também.

    6. Testes e responsividade

        Fiz um teste com todo o processo, desde a home do site até a finalização da compra, e tudo correu conforme era esperado. Porém, senti alguns incômodos com relação à responsividade, que em alguns momentos fizeram a listagem ficar meio apertada. Então, fiz ajustes no CSS com o recurso de media, também ajustei a disposição dos filtros para que ele viesse antes dos produtos.


    7. Otimizações

        Nessa questão, fiz a instalação de dois plugins: WP Fastest Cache e Smush. O primeiro para utilização de cache, para melhorar a performance, e também conta com algumas otimizações, como minimização de arquivos de CSS e JavaScript. O segundo foi utilizado para otimizar as imagens desde sua inclusão na biblioteca do WordPress e conta com o Lazy Load, que tem a função de carregar as imagens apenas quando elas estiverem prestes a serem exibidas, melhorando a performance.
        