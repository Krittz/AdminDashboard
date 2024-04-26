<div id="myModal" class="modal">
    <!-- Conteúdo do modal -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>{{ $modalTitle }}</h2>
        <p>{{ $modalLegend }}.</p>

        <hr>

        <form action="">
            @include('includes.input', [
                'icon' => 'bx bxs-edit-alt',
                'title' => 'Nome',
                'type' => 'text',
                'name' => 'nome',
                'id' => 'nome',
            ])
            @include('includes.input', [
                'icon' => 'bx bxs-cat',
                'title' => 'Espécie',
                'type' => 'text',
                'name' => 'especie',
                'id' => 'especie',
            ])
            @include('includes.input', [
                'icon' => 'bx bxs-purchase-tag-alt',
                'title' => 'Raça',
                'type' => 'text',
                'name' => 'raca',
                'id' => 'raca',
            ])
            @include('includes.input', [
                'icon' => 'bx bx-male-sign',
                'title' => 'Sexo',
                'type' => 'text',
                'name' => 'sexo',
                'id' => 'sexo',
            ])
            @include('includes.input', [
                'icon' => 'bx bx-calendar-heart',
                'title' => 'Data de nascimento (dd/mm/AAAA)',
                'type' => 'text',
                'name' => 'data_nascimento',
                'id' => 'data_nascimento',
            ])
            @include('includes.input', [
                'icon' => 'bx bx-calendar-star',
                'title' => 'Data de aquisição (dd/mm/AAAA)',
                'type' => 'text',
                'name' => 'data_aquisicao',
                'id' => 'data_aquisicao',
            ])
            @include('includes.input', [
                'icon' => 'bx bx-calendar-check',
                'title' => 'Data de venda (dd/mm/AAAA)',
                'type' => 'text',
                'name' => 'data_venda',
                'id' => 'data_venda',
            ])
            @include('includes.input', [
                'icon' => 'bx bx-money-withdraw',
                'title' => 'Custo aquisição (R$)',
                'type' => 'text',
                'name' => 'custo_aquisicao',
                'id' => 'custo_aquisicao',
            ])
            @include('includes.input', [
                'icon' => 'bx bxs-badge-dollar',
                'title' => 'Preço de venda (R$)',
                'type' => 'text',
                'name' => 'preco_venda',
                'id' => 'preco_venda',
            ])

            <input type="submit" value="Cadastrar" class="btn">

        </form>
    </div>

</div>
<script>
    const inputs = document.querySelectorAll("input");

    function addcl(element) {
        let parent = element.parentNode.parentNode;
        parent.classList.add("focus");
    }

    function remcl(element) {
        let parent = element.parentNode.parentNode;
        if (element.value == "") {
            parent.classList.remove("focus");
        }
    }

    inputs.forEach((input) => {
        input.addEventListener("focus", () => addcl(input));
        input.addEventListener("blur", () => remcl(input));
    });
</script>
