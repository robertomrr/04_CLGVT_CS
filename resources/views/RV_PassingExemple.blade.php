<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RV_Passing</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('RV_Passing.index')}}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Voltar</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <p>Abaixo desta linha esta o componente x-AVCPassing.</p>
        <hr><hr><hr>
    </div>
    <?php 
    $message ='Sou a mensagem que deve ser exibida pelo component AVCPasssing';
    ?>
    <x-AVCPassing type="error" :message="$message"/>
</body>
</html>