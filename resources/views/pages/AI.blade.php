<x-app-layout>
    <x-slot name="sidebar">
        @include('components.sidebar')
    </x-slot>

    <div class="flex-grow flex justify-center items-center pt-0">
        <div class="max-w-4xl w-full h-full flex flex-col">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 flex-grow flex flex-col justify-between relative" style="margin-top: -10px;">
                <div>
                    <div class="text-center text-gray-900 dark:text-gray-100 mb-8">
                        <div class="flex items-center justify-center mb-4">
                            <img src="{{ asset('images/dog.png') }}" alt="Dog Icon" class="w-12 h-12 mr-2">
                            <h1 class="text-3xl font-bold text-blue-600">สวัสดี</h1>
                        </div>
                        <p class="text-xl">มีอะไรอยากถามน้องไซ หรือ ให้น้องไซช่วยเหลือไหมครับ !</p>
                        <p class="mt-4">น้องไซสามารถทำได้หลายอย่างนะ !</p>
                        <p>คุณสามารถส่งมาให้น้องไซได้เลยนะ โฮ่งๆ !</p>
                    </div>

                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mt-8">
                        <!-- Card 1: Analyze Dangerous Files -->
                        <div class="bg-blue-700 text-white p-6 rounded-lg flex flex-col items-center justify-center text-center">
                            <i class="fi fi-rr-document-alert text-5xl mb-3"></i>
                            <p class="font-semibold">วิเคราะห์ไฟล์อันตราย</p>
                        </div>
                        <!-- Card 2: Analyze Fake Emails -->
                        <div class="bg-blue-700 text-white p-6 rounded-lg flex flex-col items-center justify-center text-center">
                            <i class="fi fi-rr-envelope-open-text text-5xl mb-3"></i>
                            <p class="font-semibold">วิเคราะห์อีเมลปลอม</p>
                        </div>
                        <!-- Card 3: Check Fake Links -->
                        <div class="bg-blue-700 text-white p-6 rounded-lg flex flex-col items-center justify-center text-center">
                            <i class="fi fi-br-skull-crossbones text-5xl mb-3"></i>
                            <p class="font-semibold">ตรวจสอบลิงก์ปลอม</p>
                        </div>
                        <!-- Card 4: Analyze Profile -->
                        <div class="bg-blue-700 text-white p-6 rounded-lg flex flex-col items-center justify-center text-center">
                            <i class="fi fi-sr-chart-line-up text-5xl mb-3"></i>
                            <p class="font-semibold">วิเคราะห์โปรไฟล์</p>
                        </div>
                    </div>
                </div>

                <!-- Chat Input Area -->
                <div class="mt-8 flex items-center bg-gray-100 dark:bg-gray-700 rounded-lg p-3">
                    <input type="text" placeholder="พิมพ์เพื่อถามน้องไซได้เลย !" class="flex-grow bg-transparent border-none focus:ring-0 text-gray-900 dark:text-gray-100 placeholder-gray-500">
                    <button class="ml-4 text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">
                        <i class="fi fi-rr-picture text-xl"></i>
                    </button>
                    <button class="ml-4 text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">
                        <i class="fi fi-rr-paperclip text-xl"></i>
                    </button>
                    <button class="ml-4 text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">
                        <i class="fi fi-rr-smile text-xl"></i>
                    </button>
                    <button class="ml-4 text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">
                        <i class="fi fi-rr-microphone text-xl"></i>
                    </button>
                    <button class="ml-4 bg-blue-600 hover:bg-blue-500 text-white p-3 rounded-full flex items-center justify-center">
                        <i class="fi fi-rr-paper-plane text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
