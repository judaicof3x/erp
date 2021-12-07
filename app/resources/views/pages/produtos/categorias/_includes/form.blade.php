<div class="row mt-5">
    <div class="col-12">
        <label for="name" class="required form-label">Nome da categoria</label>
        <input value="{{ $category->name ?? old('name') }}" type="text" name="name" required="required" class="form-control form-control-solid" placeholder="Insira o nome da categoria"/>
        <span class="text-gray-600 small">Categorias são usadas para agrupar os serviços.</span>
    </div>
</div>

<div class="row mt-5">
    <div class="col-12">
        <label for="description" class="form-label">Descrição da categoria</label>
        <input value="{{ $category->description ?? old('description') }}" type="text" name="description" class="form-control form-control-solid" placeholder="Insira a descrição da categoria"/>
    </div>
</div>
