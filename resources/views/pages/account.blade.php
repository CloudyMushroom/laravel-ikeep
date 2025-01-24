<div class="flex justify-center">
    <div class = "sm:w-3/6  lg:w-2/4 xl:w-1/3 sm:mx-0 m-5 my-10 p-8 border shadow-lg rounded-md text-center">
        <h1 class="font-bold mb-5">ACCOUNT</h1>       
        <form action="/accountadd" method="POST" class="flex justify-center flex-col">
            @csrf
            <label 
                class="text-left px-1"
                for="decrypt_PIN">
                Decrypting Pin
             </label>

            <input 
                name="decrypt_PIN"
                class="font-semibold border p-1 mx-1 my-2"
                type="text">
            
            <label 
                class="text-left px-1"
                for="seed_PHRASE">
                Seed Phrase
             </label>

            <input 
                name="seed_PHRASE"
                class="font-semibold border p-1 mx-1 my-2"
                type="text">
            
             <div class="flex justify-center">
                <input 
                class="font-semibold text-white w-1/2 mx-1 mt-4 py-2 cursor-pointer hover:bg-sky-400 bg-cyan-500 rounded-lg"
                type="submit" 
                value="SUBMIT">
             </div>
        </form>                                     
    </div>
</div>