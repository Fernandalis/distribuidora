<x-base-layout>

   <!-- Nav -->
<div class="bg-blue-100">
  <div class="justify-between sm:gap-x-3 py-3 px-4 sm:px-6 lg:px-10 overflow-visible transition-all sm:block">
    <div class="mx-40 flex sm:flex-row sm:gap-x-6">

      <!-- Home -->
      <a class="mx-8 font-medium text-sm text-blue-600 hover:text-blue-600 flex" href="{{route('home')}}">
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
      <a class="mx-8 font-medium text-sm text-gray-800 hover:text-blue-600" href="{{route('lista-blogs')}}">Blog</a>
    </div>
  </div>
</div>
<!-- End Nav -->
<!-- Inicio DIV scrolagem -->
<div class="flex justify-between items-center my-15">

<div id="carousel" class="overflow-x-scroll snap-x snap-mandatory flex space-x-4 px-4 scroll-smooth border border-gray-200 max-w-180 mx-auto p-2 my-2 grid-[300px]">
  <div class="snap-center w-4/5 h-72 flex-shrink-0">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuaT_GAXrtuqu-zCKnCLnEasDGZIiR2Opfrw&s" class="w-full h-full object-contain rounded-md shadow-lg" />
  </div>
  <div class="snap-center w-4/5 h-72 flex-shrink-0">
    <img src="https://doceriapaodemel.com.br/wp-content/uploads/2024/09/d9acdf53eea5855930c3d7b3cf317217.jpeg" class="w-full h-full object-contain rounded-md shadow-lg" />
  </div>
  <div class="snap-center w-4/5 h-72 flex-shrink-0">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTioRSKtol9UvPh4DvQuUivB3KYKNFnk_0KEQ&s" class="w-full h-full object-contain rounded-md shadow-lg" />
  </div>
  <div class="snap-center w-4/5 h-72 flex-shrink-0">
    <img src="https://doceriapaodemel.com.br/wp-content/uploads/2024/09/d9acdf53eea5855930c3d7b3cf317217.jpeg" class="w-full h-full object-contain rounded-md shadow-lg" />
  </div>
  <div class="snap-center w-4/5 h-72 flex-shrink-0">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTioRSKtol9UvPh4DvQuUivB3KYKNFnk_0KEQ&s" class="w-full h-full object-contain rounded-md shadow-lg" />
  </div>
</div>

<!-- Fim div da grade de scrolagem -->
</div>

<script>
  const carousel = document.getElementById('carousel');
  const items = carousel.querySelectorAll('.snap-center');
  let currentIndex = 0;
  const intervalTime = 3000; // tempo em ms (3s)

  function moveToItem(index) {
    const item = items[index];
    const itemOffset = item.offsetLeft;
    const itemWidth = item.offsetWidth;
    const containerWidth = carousel.clientWidth;

    const scrollPosition = itemOffset - (containerWidth - itemWidth) / 2;

    carousel.scrollTo({
      left: scrollPosition,
      behavior: 'smooth'
    });
  }

  function nextItem() {
    currentIndex++;
    if (currentIndex >= items.length) {
      currentIndex = 0;
    }
    moveToItem(currentIndex);
  }

  setInterval(nextItem, intervalTime);
</script>

<!-- Inicio div base da História -->
 <div>
  <div class=" bg-blue-100">
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

<!-- Inicio Div parte de baixo do site -->
 <div>
  <div class="bg-blue-100"> <p class="ml-40 font-semibold" style="font-size: 30px">Saiba Mais:</p></div>
  <div class="grid grid-cols-3  justify-between ml-45 my-20"> 
    <div><img class="rounded-full w-50" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT12L6BDCyb0ufq5k2SqI9z5FyQA5mBCsV_2Cj55DyPhQ&s" alt="">
   <p><a class=" inline-flex gap-x-2 text-black hover:text-blue-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200 my-5 font-semibold " style="white-space: nowrap;" href="{{route('lista-produtos')}}">Veja nosso catálogo online</a></p>
  </div>
    <div><img class="ml-5 w-50" src="https://lh3.googleusercontent.com/rd-gg/AIJ2gl8uvr9f6fiS0R7a1QAtG9KcTLjVxSBvrc4Dmda0KtNG6tm2iLUjTLjVlNj9o4j_MDra9QHwQULJSlgs5bARxQcmvcx2wVB_NCfuZ_Uk3mmF4E87zixke327rb8D6fWWiegiZ7QjxRNYjdtqGqF-ZDe0wcAnspuiIhl7pnClx2LdNwtFXd9SM7RYjfHmmWiKJS8_1ZBIAG7JPW3mmVnq9an_zqmaaPhit9mwNQLcaqZrUWH_WZ297obfQAD5wuPy2G3k8bjYVWsqsuRC2G98MhSLl8PmV0gV37j1AywzrL8wGZGvbEgfMriW-NUcieV6WNQshn4NwBSzfmuUjq8cHwuOvECGoaiCa79EnWNEbbC3nm6t96nMczb81-zoR_SwoY8p8OwFkltgJwweg4UCCdGOeVsZyIFrLnv2UZDvIMpBE4oU7vy3_dZlQ8ZTpI_1UAL71rbAXlzt42NjMrB-tsuIMOBVBs5SyMOqJBnYpgi8Rv9tqqSPQSif92pkDiTz6D2c0KBW6UV_LlBomw0MkwHEM5Q6ANXASpxJZ1l8pyVeJzznCQ5FfZwHaHxMDXd-TtJztLBwOTSsJN8jxZXCSt5DqOgJqYUF06_vJBNiGTiUX7J2x7KahOdmFguWSmSG3EumDzfUI9v4VOov4wTCrdItU2QPVEMt5WxMifaLkfkda4ZbtFT6m7zdjH0RpEPvm0ZwNBY6O1h8P5LaZQQLqc0Jvp1Z82O8eV7_ce7DADLggjyes43LiJahh7AxnOzjPzU43Fy6Syu2BX1mzDcVCdZaJe6FFferjfG9d5WGojkPRQ1PzBxl3291R2lejhnz2ZEgdDOXw9ULXfi3GzLgmolNIKz0CHhWZE0hrpLxgXLFYZwv7ykawQ5qKaW-7eCFqftwS_bvpGiC4-GV_-Sj9d4txAP91AyjFiiM6oSnncg3R4yzM8njUDOgxSyoiPioVIAWWDkf11XqJawt4uHIJCL1fKbsWpd8cg7_HpE0Nrg7PbCV6PkNIlXO_HOHefkArYh2gbKLsh7GsPMmLjs2_TwU6wmILNhVkfHMOjJ_wQ3GCfFYdXrjqvSOWSNdpMVjnVAyr6G3rrfqxYYAcxqHjRVie-OccwmWPi3l8jEK4TcQGelUv9Y-SMrL8_cyRXCqNVhN-m6L-WGAkomZMzVi0zkbVzBknEI6HnC4d7BFcYmHmwMjUIvfyMMr2WgdlWoPlOGYJnNvtFMi-CPlswYhl-6bxxqVdsqVHCx7n8QXyxdOqSuspIGlZVLxDHd5EfAb49fsUt_mrlXbZOoQ7O8G63nCghQX6wPvjlzsvYfbw00RYMecSDqOmHyih0lkKhUV6ESAbCeU6MqwA1WZnBoN_bCOUxxp=s1024-rj" alt="">
     <p><a class=" inline-flex gap-x-2 text-black hover:text-blue-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200 my-5 font-semibold " style="white-space: nowrap;" href="{{route('lista-marcas')}}">Marcas com as quais trabalhamos</a></p>
  </div>
    <div><img class="ml-10 rounded-full my-10 w-50" src="https://media.istockphoto.com/id/451169621/pt/vetorial/mapa-com-um-alfinete.jpg?s=612x612&w=0&k=20&c=ULqu5iz_rdudV5eQYTdPgrz_Ui9rFcwR6OWOeE2XDys=" alt=""><p><a class=" inline-flex gap-x-2 text-black hover:text-blue-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200 my-5 font-semibold mx-25 " style="white-space: nowrap;" href="{{route('localizacao')}}">Localização</a></p></div>
  </div>
 <!-- FIM DIV parte de baixo do site -->
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