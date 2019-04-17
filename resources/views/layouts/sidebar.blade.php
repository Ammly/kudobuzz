<div class="w-full lg:w-1/5 lg:px-6 text-xl text-grey-darkest leading-normal">

    <p class="text-base font-bold py-2 lg:pb-6 text-grey-darker">Menu</p>

    <div class="block lg:hidden sticky pin">
       <button id="menu-toggle" class="flex w-full justify-end px-3 py-3 bg-white lg:bg-transparent border rounded border-grey-dark hover:border-purple appearance-none focus:outline-none">
          <svg class="fill-current h-3 float-right" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
             <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
          </svg>
       </button>
    </div>
    <div class="w-full sticky pin hidden h-64 lg:h-auto overflow-x-hidden overflow-y-auto lg:overflow-y-hidden lg:block mt-0 border border-grey-light lg:border-transparent bg-white shadow lg:shadow-none lg:bg-transparent z-20" style="top:5em;" id="menu-content">
       <ul class="list-reset">

            <router-link tag="li" to="/" class="py-2 md:my-0 hover:bg-purple-lightest lg:hover:bg-transparent" exact>
                <a class="block pl-4 align-middle text-grey-darker no-underline hover:text-purple">
                    <span class="pb-1 md:pb-0 text-sm text-black font-bold">Home</span>
                </a>
            </router-link>

            <router-link tag="li" to="/shops" class="py-2 md:my-0 hover:bg-purple-lightest lg:hover:bg-transparent">
                <a class="block pl-4 align-middle text-grey-darker no-underline hover:text-purple">
                    <span class="pb-1 md:pb-0 text-sm text-black font-bold">Shops</span>
                </a>
            </router-link>

            <router-link tag="li" to="/products" class="py-2 md:my-0 hover:bg-purple-lightest lg:hover:bg-transparent">
                <a class="block pl-4 align-middle text-grey-darker no-underline hover:text-purple">
                    <span class="pb-1 md:pb-0 text-sm text-black font-bold">Products</span>
                </a>
            </router-link>

             <router-link tag="li" to="/channels" class="py-2 md:my-0 hover:bg-purple-lightest lg:hover:bg-transparent">
                <a class="block pl-4 align-middle text-grey-darker no-underline hover:text-purple">
                    <span class="pb-1 md:pb-0 text-sm text-black font-bold">Channels</span>
                </a>
            </router-link>

            <router-link tag="li" to="/feeds" class="py-2 md:my-0 hover:bg-purple-lightest lg:hover:bg-transparent">
                <a class="block pl-4 align-middle text-grey-darker no-underline hover:text-purple">
                    <span class="pb-1 md:pb-0 text-sm text-black font-bold">Feeds</span>
                </a>
            </router-link>

       </ul>
    </div>
</div>
