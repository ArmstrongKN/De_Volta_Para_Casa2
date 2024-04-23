@extends("dashboard")
@section("administracao")

<form class="bg-black p-5" action="{{route('postarItem')}}" method="post">
  @csrf
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label text-danger">Título do item</label>
  <input type="text" class="form-control rounded" name="titulo" placeholder="Título do item">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label text-danger">Descrição do item</label>
  <textarea class="form-control rounded" name="descricao" rows="3" placeholder="Descrição do item"></textarea>
</div>

<select class="form-select rounded" name="area" aria-label="Default select example">
  <option selected class="text-danger"> Qual área</option>
  <option value="Atração" class="text-danger"> Atração </option>
  <option value="Empregabilidade" class="text-danger"> Empregabilidade </option>
  <option value="Imobiliária" class="text-danger"> Imobiliária </option>
  <option value="Educação" class="text-danger"> Educação </option>
</select>
<div class="mb-3">
  <label for="formFile" class="form-label text-danger"> Imagem </label>
  <input class="form-control rounded  text-danger" name="imagem" type="file">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label text-danger">Link do item</label>
  <textarea class="form-control rounded" name="url" placeholder="Link do item"></textarea>
</div>
<button type="submit" class="btn btn-primary rounded">Postar item</button>
</form>
@endsection