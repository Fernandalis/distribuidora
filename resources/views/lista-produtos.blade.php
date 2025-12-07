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
        <a class="mx-8 font-medium text-sm text-blue-600 hover:text-blue-600 cursor-pointer">
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
      <a class="mx-8 font-medium text-sm text-gray-800 hover:text-blue-600" href="#">Marcas</a>
      <a class="mx-8 font-medium text-sm text-gray-800 hover:text-blue-600" href="#">Localização</a>
      <a class="mx-8 font-medium text-sm text-gray-800 hover:text-blue-600" href="#">Blog</a>
    </div>
  </div>
</div>
<!-- End Nav -->

<!-- ////////////////INICIO DA LISTA DE PRODUTOS/////////// -->
@foreach($produtos as $produto)
<!-- Icon Blocks -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 items-center gap-6 md:gap-10">
    <!-- Card -->
    <div class="size-full bg-white shadow-lg rounded-lg p-5 dark:bg-neutral-900">
      <div class="flex items-center gap-x-4 mb-3">
        <div class="inline-flex justify-center items-center size-15.5 rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcvdRr4rQaqLUgvt3Mms_FEb0b9ZebTYQE3A&s" alt="">
        </div>
        <div class="shrink-0">
          <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">{{$produto->valorun}}</h3>
        </div>
      </div>
      <p class="text-gray-600 dark:text-neutral-400">The simplest way to keep your portfolio always up-to-date.</p>
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="size-full bg-white shadow-lg rounded-lg p-5 dark:bg-neutral-900">
      <div class="flex items-center gap-x-4 mb-3">
        <div class="inline-flex justify-center items-center size-15.5 rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
          <img src="https://acdn-us.mitiendanube.com/stores/211/012/products/garrafao-20-lsp2-bfbef9f02fbe43e21915877022366400-1024-1024.webp" alt="">
        </div>
        <div class="shrink-0">
          <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">{{$produto->nome}}</h3>
        </div>
      </div>
      <p class="text-gray-600 dark:text-neutral-400">New design projects delivered to your inbox each morning.</p>
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="size-full bg-white shadow-lg rounded-lg p-5 dark:bg-neutral-900">
      <div class="flex items-center gap-x-4 mb-3">
        <div class="inline-flex justify-center items-center size-15.5 rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
          <svg class="shrink-0 size-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m2 7 4.41-4.41A2 2 0 0 1 7.83 2h8.34a2 2 0 0 1 1.42.59L22 7"/><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"/><path d="M15 22v-4a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2v4"/><path d="M2 7h20"/><path d="M22 7v3a2 2 0 0 1-2 2v0a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 16 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 12 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 8 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 4 12v0a2 2 0 0 1-2-2V7"/></svg>
        </div>
        <div class="shrink-0">
          <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">{{$produto->nome}}</h3>
        </div>
      </div>
      <p class="text-gray-600 dark:text-neutral-400">Get your goods in front of millions of potential customers with ease.</p>
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="size-full bg-white shadow-lg rounded-lg p-5 dark:bg-neutral-900">
      <div class="flex items-center gap-x-4 mb-3">
        <div class="inline-flex justify-center items-center size-15.5 rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
          <svg class="shrink-0 size-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5.5 8.5 9 12l-3.5 3.5L2 12l3.5-3.5Z"/><path d="m12 2 3.5 3.5L12 9 8.5 5.5 12 2Z"/><path d="M18.5 8.5 22 12l-3.5 3.5L15 12l3.5-3.5Z"/><path d="m12 15 3.5 3.5L12 22l-3.5-3.5L12 15Z"/></svg>
        </div>
        <div class="shrink-0">
          <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">{{$produto->nome}}</h3>
        </div>
      </div>
      <p class="text-gray-600 dark:text-neutral-400">New design projects delivered to your inbox each morning.</p>
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="size-full bg-white shadow-lg rounded-lg p-5 dark:bg-neutral-900">
      <div class="flex items-center gap-x-4 mb-3">
        <div class="inline-flex justify-center items-center size-15.5 rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
          <svg class="shrink-0 size-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16.466 7.5C15.643 4.237 13.952 2 12 2 9.239 2 7 6.477 7 12s2.239 10 5 10c.342 0 .677-.069 1-.2"/><path d="m15.194 13.707 3.814 1.86-1.86 3.814"/><path d="M19 15.57c-1.804.885-4.274 1.43-7 1.43-5.523 0-10-2.239-10-5s4.477-5 10-5c4.838 0 8.873 1.718 9.8 4"/></svg>
        </div>
        <div class="shrink-0">
          <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">{{$produto->nome}}</h3>
        </div>
      </div>
      <p class="text-gray-600 dark:text-neutral-400">Get your goods in front of millions of potential customers with ease.</p>
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="size-full bg-white shadow-lg rounded-lg p-5 dark:bg-neutral-900">
      <div class="flex items-center gap-x-4 mb-3">
        <div class="inline-flex justify-center items-center size-15.5 rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
          <svg class="shrink-0 size-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8.3 10a.7.7 0 0 1-.626-1.079L11.4 3a.7.7 0 0 1 1.198-.043L16.3 8.9a.7.7 0 0 1-.572 1.1Z"/><rect x="3" y="14" width="7" height="7" rx="1"/><circle cx="17.5" cy="17.5" r="3.5"/></svg>
        </div>
        <div class="shrink-0">
          <h3 class="block text-lg font-semibold text-gray-800 dark:text-white">{{$produto->nome}}</h3>
        </div>
      </div>
      <p class="text-gray-600 dark:text-neutral-400">The simplest way to keep your portfolio always up-to-date.</p>
    </div>
    <!-- End Card -->
  </div>
</div>
<!-- End Icon Blocks -->
@endforeach
<!-- ////////////////FIM DA LISTA DE PRODUTOS//////////////// -->

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
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Marcas</a></p>
      </div>
    </div>
    <!-- End Col -->
    <div class="my-15 mx-15">
      <h4 class="text-xs font-semibold text-gray-900 uppercase dark:text-neutral-100">Informações</h4>
      <div class="mt-3 grid space-y-3 text-sm">
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Localização</a></p>
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Blog</a></p>
      </div>
    </div>
    <!-- End Col -->
    <div class="my-15 mx-10">
      <div class="mt-3 grid space-y-3 text-sm">
        <p><a class="text-xs font-semibold text-gray-900 uppercase dark:text-neutral-100 mx-3" href="#">Endereço</a></p>
        <p><a class="inline-flex gap-x-2 text-black hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Rua A, Bairro B,</a></p>
        <p><a class="inline-flex gap-x-2 text-black hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200 mx-5 " href="#">Nº 123</a></p>
      </div>
    </div>
    <!-- End Col -->
    <div class="my-15">
      <div class="mt-3 grid space-y-3 text-sm">
        <p><a class="text-xs font-semibold text-gray-900 uppercase dark:text-neutral-100 mx-4" href="#">CONTATO</a></p>
        <p><a class="inline-flex gap-x-2 text-black hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">(15) 99709-2176</a></p>
        <p><a class="inline-flex gap-x-2 text-black hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">(15) 3259-3180</a></p>
      </div>
    </div>
    <!-- End Col -->
  </div>
  <!-- End Grid -->
   
</footer>
<!-- ========== END FOOTER ========== -->

</x-base-layout>
