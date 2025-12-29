<?php

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $email = '';

    /**
     * Send a password reset link to the provided email address.
     */
    public function sendPasswordResetLink(): void
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $this->only('email')
        );

        if ($status != Password::RESET_LINK_SENT) {
            $this->addError('email', __($status));

            return;
        }

        $this->reset('email');

        session()->flash('status', __($status));
    }
}; ?>

<div>
    <div class="mb-8 text-center">
        <h2 class="text-3xl font-extrabold text-brand-dark">Forgot Password</h2>
        <p class="text-brand-rust mt-2">No problem, we'll help you reset it</p>
    </div>

    <div class="mb-6 text-sm text-brand-rust leading-relaxed">
        {{ __('Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="sendPasswordResetLink" class="space-y-6">
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-brand-dark font-medium" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-primary-button class="w-full justify-center">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>

        <div class="text-center mt-6">
            <a href="{{ route('login') }}" class="text-sm text-brand-orange hover:text-brand-rust font-bold transition-colors duration-200" wire:navigate>
                Back to Login
            </a>
        </div>
    </form>
</div>
