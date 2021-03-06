@extends('layouts.basic')

@section('content')    
<x-front-banner style="background-image: linear-gradient(180deg, rgba(30,56,35,0.8) 23%, 
        rgba(50,91,57,0.8) 100%), url('{{ asset('assets/Banners/Sobre.jpg')}}');">    
    
        <x-slot name="titulo"> Sobre nós</x-slot> 
        Conheça um pouco mais do nosso trabalho
    </x-front-banner>

    <div style="margin-top: 2rem">
        <x-right-media-panel title="Nossa equipe" image="{{ asset('assets/sobre/Equipe.jpg')}}"> 
            O Brazilian Storm é um time de robótica sediado na Escola Estadual Prof 
            Alceu Maynard Araújo, uma escola pública de São José dos Campos, estado de São Paulo. 
            Iniciamos nossas atividades em 2016, com a assistência de outra equipe da cidade, 
            a ETEP team #1382, através do Professor Leonardo Rosa e seu aluno Arthur Oliveira, 
            e total suporte da nossa escola. 
            Participamos da FIRST Robotics Competition - FRC, maior competição de robótica 
            estudantil do mundo. A FRC é organizada pela 
            <a href="https://www.firstinspires.org/" rel="external" target="_blank">FIRST</a> 
            (For Inspiration and Recognition of Science and Technology), 
            uma organização sem fins lucrativos, fundada em 1989, por Dean Kamen,
            para inspirar o interesse e a participação de jovens nas carreiras de ciência e tecnologia.
            Além de participarmos da FRC, desenvolvemos projetos para incentivar o contato de 
            jovens estudantes com a tecnologia, realizamos trabalhos voluntários e divulgamos 
            a equipe e a FIRST na região.
            Nossa equipe é composta por alunos majoritariamente de escolas públicas, 
            mentores voluntários, pais e patrocinadores. 
        </x-right-media-panel>
    </div>
    <div style="margin-top: 2rem">
        <x-contagem-premios/>
    </div>
    <div style="margin-top: 2rem">        
        <x-left-media-panel title="Missão" image="{{ asset('assets/sobre/Missao.jpg')}}">
            Inspirar e contribuir no desenvolvimento de alunos, principalmente de escolas públicas,
            através da STEM (Ciência, Tecnologia, Engenharia e Matemática), promovendo sua
            capacitação e aprimoramento pessoal e profissional, com o apoio de nossos mentores,
            ex-alunos, patrocinadores e comunidade. 
        </x-left-media-panel>
    </div>
    <div class="jumbotron" style="margin-top: 3rem; margin-bottom: 3rem; background-color: #E5E5E5;">
        <x-right-media-panel title="Visão" image="{{ asset('assets/sobre/Visao.jpg')}}">
            Transformar a vida dos jovens, dando-lhes oportunidades, ampliando suas possibilidades
            de crescimento e opções profissionais. 
        </x-right-media-panel>
    </div>
    <div style="margin-top: 2rem">        
        <x-left-media-panel title="Valores" image="{{ asset('assets/sobre/Valores.jpg')}}">
            Respeito pelo outro, comunicação aberta e ética como linha de base, pautados nos
            valores fundamentais da FIRST.
        </x-left-media-panel>
    </div>
    <div style="margin-top: 2rem">
        <x-identidade-areas/>
    </div>
    <div>
        <x-premios/>
    </div>
@endsection