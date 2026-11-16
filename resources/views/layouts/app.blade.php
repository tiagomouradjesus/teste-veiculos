<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Veículos</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 900px; margin: 30px auto; padding: 0 15px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        .erro { color: #b00020; font-size: 14px; }
        .sucesso { background: #d4edda; padding: 10px; margin-bottom: 15px; }
        label { display: block; margin-top: 12px; }
        input, select { width: 100%; padding: 8px; box-sizing: border-box; }
        button, .btn { padding: 8px 14px; margin-top: 15px; cursor: pointer; }
    </style>
</head>
<body>
    @if (session('sucesso'))
        <div class="sucesso">{{ session('sucesso') }}</div>
    @endif
    @yield('content')
</body>
</html>

