@extends("layout")
@section("administracao")

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Título da Notícia</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Título da Notícia">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Descrição da Notícia</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descrição da Notícia"></textarea>
</div>

<select class="form-select" aria-label="Default select example">
  <option selected> Qual área</option>
  <option value="1"> Atração </option>
  <option value="2"> Empregabilidade </option>
  <option value="3"> Imobiliária </option>
  <option value="4"> Educação </option>
</select>
<div class="mb-3">
  <label for="formFile" class="form-label"> Imagem </label>
  <input class="form-control" type="file" id="formFile">
</div>
 
@endsection