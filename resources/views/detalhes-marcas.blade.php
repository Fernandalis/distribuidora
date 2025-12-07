<x-base-layout>
    <!-- Nav -->
<div class="bg-blue-100">
  <div class="justify-between sm:gap-x-3 py-3 px-4 sm:px-6 lg:px-10 overflow-visible transition-all sm:block">
    <div class="mx-40 flex sm:flex-row sm:gap-x-6">

      <!-- Home -->
      <a class="mx-8 font-medium text-sm text-gray-800 hover:text-blue-600 flex" href="{{route('home')}}">
        <svg class="mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
          <path d="M19 21H5C4.44772 21 4 20.5523 4 20V11L1 11L11.3273 1.6115C11.7087 1.26475 12.2913 1.26475 12.6727 1.6115L23 11L20 11V20C20 20.5523 19.5523 21 19 21ZM6 19H18V9.15745L12 3.7029L6 9.15745V19Z"></path>
        </svg>
        Home
      </a>

      <!-- Quem Somos -->
      <a class="mx-8 font-medium text-sm text-gray-800 hover:text-blue-600" href="{{route('quem')}}">Quem Somos</a>

      <!-- Produtos e Acessórios com dropdown -->
      <div class="relative group">
        <a class="mx-8 font-medium text-sm text-gray-800 hover:text-blue-600 cursor-pointer">
          Produtos e Acessórios
        </a>
        <!-- Dropdown -->
        <div class="absolute left-0 mt-2 w-48 bg-white border border-gray-300 rounded-md shadow-lg 
              opacity-0 group-hover:opacity-100 group-hover:translate-y-0 
              transform translate-y-2 transition-all duration-200 z-50">

          <a href="{{route('lista-produtos')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100">Produtos</a>
          <a href="{{route('lista-acessorios')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100">Acessórios</a>
        </div>
      </div>

      <!-- Outros links -->
      <a class="mx-8 font-medium text-sm text-blue-600 hover:text-blue-600" href="{{route('lista-marcas')}}">Marcas</a>
      <a class="mx-8 font-medium text-sm text-gray-800 hover:text-blue-600" href="{{route('localizacao')}}">Localização</a>
      <a class="mx-8 font-medium text-sm text-gray-800 hover:text-blue-600" href="{{route('lista-blogs')}}">Blog</a>
    </div>
  </div>
</div>
<!-- End Nav -->

<!-- ////////////////INICIO DA DETALHES DE MARCAS/////////// -->

<!-- Profile -->
<div class="flex items-center gap-x-3 mx-50 my-10">
  <div class="shrink-0">
    <img class="shrink-0 size-16 rounded-full object-contain border border-blue-600" src="{{$marcas->logo}}" alt="">
  </div>

  <div class="grow">
    <h1 class="text-lg font-medium text-gray-800 dark:text-neutral-200">
      {{$marcas->nome}}
    </h1>
  </div>
</div>
<!-- End Profile -->

<!-- About -->
<div class="mt-8 mx-50 mb-20">
  <p class="text-sm text-gray-800 dark:text-neutral-400">
    {{$marcas->descricao}}
  </p>
</div>
<!-- End About -->

<!-- ////////////////FIM DA DETALHES DE MARCAS//////////////// -->

<!-- INICIO MENU INFERIOR -->
<!-- ========== FOOTER ========== -->
<footer class="">
  <!-- Grid -->
  <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 mb-10 bg-gray-200 h-60">
    <div class="col-span-full hidden lg:col-span-1 lg:block my-10">
      <a class=" font-semibold text-xl  dark:text-white mx-8" href="#">Disk Água do Eduardo</a>
    </div>
    <!-- End Col -->
    <div class="my-15 mx-15">
      <h4 class="text-xs font-semibold text-gray-900 uppercase dark:text-neutral-100">Sobre</h4>
      <div class="mt-3 grid space-y-3 text-sm">
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="{{route('quem')}}">Quem Somos</a></p>
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Produtos e Acessórios</a></p>
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="{{route('lista-marcas')}}">Marcas</a></p>
      </div>
    </div>
    <!-- End Col -->
    <div class="my-15 mx-15">
      <h4 class="text-xs font-semibold text-gray-900 uppercase dark:text-neutral-100">Informações</h4>
      <div class="mt-3 grid space-y-3 text-sm">
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="{{route('localizacao')}}">Localização</a></p>
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="{{route('lista-blogs')}}">Blog</a></p>
      </div>
    </div>
    <!-- End Col -->
    <div class="my-15 mx-10">
      <div class="mt-3 grid space-y-3 text-sm">
        <p class="text-xs font-semibold text-gray-900 uppercase dark:text-neutral-100 mx-3" href="{{route('localizacao')}}">Endereço</p>
        <p class="inline-flex gap-x-2 text-black hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="{{route('localizacao')}}">Rua A, Bairro B,</p>
        <p class="inline-flex gap-x-2 text-black hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200 mx-5 " href="{{route('localizacao')}}">Nº 123</p>
      </div>
    </div>
    <!-- End Col -->
    <div class="my-15">
      <div class="mt-3 grid space-y-3 text-sm">
        <p class="text-xs font-semibold text-gray-900 uppercase dark:text-neutral-100 mx-4" >CONTATO</p>
        <p class="inline-flex gap-x-2 text-black " >(15) 99709-2176</p>
        <p class="inline-flex gap-x-2 text-black dark:focus:text-neutral-200" >(15) 3259-3180</p>
      </div>
    </div>
    <!-- End Col -->
  </div>
  <!-- End Grid -->
   
</footer>
<!-- ========== END FOOTER ========== -->

</x-base-layout>
