<x-layout>
    <form action="/vendors" class="w-full max-w-sm" method="POST">
        @csrf
        @include('vendors.components.form')
    </form>
</x-layout>