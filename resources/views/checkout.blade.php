<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout — InkDrop</title>
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/checkout.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body>
     @include('partials.header')

    <form method="POST" action="{{ route('checkout.store') }}">
    @csrf
    <div class="checkout-wrapper">
        <h1>Finalizar <span>Compra</span></h1>

        <div>
            <!-- Endereço -->
            <div class="form-section" style="margin-bottom:1rem">
                <h2>Endereço de Entrega</h2>
                <div class="form-group">
                    <label>Nome completo</label>
                    <input type="text" name="name" value="{{ Auth::user()->name }}" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ Auth::user()->email }}" required>
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <input type="text" name="phone" placeholder="(11) 99999-9999" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>CEP</label>
                        <input type="text" name="cep" placeholder="00000-000" required>
                    </div>
                    <div class="form-group">
                        <label>Número</label>
                        <input type="text" name="number" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Endereço</label>
                    <input type="text" name="address" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Bairro</label>
                        <input type="text" name="neighborhood" required>
                    </div>
                    <div class="form-group">
                        <label>Cidade</label>
                        <input type="text" name="city" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Estado</label>
                    <select name="state" required>
                        <option value="">Selecione</option>
                        <option>SP</option><option>RJ</option><option>MG</option>
                        <option>RS</option><option>PR</option><option>SC</option>
                        <option>BA</option><option>GO</option><option>DF</option>
                        <option>PE</option><option>CE</option><option>AM</option>
                    </select>
                </div>
            </div>

            <!-- Pagamento -->
            <div class="form-section">
                <h2>Forma de Pagamento</h2>
                <div class="payment-options">
                    <label class="payment-option">
                        <input type="radio" name="payment_method" value="pix" checked>
                        <div class="icon">⚡</div>
                        <p>PIX</p>
                    </label>
                    <label class="payment-option">
                        <input type="radio" name="payment_method" value="cartao">
                        <div class="icon">💳</div>
                        <p>Cartão</p>
                    </label>
                </div>
            </div>
        </div>

        <!-- Resumo -->
        <div class="order-summary">
            <h2>Resumo do Pedido</h2>
            @foreach($cart as $item)
                <div class="summary-item">
                    <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}">
                    <div class="summary-item-info">
                        <div class="summary-item-name">{{ $item['name'] }}</div>
                        <div class="summary-item-qty">Qtd: {{ $item['quantity'] }}</div>
                    </div>
                    <div class="summary-item-price">R$ {{ number_format($item['price'] * $item['quantity'], 2, ',', '.') }}</div>
                </div>
            @endforeach

            <div class="summary-total">
                <span>Total</span>
                <strong>R$ {{ number_format($total, 2, ',', '.') }}</strong>
            </div>

            <button type="submit" class="btn-checkout">Confirmar Pedido →</button>
        </div>
    </div>
    </form>

    @include('partials.footer')
</body>
</html>