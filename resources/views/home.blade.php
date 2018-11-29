@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br/>
                    <b><h2>Definição Geral</h2></b>
                    <br/>
                    <p>A dificuldade de alfabetização no Brasil vem sendo uma barreira que profissionais da educação vem trabalhando arduamente para poder vencer. É necessário ser analisado o processo de ensino levando em consideração as características e vivencia do aluno, onde não pode ser assimilado para o aluno como algo ruim, por exemplo um ensino muito rígido, e sim algo prazeroso e divertido, evitando que o ato de ensino seja uma tortura para criança (KAUARK, 2008).</p></p>
                    <P>Pode haver diversas variáveis que dificultam a aprendizagem de uma criança, como conflitos familiares, baixa escolaridade dos pais da criança, falta de incentivo a criança a frequentar uma escola, não haver escolas próximas, entre outros (DOURADO e OLIVEIRA 2009). </p>
                    <P>Segundo o IBGE (Instituto Brasileiro de geografia estatística) em 2017 a taxa de analfabetismo da população com 15 anos é de 7.0%. Essa taxa representa 11,5 milhões de pessoas que não sabem ler e escrever, não alcançando o índice de 6,5% estipulado para 2015, pelo Plano Nacional de Educação (PNE) (IBGE 2018).</p>
                    <P>Um dos fatores que dificulta o aprendizado, é caso de crianças especiais, com problemas cognitivos. A inclusão desses mesmos alunos no meio disciplinar se torna algo difícil, pois eles não têm a mesma rapidez e facilidade de aprendizado, por isso é preciso trabalhar com os mesmos de forma diferente, e com técnicas de aprendizado especificas que prendem a atenção é o interesse do aluno. As escolas devem garantir vagas garantindo uma inclusão com julgamento justo com professores preparados para garantir o aprendizado, é necessário garantir uma igualdade entre todos os alunos e respeito mútuo para que haja um desenvolvimento melhor (SILVA 2011 apud VYGOTSKY 2010).</p>
                    <P>E também a família tem um papel muito importante nesse processo de aprendizagem, pois os pais precisam incentivar o filho de uma maneira positiva, de preferência recebendo orientação de pessoas especializadas, para aprender qual é a melhor forma para incentiva-lo, muitos pais se tornam muito protetores por causa da deficiência da criança, e isso pode influencia-lo de uma maneira negativa, é preciso saber até onde a proteção é saudável (SILVA 2011 apud VYGOTSKY 2010).</p>
                    <P>Por conta dessa dificuldade é importante utilizar ferramentas auxiliares para que haja um melhor aproveitamento tanto no ambiente escolar, como em casa. A adaptação de atividades comumente realizada em folhas de papéis como completar palavras, interpretação de parlendas, associação de imagens, entre outras, são efetuadas juntamente com brinquedos, ou E.V.A (espuma vinílica acetinada) juntamente com crepe, para estimular a coordenação viso-motora e aprimorar habilidades de preensão da criança deficiente (FURLAN 2014).</p>
                    <P>Tecnologias assistivas informatizadas é uma outra ferramenta auxiliar que vem para substituir ou coexistir com os métodos anteriormente citados, proporcionando mais iteratividade e ampliando a gama de atividades que podem ser criadas para auxiliar os professores na alfabetização. O software SOMAR, projeto desenvolvido por alunos da universidade de Brasília, proporciona a pessoas com autismo e deficiência intelectual de diversas faixas etárias possam exercitar o uso da matemática em exemplos que simulam atividades do cotidiano (THOMAZ e MOREIRA 2014). Há outros softwares que tem como público alvo alunos em geral, como o Ardora, que permite a criação de atividades em geral, podendo ser usado como tecnologia auxiliar para crianças com deficiência intelectual (CETEC/CPS 2007).</p>

                    <br/>
                    <b><h2>O problema</h2></b>
                    <br/>

                    <P>Se baseando nesses fatos, foi constatado na escola municipal Professor Fued Temer, Localizada em Praia Grande - SP, que os alunos especiais precisavam de alguma maneira de uma ferramenta para auxilio no aprendizado. A professora Rosângela Ferreira de Alcântara, que leciona para o fundamental I, após o uso de métodos assistivos com atividades utilizando EVA e velcro[ Velcro é um sistema de fixação que consiste em dois componentes: uma tira de tecido linear com minúsculos ganchos que pode "acasalar" com outra faixa de tecido com argolas menores, anexar temporariamente, até ser separado, (Popular Science, 1978).</p>

                    <P>para a construção de atividades que auxilie na alfabetização dos alunos com deficiências intelectuais e cognitivas para qual ela leciona, sentiu a necessidade de transformar isso em uma tecnologia assistiva informatizada. Ela tentou primeiramente, realizar essa tarefa através do software Ardora, porém não obtendo o resultado esperado devido à dificuldade de manuseio da ferramenta e o que ela poderia oferecer, refez as atividades em Power Point, projetando-as em sala de aula.</p>

                    <br/>
                    <b><h2>A solução</h2></b>
                    <br/>

                    <P>O sistema Alphabeta visa solucionar problemáticas envoltas a aprendizagem de alunos com deficiências intelectuais e, potenciais desafios que profissionais da área de educação enfrentam no processo de alfabetização dos mesmos. O software se desenvolve a partir de conceitos e ferramentas que tornam a experiência do aluno mais interessante e o trabalho do professor mais "simplificado".</p>
                    <P>Diante do problema de chamar a atenção do aluno, o layout da plataforma foi moldado com o intuito de prender a atenção do usuário em questão, as cores e o formato almejam criar a prática de estudo mais divertida e assimilativa, ao mesmo tempo, oferece uma linguagem simples para melhor compreensão do usuário (aluno) e moderador (professor).</p>
                    <P>Para atender a demanda do papel do professor que estará montando os exercícios e dos alunos que irão realizar esses exercícios, o suporte lógico será responsivo, ou seja, adapta-se a diferentes receptores e suportes tecnológicos, como televisões, celulares, e lousas digitais presentes em escolas públicas da região. O desígnio principal do Alphabeta é acessibilidade e maior comodidade tanto para o professor que possivelmente irá optar por criar os exercícios em um ambiente desktop, quanto para o aluno na hora de aprender, empregando artifícios tecnológicos, a fim de contribuir para o âmbito educacional e para a construção de um futuro mais inclusivo para pessoas com deficiências cognitivas. </p>
                    <P>De acordo com os requisitos, a aplicação será um instrumento auxiliar, atuando como uma ferramenta que vai facilitar o trabalho de educadores, mas não substituí aulas presenciais e atividades práticas supervisionadas por profissionais da educação. 
                    <P>Em relação a criação dos exercícios, os professores poderão criar suas atividades como desejarem, de acordo com tipo de atividade, podendo escolher imagens e conteúdo. Novos tipos de exercícios vão surgir de acordo com o amadurecimento do software, garantindo uma maior gama de tipo de exercícios para os professores estarem disponibilizando aos seus alunos.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-image: url('beta4.png');
                background-size: cover;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>

</html>