<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto — InkDrop</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body { background: #0a0a0a; color: #fff; font-family: 'Work Sans', sans-serif; }
        .wrapper { max-width: 600px; margin: 3rem auto; padding: 2rem; }
        h1 { font-size: 1.8rem; font-weight: 800; margin-bottom: 2rem; }
        h1 span { color: #d42020; }
        .form-group { margin-bottom: 1.2rem; }
        label { display: block; font-size: 11px; letter-spacing: 0.15em; text-transform: uppercase; color: #666; margin-bottom: 6px; }
        input, textarea { width: 100%; background: #111; border: 1px solid #222; color: #fff; padding: 10px 12px; font-family: 'Work Sans', sans-serif; font-size: 14px; }
        input:focus, textarea:focus { outline: none; border-color: #d42020; }
        textarea { height: 100px; resize: vertical; }
        .btn-save { background: #d42020; color: #fff; border: none; padding: 12px 32px; font-size: 13px; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; cursor: pointer; width: 100%; margin-top: 1rem; }
        .btn-save:hover { background: #ff2a2a; }
        .back { display: inline-block; margin-bottom: 1.5rem; color: #666; text-decoration: none; font-size: 13px; }
        .back:hover { color: #fff; }
    </style>
</head>
<body>
    <div class="wrapper">
        <a href="{{ route('admin') }}" class="back">← Voltar ao painel</a>
        <h1>Editar <span>Produto</span></h1>

        <form method="POST" action="{{ route('admin.product.update', $product->id) }}">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="name" value="{{ $product->name }}" required>
            </div>

            <div class="form-group">
                <label>Marca</label>
                <input type="text" name="brand" value="{{ $product->brand }}">
            </div>

            <div class="form-group">
                <label>Preço</label>
                <input type="number" name="price" value="{{ $product->price }}" step="0.01" required>
            </div>

            <div class="form-group">
                <label>Estoque</label>
                <input type="number" name="stock" value="{{ $product->stock }}" required>
            </div>

            <div class="form-group">
                <label>Descrição</label>
                <textarea name="description">{{ $product->description }}</textarea>
            </div>

            <button type="submit" class="btn-save">Salvar Alterações</button>
        </form>
    </div>
</body>
</html>