<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
      
        <title>{{ config('app.name', 'Laravel') }}</title> 
      
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
      
      </head>
</head>
<body>
    <header class="bg-gray-900">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
          <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
              <span class="sr-only">Your Company</span>
              <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="">
            </a>
          </div>
          <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400">
              <span class="sr-only">Open main menu</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
            </button>
          </div>
          <div class="hidden lg:flex lg:gap-x-12">
            <a href="/" class="text-sm font-semibold leading-6 text-white">Acceuil</a>
            <a href="/evenemet" class="text-sm font-semibold leading-6 text-white">Evenement</a>
            <a href="#" class="text-sm font-semibold leading-6 text-white">Publication</a>
            <a href="#" class="text-sm font-semibold leading-6 text-white">Forum</a>
          </div>
          <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="/login" class="text-sm font-semibold leading-6 text-white">Join Us <span aria-hidden="true">&rarr;</span></a>
          </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="lg:hidden" role="dialog" aria-modal="true">
          <!-- Background backdrop, show/hide based on slide-over state. -->
          <div class="fixed inset-0 z-10"></div>
          <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10">
            <div class="flex items-center justify-between">
              <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="">
              </a>
              <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-400">
                <span class="sr-only">Close menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="mt-6 flow-root">
              <div class="-my-6 divide-y divide-gray-500/25">
                <div class="space-y-2 py-6">
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Acceuil</a>
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Evenement</a>
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Publication</a>
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Forum</a>
                </div>
                <div class="py-6">
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-white hover:bg-gray-800">Join Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </header>

    <div class="py-20">

    <!-- Content section -->
    <div class="max-w-screen-xl py-4 px-12 mx-auto  overflow-hidden">
      <h1 class="text-4xl font-bold mb-10 text-center">
        National AI Strategy Report: Recommendations
      </h1>

      <div class="grid grid-cols-2 gap-x-12">
        <p class="text-xl leading-8 text-gray-600">
          Emerging from the 2022 MoroccoAI Annual Conference, this report is based on an analysis of several National AI Strategies and priorities
          outlined in Morocco's New Development Model (NDM), and presents 44 carefully crafted recommendations for developing an AI strategy
          for Morocco. It spotlights key areas where AI holds the potential to be instrumental in catalyzing Morocco's development objectives.
        </p>
        <img class="max-h-72 w-full object-cover rounded-2xl" src="https://images.unsplash.com/photo-1670272502246-768d249768ca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1152&q=80" alt="">
      </div>
    </div>

    <div class="mt-20 max-w-screen-xl mx-auto px-12 overflow-hidden">

      <h1 class="text-center text-4xl font-bold">MoroccoAI Events</h1>

      <div class="grid grid-cols-2 pb-10 gap-x-10 mt-8 jstify-between items-center">
        <div class="shadow-lg border rounded-xl p-10">
          <h2 class="text-2xl font-bold">Conferences</h2>

          <ul class="list-disc pl-10 my-4">
            <li class="text-xl leading-8 text-gray-600">MoroccoAI Annual Conference 2023</li>
            <li class="text-xl leading-8 text-gray-600">MoroccoAI Annual Conference 2023</li>
            <li class="text-xl leading-8 text-gray-600">MoroccoAI Annual Conference 2023</li>
            <li class="text-xl leading-8 text-gray-600">MoroccoAI Annual Conference 2023</li>
          </ul>

          <a href="" class="text-lg text-red-400 font-semibold">Learn more &rarr;</a>

        </div>

        <div class="shadow-xl border rounded-xl p-10">
          <h2 class="text-2xl font-bold">Conferences</h2>

          <ul class="list-disc pl-10 my-4">
            <li class="text-xl leading-8 text-gray-600">MoroccoAI Annual Conference 2023</li>
            <li class="text-xl leading-8 text-gray-600">MoroccoAI Annual Conference 2023</li>
            <li class="text-xl leading-8 text-gray-600">MoroccoAI Annual Conference 2023</li>
            <li class="text-xl leading-8 text-gray-600">MoroccoAI Annual Conference 2023</li>
          </ul>

          <a href="" class="text-lg text-red-400 font-semibold">Learn more &rarr;</a>

        </div>
      </div>
    </div>

    <!-- About Us -->
    <div class="mx-auto mt-32 max-w-7xl px-12 sm:mt-40 lg:px-8">
      <div class="mx-auto flex max-w-2xl flex-col items-end justify-between gap-16 lg:mx-0 lg:max-w-none lg:flex-row">
        <div class="w-full lg:max-w-lg lg:flex-auto">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">About Us</h2>
          <p class="mt-6 text-xl leading-8 text-gray-600">Diam nunc lacus lacus aliquam turpis enim. Eget hac velit est euismod lacus. Est non placerat nam arcu. Cras purus nibh cursus sit eu in id.</p>
          <img src="https://images.unsplash.com/photo-1606857521015-7f9fcf423740?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1344&h=1104&q=80" alt="" class="mt-16 aspect-[6/5] w-full rounded-2xl bg-gray-50 object-cover lg:aspect-auto lg:h-[34.5rem]">
        </div>
        <div class="w-full lg:max-w-xl lg:flex-auto">
          <h3 class="sr-only">Job openings</h3>
          <ul class="-my-8 divide-y divide-gray-100">
            <li class="py-8">
              <dl class="relative flex flex-wrap gap-x-3">
                <dt class="sr-only">Role</dt>
                <dd class="w-full flex-none text-lg font-semibold tracking-tight text-gray-900">
                  <a href="#">
                    Full-time designer
                    <span class="absolute inset-0" aria-hidden="true"></span>
                  </a>
                </dd>
                <dt class="sr-only">Description</dt>
                <dd class="mt-2 w-full flex-none text-base leading-7 text-gray-600">Quos sunt ad dolore ullam qui. Enim et quisquam dicta molestias. Corrupti quo voluptatum eligendi autem labore.</dd>
                <dt class="sr-only">Salary</dt>
                <dd class="mt-4 text-base font-semibold leading-7 text-gray-900">$75,000 USD</dd>
                <dt class="sr-only">Location</dt>
                <dd class="mt-4 flex items-center gap-x-3 text-base leading-7 text-gray-500">
                  <svg viewBox="0 0 2 2" class="h-0.5 w-0.5 flex-none fill-gray-300" aria-hidden="true">
                    <circle cx="1" cy="1" r="1" />
                  </svg>
                  San Francisco, CA
                </dd>
              </dl>
            </li>
            <li class="py-8">
              <dl class="relative flex flex-wrap gap-x-3">
                <dt class="sr-only">Role</dt>
                <dd class="w-full flex-none text-lg font-semibold tracking-tight text-gray-900">
                  <a href="#">
                    Laravel developer
                    <span class="absolute inset-0" aria-hidden="true"></span>
                  </a>
                </dd>
                <dt class="sr-only">Description</dt>
                <dd class="mt-2 w-full flex-none text-base leading-7 text-gray-600">Et veniam et officia dolorum rerum. Et voluptas consequatur magni sapiente amet voluptates dolorum. Ut porro aut eveniet.</dd>
                <dt class="sr-only">Salary</dt>
                <dd class="mt-4 text-base font-semibold leading-7 text-gray-900">$125,000 USD</dd>
                <dt class="sr-only">Location</dt>
                <dd class="mt-4 flex items-center gap-x-3 text-base leading-7 text-gray-500">
                  <svg viewBox="0 0 2 2" class="h-0.5 w-0.5 flex-none fill-gray-300" aria-hidden="true">
                    <circle cx="1" cy="1" r="1" />
                  </svg>
                  San Francisco, CA
                </dd>
              </dl>
            </li>
            <li class="py-8">
              <dl class="relative flex flex-wrap gap-x-3">
                <dt class="sr-only">Role</dt>
                <dd class="w-full flex-none text-lg font-semibold tracking-tight text-gray-900">
                  <a href="#">
                    React Native developer
                    <span class="absolute inset-0" aria-hidden="true"></span>
                  </a>
                </dd>
                <dt class="sr-only">Description</dt>
                <dd class="mt-2 w-full flex-none text-base leading-7 text-gray-600">Veniam ipsam nisi quas architecto eos non voluptatem in nemo. Est occaecati nihil omnis delectus illum est.</dd>
                <dt class="sr-only">Salary</dt>
                <dd class="mt-4 text-base font-semibold leading-7 text-gray-900">$105,000 USD</dd>
                <dt class="sr-only">Location</dt>
                <dd class="mt-4 flex items-center gap-x-3 text-base leading-7 text-gray-500">
                  <svg viewBox="0 0 2 2" class="h-0.5 w-0.5 flex-none fill-gray-300" aria-hidden="true">
                    <circle cx="1" cy="1" r="1" />
                  </svg>
                  San Francisco, CA
                </dd>
              </dl>
            </li>
          </ul>
          <div class="mt-8 flex border-t border-gray-100 pt-8">
            <a href="#" class="text-sm font-semibold leading-6 text-indigo-600 hover:text-indigo-500">View all openings <span aria-hidden="true">&rarr;</span></a>
          </div>
        </div>
      </div>
    </div>

    <footer class="bg-white">
      <div class="mx-auto max-w-7xl overflow-hidden px-6 pt-28 lg:px-8">
        <nav class="-mb-6 columns-2 sm:flex sm:justify-center sm:space-x-12" aria-label="Footer">
          <div class="pb-6">
            <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">About</a>
          </div>
          <div class="pb-6">
            <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Blog</a>
          </div>
          <div class="pb-6">
            <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Jobs</a>
          </div>
          <div class="pb-6">
            <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Press</a>
          </div>
          <div class="pb-6">
            <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Accessibility</a>
          </div>
          <div class="pb-6">
            <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Partners</a>
          </div>
        </nav>
        <div class="mt-10 flex justify-center space-x-10">
          <a href="#" class="text-gray-400 hover:text-gray-500">
            <span class="sr-only">Facebook</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
            </svg>
          </a>
          <a href="#" class="text-gray-400 hover:text-gray-500">
            <span class="sr-only">Instagram</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
            </svg>
          </a>
          <a href="#" class="text-gray-400 hover:text-gray-500">
            <span class="sr-only">X</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z" />
            </svg>
          </a>
          <a href="#" class="text-gray-400 hover:text-gray-500">
            <span class="sr-only">GitHub</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
            </svg>
          </a>
          <a href="#" class="text-gray-400 hover:text-gray-500">
            <span class="sr-only">YouTube</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
        <p class="mt-10 text-center text-xs leading-5 text-gray-500">&copy; 2020 Your Company, Inc. All rights reserved.</p>
      </div>
    </footer>
    


    </div>
      
</body>
</html>