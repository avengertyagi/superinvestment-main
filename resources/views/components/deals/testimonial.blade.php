<div class="mx-auto" x-data="{ testimonialActive: 2 }" x-cloak>
    <div class="grid grid-flow-row h-full relative">
        <div class="h-full relative z-10">
            <div class="text-center items-center justify-center" x-show.immediate="testimonialActive === 1">
                <div class="lg:mx-64 mt-8 mb-4 2xl:mx-10">
                    <img class="rounded-full mx-auto w-32 h-32 shadow-md" src="https://images.pexels.com/photos/3775534/pexels-photo-3775534.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" />
                </div>
                <p class="font-medium justify-evenly md:pb-10 md:text-2xl mt-4 pb-6 lg:px-32 serif text-gray-800 text-justify text-xl" x-show.transition="testimonialActive == 1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-900 fill-current w-12 h-12 md:w-16 md:h-16" viewBox="0 0 24 24">
                        <path d="M6.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L9.758 4.03c0 0-.218.052-.597.144C8.97 4.222 8.737 4.278 8.472 4.345c-.271.05-.56.187-.882.312C7.272 4.799 6.904 4.895 6.562 5.123c-.344.218-.741.4-1.091.692C5.132 6.116 4.723 6.377 4.421 6.76c-.33.358-.656.734-.909 1.162C3.219 8.33 3.02 8.778 2.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C2.535 17.474 4.338 19 6.5 19c2.485 0 4.5-2.015 4.5-4.5S8.985 10 6.5 10zM17.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L20.758 4.03c0 0-.218.052-.597.144-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.944-.33.358-.656.734-.909 1.162C14.219 8.33 14.02 8.778 13.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C13.535 17.474 15.338 19 17.5 19c2.485 0 4.5-2.015 4.5-4.5S19.985 10 17.5 10z" />
                    </svg>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maurisquam tellus, volute sit amet metus sit amet, rhoncus ultrices
                </p>
                <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight">Lorem</h2>
            </div>

            <div class="text-center items-center justify-center" x-show.immediate="testimonialActive === 2">
                <div class="lg:mx-64 mt-8 mb-4 2xl:mx-10">
                    <img class="rounded-full mx-auto w-32 h-32 shadow-md" src="https://images.pexels.com/photos/634021/pexels-photo-634021.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" style="width: 100px; height: 100px;" />
                </div>
                <p class="font-medium justify-evenly md:pb-10 md:text-2xl mt-4 pb-6 lg:px-32 serif text-gray-800 text-justify text-xl" x-show.transition="testimonialActive == 2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-900 fill-current w-12 h-12 md:w-16 md:h-16" viewBox="0 0 24 24">
                        <path d="M6.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L9.758 4.03c0 0-.218.052-.597.144C8.97 4.222 8.737 4.278 8.472 4.345c-.271.05-.56.187-.882.312C7.272 4.799 6.904 4.895 6.562 5.123c-.344.218-.741.4-1.091.692C5.132 6.116 4.723 6.377 4.421 6.76c-.33.358-.656.734-.909 1.162C3.219 8.33 3.02 8.778 2.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C2.535 17.474 4.338 19 6.5 19c2.485 0 4.5-2.015 4.5-4.5S8.985 10 6.5 10zM17.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L20.758 4.03c0 0-.218.052-.597.144-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.944-.33.358-.656.734-.909 1.162C14.219 8.33 14.02 8.778 13.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C13.535 17.474 15.338 19 17.5 19c2.485 0 4.5-2.015 4.5-4.5S19.985 10 17.5 10z" />
                    </svg>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maurisquam tellus, volute sit amet metus sit amet, rhoncus ultrices
                </p>
                <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight">Lorem</h2>
            </div>

            <div class="text-center items-center justify-center" x-show.immediate="testimonialActive === 3">
                <div class="lg:mx-64 mt-8 mb-4 2xl:mx-10">
                    <img class="rounded-full mx-auto w-32 h-32 shadow-md" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" style="width: 100px; height: 100px;" />
                </div>
                <p class="font-medium justify-evenly md:pb-10 md:text-2xl mt-4 pb-6 lg:px-32 serif text-gray-800 text-justify text-xl" x-show.transition="testimonialActive == 3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-900 fill-current w-12 h-12 md:w-16 md:h-16" viewBox="0 0 24 24">
                        <path d="M6.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L9.758 4.03c0 0-.218.052-.597.144C8.97 4.222 8.737 4.278 8.472 4.345c-.271.05-.56.187-.882.312C7.272 4.799 6.904 4.895 6.562 5.123c-.344.218-.741.4-1.091.692C5.132 6.116 4.723 6.377 4.421 6.76c-.33.358-.656.734-.909 1.162C3.219 8.33 3.02 8.778 2.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C2.535 17.474 4.338 19 6.5 19c2.485 0 4.5-2.015 4.5-4.5S8.985 10 6.5 10zM17.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L20.758 4.03c0 0-.218.052-.597.144-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.944-.33.358-.656.734-.909 1.162C14.219 8.33 14.02 8.778 13.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C13.535 17.474 15.338 19 17.5 19c2.485 0 4.5-2.015 4.5-4.5S19.985 10 17.5 10z" />
                    </svg>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maurisquam tellus, volute sit amet metus sit amet, rhoncus ultrices
                </p>
                <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight">Lorem</h2>
            </div>
        </div>
        <div class="flex my-4 justify-center items-center">
            <button @click.prevent="testimonialActive = 1" class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline inline-block rounded-full mx-2" :class="{'h-4 w-4 opacity-25 bg-gray-700 text-gray-600': testimonialActive != 1, 'h-4 w-4 opacity-100 bg-orangemix text-white': testimonialActive == 1 }"></button>
            <button @click.prevent="testimonialActive = 2" class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline h-4 w-4 inline-block bg-orangemix rounded-full mx-2" :class="{'h-4 w-4 opacity-25 bg-gray-700 text-gray-600': testimonialActive != 2, 'h-4 w-4 opacity-100 bg-red-600 text-white': testimonialActive == 2 }"></button>
            <button @click.prevent="testimonialActive = 3" class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline h-4 w-4 inline-block bg-orangemix rounded-full mx-2" :class="{'h-4 w-4 opacity-25 bg-gray-700 text-gray-600': testimonialActive != 3, 'h-4 w-4 opacity-100 bg-red-600 text-white': testimonialActive == 3 }"></button>
        </div>
    </div>
</div>
