<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Rendering Component</title>
</head>
<body>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('RV_Component.index')}}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Voltar</button></a>
                    <a href="{{ route('RV_RenderingExemple.index')}}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Rendering Exemplo</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <h1 class="text-lg"><strong>Estudando Rendering Component</strong></h1>
        <p>To display a component, you may use a Blade component tag within one of your Blade templates. </p>
        <p>Blade component tags start with the string ,<strong> x- </strong> followed by the kebab case name of the component class:</p>
        <div class="bg-slate-300">
            <p><strong> < x-alert </strong>/> </p>
            <p><strong> < x-user-profile </strong>/> </p>
        </div>
        <p>If the component class is nested deeper within the ,<strong>app/View/Components</strong> directory, you may use the <strong>.</strong> character to indicate directory nesting. </p>
        <p>For example, if we assume a component is located at ,<strong>app/View/Components/Inputs/Button.php</strong>, we may render it like so:</p>
        <div class="bg-slate-300">
            <p><strong> < x-inputs.button </strong>/> </p>
        </div>
        <p>If you would like to conditionally render your component, you may define a <strong>shouldRender</strong> method on your component class.</p> 
        <p>If the <strong>shouldRender</strong> method returns <strong>false</strong> the component will not be rendered:</p>
        <div class="bg-slate-300">
            <p>use Illuminate\Support\Str;</p>
            <P>/**
                * Whether the component should be rendered
                */ </P>
            <p>public function shouldRender(): bool </p>
            <p>   {</p>
            <p>   return Str::length($this->message) > 0;</p>                        
            <p>   }</p>
        </div>

    </div>    
</body>
</html>