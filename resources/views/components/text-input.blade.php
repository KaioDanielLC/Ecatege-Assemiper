@props(['disabled' => false])

<style>
    .custom-input {
        border: none;
        border-bottom: 1px solid #333; /* Cor da borda inferior */
        background-color: white;
        color: #333; /* Cor do texto */
        padding: 0.5rem; /* Ajuste o padding conforme necessário */
        outline: none; /* Remove o contorno padrão */
        border-radius: 0;   
    }

    .custom-input:focus {
        border-bottom-color: #333;
        box-shadow: none;/
    }
</style>

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'custom-input']) !!}>
