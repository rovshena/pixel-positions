<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form
        method="POST"
        action="/register"
        enctype="multipart/form-data"
    >
        <x-forms.input label="Name" name="name" required />
        <x-forms.input label="Email" name="email" type="email" required />
        <x-forms.input
            label="Password"
            name="password"
            type="password"
            required
        />
        <x-forms.input
            label="Password Confirmation"
            name="password_confirmation"
            type="password"
            required
        />

        <x-forms.divider />

        <x-forms.input label="Employer Name" name="employer" required />
        <x-forms.input label="Employer Logo" name="logo" type="file" required />

        <x-forms.button>Create Account</x-forms.button>
    </x-forms.form>
</x-layout>
