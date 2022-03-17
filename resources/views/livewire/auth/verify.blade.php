@section('title', 'Verify your email address')

<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <x-logo class="w-auto h-16 mx-auto text-indigo-600" />
        </a>

        <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
            Verify your email address
        </h2>

        <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
            Or
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                sign out
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            @if (session('resent'))
                <div class="flex items-center px-4 py-3 mb-6 text-sm text-white bg-green-500 rounded shadow" role="alert">
                    <x-icon name="solid-check-circle" className="w-4 h-4 mr-3 fill-current" />
                    <p>A fresh verification link has been sent to your email address.</p>
                </div>
            @endif

            <div class="text-sm text-gray-700">
                <p>Before proceeding, please check your email for a verification link.</p>

                <p class="mt-3">
                    If you did not receive the email, <a wire:click="resend" class="text-indigo-700 cursor-pointer hover:text-indigo-600 focus:outline-none focus:underline transition ease-in-out duration-150">click here to request another</a>.
                </p>
            </div>
        </div>
    </div>
</div>
