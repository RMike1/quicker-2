<script setup>
      
</script>
<template>
<div
            class="flex w-full rounded-lg border-l-[6px] border-green dark:border-green-400 px-7 py-4 shadow-1 md:p-4 dark:bg-zinc-900 font-medium text-sm mb-4">
            <div class="mr-5 flex h-[34px] w-full max-w-[34px] items-center justify-center rounded-md bg-green/10">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_961_15629)">
                        <path
                            d="M8.99998 0.506256C4.3031 0.506256 0.506226 4.30313 0.506226 9.00001C0.506226 13.6969 4.3031 17.5219 8.99998 17.5219C13.6969 17.5219 17.5219 13.6969 17.5219 9.00001C17.5219 4.30313 13.6969 0.506256 8.99998 0.506256ZM8.99998 16.2563C5.00623 16.2563 1.77185 12.9938 1.77185 9.00001C1.77185 5.00626 5.00623 1.77188 8.99998 1.77188C12.9937 1.77188 16.2562 5.03438 16.2562 9.02813C16.2562 12.9938 12.9937 16.2563 8.99998 16.2563Z"
                            fill="#22AD5C"></path>
                        <path
                            d="M11.4187 6.38438L8.07183 9.64688L6.55308 8.15626C6.29996 7.90313 5.90621 7.93126 5.65308 8.15626C5.39996 8.40938 5.42808 8.80313 5.65308 9.05626L7.45308 10.8C7.62183 10.9688 7.84683 11.0531 8.07183 11.0531C8.29683 11.0531 8.52183 10.9688 8.69058 10.8L12.3187 7.31251C12.5718 7.05938 12.5718 6.66563 12.3187 6.41251C12.0656 6.15938 11.6718 6.15938 11.4187 6.38438Z"
                            fill="#22AD5C"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0_961_15629">
                            <rect width="18" height="18" fill="white"></rect>
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <div class="w-full">
                <h5 class="mb-3 font-semibold text-dark text-green-600 dark:text-green-400 text-lg">
                    <slot/>
                </h5>
            </div>
        </div>
</template>