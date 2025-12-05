@vite('resources/css/app.css')

<!DOCTYPE html>
<html lang="pt-BR">
<!-- ========== HEADER ========== -->
 <body class="min-h-screen">
<header class="flex flex-wrap md:flex-nowrap z-50 w-full bg-white border-b border-gray-200 dark:bg-neutral-800 dark:border-neutral-700">
  <nav class="w-full mx-auto md:flex md:items-center py-2 lg:px-8  ">
    <div class="flex items-center ">
      <img class="mx-25" style="margin-right: 8px;" src="data:image/jpeg;base64,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" width="180" height="150" alt="">

     <div class="font-semibold" style="white-space: nowrap;"> Distribuidora de Água do Eduardo</div>
      <!-- End Collapse Button -->
    </div>

    <!-- Collapse -->
    <div id="hs-header-base" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block " >
      <div class="mr-30">
        <div class="ml-148 font-semibold p-2">Fale Conosco</div>
        <div class="py-2 md:py-0  flex flex-col md:flex-row md:items-center gap-0.5 md:gap-1">
          <div class="grow">
            <div class="flex flex-col md:flex-row md:justify-end md:items-center gap-0.5 md:gap-1 mr-5">
            <svg class="mr-2" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="green"><path d="M12.001 2C17.5238 2 22.001 6.47715 22.001 12C22.001 17.5228 17.5238 22 12.001 22C10.1671 22 8.44851 21.5064 6.97086 20.6447L2.00516 22L3.35712 17.0315C2.49494 15.5536 2.00098 13.8345 2.00098 12C2.00098 6.47715 6.47813 2 12.001 2ZM8.59339 7.30019L8.39232 7.30833C8.26293 7.31742 8.13607 7.34902 8.02057 7.40811C7.93392 7.45244 7.85348 7.51651 7.72709 7.63586C7.60774 7.74855 7.53857 7.84697 7.46569 7.94186C7.09599 8.4232 6.89729 9.01405 6.90098 9.62098C6.90299 10.1116 7.03043 10.5884 7.23169 11.0336C7.63982 11.9364 8.31288 12.8908 9.20194 13.7759C9.4155 13.9885 9.62473 14.2034 9.85034 14.402C10.9538 15.3736 12.2688 16.0742 13.6907 16.4482C13.6907 16.4482 14.2507 16.5342 14.2589 16.5347C14.4444 16.5447 14.6296 16.5313 14.8153 16.5218C15.1066 16.5068 15.391 16.428 15.6484 16.2909C15.8139 16.2028 15.8922 16.159 16.0311 16.0714C16.0311 16.0714 16.0737 16.0426 16.1559 15.9814C16.2909 15.8808 16.3743 15.81 16.4866 15.6934C16.5694 15.6074 16.6406 15.5058 16.6956 15.3913C16.7738 15.2281 16.8525 14.9166 16.8838 14.6579C16.9077 14.4603 16.9005 14.3523 16.8979 14.2854C16.8936 14.1778 16.8047 14.0671 16.7073 14.0201L16.1258 13.7587C16.1258 13.7587 15.2563 13.3803 14.7245 13.1377C14.6691 13.1124 14.6085 13.1007 14.5476 13.097C14.4142 13.0888 14.2647 13.1236 14.1696 13.2238C14.1646 13.2218 14.0984 13.279 13.3749 14.1555C13.335 14.2032 13.2415 14.3069 13.0798 14.2972C13.0554 14.2955 13.0311 14.292 13.0074 14.2858C12.9419 14.2685 12.8781 14.2457 12.8157 14.2193C12.692 14.1668 12.6486 14.1469 12.5641 14.1105C11.9868 13.8583 11.457 13.5209 10.9887 13.108C10.8631 12.9974 10.7463 12.8783 10.6259 12.7616C10.2057 12.3543 9.86169 11.9211 9.60577 11.4938C9.5918 11.4705 9.57027 11.4368 9.54708 11.3991C9.50521 11.331 9.45903 11.25 9.44455 11.1944C9.40738 11.0473 9.50599 10.9291 9.50599 10.9291C9.50599 10.9291 9.74939 10.663 9.86248 10.5183C9.97128 10.379 10.0652 10.2428 10.125 10.1457C10.2428 9.95633 10.2801 9.76062 10.2182 9.60963C9.93764 8.92565 9.64818 8.24536 9.34986 7.56894C9.29098 7.43545 9.11585 7.33846 8.95659 7.32007C8.90265 7.31384 8.84875 7.30758 8.79459 7.30402C8.66053 7.29748 8.5262 7.29892 8.39232 7.30833L8.59339 7.30019Z"></path></svg>

             <div class="font-semibold"> (15) 99709-2176</div>
            </div>
          </div>

          <!-- telefone e seu icone -->
          <div class=" flex flex-wrap items-center gap-x-1.5">

           <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z"></path></svg>

           <div class="font-semibold">(15) 3259-3180</div>

          </div>
          <!-- End Button Group -->
    <!-- End Collapse -->
  </nav>
</header>
<!-- ========== END HEADER ========== -->

<!-- Nav -->
<div class="bg-blue-100">
  <div class="justify-between sm:gap-x-3 py-3 px-4 sm:px-6 lg:px-10 hidden overflow-hidden transition-all sm:block">
      <div class="mx-40 flex sm:flex-row sm:gap-x-6">
        <a class="mx-8 font-medium text-sm text-gray-800 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-blue-500 dark:focus:text-blue-500 flex " href="#">
        <svg class="mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M19 21H5C4.44772 21 4 20.5523 4 20V11L1 11L11.3273 1.6115C11.7087 1.26475 12.2913 1.26475 12.6727 1.6115L23 11L20 11V20C20 20.5523 19.5523 21 19 21ZM6 19H18V9.15745L12 3.7029L6 9.15745V19Z"></path></svg>  
        Home</a>
        <a class="mx-8 font-medium text-sm text-gray-800 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-blue-500 dark:focus:text-blue-500" href="#">Quem Somos</a>
        <a class="mx-8 font-medium text-sm text-gray-800 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-neutral-200 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">Produtos e Acessórios</a>
        <a class="mx-8 font-medium text-sm text-gray-800 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-neutral-200 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">Marcas</a>
        <a class="mx-8 font-medium text-sm text-gray-800 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-neutral-200 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">Localização</a>
        <a class="mx-8 font-medium text-sm text-gray-800 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-neutral-200 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">Blog</a>
       </div>
  </div>
</div>
<!-- End Nav -->
<!-- Inicio DIV scrolagem -->
<div class="flex justify-between items-center my-15">

 <svg width="60" height="60" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M10.8284 12.0007L15.7782 16.9504L14.364 18.3646L8 12.0007L14.364 5.63672L15.7782 7.05093L10.8284 12.0007Z"></path></svg> 

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

 <svg width="60" height="60" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg>

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
    <img class="p-15" width="500"  src="https://lh3.googleusercontent.com/rd-gg/AIJ2gl-xKGmbbzqFr0ql-nwnGZ1l_98X5ALvWOhLbQ_1uOMcL6FOABrjrIac8u7vsISCp2w_Tn58_QelLoud5qsIVy6VNI2aHQjv4ERiZmiBiWqwOFEJMrZ--x2wt4CH_JykAjzs58tGj9hxqg-f63PjC96GbncnbmVhsPM2Wp0moztxW5QeJ40QUQw9aQ8WTAEme-ekj5ER160evbfM4hyYPRoAks_n589vrnP3A6AZ-2xPHIbWkrNIn1qK0PxJfJtGxb-_d3GWM8ax77LUhTkOb8PZ8S9URsVQj2fApiPVAP2YPPoJ4DQh96GTpHR379SLNxzzIsqkfUygHtYI24kDh7un5R5g_YcIc3iUyLBxRhhkaYw0B6LfR-heXzI-3VRlBpYOLA9kQkGK17mDoPSvbgbpnRzMmWnkTwoqA_41w6cXrEa-NZ_1xiJXkAt8N1SH0Bi6k9EI1o_Y-ibBeWaMilO5BX-M9tRJT2CQT7_ZnZiOWUdlz5fMGOAjSm7-jE5Wb-uJC7Dp1QzYJS1hmBeK6emr8fRQJ6s5-a8BRbisO6rvnzAALEcHtaCgMA4Ewr4xANzyR4jIlCFinH9D8vuQ6swaPufrzmbfhkqIlGaTcX-8ZI9N-awjMpalWFX_k0iBLk2YBIFpFtmvxngW1LJ0r5RCxkGnD5ne_Ox8isIy--Nr8YxTMZUGX5eZmmBIimE8HLgOOU3EY45J9onQuQtSZXOZhOW_w9Jgd4domCwfgZqCGKidwabEp2j1sHoW-ZBhK2EmPJfJ_1Ug_p2WSVvZC89dQ-Oizk5YAmZv65W2VkuVBuIIDpJFHaoU2ePK5mW34QGfGsPoPAEiz8zLvSoEZRyHHaFwsIMhgvOcbrqWYShf23rtIu5sEjM7o4ACT8NuHjoqEUoBv6ZEWnhOqLevzutdnmSG7CqzrBijfCvBUvBaqV4gEid5unfUk-RR7cbH4nvS_V9YQ0n9c2kV28LRwDJHrDzl-ilIURxG5V8ja1X56P0CNqxR8HxsMvqPgBa3Z74bUoyMoDsEPoEa16nA1ZxSBhPKsShW1b4tjh-rxt-t5bANQa2zfOPhLKDeO_PVFyUNOVKfx-NnO_pDPIXYWoo8qNh4HEe44Hi7WZipWrgMscwY4ExuGAiUhuKn5LxecCpiEQyC9Vo5MhbVxr5LbjUtAdrFg2CC0Mmg87C6lif1kirMHmg68SGL_oWmAXPy2OauqUmBDHoSgqohRd-ppGmbt-Ap2qppQUbL08bhTNXM4rzWbAAdL5hytBnxQ1jdqRLuYLKuzeg1MPEbcD2B9AwvTkEHRXNI7q00Q3xrUdZSZkqi_lelzD8e2TLtmf7FAR96tQWwGeS_AqJJAaPL=s1024-rj" alt="">
    
    <!-- FIM DIV do quadro -->
  </div>
<!-- FIM DIV base da História -->
</div>

<!-- Inicio Div parte de baixo do site -->
 <div>
  <div class="bg-blue-100"> <p class="ml-40 font-semibold" style="font-size: 30px">Saiba Mais:</p></div>
  <div class="grid grid-cols-3  justify-between ml-45 my-20"> 
    <div><img class="rounded-full w-50" src="https://lh3.googleusercontent.com/rd-gg/AIJ2gl_oX_L4WLk44UMkbKeet0rJizf4WEzwL2gawpNAsK190xbY2c1TIqsaS4xk3CNOE_OjiWygIhkFgogPJA4yhXZR9eNi0DjFzTUiIOuUlj4IUH1wS2uLqnbaQwnhjvuY_bOsjnr7BAOaqcv7h2h6ApY3scX-FOgQJasz8r-hNbzJ1cYmG7nunDIuwzCt_0MgiVducq4_I6lmMkeuWgp1KYM5hABt-nXUEEipFghENQxaiqR6vcwquTYB7QETdE4He2rwhfHCztsw1WkOGkFaB7QZ05T_LHQkioeuQbYrWloenTaCT9NZKPMpNc8VQjgNrUavd2b4SwQ_A70RVeLHJnT63xEyYNcSWsRBdyv65UajyXhym0X8mVNgmlxZZ8dawJj5q0GFHZjUdrf74m5-Rn77ZOXFwLPNCqdTC3laAk3__TUiGTge7YURs1cBl07CgMUOsly39RpThiAdTb9jM8BeNRKmm4dEWHddjtVRPRPX3awvyA9lOQwZTchjK-UKS4srRSYqL5j-r_-PK4OM-vHERB2wp9R9H0TbDeIx6oDgXGOpGJDv1CDk6mxce5ufViOzsbgvQEcNneBnUz_DLezrl8xeOD55omv2f6kk-SBsKpkIFE-6b5ARds_hLSZkuiXcvmVqGqiLSFXArEeFuYqpezDEkSp2v7eGy5Jv9IxBmsRFqgmpvwt0GrXjVzr8sWSy5voNYP4a4hC4JmhzSeEVgA9QVih9Nc5jyllkJgD44K4CZhwyqfrKisjhED1y1htM9Gwg72zcfujyxzcK3CeWoPpeAL6xBP9rjk_H8c2ntfNKDm2YCIoxb2RIS9cI47kBpZQbi3L6nXut40Gie40mZ0nXfUo-_3UDoaJCqLT6JgBJE4dkAJ9Br4NmzA7YSwYInz9nkhPNxq_CLto0BOwPM6R8rZBu1C9ebI7qOiMTXHvPanLdedzAkdYYBHNry73ivjeH6oZ7F6n5tYDyAdNRScn759DMCD3uhmr26AIpbXMnaZmCpneQh7QZ80rtnb_76h4uOnYsFa0ze82UeENlyVM3TcleyBiJTzKtV9vA5Twtzg06zolyLxc5VAKDVYMjWW6221MVuoASyxdSXRsZ3bEFhRoecF2XXNJ1zS9kSRqbyjXQzeMwF7fpg3FfwkyL6faTdF8i6b9C2BVaQyA8S_FHk5Unx2sTwsxc_lKUSSHE67kHedqqtljtEjrN2OMcGw-VKuz6b8XPVXh6S3W1M_bWE1XHvvec0L1-sa4BFxNProM2kGfjzgKDEKXipSsoRUukpvQvW_pV6xT1MYL3CMwRyYOuxSI5jMQTSsNBe6GhukV9HpfcjQmPVT9PXZeGCA7SPA052sMr5sjQdw=s1024-rj" alt="">
   <p class="my-5 font-semibold">Veja nosso catálogo online</p>
  </div>
    <div><img class="ml-5 w-50" src="https://lh3.googleusercontent.com/rd-gg/AIJ2gl8aLOKGqis5tnRrAFep5tPukLrKmY_VLasdeKaA60kmHyxRldHygiMLmwCZXUdZlaixSLka4neOdU3PBQsqFL82CJf2R3LqB6b7j2vdrdl5JV3BIPxekBWaYvdXQcGhSR9T_SmNg8zu6iY_v_nlXiW9mzfpJsRvaxu_DI6n_PoNLleggIBmfvxGgcB1dGUcMWyAGOFnDl3NDHAF1Cn_LmlUvRRGhvZjrXaD8Nsvc0gfpPOE7CrPj6bJCbtpmQExWUcR8UrSpFXbB3o2a9q-kxDduELLm2QcbaDtqf0atiJDg_9f-WyRYuSFDjBrcwYCUKmMhHJ-bEjZLT9K-N4LOBZswN_xiv1E-K2L9vvdD8NM6rzYzSaxjgHwcAb-9HuLo0vQOPp5MmNXqIozxRbL2AXTw0zw7hS62zE9TdDyKzrG7GWwmpujdThbblWwOLiapvIr7YvAUfRLWGJlxdaFGrlHKH9pnSXDApN_-fNDpHiku-UJNNYDRLhjLuCBP8e6RIXfdv-hW-3pOg-2Y9E9-KREhYZbiq0m5r29oJBXjAXoGzv7qb2vZizdzlB0jh8wB0zNSkNcq2WIjpYVH70mbuWT5tyoDkG4RUsb-rVnfXZr-PgBpSYXoYPm20XhRqwqM7UHsJ4c2FT8SwHCN-Fpp6i8NSZNvyUpLDQGaPdZftjSHPKXc3B8AB45GWYkXzy1w1deMs3s68PVbVy86p0VRcmifi_qNV1N_Ob6ezwNtqTx0QGfP0cuuJJdpbEsiUCZjcK3fbqIlZ9AXh28ydUPSZqAqixrJ7hhMjTkVSHx8Hhd1Gg9KXxbYvbbrD5St9e4gQPvB28lvUqhphYViApIJdLgZVLuB3DZdlx7cULB6NnAUL_wRBscyypR93EYRQTE5nc0C_2BhH59wj8yhKeo3g00N3rgko8TDvioQnLz_HTHHSPRYQFPL5uOOuJ5hT5FQjLj82v6zysqmMACZuOzZUgV9-eG-WXxc909jiAdJ1nxnP6r0UhzlTRqgAGzjxy8FlVFO96R0eD2IVLmR3EWOaw7mQ-K3UnWI8kgSKQShnA8-3PiurSNwwmFKcnTnIYDJbHHAQAgmgigH5Rq0DRHNbs693y2BKNeLjA7idqguer9uR0E9pYW0GDziq_UIllaaCXuVoLJLzugmQtjI2q77AEf_JCZoH5PbFKb6_-yuXKquiNlL6CmJnSN1xw5CG027x1N_CU4AsivofEIwa0M8cFsboTRavPvZJk4F4tjkb9UWwGHfMf8-l1rIRoXZAUi7wxC7L3WSMYYoDfWJqLFdPjsgCi5srZ2pAuvXJdfszcgymnIEHXJagla3VE0Jnb4EprMApFA_rwh0ZXaNu_5Aw=s1024-rj" alt="">
   <p class="my-5 font-semibold " style="white-space: nowrap;">Marcas com as quais trabalhamos</p>
  </div>
    <div><img class="ml-10 rounded-full my-10 w-50" src="https://media.istockphoto.com/id/451169621/pt/vetorial/mapa-com-um-alfinete.jpg?s=612x612&w=0&k=20&c=ULqu5iz_rdudV5eQYTdPgrz_Ui9rFcwR6OWOeE2XDys=" alt=""> <p class="my-15 font-semibold mx-25" style="white-space: nowrap;">Localização</p></div>
  </div>
 <!-- FIM DIV parte de baixo do site -->
 </div>

<!-- INICIO MENU INFERIOR -->
<!-- ========== FOOTER ========== -->
<footer class="">
  <!-- Grid -->
  <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 mb-10 bg-gray-200 h-80">
    <div class="col-span-full hidden lg:col-span-1 lg:block">
      <a class=" font-semibold text-xl  dark:text-white" href="#">Disk Água do Eduardo</a>
    </div>
    <!-- End Col -->

    <div>
      <h4 class="text-xs font-semibold text-gray-900 uppercase dark:text-neutral-100">Product</h4>

      <div class="mt-3 grid space-y-3 text-sm">
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Pricing</a></p>
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Changelog</a></p>
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Docs</a></p>
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Download</a></p>
      </div>
    </div>
    <!-- End Col -->

    <div>
      <h4 class="text-xs font-semibold text-gray-900 uppercase dark:text-neutral-100">Company</h4>

      <div class="mt-3 grid space-y-3 text-sm">
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">About us</a></p>
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Blog</a></p>
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Careers</a> <span class="inline text-blue-600 dark:text-blue-500">— We're hiring</span></p>
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Customers</a></p>
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Newsroom</a></p>
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Sitemap</a></p>
      </div>
    </div>
    <!-- End Col -->

    <div>
      <h4 class="text-xs font-semibold text-gray-900 uppercase dark:text-neutral-100">Resources</h4>

      <div class="mt-3 grid space-y-3 text-sm">
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Community</a></p>
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Help & Support</a></p>
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">eBook</a></p>
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">What's New</a></p>
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Status</a></p>
      </div>
    </div>
    <!-- End Col -->

    <div>
      <h4 class="text-xs font-semibold text-gray-900 uppercase dark:text-neutral-100">Developers</h4>

      <div class="mt-3 grid space-y-3 text-sm">
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Api</a></p>
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Status</a></p>
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">GitHub</a> <span class="inline text-blue-600 dark:text-blue-500">— New</span></p>
      </div>

      <h4 class="mt-7 text-xs font-semibold text-gray-900 uppercase dark:text-neutral-100">Industries</h4>

      <div class="mt-3 grid space-y-3 text-sm">
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Financial Services</a></p>
        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Education</a></p>
      </div>
    </div>
    <!-- End Col -->
  </div>
  <!-- End Grid -->
   
</footer>
<!-- ========== END FOOTER ========== -->

</body>

</html>