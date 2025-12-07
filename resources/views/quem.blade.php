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
      <a class="mx-8 font-medium text-sm text-gray-800 hover:text-blue-600" href="#">Marcas</a>
      <a class="mx-8 font-medium text-sm text-gray-800 hover:text-blue-600" href="#">Localização</a>
      <a class="mx-8 font-medium text-sm text-gray-800 hover:text-blue-600" href="#">Blog</a>
    </div>
  </div>
</div>
<!-- End Nav -->

<!-- Inicio div base da História -->
 <div>
  <div>
    <p class="mx-45 my-15" style="font-size: 35px;">Nossa História</p>
  </div>
  <!-- Div do quadro -->
  <div class="bg-blue-100 border border-blue-500 mx-45 my-15 flex items-center">

    <img class="p-15" width="600"  src="https://i.pinimg.com/736x/04/94/ea/0494ea0cde46cd9420936f3946ff2f45.jpg" alt="">
    <p class="ml-1.5 mr-10 text-center font-semibold">A distribuidora de água nasceu em 2000, a partir do sonho de uma mãe que desejava ver seu filho empreender. Com muito incentivo, ela forneceu 100 galões para que ele iniciasse seu próprio serviço de disk água. Apesar dos esforços, o negócio enfrentou dificuldades e fechou após seis meses.</p>
    <!-- FIM DIV do quadro -->
  </div>

  <!-- Div do quadro -->
  <div class="bg-blue-100 border border-blue-500 mx-45 my-15 flex items-center">

    <p class="mr-1.5 ml-10 text-center font-semibold">Foi então que uma investidora-anjo entrou em cena, oferecendo 500 galões e orientações administrativas essenciais. Esse apoio foi decisivo para o renascimento do Disk Agua, marcando o início de uma trajetória de crescimento contínuo e dedicação ao atendimento de qualidade.</p>
    <img class="p-15" width="500"  src="https://lh3.googleusercontent.com/rd-gg/AIJ2gl9wyUsrIQHMbaQ1blwHo4uy8H3a_KcwUxjhT4TvrcRwBDYZshVGARvQCyks64oQh3CW8JlXvlGOa4iQM5I08cNxzuGIt6TjGJJovBaBebFf6HJxgFnDfLoJMudhm9HsnJzcH8kHmGrPPtcwhuMubpSkLjOwIOBaeoM8RzRKiTwL634yrDVQAm_8__CDPZ21d4PSnamgeSq6kPjDkY81X--3U-b3imVy2brth4TRW6fzu70b2ToT6aKvGgqIjJ0zPTm_Nc41fqobcQGzsZ6FwrexXQYTwIeZIOpN8vN66BMn9GMNYBcPhKnavsYnpEQnP4gT5KZDFI2f554zaezJ6AycmvtrUzJ7JOsa-0LJ2xGRuTrRO5astHxPRS-dVor5CeuLD9hxr_RjYQVEDQpfxgcW2gyzHF-lIRXPPvBuk19KVEIJheVb3rWh_hm5HvSeZ-_g1qZ5MyUHIZ7lNiHahT_5VWLSyDDXc1649G6QQU0Zx0BdOSSYwo-Gtpdbfzxk65rbF6MkEjLYiyT_PH28sMPpmbTZZJ6RXXYbAM-kxmt7isCS8CIQu3OypdQ3GN3fbGxx12X60p4JMeqdDgpWuQmGxBvZPxqJ1wq1S-dC6PpKhVMZGuHdq2jegIhDGNw7iADvwm-x_gSl2ZjEzROVhagSjGil06euDeWVVUhPZ3rulueH7Qu5L1GJWTy2jZ2qTm_0x0jfZkS2NN32-EzJbt0SOYf69smpVwN-yK7cWQHCR15N7UyyrX_ly1e23AE-a9one6XrST32nKOenHnOTyz4kPWVxypZQekO1w_ifxA90x7USGMrRURuDpdXsA6tvUMUw-rZYduE6yFhYHIh9GtQkanqV5lnibMYTLbtzffhLRZ0hjKlaZvDvN6yXRCYrdLqYwfOrL7PrhZRe-WVOlHW3rBviFSqM0R94lxNV9YTCHLK5MITcMNt2828qNYZvicezTZGyb5xk0yozMLyPzR3qweAGcmMYJpxsFozsZ2Ga71tuWldpF5-o0T1jSKyA7dcUqNWcNRB54xKCzqL5PtcvtKtQ81MZ--_uzAE3rHbWguANivTyy9H0lsbIEdxWowHRbmKEElDqBB-m3Dw3Uw_ZDkt5Lpm-KljyvP4u89I8cYmsnQB780DznD8S5h12yvAipkdXg0iEusn5slWqJgjSYGo-Xvi6k44878ZcqELbpWJ9qql-rF91b6h6OVKKeO6q_vx1EHkuqrd3kNuAcmXN5C4fc7XKViqcuQo6UdOeOuJCG6i-03TaYs0egnK7cfabZyumhZlV0eXTkDhkShyhFPZQii1XEnawTn7BVR7eEMzB7uW1B1ftPLT4ztgMSDa3Le2Fi1Hj6ciB2O3Gh7LOdx58Q=s1024-rj" alt="">
    
    <!-- FIM DIV do quadro -->
  </div>
<!-- FIM DIV base da História -->
</div>

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
