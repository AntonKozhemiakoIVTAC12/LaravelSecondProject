<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <h1>Welcome to Dashboard, {{ Auth::user()->name }}!</h1>
                        <p>Your points: <span id="points-counter">{{ Auth::user()->points->sum('points') }}</span></p>

                        <div class="visible-print text-center">
                            {!! $qrCode !!}
                            <p>Scan the QR code to update your points.</p>

                            <form action="{{ route('updateUserPoints') }}" method="post">
                                @csrf
                                <input type="hidden" name="userId" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="points" value="10">
                                <button type="submit">Update Points</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
