<x-layouts.page>

    @section('title', 'Página Inicial - Minha Empresa')
    @section('meta_description', 'Serviços contábeis especializados para pequenas empresas.')
    @section('meta_keywords', 'contabilidade, empresa, impostos')
    @section('meta_image', asset('images/home-banner.jpg'))

    @section('content')
        <div class="container mx-auto min-h-[2000px]">
            <h2 class="text-2xl font-bold mb-4">Bem-vindo à nossa empresa!</h2>
            <p class="text-gray-700">Oferecemos soluções contábeis completas para o seu negócio.</p>
        </div>

    @endsection

</x-layouts.page>
