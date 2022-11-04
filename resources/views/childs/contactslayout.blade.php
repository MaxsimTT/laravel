<x-contacts-layout>
    <x-slot name="title">Contacts layout</x-slot>
    <x-slot name="path">
        <p>Мы находимся по следующему адресу {{ $path }}</p>
    </x-slot>
    <x-slot name="form">
        <x-my-feedback-form my-name="Max" email="test@qwe.com">
            <x-slot name="message">
                <i>После заполнения формы мы с Вами свяжемся в течение 24 часов</i>
            </x-slot>
        </x-my-feedback-form>
    </x-slot>
</x-contacts-layout>