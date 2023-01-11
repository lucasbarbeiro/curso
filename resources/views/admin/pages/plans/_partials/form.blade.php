@include('admin.includes.alerts')

<div class="form-group">
    <label>Nome:</label>
    <input type="text" name="name" class="form-control" placeholder="Nome:" aria-describedby="helpId" value="{{ $plan->name ?? old('name') }}">
  </div>
  <div class="form-group">
      <label>Preço:</label>
      <input type="text" name="price" class="form-control" placeholder="Preço:" aria-describedby="helpId" value="{{ $plan->price ?? old('price') }}">
  </div>  
  <div class="form-group">
      <label>Descrição:</label>
      <input type="text" name="descricao" class="form-control" placeholder="Descrição:" aria-describedby="helpId" value="{{ $plan->descricao ?? old('descricao') }}">
  </div>
  <div class="form-group">
      <button type="submit" class="btn btn-dark">Gravar</button>
  </div>  
</form>
