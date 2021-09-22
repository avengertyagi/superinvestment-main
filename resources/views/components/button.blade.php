<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => '20 bg-orangemix bg-oringmix disabled:opacity-25 duration-150 ease-in-out focus:outline-none focus:ring font-semibold items-center m_5 my-6 p-2 px-4 py-2 py-3 rounded shadow-md text-base text-xs tracking-widest transition uppercase w-full'])
     }}>
    {{ $slot }}
</button>
