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
                    <a href="{{ route('RV_Rendering.index')}}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Rendering Component</button></a>
                    <a href="{{ route('RV_Passing.index')}}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Passing Data to Components</button></a>
                    <a href="#"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Component Attributes</button></a>
                    <a href="#"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Reserved Keywords</button></a>
                    <a href="{{ route('RV_Slot.index') }} "><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Slots</button></a>
                    <a href="{{ route('packageComponent.index')}}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Package</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto">        
        <div class="grid grid-cols-2">
            <h1 class="text-lg"><strong>Learning Component</strong></h1>
            <h1 class="text-lg"><strong>Estudando Componentes</strong></h1>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <p>Components and slots provide similar benefits to sections, layouts, and includes; </p>
                <p>however, some may find the mental model of components and slots easier to understand. </p>
                <p>There are two approaches to writing components: </p>
                <li><strong>class based components</strong></li>
                <li><strong>anonymous components</strong></li>
            </div>
            <div>                
                <p>Componentes e slots oferecem benefícios semelhantes a seções, layouts e inclusões; </p> 
                <p>entretanto, alguns podem achar o modelo mental de componentes e slots mais fácil de entender. </p>
                <p>Existem duas abordagens para escrever componentes:</p> 
                <li><strong>componentes baseados em classe</strong></li>
                <li><strong>componentes anônimos</strong></li>
            </div>
        </div>
        <br>
    </div>
    <div class="container mx-auto">
        <div class="grid grid-cols-2">
            <h1 class="text-lg"><strong>Class Based Components</strong></h1>
            <h1 class="text-lg"><strong>Componentes baseados em classe</strong></h1>
        </div>        
        <div class="grid grid-cols-2 gap-4">
            <div>
                <p>To create a class based component, you may use the <strong>make:component Artisan</strong> command. </p>
                <p>To illustrate how to use components, we will create a simple Alert component.  </p> 
                <p>The make:component command will place the component in the  <strong>app/View/Components</strong> directory: </p>
                <div class="bg-red-200">
                    <p class="text-black p-2"><strong>php artisan make:component Alert</strong></p>
                </div>
                <p>The make:component command will also create a view template for the component.</p>
                <p>The view will be placed in the <strong>resources/views/components</strong> directory. </p>
                <p>When writing components for your own application, components are automatically discovered within the <strong>app/View/Components</strong> directory and <strong>resources/views/components</strong> directory, so no further component registration is typically required. </p>
                <br>
                <p>You may also create components within subdirectories:</p>
                <div class="bg-red-200">
                    <p class="text-black p-2"><strong>php artisan make:component Forms/Input</strong></p>
                </div>
                <p>The command above will create an Input component in the <strong>app/View/Components/Forms</strong> directory and the view will be placed in the <strong>resources/views/components/forms</strong> directory.</p>        
            </div>
            <dov>
                <p>Para criar um componente baseado em classe, você pode usar o comando <strong>make:component Artisan</strong>. </p>
                <p>Para ilustrar como usar componentes, criaremos um componente Alerta simples. </p>
                <p>O comando make:component colocará o componente no diretório <strong>app/View/Components</strong>:</p>
                <div class="bg-green-200">
                    <p class="text-black p-2"><strong>php artisan make:component Alert</strong></p>
                </div>
                <p>O comando make:component também criará um modelo de visualização para o componente.</p>
                <p>A visualização será colocada no diretório <strong>resources/views/components</strong>. </p>
                <p>Ao escrever componentes para sua própria aplicação, os componentes são descobertos automaticamente dentro do diretório <strong>app/View/Components</strong> e diretório <strong>resources/views/components</strong>, portanto, normalmente nenhum registro adicional de componente é necessário. </p>
                <br>                
                <p>Você também pode criar componentes dentro de subdiretórios:</p>
                <div class="bg-green-200">
                    <p class="text-black p-2"><strong>php artisan make:component Forms/Input</strong></p>
                </div>
                <p>O comando acima criará um componente Input no diretório <strong>app/View/Components/Forms</strong> e a visualização será colocada no diretório <strong>resources/views/components/forms</strong>.</p>  
            </dov>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <h1 class="text-lg"> <strong>Anonymous Components </strong></h1>
                <p>If you would like to create an anonymous component (a component with only a Blade template and no class), you may use the --view flag when invoking the make:component command:</p>
                <div class="bg-red-200">
                    <p class="text-black p-2"><strong>php artisan make:component forms.input --view</strong></p>
                </div>
                
                <p>The command above will create a Blade file at <strong>resources/views/components/forms/input.blade.php </strong><span class="underline underline-offset-1 ...">which can be rendered as a component via</span>   <strong> < x-forms.input </strong>/>. </p>
        
            </div>
            <div>
                <h1 class="text-lg"> <strong>Componentes Anônimos </strong></h1>
                <p>Se você quiser criar um componente anônimo (um componente com apenas um modelo Blade e nenhuma classe), você pode usar o sinalizador --view ao invocar o comando make:component:</p>
                <div class="bg-green-200">
                    <p class="text-black p-2"><strong>php artisan make:component forms.input --view</strong></p>
                </div>                
                <p>O comando acima criará um arquivo Blade em <strong>resources/views/components/forms/input.blade.php </strong><span class="underline underline-offset-1 ...">que pode ser renderizado como um componente via</span>   <strong> < x-forms.input </strong>/>. </p>        
            </div>
        </div>
    </div>
</body>
</html>
