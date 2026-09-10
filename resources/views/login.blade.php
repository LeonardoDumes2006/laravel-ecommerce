<x-layout>
    <main>
        <section>
            <form class="bg-white text-gray-500 max-w-[350px] mx-4 md:p-6 p-4 text-left text-sm rounded-xl shadow-[0px_0px_10px_0px] shadow-black/10" action="/login" method="post">
                @csrf

                @error('email')
                <p class="text-red-500 text-xl mt-1">
                    {{ $message }}
                </p>
                @enderror

                <h2 class="text-2xl font-semibold mb-6 text-center text-gray-800">Login</h2>
                <input id="email" name="email" class="w-full border my-3 border-gray-500/30 outline-none rounded-full py-2.5 px-4" type="email" placeholder="Enter your email" required>
                <input id="password" name="password" class="w-full border mt-1 border-gray-500/30 outline-none rounded-full py-2.5 px-4" type="password" placeholder="Enter your password" required>
                <div class="text-right py-4">
                    <a class="text-blue-600 underline" href="#">Forgot Password</a>
                </div>
                <button type="submit" class="w-full mb-3 bg-indigo-500 hover:bg-indigo-600/90 active:scale-95 transition py-2.5 rounded-full text-white">Log in</button>
                <p class="text-center mt-4">Don’t have an account? <a href="#" class="text-blue-500 underline">Signup Now</a></p>
            </form>
        </section>
    </main>
</x-layout>