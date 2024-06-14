<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>RV_Component</title>
</head>
<body>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('dashboard')}}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Voltar</button></a>
                    <a href="{{ route('packageComponent.index')}}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Package Component</button></a>
                    <a href="{{ route('RV_Rendering.index')}}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Rendering Component</button></a>
                    <a href="{{ route('RV_Passing.index')}}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Passing Data to Components</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <h1 class="text-lg"><strong>Estudando Component</strong></h1>
        <p>Components and slots provide similar benefits to sections, layouts, and includes; </p>
        <p>however, some may find the mental model of components and slots easier to understand. </p>
        <p>There are two approaches to writing components: <strong>class based components</strong> and <strong>anonymous components</strong>. </p>    
    </div>
    <div class="container mx-auto">
        <h1 class="text-lg"> <strong>Class Based Components </strong></h1>
        <p>To create a class based component, you may use the make:component Artisan command. </p>
        <p>To illustrate how to use components, we will create a simple Alert component.  </p> 
        <p>The make:component command will place the component in the  <strong>app/View/Components</strong> directory: </p>
        <p class="text-blue-600"><strong>php artisan make:component Alert</strong></p>
        <p>The make:component command will also create a view template for the component.</p>
        <p>The view will be placed in the <strong>resources/views/components</strong> directory. </p>
        <p>When writing components for your own application, components are automatically discovered within the <strong>app/View/Components</strong> directory and <strong>resources/views/components</strong> directory, so no further component registration is typically required. </p>
        <br>
        <p>You may also create components within subdirectories:</p>
        <p class="text-blue-600"><strong>php artisan make:component Forms/Input</strong></p>
        <p>The command above will create an Input component in the <strong>app/View/Components/Forms</strong> directory and the view will be placed in the <strong>resources/views/components/forms</strong> directory.</p>
        <h1 class="text-lg"> <strong>Anonymous Components </strong></h1>
        <p>If you would like to create an anonymous component (a component with only a Blade template and no class), you may use the --view flag when invoking the make:component command:</p>
        <p class="text-blue-600"><strong>php artisan make:component forms.input --view</strong></p>
        <p>The command above will create a Blade file at <strong>resources/views/components/forms/input.blade.php </strong><span class="underline underline-offset-1 ...">which can be rendered as a component via</span>   <strong> < x-forms.input </strong>/>. </p>
    </div>
    
</body>
</html>
