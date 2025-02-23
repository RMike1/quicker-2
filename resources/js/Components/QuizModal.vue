<script setup>
import Button from '@/Components/Button.vue'
const props = defineProps({
      show: Boolean,
      currentQuestion: Object
})

</script>
<template>
      <Transition name="bounce">
            <div v-if="show"
                  class="fixed z-40 w-full modal-mask h-full overflow-y-auto bg-white border-t border-gray-200 rounded-t-lg dark:border-gray-700 dark:bg-gray-800 transition-transform bottom-0 left-0 right-0">
                  <!-- Header -->
                  <div class="p-4 cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700"
                        @click="$emit('closeQuizModal')">
                        <span
                              class="absolute w-8 h-1 -translate-x-1/2 bg-gray-300 rounded-lg top-3 left-1/2 dark:bg-gray-600"></span>
                        <h5 id="drawer-swipe-label"
                              class="inline-flex items-center text-base text-gray-500 dark:text-gray-400 font-medium">
                              <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 18 18">
                                    <path
                                          d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10ZM17 13h-2v-2a1 1 0 0 0-2 0v2h-2a1 1 0 0 0 0 2h2v2a1 1 0 0 0 2 0v-2h2a1 1 0 0 0 0-2Z" />
                              </svg>Back
                        </h5>
                  </div>
                  <!-- Main -->
                  <section class="bg-white py-4 antialiased dark:bg-gray-900 md:py-8">
                        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                              <h2 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl md:mb-6">
                                    Quiz Section</h2>
                              <div class="gap-8 lg:flex">
                                    <!-- Right content -->
                                    <form action="#" class="w-full space-y-4 lg:space-y-4">
                                          <div class="">
                                                <ol
                                                      class="flex flex-col gap-4 rounded-t-lg border-b  border-gray-200 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800 sm:justify-center md:flex-row md:items-center lg:gap-6">
                                                      <li
                                                            class="flex items-center gap-2 md:flex-1 md:flex-col md:gap-1.5 lg:flex-none">
                                                            <svg class="h-5 w-5 text-primary-700 dark:text-primary-500"
                                                                  aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                  width="24" height="24" fill="none"
                                                                  viewBox="0 0 24 24">
                                                                  <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                            </svg>
                                                            <p
                                                                  class="text-sm font-medium leading-tight text-primary-700 dark:text-primary-500">
                                                                  My products</p>
                                                      </li>

                                                      <div
                                                            class="hidden h-px w-8 shrink-0 bg-gray-200 dark:bg-gray-700 md:block xl:w-16">
                                                      </div>

                                                      <li
                                                            class="flex items-center gap-2 md:flex-1 md:flex-col md:gap-1.5 lg:flex-none">
                                                            <svg class="h-5 w-5 text-gray-500 dark:text-gray-400"
                                                                  aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                  width="24" height="24" fill="none"
                                                                  viewBox="0 0 24 24">
                                                                  <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                            </svg>
                                                            <p
                                                                  class="text-sm font-medium leading-tight text-gray-500 dark:text-gray-400">
                                                                  Defect
                                                                  reason</p>
                                                      </li>

                                                      <div
                                                            class="hidden h-px w-8 shrink-0 bg-gray-200 dark:bg-gray-700 md:block xl:w-16">
                                                      </div>

                                                      <li
                                                            class="flex items-center gap-2 md:flex-1 md:flex-col md:gap-1.5 lg:flex-none">
                                                            <svg class="h-5 w-5 text-gray-500 dark:text-gray-400"
                                                                  aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                  width="24" height="24" fill="none"
                                                                  viewBox="0 0 24 24">
                                                                  <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                            </svg>
                                                            <p
                                                                  class="text-sm font-medium leading-tight text-gray-500 dark:text-gray-400">
                                                                  Select
                                                                  date</p>
                                                      </li>

                                                      <div
                                                            class="hidden h-px w-8 shrink-0 bg-gray-200 dark:bg-gray-700 md:block xl:w-16">
                                                      </div>

                                                      <li
                                                            class="flex items-center gap-2 md:flex-1 md:flex-col md:gap-1.5 lg:flex-none">
                                                            <svg class="h-5 w-5 text-gray-500 dark:text-gray-400"
                                                                  aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                  width="24" height="24" fill="none"
                                                                  viewBox="0 0 24 24">
                                                                  <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                            </svg>
                                                            <p
                                                                  class="text-sm font-medium leading-tight text-gray-500 dark:text-gray-400">
                                                                  Confirmation</p>
                                                      </li>
                                                </ol>
                                                <div class="mb-4 bg-primary-50 p-4 text-sm text-primary-800 dark:bg-gray-800 dark:text-primary-400 sm:text-base"
                                                      role="alert">
                                                      <h3
                                                            class="text-xl text-center font-semibold text-gray-900 dark:text-white">
                                                            1. {{currentQuestion.question}}?</h3>

                                                </div>
                                          </div>

                                          <div class="space-y-4">
                                                <div class="flex justify-between gap-4">
                                                      <!---------Image Question-------->
                                                      <div
                                                            class="divide-y w-1/3 divide-gray-200  rounded-lg border border-gray-200 bg-white shadow-sm dark:divide-gray-700 dark:border-gray-700 dark:bg-gray-800">

                                                      </div>
                                                      <!--------------Answers--------->
                                                      <div
                                                            class="w-full divide-y divide-gray-200 shadow-sm dark:divide-gray-700 ">
                                                            <div v-for="(answer,i) in currentQuestion.answers" :key="i"
                                                                  class="flex items-center border border-gray-200 dark:border-gray-700 mb-2 p-4 sm:items-start rounded-lg lg:items-center hover:bg-gray-100 dark:hover:bg-gray-600 dark:bg-gray-800">
                                                                  <!-- <div>
                                 <input id="product1" type="checkbox" value=""
                                    class="h-4 w-4 rounded border-gray-300 hidden bg-gray-100 text-primary-700 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                              </div> -->
                                                                  <div
                                                                        class="min-w-0 flex-1 gap-14 xl:flex xl:items-center">
                                                                        <div
                                                                              class="min-w-0 max-w-xl flex-1 gap-6 sm:flex sm:items-center">
                                                                              <!-- <a href="#" class="mb-4 flex aspect-square h-14 w-14 shrink-0 items-center sm:mb-0">
                                       <img class="h-auto max-h-full w-full dark:hidden"
                                          src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg"
                                          alt="imac image" />
                                       <img class="hidden h-auto max-h-full w-full dark:block"
                                          src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg"
                                          alt="imac image" />
                                    </a> -->
                                                                              <a href="#"
                                                                                    class="mt-4 font-medium text-gray-900  dark:text-white sm:mt-0">
                                                                                    {{ answer.answer }}
                                                                              </a>
                                                                        </div>
                                                                        <div
                                                                              class="mt-4 flex shrink-0 flex-col gap-2 sm:flex-row sm:justify-between md:items-center xl:mt-0 xl:flex-col xl:items-start">
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            
                                                      </div>
                                                </div>
                                                <div class="gap-4 sm:flex sm:items-center sm:justify-between">
                                                      
                                                      <Button @click="$emit('previousQuestion')" >Previous</Button>
                                                      <Button @click="$emit('nextQuestion')" >Next</Button>
                                                </div>
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </section>
            </div>
      </Transition>
</template>

<style scoped>
.bounce-enter-active {
      animation: bounce-in 0.4s;
}

.bounce-leave-active {
      animation: bounce-in 0.4s reverse;
}

@keyframes bounce-in {
      0% {
            transform: scale(0);
      }

      50% {
            transform: scale(1.1);
      }

      100% {
            transform: scale(1);
      }
}
</style>