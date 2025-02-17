<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
</script>

<template>
   <!------------------Navbar component--------------->
   <nav class="bg-white border-gray-200 dark:bg-gray-900">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
         <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Lorem</span>
         </a>
         <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button"
               class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
               id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
               data-dropdown-placement="bottom">
               <span class="sr-only">Open user menu</span>
               <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
            </button>
            <!-- Dropdown menu -->
            <div
               class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600"
               id="user-dropdown">
               <div class="px-4 py-3">
                  <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                  <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
               </div>
               <ul class="py-2" aria-labelledby="user-menu-button">
                  <li>
                     <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                  </li>
                  <li>
                     <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                  </li>
                  <li>
                     <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                  </li>
                  <li>
                     <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                        out</a>
                  </li>
               </ul>
            </div>
            <button data-collapse-toggle="navbar-user" type="button"
               class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
               aria-controls="navbar-user" aria-expanded="false">
               <span class="sr-only">Open main menu</span>
               <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M1 1h15M1 7h15M1 13h15" />
               </svg>
            </button>
         </div>
         <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
            <ul
               class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
               <li>
                  <a href="#"
                     class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                     aria-current="page">Home</a>
               </li>
               <li>
                  <a href="#"
                     class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
               </li>
               <li>
                  <a href="#"
                     class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
               </li>
               <li>
                  <a href="#"
                     class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pricing</a>
               </li>
               <li>
                  <a href="#"
                     class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <!------------------Hero Section------------------>
   <section class="bg-white dark:bg-gray-900">
      <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
         <div class="mr-auto place-self-center lg:col-span-7">
            <h1
               class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
               Lorem Ipsum</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
               Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
               rem aperiam, eaque.</p>

            <button
               class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
               type="button" data-drawer-target="drawer-swipe" data-drawer-show="drawer-swipe"
               data-drawer-placement="bottom" data-drawer-edge="true" data-drawer-edge-offset="bottom-[0px]"
               aria-controls="drawer-swipe">
               Start Exam
               <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                     d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                     clip-rule="evenodd"></path>
               </svg>
            </button>
         </div>
         <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="assets/images/car5.png" alt="car">
         </div>
      </div>
   </section>
   <!------------------widget component--------------->
   <section class="bg-white dark:bg-gray-900">
      <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
         <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Li Europan lingues es
               membres del sam familie. Lor separat</h2>
            <p class="mb-4">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por lingua
               franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica,
               pronunciation e plu sommun paroles.</p>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
               rem aperiam. </p>
         </div>
         <div class="grid grid-cols-2 gap-4 mt-8">
            <img class="w-full rounded-lg"
               src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png"
               alt="office content 1">
            <img class="mt-4 w-full lg:mt-10 rounded-lg"
               src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png"
               alt="office content 2">
         </div>
      </div>
   </section>

   <!-- drawer component -->
   <div id="drawer-swipe"
      class="fixed z-40 w-full h-full overflow-y-auto bg-white border-t border-gray-200 rounded-t-lg dark:border-gray-700 dark:bg-gray-800 transition-transform bottom-0 left-0 right-0 translate-y-full"
      tabindex="-1" aria-labelledby="drawer-swipe-label">
      <div class="p-4 cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700" data-drawer-toggle="drawer-swipe">
         <span class="absolute w-8 h-1 -translate-x-1/2 bg-gray-300 rounded-lg top-3 left-1/2 dark:bg-gray-600"></span>
         <h5 id="drawer-swipe-label"
            class="inline-flex items-center text-base text-gray-500 dark:text-gray-400 font-medium"><svg
               class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
               viewBox="0 0 18 18">
               <path
                  d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10ZM17 13h-2v-2a1 1 0 0 0-2 0v2h-2a1 1 0 0 0 0 2h2v2a1 1 0 0 0 2 0v-2h2a1 1 0 0 0 0-2Z" />
            </svg>Back</h5>
      </div>
      <section class="bg-white py-4 antialiased dark:bg-gray-900 md:py-8">
         <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <h2 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl md:mb-6">Service reparation
               form</h2>
            <div class="gap-8 lg:flex">
               <!-- Right content -->
               <form action="#" class="w-full space-y-4 lg:space-y-4">
                  <div class="">
                     <ol
                        class="flex flex-col gap-4 rounded-t-lg border-b  border-gray-200 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800 sm:justify-center md:flex-row md:items-center lg:gap-6">
                        <li class="flex items-center gap-2 md:flex-1 md:flex-col md:gap-1.5 lg:flex-none">
                           <svg class="h-5 w-5 text-primary-700 dark:text-primary-500" aria-hidden="true"
                              xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                           </svg>
                           <p class="text-sm font-medium leading-tight text-primary-700 dark:text-primary-500">
                              My products</p>
                        </li>

                        <div class="hidden h-px w-8 shrink-0 bg-gray-200 dark:bg-gray-700 md:block xl:w-16">
                        </div>

                        <li class="flex items-center gap-2 md:flex-1 md:flex-col md:gap-1.5 lg:flex-none">
                           <svg class="h-5 w-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                              xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                           </svg>
                           <p class="text-sm font-medium leading-tight text-gray-500 dark:text-gray-400">Defect
                              reason</p>
                        </li>

                        <div class="hidden h-px w-8 shrink-0 bg-gray-200 dark:bg-gray-700 md:block xl:w-16">
                        </div>

                        <li class="flex items-center gap-2 md:flex-1 md:flex-col md:gap-1.5 lg:flex-none">
                           <svg class="h-5 w-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                              xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                           </svg>
                           <p class="text-sm font-medium leading-tight text-gray-500 dark:text-gray-400">Select
                              date</p>
                        </li>

                        <div class="hidden h-px w-8 shrink-0 bg-gray-200 dark:bg-gray-700 md:block xl:w-16">
                        </div>

                        <li class="flex items-center gap-2 md:flex-1 md:flex-col md:gap-1.5 lg:flex-none">
                           <svg class="h-5 w-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                              xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                           </svg>
                           <p class="text-sm font-medium leading-tight text-gray-500 dark:text-gray-400">
                              Confirmation</p>
                        </li>
                     </ol>
                     <div
                        class="mb-4 bg-primary-50 p-4 text-sm text-primary-800 dark:bg-gray-800 dark:text-primary-400 sm:text-base"
                        role="alert">
                        <h3 class="text-xl text-center font-semibold text-gray-900 dark:text-white">1. What you need to
                           know
                           so that the process of sending the
                           product for service goes smoothly?</h3>

                     </div>
                  </div>

                  <div class="space-y-4">
                     <div
                        class="divide-y divide-gray-200  rounded-lg border border-gray-200 bg-white shadow-sm dark:divide-gray-700 dark:border-gray-700 dark:bg-gray-800">
                        <div
                           class="flex items-center gap-8 p-6 sm:items-start lg:items-center hover:bg-gray-100 dark:hover:bg-gray-600">
                           <div>
                              <input id="product1" type="checkbox" value=""
                                 class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-700 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                              <label for="product1" class="sr-only"> Product 1 </label>
                           </div>

                           <div class="min-w-0 flex-1 gap-14 xl:flex xl:items-center">
                              <div class="min-w-0 max-w-xl flex-1 gap-6 sm:flex sm:items-center">
                                 <a href="#" class="mb-4 flex aspect-square h-14 w-14 shrink-0 items-center sm:mb-0">
                                    <img class="h-auto max-h-full w-full dark:hidden"
                                       src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg"
                                       alt="imac image" />
                                    <img class="hidden h-auto max-h-full w-full dark:block"
                                       src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg"
                                       alt="imac image" />
                                 </a>
                                 <a href="#"
                                    class="mt-4 font-medium text-gray-900 hover:underline dark:text-white sm:mt-0">
                                    PC system All in One APPLE iMac (2023) mqrq3ro/a, Apple M3, 24" Retina
                                    4.5K, 8GB, SSD 256GB, 10-core GPU</a>
                              </div>

                              <div
                                 class="mt-4 flex shrink-0 flex-col gap-2 sm:flex-row sm:justify-between md:items-center xl:mt-0 xl:flex-col xl:items-start">
                                 <dl class="flex items-center gap-2.5">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400 xl:w-36">
                                       Order Number:</dt>
                                    <dd class="text-base font-normal text-gray-500 dark:text-gray-400">
                                       <a href="#" class="hover:underline">#73742364</a>
                                    </dd>
                                 </dl>

                                 <dl class="flex items-center gap-2.5">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400 xl:w-36">
                                       Return Term:</dt>
                                    <dd class="text-base font-normal text-gray-500 dark:text-gray-400">
                                       21.07.2023</dd>
                                 </dl>
                              </div>
                           </div>
                        </div>

                        <div
                           class="flex items-center gap-8 p-6 sm:items-start lg:items-center hover:bg-gray-100 dark:hover:bg-gray-600">
                           <div>
                              <input id="product2" type="checkbox" value=""
                                 class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-700 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                              <label for="product2" class="sr-only"> Product 2 </label>
                           </div>

                           <div class="min-w-0 flex-1 gap-14 xl:flex xl:items-center">
                              <div class="min-w-0 max-w-xl flex-1 gap-6 sm:flex sm:items-center">
                                 <a href="#" class="mb-4 flex aspect-square h-14 w-14 shrink-0 items-center sm:mb-0">
                                    <img class="h-auto max-h-full w-full dark:hidden"
                                       src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/apple-watch-light.svg"
                                       alt="imac image" />
                                    <img class="hidden h-auto max-h-full w-full dark:block"
                                       src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/apple-watch-dark.svg"
                                       alt="imac image" />
                                 </a>
                                 <a href="#"
                                    class="mt-4 font-medium text-gray-900 hover:underline dark:text-white sm:mt-0">
                                    Restored Apple Watch Series 8 (GPS) 41mm Midnight Aluminum Case with
                                    Midnight Sport Band </a>
                              </div>

                              <div
                                 class="mt-4 flex shrink-0 flex-col gap-2 sm:flex-row sm:justify-between md:items-center xl:mt-0 xl:flex-col xl:items-start">
                                 <dl class="flex items-center gap-2.5">
                                    <dt class="text-gray-500 dark:text-gray-400 xl:w-36">Order Number:</dt>
                                    <dd class="text-base font-normal text-gray-500 dark:text-gray-400">
                                       <a href="#" class="hover:underline">#45632736</a>
                                    </dd>
                                 </dl>

                                 <dl class="flex items-center gap-2.5">
                                    <dt class="text-gray-500 dark:text-gray-400 xl:w-36">Return Term:</dt>
                                    <dd class="text-base font-normal text-gray-500 dark:text-gray-400">
                                       26.07.2023</dd>
                                 </dl>
                              </div>
                           </div>
                        </div>

                        <div
                           class="flex items-center gap-8 p-6 sm:items-start lg:items-center hover:bg-gray-100 dark:hover:bg-gray-600">
                           <div>
                              <input checked id="product3" type="checkbox" value=""
                                 class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-700 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                              <label for="product3" class="sr-only"> Product 3 </label>
                           </div>
                           <div class="min-w-0 flex-1 gap-14 xl:flex xl:items-center">
                              <div class="min-w-0 max-w-xl flex-1 gap-6 sm:flex sm:items-center">
                                 <a href="#" class="mb-4 flex aspect-square h-14 w-14 shrink-0 items-center sm:mb-0">
                                    <img class="h-auto max-h-full w-full dark:hidden"
                                       src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/ps5-light.svg"
                                       alt="imac image" />
                                    <img class="hidden h-auto max-h-full w-full dark:block"
                                       src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/ps5-dark.svg"
                                       alt="imac image" />
                                 </a>
                                 <a href="#"
                                    class="mt-4 font-medium text-gray-900 hover:underline dark:text-white sm:mt-0">
                                    Sony Playstation 5 Digital Edition Console with Extra Blue Controller, and
                                    White PULSE 3D Headset </a>
                              </div>
                              <div
                                 class="mt-4 flex shrink-0 flex-col gap-2 sm:flex-row sm:justify-between md:items-center xl:mt-0 xl:flex-col xl:items-start">
                                 <dl class="flex items-center gap-2.5">
                                    <dt class="text-gray-500 dark:text-gray-400 xl:w-36">Order Number:</dt>
                                    <dd class="text-base font-normal text-gray-500 dark:text-gray-400">
                                       <a href="#" class="hover:underline">#54628495</a>
                                    </dd>
                                 </dl>

                                 <dl class="flex items-center gap-2.5">
                                    <dt class="text-gray-500 dark:text-gray-400 xl:w-36">Return Term:</dt>
                                    <dd class="text-base font-normal text-gray-500 dark:text-gray-400"> 24.07.2023</dd>
                                 </dl>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="gap-4 sm:flex sm:items-center sm:justify-between">
                        <button type="button"
                           class="w-full rounded-lg  border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">Cancel</button>
                        <button type="submit"
                           class="mt-4 flex w-full items-center justify-center rounded-lg border border-primary-700 bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:border-primary-800 hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:border-primary-700 dark:bg-primary-600 dark:hover:border-primary-700 dark:hover:bg-primary-700 dark:focus:ring-primary-800  sm:mt-0 sm:w-auto">Next</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </section>
   </div>

</template>