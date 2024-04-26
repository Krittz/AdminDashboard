<div class="header">
    <div class="left">
        <h1>{{ $pageTitle }}</h1>
        <ul class="breadcrumb">
            <li><a href="#">{{ $pageDescript }}</a></li>
            /
            <li><a href="#" class="active">{{ $pageRedescript }}</a></li>
        </ul>
    </div>
    <a href="#" class="report" data-target="#myModal">
        <i class="bx bx-plus"></i>
        <span>Novo</span>
    </a>
</div>

@include('includes.modal', [
    'modalTitle' => 'Cadastro de Animais',
    'modalLegend' => 'Informe aqui todos os dados referente a seu animal',
])
