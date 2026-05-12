@csrf 

<label for="name">Introduce el nombre del producto</label>
<input type="text" name="name" id="name" placeholder="Por ejemplo: PlayStation 5" max="100" value="{{ old('name', $product->name ?? '') }}">

<label for="description">Introduce la descripción</label>
<textarea name="description" id="description">{{ old('description', $product->description ?? '') }}</textarea>

<label for="prize">Introduce un precio</label>
<input type="number" name="prize" id="prize" placeholder="500" value="{{ old('prize', $product->prize ?? '0') }}">

<br><br>
<button type="submit" name="save" id="save">Guardar</button>