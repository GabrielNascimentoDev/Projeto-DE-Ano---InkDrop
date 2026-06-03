<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin — InkDrop</title>
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body { background: #0a0a0a; color: #fff; font-family: 'Work Sans', sans-serif; }
        .admin-wrapper { max-width: 1100px; margin: 0 auto; padding: 2rem; }
        .admin-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; border-bottom: 1px solid #222; padding-bottom: 1rem; }
        .admin-title { font-size: 2rem; font-weight: 800; letter-spacing: 0.05em; }
        .admin-title span { color: #d42020; }
        .stats { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-bottom: 2rem; }
        .stat-card { background: #111; border: 1px solid #222; padding: 1.5rem; }
        .stat-label { font-size: 11px; letter-spacing: 0.15em; text-transform: uppercase; color: #666; margin-bottom: 8px; }
        .stat-value { font-size: 2.5rem; font-weight: 800; color: #fff; }
        .stat-value span { color: #d42020; }
        .section-title { font-size: 1rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 1rem; color: #888; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 3rem; }
        th { text-align: left; font-size: 11px; letter-spacing: 0.15em; text-transform: uppercase; color: #555; padding: 10px 12px; border-bottom: 1px solid #1a1a1a; }
        td { padding: 12px; border-bottom: 1px solid #1a1a1a; font-size: 14px; vertical-align: middle; }
        tr:hover td { background: #111; }
        .btn { display: inline-block; padding: 6px 14px; font-size: 11px; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; text-decoration: none; cursor: pointer; border: none; }
        .btn-edit { background: #222; color: #fff; }
        .btn-edit:hover { background: #333; }
        .btn-danger { background: #d42020; color: #fff; }
        .btn-danger:hover { background: #ff2a2a; }
        .btn-logout { background: transparent; border: 1px solid #333; color: #888; }
        .btn-logout:hover { border-color: #d42020; color: #d42020; }
        .alert { padding: 12px 16px; background: rgba(0,200,0,0.1); border: 1px solid rgba(0,200,0,0.2); color: #0f0; margin-bottom: 1.5rem; font-size: 13px; }
        .stock-low { color: #d42020; font-weight: 700; }
    </style>
</head>
<body>
    <div class="admin-wrapper">

        <div class="admin-header">
            <h1 class="admin-title">INK<span>DROP</span> — Admin</h1>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-logout">Sair</button>
            </form>
        </div>

        @if(session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif

        <!-- Stats -->
        <div class="stats">
            <div class="stat-card">
                <div class="stat-label">Total de Produtos</div>
                <div class="stat-value"><span>{{ $products->count() }}</span></div>
            </div>
            <div class="stat-card">
                <div class="stat-label">Usuários Cadastrados</div>
                <div class="stat-value"><span>{{ $users->count() }}</span></div>
            </div>
            <div class="stat-card">
                <div class="stat-label">Estoque Baixo</div>
                <div class="stat-value"><span>{{ $products->where('stock', '<', 5)->count() }}</span></div>
            </div>
        </div>

        <!-- Produtos -->
        <div class="section-title">Produtos</div>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Preço</th>
                    <th>Estoque</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->brand }}</td>
                    <td>R$ {{ number_format($product->price, 2, ',', '.') }}</td>
                    <td class="{{ $product->stock < 5 ? 'stock-low' : '' }}">{{ $product->stock }}</td>
                    <td style="display:flex; gap:8px">
                        <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-edit">Editar</a>
                        <form method="POST" action="{{ route('admin.product.delete', $product->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Deletar produto?')">Deletar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Usuários -->
        <div class="section-title">Usuários</div>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Admin</th>
                    <th>Cadastro</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->is_admin ? '✅' : '—' }}</td>
                    <td>{{ $user->created_at->format('d/m/Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>
</html>