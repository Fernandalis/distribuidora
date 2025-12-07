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
      <a class="mx-8 font-medium text-sm text-gray-800 hover:text-blue-600" href="{{route('lista-marcas')}}">Marcas</a>
      <a class="mx-8 font-medium text-sm text-gray-800 hover:text-blue-600" href="{{route('localizacao')}}">Localização</a>
      <a class="mx-8 font-medium text-sm text-blue-600 hover:text-blue-600" href="{{route('lista-blogs')}}">Blog</a>
    </div>
  </div>
</div>
<!-- End Nav -->

<!-- ////////////////INICIO DA DETALHES DE BLOGS/////////// -->

<!-- Blog Article -->
<div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
  <div class="max-w-2xl">
    <!-- Avatar Media -->
    <div class="flex justify-between items-center mb-6">
      <div class="flex w-full sm:items-center gap-x-5 sm:gap-x-3">
        <div class="shrink-0">
          <img class="size-12 rounded-full" src="data:image/jpeg;base64,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" alt="">
        </div>

        <div class="grow">
          <div class="flex justify-between items-center gap-x-2">
            <div>
              <!-- Tooltip -->
              <div class="hs-tooltip [--trigger:hover] [--placement:bottom] inline-block">
                <div class="hs-tooltip-toggle sm:mb-1 block text-start cursor-pointer">
                  <span class="font-semibold text-gray-800 dark:text-neutral-200">
                    Escritores Disk Água
                  </span>

                </div>
              </div>
              <!-- End Tooltip -->

              <ul class="text-xs text-gray-500 dark:text-neutral-500">
                <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                  Jan 18
                </li>
                <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                  2 min read
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Avatar Media -->

    <!-- Content -->
  <div class="space-y-5 md:space-y-8">
    <div class="space-y-3">
     <figure>
        <img class="w-90 mx-25 object-cover rounded-xl" src="{{ $blogs->imagem }}" alt="Blog Image">
      </figure>
      <h1 class="text-2xl font-bold md:text-3xl dark:text-white">{{ $blogs->titulo }}</h1>
      <p class="text-lg text-gray-800 dark:text-neutral-200">{{ $blogs->descricao }}</p>
    </div>
  </div>

  </div>
</div>
<!-- End Blog Article -->

<!-- ////////////////FIM DA DETALHES DE BLOGS//////////////// -->

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
