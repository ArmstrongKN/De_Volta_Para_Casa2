@extends("dashboard")
@section("administracao")

<form action="{{route('postarItem')}}" method="post">
  @csrf
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Título do item</label>
  <input type="text" class="form-control" name="titulo" placeholder="Título do item">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Descrição do item</label>
  <textarea class="form-control" name="descricao" rows="3" placeholder="Descrição do item"></textarea>
</div>

<select class="form-select" name="area" aria-label="Default select example">
  <option selected> Qual área</option>
  <option value="Atração"> Atração </option>
  <option value="Empregabilidade"> Empregabilidade </option>
  <option value="Imobiliária"> Imobiliária </option>
  <option value="Educação"> Educação </option>
</select>
<div class="mb-3">
  <label for="formFile" class="form-label"> Imagem </label>
  <input class="form-control" name="imagem" type="file">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Link do item</label>
  <textarea class="form-control" name="url" placeholder="Link do item"></textarea>
</div>
<button type="submit" class="btn btn-primary">Postar item</button>
</form>
@endsection