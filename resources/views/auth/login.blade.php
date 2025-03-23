<x-layout>
    <x-page-heading>Log In</x-page-heading>

    <x-forms.form method="POST" action="/login">
        <x-forms.input label="Email" name="email" type="email" required />
        <x-forms.input
            label="Password"
            name="password"
            type="password"
            required
        />
        <x-forms.button>Log In</x-forms.button>
    </x-forms.form>
</x-layout>
