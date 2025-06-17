<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('RBCA - Role Based Access Control') }}
        </h2>
    </x-slot>    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Success/Error Messages -->
            @if (session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative dark:bg-green-800 dark:border-green-600 dark:text-green-100" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            @if (session('error'))
                <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative dark:bg-red-800 dark:border-red-600 dark:text-red-100" role="alert">
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">All Users</h3>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Image</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Name</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Email</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Roles</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('storage/' . ($user->profile_image ?? 'images/default_profile.png')) }}" alt="{{ $user->name }}" />
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">{{ $user->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">{{ $user->email }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                            @foreach ($user->roles as $role)
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-700 dark:text-green-100">{{ $role->name }}</span>
                                            @endforeach
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <div class="flex space-x-2">
                                                <form method="POST" action="{{ route('admin.users.updateRole', $user) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <select name="role" onchange="this.form.submit()" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                                        @foreach ($roles as $role)
                                                            <option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>{{ $role->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </form>

                                                <form method="POST" action="{{ route('admin.users.toggleBan', $user) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="px-3 py-2 rounded-md text-white {{ $user->isBanned() ? 'bg-yellow-500 hover:bg-yellow-600' : 'bg-red-500 hover:bg-red-600' }}">
                                                        {{ $user->isBanned() ? 'Unban' : 'Ban' }}
                                                    </button>
                                                </form>

                                                {{-- Add similar forms for timeout, lock/unlock account --}}
                                                <form method="POST" action="{{ route('admin.users.toggleLock', $user) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="px-3 py-2 rounded-md text-white {{ $user->isLocked() ? 'bg-green-500 hover:bg-green-600' : 'bg-purple-500 hover:bg-purple-600' }}">
                                                        {{ $user->isLocked() ? 'Unlock' : 'Lock' }}
                                                    </button>
                                                </form>                                                <form method="POST" action="{{ route('admin.users.timeout', $user) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="px-3 py-2 rounded-md text-white {{ $user->isTimedOut() ? 'bg-blue-500 hover:bg-blue-600' : 'bg-gray-500 hover:bg-gray-600' }}">
                                                        {{ $user->isTimedOut() ? 'Clear Timeout' : 'Set Timeout' }}
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
